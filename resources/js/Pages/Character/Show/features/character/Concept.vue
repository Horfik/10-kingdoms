<script setup>
import Modal from "@/Components/Modal.vue";
import PrimaryButton from "@/Components/UI/PrimaryButton.vue";
import SecondaryButton from "@/Components/SecondaryButton.vue"
import { ref, watch } from "vue";

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
watch(
    () => input.value,
    () => {
        if(input.value)
        {
            input.value.focus();
        }
    }
)



</script>
<template>
<li class="flex justify-between cursor-pointer border-b border-gray-500 p-1" @click="toggle">
    <div>
        <span class="font-semibold">Консепция:</span> {{ $store.state.character.concept }}
    </div>
</li>
<Modal :show="show" @close="toggle">
    <div class="p-6 bg-gray-100">
        <label for="money" class="text-gray-950 text-2xl font-bold">Консепция</label>
        <input
            class="border border-gray-400 bg-gray-200 w-full p-2 block focus:border-gray-600 focus:ring-gray-600 rounded-md shadow-sm"
            :value="modelValue"
            ref="input"
            @input="$emit('update:modelValue', $event.target.value)"
        />
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
