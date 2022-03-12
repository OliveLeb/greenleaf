<script setup>
  import { formatCurrency } from '@/utils'
  
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
            {{ formatCurrency(product.price) }}
          </span>
          <button class="i-carbon-shopping-cart-plus hover:animate-bounce focus:animate-bounce active:animate-bounce text-xl"></button>
          </div>
      </figcaption>
    </figure>
  </article>
</template>