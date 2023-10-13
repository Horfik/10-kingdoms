<script setup>
import { ref, watch, onMounted } from 'vue';
import NavigateMenu from "@/Components/nav/NavigateMenu.vue";
import Sidebar from "@/Components/nav/Sidebar.vue";



</script>

<template>
    <div class="min-h-screen text-gray-300 bg-indigo-900" id="root" :style="'--src-img: url('+ $page.props.background + ')'">
        <nav class="top-0 left-0 right-0 text-xl bg-indigo-950 ">
            <NavigateMenu/>
            <Sidebar/>
        </nav>
        <main class="flex justify-center">
            <div class="w-full md:w-3/4 lg:w-5/6">
                <slot/>
            </div>
        </main>
    </div>
</template>
<style>
#root{
    background-image: var(--src-img);
    background-repeat: no-repeat;
    background-position: center;
    background-attachment: fixed;
    background-size: cover;
}
</style>
