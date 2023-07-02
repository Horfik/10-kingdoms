<script setup>
import {Head, Link, usePage} from '@inertiajs/vue3';
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import SectionUI from "@/Components/UI/SectionUI.vue";
const kingdoms = usePage().props.kingdoms;


</script>

<template>
    <Head title="Королвства"/>
    <AuthenticatedLayout>
        <div class="bg-indigo-950 m-4 p-2 border border-gray-300 rounded-md" id="start-page">
            <h1 class="text-yellow-300 text-center font-bold text-2xl">Королевства</h1>
        </div>
        <SectionUI v-for="kingdom in kingdoms">
            <div>{{ kingdom.name }}</div>
            <div>{{ kingdom.capital }}</div>
            <div>{{ kingdom.ruler }}</div>
            <div>{{ kingdom.population }}</div>
            <div>{{ kingdom.attractions }}</div>
            <div>{{ kingdom.emblem }}</div>
            <div>{{ kingdom.description }}</div>
        </SectionUI>

    </AuthenticatedLayout>
</template>

