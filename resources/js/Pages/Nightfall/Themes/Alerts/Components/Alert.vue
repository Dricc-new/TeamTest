<script setup>

    const props = defineProps({
        type: {
            type: String,
            default: 'notify',
        },
        color: {
            type: String,
            default: '#2596be',
        }

    });
    


    // function cambiartipo(type) {
    //     if (type == 'success')
    //         color = 'red';
    //     else if (type == 'success')
    //         color = 'green';
    // }
</script>

<template>
    <div class="DAlert mb-4 rounded-lg px-6 py-5 text-base fas fa-exclamation" v-if="type==='notify'">
        <slot/>
    </div>
    <div class="bg-red-500 mb-4 rounded-lg px-6 py-5 text-base fas fa-file-excel" v-else-if="type==='fail'">
        <slot/>
    </div>
    <div class="bg-lime-300 mb-4 rounded-lg px-6 py-5 text-base fas fa-file-export" v-else-if="type==='success'">
        <slot/>
    </div>
    <!-- <div class=DAlert>
        <p>
            <slot/>
        </p>
    </div> -->
</template>

<style scoped>
    .DAlert{
        background-color: v-bind(color);
    }
    
</style>