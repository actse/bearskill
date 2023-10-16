<script setup>
import ApplicationLogo from "@/Components/ApplicationLogo.vue";
import Dropdown from "@/Components/Dropdown.vue";
import DropdownLink from "@/Components/DropdownLink.vue";
import NavLink from "@/Components/NavLink.vue";
import ResponsiveNavLink from "@/Components/ResponsiveNavLink.vue";
import { Link } from "@inertiajs/vue3";
import { ref } from "vue";
const showingNavigationDropdown = ref(false);
defineProps({
    canLogin: {
        type: Boolean,
    },
    canRegister: {
        type: Boolean,
    },
    laravelVersion: {
        type: String,
        required: true,
    },
    phpVersion: {
        type: String,
        required: true,
    },
});
</script>
<template>
    <div>
        <div class="min-h-screen bg-gray-100">
            <nav class="bg-[#091324] border-gray-100">
                <!-- Primary Navigation Menu -->
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 font-bold">
                    <div class="flex justify-between h-20">
                        <div class="flex">
                            <!-- Logo -->
                            <div class="shrink-0 flex items-center">
                                <Link href="/">
                                    <ApplicationLogo
                                        class="block w-auto fill-current text-white"
                                    />
                                </Link>
                            </div>

                            <!-- Navigation Links -->
                            <div
                                class="flex space-x-8 sm:-my-px sm:ml-10 sm:flex"
                            >
                                <NavLink
                                    class="sm:text-auto text-[16px] font-sans text-slate-100 hover:text-white"
                                    href="/"
                                >
                                    หน้าแรก
                                </NavLink>
                                <!-- <NavLink
                                    class="sm:text-auto text-[16px] font-sans text-slate-100 hover:text-white"
                                    href="/"
                                >
                                    คอร์สทั้งหมด
                                </NavLink> -->
                                <div class="relative group inline-flex">
                                    <NavLink
                                        class="sm:text-auto text-[16px] font-sans text-slate-100 hover:text-white"
                                        href="/"
                                    >
                                        คอร์สทั้งหมด
                                    </NavLink>
                                    <ul
                                        class="absolute top-10 w-44 hidden mt-2 space-y-2 bg-white text-gray-800 border border-gray-300 rounded-lg z-10 group-hover:block"
                                    >
                                        <!-- วิชา 1 -->
                                        <li v-for="(item , index) in type_subject">
                                            <a
                                                class="block px-4 py-2 w-44 hover:bg-gray-200"
                                                href="#"
                                            >
                                                {{ item }}
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="flex justify-between h-20">
                            <NavLink
                                :href="route('login')"
                                class="ml-5 sm:text-auto text-[16px] font-source text-white hover:text-slate-100 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm"
                                >Login</NavLink
                            >
                            <NavLink
                                :href="route('register')"
                                class="ml-5 sm:text-auto text-[16px] font-source text-white hover:text-slate-100 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm"
                                >Register</NavLink
                            >
                        </div>
                    </div>
                </div>
            </nav>

            <main class="">
                <slot />
            </main>
        </div>
    </div>
</template>
<script>
export default {
    data() {
        return {
            email: "",
            password: "",
            confirm_password: "",
            status: "",
            type_subject: ['ภาษา','วิชาหลัก','ดนตรี','ศิลปะ','เทคโนโลยี','อึ่นๆ'],
        };
    },
    methods: {},
    mounted() {
        console.log(this.status);
    },
};
</script>
