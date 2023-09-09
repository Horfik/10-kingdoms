<script setup>
import ListItem from './ListItem.vue'
const props = defineProps({
    races:{
        type: Array,
        required: true
    }
})
</script>
<template>
    <div class="pl-4">
        <div class="text-yellow-300 font-semibold text-2xl my-2">Доступные для игры</div>
        <div class="grid gap-1 grid-cols-1 md:grid-cols-2 lg:grid-cols-4">
            <ListItem :races="races.game"/>
        </div>
        <div class="text-yellow-300 font-semibold text-2xl my-2">Не доступные для игры</div>
        <div class="grid gap-1 grid-cols-1 md:grid-cols-2 lg:grid-cols-4">
            <ListItem :races="races.notGame"/>
        </div>
        <div class="text-yellow-300 font-semibold text-2xl my-2">Фэйри</div>
        <div class="grid gap-1 grid-cols-1 md:grid-cols-2 lg:grid-cols-4">
            <ListItem :races="races.fairy"/>
        </div>

    </div>
</template>
