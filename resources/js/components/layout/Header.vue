<script setup>
defineProps({
    title: String,
    desc: null,
});
</script>

<template>
    <div class="header">
        <h1>{{ title }}</h1>
        <p>{{ desc }}</p>
    </div>
</template>

<style scoped>
.header {
    margin-bottom: 2rem;
}

.header h1 {
    color: #1B9AAA;
    font-size: 2rem;
    margin-bottom: 0.5rem;
    font-weight: bold;
}

.header p {
    color: #666;
}
</style>