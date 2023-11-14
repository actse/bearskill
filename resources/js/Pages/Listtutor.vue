<script setup>
import LayoutPage from "@/Layouts/LayoutPage.vue";
import Footer from "@/Components/Footer.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import Textbar from "@/Components/Textbar.vue";
import { Link } from "@inertiajs/vue3";
</script>
<template>
    <LayoutPage>
        <div
            class="flex flex-col items-center justify-center w-full lg:w-3/5 mx-auto space-y-2 mb-10"
        >
            <div class="w-full mt-10 items-center justify-center">
                <div class="flex flex-col md:flex-row sm:mb-0">
                    <div
                        class="flex md:flex-row flex-col w-full items-center p-2 lg:p-5 mb-5 bg-white border-gray-500 rounded-md"
                    >
                        <form
                            class="flex"
                            @submit.prevent="filterSearch"
                            enctype="multipart/form-data"
                        >
                            <!-- <div class="flex ml-2 p-2">
                                <input
                                    type="text"
                                    placeholder="ค้นหารายวิชา"
                                    class="filter-input"
                                    v-model="filter_title"
                                />
                            </div> -->

                            <div
                                class="flex items-center dropdown ml-2 relative"
                                x-ref="myDropdownRef"
                            >
                                <input
                                    class="filter-input"
                                    type="text"
                                    placeholder="Search.."
                                    v-model="filter_title"
                                    @input="showDropdown"
                                />
                                <div
                                    class="filter-input dropdown-content"
                                    :class="{ show: isDropdownVisible }"
                                    @click.stop="handleDropdownClick"
                                >
                                    <div
                                        v-for="category in categories"
                                        :key="category.name"
                                    >
                                        <div
                                            v-show="
                                                category.subject.some(
                                                    (subject) =>
                                                        checkVisibility(subject)
                                                )
                                            "
                                        >
                                            <div
                                                v-for="subject in category.subject"
                                                :key="subject"
                                                v-show="
                                                    checkVisibility(subject)
                                                "
                                                @click="selectSubject(subject)"
                                            >
                                                {{ subject }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="flex items-center">
                                <label for="" class="text-lg">สื่อ</label>
                                <select
                                    id="filterDropdown"
                                    class="ml-2 w-40 border-gray-300 rounded-md p-2 focus:outline-none focus:border-blue-500"
                                    v-model="filter_selectedFilter"
                                >
                                    <option value="" class="0">ทั้งหมด</option>
                                    <option value="1" class="py-2">
                                        มีสื่อการเรียน
                                    </option>
                                    <option value="0" class="py-2">
                                        ไม่มีสื่อการเรียน
                                    </option>
                                </select>
                            </div>

                            <div class="flex ml-1 p-2 items-center">
                                <label for="" class="text-lg mr-2"
                                    >ราคาต่ำสุด</label
                                >
                                <input
                                    class="filter-input w-2/12 ml-1 mr-1"
                                    type="number"
                                    v-model="filter_minprice"
                                    placeholder="0"
                                    id="minInput"
                                    min="0"
                                />
                                <label for="" class="text-lg mr-2"
                                    >ราคาสูงสุด</label
                                >
                                <input
                                    class="filter-input w-2/12 ml-1 mr-1"
                                    type="number"
                                    v-model="filter_maxprice"
                                    placeholder="0"
                                    id="maxInput"
                                    min="0"
                                />
                                <button
                                    type="submit"
                                    class="bg-[#272967] py-2 px-4 rounded-md text-white"
                                >
                                    ค้นหา
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="w-auto lg:w-full mt-10 items-center justify-center">
                <div class="flex flex-col lg:flex-row h-full w-full">
                    <div class="flex mb-4 sm:mb-0 h-full w-full lg:w-2/12">
                        <div
                            class="flex-row lg:flex-col w-full bg-white border-gray-200 rounded-md"
                        >
                            <!-- เนื้อหา -->
                            <div
                                v-for="(category, index) in categories"
                                :herf="category.subject"
                                :key="index"
                                class="w-full -mb-8"
                            >
                                <div class="bg-white shadow-md rounded-md p-6">
                                    <h2 class="text-xl font-bold">
                                        {{ category.name }}
                                    </h2>

                                    <ul>
                                        <li
                                            v-for="(
                                                subject, subIndex
                                            ) in category.subject"
                                            :key="subIndex"
                                            class="text-sm cursor-pointer ml-2 mt-1 text-blue-700"
                                            @click="filterAll(subject)"
                                        >
                                            - {{ subject }}
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="flex flex-col w-full lg:w-10/12 h-full sm:ml-6 font-sans"
                    >
                        <div class="flex flex-col h-full w-full">
                            <div
                                class="grid grid-cols-1 gap-3 lg:grid-cols-3 w-full h-full"
                            >
                                <div
                                    v-for="(list, index) in filterItems()"
                                    class="relative cursor-pointer bg-white lg:w-full h-full overflow-hidden group rounded-md shadow-lg shadow-slate-300 hover:shadow-slate-600"
                                >
                                    <div class="flex">
                                        <!-- <img
                                            :src="`https://source.unsplash.com/100x100/?portrait?${ index }`"
                                            class="object-fill w-full h-52 rounded-t-lg shadow-xl"
                                            alt=""
                                        /> -->
                                        <img
                                            :src="list.file"
                                            class="object-fill w-full h-52 rounded-t-lg shadow-xl"
                                            alt=""
                                        />
                                    </div>
                                    <div class="flex flex-col p-5">
                                        <p
                                            class="text-gray-700 text-2xl text-left font-sans"
                                        >
                                            {{ list.title_subject }}
                                            <label
                                                class="text-gray-700 text-xs text-left font-sans"
                                            >
                                                ({{ list.name }})
                                            </label>
                                        </p>
                                        <p
                                            class="text-gray-600 text-sm text-left font-sans text-md mt-1"
                                        >
                                            {{ list.additional_costs }}
                                        </p>
                                        <p
                                            class="text-gray-600 text-sm text-left font-sans text-md mt-1"
                                        >
                                            {{ list.detail }}
                                        </p>
                                        <p
                                            class="mt-2 text-gray-600 text-sm text-left font-sans text-md"
                                        >
                                            สอนวัน : {{ list.date_learning }}
                                        </p>
                                        <p
                                            class="mt-2 text-gray-600 text-sm text-left font-sans text-md"
                                        >
                                            รูปแบบสอน :
                                            {{ list.learning_style }}
                                        </p>
                                        <p
                                            class="mt-2 text-gray-600 text-sm text-left font-sans text-md"
                                        >
                                            สื่อ : {{ list.learning_media }}
                                        </p>
                                        <p
                                            class="mt-2 text-gray-600 text-sm text-left font-sans text-md"
                                        >
                                            ราคา {{ list.price }} บาท/ชั่วโมง
                                        </p>
                                    </div>
                                    <div>
                                        <Link
                                            :href="`subject_detail/${list.id},${list.name},${list.title_subject}`"
                                            class="p-2 bg-[#272967] text-white font-sans lg:ml-5 mb-5 lg:-mb-2 rounded-md"
                                            >รายละเอียดเพิ่มเติม</Link
                                        >
                                        <button
                                            @click="submit_contact(list.id)"
                                            class="flex-col w-auto items-center lg:my-3 lg:mx-5 text-white p-2 text-md rounded-md bg-[#272967]"
                                        >
                                            ดูข้อมูลติดต่อ
                                        </button>
                                        <div
                                            v-if="isLoading"
                                            class="loading-animation"
                                        >
                                            <div class="loader"></div>
                                        </div>
                                        <div
                                            class="flex items-center ml-5 mb-4 -mt-2"
                                        >
                                            <div class="mr-2">
                                                <span
                                                    class="text-md cursor-pointer text-gray-500"
                                                    >review
                                                    {{ list.rating }}.0</span
                                                >
                                            </div>
                                            <div
                                                v-for="(
                                                    item, index
                                                ) in list.rating"
                                                class="mr-1"
                                            >
                                                <span
                                                    class="text-md cursor-pointer text-yellow-400"
                                                    >★</span
                                                >
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex justify-center mt-5">
                            <button
                                @click="currentPage -= 1"
                                :disabled="currentPage === 1"
                                class="border-2 p-1.5 rounded-md bg-[#151F32] text-white font-sans"
                            >
                                ก่อนหน้า
                            </button>
                            <span class="m-2"
                                >{{ currentPage }} / {{ totalPages }}</span
                            >
                            <button
                                @click="currentPage += 1"
                                :disabled="currentPage === totalPages"
                                class="border-2 p-1.5 rounded-md bg-[#151F32] text-white font-sans"
                            >
                                หน้าถัดไป
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <Textbar class="mt-28"></Textbar>
        <div
            class="flex flex-col items-center justify-center p-5 w-full space-y-2 bg-white"
        >
            <label for="" class="text-sans text-3xl mt-5 text-slate-500"
                >รายวิชาอื่นๆ</label
            >
            <div
                class="flex flex-col w-full lg:w-10/12 h-full sm:ml-6 font-sans"
            >
                <div class="flex flex-col h-full w-full">
                    <div
                        class="grid grid-cols-1 gap-3 lg:grid-cols-3 w-full h-full"
                    >
                        <div
                            v-for="(list, index) in image"
                            class="relative cursor-pointer bg-white lg:w-full h-full overflow-hidden group rounded-md shadow-lg shadow-slate-300 hover:shadow-slate-600"
                        >
                            <!-- <div class="flex p-4">
                                        <img
                                            :src="list.file"
                                            class="object-cover w-full h-96 rounded-lg shadow-xl"
                                            alt=""
                                        />
                                    </div> -->
                            <div class="flex flex-col p-5">
                                <p
                                    class="text-gray-700 text-2xl text-left font-sans"
                                >
                                    {{ list.title_subject }}
                                </p>
                                <p
                                    class="text-gray-600 text-sm text-left font-sans text-md mt-1"
                                >
                                    {{ list.additional_costs }}
                                </p>
                                <p
                                    class="text-gray-600 text-sm text-left font-sans text-md mt-1"
                                >
                                    {{ list.detail }}
                                </p>
                                <p
                                    class="mt-8 text-gray-600 text-sm text-left font-sans text-md"
                                >
                                    สอนวัน : {{ list.date_learning }}
                                </p>
                                <p
                                    class="mt-2 text-gray-600 text-sm text-left font-sans text-md"
                                >
                                    รูปแบบสอน : {{ list.learning_style }}
                                </p>
                                <p
                                    class="mt-2 text-gray-600 text-sm text-left font-sans text-md"
                                >
                                    สื่อ : {{ list.learning_media }}
                                </p>
                                <p
                                    class="mt-2 text-gray-600 text-sm text-left font-sans text-md"
                                >
                                    ราคา {{ list.price }} บาท/hour
                                </p>
                            </div>
                            <div>
                                <PrimaryButton
                                    @click="
                                        subject(
                                            list.id,
                                            list.type_subject,
                                            list.title_subject
                                        )
                                    "
                                    class="lg:ml-5 mb-5 lg:-mb-2"
                                    >รายละเอียดเพิ่มเติม</PrimaryButton
                                >
                                <PrimaryButton
                                    @click="
                                        subject(
                                            list.id,
                                            list.type_subject,
                                            list.title_subject
                                        )
                                    "
                                    class="lg:mt-3 mr-2 lg:ml-5 lg:mb-5"
                                    >ดูข้อมูลติดต่อ</PrimaryButton
                                >
                                <div class="flex items-center ml-5 mb-4 -mt-2">
                                    <div class="mr-2">
                                        <span
                                            class="text-md cursor-pointer text-gray-500"
                                            >review {{ list.rating }}.0</span
                                        >
                                    </div>
                                    <div
                                        v-for="(item, index) in list.rating"
                                        class="mr-1"
                                    >
                                        <span
                                            class="text-md cursor-pointer text-yellow-400"
                                            >★</span
                                        >
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </LayoutPage>
    <Footer />
    <CardModal v-if="this.card_contact">
        <div
            v-for="(form, index) in filterData"
            class="flex flex-col justify-center text-[#fafafa] sm:px-12 dark:text-gray-100"
        >
            <button
                @click="this.card_contact = false"
                class="cursor-pointer flex justify-end -mt-1 -mr-12"
            >
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="3"
                    stroke="currentColor"
                    class="w-7 h-7"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M6 18L18 6M6 6l12 12"
                    />
                </svg>
            </button>
            <img
                :src="form.file"
                alt=""
                class="object-cover w-32 h-32 mx-auto -mt-2 mb-2 rounded-full dark:bg-gray-500 aspect-square"
            />
            <div class="text-center divide-gray-700">
                <div class="my-2 space-y-2">
                    <p class="px-5 text-2xl font-medium dark:text-gray-400">
                        {{ form.phone }}
                    </p>
                    <p class="px-5 text-lg font-base dark:text-gray-400">
                        {{ form.id_line }}
                    </p>
                    <h2 class="text-slate-100 text-lg font-base">
                        {{ form.name }}
                    </h2>
                </div>
                <div
                    class="flex justify-center border-t-2 py-2 space-x-4 align-center"
                >
                    <a
                        rel="noopener noreferrer"
                        href="#"
                        aria-label="GitHub"
                        class="p-2 rounded-md dark:text-gray-100 hover:dark:text-violet-400"
                    >
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke-width="1.5"
                            stroke="currentColor"
                            class="w-7 h-7 fill-current mt-1.5"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M14.25 9.75v-4.5m0 4.5h4.5m-4.5 0l6-6m-3 18c-8.284 0-15-6.716-15-15V4.5A2.25 2.25 0 014.5 2.25h1.372c.516 0 .966.351 1.091.852l1.106 4.423c.11.44-.054.902-.417 1.173l-1.293.97a1.062 1.062 0 00-.38 1.21 12.035 12.035 0 007.143 7.143c.441.162.928-.004 1.21-.38l.97-1.293a1.125 1.125 0 011.173-.417l4.423 1.106c.5.125.852.575.852 1.091V19.5a2.25 2.25 0 01-2.25 2.25h-2.25z"
                            />
                        </svg>
                    </a>
                    <a
                        rel="noopener noreferrer"
                        href="#"
                        aria-label="Dribble"
                        class="p-2 rounded-md dark:text-gray-100 hover:dark:text-violet-400"
                    >
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="w-10 h-10 fill-current"
                            viewBox="0 0 30 30"
                            stroke-width="1.5"
                        >
                            <path
                                d="M 6 4 C 4.895 4 4 4.895 4 6 L 4 24 C 4 25.105 4.895 26 6 26 L 24 26 C 25.105 26 26 25.105 26 24 L 26 6 C 26 4.895 25.105 4 24 4 L 6 4 z M 15.003906 7.6660156 C 19.720906 7.6660156 23.558594 10.780375 23.558594 14.609375 C 23.558594 16.142375 22.964609 17.523813 21.724609 18.882812 C 19.929609 20.948812 15.916906 23.464609 15.003906 23.849609 C 14.091906 24.233609 14.225719 23.604672 14.261719 23.388672 C 14.283719 23.260672 14.384766 22.65625 14.384766 22.65625 C 14.413766 22.43725 14.442469 22.099812 14.355469 21.882812 C 14.258469 21.645813 13.880563 21.520937 13.601562 21.460938 C 9.4895625 20.916937 6.4472656 18.041375 6.4472656 14.609375 C 6.4472656 10.781375 10.286906 7.6660156 15.003906 7.6660156 z M 12.626953 12.910156 C 12.375953 12.910156 12.171875 13.107656 12.171875 13.347656 L 12.171875 16.652344 C 12.171875 16.894344 12.375953 17.089844 12.626953 17.089844 C 12.877953 17.089844 13.082031 16.893344 13.082031 16.652344 L 13.082031 13.347656 C 13.082031 13.107656 12.877953 12.910156 12.626953 12.910156 z M 14.5625 12.910156 C 14.5175 12.910156 14.470781 12.915641 14.425781 12.931641 C 14.248781 12.991641 14.128906 13.157703 14.128906 13.345703 L 14.128906 16.650391 C 14.128906 16.892391 14.3225 17.089844 14.5625 17.089844 C 14.8025 17.089844 14.996094 16.890391 14.996094 16.650391 L 14.996094 14.605469 L 16.679688 16.914062 C 16.760687 17.024063 16.889391 17.089844 17.025391 17.089844 C 17.072391 17.089844 17.118109 17.082406 17.162109 17.066406 C 17.340109 17.006406 17.460938 16.840344 17.460938 16.652344 L 17.457031 16.652344 L 17.457031 13.347656 C 17.457031 13.107656 17.263391 12.910156 17.025391 12.910156 C 16.787391 12.910156 16.591797 13.107656 16.591797 13.347656 L 16.591797 15.392578 L 14.908203 13.085938 C 14.827203 12.975938 14.6985 12.910156 14.5625 12.910156 z M 18.929688 12.910156 C 18.678688 12.910156 18.474609 13.107656 18.474609 13.347656 L 18.474609 14.998047 L 18.474609 15 L 18.474609 16.650391 C 18.474609 16.892391 18.678687 17.089844 18.929688 17.089844 L 20.654297 17.089844 C 20.906297 17.089844 21.111328 16.892344 21.111328 16.652344 C 21.111328 16.412344 20.905297 16.216797 20.654297 16.216797 L 19.384766 16.216797 L 19.384766 15.435547 L 20.654297 15.435547 C 20.906297 15.435547 21.111328 15.24 21.111328 15 C 21.111328 14.758 20.905297 14.5625 20.654297 14.5625 L 19.384766 14.564453 L 19.384766 13.783203 L 20.654297 13.783203 C 20.906297 13.783203 21.111328 13.588656 21.111328 13.347656 C 21.111328 13.107656 20.905297 12.910156 20.654297 12.910156 L 18.929688 12.910156 z M 9.34375 12.912109 C 9.09275 12.912109 8.8886719 13.106656 8.8886719 13.347656 L 8.8886719 16.652344 C 8.8886719 16.894344 9.09275 17.089844 9.34375 17.089844 L 11.068359 17.089844 C 11.320359 17.089844 11.522438 16.893297 11.523438 16.654297 C 11.523437 16.414297 11.319359 16.21875 11.068359 16.21875 L 9.7988281 16.21875 L 9.7988281 13.347656 C 9.7988281 13.107656 9.59475 12.912109 9.34375 12.912109 z"
                            ></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </CardModal>
</template>

<script>
import axios from "axios";
import CardModal from "@/Components/CardModal.vue";

export default {
    components: {
        CardModal,
    },
    data() {
        return {
            form: {
                name: "",
                title_subject: "",
                detail: "",
                type_subject: "",
                file: "",
                price: "",
                additional_costs: "",
                type_learning: "",
                date_learning: "",
                location_learning: "",
                learning_style: "",
                learning_media: "",
            },
            image: [
                {
                    id: 1,
                    name: "ดร. สมชาย แสงสว่าง",
                    title_subject: "ภาษาอังกฤษ",
                    type_subject: "ภาษา",
                    detail: "ปริญญาเอก ภาษาอังกฤษ, มหาวิทยาลัยอัสสัมชัญ",
                    price: "500",
                    file: "/storage/imnayeon.png",
                    additional_costs: "10 ปีที่สอนภาษาอังกฤษในมหาวิทยาลัย",
                    type_learning: "เดี่ยว",
                    date_learning: "จันทร์-พฤหัส, 17:00-19:00",
                    location_learning: "มหาวิทยาลัยอัสสัมชัญ",
                    learning_style: "ส่วนตัว",
                    status: 0,
                    phone: "0901234567",
                    id_line: "line12345",
                    rating: 3,
                    learning_media: "หนังสือ, แผนผัง, แลป",
                },
                {
                    id: 2,
                    name: "ครูวิทยา สุขสวัสดิ์",
                    title_subject: "คณิตศาสตร์",
                    type_subject: "วิชาหลัก",
                    detail: "ปริญญาโท คณิตศาสตร์, มหาวิทยาลัยเชียงใหม่",
                    price: "600",
                    file: "/storage/imnayeon.png",
                    additional_costs: "7 ปีที่สอนคณิตศาสตร์ในโรงเรียนมัธยม",
                    type_learning: "กลุ่ม",
                    date_learning: "อังคาร-ศุกร์, 15:00-18:00",
                    location_learning: "Microsoft Teams Teams",
                    learning_style: "ออนไลน์",
                    status: 0,
                    phone: "0912345678",
                    id_line: "user56789",
                    rating: 5,
                    learning_media: "บทเรียนทางออนไลน์, แบบฝึกหัด",
                },
                {
                    id: 3,
                    name: "นายวิทย์ แสงสว่าง",
                    title_subject: "วิทยาศาสตร์",
                    type_subject: "วิชาหลัก",
                    detail: "ปริญญาตรี วิทยาศาสตร์, มหาวิทยาลัยมหิดล",
                    price: "550",
                    file: "/storage/imnayeon.png",
                    additional_costs: "8 ปีที่สอนวิทยาศาสตร์ในโรงเรียนมัธยม",
                    type_learning: "กลุ่ม",
                    date_learning: "พุธ-เสาร์, 14:00-16:00",
                    location_learning: "บ้านพักอาจารย์",
                    learning_style: "ส่วนตัว",
                    status: 0,
                    phone: "0923456789",
                    id_line: "idLine23456",
                    rating: 4,
                    learning_media: "การทดลอง, สื่อต่างๆ",
                },
                {
                    id: 4,
                    name: "ครูรัชชา สุขสวัสดิ์",
                    title_subject: "ประวัติศาสตร์",
                    type_subject: "วิชาหลัก",
                    detail: "ปริญญาโท ประวัติศาสตร์, มหาวิทยาลัยเทคโนโลยี",
                    price: "450",
                    file: "/storage/imnayeon.png",
                    additional_costs: "4 ปีที่สอนประวัติศาสตร์ในโรงเรียนมัธยม",
                    type_learning: "กลุ่ม",
                    date_learning: "จันทร์-ศุกร์, 18:00-20:00",
                    location_learning: "Microsoft Teams Teams",
                    learning_style: "ออนไลน์",
                    status: 0,
                    phone: "0934567890",
                    id_line: "line78901",
                    rating: 4,
                    learning_media: "หนังสือ, สื่อประกอบ",
                },
                {
                    id: 5,
                    name: "ครูรัชชา สุขสวัสดิ์",
                    title_subject: "ภาษาไทย",
                    type_subject: "ภาษา",
                    detail: "ปริญญาตรี ภาษาไทย, มหาวิทยาลัยธรรมศาสตร์",
                    price: "500",
                    file: "/storage/imnayeon.png",
                    additional_costs: "6 ปีที่สอนภาษาไทยในโรงเรียนมัธยม",
                    type_learning: "กลุ่ม",
                    date_learning: "พุธ-เสาร์, 16:00-18:00",
                    location_learning: "บ้านพักอาจารย์",
                    learning_style: "ส่วนตัว",
                    status: 0,
                    phone: "0945678901",
                    id_line: "randomLine67",
                    rating: 4,
                    learning_media: "หนังสือ, กิจกรรมการเรียน",
                },
                {
                    id: 6,
                    name: "ครูสุขใจ แสงสว่าง",
                    title_subject: "เคมี",
                    type_subject: "วิชาหลัก",
                    detail: "ปริญญาตรี เคมี, มหาวิทยาลัยเชียงใหม่",
                    price: "550",
                    file: "/storage/imnayeon.png",
                    additional_costs: "5 ปีที่สอนเคมีในโรงเรียนมัธยม",
                    type_learning: "กลุ่ม",
                    date_learning: "จันทร์-พุธ, 14:00-16:00",
                    location_learning: "Microsoft Teams",
                    learning_style: "ออนไลน์",
                    status: 0,
                    phone: "0956789012",
                    id_line: "myLine8901",
                    rating: 4,
                    learning_media: "สไลด์",
                },
                {
                    id: 7,
                    name: "ครูสุริยา แสงสว่าง",
                    title_subject: "สังคมศึกษา",
                    type_subject: "วิชาหลัก",
                    detail: "ปริญญาโท สังคมศึกษา, มหาวิทยาลัยมหิดล",
                    price: "500",
                    file: "/storage/imnayeon.png",
                    additional_costs: "8 ปีที่สอนสังคมศึกษาในโรงเรียนมัธยม",
                    type_learning: "เดี่ยว",
                    date_learning: "อังคาร-ศุกร์, 16:00-18:00",
                    location_learning: "Microsoft Teams",
                    learning_style: "ออนไลน์",
                    status: 0,
                    phone: "0967890123",
                    id_line: "line45678",
                    rating: 4,
                    learning_media: "หนังสือ, สื่อต่างๆ",
                },
                {
                    id: 8,
                    name: " ครูสมศรี แสงสว่าง",
                    title_subject: "สังคมศึกษา",
                    type_subject: "วิชาหลัก",
                    detail: "ปริญญาตรี ศิลปะ, มหาวิทยาลัยกรุงเทพ",
                    price: "600",
                    file: "/storage/imnayeon.png",
                    additional_costs: "6 ปีที่สอนศิลปะในโรงเรียนมัธยม",
                    type_learning: "กลุ่ม",
                    date_learning: "พุธ-เสาร์, 15:00-17:00",
                    location_learning: "บ้านพักอาจารย์",
                    learning_style: "ส่วนตัว",
                    status: 0,
                    phone: "0978901234",
                    id_line: "line90123",
                    rating: 4,
                    learning_media: "ภาพ, วีดีโอ, งานปฏิบัติ",
                },
                {
                    id: 9,
                    name: "ครูสุรัตนา แสงสว่าง",
                    title_subject: "การเขียน",
                    type_subject: "ศิลปะ",
                    detail: "ปริญญาโท การเขียนสรรค์, มหาวิทยาลัยเมือง",
                    price: "550",
                    file: "/storage/imnayeon.png",
                    additional_costs: "6 ปีที่สอนการเขียนในโรงเรียนประถม",
                    type_learning: "ส่วนตัว",
                    date_learning: "จันทร์-พฤหัส, 18:00-20:00",
                    location_learning: "บ้านพักอาจารย์",
                    learning_style: "ส่วนตัว",
                    status: 0,
                    phone: "0989012345",
                    id_line: "line01234",
                    rating: 4,
                    learning_media: "การเขียนเรื่อง, การแก้ไข",
                },
                {
                    id: 10,
                    name: "ครูสมพร แสงสว่าง",
                    title_subject: "สุขศึกษา",
                    type_subject: "วิชาหลัก",
                    detail: "ปริญญาตรี สุขศึกษา, มหาวิทยาลัยศิลปากร",
                    price: "500",
                    file: "/storage/imnayeon.png",
                    additional_costs: "5 ปีที่สอนสุขศึกษาในโรงเรียนอนุบาล",
                    type_learning: "กลุ่ม",
                    date_learning: "พุธ-เสาร์, 14:00-16:00",
                    location_learning: "บ้านพักอาจารย์",
                    learning_style: "ส่วนตัว",
                    status: 0,
                    phone: "0990123456",
                    id_line: "line456789",
                    rating: 4,
                    learning_media: "สื่อประกอบ",
                },
                {
                    id: 11,
                    name: "ครูวิทยา แสงสว่าง",
                    title_subject: "ฟิสิกส์",
                    type_subject: "วิชาหลัก",
                    detail: "ปริญญาตรี ฟิสิกส์, มหาวิทยาลัยเชียงใหม่",
                    price: "600",
                    file: "/storage/imnayeon.png",
                    additional_costs: "8 ปีที่สอนฟิสิกส์ในโรงเรียนมัธยม",
                    type_learning: "กลุ่ม",
                    date_learning: "จันทร์-พุธ, 15:00-17:00",
                    location_learning: "Microsoft Teams",
                    learning_style: "ออนไลน์",
                    status: 0,
                    phone: "0954321098",
                    id_line: "line7890ab",
                    rating: 4,
                    learning_media: "แผนผัง, การทดลอง",
                },
                {
                    id: 12,
                    name: "ครูสุชาติ แสงสว่าง",
                    title_subject: "มิติเรขาคณิต",
                    type_subject: "วิชาหลัก",
                    detail: "ปริญญาโท คณิตศาสตร์ประยุกต์, มหาวิทยาลัยมหิดล",
                    price: "550",
                    file: "/storage/imnayeon.png",
                    additional_costs: "9 ปีที่สอนมิติเรขาคณิตในโรงเรียนมัธยม",
                    type_learning: "กลุ่ม",
                    date_learning: "อังคาร-ศุกร์, 16:00-19:00",
                    location_learning: "Microsoft Teams",
                    learning_style: "ออนไลน์",
                    status: 0,
                    phone: "0943210987",
                    id_line: "line2345cd",
                    rating: 4,
                    learning_media: "แบทเรียนทางออนไลน์, แบบฝึกหัด",
                },
                {
                    id: 13,
                    name: "ภูมิศาสตร์",
                    title_subject: "มิติเรขาคณิต",
                    type_subject: "วิชาหลัก",
                    detail: "ปริญญาโท คณิตศาสตร์ประยุกต์, มหาวิทยาลัยมหิดล",
                    price: "500",
                    file: "/storage/imnayeon.png",
                    additional_costs: "3 ปีที่สอนมิติเรขาคณิตในโรงเรียนมัธยม",
                    type_learning: "กลุ่ม",
                    date_learning: "อังคาร-ศุกร์, 16:00-19:00",
                    location_learning: "Microsoft Teams",
                    learning_style: "ออนไลน์",
                    status: 0,
                    phone: "0932109876",
                    id_line: "line6789ef",
                    rating: 4,
                    learning_media: "",
                },
                {
                    id: 14,
                    name: "ครูศิริรัตน์ แสงสว่าง",
                    title_subject: "ศิลปะการตกแต่ง",
                    type_subject: "วิชาหลัก",
                    detail: "ปริญญาโท ศิลปะการตกแต่ง, มหาวิทยาลัยกรุงเทพ",
                    price: "600",
                    file: "/storage/imnayeon.png",
                    additional_costs: "7 ปีที่สอนศิลปะการตกแต่งในโรงเรียนมัธยม",
                    type_learning: "กลุ่ม",
                    date_learning: "จันทร์-พุธ, 18:00-20:00",
                    location_learning: "บ้านพักอาจารย์",
                    learning_style: "ส่วนตัว",
                    status: 0,
                    phone: "0921098765",
                    id_line: "line0123gh",
                    rating: 4,
                    learning_media: "",
                },
                {
                    id: 15,
                    name: "ครูธนวัฒน์ แสงสว่าง",
                    title_subject: " วิทยาศาสตร์การคอมพิวเตอร์",
                    type_subject: "เทคโนโลยี",
                    detail: "ปริญญาตรี วิทยาการคอมพิวเตอร์, มหาวิทยาลัยเทคโนโลยี",
                    price: "550",
                    file: "/storage/imnayeon.png",
                    additional_costs:
                        "7 ปีที่สอนวิทยาศาสตร์การคอมพิวเตอร์ในมหาวิทยาลัยเทคโนโลยี",
                    type_learning: "กลุ่ม",
                    date_learning: "พุธ-เสาร์, 15:00-17:00",
                    location_learning: "Microsoft Teams",
                    learning_style: "ออนไลน์",
                    status: 0,
                    phone: "0910987654",
                    id_line: "line456ij",
                    rating: 4,
                    learning_media: "โค้ด, แผนผัง",
                },
                {
                    id: 16,
                    name: "ครูมานะ แสงสว่าง",
                    title_subject: "ภาษาจีน",
                    type_subject: "ภาษา",
                    detail: "ปริญญาตรี ภาษาจีน, มหาวิทยาลัยเหนือ",
                    price: "550",
                    file: "/storage/imnayeon.png",
                    additional_costs:
                        "4 ปีที่สอนวิทยาศาสตร์กาภาษาจีนในมหาวิทยาลัยเหนือ",
                    type_learning: "กลุ่ม",
                    date_learning: "จันทร์-พุธ, 17:00-19:00",
                    location_learning: "Microsoft Teams",
                    learning_style: "ออนไลน์",
                    status: 0,
                    phone: "0909876543",
                    id_line: "line789kl",
                    rating: 4,
                    learning_media: "",
                },
                {
                    id: 17,
                    name: "ครูวิทยา แสงสว่าง",
                    title_subject: "วิทยาศาสตร์ทางสังคม",
                    type_subject: "วิชาหลัก",
                    detail: "โท วิทยาศาสตร์ทางสังคม, มหาวิทยาลัยศรีนครินทรวิโรฒ",
                    price: "500",
                    file: "/storage/imnayeon.png",
                    additional_costs:
                        "4 ปีที่สอนวิทยาศาสตร์กาภาษาจีนในมหาวิทยาลัยศรีนครินทรวิโรฒ",
                    type_learning: "กลุ่ม",
                    date_learning: "อังคาร-ศุกร์, 16:00-18:00",
                    location_learning: "Microsoft Teams",
                    learning_style: "ออนไลน์",
                    status: 0,
                    phone: "0987654321",
                    id_line: "line0123mn",
                    rating: 4,
                    learning_media: "",
                },
                {
                    id: 18,
                    name: "ครูศรีวรรณ แสงสว่าง",
                    title_subject: "พลศึกษา",
                    type_subject: "c",
                    detail: "ปริญญาตรี พลศึกษา, มหาวิทยาลัยนครราชสีมา",
                    price: "550",
                    file: "/storage/imnayeon.png",
                    additional_costs:
                        "4 ปีที่สอนวิทยาศาสตร์กาพลศึกษาในมหาวิทยาลัยนครราชสีมา",
                    type_learning: "กลุ่ม",
                    date_learning: "จันทร์-พุธ, 15:00-17:00",
                    location_learning: "Microsoft Teams",
                    learning_style: "ออนไลน์",
                    status: 0,
                    phone: "0976543210",
                    id_line: "line456op",
                    rating: 4,
                    learning_media: "",
                },
                {
                    id: 19,
                    name: "ครูวรรณี แสงสว่าง",
                    title_subject: "วรรณคดี",
                    type_subject: "วิชาหลัก",
                    detail: "ปริญญาตรี วรรณคดี, มหาวิทยาลัยมหิดล",
                    price: "500",
                    file: "/storage/imnayeon.png",
                    additional_costs: "7 ปีที่สอนวรรณคดีในโรงเรียนมัธยม",
                    type_learning: "กลุ่ม",
                    date_learning: "พุธ-ศุกร์, 17:00-19:00",
                    location_learning: "Microsoft Teams",
                    learning_style: "ออนไลน์",
                    status: 0,
                    phone: "0965432109",
                    id_line: "line789qr",
                    rating: 4,
                    learning_media: "",
                },
                {
                    id: 20,
                    name: "ครูวุทย์ แสงสว่าง",
                    title_subject: "คอมพิวเตอร์ศึกษา",
                    type_subject: "เทคโนโลยี",
                    detail: "ปริญญาตรี คอมพิวเตอร์ศึกษา, มหาวิทยาลัยราชภัฏ",
                    price: "550",
                    file: "/storage/imnayeon.png",
                    additional_costs:
                        "3 ปีที่สอนคอมพิวเตอร์ศึกษาในมหาวิทยาลัยราชภัฏ",
                    type_learning: "กลุ่ม",
                    date_learning: "อังคาร-ศุกร์, 14:00-16:00",
                    location_learning: "Microsoft Teams",
                    learning_style: "ออนไลน์",
                    status: 0,
                    phone: "0954321098",
                    id_line: "line0123st",
                    rating: 4,
                    learning_media: "โค้ด, แบบฝึกหัด",
                },
                {
                    id: 21,
                    name: "ครูวุทย์ แสงสว่าง",
                    title_subject: "เศรษฐศาสตร์",
                    type_subject: "วิชาหลัก",
                    detail: "ปริญญาโท เศรษฐศาสตร์, มหาวิทยาลัยเชียงใหม่",
                    price: "600",
                    file: "/storage/imnayeon.png",
                    additional_costs: "10 ปีที่สอนเศรษฐศาสตร์ในโรงเรียนมัธยม",
                    type_learning: "กลุ่ม",
                    date_learning: "จันทร์-พุธ, 16:00-18:00",
                    location_learning: "Microsoft Teams",
                    learning_style: "ออนไลน์",
                    status: 0,
                    phone: "0943210987",
                    id_line: "line456uv",
                    rating: 4,
                    learning_media: "หนังสือ, กราฟ",
                },
                {
                    id: 22,
                    name: "ครูศิริรัตน์ แสงสว่าง",
                    title_subject: "ศิลปะนิพนธ์",
                    type_subject: "วิชาหลัก",
                    detail: "ปริญญาโท เศรษฐศาสตร์, มหาวิทยาลัยเชียงใหม่",
                    price: "550",
                    file: "/storage/imnayeon.png",
                    additional_costs: "8 ปีที่สอนศิลปะนิพนธ์ในโรงเรียนมัธยม",
                    type_learning: "กลุ่ม",
                    date_learning: "พุธ-ศุกร์, 17:00-19:00",
                    location_learning: "บ้านพักอาจารย์",
                    learning_style: "ส่วนตัว",
                    status: 0,
                    phone: "0932109876",
                    id_line: "line789wx",
                    rating: 4,
                    learning_media: "การเขียน, วาดรูป",
                },
                {
                    id: 23,
                    name: "ครูสุวรรณ แสงสว่าง",
                    title_subject: "การออกแบบกราฟิก",
                    type_subject: "เทคโนโลยี",
                    detail: "ปริญญาตรี ภาษาญี่ปุ่น, มหาวิทยาลัยศิลปากร",
                    price: "600",
                    file: "/storage/imnayeon.png",
                    additional_costs:
                        "8 ปีที่สอนการออกแบบกราฟิกในมหาวิทยาลัยเชียงใหม่",
                    type_learning: "กลุ่ม",
                    date_learning: "จันทร์-พุธ, 15:00-17:00",
                    location_learning: "Microsoft Teams",
                    learning_style: "ออนไลน์",
                    status: 0,
                    phone: "0921098765",
                    id_line: "line0123yz",
                    rating: 4,
                    learning_media: "โปรแกรมออกแบบ, ภาพวาด",
                },
                {
                    id: 24,
                    name: "ครูธิติ แสงสว่าง",
                    title_subject: "ภาษาญี่ปุ่น",
                    type_subject: "ภาษา",
                    detail: "ปริญญาตรี ภาษาญี่ปุ่น, มหาวิทยาลัยศิลปากร",
                    price: "550",
                    file: "/storage/imnayeon.png",
                    additional_costs:
                        "8 ปีที่สอนภาษาญี่ปุ่นในมหาวิทยาลัยเชียงใหม่",
                    type_learning: "กลุ่ม",
                    date_learning: "พุธ-ศุกร์, 16:00-18:00",
                    location_learning: "Microsoft Teams",
                    learning_style: "ออนไลน์",
                    status: 0,
                    phone: "0910987654",
                    id_line: "line456abc",
                    rating: 4,
                    learning_media: "การฟัง-พูด-อ่าน-เขียน",
                },
                {
                    id: 25,
                    name: "ครูสุวรรณ แสงสว่าง",
                    title_subject: "กีต้าไฟฟ้า",
                    type_subject: "ดนตรี",
                    detail: "ปริญญาตรี ดุริยางคศาสตร์, มหาวิทยาลัยราชภัฏ",
                    price: "300",
                    file: "/storage/imnayeon.png",
                    additional_costs:
                        "8 ปีที่สอนกีต้าไฟฟ้าในมหาวิทยาลัยเชียงใหม่",
                    type_learning: "กลุ่ม",
                    date_learning: "จันทร์-พุธ, 15:00-17:00",
                    location_learning: "บ้านพักอาจารย์",
                    learning_style: "ส่วนตัว",
                    status: 0,
                    phone: "0909876543",
                    id_line: "line789def",
                    rating: 4,
                    learning_media: "เครื่องดนตรี, การร้องเพลง",
                },
            ],
            categories: [
                {
                    name: "วิชาหลัก",
                    subject: [
                        "คณิตศาสตร์",
                        "วิทยาศาสตร์",
                        "เคมี",
                        "ชีววิทยา",
                        "ฟิสิกส์",
                    ],
                },
                {
                    name: "ภาษา",
                    subject: [
                        "ภาษาไทย",
                        "ภาษาเกาหลี",
                        "ภาษาจีน",
                        "ภาษาสเปน",
                        "ภาษาอังกฤษ",
                        "ภาษาเยอรมัน",
                        "ภาษาญี่ปุ่น",
                    ],
                },
                {
                    name: "ดนตรี",
                    subject: ["กลอง", "เปียโน", "กีต้า", "ไวโอลิน", "ทรัมเป็ด"],
                },
                {
                    name: "ศิลปะ",
                    subject: ["เครื่องปั้น", "งานภาพ", "งานแกะสลัก"],
                },
                {
                    name: "เทคโนโลยี",
                    subject: [
                        "Design",
                        "AI",
                        "ROBOT",
                        "TECHONOLOGY GGE",
                        "เทคโนโลยี การเกษตร",
                    ],
                },
                {
                    name: "อื่นๆ",
                    subject: [
                        "TOEIC",
                        "MBA-TOEIC",
                        "PAT",
                        "SAT MATH",
                        "BMAT",
                        "อื่นๆ",
                    ],
                },
            ],
            search_filter: "check",
            search_title_subject: "",
            selectedFilter: "",
            scoreInput: 0,
            itemsPerPage: 6,
            currentPage: 1,
            minprice: "",
            maxprice: "",
            filteredData: "",
            filter_title: "",
            filter_selectedFilter: "",
            filter_minprice: "",
            filter_maxprice: "",
            card_contact: false,
            isLoading: false,
            selectedCategory: null,
            selectedSubject: null,
            isDropdownVisible: false,
        };
    },
    computed: {
        totalPages() {
            return Math.ceil(this.filteredData.length / this.itemsPerPage);
        },
    },

    watch: {
        currentPage(newPage) {
            if (newPage < 1) {
                this.currentPage = 1;
            } else if (newPage > this.totalPages) {
                this.currentPage = this.totalPages;
            }
        },
    },
    methods: {
        checkVisibility(subject) {
            const filter = this.filter_title.toUpperCase();
            return subject.toUpperCase().indexOf(filter) > -1;
        },
        showDropdown() {
            this.isDropdownVisible = this.filter_title.length > 0;
        },

        selectSubject(selectedSubject) {
            this.filter_title = selectedSubject;
            this.isDropdownVisible = false;
        },
        handleDropdownClick() {
            this.isDropdownVisible = false; // ปิด Dropdown เมื่อคลิกที่ Dropdown
        },
        filterItems(search_title_subject, selectedFilter, minprice, maxprice) {
            if (
                search_title_subject != null ||
                selectedFilter != null ||
                (minprice != null && maxprice != null)
            ) {
                this.search_title_subject = search_title_subject;
                this.selectedFilter = selectedFilter;
                this.minprice = minprice;
                this.maxprice = maxprice;

                const start = (this.currentPage - 1) * this.itemsPerPage;
                const end = start + this.itemsPerPage;

                this.filteredData = this.image.filter((item) => {
                    const titleMatches =
                        !this.search_title_subject ||
                        item.title_subject.includes(this.search_title_subject);
                    const filterMatches =
                        !this.selectedFilter ||
                        (this.selectedFilter > "0" &&
                            item.learning_media !== "") ||
                        (this.selectedFilter == "0" &&
                            item.learning_media === "");
                    const scoreMatches =
                        !this.minprice ||
                        !this.maxprice ||
                        (item.price >= this.minprice &&
                            this.maxprice >= item.price);

                    return titleMatches && scoreMatches && filterMatches;
                });
                localStorage.setItem(
                    "search_title_subject",
                    this.search_title_subject
                );
                localStorage.setItem("selectedFilter", this.selectedFilter);
                localStorage.setItem("minprice", this.minprice);
                localStorage.setItem("maxprice", this.maxprice);

                return this.filteredData.slice(start, end);
            }

            const start = (this.currentPage - 1) * this.itemsPerPage;
            const end = start + this.itemsPerPage;

            this.filteredData = this.image.filter((item) => {
                const titleMatches =
                    !this.search_title_subject ||
                    item.title_subject.includes(this.search_title_subject);
                const filterMatches =
                    !this.selectedFilter ||
                    (this.selectedFilter > "0" && item.learning_media !== "") ||
                    (this.selectedFilter == "0" && item.learning_media === "");
                const scoreMatches =
                    !this.minprice ||
                    !this.maxprice ||
                    (item.price >= this.minprice &&
                        this.maxprice >= item.price);

                return titleMatches && scoreMatches && filterMatches;
            });
            localStorage.setItem(
                "search_title_subject",
                this.search_title_subject
            );
            localStorage.setItem("selectedFilter", this.selectedFilter);
            localStorage.setItem("minprice", this.minprice);
            localStorage.setItem("maxprice", this.maxprice);

            return this.filteredData.slice(start, end);
        },
        filterSearch() {
            this.filterItems(
                this.filter_title,
                this.filter_selectedFilter,
                this.filter_minprice,
                this.filter_maxprice
            );
        },
        filterAll(subject) {
            console.log(subject);
            this.search_title_subject = subject;
        },
        changePage(direction) {
            if (direction === 1 && this.currentPage > 1) {
                this.currentPage--;
            } else if (direction === 2 && this.currentPage < this.totalPages) {
                this.currentPage++;
            }
        },
        subject(id, type_subject, title_subject) {
            console.log(id);
            console.log(type_subject);
            console.log(title_subject);

            const formData = new FormData();

            const foundImage = this.image.find((image) => {
                return (
                    image.id == id &&
                    image.type_subject == type_subject &&
                    image.title_subject == title_subject
                );
            });

            if (foundImage) {
                this.form.name = foundImage.name;
                this.form.title_subject = foundImage.title_subject;
                this.form.type_subject = foundImage.type_subject;
                this.form.image = foundImage.file;
                this.form.detail = foundImage.detail;
                this.form.price = foundImage.price;
                this.form.additional_costs = foundImage.additional_costs;
                this.form.type_learning = foundImage.type_learning;
                this.form.date_learning = foundImage.date_learning;
                this.form.location_learning = foundImage.location_learning;
                this.form.learning_style = foundImage.learning_style;
                this.form.learning_media = foundImage.learning_media;
            } else {
                console.log("Fail Not data");
            }

            formData.append("name", this.form.name);
            formData.append("title_subject", this.form.title_subject);
            formData.append("type_subject", this.form.type_subject);
            formData.append("image", this.form.image);
            formData.append("detail", this.form.detail);
            formData.append("price", this.form.price);
            formData.append("additional_costs", this.form.additional_costs);
            formData.append("type_learning", this.form.type_learning);
            formData.append("date_learning", this.form.date_learning);
            formData.append("location_learning", this.form.location_learning);
            formData.append("learning_style", this.form.learning_style);
            formData.append("learning_media", this.form.learning_media);

            console.log(this.form.name);
            console.log(this.form.title_subject);
            console.log(this.form.type_subject);
            console.log(this.form.image);
            console.log(this.form.detail);
            console.log(this.form.price);
            console.log(this.form.additional_costs);
            console.log(this.form.type_learning);
            console.log(this.form.date_learning);
            console.log(this.form.location_learning);
            console.log(this.form.learning_style);
            console.log(this.form.learning_media);

            axios
                .get("/test_send", formData)
                .then((response) => {
                    console.log(response.data);
                })
                .catch((error) => {
                    console.log(error);
                });
        },
        submit_contact(id) {
            this.isLoading = true;

            const formData = new FormData();
            this.form.id = id;
            console.log(this.form.id);
            formData.append("id", id);

            setTimeout(() => {
                axios
                    .post("/check_login", formData)
                    .then((response) => {
                        if (response.data) {
                            this.card_contact = true;
                            this.filterData = this.image.filter((item) => {
                                const titleMatches =
                                    item.id == response.data.id;
                                const statusMatches = (item.status =
                                    response.data.status);
                                return titleMatches && statusMatches;
                            });
                            console.log(this.filterData);
                        }
                    })
                    .catch((error) => {
                        console.error("Error fetching data:", error);
                    })
                    .finally(() => {
                        this.isLoading = false;
                    });
            }, 1300);
        },
    },
    mounted() {
        document.addEventListener("DOMContentLoaded", function () {
            const stars = document.querySelectorAll(".text-md");

            stars.forEach((star) => {
                star.addEventListener("click", () => {
                    const rating = star.getAttribute("data-rating");
                    alert("คุณให้คะแนน: " + rating + " ดาว");
                });
            });
        });
    },
};
</script>

<style scoped>
.img-container img {
    object-fit: cover;
    width: 100%;
    height: 100%;
}
.filter-btn {
    padding: 8px 16px;
    background-color: #151f32;
    color: white;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

.filter-btn:hover {
    background-color: #151f32;
}
.filter-input {
    padding: 0.5rem;
    border: 1px solid #ccc;
    border-radius: 4px;
    margin-right: 0.5rem;
}

.filter-btn {
    position: relative;
}

/* ปรับสีและขนาดไอคอนตามต้องการ */
.filter-btn i {
    position: absolute;
    right: -20px; /* ปรับตำแหน่งตามที่คุณต้องการ */
    font-size: 1.2rem;
    color: #555; /* สีของไอคอน */
}
.loading-animation {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(255, 255, 255, 0.3);
    display: flex;
    align-items: center;
    justify-content: center;
    z-index: 999;
}

.loader {
    border: 4px solid #f3f3f3;
    border-top: 4px solid #2394da;
    border-radius: 50%;
    width: 50px;
    height: 50px;
    animation: spin 1s linear infinite;
}

@keyframes spin {
    0% {
        transform: rotate(0deg);
    }
    100% {
        transform: rotate(360deg);
    }
}

#myInput {
    box-sizing: border-box;
    background-image: url("searchicon.png");
    background-position: 14px 12px;
    background-repeat: no-repeat;
    font-size: 16px;
    padding: 14px 20px 12px 45px;
    border: none;
    border-bottom: 1px solid #ddd;
}

#myInput:focus {
    outline: 3px solid #ddd;
}

.dropdown {
    position: relative;
    display: inline-block;
    margin-left: 8px;
    padding: 8px;
    align-items: center;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #fffcfc;
    min-width: 225px;
    overflow: auto;
    border: 1px solid #ddd;
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown a:hover {
    background-color: #ddd;
}

.show {
    display: block;
}
</style>
