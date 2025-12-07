<template>
    <p class="pinput" for="role">Selecione sua Função:</p>
    <select name="role" id="role">
        <option value="student">Aluno</option>
        <option value="teacher">Professor</option>
    </select>
</template>

<style scoped>
select {
    width: 95%;
    font-size: 1em;
    padding: 10px 24px;
    border: none;
    border-radius: 13px;
    cursor: text;
    background-color: #E0F7FA;
    color: var(--text-color-light);
    transition: background-color 0.3s ease;
    box-sizing: border-box;
    font-family: inherit;
}

.pinput {
    font-size: var(--font-size-md);
    margin: 8px 0;
    color: var(--text-color-dark);
    width: 100%;
    padding: 0 var(--spacing-md);
    box-sizing: border-box;
}
</style>