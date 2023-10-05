<script setup>
import GuestLayout from "@/Layouts/RegisterLayout.vue";
import InputError from "@/Components/InputError.vue";
import InputLabel from "@/Components/InputLabel.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import TextInput from "@/Components/TextInput.vue";
import { Head, Link, useForm } from "@inertiajs/vue3";

const form = useForm({
    name: "",
    email: "",
    phone: "",
    password: "",
    password_confirmation: "",
});

const submit = () => {
    form.post(route("register"), {
        onFinish: () => form.reset("password", "password_confirmation"),
    });
};
</script>

<template>
    <GuestLayout>
        
        <Head title="Register" />
        <div class="flex-1 bg-indigo-100 text-center hidden lg:flex bg-cover bg-login_img ">
            <div class=" w-full h-full bg-cover bg-center bg-no-repeat rounded-r-lg" >
                <img class="w-full h-full bg-cover rounded-l-lg" src="../../../imgs/bg_login.png" alt="">
            </div>
        </div>
    <form @submit.prevent="submit">
        <div class=" p-10 sm:pl-10 lg:w-full xl:w-full rounded-l-lg">
                <div class="flex flex-col items-center ">
                    <h1 class="text-2xl xl:text-3xl font-extrabold text-gray-800">
                        Sign up
                    </h1>
                    <div class="w-full flex-1 mt-8 ">

                        <div class="mx-auto max-w-xs">
                            <!-- Name -->
                            <input
                                class="w-full px-8 py-4 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white"
                                id="name" type="text" v-model="form.name" required autofocus autocomplete="name" placeholder="Name" />
                                <!-- Error Name -->
                                <InputError class="mt-2" :message="form.errors.name" />

                            <!-- Email -->
                            <input
                                class="w-full px-8 py-4 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white mt-5"
                                id="email" type="email" v-model="form.email" required autocomplete="username" placeholder="Email" />
                                <!-- Error Login -->
                                <InputError class="mt-2" :message="form.errors.email" />
                            <!-- Password -->
                            <input
                                class="w-full px-8 py-4 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white mt-5"
                                id="password" type="password" v-model="form.password" required autocomplete="current-password" placeholder="Password" />
                                <!-- Error Password -->
                                <InputError class="mt-2" :message="form.errors.password" />
                            <!--Confirm Password -->
                            <input
                                class="w-full px-8 py-4 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white mt-5"
                                id="password_confirmation" type="password" v-model="form.password_confirmation" required autocomplete="new-password" placeholder="Confirm Password" />
                                <!-- Error Password -->
                                <InputError class="mt-2" :message="form.errors.password_confirmation" />
                            <button
                                :disabled="form.processing"
                                class="mt-5 tracking-wide font-semibold bg-indigo-500 text-gray-100 w-full py-4 rounded-lg hover:bg-indigo-700 transition-all duration-300 ease-in-out flex items-center justify-center focus:shadow-outline focus:outline-none">
                                <svg class="w-6 h-6 -ml-2" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M16 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2" />
                                    <circle cx="8.5" cy="7" r="4" />
                                    <path d="M20 8v6M23 11h-6" />
                                </svg>
                                <span class="ml-3">
                                    Register
                                </span>
                            </button>
                            <div class="flex items-center justify-center mt-4">
                                <Link
                                    :href="route('login')"
                                    class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                                >
                                    Already registered?
                                </Link>
                            </div>
                        </div>
                    </div>
                </div>
        </div>

            <!-- </div>
        <form @submit.prevent="submit">
            <div>
                <InputLabel for="name" value="Name" />

                <TextInput
                    id="name"
                    type="text"
                    class="mt-1 block w-full"
                    v-model="form.name"
                    required
                    autofocus
                    autocomplete="name"
                />

                <InputError class="mt-2" :message="form.errors.name" />
            </div>

            <div class="mt-4">
                <InputLabel for="email" value="Email" />

                <TextInput
                    id="email"
                    type="email"
                    class="mt-1 block w-full"
                    v-model="form.email"
                    required
                    autocomplete="username"
                />

                <InputError class="mt-2" :message="form.errors.email" />
            </div>



            <div class="mt-4">
                <InputLabel for="password" value="Password" />

                <TextInput
                    id="password"
                    type="password"
                    class="mt-1 block w-full"
                    v-model="form.password"
                    required
                    autocomplete="new-password"
                />

                <InputError class="mt-2" :message="form.errors.password" />
            </div>

            <div class="mt-4">
                <InputLabel for="password_confirmation" value="Confirm Password" />

                <TextInput
                    id="password_confirmation"
                    type="password"
                    class="mt-1 block w-full"
                    v-model="form.password_confirmation"
                    required
                    autocomplete="new-password"
                />

                <InputError class="mt-2" :message="form.errors.password_confirmation" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <Link
                    :href="route('login')"
                    class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                >
                    Already registered?
                </Link>

                <PrimaryButton
                    class="ml-4"
                    :class="{ 'opacity-25': form.processing }"
                    :disabled="form.processing"
                >
                    Register
                </PrimaryButton>
            </div>
        </form> -->
        </form>
    </GuestLayout>
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