<template>
<app-layout title="Welcome">
    <h1>Bonjour Olivier</h1>

    <section><h2>A la une</h2></section>
    <section><h2>New</h2></section>
    <section><h2>Top Sales</h2></section>
    
    <section class="flex flex-wrap">
        <article v-for="product in products" :key="product.id">
            <figure>
                <img :src="'images/'+product.pictures[0].link" alt="">
                <figcaption>
                    <h4>{{ product.name }}</h4>
                </figcaption>
            </figure>
        </article>
    </section>


</app-layout>
</template>

<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
const props = defineProps({
    products: Array,
})

</script>
