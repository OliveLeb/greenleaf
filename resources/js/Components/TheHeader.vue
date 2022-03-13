<script setup>
  import { Link } from '@inertiajs/inertia-vue3'

  defineProps({
    category: {
      type: Object,
      default: null,
    },
    product: {
      type: Object,
      default: null
    }
  })

  const menuCanBeShown = ref(false)
  const size =  ref(0)

  onMounted(()=>{
    size.value = window.innerWidth
    window.addEventListener('resize', ()=> {
      size.value = window.innerWidth
    })    
  })

  watch(size, () => {
    if (size.value >= 768) return menuCanBeShown.value = false
    return menuCanBeShown.value = true
  })

</script>


<template>
  <header class="sticky -top-[3.7rem] md:-top-22 z-[100]">
    <Nav :menuCanBeShown="menuCanBeShown" />

    <ShopNav :menuCanBeShown="menuCanBeShown" />

    <Breadcrumbs v-if="$route().current('shop.products.*')">
      <template v-if="!product" #breadcrumbs>
        <span>{{ category?.name }}</span>
      </template>
      <template v-else #breadcrumbs>
        <!-- <Link :href="$route('shop.products.category', category?.slug)" class="hover:underline">{{ category.name }}</Link>
        > -->
        <span>{{ product.name }}</span>
      </template>
    </Breadcrumbs>
  </header>
</template>