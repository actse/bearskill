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
        <form
            class="w-full text-slate-500"
            @submit.prevent="insertSubject"
            enctype="multipart/form-data"
        >
            <!-- ข้อมูลอื่น ๆ -->
            <div
                class="flex w-full h-10 mb-4 bg-[#151F32] text-white items-center justify-center rounded"
            >
                เพิ่มรายวิชา
            </div>
            <div class="mb-4">
                <label for="subject" class="block font-bold mb-2"
                    >หมวดหมู่วิชา</label
                >
                <select
                    name="subject"
                    id="subject"
                    v-model="type_subject"
                    class="border-slate-400 rounded w-1/2 py-2 px-3 leading-tight focus:outline-none focus:shadow-outline"
                >
                    <option value="0">เลือกรายวิชา</option>
                    <option
                        v-for="(item, index) in listSubject_category"
                        :value="index"
                    >
                        {{ item.type_name }}
                    </option>
                </select>
            </div>
            <div class="flex mb-4 w-full">
                <div class="flex flex-col w-full">
                    <label for="education_level" class="block font-bold"
                        >ชื่อรายวิชา</label
                    >

                    <div class="flex flex-row mb-4">
                        <div
                            class="leading-tight focus:outline-none focus:shadow-outline"
                        >
                            <div>
                                <label class="block mt-2">
                                    <input
                                        class="appearance-none bg-white text-blue-400 border border-slate-400 rounded py-3 px-3 leading-tight focus:outline-none focus:bg-white"
                                        type="text"
                                        v-model="subject_name"
                                    />
                                </label>
                            </div>
                        </div>
                    </div>
                    <label for="education_level" class="block font-bold"
                        >ราคาวิชา</label
                    >
                    <div class="flex flex-row mb-4">
                        <div
                            class="leading-tight focus:outline-none focus:shadow-outline"
                        >
                            <div>
                                <label class="block mt-2">
                                    <input
                                        class="appearance-none bg-white text-blue-400 border border-slate-400 rounded py-3 px-3 leading-tight focus:outline-none focus:bg-white"
                                        type="number"
                                        v-model="price"
                                    />
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex-col w-full -ml-20">
                    <label for="subject_detail" class="block font-bold mb-2"
                        >หลักสูตร</label
                    >
                    <textarea
                        type="text"
                        v-model="subject_detail"
                        name="subject_detail"
                        id="subject_detail"
                        class="border-slate-400 rounded w-full h-1/2 py-2 px-3 leading-tight focus:outline-none focus:shadow-outline"
                    />
                </div>
            </div>
            <div class="flex mb-4 w-full">
                <div class="flex flex-col w-full mr-4">
                    <label for="education_level" class="block font-bold"
                        >รูปแบบในการสอน</label
                    >
                    <div class="flex flex-row mt-2">
                        <div class="ml-4 space-y-2">
                            <label
                                v-for="(item, index) in 2"
                                :key="index"
                                class="block"
                            >
                                <input
                                    class="appearance-none bg-gray-200 text-blue-400 border border-white rounded py-3 px-3 leading-tight focus:outline-none focus:bg-white"
                                    type="checkbox"
                                    :id="'education_level' + item"
                                    :value="item"
                                    v-model="selectedLevels"
                                    @click="handleCheckboxChange(item)"
                                />
                                {{
                                    item === 1
                                        ? "ประเภท เดี่ยว"
                                        : item === 2
                                        ? "ประเภท กลุ่ม"
                                        : ""
                                }}
                            </label>
                        </div>
                    </div>
                </div>
                <div class="flex flex-row w-full mr-4">
                    <div class="flex mt-2">
                        <div class="m-1 space-y-2">
                            <label for="startTime" class="block font-bold"
                                >เวลาเริ่มต้น</label
                            >
                            <input
                                type="time"
                                id="startTime"
                                v-model="startTime"
                                class="appearance-none bg-gray-200 text-slate-400 border border-white rounded py-2 px-4 leading-tight focus:outline-none focus:bg-white"
                            />
                        </div>
                    </div>
                    <div class="flex mt-2">
                        <div class="m-1 space-y-2">
                            <label for="endTime" class="block font-bold"
                                >เวลาสิ้นสุด</label
                            >
                            <input
                                type="time"
                                id="endTime"
                                v-model="endTime"
                                class="appearance-none bg-gray-200 text-slate-400 border border-white rounded py-2 px-4 leading-tight focus:outline-none focus:bg-white"
                            />
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex w-full">
                <div class="flex flex-col w-full">
                    <label for="education_level" class="block font-bold"
                        >วันที่ทำการสอน</label
                    >

                    <div class="flex mt-2 mb-4">
                        <div
                            class="flex ml-2 leading-tight focus:outline-none focus:shadow-outline"
                        >
                            <div class="flex">
                                <label
                                    class="mr-2"
                                    v-for="(item, index) in 7"
                                    :key="index"
                                >
                                    <input
                                        class="ml-2 my-2 appearance-none bg-gray-200 text-blue-400 border border-white rounded py-3 px-3 leading-tight focus:outline-none focus:bg-white"
                                        type="checkbox"
                                        :id="'teaching_day' + item"
                                        :value="item"
                                        v-model="teaching_day"
                                        @click="ishandleCheckboxChange(item)"
                                    />
                                    {{ getDayName(item) }}
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mb-4">
                <label for="location_teaching" class="block font-bold mb-2"
                    >สถานที่สอน</label
                >
                <textarea
                    type="text"
                    v-model="location_teaching"
                    name="location_teaching"
                    id="location_teaching"
                    class="border-slate-400 rounded w-2/3 h-20 py-2 px-3 leading-tight focus:outline-none focus:shadow-outline"
                />
            </div>
            <div class="flex items-center justify-center mt-5">
                <button
                    type="submit"
                    class="bg-[#151F32] hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                >
                    เพิ่มรายวิชา
                </button>
            </div>
        </form>
    </section>
</template>
<script>
import axios from "axios";
export default {
    data() {
        return {
            type_subject: "",
            subject_name: "",
            selectedLevels: "",
            teaching_day: [],
            subject_detail: "",
            listSubject_category: "",
            startTime: "",
            endTime: "",
        };
    },
    methods: {
        handleCheckboxChange(item) {
            if (!this.selectedLevels.includes(item)) {
                this.selectedLevels.push(item);
            }
            console.log(this.selectedLevels);
        },
        getDayName(dayNumber) {
            const days = [
                "อาทิตย์",
                "จันทร์",
                "อังคาร",
                "พุธ",
                "พฤหัสบดี",
                "ศุกร์",
                "เสาร์",
            ];
            return days[dayNumber - 1] || "";
        },
        ishandleCheckboxChange(item) {
            if (!this.teaching_day.includes(item)) {
                this.teaching_day.push(item);
                this.teaching_day = [selectedDay];
            }
            console.log(this.teaching_day);
        },
        list_subject_category() {
            axios
                .get("/SubjectCategory")
                .then((response) => {
                    console.log(response.data);
                    this.listSubject_category = response.data;
                })
                .catch((error) => {
                    console.error(error.response.data);
                });
        },
        insertSubject() {
            const userId = this.$page.props.auth.user.id;
            const formData = new FormData();
            formData.append("id", userId);
            formData.append("type_subject", this.type_subject);
            formData.append("subject_name", this.subject_name);
            formData.append("subject_detail", this.subject_detail);
            formData.append("teaching_format", this.teaching_format);
            formData.append("start_time", this.start_time);
            formData.append("end_time", this.end_time);
            formData.append("teaching_days", this.teaching_days);
            formData.append("location_teaching", this.location_teaching);
            axios
                .post("/insersubject", formData)
                .then((response) => {
                    console.log(response.data);
                })
                .catch((error) => {
                    console.error(error);
                });
        },
    },
    mounted() {
        this.list_subject_category();
    },
};
</script>
