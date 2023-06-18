<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import ArtItem from "@/Components/Art/ArtItem.vue";
import ListArts from "@/Components/Art/ListArts.vue";
import PrimaryButton from "@/Components/UI/PrimaryButton.vue";
import LinkButton from "@/Components/UI/LinkButton.vue";
import DangerButton from '@/Components/DangerButton.vue';
import Modal from '@/Components/Modal.vue';
import SecondaryButton from '@/Components/SecondaryButton.vue';
import SectionUI from "@/Components/UI/SectionUI.vue";
import {Head, Link, usePage, useForm} from '@inertiajs/vue3';
import { ref } from 'vue';

const form = useForm({
    id: '',
});

const confirmDelete = ref(false)

const confirmArtDelete = (id) => {
    confirmDelete.value = true;
    form.id = id;
}

const closeModal = () => {
    confirmDelete.value = false;

    form.reset();
};

const deleteArt = () => {
    form.delete(route('art.destroy', form.id), {
        preserveScroll: true,
        onSuccess: () => {
            arts.public = arts.public.filter(art => art.id !== form.id);
            arts.dark = arts.dark.filter(art => art.id !== form.id);
            closeModal()
        },
        onFinish: () => form.reset(),
    });
}
const arts = usePage().props.arts;
</script>
<template>
    <Head title="Искусства"/>
    <AuthenticatedLayout>
        <SectionUI>
            <h1 class="text-yellow-300 text-center font-bold text-2xl">Искусства</h1>
            <div class="text-right" v-if="$store.state.master">
                <LinkButton  :href="route('art.create')">Добавить</LinkButton>
            </div>
            <div class="pl-4">
                <div class="text-yellow-300 font-semibold text-2xl">Общая</div>
                <ListArts :arts="arts.public" :confirmArtDelete="confirmArtDelete"/>
                <div class="text-yellow-300 font-semibold text-2xl">Темная Магия</div>
                <ListArts :arts="arts.dark" :confirmArtDelete="confirmArtDelete"/>
            </div>
        </SectionUI>
        <div class="bg-indigo-950 m-4 border border-gray-300 rounded-md p-6 text-center text-3xl font-semibold text-yellow-300">
            Общая
        </div>
        <div v-for="art in arts.public" :id="'show-' + art.id" class="bg-indigo-950 text-gray-300 m-4 p-2 border border-gray-300 rounded-md p-6">
            <ArtItem :art="art" />
        </div>
        <div class="bg-indigo-950 m-4 border border-gray-300 rounded-md p-6 text-center text-3xl font-semibold text-yellow-300">
            Темная Магия
        </div>
        <div v-for="art in arts.dark" :id="'show-' + art.id" class="bg-indigo-950 m-4 p-2 border text-gray-300 border-gray-300 rounded-md p-6">
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
        <Modal :show="confirmDelete" @close="closeModal">
            <div class="p-6">
                <h2 class="text-lg font-medium text-gray-300">
                    Удалить исскуство?
                </h2>
                <div class="mt-6 flex justify-end">
                    <SecondaryButton @click="closeModal"> Закрыть </SecondaryButton>

                    <DangerButton
                        class="ml-3"
                        :class="{ 'opacity-25': form.processing }"
                        :disabled="form.processing"
                        @click="deleteArt"
                    >
                        Удалить
                    </DangerButton>
                </div>
            </div>
        </Modal>
    </AuthenticatedLayout>
</template>
