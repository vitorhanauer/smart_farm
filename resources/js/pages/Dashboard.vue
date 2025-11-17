<template>
  <div class="dashboard">

    <!-- Sidebar -->
    <aside class="sidebar">
      <h2 class="logo">MeuApp</h2>
      <nav>
        <ul>
          <li :class="{ active: active === 'home' }" @click="active = 'home'">Home</li>
          <li :class="{ active: active === 'stats' }" @click="active = 'stats'">Estatísticas</li>
          <li :class="{ active: active === 'users' }" @click="active = 'users'">Usuários</li>
        </ul>
      </nav>
    </aside>

    <!-- Main content -->
    <main class="content">

      <!-- Header -->
      <header class="header">
        <h1>{{ title }}</h1>
        <input class="search" placeholder="Buscar…" />
      </header>

      <!-- Cards -->
      <section class="cards">
        <div class="card">
          <h3>Total de Usuários</h3>
          <p>{{ stats.users }}</p>
        </div>
        <div class="card">
          <h3>Vendas Hoje</h3>
          <p>R$ {{ stats.sales }}</p>
        </div>
        <div class="card">
          <h3>Atividades</h3>
          <p>{{ stats.activities }}</p>
        </div>
      </section>

      <!-- Content Area -->
      <section class="panel">
        <h2>Painel: {{ title }}</h2>
        <p>
          Esse é um conteúdo de exemplo. Aqui você pode colocar tabelas, gráficos,
          formulários ou qualquer outra parte do seu dashboard real.
        </p>
      </section>

    </main>
  </div>
</template>

<script setup>
import { ref, watch } from "vue"

const active = ref("home")
const title = ref("Home")

const stats = {
  users: 1280,
  sales: 3420,
  activities: 76,
}

watch(active, (v) => {
  if (v === "home") title.value = "Home"
  if (v === "stats") title.value = "Estatísticas"
  if (v === "users") title.value = "Usuários"
})
</script>

<style>
.dashboard {
  display: flex;
  height: 100vh;
  font-family: sans-serif;
  background: #f5f6fa;
}

/* Sidebar */
.sidebar {
  width: 230px;
  background: #1e1e2f;
  color: white;
  padding: 24px;
  display: flex;
  flex-direction: column;
  gap: 24px;
}

.sidebar .logo {
  font-size: 22px;
  margin-bottom: 12px;
}

.sidebar ul {
  list-style: none;
  padding: 0;
}

.sidebar li {
  padding: 10px;
  margin: 4px 0;
  border-radius: 6px;
  cursor: pointer;
  transition: 0.3s;
}

.sidebar li:hover,
.sidebar li.active {
  background: #34344a;
}

/* Main content */
.content {
  flex: 1;
  padding: 24px;
  display: flex;
  flex-direction: column;
  gap: 24px;
}

/* Header */
.header {
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.search {
  padding: 8px 12px;
  border-radius: 6px;
  border: 1px solid #d2d2d2;
  width: 200px;
}

/* Cards */
.cards {
  display: flex;
  gap: 18px;
}

.card {
  flex: 1;
  background: white;
  padding: 18px;
  border-radius: 12px;
  box-shadow: 0 2px 6px rgba(0,0,0,0.06);
}

.card h3 {
  font-size: 16px;
  margin-bottom: 8px;
}

.card p {
  font-size: 22px;
  font-weight: bold;
}

/* Panel */
.panel {
  background: white;
  padding: 24px;
  border-radius: 12px;
  box-shadow: 0 2px 6px rgba(0,0,0,0.06);
}
</style>
