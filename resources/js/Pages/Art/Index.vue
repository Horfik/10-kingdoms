<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import ArtItem from "@/Components/Resources/Art/ArtItem.vue";
import ListArts from "@/Components/Resources/Art/ListArts.vue";
import PrimaryButton from "@/Components/UI/PrimaryButton.vue";
import LinkButton from "@/Components/UI/LinkButton.vue";
import DangerButton from '@/Components/DangerButton.vue';
import Modal from '@/Components/Modal.vue';
import SecondaryButton from '@/Components/SecondaryButton.vue';
import SectionUI from "@/Components/UI/SectionUI.vue";
import {Head, Link, usePage, useForm} from '@inertiajs/vue3';
import { ref } from 'vue';

const arts = usePage().props.arts;
</script>
<template>
    <Head title="Искусства"/>
    <AuthenticatedLayout>
        <SectionUI class="p-6">
            <h1 class="text-yellow-300 text-center font-bold text-2xl">Искусства</h1>
            <div class="text-yellow-300 font-semibold text-2xl mt-2">Общая</div>
            <div class="grid gap-1 grid-cols-1 md:grid-cols-2 lg:grid-cols-4">
                <ListArts :arts="arts.public"/>
            </div>
            <div class="text-yellow-300 font-semibold text-2xl mt-2">Темная Магия</div>
            <div class="grid gap-1 grid-cols-1 md:grid-cols-2 lg:grid-cols-4">
                <ListArts :arts="arts.dark" />
            </div>
        </SectionUI>

        <div class="bg-indigo-950 m-4 rounded-md p-6 text-center text-3xl font-semibold text-yellow-300">
            Общая
        </div>
        <div v-for="art in arts.public" :id="'show-' + art.id" class="bg-indigo-950 m-4  rounded-md p-6">
            <ArtItem :art="art" />
        </div>
        <div class="bg-indigo-950 m-4  rounded-md p-6 text-center text-3xl font-semibold text-yellow-300">
            Темная Магия
        </div>
        <div v-for="art in arts.dark" :id="'show-' + art.id" class="bg-indigo-950 m-4 rounded-md p-6">
            <ArtItem :art="art" />
        </div>

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
