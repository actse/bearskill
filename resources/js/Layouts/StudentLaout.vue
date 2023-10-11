<script setup>
import ApplicationLogo from "@/Components/ApplicationLogo.vue";
import layoutPage from "@/Layouts/LayoutPage.vue";

import { Link } from "@inertiajs/vue3";
</script>
<template>
<layoutPage>
    <div class="min-h-screen flex flex-col items-center mt-10 sm:pt-0 bg-gray-50 sm:min-w-min">
        <div class="w-full mx-auto sm:px-6 sm:py-4 bg-white shadow-md overflow-hidden sm:max-w-sm sm:rounded-lg md:max-w-5xl">
            <slot />
        </div>
    </div>
</layoutPage>
</template>

<script>
export default {

}
</script>

<style>

</style>