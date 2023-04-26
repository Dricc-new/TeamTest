<script setup>
    const props = defineProps({
        description: String,
    });
</script>
<template>
    <h1 class="text-9xl"> About </h1>
    <span class="text-sm fas fa-ad "></span>
    <p class="text-sm text-bold">{{ description }}</p> 
</template>
    