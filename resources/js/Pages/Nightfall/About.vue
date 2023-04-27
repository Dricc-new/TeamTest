<script setup>
    const props = defineProps({
        description: String,
        listItem: Object,
    });
</script>
<template>
    <div class="m-4">
        <img src="/img/daa58777f223b96d768e358ba35b2d06.jpg" class="object-cover h-64 w-full rounded-lg shadow-md shadow-stone-800 cursor-pointer hover:-translate-y-1 duration-800 ease-in-out" alt="">
    </div>
    <h1 class="font-sans text-3xl text-center uppercase">About</h1>
    <hr class="my-4 h-px border-t-0 bg-transparent bg-gradient-to-r from-transparent via-neutral-500 to-transparent opacity-25 dark:opacity-100" />
    <p class="text-bold p-4 m-4 place-content-evenly text-justify">{{ description }}</p>
    <hr>
    <h4 class="text-sm m-4" v-if="listItem.length">Catidad de parrafos {{ listItem.length }}</h4>
    <div class="ATable m-4 grid sm:grid-cols-1 md:grid-cols-3 lg:grid-cols-5 gap-2">
        <h1 class="uppercase col-span-full text-center font-bold p-2 border-b border-stone-600">Lista de elementos</h1>
        <p v-for="item in listItem">
            {{item.text}}
        </p>
    </div>
</template>
<style>
    .ATable p{
        @apply cursor-pointer hover:-translate-y-1 text-stone-400 text-justify border p-2 rounded bg-stone-900;
    }
</style>
