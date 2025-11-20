<script setup>
defineProps({
    username: String,
});
</script>
<template>
    <header class="header">
      <h1>Olá {{ username }}, Seja bem-vindo ao controle da sua Smart Farm</h1>
    </header>
</template>

<style scoped>
.header{
  background-color: var(--bg-color-dark);
  padding: var(--spacing-sm);
  text-align: center;
  border-radius: var(--spacing-sm);
}

.header h1{
  color: white;
  font-size: var(--font-size-xl);
  font-weight: bold;
}
</style>

