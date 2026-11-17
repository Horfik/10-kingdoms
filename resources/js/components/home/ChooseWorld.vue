<script setup lang="ts">
import logoUrl from '@/assets/img/logo.png';
import {useWorldStore} from "@/js/stores/WorldStore";

const worldStore = useWorldStore();
</script>

<template>
    <div class="flex" id="travel">
        <v-btn v-on:click="worldStore.setFairy" class="w-50 h-100 travel-img-btn">
            <img :src="logoUrl" alt="" class="travel-img">
        </v-btn>
        <v-btn v-on:click="worldStore.setContinent" link class="w-50 h-100 travel-img-btn">
            <img :src="logoUrl" alt="" class="travel-img">
        </v-btn>
    </div>
</template>

<style scoped>
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
