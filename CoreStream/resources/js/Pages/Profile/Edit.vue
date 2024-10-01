<script setup>
import MetronicLayout from '@/Layouts/MetronicLayout.vue';
import DeleteUserForm from './Partials/DeleteUserForm.vue';
import UpdatePasswordForm from './Partials/UpdatePasswordForm.vue';
import UpdateProfileInformationForm from './Partials/UpdateProfileInformationForm.vue';
import { Head } from '@inertiajs/vue3';

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
                <div >
                    <UpdateProfileInformationForm
                        :must-verify-email="mustVerifyEmail"
                        :status="status"
                    />
                </div>

                <div >
                    <UpdatePasswordForm />
                </div>

                <div >
                    <DeleteUserForm />
                </div>
            </div>
        </div>
        </div>
    </MetronicLayout>
</template>

<style>
.mw-50{
    max-width: 50%;
}
</style>
