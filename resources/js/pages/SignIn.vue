<script setup>
import Input from '../components/sign/Input.vue';
import Button from '../components/sign/Button.vue';
import AccountButton from '../components/sign/AccountButton.vue'; 
import { Form } from '@inertiajs/vue3';
</script>

<template>
    <div class="container">
        <div class="planta"><img src="/public/logo_fundo_azul.png" alt=""></div>
        <h1>Bem-vindo</h1>
        <p class="subtitle">Entre para cuidar das suas plantas</p>

        <Form method="POST">
            <Input icon="👤" placeholder=" Email" inputName="email" inputType="email" :inputRequired="true"/>
            <Input icon="🔒" placeholder=" Senha" inputName="password" inputType="password" :inputRequired="true"/>
            <Button>Entrar</Button>
        </Form>

        <div class="divider">
            <hr>
            <span>ou</span>
            <hr>
        </div>

        <div class="accounts-row">
            <AccountButton imgLink="https://cdn-icons-png.flaticon.com/512/0/747.png" />
            <AccountButton
                imgLink="https://upload.wikimedia.org/wikipedia/commons/thumb/c/c1/Google_%22G%22_logo.svg/768px-Google_%22G%22_logo.svg.png" />
            <AccountButton imgLink="https://www.pngall.com/wp-content/uploads/2/Windows-Logo-PNG-Free-Image.png" />
        </div>

        <p class="login">Não tem uma conta?
            <a href="/cadastrar" style="color: var(--text-color-dark); font-weight: bold;">Cadastre-se</a>
        </p>
    </div>
</template>

<style scoped>
.container {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    font: var(--font-primary);
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    background-color: #F7FCFD;
    width: 450px;
    padding: var(--spacing-md);
    border-radius: 30px;
    box-shadow: 0 32px 44px rgba(0, 0, 0, 0.15);
}

p {
    font-size: var(--font-size-md);
    margin: var(--spacing-sm) 0;
    color: var(--text-color-light);
    width: 100%;
    padding: 0 var(--spacing-md);
    box-sizing: border-box;
    margin: 0px;
}

h1 {
    color: var(--text-color-dark);
    margin: 0;
    font-weight: bold;
}

.planta {
    width: 125px;
    height: 125px;
    margin: 25px 0px;
}

.planta img{
    border-radius: 25px;
    width: 100%;
    height: 100%;
}

.subtitle {
    font-size: var(--font-size-md);
    color: var(--text-color-medium);
    margin-bottom: var(--spacing-sm);
    text-align: center;
}

.login {
    text-align: center;
    margin-top: 35px;
    margin-bottom: 0px;
}

.login p {
    font-size: var(--font-size-md);
    color: var(--text-color-medium);
}

.accounts-row {
    display: flex;
    flex-direction: row;
    gap: 12px;
    justify-content: center;
    align-items: center;
    width: 100%;
    margin-top: var(--spacing-sm);
}

.divider {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 12px;
    width: 95%;
    margin: 0px 0;
    color: var(--text-color-medium);
    font-weight: 500;
}

.divider hr{
    width: 100%;
    border: var(--text-color-medium) 1px solid;
}

.divider span {
    display: inline-block;
    padding: 0 6px;
    z-index: 2;
    background: transparent;
}
</style>
