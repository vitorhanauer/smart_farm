<script setup>
import { History, LayoutDashboard, LogOut, Settings, SunSnow, Tractor, Users } from 'lucide-vue-next';
const url = window.location.pathname;

function setActive(path) {
    return url == path ? 'active' : '';
}

</script>

<template>
    <div class="sidebar">
        <div class="sidebar-header">
            <h2>IoT Monitor</h2>
            <p>Sistema de Monitoramento</p>
        </div>
        <nav>
            <div class="menu-item" :class="setActive('/')">
                <LayoutDashboard />
                <a href="/">Dashboard</a>
            </div>
            <div class="menu-item" :class="setActive('/sensores')">
                <SunSnow />
                <a href="/sensores">Sensores</a>
            </div>
            <div class="menu-item" :class="setActive('/atuadores')">
                <Tractor />
                <a href="/atuadores">Atuadores</a>
            </div>
            <div class="menu-item" :class="setActive('/historico')">
                <History />
                <a href="/historico">Histórico</a>
            </div>
            <div class="menu-item" :class="setActive('/equipe')">
                <Users />
                <a href="/equipe">Equipe</a>
            </div>
            <div class="menu-item" :class="setActive('/configuracoes')">
                <Settings />
                <a href="/configuracoes">Configurações</a>
            </div>
            <div class="menu-item logout">
                <LogOut />
                <span>Sair</span>
            </div>
        </nav>
    </div>
</template>

<style scoped>
.sidebar {
    width: 260px;
    background: linear-gradient(180deg, #1B9AAA 0%, #158a99 100%);
    color: white;
    padding: 2rem 0;
    box-shadow: 4px 0 12px rgba(0, 0, 0, 0.1);
    position: fixed;
    height: 100vh;
    overflow-y: auto;
    z-index: 1000;
}

.sidebar-header {
    padding: 0 1.5rem 2rem;
    border-bottom: 1px solid rgba(255, 255, 255, 0.2);
    margin-bottom: 2rem;
}

.sidebar-header h2 {
    font-size: 1.5rem;
}

.sidebar-header p {
    font-size: 0.875rem;
    opacity: 0.8;
    margin-top: 0.5rem;
}

.menu-item {
    padding: 1rem 1.5rem;
    display: flex;
    gap: 12px;
    align-items: center;
    cursor: pointer;
    transition: all 0.3s;
    border-left: 4px solid transparent;
}

.menu-item a{
    color: white;
    text-decoration: none;
}

.menu-item:hover {
    background: rgba(255, 255, 255, 0.1);
    border-left-color: #A0E3EA;
}

.menu-item.active {
    background: rgba(255, 255, 255, 0.15);
    border-left-color: #A0E3EA;
    font-weight: 600;
}

.menu-item.logout {
    margin-top: 2rem;
    border-top: 1px solid rgba(255, 255, 255, 0.2);
    padding-top: 2rem;
}
</style>