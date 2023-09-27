<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head } from "@inertiajs/vue3";
</script>

<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                BearSkill
            </h2>
        </template>
        <div class="py-12">
            <div class="max-w-7xl mx-auto">
                <div class="py-4">
                    <div class="flex items-center justify-center">
                        <div
                            class="flex flex-row w-full bg-gray-300 border-2 mx-2 rounded-md"
                        >
                            <div class="w-full h-96 p-4">
                                <div class="bg-white w-full h-full"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="py-4">
                    <div class="flex items-center justify-center">
                        <div
                            class="flex flex-row w-1/2 bg-gray-300 border-2 mx-2 rounded-md"
                        >
                            <div class="w-full h-96 p-4">
                                <div class="bg-white w-full h-full"></div>
                            </div>
                        </div>
                        <div
                            class="flex flex-row w-1/2 bg-slate-300 border-2 mx-2 rounded-md"
                        >
                            <div class="w-full h-96 p-4">
                                <div class="bg-white w-full h-full"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="py-4">
                    <div class="flex items-center justify-center">
                        <div
                            class="flex flex-row w-full bg-gray-300 border-2 mx-2 rounded-md"
                        >
                            <div class="w-full h-44 p-4">
                                <div class="bg-white w-full h-full"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="py-4">
                    <div class="flex items-center justify-center">
                        <div
                            class="flex flex-row w-1/2 bg-gray-300 border-2 mx-2 rounded-md"
                        >
                            <div class="w-full h-96 p-4">
                                <div class="bg-white w-full h-full"></div>
                            </div>
                        </div>
                        <div
                            class="flex flex-row w-1/2 bg-slate-300 border-2 mx-2 rounded-md"
                        >
                            <div class="w-full h-96 p-4">
                                <div class="bg-white w-full h-full"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="py-4">
                    <div class="flex items-center justify-center">
                        <div
                            class="flex flex-row w-3/5 bg-gray-300 border-2 mx-2 rounded-md"
                        >
                            <div class="w-full h-96 p-4">
                                <div class="bg-white w-full h-full"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="py-4">
                    <div class="flex items-center justify-center">
                        <div
                            class="flex flex-row w-3/5 bg-gray-300 border-2 mx-2 rounded-md"
                        >
                            <div class="w-full h-96 p-4">
                                <div class="bg-white w-full h-full"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="py-4">
                    <div class="flex items-center justify-center">
                        <div
                            class="flex flex-row w-full bg-gray-300 border-2 mx-2 rounded-md"
                        >
                            <div class="w-full h-44 p-4">
                                <div class="bg-white w-full h-full"></div>
                            </div>
                        </div>
                        <div
                            class="flex flex-row w-full bg-slate-300 border-2 mx-2 rounded-md"
                        >
                            <div class="w-full h-44 p-4">
                                <div class="bg-white w-full h-full"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
<script>
export default {
    data() {
        return {
            email: "",
            password: "",
            confirm_password: "",
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
            select_form_bachelor: null,
            select_form_master: null,
            select_form_doctoral: null,
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

        onBachelorReferenceDocumentsChange(event) {
            const selectedFile = event.target.files[0];
            if (selectedFile) {
                this.bachelor_reference_documents = selectedFile;
            }
            console.log(this.bachelor_reference_documents);
        },

        onMasterReferenceDocumentsChange(event) {
            const selectedFile = event.target.files[0];
            if (selectedFile) {
                this.master_reference_documents = selectedFile;
            }
            console.log(this.master_reference_documents);
        },

        onDoctoralReferenceDocumentsChange(event) {
            const selectedFile = event.target.files[0];
            if (selectedFile) {
                this.doctoral_reference_documents = selectedFile;
            }
            console.log(this.doctoral_reference_documents);
        },
        handleCheckboxChange(item) {
            if (!this.selectedLevels.includes(item)) {
                this.selectedLevels.push(item);
            }
            console.log(this.selectedLevels);
        },
        onchange(item) {
            console.log(item);
            if (item == 1) {
                this.select_form_bachelor = true;
            }
            if (item > 1 && item < 3) {
                this.select_form_bachelor = true;
                this.select_form_master = true;
            }
            if (item == 3) {
                this.select_form_bachelor = true;
                this.select_form_master = true;
                this.select_form_doctoral = true;
            }
            if (item === "") {
                this.select_form_bachelor = false;
                this.select_form_master = false;
                this.select_form_doctoral = false;
            }
        },
        register_tutor() {
            const formData = new FormData();
            formData.append("email", this.email);
            formData.append("password", this.password);
            formData.append("confirm_password", this.confirm_password);
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

            console.log(this.email);
            console.log(this.password);
            console.log(this.confirm_password);
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
                .post("/register_tutor", formData)
                .then((response) => {})
                .catch((error) => {
                    console.log(error);
                });
        },
    },
    mounted() {},
};
</script>
