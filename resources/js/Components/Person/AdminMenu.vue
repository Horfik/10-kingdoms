<script setup>
import LinkButton from '@/Components/UI/LinkButton.vue';
import DangerButton from '@/Components/DangerButton.vue';
const props = defineProps({
    id: {
        type: Number,
        required: true,
    },
    confirmPersonDelete:{
        type: Function,
        required: true
    }
});

</script>

<template>
    <div class="flex justify-end">
        <LinkButton :href="route('person.edit', id)">Редактировать</LinkButton>
        <DangerButton @click="confirmPersonDelete(id)">Удалить</DangerButton>
    </div>
</template>

