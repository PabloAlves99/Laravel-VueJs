<script setup>
import InputError from "@/Components/InputError.vue";
import InputLabel from "@/Components/InputLabel.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import TextInput from "@/Components/TextInput.vue";
import { Head, Link, useForm } from "@inertiajs/vue3";
import MetronicLayout from "@/Layouts/MetronicLayout.vue";

const form = useForm({
  name: "",
  email: "",
  password: "",
  password_confirmation: "",
  login: "",
  phone: "",
  profile: "",
});

const profileOptions = ["Adm", "Advogado", "Atendente"];
const submit = () => {
  if (!profileOptions.includes(form.profile)) {
    alert("Perfil inválido. Escolha entre: Adm, adv, atendente.");
    return;
  }

    form.post(route("users.create.register"), {
        onSuccess: () => {
            form.reset();
        },
        onFinish: () => {
            form.reset(
                "password",
                "password_confirmation"
            );
        }
  });
};
</script>

<template>
  <MetronicLayout>
    <div class="container-fixed">
      <div class="container-form-register">
        <Head title="Register" />

        <div v-if="$page.props.flash.success" class="badge badge-lg badge-pill badge-outline badge-success">
          {{ $page.props.flash.success }}
        </div>

        <form @submit.prevent="submit" class="form-register">
          <div class="w-full pa-t5">
            <div class="flex items-baseline flex-wrap lg:flex-nowrap gap-2.5">
              <InputLabel class="form-label max-w-32" for="name" value="Name" />
              <TextInput
                id="name"
                type="text"
                class="input"
                v-model="form.name"
                required
                autofocus
                autocomplete="name"
              />
            </div>
          </div>
          <InputError
            class="form-hint input-center"
            :message="form.errors.name"
          />

          <div class="w-full pa-t5">
            <div class="flex items-baseline flex-wrap lg:flex-nowrap gap-2.5">
              <InputLabel
                class="form-label max-w-32"
                for="email"
                value="Email"
              />

              <TextInput
                id="email"
                type="email"
                class="input"
                v-model="form.email"
                required
                autocomplete="username"
                placeholder="exemplo@exemplo.com"
              />
            </div>
          </div>
          <InputError
            class="form-hint input-center"
            :message="form.errors.email"
          />

          <div class="w-full pa-t5">
            <div class="flex items-baseline flex-wrap lg:flex-nowrap gap-2.5">
              <InputLabel
                class="form-label max-w-32"
                for="password"
                value="Password"
              />

              <TextInput
                id="password"
                type="password"
                class="input"
                v-model="form.password"
                required
                autocomplete="new-password"
              />
            </div>
          </div>
          <InputError
            class="form-hint input-center"
            :message="form.errors.password"
          />

          <div class="w-full pa-t5">
            <div class="flex items-baseline flex-wrap lg:flex-nowrap gap-2.5">
              <InputLabel
                class="form-label max-w-32"
                for="password_confirmation"
                value="Confirm Password"
              />

              <TextInput
                id="password_confirmation"
                type="password"
                class="input"
                v-model="form.password_confirmation"
                required
                autocomplete="new-password"
              />
            </div>
          </div>
          <InputError
            class="form-hint input-center"
            :message="form.errors.password_confirmation"
          />

          <div class="w-full pa-t5">
            <div class="flex items-baseline flex-wrap lg:flex-nowrap gap-2.5">
              <InputLabel
                class="form-label max-w-32"
                for="login"
                value="Login"
              />

              <TextInput
                id="login"
                type="text"
                class="input"
                v-model="form.login"
                required
                autofocus
                autocomplete="username"
              />
            </div>
          </div>

          <div class="w-full pa-t5">
            <div class="flex items-baseline flex-wrap lg:flex-nowrap gap-2.5">
              <InputLabel
                class="form-label max-w-32"
                for="phone"
                value="Phone"
              />

              <TextInput
                id="phone"
                type="text"
                class="input"
                v-model="form.phone"
                required
                autofocus
              />
            </div>
          </div>

          <div class="w-full pa-t5">
            <div class="flex items-baseline flex-wrap lg:flex-nowrap gap-2.5">
              <InputLabel
                class="form-label max-w-32"
                for="profile"
                value="Profile"
              />

              <select
                class="select"
                name="profile"
                id="profile"
                v-model="form.profile"
              >
                <option value="Atendente">Atendente</option>
                <option value="Adm">Administrador</option>
                <option value="Advogado">Advogado</option>
              </select>
            </div>
          </div>

          <div class="flex items-center justify-end mt-4">
            <Link
              :href="route('users.create.register')"
              class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
            >
              Already registered?
            </Link>

            <PrimaryButton
              class="ms-4"
              :class="{ 'opacity-25': form.processing }"
              :disabled="form.processing"
            >
              Register
            </PrimaryButton>
          </div>
        </form>
      </div>
    </div>
  </MetronicLayout>
</template>

<style scoped>
.container-form-register {
  width: 50%;
  margin: 0 auto;
}

.input-center {
  text-align: center;
}

.form-register {
  margin-top: 50px;
}

.pa-t5 {
  padding-top: 20px;
}
</style>
