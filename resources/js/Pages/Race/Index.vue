<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import SectionUI from "@/Components/UI/SectionUI.vue";
import {Head, usePage, useForm} from '@inertiajs/vue3';
import List from "@/Components/Resources/Race/List.vue";
import Item from "@/Components/Resources/Race/Item.vue";
const races = usePage().props.races;

</script>

<template>
    <Head title="Расы"/>
    <AuthenticatedLayout>
        <SectionUI class="p-6" id="start-page">
            <h1 class="text-yellow-300 text-center font-bold text-2xl mb-4">Расы</h1>
            <List :races="races"/>
        </SectionUI>

        <SectionUI class="text-center text-3xl font-semibold text-yellow-300 p-6">Играбельные</SectionUI>
        <SectionUI class="p-6" v-for="race in races.game" :id="'show-' + race.id">
            <Item :race="race"/>
        </SectionUI>

        <SectionUI class="text-center text-3xl font-semibold text-yellow-300 p-6">Не играбельные</SectionUI>
        <SectionUI class="p-6" v-for="race in races.notGame" :id="'show-' + race.id">
            <Item :race="race"/>
        </SectionUI>
    </AuthenticatedLayout>
</template>

<style scoped>

</style>
