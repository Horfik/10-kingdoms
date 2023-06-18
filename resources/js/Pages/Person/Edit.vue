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
import {Head, Link, useForm, usePage, router} from '@inertiajs/vue3';
const person = usePage().props.person;
const form = useForm({
    name: person.name,
    image: null,
    biography: person.biography,
});


const submit = () => {
    console.log(form)
    router.post(route('person.update', person.id),{
        _method: 'patch',
        name: form.name,
        biography: form.biography,
        image: form.image
    });
};

</script>

<template>
    <Head title="Добавить персонажа"/>
    <AuthenticatedLayout>
        <SectionUI>
            <h1 class="text-xl text-yellow-300 text-center">
                Добавить персонажа
            </h1>
            <form @submit.prevent="submit">
                <div class="mt-2">
                    <InputLabel for="name" value="Имя"/>
                    <TextInput
                        name="name"
                        id="name"
                        type="text"
                        v-model="form.name"
                        class="mt-1 block w-full"
                        autocomplete="off"
                    />
                    <InputError :message="form.errors.name"/>
                </div>
                <div class="mt-2">
                    <InputLabel for="biography" value="Биография"/>
                    <DescriptionText
                        name="biography"
                        id="biography"
                        type="text"
                        v-model="form.biography"
                        class="mt-1 block w-full"
                    />
                    <InputError :message="form.errors.biography"/>
                </div>
                <div>

                </div>
                <div class="mt-2">
                    <InputLabel for="image" value="Изображение"/>
                    <InputFile name="image" id="image" v-model="form.image"/>
                    <InputError :message="form.errors.image"/>
                </div>
                <div class="flex items-center justify-end mt-4">
                    <PrimaryButton class="ml-4" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                        Редактировать
                    </PrimaryButton>
                </div>
            </form>
        </SectionUI>
    </AuthenticatedLayout>
</template>
