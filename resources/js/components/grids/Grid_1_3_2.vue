<script setup></script>

<template>
    <div class="grid">
        <slot />
    </div>
</template>

<style scoped>
.grid {
    display: grid;
    grid-template-columns: .5fr 1.5fr 1fr;
    gap: 1.5rem;
    margin-bottom: 1.5rem;
}
</style>