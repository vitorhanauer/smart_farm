<template>
  <p class="pinput">{{ placeholder }}:</p>
  <input :placeholder="icon + '  ' + placeholder"/>
</template>

<script>
export default {
  name: "Input",
  props: {
    placeholder: {
      type: String,
      default: ''
    },
    icon: {
      type: String,
      default: ''
    }
  }
}
</script>

<style scoped>
input {
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

input:hover {
    background-color: #97dce4;
    color: #ffffff;
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