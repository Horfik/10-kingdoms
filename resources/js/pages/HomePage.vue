<script setup lang="ts">
import ChooseWorld from "@/js/components/home/ChooseWorld.vue";
import {useWorldStore} from "@/js/stores/WorldStore";
import {worlds} from "@/js/constants/Words";

const worldStore = useWorldStore();
</script>

<template>
    <main class="flex" id="travel">
        <choose-world v-show="worldStore.world === worlds.start"></choose-world>
        <div v-show="worldStore.world === worlds.fairy">fairy</div>
        <div v-show="worldStore.world === worlds.continent">continent</div>
    </main>
</template>

<style scoped>


</style>
