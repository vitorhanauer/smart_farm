<script setup></script>

<template>
    <div class="card">
        <slot />
    </div>
</template>

<style scoped>
.card {
    background: white;
    padding: 1.5rem;
    border-radius: 12px;
    box-shadow: 0 2px 8px rgba(27, 154, 170, 0.1);
}
</style>