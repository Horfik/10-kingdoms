<script setup>
import EmblemPage from "@/Components/EmblemPage.vue";
import SectionUI from "@/Components/UI/SectionUI.vue";


</script>
<template>
    <div class="p-6 m-4 rounded-md sticky bottom-0 bg-gray-950 ">
        <div class="flex flex-row flex-wrap justify-around gap-4 mt-4">
            <EmblemPage :routeName="'kingdom.index'" :path="'/storage/images/emblems/kingdom.png'" :title="'Королевства'"/>
            <EmblemPage :routeName="'organization.index'" :path="'/storage/images/emblems/dom.png'" :title="'Организации'"/>
            <EmblemPage :routeName="'race.index'" :path="'/storage/images/emblems/fairy.png'" :title="'Народы'"/>
            <EmblemPage :routeName="'art.index'" :path="'/storage/images/emblems/magic.png'" :title="'Искусства'"/>
            <EmblemPage :routeName="'mechanic.index'" :path="'/storage/images/emblems/mechanics.png'" :title="'Механики'"/>
        </div>
    </div>
</template>

