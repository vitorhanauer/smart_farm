<script setup>
import CardTeam from './CardTeam.vue';

</script>

<template>
    <section>
        <div class="upper-div">
            <CardTeam 
                image="/vitor_img.jpg"
                name="Vitor Hanauer Fontena" 
                occupation="Desenvolvedor Fullstack · Laravel · VueJS"
                course="Ciência da Computação · 4º Semestre"
            ></CardTeam>
            <CardTeam 
                image="/vitor_img.jpg"
                name="Ana Paula Duarte" 
                occupation="Cientista de Dados · Plotly"
                course="Ciência da Computação · 4º Semestre"
            ></CardTeam>
            <CardTeam 
                image="/vitor_img.jpg"
                name="Vitor Hanauer Fontena" 
                occupation="Desenvolvedor Fullstack · Laravel · VueJS"
                course="Ciência da Computação · 4º Semestre"
            ></CardTeam>
            <CardTeam 
                image="/alan_img.jpeg"
                name="Alan Giussani Carrassai" 
                occupation="Desenvolvedor Front-End · VueJS"
                course="Ciência da Computação · 4º Semestre"
            ></CardTeam>
            <CardTeam 
                image="/vitor_img.jpg"
                name="Vitor Hanauer Fontena" 
                occupation="Desenvolvedor Fullstack · Laravel · VueJS"
                course="Ciência da Computação · 4º Semestre"
            ></CardTeam>
        </div>
        <div class="lower-div">
            
        </div>
    </section>
</template>

<style scoped>
section{
    display: flex;
    flex-direction: column;
    gap: 24px;
}

.upper-div{
    display: grid;
    grid-template-columns: 1fr 1fr 1fr 1fr 1fr;
    place-items: center;
}

.lower-div{
    display: grid;
    grid-template-columns: 1fr 1fr;
    place-items: center;
}
</style>