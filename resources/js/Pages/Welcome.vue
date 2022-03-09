<template>
<app-layout title="Welcome - Green Leaf">
  <h1>Bonjour Olivier</h1>

  <section><h2>A la une</h2></section>
  <section><h2>New</h2></section>
  <section><h2>Top Sales</h2></section>
  
  <section class="flex flex-wrap">

   <ProductCard v-for="product in products" :product="product" :key="product.product_code"/>
   
  </section>
</app-layout>
</template>

<script setup>
  defineProps({
    products: Array,
  })
</script>
