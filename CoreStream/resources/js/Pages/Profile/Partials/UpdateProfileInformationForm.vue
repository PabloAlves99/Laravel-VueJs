<script setup>
import InputError from "@/Components/InputError.vue";
import InputLabel from "@/Components/InputLabel.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import TextInput from "@/Components/TextInput.vue";
import { useForm, usePage } from "@inertiajs/vue3";

const user = usePage().props.user;

const form = useForm({
  name: user.name,
  login: user.login,
  phone: user.phone,
});
</script>

<template>
  <section>
    <header>
      <h2 class="text-lg font-medium text-gray-900">Informações do Usuário</h2>

      <p class="mt-1 text-sm text-gray-600">
        Atualize as informações de perfil do usuário.
      </p>
    </header>
    <form
      @submit.prevent="form.patch(route('profile.update', user.id))"
      class="mt-6 space-y-6"
    >
      <div>
        <InputLabel for="name" value="Nome" />

        <TextInput
          id="name"
          type="text"
          class="mt-1 input input-sm"
          v-model="form.name"
          required
          autofocus
          autocomplete="name"
        />

        <InputError class="mt-2" :message="form.errors.name" />
      </div>
      <div>
        <InputLabel for="login" value="Login" />

        <TextInput
          id="login"
          type="text"
          class="mt-1 input input-sm"
          v-model="form.login"
          required
          autofocus
          autocomplete="login"
        />

        <InputError class="mt-2" :message="form.errors.login" />
      </div>
      <div>
        <InputLabel for="phone" value="Telefone" />

        <TextInput
          id="phone"
          type="text"
          class="mt-1 input input-sm"
          v-model="form.phone"
          required
          autofocus
          autocomplete="phone"
        />

        <InputError class="mt-2" :message="form.errors.login" />
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
