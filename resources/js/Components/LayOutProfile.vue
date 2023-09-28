<script setup>
import InputError from "@/Components/InputError.vue";
import InputLabel from "@/Components/InputLabel.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import TextInput from "@/Components/TextInput.vue";
import LayoutPage from "@/Layouts/LayoutPage.vue";

import { Link, useForm, usePage } from "@inertiajs/vue3";
import AddCourse from "@/Components/AddCourse.vue";
import PersonalData from "@/Components/PersonalData.vue";
import EducationalRecord from "@/Components/EducationalRecord.vue";
import PersonalInformation from "@/Components/PersonalInformation.vue";
import WorkExperience from "@/Components/WorkExperience.vue";

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
    <div class="flex">
        <div class="flex-row w-1/3 h-full">
            <div class="flex w-auto h-auto items-center justify-center">
                <label for="profile-image" class="cursor-pointer">
                    <img
                        class="mt-5 w-64 h-64 rounded-full border-4 border-blue-400 p-2 shadow-lg"
                        :src="profileImage"
                        alt=""
                    />
                </label>
                <input
                    type="file"
                    id="profile-image"
                    class="hidden"
                    accept="image/*"
                    @change="handleImageUpload"
                />
            </div>
            <div class="flex w-auto h-auto items-center justify-center">
                <div class="mt-6 text-2xl font-sans text-slate-600">
                    {{ $page.props.auth.user.name }}
                </div>
            </div>
            <div class="flex w-auto h-auto mt-4 items-center justify-center">
                <button
                    class="border-2 w-2/3 h-10 rounded-md mt-1 ml-2 text-md font-sans bg-blue-500 hover:bg-white text-white hover:text-blue-600"
                >
                    + ตารางรายวิชา
                </button>
            </div>
            <div class="flex w-auto h-auto mt-2 items-center justify-center">
                <button
                    class="border-2 w-2/3 h-10 rounded-md mt-1 ml-2 text-md font-sans bg-blue-500 hover:bg-white text-white hover:text-blue-600"
                >
                    + ประวัติการหักเครดิต
                </button>
            </div>
        </div>
        <!-- <div class="flex-row w-1/3 h-full">
                <div class="flex w-auto h-auto items-center justify-center">
                    <img
                        class="mt-5 w-64 h-64 rounded-full border-4 border-blue-400 p-2 shadow-lg"
                        src="../../imgs/imnayoen.jpeg"
                        alt=""
                    />
                </div>
                <div class="flex w-auto h-auto items-center justify-center">
                    <div class="mt-6 text-2xl font-promp text-slate-600">{{ $page.props.auth.user.name }}</div>
                </div>
                <div class="flex w-auto h-auto items-center justify-center">
                    <div class="mt-6">xxxxxxx</div>
                </div>
                <div class="flex w-auto h-auto items-center justify-center">
                    <div class="mt-6">xxxxxxx</div>
                </div>
            </div> -->
        <div class="flex flex-col w-2/3 h-auto items-start justify-start">
            <!-- Button trigger modal -->
            <div class="flex flex-row text-lg">
                <button
                    @click="Userdata"
                    class="m-1 py-3 no-underline hover:underline shadow-slate-300 text-slate-600 hover:text-blue-400 font-bold"
                >
                    ข้อมูลส่วนตัว /
                </button>
                <button
                    @click="OpenModal"
                    class="m-1 py-3 no-underline hover:underline shadow-slate-300 text-slate-600 hover:text-blue-400 font-bold"
                >
                    แก้ไขข้อมูลส่วนตัว /
                </button>
                <button
                    @click="OpenModal_two"
                    class="m-1 py-3 no-underline hover:underline shadow-slate-300 text-slate-600 hover:text-blue-400 font-bold"
                >
                    เพิ่มรายวิชา /</button
                ><button
                    @click="OpenModal_three"
                    class="m-1 py-3 no-underline hover:underline shadow-slate-300 text-slate-600 hover:text-blue-400 font-bold"
                >
                    เพิ่มประวัติการศึกษา /
                </button>
                <button
                    @click="Work_Experience"
                    class="m-1 py-3 no-underline hover:underline shadow-slate-300 text-slate-600 hover:text-blue-400 font-bold"
                >
                    เพิ่มประวัติการทำงาน
                </button>
            </div>
            <div
                class="flex flex-col w-full h-full rounded-md items-start justify-start text-slate-600"
            >
                <div
                    v-if="isUserdata"
                    class="border-2 border-gray-300 shadow-md rounded-md w-full p-3 mt-3 ml-2"
                >
                    <div class="bg-white rounded-md px-4">
                        <div class="flex flex-row w-auto">
                            <div
                                class="flex flex-col p-2 w-full text-slate-600"
                            >
                                <PersonalData></PersonalData>
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    v-if="isOpenModal"
                    class="border-2 border-gray-300 shadow-md rounded-md w-full p-3"
                >
                    <div class="bg-white rounded-md px-4">
                        <div class="flex flex-row w-full">
                            <div
                                class="flex flex-col p-2 w-full text-slate-600"
                            >
                                <PersonalInformation></PersonalInformation>
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    v-if="isOpenModal_two"
                    class="border-2 border-gray-300 shadow-md rounded-md w-full p-3"
                >
                    <div class="bg-white rounded-md px-4 w-full">
                        <div class="flex flex-row w-full">
                            <div class="flex flex-col p-2 w-full text-gray-700">
                                <AddCourse></AddCourse>
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    v-if="isOpenModal_three"
                    class="border-2 border-gray-300 shadow-md rounded-md w-full p-3"
                >
                    <div class="bg-white rounded-md px-4 w-full">
                        <div class="flex flex-row w-full">
                            <div class="flex flex-col p-2 w-full text-gray-700">
                                <EducationalRecord></EducationalRecord>
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    v-if="isWorkExperience"
                    class="border-2 border-gray-300 shadow-md rounded-md w-full p-3"
                >
                    <div class="bg-white rounded-md px-4 w-full">
                        <div class="flex flex-row w-full">
                            <div class="flex flex-col p-2 w-full text-gray-700">
                                <WorkExperience></WorkExperience>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>

export default {
    // components: {
    //     FormSimpledata,
    // },
    data() {
        return {
            isUserdata: true,
            isOpenModal: false,
            isOpenModal_two: false,
            isOpenModal_three: false,
            isWorkExperience: false,
            profileImage: "/storage/imnayoen.jpeg",
        };
    },
    methods: {
        Userdata() {
            this.isUserdata = true;
            this.isOpenModal = false;
            this.isOpenModal_two = false;
            this.isOpenModal_three = false;
            this.isWorkExperience = false;
            console.log(this.isOpenModal);
        },
        OpenModal() {
            this.isOpenModal = true;
            this.isOpenModal_two = false;
            this.isOpenModal_three = false;
            this.isWorkExperience = false;
            this.isUserdata = false;
            console.log(this.isOpenModal);
        },
        OpenModal_two() {
            this.isOpenModal_two = true;
            this.isOpenModal = false;
            this.isOpenModal_three = false;
            this.isWorkExperience = false;
            this.isUserdata = false;
            console.log(this.isOpenModal_two);
        },
        OpenModal_three() {
            this.isOpenModal_three = true;
            this.isOpenModal_two = false;
            this.isOpenModal = false;
            this.isWorkExperience = false;
            this.isUserdata = false;
            console.log(this.isOpenModal_three);
        },
        Work_Experience() {
            this.isWorkExperience = true;
            this.isOpenModal_three = false;
            this.isOpenModal_two = false;
            this.isOpenModal = false;
            this.isUserdata = false;
            console.log(this.isWorkExperience);
        },

        handleImageUpload(event) {
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = () => {
                    this.profileImage = reader.result;
                };
                reader.readAsDataURL(file);
            }
        },
    },
    mounted() {},
};
</script>

<style scoped></style>
