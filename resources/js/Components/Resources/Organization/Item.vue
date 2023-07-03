<script setup>

const props = defineProps({
    organization: {
        type: Object,
        required: true,
    }
})
</script>

<template>
    <div class="font-bold text-4xl text-yellow-300">{{organization.name}}</div>
    <div class="mt-2 text-xl whitespace-pre-line">
        {{organization.description}}
    </div>

</template>

