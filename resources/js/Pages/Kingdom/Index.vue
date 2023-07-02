<script setup>
import {Head, Link, usePage} from '@inertiajs/vue3';
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import SectionUI from "@/Components/UI/SectionUI.vue";
import Item from "@/Components/Resources/Kingdom/Item.vue";
import List from "@/Components/Resources/Kingdom/List.vue";
const kingdoms = usePage().props.kingdoms;


</script>

<template>
    <Head title="Королвства"/>
    <AuthenticatedLayout>
        <SectionUI id="start-page" class="p-4">
            <h1 class="text-yellow-300 text-center font-bold text-2xl">Королевства</h1>
            <div class="pl-2">
                <List :kingdoms="kingdoms"/>
            </div>
        </SectionUI>

        <SectionUI class="p-4" v-for="kingdom in kingdoms" :id="'show-' + kingdom.id">
            <Item :kingdom="kingdom"/>
        </SectionUI>
        <div class="fixed bottom-5 right-5 cursor-pointer ">
            <a href="#start-page">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                     stroke="currentColor"
                     class="w-10 h-10  text-yellow-300">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 11.25l-3-3m0 0l-3 3m3-3v7.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
            </a>
        </div>
    </AuthenticatedLayout>
</template>

