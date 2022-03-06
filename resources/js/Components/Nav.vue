<script setup>
  import JetResponsiveNavLink from '@/Jetstream/ResponsiveNavLink.vue'
  import { Link } from '@inertiajs/inertia-vue3';
  import { onMounted, ref, watch } from 'vue'
  import BurgerMenu from './BurgerMenu.vue'
  import MainLogo from './MainLogo.vue';

  const showMenu = ref(false)
  const size =  ref(0)

  onMounted(()=>{
    size.value = window.innerWidth
    window.addEventListener('resize', ()=> {
      size.value = window.innerWidth
    })    
  })

  watch(size, () => {
    if (size.value >= 768) return showMenu.value = false
    return true
  })

  watch(showMenu, () => {
      if (showMenu.value) document.documentElement.style.overflow = 'hidden'
      else document.documentElement.style.overflow = 'auto'
  })

  function toggleMobileMenu() {
    showMenu.value = !showMenu.value
  }

    const logout = () => {
        $inertia.post('/logout')
    }

</script>


<template>
 <nav class="bg-white border-b border-grey-700 z-50 lg:pt-3">
        <!-- Primary Navigation Menu -->
        <div class="max-w-7xl mx-auto px-4 md:px-6 lg:px-8">
            <div class="flex justify-between ">
                <div class="flex">
                    <!-- Logo -->
                    <div class="flex-shrink-0 flex items-center">
                        <Link href="/" class="text-primary block w-auto hover:text-yellow-500 transition text-xl font-bold">
                            <MainLogo />
                        </Link>
                    </div>
                </div>

                <div class="hidden sm:flex sm:items-center lg:items-start md:ml-6">
                    <div class="ml-3 relative">
                        <div class="flex items-center space-x-3 relative">
                            <Link href="/dashboard" class="hover:text-yellow-500 transition" v-if="$page.props.user">
                                Dashboard
                            </Link>
                            <template v-else>
                                <Link href="/register" class="hover:text-yellow-500 transition">
                                    Register
                                </Link>
                                <Link href="/login" class="hover:text-yellow-500 transition">
                                    Login
                                </Link>
                            </template>
                            <Link href="#" class="hover:text-yellow-500 transition">
                                Shop
                            </Link>
                            <form method="POST" @submit.prevent="logout" v-if="$page.props.user">
                                <button type="submit" class="hover:text-yellow-500 transition">
                                    Log Out
                                </button>
                            </form>
                            <Link href="#" class="hover:text-red-700 transition">
                                <span class="bg-red-600 text-white text-xs rounded-md p-1 absolute" style="top: -10px; right: -8px;" >
                                    3
                                </span>
                                <svg aria-hidden="true" data-prefix="fas" data-icon="shopping-cart" class="svg-inline--fa fa-shopping-cart fa-w-18" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                    <path d="m528.12 301.319 47.273-208C578.806 78.301 567.391 64 551.99 64H159.208l-9.166-44.81C147.758 8.021 137.93 0 126.529 0H24C10.745 0 0 10.745 0 24v16c0 13.255 10.745 24 24 24h69.883l70.248 343.435C147.325 417.1 136 435.222 136 456c0 30.928 25.072 56 56 56s56-25.072 56-56c0-15.674-6.447-29.835-16.824-40h209.647C430.447 426.165 424 440.326 424 456c0 30.928 25.072 56 56 56s56-25.072 56-56c0-22.172-12.888-41.332-31.579-50.405l5.517-24.276c3.413-15.018-8.002-29.319-23.403-29.319H218.117l-6.545-32h293.145c11.206 0 20.92-7.754 23.403-18.681z"/>
                                </svg>
                            </Link>
                        </div>
                    </div>
                </div>

                <!-- Hamburger -->
                <div class="flex items-center sm:hidden">
                  <BurgerMenu @click="toggleMobileMenu" :open="showMenu"/>
                </div>
            </div>
        </div>

        <!-- Responsive Navigation Menu -->
        <transition name="slide-fade">
        <div v-show="showMenu"
          class="
          fixed
          left-0 right-0 bottom-0 top-[4.5rem]
          bg-white
          text-center
          "
        >
            <template v-if="$page.props.user">
                <div class="pt-2 pb-3 space-y-1">
                    <!-- :active="route().current('dashboard')" -->
                    <jet-responsive-nav-link href="/dashboard">
                        Dashboard
                    </jet-responsive-nav-link>
                </div>
            </template>
            <template v-else>
                <div class="pt-2 pb-3 space-y-1">
                    <jet-responsive-nav-link href="/register">
                        Register
                    </jet-responsive-nav-link>
                </div>
                <div class="pt-2 pb-3 space-y-1">
                    <jet-responsive-nav-link href="/login">
                        Login
                    </jet-responsive-nav-link>
                </div>
            </template>
            <div class="pt-2 pb-3 space-y-1">
                <jet-responsive-nav-link href="#">
                    Shop
                </jet-responsive-nav-link>
            </div>
            <div class="pt-2 pb-3 space-y-1">
                <Link href="#" class="flex items-center pl-3 pr-4 py-2 border-l-4 border-transparent text-base font-medium text-gray-600 hover:text-red-700 hover:border-red-700 focus:outline-none focus:text-gray-800 focus:bg-gray-50 focus:border-gray-300 transition">                    
                    <svg aria-hidden="true" data-prefix="fas" data-icon="shopping-cart" class="w-10 h-10 svg-inline--fa fa-shopping-cart fa-w-18" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                        <path d="m528.12 301.319 47.273-208C578.806 78.301 567.391 64 551.99 64H159.208l-9.166-44.81C147.758 8.021 137.93 0 126.529 0H24C10.745 0 0 10.745 0 24v16c0 13.255 10.745 24 24 24h69.883l70.248 343.435C147.325 417.1 136 435.222 136 456c0 30.928 25.072 56 56 56s56-25.072 56-56c0-15.674-6.447-29.835-16.824-40h209.647C430.447 426.165 424 440.326 424 456c0 30.928 25.072 56 56 56s56-25.072 56-56c0-22.172-12.888-41.332-31.579-50.405l5.517-24.276c3.413-15.018-8.002-29.319-23.403-29.319H218.117l-6.545-32h293.145c11.206 0 20.92-7.754 23.403-18.681z"/>
                    </svg>
                    <span class="ml-2">
                        3 item(s) in cart
                    </span>
                </Link>
            </div>

            <!-- Responsive Settings Options -->
            <div class="pt-4 pb-1 border-t border-gray-200" v-if="$page.props.user">
                <div class="mt-3 space-y-1">
                    <!-- Authentication -->
                    <form method="POST" @submit.prevent="logout">
                        <jet-responsive-nav-link as="button">
                            Log Out
                        </jet-responsive-nav-link>
                    </form>
                </div>
            </div>
        </div>
        </transition>
    </nav>
</template>

<style>
.slide-fade-enter-active,
.slide-fade-leave-active {
  transition: all 0.3s ease-out;
}
.slide-fade-enter-from,
.slide-fade-leave-to {
  opacity: 0;
  transform: translateX(20px);
}
</style>