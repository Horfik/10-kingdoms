<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import DangerButton from '@/Components/DangerButton.vue';
import List from '@/Components/Resources/Organization/List.vue';
import Item from '@/Components/Resources/Organization/Item.vue';
import Modal from '@/Components/Modal.vue';
import SecondaryButton from '@/Components/SecondaryButton.vue';
import ScrollUp from "@/Components/ScrollUp.vue";
import SectionUI from "@/Components/UI/SectionUI.vue";
import Menu from "@/Components/Menu.vue";
import {Head, Link, usePage, useForm} from '@inertiajs/vue3';
const organizations = usePage().props.organizations;
console.log(organizations);
</script>
<template>
    <Head title="Организации"/>
    <AuthenticatedLayout>
        <SectionUI class="p-6">
            <h1 class="text-2xl font-bold text-center text-yellow-300">Организации</h1>
            <div >
                <List :organizations="organizations"/>
            </div>
        </SectionUI>

        <SectionUI class="p-6 text-3xl font-semibold text-center text-yellow-300">Разрешенные</SectionUI>
        <SectionUI class="p-6" v-for="organization in organizations.legal" :id="'show-' + organization.id">
            <Item :organization="organization"/>
        </SectionUI>

        <SectionUI class="p-6 text-3xl font-semibold text-center text-yellow-300">Запрещенные</SectionUI>
        <SectionUI class="p-6" v-for="organization in organizations.illegal" :id="'show-' + organization.id">
            <Item :organization="organization"/>
        </SectionUI>

        <SectionUI class="p-6 text-3xl font-semibold text-center text-yellow-300">Неподтвержденные</SectionUI>
        <SectionUI class="p-6" v-for="organization in organizations.other" :id="'show-' + organization.id">
            <Item :organization="organization"/>
        </SectionUI>
        <Menu/>

        <ScrollUp/>
    </AuthenticatedLayout>
</template>
