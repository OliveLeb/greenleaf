<script setup>
import { Head, Link } from '@inertiajs/inertia-vue3';

defineProps({
  title: String,
  category: {
    type: Object,
    default: null,
    required: false
  },
  product: {
    type: String,
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
      <main class="flex-1 p-4 md:px-6 md:py-12">
        <slot></slot>
      </main>
        
      <TheFooter />
    </div>
  </div>
</template>
