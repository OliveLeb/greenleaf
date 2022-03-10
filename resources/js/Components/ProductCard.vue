<script setup>
  defineProps({
    product: Object
  })
</script>


<template>
  <article class="rounded-xl overflow-hidden border border-gray-200 max-w-sm">
    <figure>
      <img :src="'/images/'+product.pictures[0].link" alt="">
      <figcaption class="py-2 px-4">
        <h4 class="text-center">{{ product.name }}</h4>
        <div class="flex justify-between">
          <span>
            € {{ product.price }}
          </span>
          <button>Cart</button>
          </div>
      </figcaption>
    </figure>
  </article>
</template>