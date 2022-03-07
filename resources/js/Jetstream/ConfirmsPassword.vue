<template>
  <span>
    <span @click="startConfirmingPassword">
      <slot />
    </span>

    <dialog-modal :show="confirmingPassword" @close="closeModal">
      <template #title>
          {{ title }}
      </template>

      <template #content>
        {{ content }}

        <div class="mt-4">
          <input type="password" class="mt-1 block w-3/4" placeholder="Password"
            ref="password"
            v-model="form.password"
            @keyup.enter="confirmPassword" />

          <input-error :message="form.error" class="mt-2" />
        </div>
      </template>

      <template #footer>
        <secondary-button @click="closeModal">
          Cancel
        </secondary-button>

        <button class="ml-3" @click="confirmPassword" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
          {{ button }}
        </button>
      </template>
    </dialog-modal>
  </span>
</template>

<script>
  export default defineComponent({
    emits: ['confirmed'],

    props: {
      title: {
        default: 'Confirm Password',
      },
      content: {
        default: 'For your security, please confirm your password to continue.',
      },
      button: {
        default: 'Confirm',
      }
    },

    data() {
      return {
        confirmingPassword: false,
        form: {
          password: '',
          error: '',
        },
      }
    },

    methods: {
      startConfirmingPassword() {
        axios.get(route('password.confirmation')).then(response => {
          if (response.data.confirmed) {
            this.$emit('confirmed');
          } else {
            this.confirmingPassword = true;

            setTimeout(() => this.$refs.password.focus(), 250)
          }
        })
      },

      confirmPassword() {
        this.form.processing = true;

        axios.post(route('password.confirm'), {
          password: this.form.password,
        }).then(() => {
          this.form.processing = false;
          this.closeModal()
          this.$nextTick(() => this.$emit('confirmed'));
        }).catch(error => {
          this.form.processing = false;
          this.form.error = error.response.data.errors.password[0];
          this.$refs.password.focus()
        });
      },

      closeModal() {
        this.confirmingPassword = false
        this.form.password = '';
        this.form.error = '';
      },
    }
  })
</script>
