<script setup lang="ts">
  import { formatCurrency, getTotalPrice } from '@/utils'

  // interface Props {
  //   product: Product,
  //   pictures: Picture[]
  // }

  // interface Product {
  //     id: number,
  //     name: string,
  //     slug?: string,
  //     details?: string,
  //     description?: string,
  //     product_code?: string,
  //     price: number,
  //     quantity: number,
  // }

  // interface Picture {
  //   id?: number,
  //   link: string,
  //   product_id?: number,
  //   title: string
  // }

  // const props = defineProps<Props>()
  const props = defineProps({
    product: {
      type: Object,
      required: true
    },
    pictures: {
      type: Object,
      required: true
    }
  })

  const stockLabel = computed(() : string => {
    if (props.product.quantity <= 10) return 'Quantité limitée'
    if (props.product.quantity > 0) return 'En Stock'
    return 'Rupture de stock'
  })

  const stock = computed(() : number => {
    if (props.product.quantity > 60) return 60
    return props.product.quantity
  })

  const form = useForm({
      id: props.product.id,
      name: props.product.name,
      slug: props.product.slug,
      details: props.product.details,
      description: props.product.description,
      product_code: props.product.product_code,
      price: props.product.price,
      quantity: 1,
  })

  const submit = () => {
    // return console.log(form.value)
    // Inertia.post('', form)
    form.post('', {
      preserveScroll: true,
      onSuccess: () => form.reset('quantity')
    })
  }

</script>


<template>
<AppLayout :title="product.name + ' - Green Leaf'" :product="product">

  <section class="flex flex-col md:flex-row gap-x-6 mb-8">

    <div class="mb-8 md:w-1/2">
      <img :src="'/images/' + pictures[0].link" :alt="pictures[0].title" class="max-h-72 md:max-h-96 m-auto md:ml-auto"/>  
    </div>

    <div class="md:w-1/2 flex flex-col">

      <div class="mb-12 text-center" md="mb-18 text-left">
        <h2 class="font-bold text-4xl md:text-5xl">{{ product.name }}</h2>
        <span class="text-xs">Ref: {{ product.product_code }}</span>
      </div>

      <div>
        <form @submit.prevent="submit"
        class="max-w-md rounded-lg p-6 shadow-lg border border-gray-100"
        >

          <div class="flex justify-between items-center mb-6">
            <p :class="[ product.quantity < 0 ? 'text-red-500' : 'text-primary']"
            class="font-bold text-lg md:text-2xl"
            >
              {{ stockLabel }}
            </p>

            <span class="font-bold text-xl md:text-3xl">{{ formatCurrency(product.price) }}</span>
          </div>

          <template v-if="product.quantity > 0">

            <div class="mb-10">
              <select name="" id="" class="border-b-2 w-20 border-gray-300"
                gl-focus-visible="outline-none border-yellow-500"
                v-model="form.quantity"
              >
                  <option :value="quantity" v-for="quantity in stock">
                  {{ quantity }}
                </option>
              </select>
            </div>

            <div>
              <button class="flex items-center text-xl md:text-2xl text-white bg-primary p-2 rounded m-auto"
                gl-hover="outline outline-3 outline-yellow-500"
              >
                <span class="i-carbon-shopping-cart-plus block"></span> Ajouter au panier
              </button>
            </div>
            
          </template>


        </form>
      </div>
    </div>

  </section>
    
  <section class="max-w-screen-md m-auto">
    <p>{{ product.description }}</p>
<br>
    <p>{{ product.details }}</p>
  </section>

</AppLayout>
</template>