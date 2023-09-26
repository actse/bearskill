<script setup>
import LayoutPage from "@/Layouts/LayoutPage.vue";
import Checkbox from "@/Components/Checkbox.vue";
import InputError from "@/Components/InputError.vue";
import InputLabel from "@/Components/InputLabel.vue";
import TextInput from "@/Components/TextInput.vue";
import { Head, Link, useForm } from "@inertiajs/vue3";
import ApplicationLogo from "@/Components/ApplicationLogo.vue";

const form = useForm({
    email: "",
    password: "",
    remember: false,
});
</script>

<template>
    <LayoutPage>
        <div
            class="flex flex-col sm:justify-center items-center mt-36 pt-6 sm:pt-0 bg-gray-100"
        >
            <div>
                <Link href="/">
                    <ApplicationLogo
                        class="w-20 h-20 fill-current text-gray-500"
                    />
                </Link>
            </div>
            <div
                class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg"
            >
                <form @submit.prevent="login" enctype="multipart/form-data">
                    <div>
                        <InputLabel for="email" value="Email" />

                        <TextInput
                            id="email"
                            type="email"
                            class="mt-1 block w-full"
                            v-model="email"
                            required
                            autofocus
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
                            v-model="password"
                            required
                            autocomplete="current-password"
                        />

                        <InputError
                            class="mt-2"
                            :message="form.errors.password"
                        />
                    </div>

                    <div class="block mt-4">
                        <label class="flex items-center">
                            <Checkbox
                                name="remember"
                                v-model:checked="remember"
                            />
                            <span class="ml-2 text-sm text-gray-600"
                                >Remember me</span
                            >
                        </label>
                    </div>
                    <div class="flex items-center justify-end text-sm">
                        <Link
                            href="/forgetpassword"
                            type="button"
                            class="ml-4 text-white p-2 font-medium rounded-md bg-[#569a89] hover:bg-[#75c6b2]"
                        >
                            forgot password
                        </Link>
                        <button
                            class="ml-4 text-white p-2 font-medium rounded-md bg-[#569a89] hover:bg-[#75c6b2]"
                        >
                            Log in
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </LayoutPage>
</template>
<script>
export default {
    data() {
        return {
            email: "",
            password: "",
            remember: false,
        };
    },
    methods: {
        login() {
            axios
                .post("/login", {
                    email: this.email,
                    password: this.password,
                    remember: this.remember,
                })
                .then((response) => {
                    window.location.href = "/profile";
                })
                .catch((error) => {
                    console.error(error.response.data);
                });
        },
    },
    mounted() {},
};
</script>
