<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import SectionUI from "@/Components/UI/SectionUI.vue";
import ListMechanics from '@/Components/Resources/Mecanic/ListMechanics.vue';
import MechanicItem from '@/Components/Resources/Mecanic/MechanicItem.vue';
import {Head, usePage} from '@inertiajs/vue3';
import Menu from "@/Components/Menu.vue";
import {ref} from 'vue';
import ScrollUp from "@/Components/ScrollUp.vue";

const mechanics = ref(usePage().props.mechanics);

</script>
<template>
<Head title="Механики"/>
<AuthenticatedLayout>
    <SectionUI class="p-6">
        <h1 class="text-2xl font-bold text-center text-yellow-300">Механики</h1>
        <div class="pl-4">
            <ListMechanics :mechanics="mechanics"/>
        </div>
    </SectionUI>
    <SectionUI class="p-6" v-for="mechanic in mechanics" :id="'show-' + mechanic.id">
        <MechanicItem :mechanic="mechanic"/>
    </SectionUI>
    <Menu/>
    <ScrollUp/>
</AuthenticatedLayout>
</template>
