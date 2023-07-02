<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import SectionUI from "@/Components/UI/SectionUI.vue";
import { Head, Link } from '@inertiajs/vue3';
</script>
<template>
    <Head title="Мастер"/>
    <AuthenticatedLayout>
        <SectionUI>
            <div>
                <Link :href="route('kingdom.index')">Королевства</Link>
            </div>
            <div>
                <Link :href="route('dashboard')">Организации</Link>
            </div>
            <div>
                <Link :href="route('dashboard')">Расы</Link>
            </div>
            <div>
                <Link :href="route('admin.art.index')">Искусства</Link>
            </div>
            <div>
                <Link :href="route('admin.person.index')">Персонажи</Link>
            </div>
        </SectionUI>
    </AuthenticatedLayout>
</template>

<style scoped>

</style>
