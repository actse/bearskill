<script setup>
import LayoutPage from "@/Layouts/LayoutPage.vue";
import { Head } from "@inertiajs/vue3";
</script>

<template>
    <LayoutPage>
        <div class="p-10">
            <div class="max-w-7xl mx-auto">
                <div class="p-10 text-white">
                    <form
                        @submit.prevent="CreateUser"
                        enctype="multipart/form-data"
                        class="max-w-lg mx-auto bg-gray-100 text-gray-600 shadow-md p-14 rounded border-2"
                    >
                        <div class="mb-5">
                            <label for="" class="font-bold text-2xl"
                                >ลงทะเบียน</label
                            >
                        </div>
                        <!-- ข้อมูลบัญชีผู้ใช้ -->
                        <div class="mb-4">
                            <label for="email" class="block font-bold mb-2"
                                >Phone</label
                            >
                            <input
                                type="tel"
                                name="phone"
                                id="phone"
                                class="border rounded w-full px-3 leading-tight focus:outline-none focus:shadow-outline"
                                v-model="phone"
                                pattern="[0]{1}[0-9]{2}[0-9]{3}[0-9]{4}"
                            />
                        </div>
                        <div
                            class="flex w-full mb-3 text-gray-500 text-center text-sm"
                        >
                            มีตัวอักษรทั้งหมดไม่เกิน 10 ตัวอักษร เช่น
                            (0999999999)
                        </div>
                        <div class="mb-4">
                            <label for="password" class="block font-bold mb-2"
                                >Password</label
                            >
                            <div class="relative">
                                <input
                                    type="password"
                                    name="password"
                                    id="password"
                                    class="border rounded w-full py-2 px-3 pr-10 leading-tight focus:outline-none focus:shadow-outline js-password"
                                    required
                                    v-model="password"
                                />
                                <button
                                    type="button"
                                    class="absolute inset-y-0 right-0 px-3 py-2 text-gray-500 focus:outline-none js-password-toggle"
                                    @click="
                                        togglePasswordVisibility('password')
                                    "
                                >
                                    {{ showPassword ? "hide" : "show" }}
                                </button>
                            </div>
                        </div>
                        <div class="mb-6">
                            <label
                                for="confirm_password"
                                class="block font-bold mb-2"
                                >Confirm Password</label
                            >
                            <div class="relative">
                                <input
                                    type="password"
                                    name="confirm_password"
                                    id="confirm_password"
                                    class="border rounded w-full py-2 px-3 pr-10 leading-tight focus:outline-none focus:shadow-outline js-password"
                                    required
                                    v-model="confirm_password"
                                    @input="checkPasswordMatch"
                                />
                                <button
                                    type="button"
                                    class="absolute inset-y-0 right-0 px-3 py-2 text-gray-500 focus:outline-none js-password-toggle"
                                    @click="
                                        toggleConfirmPasswordVisibility(
                                            'confirm_password'
                                        )
                                    "
                                >
                                    {{ showConfirmPassword ? "hide" : "show" }}
                                </button>
                            </div>
                        </div>
                        <div>
                            <p
                                v-if="passwordMismatch"
                                class="text-red-500 mb-4"
                            >
                                รหัสผ่านไม่ตรงกัน
                            </p>
                        </div>
                        <!-- ปุ่มสมัครสมาชิก -->
                        <div class="flex mb-6">
                            <label class="text-gray-500 font-bold">
                                <input
                                    class="mr-2 leading-tight"
                                    type="checkbox"
                                    v-model="newsletterChecked"
                                />
                                <span class="text-sm text-gray-500">
                                    โดยการเปิดบัญชี BearSkill
                                    ท่านรับทราบและตกลงตาม
                                    <span
                                        class="ml-7 text-sm text-blue-500 hover:border-b-2 hover:border-blue-700"
                                    >
                                        เงื่อนไขการให้บริการ
                                    </span>
                                    &
                                    <span
                                        class="text-sm text-blue-500 hover:border-b-2 hover:border-blue-700"
                                    >
                                        นโยบายความเป็นส่วนตัว
                                    </span>
                                </span>
                            </label>
                        </div>
                        <div class="flex justify-center">
                            <button
                                type="submit"
                                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                            >
                                สมัครสมาชิก
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </LayoutPage>
</template>
<script>
export default {
    data() {
        return {
            phone: "",
            email: "",
            password: "",
            confirm_password: "",
            teacher_image: "",
            showPassword: false,
            showConfirmPassword: false,
            passwordMismatch: false,
        };
    },
    methods: {
        togglePasswordVisibility(inputId) {
            const passwordInput = document.getElementById(inputId);
            if (passwordInput.type === "password") {
                passwordInput.type = "text";
            } else {
                passwordInput.type = "password";
            }
            this.showPassword = !this.showPassword;
        },
        toggleConfirmPasswordVisibility(inputId) {
            const confirmpasswordInput = document.getElementById(inputId);
            if (confirmpasswordInput.type === "password") {
                confirmpasswordInput.type = "text";
            } else {
                confirmpasswordInput.type = "password";
            }
            this.showConfirmPassword = !this.showConfirmPassword;
        },
        checkPasswordMatch() {
            this.passwordMismatch = this.password !== this.confirm_password;
        },
        CreateUser() {
            const formData = new FormData();
            formData.append("phone", this.phone);
            formData.append("password", this.password);
            formData.append("confirm_password", this.confirm_password);

            console.log(this.phone);
            console.log(this.password);
            console.log(this.confirm_password);

            if (!this.newsletterChecked) {
                alert(
                    "กรุณากดยอมรับข้อตกลง เงื่อนไขการให้บริการ & นโยบายความเป็นส่วนตัว ของทางเว็บไซต์ BearSkill"
                );
                return;
            }

            axios
                .post("/createduser", formData)
                .then((response) => {
                    console.log(response);
                })
                .catch((error) => {
                    console.log(error);
                });
        },
    },
    mounted() {},
};
</script>
