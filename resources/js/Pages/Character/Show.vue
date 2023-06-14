<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import TextInLine from '@/Components/TextInLine.vue';
import {Head} from '@inertiajs/vue3';

const increaseExp = () => {
    const exp = document.getElementById("character-exp");
    exp.value = parseInt(exp.value) + 1;
    if(exp.value === "16")
    {
        exp.value = 15;
        return;
    }
    document.getElementById("exp-" + exp.value).setAttribute("fill-opacity", "1");
    showExp(exp.value);
}
const decreaseExp = () => {
    const exp = document.getElementById("character-exp");
    let tempExp = exp.value;
    exp.value = parseInt(exp.value) - 1;
    if(exp.value === "-1")
    {
        exp.value = 0;
        return;
    }
    document.getElementById("exp-" + tempExp).setAttribute("fill-opacity", "0");
    showExp(exp.value);
}
const showExp = (value) => {
    const expShow = document.getElementById("character-exp-show");
    expShow.innerHTML = value;
}

function increaseCharisma ()
{
    const charisma = document.getElementById("character-charisma");
    charisma.value = parseInt(charisma.value) + 1;
    if(charisma.value === "6")
    {
        charisma.value = 5;
        return;
    }
    document.getElementById("charisma-" + charisma.value).classList.add("bg-black")
    showCharisma(charisma.value);
}
function decreaseCharisma ()
{
    const charisma = document.getElementById("character-charisma");
    let tempCharisma = charisma.value;
    charisma.value = parseInt(charisma.value) - 1;
    if(charisma.value === "-1")
    {
        charisma.value = 0;
        return;
    }
    document.getElementById("charisma-" + tempCharisma).classList.remove("bg-black")
    showCharisma(charisma.value);
}
const showCharisma = (value) => {
    document.getElementById("character-charisma-show").innerHTML = value;

}

</script>

<template>
    <AuthenticatedLayout>
        <Head title="Character"/>
        <!-- sidebar -->
        <aside class="fixed h-full w-60 border-r border-gray-300 bg-white">
            <div class="pt-4 pl-4">
                <div class="character">
                    <div class="character-exp flex items-center justify-between pr-4">
                        <div class="text-xl font-bold">
                            Опыт: <span id="character-exp-show" class="font-normal">0</span>
                            <input type="hidden" value="0" id="character-exp">
                        </div>
                        <div class="flex">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                 stroke="currentColor" class="w-6 h-6 cursor-pointer" @click="increaseExp">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15"/>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                 stroke="currentColor" class="w-6 h-6 cursor-pointer" @click="decreaseExp">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 12h-15"/>
                            </svg>
                        </div>
                    </div>
                    <div class="character-exp flex items-center justify-between pr-4">
                        <div class="text-xl font-bold">
                            Харизма: <span id="character-charisma-show" class="font-normal">0</span>
                            <input type="hidden" value="0" id="character-charisma">
                        </div>
                        <div class="flex">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                 stroke="currentColor" class="w-6 h-6 cursor-pointer" @click="increaseCharisma">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15"/>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                 stroke="currentColor" class="w-6 h-6 cursor-pointer" @click="decreaseCharisma">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 12h-15"/>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </aside>
        <!-- Page Content -->
        <main class="ml-60">
            <div class="bg-white m-4 p-2 flex border border-gray-300 rounded-md">
                <div class="flex flex-col lg:flex-row lg:flex-1">
                    <div class="basis-full lg:basis-1/2">
                        <div>
                        <TextInLine>Опыт</TextInLine>
                        <div class="flex flex-row items-center justify-center ">
                            <div class="character-exp-show flex flex-row gap-4">
                                <svg viewBox="0 0 100 100">
                                    <g transform="matrix(0.951616, 0, 0, 0.955792, -234.800995, -84.884705)" style="">
                                        <path id="exp-1" fill-opacity="0" stroke="rgb(0, 0, 0)" d="M 299.675 140.19 L 346.214 119.11 C 326.735 79.16 272.25 81.527 253.299 117.813 C 254.83 117.751 301.369 141.737 299.675 140.19 Z"/>
                                        <path id="exp-3" fill-opacity="0" stroke="rgb(0, 0, 0)" d="M 299.513 140.19 L 345.89 119.434 C 357.963 141.788 349.555 187.964 300.162 192.242 L 299.513 140.19 Z"/>
                                        <path id="exp-2" fill-opacity="0" stroke="rgb(0, 0, 0)" d="M 299.351 140.352 L 253.299 117.812 C 234.777 157.53 266.367 192.535 299.838 192.404"/>
                                    </g>
                                </svg>
                                <svg  viewBox="0 0 100 100">
                                    <g transform="matrix(0.951616, 0, 0, 0.955792, -234.800995, -84.884705)" style="">
                                        <path id="exp-4" fill-opacity="0" stroke="rgb(0, 0, 0)" d="M 299.675 140.19 L 346.214 119.11 C 326.735 79.16 272.25 81.527 253.299 117.813 C 254.83 117.751 301.369 141.737 299.675 140.19 Z"/>
                                        <path id="exp-6" fill-opacity="0" stroke="rgb(0, 0, 0)" d="M 299.513 140.19 L 345.89 119.434 C 357.963 141.788 349.555 187.964 300.162 192.242 L 299.513 140.19 Z"/>
                                        <path id="exp-5" fill-opacity="0" stroke="rgb(0, 0, 0)" d="M 299.351 140.352 L 253.299 117.812 C 234.777 157.53 266.367 192.535 299.838 192.404"/>
                                    </g>
                                </svg>
                                <svg  viewBox="0 0 100 100">
                                    <g transform="matrix(0.951616, 0, 0, 0.955792, -234.800995, -84.884705)" style="">
                                        <path id="exp-7" fill-opacity="0" stroke="rgb(0, 0, 0)" d="M 299.675 140.19 L 346.214 119.11 C 326.735 79.16 272.25 81.527 253.299 117.813 C 254.83 117.751 301.369 141.737 299.675 140.19 Z"/>
                                        <path id="exp-9" fill-opacity="0" stroke="rgb(0, 0, 0)" d="M 299.513 140.19 L 345.89 119.434 C 357.963 141.788 349.555 187.964 300.162 192.242 L 299.513 140.19 Z"/>
                                        <path id="exp-8" fill-opacity="0" stroke="rgb(0, 0, 0)" d="M 299.351 140.352 L 253.299 117.812 C 234.777 157.53 266.367 192.535 299.838 192.404"/>
                                    </g>
                                </svg>
                                <svg  viewBox="0 0 100 100">
                                    <g transform="matrix(0.951616, 0, 0, 0.955792, -234.800995, -84.884705)" style="">
                                        <path id="exp-10" fill-opacity="0" stroke="rgb(0, 0, 0)" d="M 299.675 140.19 L 346.214 119.11 C 326.735 79.16 272.25 81.527 253.299 117.813 C 254.83 117.751 301.369 141.737 299.675 140.19 Z"/>
                                        <path id="exp-12" fill-opacity="0" stroke="rgb(0, 0, 0)" d="M 299.513 140.19 L 345.89 119.434 C 357.963 141.788 349.555 187.964 300.162 192.242 L 299.513 140.19 Z"/>
                                        <path id="exp-11" fill-opacity="0" stroke="rgb(0, 0, 0)" d="M 299.351 140.352 L 253.299 117.812 C 234.777 157.53 266.367 192.535 299.838 192.404"/>
                                    </g>
                                </svg>
                                <svg  viewBox="0 0 100 100">
                                    <g transform="matrix(0.951616, 0, 0, 0.955792, -234.800995, -84.884705)" style="">
                                        <path id="exp-13" fill-opacity="0" stroke="rgb(0, 0, 0)" d="M 299.675 140.19 L 346.214 119.11 C 326.735 79.16 272.25 81.527 253.299 117.813 C 254.83 117.751 301.369 141.737 299.675 140.19 Z"/>
                                        <path id="exp-15" fill-opacity="0" stroke="rgb(0, 0, 0)" d="M 299.513 140.19 L 345.89 119.434 C 357.963 141.788 349.555 187.964 300.162 192.242 L 299.513 140.19 Z"/>
                                        <path id="exp-14" fill-opacity="0" stroke="rgb(0, 0, 0)" d="M 299.351 140.352 L 253.299 117.812 C 234.777 157.53 266.367 192.535 299.838 192.404"/>
                                    </g>
                                </svg>
                            </div>
                        </div>
                            <div class="flex flex-1 ">
                                <div class="flex-auto font-bold">
                                    Игрок: <span class="font-thin">Сергей</span>
                                </div>
                                <div class="flex-auto font-bold">
                                    Персонаж: <span class="font-thin">Анак</span>
                                </div>
                                <div class="flex-auto font-bold">
                                    Наследие: <span class="font-thin">На все руки мастер</span>
                                </div>
                                <div class="flex-auto font-bold">
                                    Род: <span class="font-thin">Человек</span>
                                </div>
                            </div>
                        </div>
                        <div>
                            <TextInLine>Атрибуты</TextInLine>
                            <div class="flex flex-1 flex-row gap-2">
                                <div class="flex-auto">
                                    <p class="text-center font-bold text-xl">Социальные</p>
                                    <div class="border-b-2 flex flex-row justify-between mb-2">
                                        <div>
                                            Харизма
                                        </div>
                                        <div class="flex gap-1">
                                            <div id="charisma-1" class="border-black border rounded-full w-4 h-4"></div>
                                            <div id="charisma-2" class="border-black border rounded-full w-4 h-4"></div>
                                            <div id="charisma-3" class="border-black border rounded-full w-4 h-4"></div>
                                            <div id="charisma-4" class="border-black border rounded-full w-4 h-4"></div>
                                            <div id="charisma-5" class="border-black border border-red-500 rounded-full w-4 h-4"></div>
                                        </div>
                                    </div>
                                    <div class="border-b-2 flex flex-row justify-between mb-2">
                                        <div>Манипулирование</div>
                                        <div class="flex gap-1">
                                            <div class="border-black border rounded-full w-4 h-4"></div>
                                            <div class="border-black border rounded-full w-4 h-4"></div>
                                            <div class="border-black border rounded-full w-4 h-4"></div>
                                            <div class="border-black border rounded-full w-4 h-4"></div>
                                            <div class="border-black border border-red-500 rounded-full w-4 h-4"></div>
                                        </div>
                                    </div>
                                    <div class="border-b-2 flex flex-row justify-between mb-2">
                                        <div>Проницательность</div>
                                        <div class="flex gap-1">
                                            <div class="border-black border rounded-full w-4 h-4"></div>
                                            <div class="border-black border rounded-full w-4 h-4"></div>
                                            <div class="border-black border rounded-full w-4 h-4"></div>
                                            <div class="border-black border rounded-full w-4 h-4"></div>
                                            <div class="border-black border border-red-500 rounded-full w-4 h-4"></div>
                                        </div>
                                    </div>
                                    <div class="border-b-2 flex flex-row justify-between mb-2">
                                        <div>Храбрость</div>
                                        <div class="flex gap-1">
                                            <div class="border-black border rounded-full w-4 h-4"></div>
                                            <div class="border-black border rounded-full w-4 h-4"></div>
                                            <div class="border-black border rounded-full w-4 h-4"></div>
                                            <div class="border-black border rounded-full w-4 h-4"></div>
                                            <div class="border-black border border-red-500 rounded-full w-4 h-4"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex-auto">
                                    <p class="text-center font-bold text-xl">Ментальные</p>
                                    <div class="border-b-2 flex flex-row justify-between mb-2">
                                        <div>Внимание</div>
                                        <div class="flex gap-1">
                                            <div class="border-black border rounded-full w-4 h-4"></div>
                                            <div class="border-black border rounded-full w-4 h-4"></div>
                                            <div class="border-black border rounded-full w-4 h-4"></div>
                                            <div class="border-black border rounded-full w-4 h-4"></div>
                                            <div class="border-black border border-red-500 rounded-full w-4 h-4"></div>
                                        </div>
                                    </div>
                                    <div class="border-b-2 flex flex-row justify-between mb-2">
                                        <div>Интелект</div>
                                        <div class="flex gap-1">
                                            <div class="border-black border rounded-full w-4 h-4"></div>
                                            <div class="border-black border rounded-full w-4 h-4"></div>
                                            <div class="border-black border rounded-full w-4 h-4"></div>
                                            <div class="border-black border rounded-full w-4 h-4"></div>
                                            <div class="border-black border border-red-500 rounded-full w-4 h-4"></div>
                                        </div>
                                    </div>
                                    <div class="border-b-2 flex flex-row justify-between mb-2">
                                        <div>Знания</div>
                                        <div class="flex gap-1">
                                            <div class="border-black border rounded-full w-4 h-4"></div>
                                            <div class="border-black border rounded-full w-4 h-4"></div>
                                            <div class="border-black border rounded-full w-4 h-4"></div>
                                            <div class="border-black border rounded-full w-4 h-4"></div>
                                            <div class="border-black border border-red-500 rounded-full w-4 h-4"></div>
                                        </div>
                                    </div>
                                    <div class="border-b-2 flex flex-row justify-between mb-2">
                                        <div>Навыки</div>
                                        <div class="flex gap-1">
                                            <div class="border-black border rounded-full w-4 h-4"></div>
                                            <div class="border-black border rounded-full w-4 h-4"></div>
                                            <div class="border-black border rounded-full w-4 h-4"></div>
                                            <div class="border-black border rounded-full w-4 h-4"></div>
                                            <div class="border-black border border-red-500 rounded-full w-4 h-4"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex-auto">
                                    <p class="text-center font-bold text-xl">Физические</p>
                                    <div class="border-b-2 flex flex-row justify-between mb-2">
                                        <div>Телосложение</div>
                                        <div class="flex gap-1">
                                            <div class="border-black border rounded-full w-4 h-4"></div>
                                            <div class="border-black border rounded-full w-4 h-4"></div>
                                            <div class="border-black border rounded-full w-4 h-4"></div>
                                            <div class="border-black border rounded-full w-4 h-4"></div>
                                            <div class="border-black border border-red-500 rounded-full w-4 h-4"></div>
                                        </div>
                                    </div>
                                    <div class="border-b-2 flex flex-row justify-between mb-2">
                                        <div>Ловкость</div>
                                        <div class="flex gap-1">
                                            <div class="border-black border rounded-full w-4 h-4"></div>
                                            <div class="border-black border rounded-full w-4 h-4"></div>
                                            <div class="border-black border rounded-full w-4 h-4"></div>
                                            <div class="border-black border rounded-full w-4 h-4"></div>
                                            <div class="border-black border border-red-500 rounded-full w-4 h-4"></div>
                                        </div>
                                    </div>
                                    <div class="border-b-2 flex flex-row justify-between mb-2">
                                        <div>Нападение</div>
                                        <div class="flex gap-1">
                                            <div class="border-black border rounded-full w-4 h-4"></div>
                                            <div class="border-black border rounded-full w-4 h-4"></div>
                                            <div class="border-black border rounded-full w-4 h-4"></div>
                                            <div class="border-black border rounded-full w-4 h-4"></div>
                                            <div class="border-black border border-red-500 rounded-full w-4 h-4"></div>
                                        </div>
                                    </div>
                                    <div class="border-b-2 flex flex-row justify-between mb-2">
                                        <div>Скрытность</div>
                                        <div class="flex gap-1">
                                            <div class="border-black border rounded-full w-4 h-4"></div>
                                            <div class="border-black border rounded-full w-4 h-4"></div>
                                            <div class="border-black border rounded-full w-4 h-4"></div>
                                            <div class="border-black border rounded-full w-4 h-4"></div>
                                            <div class="border-black border border-red-500 rounded-full w-4 h-4"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="basis-full lg:basis-1/2">
                        2
                    </div>
                </div>
            </div>
        </main>
    </AuthenticatedLayout>
</template>

<script>
export default {
    name: "Show"
}
</script>

<style scoped>
    .character-exp-show svg{
        height: 40px;
        width: 40px;
    }
</style>
