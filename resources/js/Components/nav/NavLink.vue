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
    <li class="hover:bg-gray-800">
        <Link :href="href" class="block px-3 py-3 text-yellow-300 font-semibold">
            <slot />
        </Link>
    </li>
</template>
