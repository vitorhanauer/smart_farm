<script setup>
defineProps({
    datas: Array
});
</script>

<template>
    <div class="table-container">
        <div class="table-wrapper">
            <table>
                <thead>
                    <tr>
                        <th>Temperatura</th>
                        <th>Umidade</th>
                        <th>Vapor</th>
                        <th>Luminosidade</th>
                        <th>Solo</th>
                        <th>Água</th>
                        <th>Data da Leitura</th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-if="datas.length > 0" v-for="(data, index) in datas" :key="index">
                        <td>{{ data.temperature }}</td>
                        <td>{{ data.humidity }}</td>
                        <td>{{ data.steam }}</td>
                        <td>{{ data.light }}</td>
                        <td>{{ data.soil }}</td>
                        <td>{{ data.water }}</td>
                        <td>{{ data.created_at }}</td>
                    </tr>
                    <tr v-else class="empty-state">
                        <td colspan="7">Nenhum dado disponível</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</template>

<style scoped>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background: #d3edf0;
    padding: 2rem;
}

.table-container {
    max-width: 1200px;
    margin: 0 auto;
    background: white;
    border-radius: 12px;
    box-shadow: 0 2px 8px rgba(27, 154, 170, 0.1);
    overflow: hidden;
}

.table-header {
    background: linear-gradient(135deg, #1B9AAA 0%, #158a99 100%);
    color: white;
    padding: 1.5rem;
}

.table-header h2 {
    font-size: 1.5rem;
    margin-bottom: 0.5rem;
}

.table-header p {
    font-size: 0.875rem;
    opacity: 0.9;
}

.table-wrapper {
    max-height: 500px;
    overflow-y: auto;
}

.table-wrapper::-webkit-scrollbar {
    width: 8px;
}

.table-wrapper::-webkit-scrollbar-track {
    background: #f1f1f1;
}

.table-wrapper::-webkit-scrollbar-thumb {
    background: #A0E3EA;
    border-radius: 4px;
}

.table-wrapper::-webkit-scrollbar-thumb:hover {
    background: #1B9AAA;
}

table {
    width: 100%;
    border-collapse: collapse;
}

thead {
    background: #A0E3EA;
    position: sticky;
    top: 0;
    z-index: 10;
}

thead th {
    padding: 1rem;
    text-align: left;
    font-weight: 600;
    color: #1B9AAA;
    font-size: 0.875rem;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    white-space: nowrap;
}

tbody tr {
    border-bottom: 1px solid #e5e7eb;
    transition: all 0.3s;
}

tbody tr:hover {
    background: #d3edf0;
}

tbody tr:last-child {
    border-bottom: none;
}

tbody td {
    padding: 1rem;
    color: #333;
}

tbody tr.empty-state td {
    text-align: center;
    padding: 3rem;
    color: #666;
    font-style: italic;
}

@media (max-width: 768px) {
    body {
        padding: 1rem;
    }

    .table-wrapper {
        max-height: 400px;
    }

    table {
        font-size: 0.875rem;
    }

    thead th,
    tbody td {
        padding: 0.75rem 0.5rem;
    }
}
</style>