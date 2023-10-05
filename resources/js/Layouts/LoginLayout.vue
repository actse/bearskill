<script setup>
import ApplicationLogo from "@/Components/ApplicationLogo.vue";
import layoutPage from "@/Layouts/LayoutPage.vue";

import { Link } from "@inertiajs/vue3";
</script>

<template>
    <layoutPage>
        <div class="min-h-screen bg-gray-200 text-gray-900 flex justify-center">
            <div class="max-w-screen-md m-0 sm:m-10 bg-white shadow sm:rounded-lg flex justify-center flex-1">
                <slot />
            </div>
        </div>
    </layoutPage>
</template>
