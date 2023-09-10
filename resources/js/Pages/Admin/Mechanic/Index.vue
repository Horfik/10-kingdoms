<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import SectionUI from "@/Components/UI/SectionUI.vue";
import LinkButton from '@/Components/UI/LinkButton.vue';
import SecondaryButton from '@/Components/SecondaryButton.vue';
import ListMechanics from '@/Components/Resources/Mecanic/ListMechanics.vue';
import MechanicItem from '@/Components/Resources/Mecanic/MechanicItem.vue';
import ResourceMenu from "@/Components/Admin/ResourceMenu.vue";
import {Head, usePage} from '@inertiajs/vue3';
import {ref} from 'vue';
import Modal from '@/Components/Modal.vue';
import DangerButton from '@/Components/DangerButton.vue';
import ScrollUp from "@/Components/ScrollUp.vue";
import {useStore} from "vuex";

const store = useStore();

const filterMechanic = () => {
    mechanics.value = mechanics.value.filter(mechanic => mechanic.id !== store.state.deleteItem);
}

const mechanics = ref(usePage().props.mechanics);

</script>
<template>
<Head title="Механики"/>
<AuthenticatedLayout>
    <SectionUI class="p-6">
        <h1 class="text-2xl font-bold text-center text-yellow-300">Механики</h1>
        <div class="text-right" >
            <LinkButton :href="route('mechanic.create')">Добавить</LinkButton>
        </div>
        <div class="pl-4">
            <ListMechanics :mechanics="mechanics"/>
        </div>
    </SectionUI>
    <SectionUI class="p-6" v-for="mechanic in mechanics" :id="'show-' + mechanic.id">
        <ResourceMenu :id="mechanic.id" :routeName="'mechanic.edit'"/>
        <MechanicItem :mechanic="mechanic"/>
    </SectionUI>
    <ScrollUp/>
    <Modal :show="$store.state.deleteModal" @close="$store.commit('closeModal')">
            <div class="p-6">
                <h2 class="text-lg font-medium text-gray-300">
                    Удалить механику?
                </h2>
                <div class="flex justify-end mt-6">
                    <SecondaryButton @click="$store.commit('closeModal')"> Закрыть </SecondaryButton>

                    <DangerButton
                        class="ml-3"
                        @click="$store.dispatch('deleteItem', {routeName: 'mechanic.destroy', callback: filterMechanic})"
                    >
                        Удалить
                    </DangerButton>
                </div>
            </div>
        </Modal>

</AuthenticatedLayout>
</template>
