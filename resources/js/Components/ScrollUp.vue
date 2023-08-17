<script setup>
    const scrollTop = () => {
        window.scrollTo(0, 0);
    }
</script>
<template>
    <div class="fixed bottom-5 right-5 cursor-pointer " >
        <div>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" @click="scrollTop"
                    stroke="currentColor"
                    class="w-10 h-10  text-yellow-300">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15 11.25l-3-3m0 0l-3 3m3-3v7.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
        </div>
    </div>
</template>
