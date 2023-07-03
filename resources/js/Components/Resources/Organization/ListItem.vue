<script setup>
const props = defineProps({
    organizations: {
        type: Array,
        required: true,
    }
})
</script>
<template>
    <div v-for="organization in organizations">
        <div class="underline text-gray-200 text-xl font-bold ">
            <a :href="'#show-' + organization.id">{{ organization.name }}</a>
        </div>
    </div>
</template>

