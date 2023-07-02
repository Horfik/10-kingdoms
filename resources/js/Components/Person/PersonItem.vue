<script setup>

const props = defineProps({
    person: {
        type: Object,
        required: true,
    },
    openImage: {
        type: Function,
        required: false,
    },
});
</script>
<template>
    <div class="text-yellow-300 text-2xl font-bold mb-4">
        {{ person.name }}
    </div>
    <div class="flex gap-6">
        <div class="cursor-pointer" @click="openImage(person.image_url)">
            <img :src="person.image_url" alt="" width="200" height="200">
        </div>
        <div class="flex-1 text-xl whitespace-pre-line">
            {{person.biography}}
        </div>
    </div>
</template>
