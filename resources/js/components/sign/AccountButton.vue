<template>
    <img :src="imgLink" alt="Icon"/>
</template>

<script>
export default {
  name: "AccountButton",
  props: {
    imgLink: {
      type: String,
      default: ''
    }
  }
}
</script>

<style scoped>
img {
    width: 100px;
    height: 50px;
    padding: 10px 36px;
    border: var(--text-color-medium) 1px solid;
    border-radius: 13px;
    cursor: pointer;
    background-color: #ffffff;
    transition: background-color 0.3s ease;
    margin-inline: 10px;
}

img:hover {
    background-color: #f0f0f0;
}
</style>