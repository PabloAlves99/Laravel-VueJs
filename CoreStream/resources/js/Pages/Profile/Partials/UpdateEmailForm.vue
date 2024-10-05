<script setup>
import InputError from "@/Components/InputError.vue";
import InputLabel from "@/Components/InputLabel.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import TextInput from "@/Components/TextInput.vue";
import { Link, useForm, usePage } from "@inertiajs/vue3";
import { ref } from "vue";

defineProps({
  mustVerifyEmail: {
    type: Boolean,
  },
  status: {
    type: String,
  },
});

const emailInput = ref(null);
const user = usePage().props.user;

const form = useForm({
  name: user.name,
  email: user.email,
});

const updateEmail = () => {
    form.put(route('email.update'), {
        preserveScroll: true,
        onError: () => {
            if (form.errors.email) {
                emailInput.value.focus();
      }
        },
    });
};
</script>

<template>
  <section>
    <header>
      <h2 class="text-lg font-medium text-gray-900">
        Atualize o email do usuário
      </h2>

      <p class="mt-1 text-sm text-gray-600">
        Atualize o endereço de e-mail do usuário.
      </p>
    </header>
    <form
      @submit.prevent="form.put(route('email.update', user.id))"
      class="mt-6 space-y-6"
    >
      <div>
        <InputLabel for="email" value="Email" />

        <TextInput
          id="email"
          type="email"
          class="mt-1 input input-sm"
          v-model="form.email"
          required
          autocomplete="username"
        />

        <InputError class="mt-2" :message="form.errors.email" />
      </div>

      <div v-if="mustVerifyEmail && user.email_verified_at === null">
        <p class="text-sm mt-2 text-gray-800">
          Seu endereço de e-mail não foi verificado.
          <Link
            :href="route('verification.send')"
            method="post"
            as="button"
            class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
          >
            Clique aqui para reenviar o e-mail de verificação.
          </Link>
        </p>

        <div
          v-show="status === 'verification-link-sent'"
          class="mt-2 font-medium text-sm text-green-600"
        >
          Um novo link de verificação foi enviado para seu endereço de e-mail.
        </div>
      </div>

      <div class="flex items-center gap-4 justify-end">
        <PrimaryButton :disabled="form.processing">Save</PrimaryButton>

        <Transition
          enter-active-class="transition ease-in-out"
          enter-from-class="opacity-0"
          leave-active-class="transition ease-in-out"
          leave-to-class="opacity-0"
        >
          <p v-if="form.recentlySuccessful" class="text-sm text-gray-600">
            Saved.
          </p>
        </Transition>
      </div>
    </form>
  </section>
</template>
