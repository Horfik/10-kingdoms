<script setup>
import NavLink from "@/Components/nav/NavLink.vue";
import {Link} from '@inertiajs/vue3';
</script>
<template>
    <div class="hidden w-full sm:flex sm:justify-center">
        <div class="w-full px-6 md:w-3/4 lg:w-5/6">
            <ul class="overflow-hidden ">
                <NavLink class="float-left" :href="route('dashboard')" >
                    <img class="inline-flex" src="/storage/images/emblems/10 logo.png" alt="" height="30" width="30">
                </NavLink>
                <!--
                <NavLink class="float-left" v-if="$page.props.auth.user.master" :href="route('character.index')">Чарники</NavLink>
                -->
                <NavLink class="float-right" v-if="$page.props.auth.user" :href="route('profile.edit')">Профиль</NavLink>
                <NavLink class="float-right" href="" v-if="$page.props.auth.user" @click="$store.commit('logout');"> Выйти </NavLink>
                <NavLink class="float-right" v-if="!$page.props.auth.user" :href="route('login')">Войти</NavLink>
                <NavLink class="float-right" v-if="!$page.props.auth.user" :href="route('register')">Регистрация</NavLink>
            </ul>
        </div>
    </div>
</template>

<style scoped>

</style>
