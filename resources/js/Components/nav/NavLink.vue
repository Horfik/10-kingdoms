<script setup>
import { Link } from '@inertiajs/vue3';

const props = defineProps({
    href: {
        type: String,
        required: true,
    },
});

</script>

<template>
    <Link :href="href" class="mr-4 text-yellow-300 font-semibold hover:bg-indigo-900">
        <slot />
    </Link>
</template>
