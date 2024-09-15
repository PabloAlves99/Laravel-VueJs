<script setup>
import ApplicationLogo from "@/Components/ApplicationLogo.vue";
import AlterTheme from "@/Components/AlterTheme.vue";
import Checkbox from "@/Components/Checkbox.vue";
import InputError from "@/Components/InputError.vue";
import InputLabel from "@/Components/InputLabel.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import TextInput from "@/Components/TextInput.vue";
import { Head, Link, useForm } from "@inertiajs/vue3";

defineProps({
    canResetPassword: {
        type: Boolean,
    },
    status: {
        type: String,
    },
});

const form = useForm({
    email: "",
    password: "",
    remember: false,
});

const submit = () => {
    form.post(route("login"), {
        onFinish: () => form.reset("password"),
    });
};
</script>

<template>
    <div class="container-fixed mg-tp">

        <Head title="Log in" />
        <AlterTheme class="alter-theme" />
        <div class="form-image-wrapper">
            <ApplicationLogo class="app-logo" />
            <div class="container-form-register">
                <div v-if="status" class="mb-4 font-medium text-sm text-green-600">
                    {{ status }}
                </div>

                <form @submit.prevent="submit">
                    <div class="w-full pa-t5">
                        <div class="items-baseline flex-wrap lg:flex-nowrap gap-2.5">
                            <InputLabel class="form-label max-w-32" for="email" value="Email" />

                            <TextInput id="email" type="email" class="input marg-5" v-model="form.email" required
                                autocomplete="username" />
                        </div>
                    </div>
                    <InputError class="form-hint input-center" :message="form.errors.email" />

                    <div class="w-full pa-t5">
                        <div class="items-baseline flex-wrap lg:flex-nowrap gap-2.5 pad-10">
                            <InputLabel class="form-label max-w-32" for="password" value="Password" />

                            <TextInput id="password" type="password" class="input marg-5" v-model="form.password"
                                required autocomplete="new-password" />
                        </div>
                    </div>
                    <InputError class="form-hint input-center" :message="form.errors.password" />

                    <div class="block mt-4">
                        <label class="flex items-center">
                            <Checkbox name="remember" v-model:checked="form.remember" />
                            <span class="ms-2 text-sm text-gray-600">Remember me</span>
                        </label>
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        <Link v-if="canResetPassword" :href="route('password.request')"
                            class="underline text-sm text-gray-600 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        Forgot your password?
                        </Link>

                        <PrimaryButton class="ms-4" :class="{ 'opacity-25': form.processing }"
                            :disabled="form.processing">
                            Log in
                        </PrimaryButton>
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>

<style>
.mg-tp {
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
}

.form-image-wrapper {
    display: flex;
    justify-content: center;
    align-items: center;
}

.app-logo {
    max-width: 250px;
}

.container-form-register {
    width: 400px;
}

.pad-10 {
    padding-top: 10px;
}

.marg-5 {
    margin-top: 5px;
}

.alter-theme {
    position: absolute;
    top: 1%;
    right: 1%;
    display: flex;
    align-items: center;
}

@media (max-width: 800px) {
    .form-image-wrapper {
        flex-direction: column;
    }

    .app-logo {
        margin-bottom: 20px;
    }

    .alter-theme {
        position: static;
        margin-bottom: 20px;
    }

    .container-form-register {
        width: 100%;
    }
}

.pad-10 {
    padding-top: 10px;
}

.marg-5 {
    margin-top: 5px;
}
</style>
