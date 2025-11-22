<script setup>
</script>

<template>
    <div class="charts-grid">
        <!-- Line Chart Placeholder -->
        <div class="card">
            <div class="card-header">
                <div class="card-title">
                    Histórico de Sensores
                </div>
                <div class="time-selector">
                    <button class="time-btn">1h</button>
                    <button class="time-btn">6h</button>
                    <button class="time-btn active">24h</button>
                    <button class="time-btn">7d</button>
                </div>
            </div>
            <div class="chart-placeholder">
                <p>Área reservada para gráfico de linhas</p>
                <p style="font-size: 0.875rem; opacity: 0.7;">Gráfico será renderizado aqui</p>
            </div>
        </div>

        <!-- 3D Model Placeholder -->
        <div class="card">
            <div class="card-header">
                <div class="card-title">
                    Visualização 3D
                </div>
            </div>
            <div class="model-3d-container">
                <p>Área reservada para renderização 3D</p>
                <p style="font-size: 0.875rem; opacity: 0.7;">Modelo será carregado aqui</p>
            </div>
        </div>
    </div>
</template>

<style scoped>
.charts-grid {
    display: grid;
    grid-template-columns: 2fr 1fr;
    gap: 1.5rem;
    margin-bottom: 1.5rem;
}

.card {
    background: white;
    padding: 1.5rem;
    border-radius: 12px;
    box-shadow: 0 2px 8px rgba(27, 154, 170, 0.1);
}

.card-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 1.5rem;
}

.card-title {
    font-size: 1.25rem;
    font-weight: bold;
    color: #1B9AAA;
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
    height: 300px;
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