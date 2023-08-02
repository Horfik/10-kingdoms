<script setup>
import TextInLine from '@/Components/TextInLine.vue';
import Circle from '@/Components/svg/Circle.vue';
import Attribute from '../UI/Attribute.vue';
</script>
<template>
    <TextInLine>Атрибуты</TextInLine>
    <div class="grid gap-2 grid-cols-1 xl:grid-cols-3">
        <div v-for="attribute in $store.state.character.attributes">
            <h1 class="text-center font-bold text-xl">{{ attribute.name }}</h1>
            <div v-for="attr in attribute.attr">
                <Attribute :title="attr.name" :quality="attr.quality"/>
            </div>
        </div>
    </div>
</template>
