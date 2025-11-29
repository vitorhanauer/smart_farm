<template>
    <button class="btn"><slot/></button>
</template>

<style scoped>
.btn {
    width: 95%;
    font-size: 1.1em;
    padding: 14px 24px;
    border: none;
    border-radius: 13px;
    cursor: pointer;
    background-color: var(--bg-color-dark);
    color: white;
    transition: background-color 0.3s ease;
    box-sizing: border-box;
    font-weight: 600;
    box-shadow: 0 4px 6px rgba(var(--text-color-light), 0.15);
    margin: 15px 0;
}

.btn:hover {
    background-color: #35767e;
}
</style>