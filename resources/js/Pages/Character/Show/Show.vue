<script setup>
import {Head} from "@inertiajs/vue3";
import Sidebar from "./widgets/Sidebar.vue";
import Charnik from "./widgets/Charnik.vue";
</script>
<template>
    <Head title="Чарник"/>
    <div class="min-h-screen bg-gray-200" id="root" :style="'--src-img: url('+ $page.props.background + ')'">
        <nav class="top-0 left-0 right-0 text-xl">
            <Sidebar/>
        </nav>
        <main class="flex justify-center ml-0 sm:ml-64">
            <div class="w-full p-3 m-2 bg-gray-100">
                <div>
                    <Charnik/>
                </div>
            </div>
        </main>
    </div>
</template>
