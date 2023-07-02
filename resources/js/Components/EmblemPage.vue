<script setup>
import {Link} from "@inertiajs/vue3"
const props = defineProps({
    path: {
        type: String,
        required: true,
    },
    title: {
        type: String,
        required: true,
    },
    routeName: {
        type: String,
        required: true,
    }
})
</script>

<template>
    <Link :href="route(routeName)">
        <div class="flex justify-center">
            <div>
                <img :src="path" alt="" height="100" width="100">
                <p class="text-center">{{ title }}</p>
            </div>
        </div>
    </Link>
</template>

