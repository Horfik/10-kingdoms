<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, Link } from '@inertiajs/vue3';
</script>

<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <Head title="Главная"/>
        <div class="bg-indigo-950 m-4 p-2 border border-gray-300 rounded-md">
            <h1 class="text-yellow-300 font-bold text-2xl text-center">
                Добро пожаловать в 10 королевств
            </h1>
            <div>
                <Link :href="route('kingdom.index')">Королевства</Link>
            </div>
            <div>
                <Link :href="route('dashboard')">Организации</Link>
            </div>
            <div>
                <Link :href="route('dashboard')">Расы</Link>
            </div>
            <div>
                <Link :href="route('art.index')">Искусства</Link>
            </div>
            <div>
                <Link :href="route('person.index')">Персонажи</Link>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
