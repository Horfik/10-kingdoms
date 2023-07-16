<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import Create from './widgets/Create.vue';
import { Head } from "@inertiajs/vue3";
</script>

<template>
    <Head title="Создать персонажа"/>
    <AuthenticatedLayout>
        <Create/>
    </AuthenticatedLayout>
</template>

