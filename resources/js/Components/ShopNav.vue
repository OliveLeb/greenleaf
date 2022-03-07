<script setup>
import { ref, computed } from 'vue'
import { Link, usePage } from '@inertiajs/inertia-vue3'
import NavLink from './NavLink.vue';

  const categories = computed(() => usePage().props.value.categories)

  const showAside = ref(false)

</script>


<template>
  <nav class="border-b border-grey-700 sticky top-0 bg-white">

    <div class="hidden md:flex justify-center py-2">  
      <div v-for="(category, index) in categories" :key="category.name"
        :class="[index < categories.length - 1 ? 'border-r border-grey-500' : null]"
      >
        <NavLink href="#">
          {{ category.name }}
        </NavLink>
      </div>
    </div>

    <!-- mobile -->
    <div class="flex justify-between md:hidden">
        <button class="flex items-center px-4 py-2" @click="showAside = !showAside">
          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--gg mr-2" width="22" height="22" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
            <path fill="currentColor" d="M4 6a1 1 0 0 1 1-1h14a1 1 0 1 1 0 2H5a1 1 0 0 1-1-1Zm0 12a1 1 0 0 1 1-1h14a1 1 0 1 1 0 2H5a1 1 0 0 1-1-1Zm1-7a1 1 0 1 0 0 2h8a1 1 0 1 0 0-2H5Z"></path>
          </svg>
          <span>
            Menu
          </span>
        </button>
        <Link href="#" class="px-4 py-2">Return to top</Link>
    </div>
  </nav>

  <div class="fixed inset-0 bg-neutral-700/75" v-if="showAside" @click="showAside = !showAside">
  </div>

  <Transition name="slide-right">
    <aside class="fixed top-0 bottom-0 bg-slate-200 w-4/5 z-[100]" v-show="showAside">
        <div v-for="category in categories" :key="category" class="px-4 py-2">
          <Link href="#">
            {{ category }}
          </Link>  
        </div>
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
</style>