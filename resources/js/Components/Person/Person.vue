<script setup>
import LinkButton from "@/Components/UI/LinkButton.vue";
import DangerButton from '@/Components/DangerButton.vue';
const props = defineProps({
    person: {
        type: Object,
        required: true,
    },
    master:{
        type: Boolean,
        required: true,
    },
    confirmPersonDelete: {
        type: Function,
        required: true,
    },
});

</script>
<template>
    <div class="underline text-gray-200 text-xl font-bold ">
        <a :href="'#show-' + person.id">{{ person.name }}</a>
    </div>
    <div  v-if="master">
        <LinkButton  :href="route('person.edit', person.id)">редактировать</LinkButton>
        <DangerButton @click="confirmPersonDelete(person.id)">Удалить</DangerButton>
    </div>
</template>
