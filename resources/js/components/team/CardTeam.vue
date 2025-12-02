<script setup>
defineProps({
    name: String,
    occupation: String,
    course: String,
    image: String
});
</script>

<template>
    <div class="card">
        <img :src="image" alt="">
        <div class="infos">
            <h3>{{ name }}</h3>
            <p>{{ occupation }}</p>
            <p>{{ course }}</p>
            <a href="">Ver Curriculo</a>
        </div>
    </div>
</template>

<style scoped>
.card{
    width: 300px;
    display: flex;
    flex-direction: column;
    align-items: center;
    background-color: white;
    border-radius: 12px;
    padding: 12px;
}

.card img{
    width: 150px;
    height: 150px;
    border-radius: 50%;
    object-fit: cover;
}

.infos{
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 12px;
}

.infos h3{
    font-size: var( --font-size-md);
    font-weight: 600;
    color: var(--text-color-dark);
}

.infos p{
    font-size: var(--font-size-sm);
}

.infos a{
    font-size: var(--font-size-md);
    background-color: var(--bg-color-dark);
    color: white;
    text-decoration: none;
    font-weight: bold;
    border-radius: 12px;
    padding: 12px 24px;
    transition: transform 0.25s;
}

.infos a:hover{
    transform: scale(1.04);
    background: var(--text-color-dark);
}
</style>
