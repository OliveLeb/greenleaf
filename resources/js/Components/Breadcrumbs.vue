<script setup>
  import { Link } from '@inertiajs/inertia-vue3'

</script>


<template>
  <nav class="text-gray-400 p-1 bg-white border-b border-gray-200 text-sm md:p-2">
    <div class="max-w-5xl m-auto">

      <Link :href="route('welcome')" class="hover:underline focus:underline active:underline">Home</Link>
        > 

      <slot name="breadcrumbs"></slot>
    </div>
  </nav>
</template>