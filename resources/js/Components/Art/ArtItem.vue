<template>
    <div class="font-bold text-4xl text-yellow-300">
        {{ art.name }}
    </div>
    <div class="mt-2 text-xl">
        {{art.description}}
    </div>
    <div class="mt-2 text-xl">
        <span class="font-bold text-yellow-300">Бросок: </span>{{art.attributes}}
    </div>
    <div class="mt-3 whitespace-pre-line text-xl">
        <span class="font-bold text-yellow-300">1. {{art.first_stage_name}}:</span> {{art.first_stage_description}}
    </div>
    <div class="mt-3 whitespace-pre-line text-xl">
        <span class="font-bold text-yellow-300">2. {{art.second_stage_name}}:</span> {{art.second_stage_description}}
    </div>
    <div class="mt-3 whitespace-pre-line text-xl">
        <span class="font-bold text-yellow-300">3. {{art.third_stage_name}}:</span> {{art.third_stage_description}}
    </div>
    <div class="mt-3 whitespace-pre-line text-xl">
        <span class="font-bold text-yellow-300">4. {{art.fourth_stage_name}}:</span> {{art.fourth_stage_description}}
    </div>
</template>

<script>
export default {
    name: "ArtItem",
    props: {
        art: {
            type: Object,
            required: true
        }
    }
}
</script>

<style scoped>

</style>
