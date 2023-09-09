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
    description: '',
    talent: '',
    type: 1,
});

const submit = () => {
    form.post(route('race.store'));
};

</script>

<template>
    <Head title="Добавить организацию"/>
    <AuthenticatedLayout>
        <div class="bg-indigo-950 m-4 p-2 border border-gray-300 rounded-md">
            <h1 class="text-center text-xl font-semibold text-yellow-300">Создать расу</h1>
            <form @submit.prevent="submit">
                <div class="mt-2">
                    <InputLabel for="type" value="Тип" />
                    <SelectInput class="w-full" id="type" name="type" v-model="form.type">
                        <option value="1">доступные для игры</option>
                        <option value="2">не доступные для игры</option>
                        <option value="3">Фэйри</option>
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
                    <InputLabel for="talent" value="Право рождения" />
                    <DescriptionText
                        id="talent"
                        type="text"
                        class="mt-1 block w-full"
                        v-model="form.talent"
                    />
                    <InputError class="mt-2" :message="form.errors.talent" />
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

