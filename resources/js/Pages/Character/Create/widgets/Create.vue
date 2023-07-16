<script setup>
import SectionUI from "@/Components/UI/SectionUI.vue";
import PrimaryButton from "@/Components/UI/PrimaryButton.vue";
import TextInput from "@/Components/UI/TextInput.vue";
import InputLabel from "@/Components/UI/InputLabel.vue";
import InputError from "@/Components/UI/InputError.vue";
import {useForm, usePage} from "@inertiajs/vue3";
import SelectInput from "@/Components/UI/SelectInput.vue";
const races = usePage().props.races;
const player = usePage().props.player;


const form = useForm({
    name: '',
    race_id: '',
    player: player,
    concept: '',
})

const submit = () => {
    form.post(route('character.store'));
};

</script>
<template>
    <SectionUI>
        <h1 class="text-xl font-bold text-center text-yellow-300">Создать персонажа</h1>
        <form @submit.prevent="submit">
            <div class="mt-2">
                <InputLabel for="name" value="Имя"/>
                <TextInput
                    class="w-full"
                    type="text"
                    id="name"
                    v-model="form.name"
                    required
                    autofocus
                />
                <InputError class="mt-2" :message="form.errors.name"/>
            </div>
            <div class="mt-2">
                <InputLabel for="race" value="Раса"/>
                <SelectInput
                    required
                    class="w-full"
                    type="text"
                    id="race"
                    v-model="form.race_id"
                >
                    <option v-for="race in races" :value="race.id">{{ race.name }}</option>
                </SelectInput>
                <InputError class="mt-2" :message="form.errors.race_id"/>
            </div>
            <div class="mt-2">
                <InputLabel for="player" value="Игрок"/>
                <TextInput
                    class="w-full"
                    type="text"
                    id="player"
                    v-model="form.player"
                />
                <InputError class="mt-2" :message="form.errors.player"/>
            </div>
            <div class="mt-2">
                <InputLabel for="concept" value="Концепция"/>
                <TextInput
                    class="w-full"
                    type="text"
                    id="concept"
                    v-model="form.concept"
                />
                <InputError class="mt-2" :message="form.errors.concept"/>
            </div>
            <div class="flex items-center justify-end mt-4">
                <PrimaryButton class="ml-4" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                    Создать
                </PrimaryButton>
            </div>
        </form>
    </SectionUI>
</template>
