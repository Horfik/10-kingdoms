<script setup>
import {Head, Link, usePage} from '@inertiajs/vue3';
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import SectionUI from "@/Components/UI/SectionUI.vue";
import Item from "@/Components/Resources/Kingdom/Item.vue";
import List from "@/Components/Resources/Kingdom/List.vue";
import ScrollUp from "@/Components/ScrollUp.vue";
import Menu from "@/Components/Menu.vue";
const kingdoms = usePage().props.kingdoms;


</script>

<template>
    <Head title="Королевства"/>
    <AuthenticatedLayout>
        <SectionUI id="start-page" class="p-6">
            <h1 class="text-yellow-300 text-center font-bold text-2xl mb-4">Королевства</h1>
            <div class="grid gap-1 grid-cols-1 md:grid-cols-2 lg:grid-cols-4">
                <List :kingdoms="kingdoms"/>
            </div>
        </SectionUI>

        <SectionUI class="p-6" v-for="kingdom in kingdoms" :id="'show-' + kingdom.id">
            <Item :kingdom="kingdom"/>
        </SectionUI>
        <Menu/>
        <ScrollUp/>
    </AuthenticatedLayout>
</template>

