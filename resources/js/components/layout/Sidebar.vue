<script setup>
import { Form } from '@inertiajs/vue3';
import { History, LayoutDashboard, LogOut, Settings, SunSnow, Tractor, Users } from 'lucide-vue-next';
import Button from '../sign/Button.vue';
const url = window.location.pathname;

function setActive(path) {
    return url == path ? 'active' : '';
}

</script>

<template>
    <div class="sidebar">
        <div class="sidebar-header">
            <img src="/public/logo.png" alt="">
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
            <!-- <div class="menu-item" :class="setActive('/configuracoes')">
                <Settings />
                <a href="/configuracoes">Configurações</a>
            </div> -->
            <div class="menu-item logout">
                <LogOut />
                <Form method="post" action="/sair">
                    <button class="btn-exit">Sair</button>
                </Form>
            </div>
        </nav>
    </div>
</template>

<style scoped>
.sidebar {
    width: 260px;
    background: linear-gradient(180deg, #1B9AAA 0%, #158a99 100%);
    color: white;
    box-shadow: 4px 0 12px rgba(0, 0, 0, 0.1);
    position: fixed;
    padding: 24px 0px;
    height: 100vh;
    overflow-y: auto;
    z-index: 1000;
}

.sidebar-header {
    display: flex;
    flex-direction: column;
    align-items: center;
    padding: 0 1.5rem 2rem;
    border-bottom: 1px solid rgba(255, 255, 255, 0.2);
    margin-bottom: 2rem;
}

.sidebar-header img{
    background-color: white;
    border-radius: 50px;
    margin: auto;
    width: 75px;
    height: 75px;
}

.sidebar-header h2 {
    font-size: 1.5rem;
}

.sidebar-header p {
    font-size: 0.875rem;
    opacity: 0.8;
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
    border-top: 1px solid rgba(255, 255, 255, 0.2);
}

.btn-exit{
    background-color: transparent;
    color: white;
    font-family: var(--font-family);
    border: none;
    font-size: 1rem;
    cursor: pointer;
}
</style>