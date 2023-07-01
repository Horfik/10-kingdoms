<script setup>
import NavLink from "@/Components/nav/NavLink.vue";
import {Link} from '@inertiajs/vue3';
</script>
<template>
    <div class="w-full  hidden sm:flex sm:justify-center ">
        <div class="w-full md:w-3/4 lg:w-4/6 flex justify-between items-center px-3">
            <div class="flex">
                <Link :href="route('dashboard')" class="mr-4">
                    <img src="/storage/images/emblems/10 logo.png" alt="" height="30" width="30">
                </Link>
                <NavLink class="font-semibold" v-if="$page.props.auth.user" :href="route('character.show', 1)">Персонажи</NavLink>
            </div>
            <div class="flex" v-if="$page.props.auth.user">
                <div>
                    <NavLink :href="route('profile.edit')">Профиль</NavLink>
                </div>
                <div class="cursor-pointer">
                    <div class="mr-4 text-yellow-300 font-semibold" style="line-height: normal"
                         @click="$store.commit('logout');">
                        Выйти
                    </div>
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
</template>

<style scoped>

</style>
