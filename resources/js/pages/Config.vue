<script setup>
import { ref, watch } from 'vue';
import InputLabel from '../components/InputLabel.vue';
import AppLayout from '../components/layout/AppLayout.vue';
import Header from '../components/layout/Header.vue';
import { Form } from '@inertiajs/vue3';

const url = ref("http://localhost:8000");
const sensor = ref("/data");
const actuator = ref("/actuator");

</script>

<template>
    <AppLayout>
        <Header title="Configurações" desc="Configurações da aplicação"></Header>
        <Form action="/update" method="post">
            <InputLabel :model-value="url" @update:model-value="url" label="Url Completa" type="text" input-name="url"></InputLabel>
            <InputLabel :model-value="sensor" @update:model-value="url" label="Caminho para os Sensores" type="text" input-name="sensor"></InputLabel>
            <InputLabel :model-value="actuator" @update:model-value="url" label="Caminho para os Atuadores" type="text" input-name="actuator"></InputLabel>
            <button type="submit">Salvar</button>
        </Form>
    </AppLayout>
</template>