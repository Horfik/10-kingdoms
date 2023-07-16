<script setup>
import Circle from "@/Components/svg/Circle.vue"
import { useStore } from 'vuex';
import { watch, onMounted } from "vue";

const store = useStore();

watch(
    () => store.state.character.experience,
    () => {
        changeExperience();
    }
);

onMounted(
    () => {
        changeExperience();
    }
)

const changeExperience = () => {
    document.querySelectorAll(".experience").forEach((elem) => {
        if(elem.getAttribute('exp') <= store.state.character.experience)
        {
            elem.setAttribute('fill', 'yes')
        }
        else
        {
            elem.setAttribute('fill', 'none')
        }
    })
}

</script>
<template>
    <div class="text-xl font-bold ">Опыт</div>
    <div class="flex flex-col gap-1">
        <div class="flex gap-1">
            <Circle class="experience" exp="1" fill="none"/>
            <Circle class="experience" exp="2" fill="none"/>
            <Circle class="experience" exp="3" fill="none"/>
            <Circle class="experience" exp="4" fill="none"/>
            <Circle class="experience" exp="5" fill="none"/>
        </div>
        <div class="flex gap-1">
            <Circle class="experience" exp="6" fill="none"/>
            <Circle class="experience" exp="7" fill="none"/>
            <Circle class="experience" exp="8" fill="none"/>
            <Circle class="experience" exp="9" fill="none"/>
            <Circle class="experience" exp="10" fill="none"/>
        </div>
        <div class="flex gap-1">
            <Circle class="experience" exp="11" fill="none"/>
            <Circle class="experience" exp="12" fill="none"/>
            <Circle class="experience" exp="13" fill="none"/>
            <Circle class="experience" exp="14" fill="none"/>
            <Circle class="experience" exp="15" fill="none"/>
        </div>
    </div>
</template>
