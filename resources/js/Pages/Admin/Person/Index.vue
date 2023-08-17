<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import SectionUI from "@/Components/UI/SectionUI.vue";
import LinkButton from "@/Components/UI/LinkButton.vue";
import SecondaryButton from "@/Components/SecondaryButton.vue"
import DangerButton from '@/Components/DangerButton.vue';
import PersonItem from "@/Components/Resources/Person/PersonItem.vue";
import ListPersons from "@/Components/Resources/Person/ListPersons.vue";
import Modal from '@/Components/Modal.vue';
import ScrollUp from "@/Components/ScrollUp.vue";
import {Head, usePage} from '@inertiajs/vue3';
import {ref} from 'vue';
import {useStore} from "vuex";
import ResourceMenu from "@/Components/Admin/ResourceMenu.vue";
const store = useStore();

const filterPerson = () => {
    persons.value = persons.value.filter(person => person.id !== store.state.deleteItem);
}

const persons = ref(usePage().props.persons);

</script>

<template>
    <Head title="Личности"/>
    <AuthenticatedLayout>
        <SectionUI id="start-page" class="p-6">
            <h1 class="text-yellow-300 text-center font-bold text-2xl mb-4">Личности</h1>
            <div class="text-right" >
                <LinkButton  :href="route('person.create')">Добавить</LinkButton>
            </div>

            <div class="grid gap-1 grid-cols-1 md:grid-cols-2 lg:grid-cols-4">
                <ListPersons :persons="persons"/>
            </div>
        </SectionUI>

        <SectionUI class="p-6" v-for="person in persons" :id="'show-' + person.id">
            <ResourceMenu :id="person.id" :routeName="'person.edit'"/>
            <PersonItem :person="person"/>
        </SectionUI>

        <ScrollUp/>
        <Modal :show="$store.state.deleteModal" @close="$store.commit('closeModal')">
            <div class="p-6">
                <h2 class="text-lg font-medium text-gray-300">
                    Удалить персонажа?
                </h2>
                <div class="mt-6 flex justify-end">
                    <SecondaryButton @click="$store.commit('closeModal')"> Закрыть </SecondaryButton>

                    <DangerButton
                        class="ml-3"
                        @click="$store.dispatch('deleteItem', {routeName: 'person.destroy', callback: filterPerson})"
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
