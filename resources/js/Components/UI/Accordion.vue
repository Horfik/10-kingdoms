<script setup>
import { ref } from 'vue';

const props = defineProps({
    title: {
        type: String,
    }
})

const show = ref(false);

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
    <div class="border border-gray-400">
        <div
            @click="toggle"
            class="bg-gray-200 p-2 text-2xl font-bold border-b border-gray-500 flex items-center justify-between"
        >
            <div>
                {{ title }}
            </div>
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" 
                    class="w-6 h-6" v-show="show">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor"
                     class="w-6 h-6" v-show="!show">
                    <path strokeLinecap="round" strokeLinejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                </svg>

            </div>
        </div>
        <div v-show="show" class="">
            <slot/>
        </div>
    </div>
</template>
