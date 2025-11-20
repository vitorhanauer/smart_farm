<script setup>
import { ref } from 'vue';

 
async function updateSensors() {
    try {
        const res = await fetch('http://localhost:8000/data');
        const data = await res.json();
        return data;
    } catch (error) {
    }
}

let dataList = ref([]);

setInterval(async () => {
    let date = new Date();
    let data = await updateSensors();
    data.date = `${date.getHours()}:${date.getMinutes()}:${date.getSeconds()} `;
    if(dataList.value.length == 10) dataList.value.pop();
    dataList.value.unshift(data);
}, 1000)
</script>

<template>
    <table class="table-auto border-separate border-spacing-5">
        <thead>
            <tr>
                <th>Horário</th>
                <th>Temperatura</th>
                <th>Umidade</th>
                <th>Vapor</th>
                <th>Luz</th>
                <th>Solo</th>
                <th>Chuva</th>
            </tr>
        </thead>
        <tbody>
            <tr v-for="data in dataList">
                <td>{{ data.date }}</td>
                <td>{{ data.temperature }}</td>
                <td>{{ data.humidity }}</td>
                <td>{{ data.steam }}</td>
                <td>{{ data.light }}</td>
                <td>{{ data.soil }}</td>
                <td>{{ data.water }}</td>
            </tr>
        </tbody>
    </table>
</template>

<style scoped>
td{
    margin-left: 10px;
}
</style>