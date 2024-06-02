<script setup>
import PersonItem from "@/Components/Resources/Person/PersonItem.vue";
import ResourceMenu from "@/Components/Admin/ResourceMenu.vue";
import SectionUI from "@/Components/UI/SectionUI.vue";
const props = defineProps({
    persons: {
        type: Object,
        required: true,
    },
    homes: {
        type: Object,
        required: true,
    },
    openImage: {
        type: Function,
        required: false,
    },
    admin: {
        type: Boolean,
        required: false,
        default: false,
    }
});
</script>


<template>
    <div v-for="(home, index) in homes" class="">
        <div v-if="persons[index] && home" class="p-6 m-4 text-3xl font-semibold text-center text-yellow-300 rounded-md bg-indigo-950">
            {{ home }}
        </div>
        <SectionUI class="p-6" v-for="person in persons[index]" :id="'show-' + person.id">
            <ResourceMenu v-if="admin" :id="person.id" :routeName="'person.edit'"/>
            <PersonItem :person="person" :openImage="openImage"/>
        </SectionUI>
    </div>
</template>

