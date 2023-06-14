<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import PrimaryButton from '@/components/UI/PrimaryButton.vue';
import InputError from '@/Components/UI/InputError.vue';
import InputLabel from '@/Components/UI/InputLabel.vue';
import TextInput from '@/Components/UI/TextInput.vue';
import DescriptionText from '@/Components/UI/DescriptionText.vue';
import SelectInput from '@/Components/UI/SelectInput.vue';

import {Head, Link, useForm, usePage} from '@inertiajs/vue3';

const art = usePage().props.art;
const form = useForm({
    name: art.name,
    attributes: art.attributes,
    description: art.description,
    type: art.type,
    first_stage_name: art.first_stage_name,
    first_stage_description: art.first_stage_description,
    second_stage_name: art.second_stage_name,
    second_stage_description: art.second_stage_description,
    third_stage_name: art.third_stage_name,
    third_stage_description: art.third_stage_description,
    fourth_stage_name: art.fourth_stage_name,
    fourth_stage_description: art.fourth_stage_description,
});

const submit = () => {
    form.patch(route('art.update', art.id));
};

</script>

<template>
    <Head title="Добавить Искусства"/>
    <AuthenticatedLayout>
        <div class="bg-indigo-950 m-4 p-2 border border-gray-300 rounded-md">
            <h1 class="text-center text-xl font-semibold text-yellow-300">Редактировать искусство</h1>
            <form @submit.prevent="submit">
                <div class="mt-2">
                    <InputLabel for="type" value="Тип" />
                    <SelectInput class="w-full" id="type" name="type" v-model="form.type">
                        <option value="1">общая</option>
                        <option value="2">темная магия</option>
                    </SelectInput>
                </div>
                <div class="mt-2">
                    <InputLabel for="name" value="Название" />
                    <TextInput
                        id="name"
                        type="text"
                        class="mt-1 block w-full"
                        v-model="form.name"
                        required
                    />
                    <InputError class="mt-2" :message="form.errors.name" />
                </div>
                <div class="mt-2">
                    <InputLabel for="description" value="Описание" />
                    <DescriptionText
                        id="description"
                        type="text"
                        class="mt-1 block w-full"
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
                        class="mt-1 block w-full"
                        v-model="form.attributes"
                        required
                    />
                    <InputError class="mt-2" :message="form.errors.attributes" />
                </div>
                <div class="mt-2">
                    <InputLabel for="first_stage_name" value="Первая точка" />
                    <TextInput
                        id="first_stage_name"
                        type="text"
                        class="mt-1 block w-full"
                        v-model="form.first_stage_name"
                        required
                    />
                    <InputError class="mt-2" :message="form.errors.first_stage_name" />
                </div>
                <div class="mt-2">
                    <InputLabel for="first_stage_description" value="Первая точка описание" />
                    <DescriptionText
                        id="first_stage_description"
                        type="text"
                        class="mt-1 block w-full"
                        v-model="form.first_stage_description"
                        required
                    />
                    <InputError class="mt-2" :message="form.errors.first_stage_description" />
                </div>
                <div class="mt-2">
                    <InputLabel for="second_stage_name" value="Вторая точка" />
                    <TextInput
                        id="second_stage_name"
                        type="text"
                        class="mt-1 block w-full"
                        v-model="form.second_stage_name"
                        required
                    />
                    <InputError class="mt-2" :message="form.errors.second_stage_name" />
                </div>
                <div class="mt-2">
                    <InputLabel for="second_stage_description" value="Вторая точка описание" />
                    <DescriptionText
                        id="second_stage_description"
                        type="text"
                        class="mt-1 block w-full"
                        v-model="form.second_stage_description"
                        required
                    />
                    <InputError class="mt-2" :message="form.errors.second_stage_description" />
                </div>
                <div class="mt-2">
                    <InputLabel for="third_stage_name" value="Третья точка" />
                    <TextInput
                        id="third_stage_name"
                        type="text"
                        class="mt-1 block w-full"
                        v-model="form.third_stage_name"
                        required
                    />
                    <InputError class="mt-2" :message="form.errors.third_stage_name" />
                </div>
                <div class="mt-2">
                    <InputLabel for="third_stage_description" value="Третья точка описание" />
                    <DescriptionText
                        id="third_stage_description"
                        type="text"
                        class="mt-1 block w-full"
                        v-model="form.third_stage_description"
                        required
                    />
                    <InputError class="mt-2" :message="form.errors.third_stage_description" />
                </div>
                <div class="mt-2">
                    <InputLabel for="fourth_stage_name" value="Четвертая точка" />
                    <TextInput
                        id="fourth_stage_name"
                        type="text"
                        class="mt-1 block w-full"
                        v-model="form.fourth_stage_name"
                        required
                    />
                    <InputError class="mt-2" :message="form.errors.fourth_stage_name" />
                </div>
                <div class="mt-2">
                    <InputLabel for="fourth_stage_description" value="Четвертая точка описание" />
                    <DescriptionText
                        id="fourth_stage_description"
                        type="text"
                        class="mt-1 block w-full"
                        v-model="form.fourth_stage_description"
                        required
                    />
                    <InputError class="mt-2" :message="form.errors.fourth_stage_description" />
                </div>

                <div class="flex items-center justify-end mt-4">
                    <PrimaryButton class="ml-4" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                        Редактировать
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

