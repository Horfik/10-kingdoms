<script setup lang="ts">

import welcome from "./components/welcome.vue";
</script>

<template>
    <v-toolbar density="compact" class="px-4" id="toolbar">
        <v-toolbar-items>
            <v-btn link href="#"><img src="../../public/assets/img/logo.png" alt="10 королевств" class="h-7"></v-btn>
        </v-toolbar-items>
        <v-toolbar-items>
            <v-btn link href="#">Фэйри</v-btn>
        </v-toolbar-items>
        <v-toolbar-items>
            <v-btn link href="#">Материк</v-btn>
        </v-toolbar-items>
        <v-toolbar-title></v-toolbar-title>
        <v-toolbar-items>
            <v-btn link>Регистрация</v-btn>
        </v-toolbar-items>
        <v-toolbar-items>
            <v-btn link>Войти</v-btn>
        </v-toolbar-items>
    </v-toolbar>
    <main class="h-screen flex">
        <v-btn link class="w-50 h-screen">

        </v-btn>
        <v-btn link class="w-50 h-screen">

        </v-btn>
    </main>
</template>

<style scoped>
    #toolbar {
        //background-color: rgb(0,0,0);
    }
</style>
