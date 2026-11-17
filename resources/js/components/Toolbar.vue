<script setup lang="ts">
import logoUrl from '@/assets/img/logo.png';
import {useWorldStore} from "@/js/stores/WorldStore";
import {worlds} from "@/js/constants/Words";

const worldStore = useWorldStore();

</script>

<template>
    <v-toolbar density="compact" class="px-4 sticky top-0 z-20" id="toolbar">
        <v-toolbar-items>
            <v-btn link href="#"><img :src="logoUrl" alt="10 королевств" class="h-7"></v-btn>
        </v-toolbar-items>
        <v-toolbar-items v-show="worldStore.world === worlds.start || worldStore.world === worlds.continent">
            <v-btn v-on:click="worldStore.setFairy">Фэйри</v-btn>
        </v-toolbar-items>
        <v-toolbar-items>
            <v-btn v-on:click="worldStore.setContinent" v-show="worldStore.world === worlds.start || worldStore.world === worlds.fairy">Материк</v-btn>
        </v-toolbar-items>
        <v-toolbar-title></v-toolbar-title>
        <v-toolbar-items>
            <v-btn link>Регистрация</v-btn>
        </v-toolbar-items>
        <v-toolbar-items>
            <v-btn link>Войти</v-btn>
        </v-toolbar-items>
    </v-toolbar>
</template>

<style scoped>

</style>
