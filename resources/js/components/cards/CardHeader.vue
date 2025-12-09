<script setup></script>

<template>
    <div class="card-header">
        <slot />
    </div>
</template>

<style scoped>
.card-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 1.5rem;
}
</style>