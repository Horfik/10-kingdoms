<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import SectionUI from "@/Components/UI/SectionUI.vue";
import LinkButton from "@/Components/UI/LinkButton.vue";
import PersonItem from "@/Components/Person/PersonItem.vue";
import ListPersons from "@/Components/Person/ListPersons.vue";
import Person from "@/Components/Person/Person.vue";
import SecondaryButton from '@/Components/SecondaryButton.vue';
import DangerButton from '@/Components/DangerButton.vue';
import Modal from '@/Components/Modal.vue';
import {Head, usePage, useForm} from '@inertiajs/vue3';
import {onMounted, ref} from 'vue';
defineProps({
    master: {
        type: Boolean,
    },
});

const form = useForm({
    id: ''
});

const showAvatar = ref(false);
const imageSrc = ref(false);
const confirmDelete = ref(false);

const openImage = (image) =>{
    imageSrc.value = image;
    showAvatar.value = true;
}

const closeImage = () => {
    showAvatar.value = false;
}

const closeOnEscape = (e) => {
    if (e.key === 'Escape') {
        closeImage();
    }
};

const confirmPersonDelete = (id) => {
    confirmDelete.value = true;
    form.id = id;
}
const closeModal = () => {
    confirmDelete.value = false;

    form.reset();
};
const deletePerson = () => {
    form.delete(route('person.destroy', form.id), {
        preserveScroll: true,
        onSuccess: () => {
            persons = persons.filter(person => person.id !== form.id);
            closeModal()
        },
        onFinish: () => form.reset(),
    });
}

let persons = usePage().props.persons;

onMounted(() => document.addEventListener('keydown', closeOnEscape));
</script>

<template>
    <Head title="Королвства"/>
    <AuthenticatedLayout>
        <div class="text-right mb-4" v-if="master">
            <LinkButton  :href="route('person.create')">Добавить</LinkButton>
        </div>
        <div class="bg-indigo-950 m-4 p-2 border border-gray-300 rounded-md" id="start-page">
            <h1 class="text-yellow-300 text-center font-bold text-2xl">Персонажи</h1>
            <div class="text-right mb-4" v-if="master">
                <LinkButton  :href="route('person.create')">Добавить</LinkButton>
            </div>
            <div class="pl-4">
                <ListPersons :persons="persons" :master="master" :confirmPersonDelete="confirmPersonDelete"/>
            </div>
        </div>

        <SectionUI class="p-4" v-for="person in persons" :id="'show-' + person.id">
            <PersonItem :person="person" :openImage="openImage"/>
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
        <div v-show="showAvatar" class="w-full cursor-pointer" @click="closeImage">
            <div class="fixed w-full h-full top-0 left-0 inset-0 bg-gray-500 opacity-40" >

            </div>
            <div class="fixed top-0 left-0 bottom-0 right-0 m-10 ">
                <div class="w-full h-full flex justify-center items-center">
                    <img :src="imageSrc" alt="" id="full-image">
                </div>
            </div>
        </div>
        <Modal :show="confirmDelete" @close="closeModal">
            <div class="p-6">
                <h2 class="text-lg font-medium text-gray-300">
                    Удалить персонажа?
                </h2>
                <div class="mt-6 flex justify-end">
                    <SecondaryButton @click="closeModal"> Закрыть </SecondaryButton>

                    <DangerButton
                        class="ml-3"
                        :class="{ 'opacity-25': form.processing }"
                        :disabled="form.processing"
                        @click="deletePerson"
                    >
                        Удалить
                    </DangerButton>
                </div>
            </div>
        </Modal>
    </AuthenticatedLayout>
</template>
<style scoped>
#full-image{
    height: 100%;
}
</style>
