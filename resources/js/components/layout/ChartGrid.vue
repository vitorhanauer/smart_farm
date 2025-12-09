<script setup>
import { usePage } from '@inertiajs/vue3'
import Model3d from '../Model3d.vue';
import { ref, watch } from 'vue';
import Chart from '../chart/Chart.vue';
import Card from '../cards/Card.vue';
import CardHeader  from '../cards/CardHeader.vue';
import CardTitle  from '../cards/CardTitle.vue';
import Grid from '../grids/Grid_1_3_2.vue';
const page = usePage()
const ESP32_IP = page.props.espIp;

const time = ref(10000);

async function sendCmd(cmd) {
    try {
        await fetch(`${ESP32_IP}/actuator?cmd=${cmd}`);
        console.log("Comando enviado: ", cmd);
    } catch (error) {
        console.warn("Erro ao enviar comando: ", error);
    }
}

const emit = defineEmits(['update-time']);
watch(time, (newValue) => {
    emit('update-time', newValue);
})

const props = defineProps({
    temperature: null,
    humidity: null,
    steam: null,
    light: null,
    soil: null,
    water: null,
});
</script>

<template>
    <Grid>
            <!-- Command Buttons -->
            <Card>
                <CardHeader>
                    <CardTitle>Ações</CardTitle>
                </CardHeader>
                <div>
                    <ul class="button-list">
                        <li><button @click="sendCmd('LED')">LED</button></li>
                        <li><button @click="sendCmd('FAN')">Ventilador</button></li>
                        <li><button @click="sendCmd('FEED')">Alimentar</button></li>
                        <li><button @click="sendCmd('WATER')">Regar</button></li>
                    </ul>
                </div>
            </Card>
            <!-- Line Chart Placeholder -->
            <Card>
                <CardHeader>
                    <CardTitle>Histórico de Sensores</CardTitle>
                    <div class="time-selector">
                        <button class="time-btn" :class="time == 1000 ? 'active' : ''" @click="time = 1000">1s</button>
                        <button class="time-btn" :class="time == 5000 ? 'active' : ''" @click="time = 5000">5s</button>
                        <button class="time-btn" :class="time == 10000 ? 'active' : ''" @click="time = 10000">10s</button>
                        <button class="time-btn" :class="time == 20000 ? 'active' : ''" @click="time = 20000">20s</button>
                    </div>
                </CardHeader>
                <div class="chart-placeholder">
                    <Chart :temperature="temperature" :humidity="humidity" :steam="steam" :light="light" :soil="soil"
                        :water="water" />
                </div>
            </Card>
            <!-- 3D Model Placeholder -->
            <Card>
                <CardHeader>
                        <CardTitle>Visualização 3D</CardTitle>
                </CardHeader>
                <div class="model-3d-container">
                    <Model3d />
                </div>
            </Card>
    </Grid>
</template>

<style scoped>
.button-list {
    list-style: none;
    display: flex;
    flex-direction: column;
    gap: 16px;
}

.button-list button {
    background-color: #1B9AAA;
    width: 100%;
    color: white;
    border: none;
    font-size: 16px;
    font-weight: 600;
    border-radius: 12px;
    padding: 16px;
    cursor: pointer;
    transition: transform 0.5s;
}

.button-list button:hover {
    transform: scale(1.05);
    box-shadow: 0 8px 16px rgba(27, 154, 170, 0.2);
}

.time-selector {
    display: flex;
    gap: 0.5rem;
}

.time-btn {
    padding: 0.5rem 1rem;
    border: none;
    border-radius: 6px;
    background: #d3edf0;
    color: #1B9AAA;
    cursor: pointer;
    transition: all 0.3s;
    font-size: 0.875rem;
    font-weight: 500;
}

.time-btn:hover {
    background: #A0E3EA;
}

.time-btn.active {
    background: #1B9AAA;
    color: white;
}

.chart-placeholder {
    height: 400px;
    background: linear-gradient(135deg, #d3edf0 0%, #A0E3EA 100%);
    border-radius: 8px;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    gap: 1rem;
    border: 2px dashed #1B9AAA;
}

.chart-placeholder p {
    color: #1B9AAA;
    font-weight: 500;
}

.model-3d-container {
    height: 400px;
    background: linear-gradient(135deg, #d3edf0 0%, #A0E3EA 100%);
    border-radius: 8px;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    gap: 1rem;
    border: 2px dashed #1B9AAA;
}

.model-3d-container p {
    color: #1B9AAA;
    font-weight: 500;
}
</style>