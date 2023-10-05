<script setup>
import ApplicationLogo from "@/Components/ApplicationLogo.vue";
import layoutPage from "@/Layouts/LayoutPage.vue";

import { Link } from "@inertiajs/vue3";
</script>

<template>
    <layoutPage>
        <div class="min-h-screen w-full bg-gray-200 text-gray-900 flex justify-center items-center">
            <!-- <div class="max-w-screen-sm shadow sm:rounded-lg flex justify-center flex-1 rounded-lg">
                <div class=" image-bg rounded-lg">
                    <slot />
                </div>
            </div> -->
            <div class="max-w-screen-md bg-white shadow sm:rounded-lg flex justify-center flex-1 rounded-lg">
                <slot />
            </div>
        </div>
    </layoutPage>
</template>
<style>
.image-bg {
    background-image: url('../../imgs/bg_login.png');
    background-size: cover; /* Adjust as needed */
    background-repeat: no-repeat; /* Adjust as needed */
    width: 100%;
    height: 100%;
    position: relative;
}
</style>