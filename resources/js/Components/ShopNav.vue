<script setup>
import { Link } from '@inertiajs/inertia-vue3'

  const props = defineProps({
    menuCanBeShown: {
      type: Boolean,
      default: false
    }
  })

  const categories = computed(() => usePage().props.value.categories)

  const showAside = ref(false)
  const show = toRef(props, 'menuCanBeShown')

  watch(show, () => {
    if (!show.value) return showAside.value = false
    return
  })

</script>


<template>
  <nav class="border-b border-gray-200 bg-white">
    <div class="hidden md:flex justify-center py-2">  
      <div v-for="(category, index) in categories" :key="category.name"
        :class="[index < categories.length - 1 ? 'border-r border-gray-200' : null]"
      >
        <ShopNavLink :href="$route('shop.products.category', category.slug)"
          :class="{ active : $route().current('shop.products.category', { slug: category.slug }) }"
        >
          {{ category.name }}
        </ShopNavLink>
      </div>
    </div>

    <!-- mobile -->
    <div class="flex justify-between md:hidden">
        <button class="flex items-center px-4 py-2" @click="showAside = !showAside">
            <div class="i-carbon-text-align-center mr-2"></div>
          <span>
            Menu
          </span>
        </button>
        <Link href="#" class="px-4 py-2">Return to top</Link>
    </div>
  </nav>

  <div class="fixed inset-0 bg-neutral-700/75 z-[98]" v-if="showAside && menuCanBeShown" @click="showAside = !showAside">
  </div>

  <Transition name="slide-right">
    <aside class="fixed top-0 bottom-0 bg-white w-4/5 z-[100] px-4 text-sm font-bold" v-show="showAside && menuCanBeShown">

        <MainLogo class="mb-6"/>

        <section>
          <div v-for="category in categories" :key="category" class="py-2">
            <Link :href="$route('shop.products.category', category.slug)">
              {{ category.name }}
            </Link>  
          </div>
        </section>

    </aside>
  </Transition>
</template>

<style>
.slide-right-enter-active,
.slide-right-leave-active {
  transition: all 0.3s ease-out;
}
.slide-right-enter-from,
.slide-right-leave-to {
  opacity: 0;
  transform: translateX(-50px);
}
a.active {
  @apply text-primary before:scale-100 before:origin-top-left;
}
</style>