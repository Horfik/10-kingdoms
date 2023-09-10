<script setup>
import {ref} from "vue";
import {Link} from '@inertiajs/vue3';
import SideLink from "@/Components/nav/SideLink.vue";
const showSidebar = ref(false)

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
    if(window.innerWidth > 640)
    {
        showSidebar.value = false
    }
});
</script>

<template>
    <ul class="flex sm:hidden justify-between items-center px-4">
        <div class="p-2 cursor-pointer">
            <Link class="float-left" :href="route('dashboard')" >
                <img class="inline-flex" src="/storage/images/emblems/10 logo.png" alt="" height="30" width="30">
            </Link>
        </div>
        <div class="p-2">
            <svg xmlns="http://www.w3.org/2000/svg" @click="openSidebar()" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                 stroke="currentColor"
                 class="w-8 h-8 text-yellow-300 cursor-pointer">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>
        </div>
    </ul>
    <div id="sidebar" v-show="showSidebar" class="" >
        <div @click="openSidebar" class="fixed inset-0 top-0 left-0 w-full h-full bg-gray-500 opacity-40">

        </div>
        <div class="fixed top-0 left-0 right-0 pb-8 bg-indigo-950">
            <div class="flex items-center justify-between p-6 text-lg font-bold text-yellow-300 select-none">
                <div>
                    <Link :href="route('dashboard')">
                        <img src="/storage/images/emblems/10 logo.png" class="inline-flex w-6 h-6" alt="">
                        Королевств
                    </Link>
                </div>
                <div class="cursor-pointer select-none" @click="openSidebar">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                         class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </div>
            </div>
            <div>
                <ul>
                    <!--<li v-if="$page.props.auth.user.master">
                        <SideLink :href="route('character.index')">Чарники</SideLink>
                    </li>-->
                    <li v-if="$page.props.auth.user">
                        <SideLink :href="route('profile.edit')">Профиль</SideLink>
                    </li>
                    <li v-if="$page.props.auth.user">
                        <div class="w-full px-6 py-2 font-semibold text-yellow-300 cursor-pointer hover:bg-indigo-900"
                             @click="$store.commit('logout');">
                            Выйти
                        </div>
                    </li>
                    <li v-if="!$page.props.auth.user">
                        <SideLink :href="route('login')">Войти</SideLink>
                    </li>
                    <li v-if="!$page.props.auth.user">
                        <SideLink :href="route('register')">Регистрация</SideLink>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</template>

<style scoped>

</style>
