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
import ScrollUp from "@/Components/ScrollUp.vue";
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
        <SectionUI id="start-page" class="p-6">
            <h1 class="text-yellow-300 text-center font-bold text-2xl">Королевства</h1>
            <div class="text-right" >
                <LinkButton  :href="route('kingdom.create')">Добавить</LinkButton>
            </div>
            <div class="grid gap-1 grid-cols-1 md:grid-cols-2 lg:grid-cols-4">
                <List :kingdoms="kingdoms"/>
            </div>
        </SectionUI>

        <SectionUI class="p-6" v-for="kingdom in kingdoms" :id="'show-' + kingdom.id">
            <ResourceMenu :id="kingdom.id" :routeName="'kingdom.edit'"/>
            <Item :kingdom="kingdom"/>
        </SectionUI>

        <ScrollUp/>
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
