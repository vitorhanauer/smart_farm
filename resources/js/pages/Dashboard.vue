<script setup>
import { Bubbles, Droplet, Leaf, Sun, Thermometer, Wind } from "lucide-vue-next";
import Header from "../components/layout/Header.vue";
import AppLayout from "../components/layout/AppLayout.vue"
import ChartGrid from "../components/layout/ChartGrid.vue";
import StatsGrid from "../components/stats/StatGrid.vue";
import StatCard from "../components/stats/StatCard.vue";
import { onMounted, ref } from 'vue';

async function updateSensors() {
  try {
    const res = await fetch('http://localhost:8000/data');
    const data = await res.json();
    return data;
  } catch (error) {
  }
}

let data = ref(Object);

onMounted(async () => {
  data.value =  await updateSensors();
  
  setInterval(async () => {
    data.value = await updateSensors();
  }, 10000)
})
</script>

<template>
  <AppLayout>
    <Header title="Dashboard" desc="Monitoramento em tempo real dos dispositivos IoT da Smart Farm"></Header>

    <StatsGrid>
      <StatCard title="Temperatura" :value="data.temperature" unit="°C" :icon="Thermometer"></StatCard>
      <StatCard title="Umidade" :value="data.humidity" unit="%" :icon="Bubbles"></StatCard>
      <StatCard title="Vapor" :value="data.steam" unit="%" :icon="Wind"></StatCard>
      <StatCard title="Luminosidade" :value="data.light" unit="lux" :icon="Sun"></StatCard>
      <StatCard title="Solo" :value="data.soil" unit="%" :icon="Leaf"></StatCard>
      <StatCard title="Agua" :value="data.water" unit="%" :icon="Droplet"></StatCard>
    </StatsGrid>

    <ChartGrid></ChartGrid>
  </AppLayout>
</template>

<style scoped></style>
