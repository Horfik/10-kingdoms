<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import DeleteUserForm from './Partials/DeleteUserForm.vue';
import UpdatePasswordForm from './Partials/UpdatePasswordForm.vue';
import SectionUI from "@/Components/UI/SectionUI.vue";
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
    <Head title="Профиль" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-300 leading-tight">Profile</h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
                <SectionUI class="p-4 sm:p-8 bg-indigo-950 shadow sm:rounded-lg">
                    <UpdateProfileInformationForm
                        :must-verify-email="mustVerifyEmail"
                        :status="status"
                        class="max-w-xl"
                    />
                </SectionUI>

                <SectionUI class="p-4 sm:p-8 bg-indigo-950 shadow sm:rounded-lg">
                    <UpdatePasswordForm class="max-w-xl" />
                </SectionUI>

                <SectionUI class="p-4 sm:p-8 bg-indigo-950 shadow sm:rounded-lg">
                    <DeleteUserForm class="max-w-xl" />
                </SectionUI>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
