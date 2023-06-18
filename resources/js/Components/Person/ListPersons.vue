<script setup>
import LinkButton from "@/Components/UI/LinkButton.vue";
import DangerButton from '@/Components/DangerButton.vue';
const props = defineProps({
    persons: {
        type: Array,
        required: true,
    },
    confirmPersonDelete: {
        type: Function,
        required: true,
    },
});

</script>
<template>
    <div v-for="person in persons" class="flex justify-between">
        <div class="underline text-gray-200 text-xl font-bold ">
            <a :href="'#show-' + person.id">{{ person.name }}</a>
        </div>
        <div  v-if="$store.state.master">
            <LinkButton  :href="route('person.edit', person.id)">редактировать</LinkButton>
            <DangerButton @click="confirmPersonDelete(person.id)">Удалить</DangerButton>
        </div>
    </div>
</template>
