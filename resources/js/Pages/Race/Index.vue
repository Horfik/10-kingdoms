<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import SectionUI from "@/Components/UI/SectionUI.vue";
import {Head, usePage, useForm} from '@inertiajs/vue3';
import List from "@/Components/Resources/Race/List.vue";
import Item from "@/Components/Resources/Race/Item.vue";
import ScrollUp from "@/Components/ScrollUp.vue";
import Menu from "@/Components/Menu.vue";
const races = usePage().props.races;

</script>

<template>
    <Head title="Народы"/>
    <AuthenticatedLayout>
        <SectionUI class="p-6" id="start-page">
            <h1 class="text-yellow-300 text-center font-bold text-2xl mb-4">Народы</h1>
            <List :races="races"/>
        </SectionUI>

        <SectionUI class="text-center text-3xl font-semibold text-yellow-300 p-6">Доступные для игры</SectionUI>
        <SectionUI class="p-6" v-for="race in races.game" :id="'show-' + race.id">
            <Item :race="race"/>
        </SectionUI>

        <SectionUI class="text-center text-3xl font-semibold text-yellow-300 p-6">Не доступные для игры</SectionUI>
        <SectionUI class="p-6" v-for="race in races.notGame" :id="'show-' + race.id">
            <Item :race="race"/>
        </SectionUI>
        <SectionUI class="text-center text-3xl font-semibold text-yellow-300 p-6">Фэйри</SectionUI>
        <SectionUI class="p-6" v-for="race in races.fairy" :id="'show-' + race.id">
            <Item :race="race"/>
        </SectionUI>
        <Menu/>
        <ScrollUp/>
    </AuthenticatedLayout>
</template>

<style scoped>

</style>
