<script setup>
import AppLayout from '../components/layout/AppLayout.vue';
import Header from '../components/layout/Header.vue';
import ChartGrid from "../components/layout/ChartGrid.vue";
import { onMounted, ref } from 'vue';
import { usePage } from '@inertiajs/vue3'
import { updateSensors } from "../fetchData";

const page = usePage()

const ESP32_IP = page.props.espIp;
let data = ref(Object);

const interval = ref(null);
const time = ref(10000);

onMounted(async () => {
  data.value = await updateSensors(ESP32_IP);
  changeTime(time.value);
})

function changeTime(payload) {
  clearInterval(interval.value);
  interval.value = setInterval(async () => {
    data.value = await updateSensors(ESP32_IP);
  }, payload)
}

</script>

<template>
    <AppLayout>
        <Header title="Atuadores" desc="Acionamento dos atuadores da Smart Farm"></Header>
        <ChartGrid v-on:update-time="changeTime" :temperature="data.temperature" :humidity="data.humidity"
      :steam="data.steam" :light="data.light" :soil="data.soil" :water="data.water"></ChartGrid>
    </AppLayout>
</template>

