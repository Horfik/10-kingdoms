<script setup>
import LinkButton from '@/Components/UI/LinkButton.vue';
import DangerButton from '@/Components/DangerButton.vue';
const props = defineProps({
    id: {
        type: Number,
        required: true,
    },
    routeName: {
        type: String,
        required: true,
    }
});
</script>
<template>
    <div class="flex justify-end">
        <LinkButton :href="route(routeName, id)">Редактировать</LinkButton>
        <DangerButton @click="$store.commit('openModal', id)">Удалить</DangerButton>
    </div>
</template>


