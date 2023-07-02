<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import SectionUI from "@/Components/UI/SectionUI.vue";
import LinkButton from "@/Components/UI/LinkButton.vue";
import SecondaryButton from "@/Components/SecondaryButton.vue"
import DangerButton from '@/Components/DangerButton.vue';
import Item from "@/Components/Resources/Kingdom/Item.vue";
import List from "@/Components/Resources/Kingdom/List.vue";
import Modal from '@/Components/Modal.vue';
import {Head, usePage} from '@inertiajs/vue3';
import {ref} from 'vue';
import {useStore} from "vuex";
import ResourceMenu from "@/Components/Admin/ResourceMenu.vue";
const store = useStore();

const filterKingdoms = () => {
    kingdoms.value = kingdoms.value.filter(person => person.id !== store.state.deleteItem);
}

const kingdoms = ref(usePage().props.kingdoms);
</script>

<template>
    <Head title="Королевства"/>
    <AuthenticatedLayout>
        <SectionUI id="start-page">
            <h1 class="text-yellow-300 text-center font-bold text-2xl">Королевства</h1>
            <div class="text-right" >
                <LinkButton  :href="route('kingdom.create')">Добавить</LinkButton>
            </div>
            <div class="pl-4">
                <List :kingdoms="kingdoms"/>
            </div>
        </SectionUI>

        <SectionUI class="p-4" v-for="kingdom in kingdoms" :id="'show-' + kingdom.id">
            <ResourceMenu :id="kingdom.id" :routeName="'kingdom.edit'"/>
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
        <Modal :show="$store.state.deleteModal" @close="$store.commit('closeModal')">
            <div class="p-6">
                <h2 class="text-lg font-medium text-gray-300">
                    Удалить королевство?
                </h2>
                <div class="mt-6 flex justify-end">
                    <SecondaryButton @click="$store.commit('closeModal')"> Закрыть </SecondaryButton>

                    <DangerButton
                        class="ml-3"
                        @click="$store.dispatch('deleteItem', {routeName: 'kingdom.destroy', callback: filterKingdoms})"
                    >
                        Удалить
                    </DangerButton>
                </div>
            </div>
        </Modal>
    </AuthenticatedLayout>
</template>
<style scoped>
</style>
