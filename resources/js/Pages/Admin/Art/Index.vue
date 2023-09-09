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
import ResourceMenu from "@/Components/Admin/ResourceMenu.vue";
import ScrollUp from "@/Components/ScrollUp.vue";
import {Head, Link, usePage} from '@inertiajs/vue3';
import {useStore} from "vuex";

const store = useStore()

const filterArt = () => {
    arts.public = arts.public.filter(art => art.id !== store.state.deleteItem);
    arts.dark = arts.dark.filter(art => art.id !== store.state.deleteItem);
    arts.fairy = arts.fairy.filter(art => art.id !== store.state.deleteItem);
}

const arts = usePage().props.arts;
</script>
<template>
    <Head title="Искусства"/>
    <AuthenticatedLayout>
        <SectionUI class="p-6">
            <h1 class="text-2xl font-bold text-center text-yellow-300">Искусства</h1>
            <div class="text-right" >
                <LinkButton  :href="route('art.create')">Добавить</LinkButton>
            </div>
            <div class="mt-2 text-2xl font-semibold text-yellow-300 ">Общая</div>
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
        <div class="p-6 m-4 text-3xl font-semibold text-center text-yellow-300 rounded-md bg-indigo-950">
            Общая
        </div>
        <div v-for="art in arts.public" :id="'show-' + art.id" class="p-6 m-4 text-gray-300 rounded-md bg-indigo-950">
            <ResourceMenu :id="art.id" :routeName="'art.edit'"/>
            <ArtItem :art="art" />
        </div>
        <div class="p-6 m-4 text-3xl font-semibold text-center text-yellow-300 rounded-md bg-indigo-950">
            Темная Магия
        </div>
        <div v-for="art in arts.dark" :id="'show-' + art.id" class="p-6 m-4 text-gray-300 rounded-md bg-indigo-950">
            <ResourceMenu :id="art.id" :routeName="'art.edit'"/>
            <ArtItem :art="art" />
        </div>
        <div class="p-6 m-4 text-3xl font-semibold text-center text-yellow-300 rounded-md bg-indigo-950">
            Магия фэйри
        </div>
        <div v-for="art in arts.fairy" :id="'show-' + art.id" class="p-6 m-4 text-gray-300 rounded-md bg-indigo-950">
            <ResourceMenu :id="art.id" :routeName="'art.edit'"/>
            <ArtItem :art="art" />
        </div>
        <ScrollUp/>
        <Modal :show="$store.state.deleteModal" @close="$store.commit('closeModal')">
            <div class="p-6">
                <h2 class="text-lg font-medium text-gray-300">
                    Удалить искусство?
                </h2>
                <div class="flex justify-end mt-6">
                    <SecondaryButton @click="$store.commit('closeModal')"> Закрыть </SecondaryButton>

                    <DangerButton
                        class="ml-3"
                        @click="$store.dispatch('deleteItem', {routeName: 'art.destroy', callback: filterArt})"
                    >
                        Удалить
                    </DangerButton>
                </div>
            </div>
        </Modal>
    </AuthenticatedLayout>
</template>
