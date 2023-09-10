<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import PrimaryButton from '@/components/UI/PrimaryButton.vue';
import InputError from '@/Components/UI/InputError.vue';
import InputLabel from '@/Components/UI/InputLabel.vue';
import TextInput from '@/Components/UI/TextInput.vue';
import DescriptionText from '@/Components/UI/DescriptionText.vue';

import {Head, useForm} from '@inertiajs/vue3';
const form = useForm({
    name: '',
    description: '',
});

const submit = () => {
    form.post(route('mechanic.store'));
};

</script>

<template>
    <Head title="Добавить механику"/>
    <AuthenticatedLayout>
        <div class="p-2 m-4 border border-gray-300 rounded-md bg-indigo-950">
            <h1 class="text-xl font-semibold text-center text-yellow-300">Создать механику</h1>
            <form @submit.prevent="submit">
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

