<script setup>
  import { Link } from '@inertiajs/inertia-vue3';

  const props = defineProps({
    menuCanBeShown: {
      type: Boolean,
      default: false
    }
  })

  const showMenu = ref(false)
  const show = toRef(props, 'menuCanBeShown')

  watch(show, () => {
    if (!show.value) return showMenu.value = false
    return
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
  <nav class="bg-white border-b border-gray-200 z-50 lg:pt-3">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 md:px-6 lg:px-8">
      <div class="flex justify-between ">
        <div class="flex">
          <!-- Logo -->
          <div class="flex-shrink-0 flex items-center">
            <Link :href="$route('welcome')" id="truc" class="text-primary block w-auto hover:text-yellow-500 transition text-xl font-bold">
              <MainLogo />
            </Link>
          </div>
        </div>

        <div class="hidden sm:flex sm:items-center lg:items-start md:ml-6">
          <div class="ml-3 relative">
            <div class="flex items-center space-x-3 relative">
              <Link :href="$route('dashboard')" class="hover:text-yellow-500 transition" v-if="$page.props.user">
                Dashboard
              </Link>
              <template v-else>
                <Link :href="$route('register')" class="hover:text-yellow-500 transition">
                  Register
                </Link>
                <Link :href="$route('login')" class="hover:text-yellow-500 transition">
                  Login
                </Link>
              </template>
              <Link :href="$route('shop.index')" class="hover:text-yellow-500 transition">
                Shop
              </Link>
              <form method="POST" @submit.prevent="logout" v-if="$page.props.user">
                <button type="submit" class="hover:text-yellow-500 transition">
                  Log Out
                </button>
              </form>
              <Link href="#" class="hover:text-red-700 transition">
                <span class="bg-red-600 text-white text-xs rounded-md p-1 absolute z-10" style="top: -10px; right: -8px;" >
                  3
                </span>
                <div class="i-carbon-shopping-cart text-lg"></div>
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
      <div v-show="showMenu && menuCanBeShown"
        class="
        fixed
        left-0 right-0 bottom-0 top-[4.5rem]
        bg-white
        text-center
        z-50
        "
      >
          <template v-if="$page.props.user">
              <div class="pt-2 pb-3 space-y-1">
                  <responsive-nav-link :href="$route('dashboard')">
                      Dashboard
                  </responsive-nav-link>
              </div>
          </template>
          <template v-else>
              <div class="pt-2 pb-3 space-y-1">
                  <responsive-nav-link :href="$route('register')">
                      Register
                  </responsive-nav-link>
              </div>
              <div class="pt-2 pb-3 space-y-1">
                  <responsive-nav-link :href="$route('login')">
                      Login
                  </responsive-nav-link>
              </div>
          </template>
          <div class="pt-2 pb-3 space-y-1">
              <responsive-nav-link :href="$route('shop.index')">
                  Shop
              </responsive-nav-link>
          </div>
          <div class="pt-2 pb-3 space-y-1">
              <Link href="#" class="flex items-center pl-3 pr-4 py-2 border-l-4 border-transparent text-base font-medium text-gray-600 hover:text-red-700 hover:border-red-700 focus:outline-none focus:text-gray-800 focus:bg-gray-50 focus:border-gray-300 transition">                    
                  <div class="i-carbon-shopping-cart text-lg text-red-700"></div>
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
                      <responsive-nav-link as="button">
                          Log Out
                      </responsive-nav-link>
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