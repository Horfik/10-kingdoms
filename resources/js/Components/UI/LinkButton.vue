<script setup>
import {Link} from '@inertiajs/vue3';
</script>
<template>
    <Link class="inline-flex items-center px-4 py-2 text-xs font-bold tracking-widest text-black uppercase bg-yellow-400 border border-transparent rounded-md hover:bg-yellow-500 focus:bg-yellow-600 active:bg-yellow-700 focus:outline-none">
        <slot/>
    </Link>
</template>
