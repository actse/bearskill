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
            <nav class="bg-[#151F32] border-b border-gray-100">
                <!-- Primary Navigation Menu -->
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 font-bold">
                    <div class="flex justify-between h-20">
                        <div class="flex">
                            <!-- Logo -->
                            <div class="shrink-0 flex items-center">
                                <Link href="/">
                                    <ApplicationLogo
                                        class="block h-9 w-auto fill-current text-white"
                                    />
                                </Link>
                            </div>

                            <!-- Navigation Links -->
                            <div
                                class="flex space-x-8 sm:-my-px sm:ml-10 sm:flex"
                            >
                                <NavLink
                                    class="sm:text-auto text-[16px] font-source text-slate-100 hover:text-white"
                                    href="/"
                                >
                                    หน้าแรก
                                </NavLink>
                                <NavLink
                                    class="sm:text-auto text-[16px] font-source text-slate-100 hover:text-white"
                                    href="/"
                                >
                                    คอร์สทั้งหมด
                                </NavLink>
                                <NavLink
                                    class="sm:text-auto text-[16px] font-source text-slate-100 hover:text-white"
                                    href="/"
                                >
                                    About Us </NavLink
                                ><NavLink
                                    class="sm:text-auto text-[16px] font-source text-slate-100 hover:text-white"
                                    href="/"
                                >
                                    Contact
                                </NavLink>
                                <NavLink
                                    class="sm:text-auto text-[16px] font-source text-slate-100 hover:text-white"
                                    href="/dashboard"
                                >
                                    Dashboard
                                </NavLink>
                                <NavLink
                                    :href="route('login')"
                                    class="sm:text-auto text-[16px] font-source text-white hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm"
                                    >Login</NavLink
                                >
                                <NavLink
                                    :href="route('register')"
                                    class="sm:text-auto text-[16px] font-source text-white hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm"
                                    >Register</NavLink
                                >

                                <!-- <NavLink
                                    href="/registers"
                                    class="sm:text-auto text-[16px] font-source text-white hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm"
                                    >Register</NavLink
                                > -->
                            </div>
                        </div>

                        <!-- <div
                            v-if="canLogin"
                            class="sm:fixed sm:top-0 sm:right-0 p-6 text-right"
                        >
                            <Link
                                v-if="$page.props.auth.user"
                                :href="route('dashboard')"
                                class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"
                                >Dashboard</Link
                            >

                            <template v-else>
                                <Link
                                    :href="route('login')"
                                    class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"
                                    >Log in</Link
                                >

                                <Link
                                    v-if="canRegister"
                                    :href="route('register')"
                                    class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"
                                    >Register</Link
                                >
                            </template>
                        </div> -->
                        <!-- <div class="hidden sm:flex sm:items-center sm:ml-6">
                            <div class="ml-3 relative">
                                <Dropdown align="right" width="48">
                                    <template #trigger>
                                        <span class="inline-flex rounded-md">
                                            <button
                                                type="button"
                                                class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-white hover:text-white-700 focus:outline-none transition ease-in-out duration-150"
                                            >
                                                <svg
                                                    class="ml-2 -mr-0.5 h-6 w-6"
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 20 20"
                                                    fill="#ffffff"
                                                >
                                                    <path
                                                        fill-rule="evenodd"
                                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                        clip-rule="evenodd"
                                                    />
                                                </svg>
                                            </button>
                                        </span>
                                    </template>

                                    <template #content>
                                        <DropdownLink href="/login">
                                            Login
                                        </DropdownLink>
                                        <DropdownLink href="/registertutor">
                                            ลงทะเบียน
                                        </DropdownLink>
                                        <DropdownLink
                                            v-if="status != ''"
                                            href="/registertutor"
                                        >
                                            Profile
                                        </DropdownLink>
                                        <DropdownLink
                                            v-if="status != ''"
                                            href="/logout"
                                            method="post"
                                            as="button"
                                        >
                                            Log Out
                                        </DropdownLink>
                                    </template>
                                </Dropdown>
                            </div>
                        </div> -->

                        <!-- Hamburger -->
                        <!-- <div class="-mr-2 flex items-center sm:hidden">
                            <button
                                @click="
                                    showingNavigationDropdown =
                                        !showingNavigationDropdown
                                "
                                class="inline-flex items-center justify-center p-2 rounded-md text-white hover:text-white hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out"
                            >
                                <svg
                                    class="h-6 w-6"
                                    stroke="currentColor"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                >
                                    <path
                                        :class="{
                                            hidden: showingNavigationDropdown,
                                            'inline-flex':
                                                !showingNavigationDropdown,
                                        }"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M4 6h16M4 12h16M4 18h16"
                                    />
                                    <path
                                        :class="{
                                            hidden: !showingNavigationDropdown,
                                            'inline-flex':
                                                showingNavigationDropdown,
                                        }"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M6 18L18 6M6 6l12 12"
                                    />
                                </svg>
                            </button>
                        </div> -->
                    </div>
                </div>

                <!-- Responsive Navigation Menu -->
                <div
                    :class="{
                        block: showingNavigationDropdown,
                        hidden: !showingNavigationDropdown,
                    }"
                    class="sm:hidden"
                >
                    <div class="pb-3 space-y-1">
                        <ResponsiveNavLink class="text-white" href="/">
                            Dashboard
                        </ResponsiveNavLink>
                    </div>

                    <!-- Responsive Settings Options -->
                    <div class="pb-2 border-t border-white">
                        <div class="px-4">
                            <div class="font-medium text-base text-white"></div>
                        </div>
                        <div class="mt-3 space-y-1">
                            <ResponsiveNavLink class="text-white" href="/login">
                                ลงทะเบียน
                            </ResponsiveNavLink>
                            <ResponsiveNavLink
                                v-if="status != ''"
                                class="text-white"
                                href="/profile"
                            >
                                Profile
                            </ResponsiveNavLink>
                            <ResponsiveNavLink
                                v-if="status != ''"
                                class="text-white"
                                href="/logout"
                                method="post"
                                as="button"
                            >
                                Log Out
                            </ResponsiveNavLink>
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
        };
    },
    methods: {},
    mounted() {
        console.log(this.status);
    },
};
</script>
