<template>
    <div class="bg-stone-900 p-2 w-full text-stone-300">
        <h1 class="p-2 text-2xl text-">
            <slot name="title"></slot>
        </h1>
        <table class="w-full">
            <thead class="bg-stone-700">
                <slot name="header"></slot>
            </thead>
            <tbody>
                <slot/>
            </tbody>
        </table>
    </div>
</template>