<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import SectionUI from "@/Components/UI/SectionUI.vue";
import LinkButton from "@/Components/UI/LinkButton.vue";
import SecondaryButton from '@/Components/SecondaryButton.vue';
import DangerButton from '@/Components/DangerButton.vue';
import {Head, usePage, useForm} from '@inertiajs/vue3';
import List from "@/Components/Resources/Race/List.vue";
import Item from "@/Components/Resources/Race/Item.vue";
import ResourceMenu from "@/Components/Admin/ResourceMenu.vue";
import Modal from '@/Components/Modal.vue';
import {useStore} from "vuex";

const filterRace = () => {
    races.game = races.game.filter(race => race.id !== store.state.deleteItem);
    races.notGame = races.notGame.filter(race => race.id !== store.state.deleteItem);
}

const store = useStore()
const races = usePage().props.races;



</script>

<template>
    <Head title="Расы"/>
    <AuthenticatedLayout>
        <SectionUI class="p-6" id="start-page">
            <h1 class="text-yellow-300 text-center font-bold text-2xl mb-4">Расы</h1>
            <div class="text-right" >
                <LinkButton  :href="route('race.create')">Добавить</LinkButton>
            </div>
            <List :races="races"/>
        </SectionUI>

        <SectionUI class="text-center text-3xl font-semibold text-yellow-300 p-6">Играбельные</SectionUI>
        <SectionUI class="p-6" v-for="race in races.game" :id="'show-' + race.id">
            <ResourceMenu :id="race.id" :routeName="'race.edit'"/>
            <Item :race="race"/>
        </SectionUI>

        <SectionUI class="text-center text-3xl font-semibold text-yellow-300 p-6">Не играбельные</SectionUI>
        <SectionUI class="p-6" v-for="race in races.notGame" :id="'show-' + race.id">
            <ResourceMenu :id="race.id" :routeName="'race.edit'"/>
            <Item :race="race"/>
        </SectionUI>
        <Modal :show="$store.state.deleteModal" @close="$store.commit('closeModal')">
            <div class="p-6">
                <h2 class="text-lg font-medium text-gray-300">
                    Удалить расу?
                </h2>
                <div class="mt-6 flex justify-end">
                    <SecondaryButton @click="$store.commit('closeModal')"> Закрыть </SecondaryButton>

                    <DangerButton
                        class="ml-3"
                        @click="$store.dispatch('deleteItem', {routeName: 'race.destroy', callback: filterRace})"
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
