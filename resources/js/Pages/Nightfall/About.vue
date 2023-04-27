<script setup>
    const props = defineProps({
        description: String,
    });
</script>
<template>
    <h1 class="font-sans text-3xl text-center">About</h1>
    <span class="text-sm fas fa-ad"></span>
    <p class="text-bold">{{ description }}</p> 
</template>
    