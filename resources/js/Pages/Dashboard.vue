<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, Link } from '@inertiajs/vue3';
import EmblemPage from "@/Components/EmblemPage.vue";

</script>

<template>
    <Head title="Главная"/>
    <AuthenticatedLayout>
        <div class="bg-indigo-950 m-4 p-2 border border-indigo-300 rounded-md">
            <h1 class="text-yellow-300 font-bold text-2xl text-center">
                Добро пожаловать в 10 королевств
            </h1>

            <div class="flex flex-row justify-around flex-wrap gap-4 mt-4">
                <EmblemPage :routeName="'kingdom.index'" :path="'/storage/images/emblems/kingdom.png'" :title="'Королевства'"/>
                <EmblemPage :routeName="'dashboard'" :path="'/storage/images/emblems/dom.png'" :title="'Организации'"/>
                <EmblemPage :routeName="'dashboard'" :path="'/storage/images/emblems/fairy.png'" :title="'Расы'"/>
                <EmblemPage :routeName="'art.index'" :path="'/storage/images/emblems/magic.png'" :title="'Искусства'"/>
                <EmblemPage :routeName="'person.index'" :path="'/storage/images/emblems/hood.png'" :title="'Персонажи'"/>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
