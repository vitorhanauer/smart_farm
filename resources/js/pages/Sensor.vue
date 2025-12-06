<script setup>
import { Bubbles, Droplet, Leaf, Sun, Thermometer, Wind } from "lucide-vue-next";
import AppLayout from '../components/layout/AppLayout.vue';
import Header from '../components/layout/Header.vue';
import Table from '../components/Table.vue';
import StatsGrid from "../components/stats/StatGrid.vue";
import StatCard from "../components/stats/StatCard.vue";
import { usePage } from '@inertiajs/vue3';
import { onMounted, ref } from 'vue';
import { updateSensors } from '../fetchData';

const page = usePage()

const ESP32_IP = page.props.espIp;
let data = ref(Object);

onMounted(async () => {
  data.value = await updateSensors(ESP32_IP);
  setInterval(async () => {
    data.value = await updateSensors(ESP32_IP);
  }, 1000)
})

defineProps({
    datas: Array
});
</script>

<template>
    <AppLayout>
        <Header title="Sensores" desc="Monitoramento dos sensores da Smart Farm"></Header>
        <StatsGrid>
            <StatCard title="Temperatura" :value="data.temperature" unit="°C" :icon="Thermometer"></StatCard>
            <StatCard title="Umidade" :value="data.humidity" unit="%" :icon="Bubbles"></StatCard>
            <StatCard title="Vapor" :value="data.steam" unit="%" :icon="Wind"></StatCard>
            <StatCard title="Luminosidade" :value="data.light" unit="lux" :icon="Sun"></StatCard>
            <StatCard title="Solo" :value="data.soil" unit="%" :icon="Leaf"></StatCard>
            <StatCard title="Agua" :value="data.water" unit="%" :icon="Droplet"></StatCard>
        </StatsGrid>
        <Table :datas="datas"></Table>
    </AppLayout>
</template>
