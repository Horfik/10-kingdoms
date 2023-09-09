<template>
    <div class="text-4xl font-bold text-yellow-300">
        {{ art.name }}
    </div>
    <div class="mt-2 text-xl">
        {{art.description}}
    </div>
    <div class="mt-2 text-xl">
        <span class="font-bold text-yellow-300">Бросок: </span>{{art.attributes}}
    </div>

    <div class="mt-3 text-xl whitespace-pre-line">
        <p class="text-2xl font-bold text-yellow-300">1. {{art.first_stage_name}}</p>
        <div class="ml-6">
            <p>
                <span class="font-bold text-yellow-300">Описание:</span> {{art.first_stage_description}}
            </p>
            <p v-if="art.first_stage_condition">
                <span class="font-bold text-yellow-300">Нюансы:</span> {{art.first_stage_condition}}
            </p>
        </div>
    </div>
    <div class="mt-3 text-xl whitespace-pre-line">
        <p class="text-2xl font-bold text-yellow-300">2. {{art.second_stage_name}}</p>
        <div class="ml-6">
            <p>
                <span class="font-bold text-yellow-300">Описание:</span> {{art.second_stage_description}}
            </p>
            <p v-if="art.second_stage_condition">
                <span class="font-bold text-yellow-300">Нюансы:</span> {{art.second_stage_condition}}
            </p>
        </div>
    </div>
    <div class="mt-3 text-xl whitespace-pre-line">
        <p class="text-2xl font-bold text-yellow-300">3. {{art.third_stage_name}}</p>
        <div class="ml-6">
            <p>
                <span class="font-bold text-yellow-300">Описание:</span> {{art.third_stage_description}}
            </p>
            <p v-if="art.third_stage_condition">
                <span class="font-bold text-yellow-300">Нюансы:</span> {{art.third_stage_condition}}
            </p>
        </div>
    </div>
    <div class="mt-3 text-xl whitespace-pre-line">
        <p class="text-2xl font-bold text-yellow-300">4. {{art.fourth_stage_name}}</p>
        <div class="ml-6">
            <p>
                <span class="font-bold text-yellow-300">Описание:</span> {{art.fourth_stage_description}}
            </p>
            <p v-if="art.fourth_stage_condition">
                <span class="font-bold text-yellow-300">Нюансы:</span> {{art.fourth_stage_condition}}
            </p>
        </div>
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
