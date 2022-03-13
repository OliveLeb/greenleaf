<script setup>
  import route from 'ziggy'

  const props = defineProps({
    category: {
      type: Object,
      required: false
    }
  })

  const sorter = ref('random')

  const sortProducts = () => {

    const currentRoute = route().current()

    Inertia.get(route(currentRoute, props.category?.slug), {
      sort: sorter.value
    }, {
        preserveState: true,
        only: ['products']
      }
    )
  }

</script>


<template>

  <aside class="text-right mb-6">
    <label for="sorter">Trier : </label>
    <select name="sorter" @change="sortProducts" v-model="sorter"
      class="focus-visible:outline-none"
    >
      <option value="random" selected>Random</option>
      <option value="price_up">Prix croissant</option>
      <option value="price_down">Prix décroissant</option>
    </select>
  </aside>

</template>