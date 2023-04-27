<script setup>
    const props = defineProps({
        description: String,
    });
</script>
<template>
    <div class="m-4">
        <img src="/img/daa58777f223b96d768e358ba35b2d06.jpg" class="object-cover h-64 w-full rounded-lg shadow-md shadow-stone-800 cursor-pointer hover:-translate-y-1 duration-800 ease-in-out" alt="">
    </div>
    <h1 class="font-sans text-3xl text-center uppercase">About</h1>
    <hr class="my-4 h-px border-t-0 bg-transparent bg-gradient-to-r from-transparent via-neutral-500 to-transparent opacity-25 dark:opacity-100" />
    <p class="text-bold p-4 m-4 place-content-evenly text-justify">{{ description }}</p> 
</template>
<style>
</style>
