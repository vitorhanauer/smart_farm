<script setup>
import { Line } from 'vue-chartjs'
import {
    Chart as ChartJS,
    CategoryScale,
    LinearScale,
    PointElement,
    LineElement,
    Legend,
    Tooltip
} from 'chart.js'
import { ref, watch, markRaw } from 'vue'

ChartJS.register(CategoryScale, LinearScale, PointElement, LineElement, Legend, Tooltip)

const props = defineProps({
    temperature: Number,
    humidity: Number,
    steam: Number,
    light: Number,
    soil: Number,
    water: Number
})

// estrutura base não reativa
const base = {
    labels: [],
    datasets: [
        { label: 'Temperatura', borderColor: 'red', data: [] },
        { label: 'Umidade', borderColor: 'cyan', data: [] },
        { label: 'Vapor', borderColor: 'purple', data: [] },
        { label: 'Luminosidade', borderColor: 'yellow', data: [] },
        { label: 'Solo', borderColor: 'brown', data: [] },
        { label: 'Água', borderColor: 'blue', data: [] }
    ]
}

// chartData é reativo, MAS o conteúdo não é
const chartData = ref(markRaw(structuredClone(base)))

const chartOptions = markRaw({
    responsive: true,
    scales: {
        y: {
            min: 0,
            max: 100,
            grace: '5%',
        },
    },
    maintainAspectRatio: false,
})

const MAX_POINTS = 40

function updateData(cb) {
    // atualiza arrays
    cb(chartData.value)

    // força Vue-chartjs a redesenhar: troca a referência
    chartData.value = markRaw(structuredClone(chartData.value))
}

function addTimestamp() {
    const ts = new Date().toLocaleTimeString()
    updateData(data => {
        data.labels.push(ts)
        if (data.labels.length > MAX_POINTS) data.labels.shift()
    })
}

function pushValue(index, v) {
    updateData(data => {
        data.datasets[index].data.push(v)
        if (data.datasets[index].data.length > MAX_POINTS) {
            data.datasets[index].data.shift()
        }
    })
}

watch(() => props.temperature, v => {
    if (v == null) return
    addTimestamp()
    pushValue(0, v)
})
watch(() => props.humidity, v => v != null && pushValue(1, v))
watch(() => props.steam, v => v != null && pushValue(2, v))
watch(() => props.light, v => v != null && pushValue(3, v))
watch(() => props.soil, v => v != null && pushValue(4, v))
watch(() => props.water, v => v != null && pushValue(5, v))
</script>

<template>
        <Line :data="chartData" :options="chartOptions" />
</template>
