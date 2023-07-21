<script setup>
import TextInLine from '@/Components/TextInLine.vue';
import Circle from '@/Components/svg/Circle.vue';
import Attribute from '../UI/Attribute.vue';
</script>
<template>
    <TextInLine>Атрибуты</TextInLine>
    <div class="grid gap-2 grid-cols-1 xl:grid-cols-3">
        <div>
            <h1 class="text-center font-bold text-xl">Социальные</h1>
            <div>
                <Attribute title="Харизма"/>
                <Attribute title="Манипулирование"/>
                <Attribute title="Проницательность"/>
                <Attribute title="Обман"/>
                <Attribute title="Храбрость"/>
            </div>
            <div>
                some
            </div>
        </div>
        <div>
            <h1 class="text-center font-bold text-xl">Ментальные</h1>
            <div>
                <Attribute title="Внимание"/>
                <Attribute title="Интеллект"/>
                <Attribute title="Науки"/>
                <Attribute title="Культура"/>
                <Attribute title="Навыки"/>
            </div>
            <div>
                some
            </div>
        </div>
        <div>
            <h1 class="text-center font-bold text-xl">Физические</h1>
            <div>
                <Attribute title="Телосложение"/>
                <Attribute title="Защита"/>
                <Attribute title="Ловкость"/>
                <Attribute title="Нападение"/>
                <Attribute title="Скрытность"/>
            </div>
            <div>
                some
            </div>
        </div>
    </div>
</template>
