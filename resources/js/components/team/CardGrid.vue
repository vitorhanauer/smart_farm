<script setup>
import CardTeam from './CardTeam.vue';

</script>

<template>
    <section>
        <div class="upper-div">
            <CardTeam 
                image="/images/vitor_img.jpg"
                name="Vitor Hanauer Fontena" 
                occupation="Desenvolvedor Fullstack · Laravel · VueJS"
                course="Ciência da Computação · 4º Semestre"
                url="vitor"
            ></CardTeam>
            <CardTeam 
                image="/images/ana_img.jpg"
                name="Ana Paula Duarte" 
                occupation="Cientista de Dados · Plotly"
                course="Ciência da Computação · 4º Semestre"
                url="ana"
            ></CardTeam>
            <CardTeam 
                image="/images/maicon_img.jpg"
                name="Maicon Barbosa Leites" 
                occupation="Analista de Sistemas · VCME"
                course="Ciência da Computação · 4º Semestre"
                url="maicon"
            ></CardTeam>
            <CardTeam 
                image="/images/alan_img.jpeg"
                name="Alan Giussani Carrassai" 
                occupation="Desenvolvedor Front-End · VueJS"
                course="Ciência da Computação · 4º Semestre"
                url="alan"
            ></CardTeam>
            <CardTeam 
                image="/images/larissa_img.png"
                name="Larissa Menezes Rizzo" 
                occupation="Designer · Adobe Illustrator"
                course="Design Gráfico · 4º Semestre"
                url=""
            ></CardTeam>
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