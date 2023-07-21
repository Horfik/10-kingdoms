<script setup>
import CharacterItem from '../UI/CharacterItem.vue';
import Experience from '../UI/Experience.vue';
import TextInLine from '@/Components/TextInLine.vue';
</script>
<template>
    <TextInLine>Персонаж</TextInLine>
    <div class="grid grid-cols-1 gap-3 lg:grid-cols-2">
        <div class="">
            <CharacterItem title="Персонаж" :value="$store.state.character.name"/>
            <CharacterItem title="Игрок" :value="$store.state.character.player"/>
            <CharacterItem title="Раса" :value="$store.state.character.race.name"/>
        </div>
        <div>
            <CharacterItem title="Возраст" :value="$store.state.character.age"/>
            <CharacterItem title="Концепция" :value="$store.state.character.concept"/>
            
        </div>
        <div>
            <Experience/>
        </div>
        <div>
            <CharacterItem class="text-2xl" title="Богатство" :value="$store.state.character.money"/>
        </div>
    </div>
    
    <div>
        
    </div>
</template>
