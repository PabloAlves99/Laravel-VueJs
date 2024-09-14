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
        <template>
            <h2 >Profile</h2>
        </template>

        <div >
            <div >
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
