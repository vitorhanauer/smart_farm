<script setup>
import Sidebar from './Sidebar.vue';
</script>

<template>
    <div class="container">
        <Sidebar></Sidebar>

        <main class="main-content">
            <slot />
        </main>
    </div>
</template>

<style scoped>
.container {
    display: flex;
    min-height: 100vh;
}

.main-content {
    background-color: #d3edf0;
    flex: 1;
    margin-left: 260px;
    padding: 2rem;
}
</style>