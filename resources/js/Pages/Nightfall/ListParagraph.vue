<script setup>
    const props = defineProps({
        list: Object,
    });
</script>
<template>
    <div class="ATable m-4 grid sm:grid-cols-1 md:grid-cols-3 lg:grid-cols-5 gap-2">
        <h1 class="uppercase col-span-full text-center font-bold p-2 border-b border-stone-600">Lista de elementos</h1>
        <p v-for="item in list">
            {{ item.text }}
        </p>
    </div>
</template>