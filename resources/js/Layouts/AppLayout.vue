<script setup>
import { Head } from '@inertiajs/inertia-vue3';

defineProps({
  title: String,
  category: {
    type: Object,
    default: null,
    required: false
  },
  product: {
    type: Object,
    default: null
  }
})

</script>

<template>
  <div>
    <Head :title="title" />

    <div class="min-h-screen bg-white flex flex-col">

        <TheHeader :category="category" :product="product"/>

        <!-- Page Heading -->
      <!-- <header class="bg-white shadow" v-if="$slots.header">
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
          <slot name="header"></slot>
        </div>
      </header> -->

        <!-- Page Content -->
      <main class="flex-1 px-4 pt-4 pb-18 md:px-6 md:py-12 w-full md:max-w-screen-xl m-auto">
        <slot></slot>
      </main>
        
      <TheFooter />
    </div>
  </div>
</template>
