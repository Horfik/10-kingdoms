<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import SectionUI from "@/Components/UI/SectionUI.vue";
import LinkButton from "@/Components/UI/LinkButton.vue";
import SecondaryButton from "@/Components/SecondaryButton.vue"
import DangerButton from '@/Components/DangerButton.vue';
import PersonItem from "@/Components/Person/PersonItem.vue";
import AdminMenu from "@/Components/Person/AdminMenu.vue";
import ListPersons from "@/Components/Person/ListPersons.vue";
import Modal from '@/Components/Modal.vue';
import {Head, usePage, useForm} from '@inertiajs/vue3';
import {onMounted, ref} from 'vue';
const form = useForm({
    id: ''
});


const confirmDelete = ref(false);

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
            persons.value = persons.value.filter(person => person.id !== form.id);
            closeModal()
        },
        onFinish: () => form.reset(),
    });
}

const persons = ref(usePage().props.persons);

</script>

<template>
    <Head title="Королвства"/>
    <AuthenticatedLayout>
        <SectionUI id="start-page">
            <h1 class="text-yellow-300 text-center font-bold text-2xl">Персонажи</h1>
                <LinkButton  :href="route('person.create')">Добавить</LinkButton>
            <div class="pl-4">
                <ListPersons :persons="persons" :confirmPersonDelete="confirmPersonDelete"/>
            </div>
        </SectionUI>

        <SectionUI class="p-4" v-for="person in persons" :id="'show-' + person.id">
            <AdminMenu :id="person.id" :confirmPersonDelete="confirmPersonDelete"/>
            <PersonItem :person="person"/>
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
