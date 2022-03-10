<script setup>
  defineProps({
    products: Array
  })
</script>


<template>
<AppLayout title="Shop - Green Leaf">

  <!-- <section class="grid m-auto grid-cols-1 lg:grid-cols-4 md:grid-cols-3 sm:grid-cols-2 gap-4"> -->
  <section class="flex flex-wrap justify-center gap-4">

    <ProductCard v-for="product in products" :product="product" :key="product.product_code" />

  </section>

</AppLayout>
</template>