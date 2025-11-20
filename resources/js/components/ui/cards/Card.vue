<template>
    <div class="card">
        <slot />
    </div>
</template>

<style scoped>
.card {
  color: white;
  display: flex;
  flex-direction: column;
  background: var(--bg-color-dark);
  padding: 18px;
  border-radius: 12px;
  box-shadow: 0 2px 6px rgba(0,0,0,0.06);
}
</style>