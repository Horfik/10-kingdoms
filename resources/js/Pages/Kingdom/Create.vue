<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import PrimaryButton from '@/components/UI/PrimaryButton.vue';
import InputError from '@/Components/UI/InputError.vue';
import InputLabel from '@/Components/UI/InputLabel.vue';
import TextInput from '@/Components/UI/TextInput.vue';
import DescriptionText from '@/Components/UI/DescriptionText.vue';
import SectionUI from "@/Components/UI/SectionUI.vue";
import InputFile from "@/Components/UI/InputFile.vue";
import Dropzone from "dropzone";
import {onMounted, ref} from 'vue';
import {Head, Link, useForm, usePage} from '@inertiajs/vue3';
const form = useForm({
    name: '',
    capital: '',
    ruler: '',
    population: '',
    attraction: '',
    emblem: '',
    description: '',
});


const submit = () => {
    form.post(route('kingdom.store'));
};
</script>

<template>
    <Head title="Добавить королевство"/>
    <AuthenticatedLayout>
        <SectionUI>
            <h1 class="text-xl text-yellow-300 text-center">
                Добавить королевство
            </h1>
            <form @submit.prevent="submit">
                <div class="mt-2">
                    <InputLabel for="name" value="Название"/>
                    <TextInput
                        name="name"
                        id="name"
                        type="text"
                        v-model="form.name"
                        class="mt-1 block w-full"
                        autocomplete="off"
                        autofocus
                    />
                    <InputError :message="form.errors.name"/>
                </div>
                <div class="mt-2">
                    <InputLabel for="capital" value="Столица"/>
                    <TextInput
                        name="capital"
                        id="capital"
                        type="text"
                        v-model="form.capital"
                        class="mt-1 block w-full"
                        autocomplete="off"
                    />
                    <InputError :message="form.errors.capital"/>
                </div>
                <div class="mt-2">
                    <InputLabel for="ruler" value="Правитель"/>
                    <TextInput
                        name="ruler"
                        id="ruler"
                        type="text"
                        v-model="form.ruler"
                        class="mt-1 block w-full"
                        autocomplete="off"
                    />
                    <InputError :message="form.errors.ruler"/>
                </div>
                <div class="mt-2">
                    <InputLabel for="population" value="Основное население"/>
                    <TextInput
                        name="population"
                        id="population"
                        type="text"
                        v-model="form.population"
                        class="mt-1 block w-full"
                        autocomplete="off"
                    />
                    <InputError :message="form.errors.population"/>
                </div>
                <div class="mt-2">
                    <InputLabel for="attraction" value="Достопримечательности"/>
                    <TextInput
                        name="attraction"
                        id="attraction"
                        type="text"
                        v-model="form.attraction"
                        class="mt-1 block w-full"
                        autocomplete="off"
                    />
                    <InputError :message="form.errors.attraction"/>
                </div>
                <div class="mt-2">
                    <InputLabel for="emblem" value="Герб"/>
                    <TextInput
                        name="emblem"
                        id="emblem"
                        type="text"
                        v-model="form.emblem"
                        class="mt-1 block w-full"
                        autocomplete="off"
                    />
                    <InputError :message="form.errors.emblem"/>
                </div>
                <div class="mt-2">
                    <InputLabel for="description" value="Описание"/>
                    <DescriptionText
                        class="w-full"
                        id="description"
                        name="description"
                        v-model="form.description"
                    />
                    <InputError :message="form.errors.description"/>
                </div>
                <div class="flex items-center justify-end mt-4">
                    <PrimaryButton class="ml-4" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                        Создать
                    </PrimaryButton>
                </div>
            </form>
        </SectionUI>
    </AuthenticatedLayout>
</template>
