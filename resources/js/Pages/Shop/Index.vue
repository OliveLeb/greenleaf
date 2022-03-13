<script setup>
  defineProps({
    products: Array
  })

  const currentCategory = computed(() => usePage().props.value.categories.find(el => el.slug === route().params.slug) ?? null)
  const titleName = computed(() => currentCategory.value?.name ?? 'Shop')

</script>

<template>
<AppLayout :title="`${titleName} - Green Leaf`" :category="currentCategory">

  <OptionBar :category="currentCategory"/>

  <section class="flex flex-wrap justify-center gap-4">

    <template v-if="products.length > 0">
    <TransitionGroup name="list">
      <ProductCard v-for="product in products" :product="product" :key="product.product_code" />
    </TransitionGroup>
    </template>

    <template v-else>
      <div>Oups, il n'y a pas de produit dans cette catégorie 😞</div>
    </template>

  </section>

</AppLayout>
</template>

<style>
.list-move,
.list-enter-active,
.list-leave-active {
  transition: all 0.5s ease;
}

.list-enter-from,
.list-leave-to {
  opacity: 0;
  transform: translateX(30px);
}

.list-leave-active {
  position: absolute;
}
</style>