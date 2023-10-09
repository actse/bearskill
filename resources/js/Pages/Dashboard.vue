<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import ConfigProfile from "@/Components//ConfigProfile.vue";

import { Head } from "@inertiajs/vue3";
</script>

<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                ตั้งค่าโปรไฟล์ของคุณ
            </h2>
        </template>
        <div class="py-2">
            <div class="max-w-7xl mx-auto font-sans">
                <div class="py-4">
                   <ConfigProfile></ConfigProfile>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
<script>
export default {
    data() {
        return {

        };
    },
    methods: {
    },
    mounted() {},
};
</script>
