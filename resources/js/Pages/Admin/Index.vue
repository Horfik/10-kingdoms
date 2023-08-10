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
                <Link :href="route('admin.kingdom.index')">Королевства</Link>
            </div>
            <div>
                <Link :href="route('admin.organization.index')">Организации</Link>
            </div>
            <div>
                <Link :href="route('admin.race.index')">Народы</Link>
            </div>
            <div>
                <Link :href="route('admin.art.index')">Искусства</Link>
            </div>
            <div>
                <Link :href="route('admin.person.index')">Личности</Link>
            </div>
        </SectionUI>
    </AuthenticatedLayout>
</template>

<style scoped>

</style>
