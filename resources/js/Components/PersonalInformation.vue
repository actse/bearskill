<script setup>
import InputError from "@/Components/InputError.vue";
import InputLabel from "@/Components/InputLabel.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import TextInput from "@/Components/TextInput.vue";
import LayoutPage from "@/Layouts/LayoutPage.vue";
import { Link, useForm, usePage } from "@inertiajs/vue3";

defineProps({
    mustVerifyEmail: {
        type: Boolean,
    },
    status: {
        type: String,
    },
});

const user = usePage().props.auth.user;

const form = useForm({
    name: user.name,
    email: user.email,
    id: user.id,
});
</script>

<template>
    <section>
        <!-- Modal -->
        <div
            class="flex flex-row w-full h-10 mb-4 bg-[#151F32] text-white items-center justify-center rounded"
        >
            บันทึกข้อมูลส่วนตัว
        </div>
        <form
            class="w-full text-slate-500"
            @submit.prevent="updateprofile"
            enctype="multipart/form-data"
        >
            <!-- ข้อมูลส่วนตัว -->
            <div class="flex flex-row mb-4">
                <div class="w-1/2 mr-2">
                    <label for="name" class="block font-bold mb-2">ชื่อ</label>
                    <input
                        type="text"
                        v-model="name"
                        name="name"
                        id="name"
                        class="border-slate-400 rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline"
                    />
                </div>
                <div class="w-1/2 ml-2">
                    <label for="email" class="block font-bold mb-2"
                        >E-mail</label
                    >
                    <input
                        type="email"
                        v-model="email"
                        name="email"
                        id="email"
                        class="border-slate-400 rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline"
                    />
                </div>
            </div>
            <div class="flex flex-row mb-4">
                <div class="w-1/2 mr-2">
                    <label for="phone" class="block font-bold mb-2"
                        >เบอร์โทร</label
                    >
                    <input
                        type="tel"
                        v-model="phone"
                        name="phone"
                        id="phone"
                        class="border-slate-400 rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline"
                    />
                </div>
                <div class="w-1/2 ml-2">
                    <label for="lineid" class="block font-bold mb-2"
                        >Line ID</label
                    >
                    <input
                        type="text"
                        v-model="lineid"
                        name="lineid"
                        id="lineid"
                        class="border-slate-400 rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline"
                    />
                </div>
            </div>
            <div class="flex flex-row mb-4">
                <div class="w-1/2 mr-2">
                    <label for="birthday" class="block font-bold mb-2"
                        >วัน/เดือน/ปี/ เกิด</label
                    >
                    <input
                        type="date"
                        v-model="birthday"
                        name="birthday"
                        id="birthday"
                        class="border-slate-400 rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline"
                    />
                </div>
                <div class="w-1/2 ml-2">
                    <label for="Instagram" class="block font-bold mb-2"
                        >Instagram</label
                    >
                    <input
                        type="text"
                        v-model="instagram"
                        name="instagram"
                        id="instagram"
                        class="border-slate-400 rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline"
                    />
                </div>
            </div>
            <!-- submit -->
            <div class="flex flex-row items-center justify-center mt-5">
                <div class="flex-col">
                    <button
                        type="submit"
                        class="bg-[#151F32] hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                    >
                        เพิ่มข้อมูลส่วนตัว
                    </button>
                </div>
            </div>
        </form>
    </section>
</template>
<script>
export default {
    data() {
        return {
            name: "",
            birthday: "",
            email: "",
            phone: "",
            lineid: "",
            instagram: "",
        };
    },
    methods: {
        selectData() {
            const userId = this.$page.props.auth.user.id;
            const formData = new FormData();
            formData.append("id", userId);

            axios
                .post("/selectprofile", formData)
                .then((response) => {
                    this.name = response.data.name;
                    this.phone = response.data.phone;
                    this.email = response.data.email;
                    this.birthday = response.data.birthday;
                    this.lineid = response.data.lineid;
                    this.instagram = response.data.instagram;

                    console.log(response.data);
                    console.log(this.name);
                    console.log(this.phone);
                    console.log(this.email);
                    console.log(this.birthday);
                    console.log(this.lineid);
                    console.log(this.instagram);

                })
                .catch((error) => {
                    console.error(error.response.data);
                });
        },
        updateprofile() {
            const userId = this.$page.props.auth.user.id;
            const formData = new FormData();

            formData.append("id", userId);
            formData.append("name", this.name);
            formData.append("birthday", this.birthday);
            formData.append("email", this.email);
            formData.append("phone", this.phone);
            formData.append("lineid", this.lineid);
            formData.append("instagram", this.instagram);
            formData.append("address", this.address);

            axios
                .post("/editteacher", formData)
                .then((response) => {
                    console.log(response.data);
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

<style scoped></style>
