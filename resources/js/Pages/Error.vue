<script setup>
import { Link } from '@inertiajs/inertia-vue3'

  const props = defineProps({
    status: Number
  })

  const title = computed(() => {
    return {
      503: '503: Service Unavailable',
      500: '500: Server Error',
      404: '404: Page Not Found',
      403: '403: Forbidden',
    }[props.status]
  })
  const description = computed(() => {
    return {
      503: 'Sorry, we are doing some maintenance. Please check back soon.',
      500: 'Whoops, something went wrong on our servers.',
      404: 'Sorry, the page you are looking for could not be found.',
      403: 'Sorry, you are forbidden from accessing this page.',
    }[props.status]
  })
</script>


<template>
  <AppLayout title="Nothing to see here 😞 - Green Leaf">

    <section class="flex items-center justify-center">

      <h1>{{ title }}</h1>
      <p>{{ description }} 😶</p>
      <Link href="/">Retour à la page d'accueil</Link>


    </section>

  </AppLayout>
</template>