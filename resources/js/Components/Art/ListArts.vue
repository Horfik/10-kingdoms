<script setup>
import LinkButton from "@/Components/UI/LinkButton.vue";
import DangerButton from '@/Components/DangerButton.vue';
const props = defineProps({
    arts: {
        type: Array,
        required: true,
    },
    master:{
        type: Boolean,
        required: true,
    },
    confirmArtDelete: {
        type: Function,
        required: true,
    },
});

</script>
<template>
    <div v-for="art in arts" class="flex justify-between">
        <div class="underline text-gray-200 text-xl font-bold ">
            <a :href="'#show-' + art.id">{{ art.name }}</a>
        </div>
        <div  v-if="$store.state.master">
            <LinkButton  :href="route('art.edit', art.id)">редактировать</LinkButton>
            <DangerButton @click="confirmArtDelete(art.id)">Удалить</DangerButton>
        </div>
    </div>
</template>
