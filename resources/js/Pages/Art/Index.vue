<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import ArtItem from "@/Components/Resources/Art/ArtItem.vue";
import ListArts from "@/Components/Resources/Art/ListArts.vue";
import SectionUI from "@/Components/UI/SectionUI.vue";
import ScrollUp from '@/Components/ScrollUp.vue';
import Menu from "@/Components/Menu.vue";
import {Head, Link, usePage, useForm} from '@inertiajs/vue3';
import { ref } from 'vue';

const arts = usePage().props.arts;

</script>
<template>
    <Head title="Искусства"/>
    <AuthenticatedLayout>
        <SectionUI class="p-6">
            <h1 class="text-2xl font-bold text-center text-yellow-300">Искусства</h1>
            <div class="mt-2 text-2xl font-semibold text-yellow-300">Общая</div>
            <div class="grid grid-cols-1 gap-1 md:grid-cols-2 lg:grid-cols-4">
                <ListArts :arts="arts.public"/>
            </div>
            <div class="mt-2 text-2xl font-semibold text-yellow-300">Темная Магия</div>
            <div class="grid grid-cols-1 gap-1 md:grid-cols-2 lg:grid-cols-4">
                <ListArts :arts="arts.dark" />
            </div>
            <div class="mt-2 text-2xl font-semibold text-yellow-300">Магия фэйри</div>
            <div class="grid grid-cols-1 gap-1 md:grid-cols-2 lg:grid-cols-4">
                <ListArts :arts="arts.fairy" />
            </div>

        </SectionUI>

        <SectionUI class="p-6">
            Общая
        </SectionUI>
        <SectionUI v-for="art in arts.public" :id="'show-' + art.id" class="p-6 ">
            <ArtItem :art="art" />
        </SectionUI>
        <SectionUI class="p-6">
            Темная Магия
        </SectionUI>
        <SectionUI v-for="art in arts.dark" :id="'show-' + art.id" class="p-6 ">
            <ArtItem :art="art" />
        </SectionUI>
        <SectionUI class="p-6 ">
            Магия фэйри
        </SectionUI>
        <SectionUI v-for="art in arts.fairy" :id="'show-' + art.id" class="p-6">
            <ArtItem :art="art" />
        </SectionUI>
        <Menu/>
        <ScrollUp/>
    </AuthenticatedLayout>
</template>
