<script setup>
import LinkButton from "@/Components/UI/LinkButton.vue";
import DangerButton from '@/Components/DangerButton.vue';
const props = defineProps({
    arts: {
        type: Array,
        required: true,
    },
});

</script>
<template>
    <div v-for="art in arts">
        <div class="underline text-gray-200 text-xl font-bold ">
            <a :href="'#show-' + art.id">{{ art.name }}</a>
        </div>
    </div>
</template>
