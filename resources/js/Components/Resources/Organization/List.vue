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
        <div class="my-2 text-2xl font-semibold text-yellow-300">Разрешенные</div>
        <div class="grid grid-cols-1 gap-1 md:grid-cols-2 ">
            <ListItem :organizations="organizations.legal"/>
        </div>
        <div class="my-2 text-2xl font-semibold text-yellow-300">Запрещенные</div>
        <div class="grid grid-cols-1 gap-1 md:grid-cols-2 ">
            <ListItem :organizations="organizations.illegal"/>
        </div>
        <div class="my-2 text-2xl font-semibold text-yellow-300">Неподтвержденные</div>
        <div class="grid grid-cols-1 gap-1 md:grid-cols-2 ">
            <ListItem :organizations="organizations.other"/>
        </div>
    </div>
</template>

