<script setup>
  defineProps({
    product: Object
  })
</script>


<template>
  <article>
    <figure>
      <img :src="'/images/'+product.pictures[0].link" alt="">
      <figcaption>
        <h4>{{ product.name }}</h4>
        <p>€ {{ product.price }}</p>
      </figcaption>
    </figure>
  </article>
</template>