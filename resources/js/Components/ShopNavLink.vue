<template>
  <Link :href="href" 
  class="py-2 mx-2
  hover:text-primary active:text-primary focus:text-primary
  relative block
  transition-colors
  "
  >
  <!-- gl-m="x-2" -->
    <slot />
  </Link>
</template>

<script setup>
import { Link } from '@inertiajs/inertia-vue3'

  defineProps({
    href: {
      type: String,
      default: '#'
    }
  })
</script>

<style scoped>
a::before {
  content: '';
  display: block;
  position: absolute;
  bottom: 3px;
  left: 0;
  height: 3px;
  width: 100%;
  background-color: #34C45E;
  transform-origin: right top;
  transform: scale(0, 1);
  transition: color 0.1s,transform 0.2s ease-out;
}
a:active::before {
  background-color: #34C45E;
}
a:hover::before, a:focus::before {
  transform-origin: left top;
  transform: scale(1, 1);
}
</style>