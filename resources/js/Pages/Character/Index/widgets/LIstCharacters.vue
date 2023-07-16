<script setup>
import SectionUI from "@/Components/UI/SectionUI.vue";
import CreateCharacter from "../features/CreateCharacter.vue";
import Characters from "../components/Characters.vue";


</script>
<template>
    <SectionUI>
        <div class="flex justify-between items-center ">
            <div class="text-yellow-300 text-xl font-bold">
            Персонажи
            </div>
            <div>
                <CreateCharacter/>
            </div>
        </div>
        <Characters/>
    </SectionUI>

</template>
