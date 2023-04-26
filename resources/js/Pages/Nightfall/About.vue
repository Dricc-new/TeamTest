<script setup>
    const props = defineProps({
        description: String,
    });
</script>
<template>
    <h1 class="text-9x1"> About </h1>
    <span class="text-sm fas fa-ad "></span>
    <p>{{ description }}</p> 
</template>
    