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
        <div class="text-yellow-300 font-semibold text-2xl">Разрешенные</div>
        <ListItem :organizations="organizations.legal"/>
        <div class="text-yellow-300 font-semibold text-2xl">Запрещенные</div>
        <ListItem :organizations="organizations.illegal"/>
        <div class="text-yellow-300 font-semibold text-2xl">Прочее</div>
        <ListItem :organizations="organizations.other"/>
    </div>
</template>

