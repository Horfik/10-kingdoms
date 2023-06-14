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
    <Link :href="href" class="mr-4 text-yellow-300 font-semibold hover:border-b hover:border-gray-300">
        <slot />
    </Link>
</template>
