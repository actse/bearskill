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
            <div
                class="flex w-full h-10 mb-4 bg-[#151F32] text-white items-center justify-center rounded"
            >
                ประวัติการศึกษา
            </div>
            <div class="mb-4">
                <label for="graduation_status" class="block font-bold mb-2"
                    >จบการศึกษาระดับใด</label
                >
                <select
                    name="graduation_status"
                    @change="onchange(graduation_status)"
                    id="graduation_status"
                    v-model="graduation_status"
                    class="border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline"
                >
                    <option value="">เลือกระดับการศึกษา</option>
                    <option v-for="(item, index) in 3" :value="index + 1">
                        {{
                            item === 1
                                ? "ปริญาตรี"
                                : item === 2
                                ? "ปริญาโท"
                                : "ปริญาเอก"
                        }}
                    </option>
                </select>
            </div>
            <div class="mb-4">
                <label for="bachelor_university" class="block font-bold mb-2"
                    >สถาบัน / มหาวิทยาลัย</label
                >
                <input
                    type="text"
                    v-model="bachelor_university"
                    name="bachelor_university"
                    id="bachelor_university"
                    class="border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline"
                />
            </div>
            <div class="mb-4">
                <label for="bachelor_major" class="block font-bold mb-2"
                    >วิชาเอก / สาขาวิชา</label
                >
                <input
                    type="text"
                    v-model="bachelor_major"
                    name="bachelor_major"
                    id="bachelor_major"
                    class="border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline"
                />
            </div>
            <div class="flex flex-row items-center justify-center">
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
            teacher_image: "",
            prefix: "",
            first_name: "",
            last_name: "",
            nickname: "",
            birthday: "",
            phone: "",
            lineid: "",
            address: "",
            idcard_image: "",
            reference_person_name: "",
            reference_person_phone: "",
            reference_person_relationship: "",
            graduation_status: "",
            bachelor_status: "",
            bachelor_year: "",
            bachelor_univercity: "",
            bachelor_faculty: "",
            bachelor_major: "",
            bachelor_gpax: "",
            bachelor_reference_documents: "",
            master_status: "",
            master_year: "",
            master_univercity: "",
            master_faculty: "",
            master_major: "",
            master_gpax: "",
            master_reference_documents: "",
            doctoral_status: "",
            doctoral_year: "",
            doctoral_univercity: "",
            doctoral_faculty: "",
            doctoral_major: "",
            doctoral_gpax: "",
            doctoral_reference_documents: "",
            education_level: "",
            location_teaching: "",
            teaching_experience: "",
            teaching_experience_year: "",
            teaching_experience_detail: "",
            work_experience: "",
            we_more_detail: "",
            register_at: "",
            status_account: "",
            select_form_bachelor: false,
            select_form_master: false,
            select_form_doctoral: false,
            selectedLevels: [],
            bachelorStatusOptions: [
                {
                    id: "bachelor_status_completed",
                    name: "bachelor_status",
                    value: "completed",
                    label: "จบการศึกษาแล้ว",
                },
                {
                    id: "bachelor_status_studying",
                    name: "bachelor_status",
                    value: "studying",
                    label: "กำลังศึกษาอยู่",
                },
            ],
            masterStatusOptions: [
                {
                    id: "master_status_completed",
                    value: "completed",
                    label: "จบการศึกษาแล้ว",
                },
                {
                    id: "master_status_studying",
                    value: "studying",
                    label: "กำลังศึกษาอยู่",
                },
            ],
            doctoralStatusOptions: [
                {
                    id: "doctoral_status_completed",
                    value: "completed",
                    label: "จบการศึกษาแล้ว",
                },
                {
                    id: "doctoral_status_studying",
                    value: "studying",
                    label: "กำลังศึกษาอยู่",
                },
            ],
        };
    },
    methods: {
        onFileChange(event) {
            const selectedFile = event.target.files[0];

            if (selectedFile) {
                this.teacher_image = selectedFile;
            }
            console.log(this.teacher_image);
        },
        onIdCardImageChange(event) {
            const selectedFile = event.target.files[0];
            if (selectedFile) {
                this.idcard_image = selectedFile;
            }
            console.log(this.idcard_image);
        },
        handleCheckboxChange(item) {
            if (!this.selectedLevels.includes(item)) {
                this.selectedLevels.push(item);
            }
            console.log(this.selectedLevels);
        },
        onchange(item) {
            this.select_form_bachelor = false;
            this.select_form_master = false;
            this.select_form_doctoral = false;

            if (item == 1) {
                this.select_form_bachelor = true;
            }
            if (item > 1 && item < 3) {
                this.select_form_master = true;
            }
            if (item == 3) {
                this.select_form_doctoral = true;
            }
            if (item === "") {
                this.select_form_bachelor = false;
                this.select_form_master = false;
                this.select_form_doctoral = false;
            }
        },
        editteacher() {
            const formData = new FormData();
            formData.append("teacher_image", this.teacher_image);
            formData.append("prefix", this.prefix);
            formData.append("first_name", this.first_name);
            formData.append("last_name", this.last_name);
            formData.append("nickname", this.nickname);
            formData.append("birthday", this.birthday);
            formData.append("phone", this.phone);
            formData.append("lineid", this.lineid);
            formData.append("address", this.address);
            formData.append("idcard_image", this.idcard_image);
            formData.append(
                "reference_person_name",
                this.reference_person_name
            );
            formData.append(
                "reference_person_phone",
                this.reference_person_phone
            );
            formData.append(
                "reference_person_relationship",
                this.reference_person_relationship
            );
            formData.append("graduation_status", this.graduation_status);
            formData.append("bachelor_status", this.bachelor_status);
            formData.append("bachelor_year", this.bachelor_year);
            formData.append("bachelor_univercity", this.bachelor_univercity);
            formData.append("bachelor_faculty", this.bachelor_faculty);
            formData.append("bachelor_major", this.bachelor_major);
            formData.append("bachelor_gpax", this.bachelor_gpax);
            formData.append(
                "bachelor_reference_documents",
                this.bachelor_reference_documents
            );
            formData.append("master_status", this.master_status);
            formData.append("master_year", this.master_year);
            formData.append("master_univercity", this.master_univercity);
            formData.append("master_faculty", this.master_faculty);
            formData.append("master_major", this.master_major);
            formData.append("master_gpax", this.master_gpax);
            formData.append(
                "master_reference_documents",
                this.master_reference_documents
            );
            formData.append("doctoral_status", this.doctoral_status);
            formData.append("doctoral_year", this.doctoral_year);
            formData.append("doctoral_univercity", this.doctoral_univercity);
            formData.append("doctoral_faculty", this.doctoral_faculty);
            formData.append("doctoral_major", this.doctoral_major);
            formData.append("doctoral_gpax", this.doctoral_gpax);
            formData.append(
                "doctoral_reference_documents",
                this.doctoral_reference_documents
            );
            formData.append("education_level", this.selectedLevels);
            formData.append("location_teaching", this.location_teaching);
            formData.append("teaching_experience", this.teaching_experience);
            formData.append(
                "teaching_experience_year",
                this.teaching_experience_year
            );
            formData.append(
                "teaching_experience_detail",
                this.teaching_experience_detail
            );
            formData.append("work_experience", this.work_experience);
            formData.append("we_more_detail", this.we_more_detail);

            console.log(this.teacher_image);
            console.log(this.prefix);
            console.log(this.first_name);
            console.log(this.last_name);
            console.log(this.nickname);
            console.log(this.birthday);
            console.log(this.phone);
            console.log(this.lineid);
            console.log(this.address);
            console.log(this.idcard_image);
            console.log(this.reference_person_name);
            console.log(this.reference_person_phone);
            console.log(this.reference_person_relationship);
            console.log(this.graduation_status);
            console.log(this.bachelor_status);
            console.log(this.bachelor_year);
            console.log(this.bachelor_univercity);
            console.log(this.bachelor_faculty);
            console.log(this.bachelor_major);
            console.log(this.bachelor_gpax);
            console.log(this.bachelor_reference_documents);
            console.log(this.master_status);
            console.log(this.master_year);
            console.log(this.master_univercity);
            console.log(this.master_faculty);
            console.log(this.master_major);
            console.log(this.master_gpax);
            console.log(this.master_reference_documents);
            console.log(this.doctoral_status);
            console.log(this.doctoral_year);
            console.log(this.doctoral_univercity);
            console.log(this.doctoral_faculty);
            console.log(this.doctoral_major);
            console.log(this.doctoral_gpax);
            console.log(this.doctoral_reference_documents);
            console.log(this.selectedLevels);
            console.log(this.location_teaching);
            console.log(this.teaching_experience);
            console.log(this.teaching_experience_year);
            console.log(this.teaching_experience_detail);
            console.log(this.work_experience);
            console.log(this.we_more_detail);

            axios
                .post("/editteacher", formData)
                .then((response) => {})
                .catch((error) => {
                    console.log(error);
                });
        },
    },
    mounted() {},
};
</script>
