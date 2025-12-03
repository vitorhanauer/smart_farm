<script setup>
import { Bubbles, Droplet, Leaf, Sun, Thermometer, Wind } from "lucide-vue-next";
import Header from "../components/layout/Header.vue";
import AppLayout from "../components/layout/AppLayout.vue"
import ChartGrid from "../components/layout/ChartGrid.vue";
import StatsGrid from "../components/stats/StatGrid.vue";
import StatCard from "../components/stats/StatCard.vue";
import { onMounted, ref, watch } from 'vue';
import { usePage } from '@inertiajs/vue3'

const page = usePage()

const ESP32_IP = page.props.espIp;

const interval = ref(null);
const time = ref(10000);
let data = ref(Object);

async function updateSensors() {
  try {
    const res = await fetch(`${ESP32_IP}/sensors`);
    const data = await res.json();
    return data;
  } catch (error) {
  }
}

onMounted(async () => {
  data.value = await updateSensors();
  changeTime(time.value);
})

function changeTime(payload) {
  clearInterval(interval.value);
  interval.value = setInterval(async () => {
    data.value = await updateSensors();
  }, payload)
}
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

    <ChartGrid v-on:update-time="changeTime" :temperature="data.temperature" :humidity="data.humidity"
      :steam="data.steam" :light="data.light" :soil="data.soil" :water="data.water"></ChartGrid>
  </AppLayout>
</template>

<style scoped></style>
