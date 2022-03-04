<template>
<app-layout title="Welcome">
    <h1>Bonjour Olivier</h1>

    <section><h2>A la une</h2></section>
    <section><h2>New</h2></section>
    <section><h2>Top Sales</h2></section>


</app-layout>
</template>

<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
const props = defineProps({
    products: Array,
})

</script>
