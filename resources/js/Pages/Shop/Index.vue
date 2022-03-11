<script setup>
  defineProps({
    products: Array
  })

  const currentCategory = computed(() => usePage().props.value.categories.find(el => el.slug === route().params.slug) ?? null)
  const titleName = computed(() => currentCategory.value?.name ?? 'Shop')

</script>

<template>
<AppLayout :title="`${titleName} - Green Leaf`" :category="currentCategory">

  <section class="flex flex-wrap justify-center gap-4">

    <template v-if="products.length > 0">
      <ProductCard v-for="product in products" :product="product" :key="product.product_code" />
    </template>

    <template v-else>
      <div>Oups, no products to display here :(</div>
    </template>

  </section>

</AppLayout>
</template>