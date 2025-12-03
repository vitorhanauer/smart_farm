<script setup>
import { Equal, TrendingDown, TrendingUp } from 'lucide-vue-next';
import { ref, watch } from 'vue';
const props = defineProps({
    icon: Object,
    title: String,
    value: String,
    unit: String,
});

const percentage = ref(0);

watch(
    () => props.value,
    (newValue, oldValue = newValue) => {
        percentage.value = Number(newValue) - Number(oldValue);
    }
);

function checkPercentage(percentage){
    if(percentage > 0) return 'up';
    if(percentage < 0) return 'down';
    return null;
}

</script>

<template>
    <div class="stat-card">
        <Thermometer />
        <div class="stat-icon">
            <component :is="icon" />
        </div>
        <div class="stat-label">{{ title }}</div>
        <div class="stat-value">
            {{ value }}
            <span class="stat-unit">{{ unit }}</span>
        </div>
        <div class="stat-trend" :class="checkPercentage(percentage)">
            <TrendingUp :size="16" v-if="percentage > 0" /> 
            <TrendingDown :size="16" v-else-if="percentage < 0"/>
            <Equal :size="16" v-else />
            {{ percentage }}{{ unit }}
        </div>
    </div>
</template>

<style scoped>
.stat-card {
    background: white;
    padding: 1.5rem;
    border-radius: 12px;
    box-shadow: 0 2px 8px rgba(27, 154, 170, 0.1);
    transition: all 0.3s;
    cursor: pointer;
}

.stat-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 8px 16px rgba(27, 154, 170, 0.2);
}

.stat-icon {
    width: 50px;
    height: 50px;
    background: #A0E3EA;
    border-radius: 10px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 1rem;
    font-weight: bold;
    color: #1B9AAA;
    font-size: 1.2rem;
}

.stat-label {
    font-size: 0.875rem;
    color: #666;
    margin-bottom: 0.5rem;
}

.stat-value {
    font-size: 1.75rem;
    font-weight: bold;
    color: #1B9AAA;
    display: flex;
    align-items: baseline;
    gap: 0.25rem;
}

.stat-unit {
    font-size: 1rem;
    font-weight: normal;
    color: #666;
}

.stat-trend {
    display: inline-flex;
    align-items: center;
    gap: 0.25rem;
    font-size: 0.875rem;
    margin-top: 0.5rem;
    padding: 0.25rem 0.5rem;
    border-radius: 4px;
    background: #e9e9e9;
    color: #919191;
}

.stat-trend.up {
    background: #d1fae5;
    color: #059669;
}

.stat-trend.down {
    background: #fee2e2;
    color: #dc2626;
}
</style>