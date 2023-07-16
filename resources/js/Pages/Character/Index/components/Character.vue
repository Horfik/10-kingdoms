<script setup>
import { Link } from "@inertiajs/vue3";
const props = defineProps({
    character: {
        type: Object,
        required: true,
    }
});
</script>
<template>
    <div>
        <div>
            <Link :href="route('character.show', character.id)">{{ character.name }}</Link>
        </div>
    </div>
</template>
