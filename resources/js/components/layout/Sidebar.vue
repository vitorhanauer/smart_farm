<script setup>
import { History, LayoutDashboard, LogOut, Settings, SunSnow, Tractor, Users } from 'lucide-vue-next';
const url = window.location.pathname;

function setActive(path){
    return url == path ? 'active': '';
}

</script>

<template>
    <aside class="sidebar">
        <div>
            <h2 class="logo">Smart Farm App</h2>
            <nav>
                <ul>
                    <li :class="setActive('/')">
                        <LayoutDashboard /><a href="/">Dashboard</a>
                    </li>
                    <li :class="setActive('/sensores')">
                        <SunSnow /><a href="/sensores">Sensores</a>
                    </li>
                    <li :class="setActive('/atuadores')">
                        <Tractor /><a href="/atuadores">Atuadores</a>
                    </li>
                    <li :class="setActive('/historico')">
                        <History /><a href="/historico">Histórico</a>
                    </li>
                    <li :class="setActive('/equipe')">
                        <Users /><a href="/equipe">Equipe</a>
                    </li>
                    <li :class="setActive('/configuracoes')">
                        <Settings /><a href="/configuracoes">Configurações</a>
                    </li>
                    <li style="color: oklch(57.7% 0.245 27.325)">
                        <LogOut /><a href="/">Sair</a>
                    </li>
                </ul>
            </nav>
        </div>
        <div>
            <p>Version 1.0</p>
        </div>
    </aside>
</template>

<style scoped>
.sidebar {
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    width: 230px;
    background: var(--bg-color-dark);
    color: white;
    padding: 24px;
    display: flex;
    flex-direction: column;
    gap: 24px;
}

.sidebar .logo {
    font-size: var(--font-size-lg);
    margin-bottom: 12px;
}

.sidebar ul {
    list-style: none;
    padding: 0;
}

.sidebar li {
    display: flex;
    align-items: center;
    gap: var(--spacing-sm);
    padding: var(--spacing-sm);
    margin: var(--spacing-sm) 0;
    text-decoration: none;
    font-size: var(--font-size-md);
    font-weight: bold;
    border-radius: 6px;
    cursor: pointer;
    transition: 0.3s;
}

.sidebar li:hover,
.sidebar li.active {
    background: var(--bg-color-light);
    color: var(--bg-color-dark);
}
</style>