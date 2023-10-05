<script setup>
import Checkbox from "@/Components/Checkbox.vue";
import GuestLayout from "@/Layouts/GuestLayout.vue";
import InputError from "@/Components/InputError.vue";
import InputLabel from "@/Components/InputLabel.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import TextInput from "@/Components/TextInput.vue";
import { Head, Link, useForm } from "@inertiajs/vue3";

defineProps({
    canResetPassword: {
        type: Boolean,
    },
    status: {
        type: String,
    },
});

const form = useForm({
    email: "",
    password: "",
    remember: false,
});

const submit = () => {
    form.post(route("login"), {
        onFinish: () => form.reset("password"),
    });
};
</script>
<template>
    <GuestLayout>
        <Head title="Log in" />

        <!-- <div v-if="status" class="mb-4 font-medium text-sm text-green-600">
            {{ status }}
        </div> -->

       <form @submit.prevent="submit">
            <div>
                <InputLabel for="email" value="Email" />

                <TextInput
                    id="email"
                    type="email"
                    class="mt-1 block w-full"
                    v-model="form.email"
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
                    v-model="form.password"
                    required
                    autocomplete="current-password"
                />

                <InputError class="mt-2" :message="form.errors.password" />
            </div>

            <div class="block mt-4">
                <label class="flex items-center">
                    <Checkbox name="remember" v-model:checked="form.remember" />
                    <span class="ml-2 text-sm text-gray-600">Remember me</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                <Link
                    v-if="canResetPassword"
                    :href="route('password.request')"
                    class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                >
                    Forgot your password?
                </Link>

                <PrimaryButton class="ml-4" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                    Log in
                </PrimaryButton>
            </div>
        </form>
        <!-- <form @submit.prevent="login" enctype="multipart/form-data">
            <div>
                <label for="phone">Phone:</label>
                <input
                    id="phone"
                    type="text"
                    class="mt-1 block w-full"
                    v-model="phone"
                    required
                    autofocus
                    autocomplete="username"
                />
            </div>

            <div class="mt-4">
                <label for="password">Password:</label>
                <input
                    id="password"
                    type="password"
                    class="mt-1 block w-full"
                    v-model="password"
                    required
                    autocomplete="current-password"
                />
            </div>

            <div class="block mt-4">
                <label class="flex items-center">
                    <input type="checkbox" v-model="remember" />
                    <span class="ml-2 text-sm text-gray-600">Remember me</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                <a
                    v-if="canResetPassword"
                    :href="route('password.request')"
                    class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                >
                    Forgot your password?
                </a>
                <button type="submit" class="ml-4">Log in</button>
            </div>
        </form> -->
    </GuestLayout>
</template>
<script>
// export default {
//     data() {
//         return {
//             phone: "",
//             password: "",
//             remember: false,
//             // canResetPassword: true, // Adjust this based on your conditions
//         };
//     },
//     methods: {
//         login() {
//             const formData = new FormData();
//             formData.append("phone", this.phone);
//             formData.append("password", this.password);
//             formData.append("remember", this.remember);

//             console.log(this.phone);
//             console.log(this.password);
//             console.log(this.remember);

//             axios
//                 .post("/login", formData)
//                 .then((response) => {})
//                 .catch((error) => {
//                     console.error(error.response.data);
//                 });
//         },
//     },
// };
</script>
<!-- <script>
export default {
    data() {
        return {
            phone: "",
            password: "",
            remember: false,
        };
    },
    methods: {
        login() {
            const formData = new FormData();
            formData.append("phone", this.phone);
            formData.append("password", this.password);
            formData.append("remember", this.remember);

            console.log(this.phone);
            console.log(this.password);
            console.log(this.remember);

            axios
                .post("/login", formData)
                .then((response) => {})
                .catch((error) => {
                    console.error(error.response.data);
                });
        },
    },
    mounted() {},
};
</script> -->
