<script setup>
import Sidebar from './Sidebar.vue';
</script>

<template>
    <div class="dashboard">
        <Sidebar></Sidebar>

        <main class="content">
            <slot />
        </main>
    </div>
</template>

<style scoped>
.dashboard {
    display: flex;
    height: 100vh;
    font-family: sans-serif;
    background: var(--bg-color-body);
}

.content {
    flex: 1;
    padding: 24px;
    display: flex;
    flex-direction: column;
    gap: 24px;
}
</style>