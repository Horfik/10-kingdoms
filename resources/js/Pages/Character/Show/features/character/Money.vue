<script setup>
import Modal from "@/Components/Modal.vue";
import InputLabel from "@/Components/UI/InputLabel.vue";
import PrimaryButton from "@/Components/UI/PrimaryButton.vue";
import SecondaryButton from "@/Components/SecondaryButton.vue"
import { ref } from "vue";

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

</script>
<template>
<li class="flex justify-between p-1 cursor-pointer" @click="toggle">
    <div>
        <span class="font-semibold">Богатство:</span> {{ $store.state.character.money }}
    </div>
</li>
<Modal :show="show" @close="toggle">
    <div class="p-6 bg-gray-100">
        <InputLabel for="name" value="Богатство" class="text-gray-950 text-4xl"/>
        <input
            class="border border-gray-400 bg-gray-200 w-full p-2 block focus:border-gray-600 focus:ring-gray-600 rounded-md shadow-sm"
            :value="modelValue"
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
