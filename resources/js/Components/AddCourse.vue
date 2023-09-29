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
            @submit.prevent="editteacher"
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
                    >รายวิชา</label
                >
                <select
                    name="subject"
                    id="subject"
                    v-model="subject"
                    class="border-slate-400 rounded w-1/2 py-2 px-3 leading-tight focus:outline-none focus:shadow-outline"
                >
                    <option value="0">เลือกรายวิชา</option>
                    <option v-for="(item, index) in 3" :value="index + 1">
                        {{
                            item === 1
                                ? "วิชาหลัก"
                                : item === 2
                                ? "ภาษา"
                                : "วิทยาศาตร์"
                        }}
                    </option>
                </select>
            </div>
            <div class="flex mb-4 w-full">
                <div class="flex flex-col w-full">
                    <label for="education_level" class="block font-bold"
                        >ระดับการศึกษาที่ต้องการสอน</label
                    >

                    <div class="flex flex-row mt-2 mb-4">
                        <div
                            class="ml-4 leading-tight focus:outline-none focus:shadow-outline"
                        >
                            <div>
                                <label
                                    v-for="(item, index) in 4"
                                    :key="index"
                                    class="block mt-2"
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
                                            ? "ประถมศึกษา"
                                            : item === 2
                                            ? "มัธยมศึกษา"
                                            : item === 3
                                            ? "ปริญาศึกษา"
                                            : "วัยทำงาน"
                                    }}
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col w-full">
                    <label for="education_level" class="block font-bold"
                        >วันที่ทำการสอน</label
                    >

                    <div class="flex flex-row mt-2 mb-4">
                        <div
                            class="ml-4 leading-tight focus:outline-none focus:shadow-outline"
                        >
                            <div>
                                <label
                                    v-for="(item, index) in 7"
                                    :key="index"
                                    class="block mt-2"
                                >
                                    <input
                                        class="appearance-none bg-gray-200 text-blue-400 border border-white rounded py-3 px-3 leading-tight focus:outline-none focus:bg-white"
                                        type="checkbox"
                                        :id="'teaching_day' + item"
                                        :value="item"
                                        v-model="teaching_day"
                                        @click="ishandleCheckboxChange(item)"
                                    />
                                    {{
                                        item === 1
                                            ? "อาทิตย์"
                                            : item === 2
                                            ? "จันทร์"
                                            : item === 3
                                            ? "อังคาร"
                                            : item === 4
                                            ? "พุทธ"
                                            : item === 5
                                            ? "พฤหัสบดี"
                                            : item === 6
                                            ? "ศุกร์"
                                            : item === 7
                                            ? "เสาร์"
                                            : ""
                                    }}
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
                <input
                    type="text"
                    v-model="location_teaching"
                    name="location_teaching"
                    id="location_teaching"
                    class="border-slate-400 rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline"
                />
            </div>
            <div class="flex items-center justify-center mt-10 -mb-2">
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
export default {
    data() {
        return {
            subject: "",
            selectedLevels: "",
            teaching_day:"",
        };
    },
    methods: {
        handleCheckboxChange(item) {
            if (!this.selectedLevels.includes(item)) {
                this.selectedLevels.push(item);
            }
            console.log(this.selectedLevels);
        },
        ishandleCheckboxChange(item) {
            if (!this.teaching_day.includes(item)) {
                this.teaching_day.push(item);
            }
            console.log(this.teaching_day);
        },
    },
    mounted() {},
};
</script>
