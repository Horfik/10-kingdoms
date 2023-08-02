<script setup>
import Modal from "@/Components/Modal.vue";
import PrimaryButton from "@/Components/UI/PrimaryButton.vue";
import SecondaryButton from "@/Components/SecondaryButton.vue"
import { ref, watch } from "vue";
import {useForm} from "@inertiajs/vue3"
import axios from "axios";

const show = ref(false);

defineEmits(['update:modelValue']);

const props = defineProps({
    updateCharacter: {
        type: Function,
        required: true,
    },
    modelValue: {
        type: [Number, String],
        required: false,
    }
})

const toggle = () => {
    if(show.value)
    {
        show.value = false;
    }
    else
    {
        show.value = true;
    }
}
const input = ref(null);
const races = ref(null);
watch(
    () => input.value,
    () => {
        if(input.value)
        {
            axios.get('/api/race')
            .then((response) => {
                races.value = response.data;
            });
            input.value.focus();
        }
    }
)



</script>
<template>
<li class="flex justify-between cursor-pointer border-b border-gray-500 p-1" @click="toggle">
    <div>
        <span class="font-semibold">Раса:</span> {{ $store.state.character.race.name }}
    </div>
</li>
<Modal :show="show" @close="toggle">
    <div class="p-6 bg-gray-100">
        <label for="money" class="text-gray-950 text-2xl font-bold">Раса</label>
        <select class="border border-gray-400 bg-gray-200 w-full p-2 block focus:border-gray-600 focus:ring-gray-600 rounded-md shadow-sm"
            @input="$emit('update:modelValue', $event.target.value)"
            :value="modelValue"
            ref="input"

        >
            <option v-for="race in races" :value="race.id">{{ race.name }}</option>
        </select>
        <div class="mt-6 flex justify-end">
            <SecondaryButton @click="toggle"> Закрыть </SecondaryButton>

            <PrimaryButton
                class="ml-3"
                @click="updateCharacter(); toggle()"
            >
                Сохранить
            </PrimaryButton>
        </div>
    </div>
   
    
</Modal>
</template>
