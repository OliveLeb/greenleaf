<script setup>
  defineProps({
    products: Array
  })
</script>


<template>
<AppLayout>

  <section class="flex flex-wrap">

    <ProductCard v-for="product in products" :product="product" :key="product.product_code"/>

  </section>

</AppLayout>
</template>