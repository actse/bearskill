<script setup>
import { ref } from "vue";
import ApplicationLogo from "@/Components/ApplicationLogo.vue";
import Dropdown from "@/Components/Dropdown.vue";
import DropdownLink from "@/Components/DropdownLink.vue";
import NavLink from "@/Components/NavLink.vue";
import ResponsiveNavLink from "@/Components/ResponsiveNavLink.vue";
import { Link } from "@inertiajs/vue3";

const showingNavigationDropdown = ref(false);
</script>

<template>
    <div>
        <div class="min-h-screen bg-gray-100">
            <nav class="bg-[#151F32] border-b border-gray-100">
                <!-- Primary Navigation Menu -->
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="flex justify-between h-18">
                        <div class="flex">
                            <!-- Logo -->
                            <div class="shrink-0 flex items-center">
                                <Link href="/dashboard">
                                    <ApplicationLogo
                                        class="block w-auto fill-current text-white"
                                    />
                                </Link>
                            </div>

                            <!-- Navigation Links -->
                            <div
                                class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex"
                            >
                                <NavLink
                                    class="sm:text-auto text-[17px] font-sans text-slate-100"
                                    href="/dashboard"
                                    active="./current(ashboard')"
                                >
                                    หน้าหลัก
                                </NavLink>
                                <NavLink
                                    class="sm:text-auto text-[17px] font-sans text-slate-100 hover:text-white"
                                    href="/dashboard"
                                >
                                    คอร์สทั้งหมด
                                </NavLink>
                            </div>
                        </div>

                        <div class="hidden sm:flex sm:items-center sm:ml-6">
                            <!-- Settings Dropdown -->
                            <div class="ml-3 relative">
                                <Dropdown align="right" width="48" class="">
                                    <template #trigger>
                                        <span class="inline-flex rounded-md">
                                            <img
                                                class="w-8 h-8 mt-1 rounded-full border-2 border-blue-400 shadow-lg"
                                                src="../../imgs/imnayoen.jpeg"
                                                alt=""
                                            />
                                            <button
                                                type="button"
                                                class="bg-[#151F32] mt-1 inline-flex items-center px-3 py-2 border border-transparent text-md leading-4 font-medium rounded-md text-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150"
                                            >
                                                {{ $page.props.auth.user.name }}
                                                <!-- {{ $page.props.auth.user.email }} -->
                                                <svg
                                                    class="ml-2 -mr-0.5 h-4 w-4"
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 20 20"
                                                    fill="currentColor"
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
                                        <DropdownLink
                                            v-if="isDropdownDisabled"
                                            href="profile"
                                        >
                                            Profile
                                        </DropdownLink>
                                        <Link
                                            class="block w-full px-4 py-2 text-left text-sm leading-5 text-gray-700 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 transition duration-150 ease-in-out"
                                            href="/billing"
                                        >
                                            เติม credit
                                        </Link>
                                        <DropdownLink
                                            href="/logout"
                                            method="post"
                                            as="button"
                                        >
                                            Log Out
                                        </DropdownLink>
                                    </template>
                                </Dropdown>
                            </div>
                        </div>

                        <!-- Hamburger -->
                        <div class="-mr-2 flex items-center sm:hidden">
                            <button
                                @click="
                                    showingNavigationDropdown =
                                        !showingNavigationDropdown
                                "
                                class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out"
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
                        </div>
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
                    <div class="pt-2 pb-3 space-y-1">
                        <ResponsiveNavLink
                            href="/dashboard"
                            active="./current(ashboard')"
                        >
                            Dashboard
                        </ResponsiveNavLink>
                    </div>

                    <!-- Responsive Settings Options -->
                    <div class="pt-4 pb-1 border-t border-gray-200">
                        <div class="px-4">
                            <div class="font-medium text-base text-gray-800">
                                {{ $page.props.auth.user.name }}
                            </div>
                            <div class="font-medium text-sm text-gray-500">
                                {{ $page.props.auth.user.email }}
                            </div>
                        </div>

                        <div class="mt-3 space-y-1">
                            <ResponsiveNavLink
                                v-if="isDropdownDisabled"
                                href="/profile"
                            >
                                Profile
                            </ResponsiveNavLink>
                            <Link
                                class="block w-full px-4 py-2 text-left text-sm leading-5 text-gray-700 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 transition duration-150 ease-in-out"
                                href="/addcredit"
                            >
                                เติม credit
                            </Link>
                            <ResponsiveNavLink
                                href="logout"
                                method="post"
                                as="button"
                            >
                                Log Out
                            </ResponsiveNavLink>
                        </div>
                    </div>
                </div>
            </nav>

            <!-- Page Heading -->
            <header class="bg-white shadow" v-if="$slots.header">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    <slot name="header" />
                </div>
            </header>

            <!-- Page Content -->
            <main>
                <slot />
            </main>
        </div>
    </div>
</template>
<script>
export default {
    data() {
        return {
            isDropdownDisabled: false,
            data: {
                name: "",
                phone: "",
                detail_data: "",
                verify_status: "",
                payment_services_start: "",
            },
        };
    },
    methods: {
        selectData() {

            const userId = this.$page.props.auth.user.id;
            const formData = new FormData();
            formData.append("id", userId);

            axios
                .post("/selectdata", formData)
                .then((response) => {
                    this.data.name = response.data.name;
                    this.data.phone = response.data.phone;
                    this.data.verify_status = response.data.verifly_account;
                    this.data.detail_data = response.data.detailsimple;
                    this.data.payment_services_start =
                        response.data.status_services_start;
                    console.log(response.data);
                    console.log(this.data.name);
                    console.log(this.data.phone);
                    console.log(this.data.verify_status);
                    console.log(this.data.detail_data);
                    console.log(this.data.payment_services_start);

                    if (
                        this.data.verify_status != null &&
                        this.data.name != null &&
                        this.data.phone != null &&
                        this.data.detail_data != null &&
                        this.data.payment_services_start != null
                    ) {
                        this.isDropdownDisabled = true;
                    }
                })
                .catch((error) => {
                    console.error(error.response.data);
                });
        },
    },
    mounted() {
        this.selectData();
    },
};
</script>
