<script setup>
import ListItem from "@/Components/Resources/Organization/ListItem.vue";
const props = defineProps({
    organizations: {
        type: Object,
        required: true,
    }
})
</script>
<template>
    <div class="pl-4">
        <div class="text-yellow-300 font-semibold text-2xl my-2">Разрешенные</div>
        <div class="grid gap-1 grid-cols-1 md:grid-cols-2 ">
            <ListItem :organizations="organizations.legal"/>
        </div>
        <div class="text-yellow-300 font-semibold text-2xl my-2">Запрещенные</div>
        <div class="grid gap-1 grid-cols-1 md:grid-cols-2 ">
            <ListItem :organizations="organizations.illegal"/>
        </div>
        <div class="text-yellow-300 font-semibold text-2xl my-2">Прочее</div>
        <div class="grid gap-1 grid-cols-1 md:grid-cols-2 ">
            <ListItem :organizations="organizations.other"/>
        </div>
    </div>
</template>

