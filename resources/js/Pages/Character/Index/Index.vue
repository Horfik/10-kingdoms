<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import ListCharacters from "@/Pages/Character/Index/widgets/ListCharacters.vue";
import { Head } from "@inertiajs/vue3";
</script>

<template>
    <Head title="Чарник"/>
    <AuthenticatedLayout>
        <ListCharacters/>
    </AuthenticatedLayout>
</template>

