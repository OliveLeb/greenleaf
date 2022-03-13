<script setup>
  import { Link } from '@inertiajs/inertia-vue3'
  import { formatCurrency } from '@/utils'

  // interface Props {
  //   product: {
  //     id: number,
  //     name: string,
  //     slug?: string,
  //     details?: string,
  //     description?: string,
  //     product_code?: string,
  //     price: number,
  //     quantity?: number,
  //     pictures: Picture[]
  //   }
  // }

  // interface Picture {
  //   id?: number,
  //   link: string,
  //   product_id?: number,
  //   title: string
  // }

  // defineProps<Props>()

  defineProps({
    product: {
      type: Object,
      required: true
    }
  })
  
</script>


<template>
  <article class="rounded-xl overflow-hidden border border-gray-200 max-w-[15rem]">
    <Link :href="$route('shop.products.show', product.slug)">
      <figure class="flex flex-col h-full">
        <img :src="'/images/'+product.pictures[0].link" :alt="product.pictures[0].title">
        <figcaption class="pt-2 pb-4 px-4 flex flex-col justify-between flex-1">
          <h4 class="text-center mb-4 text-lg">{{ product.name }}</h4>
          <div class="flex justify-between font-bold">
            <span>
              {{ formatCurrency(product.price) }}
            </span>
            <button class="i-carbon-shopping-cart-plus hover:animate-bounce focus:animate-bounce active:animate-bounce text-2xl text-yellow-500"></button>
            </div>
        </figcaption>
      </figure>
    </Link>
  </article>
</template>