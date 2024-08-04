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
    <div class="flex flex-col justify-center">
        <div class="block mx-auto" :href="route(routeName)">
            <Link class="block " :href="route(routeName)">
                <img :src="path" alt="" :href="route(routeName)" height="50" width="50">
            </Link>
        </div>
        <div>
            <Link class="block " :href="route(routeName)">
                {{ title }}
            </Link>
        </div>
    </div>
</template>

