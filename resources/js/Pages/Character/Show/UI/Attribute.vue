<script setup>
defineProps({
    title: {
        type: String,
        required: true
    }
})
import Circle from '@/Components/svg/Circle.vue';
</script>
<template>
    <div class="flex flex-wrap items-center justify-between border-b border-gray-300">
        <div class="font-semibold">
            {{ title }}
        </div>
        <div class="flex gap-1">
            <svg width="100" height="20" viewBox="0 0 478 113" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="42.5" cy="56.5" r="41.5" stroke="black" stroke-width="2"/>
                <circle cx="137.5" cy="56.5" r="41.5" stroke="black" stroke-width="2"/>
                <circle cx="232.5" cy="56.5" r="41.5" stroke="black" stroke-width="2"/>
                <circle cx="327.5" cy="56.5" r="41.5" stroke="black" stroke-width="2"/>
                <circle cx="422.5" cy="56.5" r="41.5" stroke="black" stroke-width="2"/>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M429.284 14.5385L423 0L416.784 14.3811C418.653 14.1298 420.562 14 422.5 14C424.809 14 427.075 14.1841 429.284 14.5385ZM447.601 22.2004C450.974 24.6737 453.97 27.6328 456.484 30.9747L461.891 16.5485L447.601 22.2004ZM464.561 50.37C464.85 52.3716 465 54.4183 465 56.5C465 58.5817 464.85 60.6284 464.561 62.63L478 56.5L464.561 50.37ZM456.484 82.0253C453.97 85.3672 450.974 88.3263 447.601 90.7996L461.891 96.4515L456.484 82.0253ZM429.284 98.4615C427.075 98.8159 424.809 99 422.5 99C420.562 99 418.653 98.8702 416.784 98.6189L423 113L429.284 98.4615ZM397.752 91.0555C394.533 88.7456 391.649 85.9968 389.189 82.8968L384.109 96.4515L397.752 91.0555ZM380.371 62.1431C380.126 60.2969 380 58.4132 380 56.5C380 54.5868 380.126 52.7031 380.371 50.8569L368 56.5L380.371 62.1431ZM389.189 30.1032C391.649 27.0032 394.533 24.2544 397.752 21.9445L384.109 16.5485L389.189 30.1032Z" fill="#020202"/>
            </svg>
        </div>
    </div>
</template>
