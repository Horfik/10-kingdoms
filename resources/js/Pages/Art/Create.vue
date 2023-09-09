<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import PrimaryButton from '@/components/UI/PrimaryButton.vue';
import InputError from '@/Components/UI/InputError.vue';
import InputLabel from '@/Components/UI/InputLabel.vue';
import TextInput from '@/Components/UI/TextInput.vue';
import DescriptionText from '@/Components/UI/DescriptionText.vue';
import SelectInput from '@/Components/UI/SelectInput.vue';

import {Head, Link, useForm, usePage} from '@inertiajs/vue3';
const form = useForm({
    name: '',
    attributes: '',
    description: '',
    type: 1,
    first_stage_name: '',
    first_stage_description: '',
    first_stage_condition: '',
    second_stage_name: '',
    second_stage_description: '',
    second_stage_condition: '',
    third_stage_name: '',
    third_stage_description: '',
    third_stage_condition: '',
    fourth_stage_name: '',
    fourth_stage_description: '',
    fourth_stage_condition: '',
});

const submit = () => {
    form.post(route('art.store'));
};

</script>

<template>
    <Head title="Добавить Искусства"/>
    <AuthenticatedLayout>
        <div class="p-4 m-4 rounded-md bg-indigo-950">
            <h1 class="text-xl font-semibold text-center text-yellow-300">Создать искусство</h1>
            <form @submit.prevent="submit">
                <div class="mt-2">
                    <InputLabel for="type" value="Тип" />
                    <SelectInput class="w-full" id="type" name="type" v-model="form.type">
                        <option value="1">общая</option>
                        <option value="2">темная магия</option>
                        <option value="3">магия фейри</option>
                    </SelectInput>
                </div>
                <div class="mt-2">
                    <InputLabel for="name" value="Название" />
                    <TextInput
                        id="name"
                        type="text"
                        class="block w-full mt-1"
                        v-model="form.name"
                        required
                        autofocus
                    />
                    <InputError class="mt-2" :message="form.errors.name" />
                </div>
                <div class="mt-2">
                    <InputLabel for="description" value="Описание" />
                    <DescriptionText
                        id="description"
                        type="text"
                        class="block w-full mt-1"
                        v-model="form.description"
                        required
                    />
                    <InputError class="mt-2" :message="form.errors.description" />
                </div>
                <div class="mt-2">
                    <InputLabel for="attributes" value="Бросок" />
                    <TextInput
                        id="attributes"
                        type="text"
                        class="block w-full mt-1"
                        v-model="form.attributes"
                        required
                    />
                    <InputError class="mt-2" :message="form.errors.attributes" />
                </div>

                <div class="mt-2">
                    <p class="text-2xl font-bold text-yellow-300">Первая точка</p>
                    <div class="ml-6">
                        <div class="mt-2">
                            <InputLabel for="first_stage_name" value="Название" />
                            <TextInput
                                id="first_stage_name"
                                type="text"
                                class="block w-full mt-1"
                                v-model="form.first_stage_name"
                                required
                            />
                            <InputError class="mt-2" :message="form.errors.first_stage_name" />
                        </div>
                        <div class="mt-2">
                            <InputLabel for="first_stage_description" value="Описание" />
                            <DescriptionText
                                id="first_stage_description"
                                type="text"
                                class="block w-full mt-1"
                                v-model="form.first_stage_description"
                                required
                            />
                            <InputError class="mt-2" :message="form.errors.first_stage_description" />
                        </div>
                        <div class="mt-2">
                            <InputLabel for="first_stage_condition" value="Условие" />
                            <DescriptionText
                                id="first_stage_condition"
                                type="text"
                                class="block w-full mt-1"
                                v-model="form.first_stage_condition"
                            />
                            <InputError class="mt-2" :message="form.errors.first_stage_condition" />
                        </div>
                    </div>
                </div>
                <div class="mt-2">
                    <p class="text-2xl font-bold text-yellow-300">Вторая точка</p>
                    <div class="ml-6">
                        <div class="mt-2">
                            <InputLabel for="second_stage_name" value="Название" />
                            <TextInput
                                id="second_stage_name"
                                type="text"
                                class="block w-full mt-1"
                                v-model="form.second_stage_name"
                                required
                            />
                            <InputError class="mt-2" :message="form.errors.second_stage_name" />
                        </div>
                        <div class="mt-2">
                            <InputLabel for="second_stage_description" value="Описание" />
                            <DescriptionText
                                id="second_stage_description"
                                type="text"
                                class="block w-full mt-1"
                                v-model="form.second_stage_description"
                                required
                            />
                            <InputError class="mt-2" :message="form.errors.second_stage_description" />
                        </div>
                        <div class="mt-2">
                            <InputLabel for="second_stage_condition" value="Условие" />
                            <DescriptionText
                                id="second_stage_condition"
                                type="text"
                                class="block w-full mt-1"
                                v-model="form.second_stage_condition"
                            />
                            <InputError class="mt-2" :message="form.errors.second_stage_condition" />
                        </div>
                    </div>
                </div>
                <div class="mt-2">
                    <p class="text-2xl font-bold text-yellow-300">Третья точка</p>
                    <div class="ml-6">
                        <div class="mt-2">
                            <InputLabel for="third_stage_name" value="Название" />
                            <TextInput
                                id="third_stage_name"
                                type="text"
                                class="block w-full mt-1"
                                v-model="form.third_stage_name"
                                required
                            />
                            <InputError class="mt-2" :message="form.errors.third_stage_name" />
                        </div>
                        <div class="mt-2">
                            <InputLabel for="third_stage_description" value="Описание" />
                            <DescriptionText
                                id="third_stage_description"
                                type="text"
                                class="block w-full mt-1"
                                v-model="form.third_stage_description"
                                required
                            />
                            <InputError class="mt-2" :message="form.errors.third_stage_description" />
                        </div>
                        <div class="mt-2">
                            <InputLabel for="third_stage_condition" value="Условие" />
                            <DescriptionText
                                id="third_stage_condition"
                                type="text"
                                class="block w-full mt-1"
                                v-model="form.third_stage_condition"
                            />
                            <InputError class="mt-2" :message="form.errors.third_stage_condition" />
                        </div>
                    </div>
                </div>
                <div class="mt-2">
                    <p class="text-2xl font-bold text-yellow-300">Четвертая точка</p>
                    <div class="ml-6">
                        <div class="mt-2">
                            <InputLabel for="fourth_stage_name" value="Название" />
                            <TextInput
                                id="fourth_stage_name"
                                type="text"
                                class="block w-full mt-1"
                                v-model="form.fourth_stage_name"
                                required
                            />
                            <InputError class="mt-2" :message="form.errors.fourth_stage_name" />
                        </div>
                        <div class="mt-2">
                            <InputLabel for="fourth_stage_description" value="Описание" />
                            <DescriptionText
                                id="fourth_stage_description"
                                type="text"
                                class="block w-full mt-1"
                                v-model="form.fourth_stage_description"
                                required
                            />
                            <InputError class="mt-2" :message="form.errors.fourth_stage_description" />
                        </div>
                        <div class="mt-2">
                            <InputLabel for="fourth_stage_condition" value="Условие" />
                            <DescriptionText
                                id="fourth_stage_condition"
                                type="text"
                                class="block w-full mt-1"
                                v-model="form.fourth_stage_condition"
                            />
                            <InputError class="mt-2" :message="form.errors.fourth_stage_condition" />
                        </div>
                    </div>
                </div>
                <div class="flex items-center justify-end mt-4">
                    <PrimaryButton class="ml-4" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                        Создать
                    </PrimaryButton>
                </div>
            </form>
        </div>
    </AuthenticatedLayout>
</template>

<script>
export default {
    name: "Create"
}
</script>

