<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import SectionUI from "@/Components/UI/SectionUI.vue";
import LinkButton from "@/Components/UI/LinkButton.vue";
import PersonItem from "@/Components/Resources/Person/PersonItem.vue";
import ListPersons from "@/Components/Resources/Person/ListPersons.vue";
import SecondaryButton from '@/Components/SecondaryButton.vue';
import DangerButton from '@/Components/DangerButton.vue';
import Modal from '@/Components/Modal.vue';
import ScrollUp from "@/Components/ScrollUp.vue";
import {Head, usePage, useForm} from '@inertiajs/vue3';
import {onMounted, ref} from 'vue';

const form = useForm({
    id: ''
});

const showAvatar = ref(false);
const imageSrc = ref(false);

const openImage = (image) =>{
    imageSrc.value = image;
    showAvatar.value = true;
}

const closeImage = () => {
    showAvatar.value = false;
}


const persons = ref(usePage().props.persons);

</script>

<template>
    <Head title="Личности"/>
    <AuthenticatedLayout>
        <SectionUI class="p-6" id="start-page">
            <h1 class="text-yellow-300 text-center font-bold text-2xl mb-4">Личности</h1>
            <div class="grid gap-1 grid-cols-1 md:grid-cols-2 lg:grid-cols-4">
                <ListPersons :persons="persons"/>
            </div>
        </SectionUI>

        <SectionUI class="p-6" v-for="person in persons" :id="'show-' + person.id">
            <PersonItem :person="person" :openImage="openImage"/>
        </SectionUI>

        <ScrollUp/>
        <div v-show="showAvatar" class="w-full cursor-pointer" @click="closeImage">
            <div class="fixed w-full h-full top-0 left-0 inset-0 bg-gray-500 opacity-40" >

            </div>
            <div class="fixed top-0 left-0 bottom-0 right-0 m-10 ">
                <div class="w-full h-full flex justify-center items-center">
                    <img :src="imageSrc" alt="" id="full-image">
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
<style scoped>
#full-image{
    height: 100%;
}
</style>
