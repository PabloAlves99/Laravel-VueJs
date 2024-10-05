<script setup>
import MetronicLayout from "@/Layouts/MetronicLayout.vue";
import { Head } from "@inertiajs/vue3";
import DeleteUserForm from "./Partials/DeleteUserForm.vue";
import UpdatePasswordForm from "./Partials/UpdatePasswordForm.vue";
import UpdateEmailForm from "./Partials/UpdateEmailForm.vue";
import UpdateProfileInformationForm from "./Partials/UpdateProfileInformationForm.vue";

defineProps({
    mustVerifyEmail: {
        type: Boolean,
    },
    status: {
        type: String,
    },
});
</script>

<template>
    <MetronicLayout>
        <div class="container-fixed">

            <Head title="Profile" />

            <div class="flex justify-center items-center">
                <div class="mw-50">
                    <div v-if="$page.props.flash.success" class="btn btn-outline btn-success mb-4">
                        {{ $page.props.flash.success }}
                    </div>
                    <div>
                        <UpdateProfileInformationForm />
                    </div>

                    <div>
                        <UpdateEmailForm :must-verify-email="mustVerifyEmail" :status="status" />
                    </div>

                    <div>
                        <UpdatePasswordForm />
                    </div>

                    <div>
                        <DeleteUserForm />
                    </div>
                </div>
            </div>
        </div>
    </MetronicLayout>
</template>

<style>
.mw-50 {
    max-width: 50%;
}
</style>
