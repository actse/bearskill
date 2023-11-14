<script setup>
import ApplicationLogo from "@/Components/ApplicationLogo.vue";
import layoutPage from "@/Layouts/LayoutPage.vue";

import { Link } from "@inertiajs/vue3";
</script>
<template>
<layoutPage>
    <div class="container mx-auto sm:mt-5">
        <div class="md:flex no-wrap sm:justify-center md:-mx-5 ">
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
