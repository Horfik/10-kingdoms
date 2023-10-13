<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, Link } from '@inertiajs/vue3';
import EmblemPage from "@/Components/EmblemPage.vue";
import SectionUI from "@/Components/UI/SectionUI.vue";


</script>

<template>
    <Head title="Главная"/>
    <AuthenticatedLayout>
        <SectionUI>
            <h1 class="mb-6 text-2xl font-bold text-center text-yellow-300">
                Добро пожаловать в Десять королевств
            </h1>
            <div class="font-fantasy text-center text-4xl">
                Затерянный Материк, омываемый Бескрайним океаном со всех сторон, вмещает в себя Девять королевств.
                Каждое из них воплощает в себе историю, которую мы привыкли слышать, как сказку на ночь с самого детства.
                Но тут это не выдумки, которые пересказывают, чтобы впечатлить или чему-то научить несмышлёное дитя. Это история. Их история.
                Почти два века прошло с тех пор, как судьбу этого мира вершили великие леди: Белоснежка, Красная Шапочка, Золушка и другие.
                Впрочем, последняя жива и по сей день, правя самым процветающим из Девяти... Сказки давно закончились. Добро победило. Злодеи повержены и наказаны.
                Миру больше ничего не угрожает. Или покой и безмятежность лишь предвещают новые беды и Материк снова в опасности, а «жили долго и счастливо» всего лишь красивые слова?
                Короли и бродяги, рыцари и колдуны, боги и демоны. Все это можно встретить на Материке.
                Главное, чтобы Вам удалось потом рассказать об этой встрече. Теперь историю Девяти королевств вершите Вы.
            </div>
            <br>
            <br>
            <span>
                Разговорно-ролевая игра по оригинальному миру, написанному по мотивам сказок и легенд разных народов мира.
                Адаптированная под мир упрощенная система WoD.
                Игры проходят в Discord.
            </span>

        </SectionUI>
        <div class="p-6 m-4 rounded-md bg-indigo-950">


            <div class="flex flex-row flex-wrap justify-around gap-4 mt-4">
                <EmblemPage :routeName="'kingdom.index'" :path="'/storage/images/emblems/kingdom.png'" :title="'Королевства'"/>
                <EmblemPage :routeName="'organization.index'" :path="'/storage/images/emblems/dom.png'" :title="'Организации'"/>
                <EmblemPage :routeName="'race.index'" :path="'/storage/images/emblems/fairy.png'" :title="'Народы'"/>
                <EmblemPage :routeName="'art.index'" :path="'/storage/images/emblems/magic.png'" :title="'Искусства'"/>
                <EmblemPage :routeName="'person.index'" :path="'/storage/images/emblems/hood.png'" :title="'Личности'"/>
                <EmblemPage :routeName="'mechanic.index'" :path="'/storage/images/emblems/mechanics.png'" :title="'Механики'"/>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
