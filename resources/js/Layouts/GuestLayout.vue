<script setup>
import { Link } from '@inertiajs/vue3';
</script>

<template>
    <div class="min-h-screen bg-gray-950 text-gray-300 flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
        <div>
        </div>
        <div
            class="w-full sm:max-w-md mt-6 px-6 py-4 bg-gray-900 shadow-md overflow-hidden sm:rounded-lg"
        >
            <slot />
        </div>
    </div>
</template>
