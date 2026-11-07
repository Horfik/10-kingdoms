<script setup lang="ts">
import logoUrl from '@/assets/img/logo.png';
</script>

<template>
    <v-toolbar density="compact" class="px-4 sticky top-0 z-20" id="toolbar">
        <v-toolbar-items>
            <v-btn link href="#"><img :src="logoUrl" alt="10 королевств" class="h-7"></v-btn>
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
    <main class="flex" id="travel">
        <v-btn to="/arts" class="w-50 h-100 travel-img-btn">
            <img :src="logoUrl" alt="" class="travel-img">
        </v-btn>
        <v-btn to="/arts" link class="w-50 h-100 travel-img-btn">
            <img :src="logoUrl" alt="" class="travel-img">
        </v-btn>
    </main>
</template>

<style scoped>
#toolbar {
    background-color: rgb(0,0,0);
    position: sticky;
}
#travel {
    height: calc(100vh - 48px);
}
.travel-img-btn :deep(.travel-img) {
    filter: grayscale(100%);
    transition: filter 0.4s ease, transform 0.4s ease;
}

.travel-img-btn:hover :deep(.travel-img) {
    filter: grayscale(0%);
    transform: scale(1.05);
}

</style>
