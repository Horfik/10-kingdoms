<script setup>
import { ref, watch, onMounted } from 'vue';
import NavigateMenu from "@/Components/nav/NavigateMenu.vue";
import Sidebar from "@/Components/nav/Sidebar.vue";



</script>

<template>
    <div class="min-h-screen bg-indigo-900 text-gray-300" id="root" :style="'--src-img: url('+ $page.props.background + ')'">
        <nav class="fixed left-0 right-0 top-0 text-xl bg-indigo-950 border-b border-indigo-300">
            <NavigateMenu/>
            <Sidebar/>
        </nav>
        <main class="flex justify-center pt-12 ">
            <div class="w-full md:w-3/4 lg:w-4/6">
                <slot/>
            </div>
        </main>
    </div>
</template>
<style>
/*#root{
    background-image: var(--src-img);
    background-repeat: no-repeat;
    background-position: center;
    background-attachment: fixed;
    background-size: cover;
}*/
</style>
