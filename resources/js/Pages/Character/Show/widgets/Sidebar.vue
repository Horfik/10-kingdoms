<script setup>
import {Link} from "@inertiajs/vue3";
import {ref} from "vue";
import CharacterMenu from "../components/CharacterMenu.vue"

const showSidebar = ref(true);

const openSidebar = () => {
    if(showSidebar.value)
    {
        showSidebar.value = false;
    }
    else
    {
        showSidebar.value = true;
    }
}
window.addEventListener('resize', event =>{
    if(window.innerWidth < 640)
    {
        showSidebar.value = false
    }
    else
    {
        showSidebar.value = true
    }
});



</script>

<template>
    <div id="sidebar" v-show="showSidebar" class="" >
        <div class="fixed top-0 left-0 w-64 h-full bg-gray-100 border-r border-gray-300 z-10">
            
            <div class="flex justify-between p-4 item-center">
                <div class="font-bold">
                    <Link :href="route('dashboard')" class="w-full">
                        <img src="/storage/images/emblems/10 logo.png" class="w-6 h-6 inline-flex" alt="">
                        Королевств
                    </Link>
                </div>
                <div class="cursor-pointer sm:hidden" @click="openSidebar()">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </div>
            </div>
            
            <div class="p-2 pt-4">
                <CharacterMenu/>
                
                
            </div>
        </div>
    </div>
    <div class="block p-2 sm:hidden">
        <svg xmlns="http://www.w3.org/2000/svg" @click="openSidebar()" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                 stroke="currentColor"
                 class="w-8 h-8 text-gray-900 cursor-pointer">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
        </svg>
    </div>
</template>
