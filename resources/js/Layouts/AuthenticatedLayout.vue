<script setup>
import { ref } from 'vue';
import { Link } from '@inertiajs/vue3';
import NavLink from "@/Components/NavLink.vue";
import SideLink from "@/Components/SideLink.vue";
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
    <div class="min-h-screen bg-indigo-900 text-gray-300" id="root" :style="'--src-img: url('+ $page.props.background + ')'">
        <nav class="fixed left-0 right-0 top-0 border-b px-4 py-4 text-xl bg-indigo-950 border-gray-300">
            <div class="w-full  hidden sm:flex sm:justify-center ">
                <div class="w-full md:w-3/4 lg:w-4/6 flex justify-between items-center px-3">
                    <div>
                        <NavLink :href="route('dashboard')" href="">10 Королевств</NavLink>
                        <NavLink class="font-semibold" v-if="$page.props.auth.user" :href="route('character.show', 1)">Персонажи</NavLink>
                    </div>
                    <div class="flex" v-if="$page.props.auth.user">
                        <div>
                            <NavLink :href="route('profile.edit')">Профиль</NavLink>
                        </div>
                        <div >
                            <NavLink class="leading-none" :href="route('logout')" method="post" as="button">Выйти</NavLink>
                        </div>
                    </div>
                    <div class="flex" v-else>
                        <div>
                            <NavLink :href="route('login')">Войти</NavLink>
                        </div>
                        <div >
                            <NavLink :href="route('register')">Регистрация</NavLink>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex justify-end sm:hidden ">
                <svg xmlns="http://www.w3.org/2000/svg" @click="openSidebar()" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                     stroke="currentColor"
                     class="w-6 h-6 cursor-pointer text-yellow-300">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
            </div>
            <div id="sidebar" v-show="showSidebar" class="" >
                <div @click="openSidebar" class="fixed w-full h-full top-0 left-0 inset-0 bg-gray-500 opacity-40">

                </div>
                <div class="fixed w-64 h-full left-0 top-0 bg-indigo-950 border-r border-gray-300">
                    <div class="text-yellow-300 text-lg p-6 font-bold select-none">
                        <Link :href="route('dashboard')" href="">10 Королевств</Link>
                    </div>
                    <div>
                        <ul>
                            <li v-if="$page.props.auth.user">
                                <SideLink :href="route('character.show', 1)">Персонажи</SideLink>
                            </li>
                            <li v-if="$page.props.auth.user">
                                <SideLink :href="route('profile.edit')">Профиль</SideLink>
                            </li>
                            <li v-if="$page.props.auth.user">
                                <SideLink class="w-full text-left" :href="route('logout')" method="post" as="button">Выйти</SideLink>
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
        </nav>
        <main class="flex justify-center mt-12 ">
            <div class="w-full md:w-3/4 lg:w-4/6">
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
