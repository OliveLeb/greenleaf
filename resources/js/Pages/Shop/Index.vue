<script setup>
  defineProps({
    products: Array
  })
</script>


<template>
<AppLayout title="Shop - Green Leaf">

  <section class="flex flex-wrap gap-4">

    <ProductCard v-for="product in products" :product="product" :key="product.product_code"/>

  </section>

</AppLayout>
</template>