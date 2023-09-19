<script setup>
import LayoutPage from "@/Layouts/LayoutPage.vue";
import { Head } from "@inertiajs/vue3";
</script>

<template>

    <LayoutPage>
        <div class="py-4">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-700">
                        <form
                            @submit.prevent="register_tutor"
                            enctype="multipart/form-data"
                            class="max-w-lg mx-auto bg-gray-100 text-gray-600 shadow-md p-8 rounded border-2"
                        >
                            <div class="mb-5">
                                <label for="" class="font-bold text-2xl"
                                    >ลงทะเบียนติวเตอร์</label
                                >
                            </div>
                            <!-- ข้อมูลบัญชีผู้ใช้ -->
                            <div
                                class="flex w-full h-10 mb-4 bg-blue-500 text-white items-center justify-center rounded"
                            >
                                ข้อมูลเข้าสู่ระบบ
                            </div>
                            <div class="mb-4">
                                <label for="email" class="block font-bold mb-2"
                                    >Email</label
                                >
                                <input
                                    type="email"
                                    name="email"
                                    id="email"
                                    class="border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline"
                                    required
                                    v-model="email"
                                />
                            </div>
                            <div class="mb-4">
                                <label
                                    for="password"
                                    class="block font-bold mb-2"
                                    >Password</label
                                >
                                <input
                                    type="password"
                                    name="password"
                                    id="password"
                                    class="border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline"
                                    required
                                    v-model="password"
                                />
                            </div>
                            <div class="mb-6">
                                <label
                                    for="password_confirmation"
                                    class="block font-bold mb-2"
                                    >Confirm Password</label
                                >
                                <input
                                    type="password"
                                    name="password_confirmation"
                                    id="password_confirmation"
                                    class="border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline"
                                    required
                                    v-model="confirm_password"
                                />
                            </div>
                            <div
                                class="flex w-full h-10 mb-4 bg-blue-500 text-white items-center justify-center rounded"
                            >
                                ข้อมูลส่วนตัว
                            </div>
                            <!-- รูปภาพ -->
                            <div class="mb-4">
                                <label
                                    for="teacher_image"
                                    class="block font-bold mb-2"
                                    >รูปโปรไฟล์</label
                                >
                                <input
                                    type="file"
                                    name="teacher_image"
                                    id="teacher_image"
                                    accept="image/*"
                                    class="py-2 px-3 leading-tight focus:outline-none focus:shadow-outline"
                                    @change="onFileChange"
                                />
                            </div>
                            <!-- ข้อมูลส่วนตัว -->
                            <div class="mb-4 w-1/2">
                                <label for="prefix" class="block font-bold mb-2"
                                    >คำนำหน้าชื่อ</label
                                >
                                <input
                                    type="text"
                                    v-model="prefix"
                                    name="prefix"
                                    id="prefix"
                                    class="border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline"
                                />
                            </div>
                            <div class="flex flex-row mb-4">
                                <div class="w-1/2 mr-2">
                                    <label
                                        for="first_name"
                                        class="block font-bold mb-2"
                                        >ชื่อ</label
                                    >
                                    <input
                                        type="text"
                                        name="first_name"
                                        v-model="first_name"
                                        id="first_name"
                                        class="border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline"
                                        required
                                    />
                                </div>
                                <div class="w-1/2 ml-2">
                                    <label
                                        for="last_name"
                                        class="block font-bold mb-2"
                                        >นามสกุล</label
                                    >
                                    <input
                                        type="text"
                                        name="last_name"
                                        v-model="last_name"
                                        id="last_name"
                                        class="border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline"
                                        required
                                    />
                                </div>
                            </div>
                            <div class="flex flex-row mb-4">
                                <div class="w-1/2 mr-2">
                                    <label
                                        for="nickname"
                                        class="block font-bold mb-2"
                                        >ชื่อเล่น</label
                                    >
                                    <input
                                        type="text"
                                        v-model="nickname"
                                        name="nickname"
                                        id="nickname"
                                        class="border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline"
                                    />
                                </div>
                                <div class="w-1/2 ml-2">
                                    <label
                                        for="birthday"
                                        class="block font-bold mb-2"
                                        >วัน/เดือน/ปี เกิด</label
                                    >
                                    <input
                                        type="date"
                                        v-model="birthday"
                                        name="birthday"
                                        id="birthday"
                                        class="border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline"
                                    />
                                </div>
                            </div>
                            <div class="flex flex-row mb-4">
                                <div class="w-1/2 mr-2">
                                    <label
                                        for="phone"
                                        class="block font-bold mb-2"
                                        >เบอร์โทร</label
                                    >
                                    <input
                                        type="tel"
                                        v-model="phone"
                                        name="phone"
                                        id="phone"
                                        class="border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline"
                                    />
                                </div>
                                <div class="w-1/2 ml-2">
                                    <label
                                        for="lineid"
                                        class="block font-bold mb-2"
                                        >Line ID</label
                                    >
                                    <input
                                        type="text"
                                        v-model="lineid"
                                        name="lineid"
                                        id="lineid"
                                        class="border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline"
                                    />
                                </div>
                            </div>
                            <div class="mb-4">
                                <label
                                    for="address"
                                    class="block font-bold mb-2"
                                    >ที่อยู่ปัจจุบัน</label
                                >
                                <textarea
                                    v-model="address"
                                    name="address"
                                    id="address"
                                    class="border rounded w-4/5 h-32 py-2 px-3 leading-tight focus:outline-none focus:shadow-outline"
                                ></textarea>
                            </div>
                            <!-- เอกสาร -->
                            <div class="mb-4">
                                <label
                                    for="idcard_image"
                                    class="block font-bold mb-2"
                                    >ไฟล์เอกสารบัตรประชาชน</label
                                >
                                <input
                                    type="file"
                                    name="idcard_image"
                                    id="idcard_image"
                                    accept="image/*"
                                    class="py-2 px-3 leading-tight focus:outline-none focus:shadow-outline"
                                    @change="onIdCardImageChange"
                                />
                            </div>
                            <!-- ข้อมูลบุคคลอื่น ๆ -->
                            <div
                                class="flex w-full h-10 mb-4 bg-blue-500 text-white items-center justify-center rounded"
                            >
                                ข้อมูลบุคคลอ้างอิง
                            </div>
                            <div class="mb-4">
                                <label
                                    for="reference_person_name"
                                    class="block font-bold mb-2"
                                    >ชื่อ บุคคลอ้างอิง</label
                                >
                                <input
                                    type="text"
                                    v-model="reference_person_name"
                                    name="reference_person_name"
                                    id="reference_person_name"
                                    class="border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline"
                                />
                            </div>
                            <div class="mb-4">
                                <label
                                    for="reference_person_phone"
                                    class="block font-bold mb-2"
                                    >เบอร์ติดต่อบุคคลอ้างอิง</label
                                >
                                <input
                                    type="text"
                                    v-model="reference_person_phone"
                                    name="reference_person_phone"
                                    id="reference_person_phone"
                                    class="border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline"
                                />
                            </div>
                            <div class="mb-4">
                                <label
                                    for="reference_person_relationship"
                                    class="block font-bold mb-2"
                                    >ความสัมพันธ์บุคคลอ้างอิง</label
                                >
                                <input
                                    type="text"
                                    v-model="reference_person_relationship"
                                    name="reference_person_relationship"
                                    id="reference_person_relationship"
                                    class="border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline"
                                />
                            </div>
                            <div
                                class="flex w-full h-10 mb-4 bg-blue-500 text-white items-center justify-center rounded"
                            >
                                ประวัติการศึกษา
                            </div>
                            <div class="mb-4">
                                <label
                                    for="graduation_status"
                                    class="block font-bold mb-2"
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
                                    <option
                                        v-for="(item, index) in 3"
                                        :value="index + 1"
                                    >
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
                            <div v-if="select_form_bachelor">
                                <div class="flex flex-col mb-4">
                                    <label
                                        for="bachelor_status"
                                        class="block font-bold mb-2"
                                        >ระดับปริณญาตรี</label
                                    >
                                    <div class="flex flex-row my-3">
                                        <div
                                            class="ml-4 leading-tight focus:shadow-outline"
                                            v-for="(
                                                option, index
                                            ) in bachelorStatusOptions"
                                            :key="index"
                                        >
                                            <label
                                                :for="option.id"
                                                class="ml-2 cursor-pointer"
                                            >
                                                <input
                                                    type="radio"
                                                    v-model="bachelor_status"
                                                    :name="option.name"
                                                    :id="option.id"
                                                    :value="option.value"
                                                />
                                                {{ option.label }}
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <label
                                        for="bachelor_year"
                                        class="block font-bold mb-2"
                                        >ระดับปีการศึกษา</label
                                    >
                                    <select
                                        v-model="bachelor_year"
                                        name="bachelor_year"
                                        id="bachelor_year"
                                        class="border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline"
                                    >
                                        <option value="">
                                            กรุณาเลือกชั้นปี
                                        </option>
                                        <option
                                            v-for="item in 8"
                                            :key="index"
                                            :value="item"
                                        >
                                            ปี {{ item }}
                                        </option>
                                    </select>
                                </div>
                                <div class="mb-4">
                                    <label
                                        for="bachelor_university"
                                        class="block font-bold mb-2"
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
                                    <label
                                        for="bachelor_faculty"
                                        class="block font-bold mb-2"
                                        >คณะ</label
                                    >
                                    <input
                                        type="text"
                                        v-model="bachelor_faculty"
                                        name="bachelor_faculty"
                                        id="bachelor_faculty"
                                        class="border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline"
                                    />
                                </div>
                                <div class="mb-4">
                                    <label
                                        for="bachelor_major"
                                        class="block font-bold mb-2"
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
                                <div class="mb-4">
                                    <label
                                        for="bachelor_gpax"
                                        class="block font-bold mb-2"
                                        >GPAX</label
                                    >
                                    <input
                                        type="text"
                                        v-model="bachelor_gpax"
                                        name="bachelor_gpax"
                                        id="bachelor_gpax"
                                        class="border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline"
                                    />
                                </div>
                                <div class="mb-4">
                                    <label
                                        for="bachelor_reference_documents"
                                        class="block font-bold mb-2"
                                        >เอกสารยืนยัน เช่น (ใบประกาศนียบัตร /
                                        ใบรับรองการสอน)</label
                                    >
                                    <input
                                        type="file"
                                        name="bachelor_reference_documents"
                                        id="bachelor_reference_documents"
                                        accept="image/*"
                                        class="py-2 px-3 leading-tight focus:outline-none focus:shadow-outline"
                                        @change="
                                            onBachelorReferenceDocumentsChange
                                        "
                                    />
                                </div>
                            </div>
                            <div v-if="select_form_master">
                                <div class="flex flex-col mb-4">
                                    <label
                                        for="master_status"
                                        class="block font-bold mb-2"
                                        >ระดับปริณญาโท</label
                                    >
                                    <div
                                        class="flex flex-row my-3"
                                        v-for="(
                                            status, index
                                        ) in masterStatusOptions"
                                        :key="index"
                                    >
                                        <div
                                            class="ml-4 leading-tight focus:outline-none focus:shadow-outline"
                                        >
                                            <input
                                                type="radio"
                                                v-model="master_status"
                                                :name="status.value"
                                                :id="status.id"
                                            />
                                            <label
                                                :for="status.id"
                                                class="ml-2 cursor-pointer"
                                                >{{ status.label }}</label
                                            >
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <label
                                        for="master_year"
                                        class="block font-bold mb-2"
                                        >ระดับปีการศึกษา</label
                                    >
                                    <select
                                        v-model="master_year"
                                        name="master_year"
                                        id="master_year"
                                        class="border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline"
                                    >
                                        <option value="">
                                            กรุณาเลือกชั้นปี
                                        </option>
                                        <option
                                            v-for="item in 8"
                                            :key="index"
                                            value="item"
                                        >
                                            ปี {{ item }}
                                        </option>
                                    </select>
                                </div>
                                <div class="mb-4">
                                    <label
                                        for="master_university"
                                        class="block font-bold mb-2"
                                        >สถาบัน / มหาวิทยาลัย
                                    </label>
                                    <input
                                        v-model="master_university"
                                        type="text"
                                        name="master_university"
                                        id="master_university"
                                        class="border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline"
                                    />
                                </div>
                                <div class="mb-4">
                                    <label
                                        for="master_faculty"
                                        class="block font-bold mb-2"
                                        >คณะ</label
                                    >
                                    <input
                                        type="text"
                                        v-model="master_faculty"
                                        name="master_faculty"
                                        id="master_faculty"
                                        class="border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline"
                                    />
                                </div>
                                <div class="mb-4">
                                    <label
                                        for="master_major"
                                        class="block font-bold mb-2"
                                    >
                                        วิชาเอก / สาขาวิชา
                                    </label>
                                    <input
                                        type="text"
                                        v-model="master_major"
                                        name="master_major"
                                        id="master_major"
                                        class="border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline"
                                    />
                                </div>
                                <div class="mb-4">
                                    <label
                                        for="master_gpax"
                                        class="block font-bold mb-2"
                                        >GPAX</label
                                    >
                                    <input
                                        type="text"
                                        v-model="master_gpax"
                                        name="master_gpax"
                                        id="master_gpax"
                                        class="border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline"
                                    />
                                </div>
                                <div class="mb-4">
                                    <label
                                        for="master_reference_documents"
                                        class="block font-bold mb-2"
                                        >เอกสารยืนยัน เช่น (ใบประกาศนียบัตร /
                                        ใบรับรองการสอน)</label
                                    >
                                    <input
                                        type="file"
                                        name="master_reference_documents"
                                        id="master_reference_documents"
                                        accept="image/*"
                                        class="py-2 px-3 leading-tight focus:outline-none focus:shadow-outline"
                                        @change="
                                            onMasterReferenceDocumentsChange
                                        "
                                    />
                                </div>
                            </div>
                            <div v-if="select_form_doctoral">
                                <div class="flex flex-col mb-4">
                                    <label
                                        for="doctoral_status"
                                        class="block font-bold mb-2"
                                        >ระดับปริณญาเอก</label
                                    >
                                    <div
                                        class="flex flex-row my-3"
                                        v-for="(
                                            status, index
                                        ) in doctoralStatusOptions"
                                        :key="index"
                                    >
                                        <div
                                            class="ml-4 leading-tight focus:outline-none focus:shadow-outline"
                                        >
                                            <input
                                                type="radio"
                                                v-model="doctoral_status"
                                                :name="status.value"
                                                :id="status.id"
                                            />
                                            <label
                                                :for="status.id"
                                                class="ml-2 cursor-pointer"
                                                >{{ status.label }}</label
                                            >
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <label
                                        for="doctoral_year"
                                        class="block font-bold mb-2"
                                        >ระดับปีการศึกษา</label
                                    >
                                    <select
                                        name="doctoral_year"
                                        v-model="doctoral_year"
                                        id="doctoral_year"
                                        class="border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline"
                                    >
                                        <option value="">
                                            กรุณาเลือกชั้นปี
                                        </option>
                                        <option
                                            v-for="item in 8"
                                            :key="index"
                                            value="item"
                                        >
                                            ปี {{ item }}
                                        </option>
                                    </select>
                                </div>
                                <div class="mb-4">
                                    <label
                                        for="doctoral_university"
                                        class="block font-bold mb-2"
                                        >สถาบัน / มหาวิทยาลัย
                                    </label>
                                    <input
                                        type="text"
                                        v-model="doctoral_university"
                                        name="doctoral_university"
                                        id="doctoral_university"
                                        class="border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline"
                                    />
                                </div>
                                <div class="mb-4">
                                    <label
                                        for="doctoral_faculty"
                                        class="block font-bold mb-2"
                                        >คณะ</label
                                    >
                                    <input
                                        type="text"
                                        v-model="doctoral_faculty"
                                        name="doctoral_faculty"
                                        id="doctoral_faculty"
                                        class="border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline"
                                    />
                                </div>
                                <div class="mb-4">
                                    <label
                                        for="doctoral_major"
                                        class="block font-bold mb-2"
                                        >วิชาเอก / สาขาวิชา
                                    </label>
                                    <input
                                        type="text"
                                        v-model="doctoral_major"
                                        name="doctoral_major"
                                        id="doctoral_major"
                                        class="border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline"
                                    />
                                </div>
                                <div class="mb-4">
                                    <label
                                        for="doctoral_gpax"
                                        class="block font-bold mb-2"
                                        >GPAX</label
                                    >
                                    <input
                                        type="text"
                                        v-model="doctoral_gpax"
                                        name="doctoral_gpax"
                                        id="doctoral_gpax"
                                        class="border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline"
                                    />
                                </div>
                                <div class="mb-4">
                                    <label
                                        for="doctoral_reference_documents"
                                        class="block font-bold mb-2"
                                        >เอกสารยืนยัน เช่น (ใบประกาศนียบัตร /
                                        ใบรับรองการสอน)</label
                                    >
                                    <input
                                        type="file"
                                        name="doctoral_reference_documents"
                                        id="doctoral_reference_documents"
                                        accept="image/*"
                                        class="py-2 px-3 leading-tight focus:outline-none focus:shadow-outline"
                                        @change="
                                            onDoctoralReferenceDocumentsChange
                                        "
                                    />
                                </div>
                            </div>
                            <div
                                class="flex w-full h-10 mb-4 mt-6 bg-blue-500 text-white items-center justify-center rounded"
                            >
                                งานสอนที่ต้องการสอนในปัจจุบัน
                            </div>
                            <div class="mb-4">
                                <label
                                    for="education_level"
                                    class="block font-bold"
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
                                                    :id="
                                                        'education_level' + item
                                                    "
                                                    :value="item"
                                                    v-model="selectedLevels"
                                                    @click="
                                                        handleCheckboxChange(
                                                            item
                                                        )
                                                    "
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
                            <div class="mb-4">
                                <label
                                    for="location_teaching"
                                    class="block font-bold mb-2"
                                    >สถานที่สอน</label
                                >
                                <input
                                    type="text"
                                    v-model="location_teaching"
                                    name="location_teaching"
                                    id="location_teaching"
                                    class="border rounded w-4/5 py-2 px-3 leading-tight focus:outline-none focus:shadow-outline"
                                />
                            </div>
                            <div
                                class="flex w-full h-10 mb-4 mt-6 bg-blue-500 text-white items-center justify-center rounded"
                            >
                                ประวัติการสอน / ทำงาน
                            </div>
                            <div class="mb-4">
                                <label
                                    for="teaching_experience"
                                    class="block font-bold mb-2"
                                    >ประสบการณ์ในการสอน</label
                                >
                                <textarea
                                    v-model="teaching_experience"
                                    name="teaching_experience"
                                    id="teaching_experience"
                                    class="border rounded w-4/5 h-24 py-2 px-3 leading-tight focus:outline-none focus:shadow-outline"
                                ></textarea>
                            </div>
                            <div class="mb-4">
                                <label
                                    for="teaching_experience_year"
                                    class="block font-bold mb-2"
                                    >สอนมาแล้วกี่ปี ระบุ</label
                                >
                                <input
                                    type="number"
                                    v-model="teaching_experience_year"
                                    name="teaching_experience_year"
                                    id="teaching_experience_year"
                                    class="border rounded w-1/2 py-2 px-3 leading-tight focus:outline-none focus:shadow-outline"
                                    min="0"
                                />
                            </div>
                            <div class="mb-4">
                                <label
                                    for="teaching_experience_detail"
                                    class="block font-bold mb-2"
                                    >ยกตัวอย่างการสอน /
                                    รายละเอียดเนื้อหาการสอน</label
                                >
                                <textarea
                                    v-model="teaching_experience_detail"
                                    name="teaching_experience_detail"
                                    id="teaching_experience_detail"
                                    class="border rounded w-4/5 h-24 py-2 px-3 leading-tight focus:outline-none focus:shadow-outline"
                                ></textarea>
                            </div>
                            <div class="mb-4">
                                <label
                                    for="work_experience"
                                    class="block font-bold mb-2"
                                    >ประสบการณ์การทำงาน
                                </label>
                                <textarea
                                    v-model="work_experience"
                                    name="work_experience"
                                    id="work_experience"
                                    class="border rounded w-4/5 h-24 py-2 px-3 leading-tight focus:outline-none focus:shadow-outline"
                                ></textarea>
                            </div>
                            <div class="mb-4">
                                <label
                                    for="we_more_detail"
                                    class="block font-bold mb-2"
                                    >เพิ่มเติม</label
                                >
                                <textarea
                                    v-model="we_more_detail"
                                    name="we_more_detail"
                                    id="we_more_detail"
                                    class="border rounded w-4/5 h-32 py-2 px-3 leading-tight focus:outline-none focus:shadow-outline"
                                ></textarea>
                            </div>
                            <!-- ปุ่มสมัครสมาชิก -->
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
        </div>
    </LayoutPage>
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
