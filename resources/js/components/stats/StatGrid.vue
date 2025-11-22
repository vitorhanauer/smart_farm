<template>
    <div class="stats-grid">
        <slot />
    </div>
</template>

<style scoped>
.stats-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 1.5rem;
    margin-bottom: 2rem;
}
</style>