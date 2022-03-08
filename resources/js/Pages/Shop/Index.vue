<script setup>
  defineProps({
    products: Array
  })
</script>


<template>
<AppLayout>
  {{ products }}
</AppLayout>
</template>