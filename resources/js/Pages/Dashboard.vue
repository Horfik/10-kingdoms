<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, Link } from '@inertiajs/vue3';
import EmblemPage from "@/Components/EmblemPage.vue";

</script>

<template>
    <Head title="Главная"/>
    <AuthenticatedLayout>
        <div class="p-6 m-4 rounded-md bg-indigo-950">
            <h1 class="mb-6 text-2xl font-bold text-center text-yellow-300">
                Добро пожаловать в 10 королевств
            </h1>

            <div class="flex flex-row flex-wrap justify-around gap-4 mt-4">
                <EmblemPage :routeName="'kingdom.index'" :path="'/storage/images/emblems/kingdom.png'" :title="'Королевства'"/>
                <EmblemPage :routeName="'organization.index'" :path="'/storage/images/emblems/dom.png'" :title="'Организации'"/>
                <EmblemPage :routeName="'race.index'" :path="'/storage/images/emblems/fairy.png'" :title="'Народы'"/>
                <EmblemPage :routeName="'art.index'" :path="'/storage/images/emblems/magic.png'" :title="'Искусства'"/>
                <EmblemPage :routeName="'person.index'" :path="'/storage/images/emblems/hood.png'" :title="'Личности'"/>
                <EmblemPage :routeName="'mechanic.index'" :path="'/storage/images/emblems/mechanics.png'" :title="'Механики'"/>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
