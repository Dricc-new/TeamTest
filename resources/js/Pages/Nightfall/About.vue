<script setup>
import ListaParagraph from './ListParagraph.vue';
import Button from '@/Components/PrimaryButton.vue'
import { ref } from 'vue';
import Table from '@/Components/Nightfall/Table.vue';

const props = defineProps({
    description: String,
    listItem: Object,
});

const IText = ref('Hola Mundo');
function CambiarIdioma(str) {
    if (str == 'en')
        IText.value = 'Hello World';
    else
        IText.value = 'Hola Mundo';
}
</script>

<template>
    <div class="m-4">
        <img src="/img/daa58777f223b96d768e358ba35b2d06.jpg"
            class="object-cover h-64 w-full rounded-lg shadow-md shadow-stone-800 cursor-pointer hover:-translate-y-1 duration-800 ease-in-out"
            alt="">
    </div>
    <h1 class="font-sans text-3xl text-center uppercase">About</h1>
    <hr
        class="my-4 h-px border-t-0 bg-transparent bg-gradient-to-r from-transparent via-neutral-500 to-transparent opacity-25 dark:opacity-100" />
    <p class="text-bold p-4 m-4 place-content-evenly text-justify">{{ description }}</p>
    <hr>
    <h1 class="m-4">{{ IText }}</h1>
    <button class="cursor-pointer bg-green-600 p-2 rounded m-4 text-white" @click="CambiarIdioma('es')">
        Cambiar Idioma a Español
    </button>
    <button class="cursor-pointer bg-green-600 p-2 rounded m-4 text-white" @click="CambiarIdioma('en')">
        Cambiar Idioma a Ingles
    </button>
    <Button class="m-2" >PrimaryButton1</Button>
    <Button class="m-2" color="green">PrimaryButton2</Button>
    <h4 class="text-sm m-4" v-if="listItem.length">Catidad de parrafos {{ listItem.length }}</h4>

    <Table > Hi </Table>

    <ListaParagraph :list="listItem">
    </ListaParagraph>
</template>

<style>
.ATable p {
    @apply cursor-pointer hover:-translate-y-1 text-stone-400 text-justify border p-2 rounded bg-stone-900;
}
</style>
