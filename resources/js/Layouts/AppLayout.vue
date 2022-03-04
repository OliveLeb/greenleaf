<template>
    <div>
        <Head :title="title" />

        <div class="min-h-screen bg-gray-100 flex flex-col">
           
           <Nav />

            <!-- Page Heading -->
            <header class="bg-white shadow" v-if="$slots.header">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    <slot name="header"></slot>
                </div>
            </header>

            <!-- Page Content -->
            <main class="flex-1">
                <slot></slot>
            </main>
            <footer class="text-center text-white bg-gray-700 px-4 py-4">
                <div>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex deleniti excepturi odio facere quidem totam, sunt sequi aliquid blanditiis eos!
                    </p>
                </div>
            </footer>
        </div>
    </div>
</template>

<script setup>
    import { ref } from 'vue'
    import { Head } from '@inertiajs/inertia-vue3';
    import Nav from '../Components/Nav.vue'

    const props = defineProps({
        title: String
    })

    const showingNavigationDropdown = ref(false)

    const logout = () => {
        $inertia.post(route('logout'))
    }
</script>
