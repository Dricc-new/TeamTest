<script setup>
    const props = defineProps({
        description: String,
    });
</script>
<style>
    .imagen{
        background-image: url('https://i.pinimg.com/originals/da/a5/87/daa58777f223b96d768e358ba35b2d06.jpg');
        height: 500px;
    }
</style>
<template>
    <div class="container mb-4 mt-2">
        <div class="imagen bg-cover bg-center rounded-lg shadow-none transition-shadow duration-800 ease-in-out hover:shadow-lg hover:shadow-cyan-500/30 cursor-pointer"></div>
        <h1 class="font-sans text-3xl text-center uppercase">About</h1>
    </div>
    <hr class="my-12 h-px border-t-0 bg-transparent bg-gradient-to-r from-transparent via-neutral-500 to-transparent opacity-25 dark:opacity-100" />
    
    <p class="text-bold p-4 m-4 place-content-evenly">{{ description }}</p> 
</template>