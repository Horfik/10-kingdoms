<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import DangerButton from '@/Components/DangerButton.vue';
import List from '@/Components/Resources/Organization/List.vue';
import Item from '@/Components/Resources/Organization/Item.vue';
import Modal from '@/Components/Modal.vue';
import SecondaryButton from '@/Components/SecondaryButton.vue';
import SectionUI from "@/Components/UI/SectionUI.vue";
import {Head, Link, usePage, useForm} from '@inertiajs/vue3';
const organizations = usePage().props.organizations;
console.log(organizations);
</script>
<template>
    <Head title="Организации"/>
    <AuthenticatedLayout>
        <SectionUI class="p-6">
            <h1 class="text-yellow-300 text-center font-bold text-2xl">Организации</h1>
            <div >
                <List :organizations="organizations"/>
            </div>
        </SectionUI>

        <SectionUI class="text-center text-3xl font-semibold text-yellow-300 p-6">Разрешенные</SectionUI>
        <SectionUI class="p-6" v-for="organization in organizations.legal" :id="'show-' + organization.id">
            <Item :organization="organization"/>
        </SectionUI>

        <SectionUI class="text-center text-3xl font-semibold text-yellow-300 p-6">Запрещенные</SectionUI>
        <SectionUI class="p-6" v-for="organization in organizations.illegal" :id="'show-' + organization.id">
            <Item :organization="organization"/>
        </SectionUI>

        <SectionUI class="text-center text-3xl font-semibold text-yellow-300 p-6">Прочее</SectionUI>
        <SectionUI class="p-6" v-for="organization in organizations.other" :id="'show-' + organization.id">
            <Item :organization="organization"/>
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
