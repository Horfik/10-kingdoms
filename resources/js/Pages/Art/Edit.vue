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
    first_stage_condition: art.first_stage_condition,
    second_stage_name: art.second_stage_name,
    second_stage_description: art.second_stage_description,
    second_stage_condition: art.second_stage_condition,
    third_stage_name: art.third_stage_name,
    third_stage_description: art.third_stage_description,
    third_stage_condition: art.third_stage_condition,
    fourth_stage_name: art.fourth_stage_name,
    fourth_stage_description: art.fourth_stage_description,
    fourth_stage_condition: art.fourth_stage_condition,
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
                    <InputLabel for="name" value="Название" />
                    <TextInput
                        id="name"
                        type="text"
                        class="mt-1 block w-full"
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
                    <p class="text-2xl text-yellow-300 font-bold">Первая точка</p>
                    <div class="ml-6">
                        <div class="mt-2">
                            <InputLabel for="first_stage_name" value="Название" />
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
                            <InputLabel for="first_stage_description" value="Описание" />
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
                            <InputLabel for="first_stage_condition" value="Условие" />
                            <DescriptionText
                                id="first_stage_condition"
                                type="text"
                                class="mt-1 block w-full"
                                v-model="form.first_stage_condition"
                            />
                            <InputError class="mt-2" :message="form.errors.first_stage_condition" />
                        </div>
                    </div>
                </div>
                <div class="mt-2">
                    <p class="text-2xl text-yellow-300 font-bold">Вторая точка</p>
                    <div class="ml-6">
                        <div class="mt-2">
                            <InputLabel for="second_stage_name" value="Название" />
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
                            <InputLabel for="second_stage_description" value="Описание" />
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
                            <InputLabel for="second_stage_condition" value="Условие" />
                            <DescriptionText
                                id="second_stage_condition"
                                type="text"
                                class="mt-1 block w-full"
                                v-model="form.second_stage_condition"
                            />
                            <InputError class="mt-2" :message="form.errors.second_stage_condition" />
                        </div>
                    </div>
                </div>
                <div class="mt-2">
                    <p class="text-2xl text-yellow-300 font-bold">Третья точка</p>
                    <div class="ml-6">
                        <div class="mt-2">
                            <InputLabel for="third_stage_name" value="Название" />
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
                            <InputLabel for="third_stage_description" value="Описание" />
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
                            <InputLabel for="third_stage_condition" value="Условие" />
                            <DescriptionText
                                id="third_stage_condition"
                                type="text"
                                class="mt-1 block w-full"
                                v-model="form.third_stage_condition"
                            />
                            <InputError class="mt-2" :message="form.errors.third_stage_condition" />
                        </div>
                    </div>
                </div>
                <div class="mt-2">
                    <p class="text-2xl text-yellow-300 font-bold">Четвертая точка</p>
                    <div class="ml-6">
                        <div class="mt-2">
                            <InputLabel for="fourth_stage_name" value="Название" />
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
                            <InputLabel for="fourth_stage_description" value="Описание" />
                            <DescriptionText
                                id="fourth_stage_description"
                                type="text"
                                class="mt-1 block w-full"
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
                                class="mt-1 block w-full"
                                v-model="form.fourth_stage_condition"
                            />
                            <InputError class="mt-2" :message="form.errors.fourth_stage_condition" />
                        </div>
                    </div>
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

