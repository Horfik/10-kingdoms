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
    <Link :href="href" class=" ">
        <div class="text-yellow-300 font-semibold w-full px-6 py-2 hover:bg-gray-800">
            <slot />
        </div>
    </Link>
</template>
