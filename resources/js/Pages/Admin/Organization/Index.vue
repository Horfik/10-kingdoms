<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import DangerButton from '@/Components/DangerButton.vue';
import LinkButton from '@/Components/UI/LinkButton.vue';
import List from '@/Components/Resources/Organization/List.vue';
import Item from '@/Components/Resources/Organization/Item.vue';
import Modal from '@/Components/Modal.vue';
import SecondaryButton from '@/Components/SecondaryButton.vue';
import SectionUI from "@/Components/UI/SectionUI.vue";
import ResourceMenu from "@/Components/Admin/ResourceMenu.vue";
import {Head, Link, usePage, useForm} from '@inertiajs/vue3';
import {useStore} from "vuex";

const store = useStore()

const organizations = usePage().props.organizations;

const filterOrganization = () => {
    organizations.legal = organizations.legal.filter(art => art.id !== store.state.deleteItem);
    organizations.illegal = organizations.illegal.filter(art => art.id !== store.state.deleteItem);
    organizations.other = organizations.other.filter(art => art.id !== store.state.deleteItem);
}

console.log(organizations);
</script>
<template>
    <Head title="Организации"/>
    <AuthenticatedLayout>
        <SectionUI class="p-6">
            <h1 class="text-2xl font-bold text-center text-yellow-300">Организации</h1>
            <div class="text-right" >
                <LinkButton :href="route('organization.create')">Добавить</LinkButton>
            </div>
            <div class="pl-4">
                <List :organizations="organizations"/>
            </div>
        </SectionUI>

        <SectionUI class="p-6 text-3xl font-semibold text-center text-yellow-300">Разрешенные</SectionUI>
        <SectionUI class="p-6" v-for="organization in organizations.legal" :id="'show-' + organization.id">
            <ResourceMenu :id="organization.id" :routeName="'organization.edit'"/>
            <Item :organization="organization"/>
        </SectionUI>

        <SectionUI class="p-6 text-3xl font-semibold text-center text-yellow-300">Запрещенные</SectionUI>
        <SectionUI class="p-6" v-for="organization in organizations.illegal" :id="'show-' + organization.id">
            <ResourceMenu :id="organization.id" :routeName="'organization.edit'"/>
            <Item :organization="organization"/>
        </SectionUI>

        <SectionUI class="p-6 text-3xl font-semibold text-center text-yellow-300">Неподтвержденные</SectionUI>
        <SectionUI class="p-6" v-for="organization in organizations.other" :id="'show-' + organization.id">
            <ResourceMenu :id="organization.id" :routeName="'organization.edit'"/>
            <Item :organization="organization"/>
        </SectionUI>


        <div class="fixed cursor-pointer bottom-5 right-5 ">
            <a href="#start-page">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                     stroke="currentColor"
                     class="w-10 h-10 text-yellow-300">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 11.25l-3-3m0 0l-3 3m3-3v7.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
            </a>
        </div>

        <Modal :show="$store.state.deleteModal" @close="$store.commit('closeModal')">
            <div class="p-6">
                <h2 class="text-lg font-medium text-gray-300">
                    Удалить организацию?
                </h2>
                <div class="flex justify-end mt-6">
                    <SecondaryButton @click="$store.commit('closeModal')"> Закрыть </SecondaryButton>

                    <DangerButton
                        class="ml-3"
                        @click="$store.dispatch('deleteItem', {routeName: 'organization.destroy', callback: filterOrganization})"
                    >
                        Удалить
                    </DangerButton>
                </div>
            </div>
        </Modal>
    </AuthenticatedLayout>
</template>
