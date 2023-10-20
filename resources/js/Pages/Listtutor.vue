<script setup>
import LayoutPage from "@/Layouts/LayoutPage.vue";
import Footer from "@/Components/Footer.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import Textbar from "@/Components/Textbar.vue";
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
                        <!-- เนื้อหา -->
                        <div class="flex ml-5 mr-5 p-2">
                            <input
                                type="text"
                                placeholder="ค้นหารายวิชา"
                                class="filter-input"
                            />
                            <button class="filter-btn">
                                ค้นหา <i class="fas fa-search"></i>
                            </button>
                        </div>

                        <div class="flex ml-5 mr-5 items-center">
                            <label
                                for="filterDropdown"
                                class="mr-2 text-gray-700"
                                >Media </label
                            >
                            <select
                                id="filterDropdown"
                                class="w-40 border-gray-300 rounded-md p-2 focus:outline-none focus:border-blue-500"
                            >
                                <option value="withMedia" class="py-2">
                                    มีสื่อการสอน
                                </option>
                                <option value="withoutMedia" class="py-2">
                                    ไม่มีสื่อการสอน
                                </option>
                            </select>
                        </div>

                        <div class="flex ml-5 mr-5 p-2">
                            <button class="filter-btn">Filter 3</button>
                        </div>
                        <div class="flex ml-5 mr-5 p-2">
                            <button class="filter-btn">Filter 4</button>
                        </div>
                        <div class="flex ml-5 mr-5 p-2">
                            <button class="filter-btn">Filter 5</button>
                        </div>
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
                                            @click="test(subject)"
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
                                    v-for="(list, index) in displayedItems"
                                    class="relative cursor-pointer bg-white lg:w-full h-full overflow-hidden group rounded-md shadow-lg shadow-slate-300 hover:shadow-slate-600"
                                >
                                    <div class="flex">
                                        <img
                                            :src="list.file"
                                            class="w-full h-52 rounded-t-lg shadow-xl"
                                            alt=""
                                        />
                                    </div>
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
                        <div class="flex justify-center mt-10">
                            <button
                                class="border-2 p-3 text-white bg-[#151F32] rounded-md"
                                @click="changePage(1)"
                                :disabled="currentPage === 1"
                            >
                                หน้าก่อนหน้า
                            </button>
                            <span class="mx-2 my-2"
                                >หน้า {{ currentPage }}</span
                            >
                            <button
                                class="border-2 p-3 text-white bg-[#151F32] rounded-md"
                                @click="changePage(2)"
                                :disabled="currentPage === totalPages"
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
</template>

<script>
import axios from "axios";
export default {
    data() {
        return {
            form: {
                name: "imnayoen",
                title_subject: "ภาษาเกาหลี",
                detail: "Korean language final",
                type_subject: "ภาษา",
                image: "/storage/imnayoen.jpeg",
                price: "10000",
                additional_costs:
                    "Korean language simple 1 3000won/house Korean language simple 2 3500won/house Korean language simple 3 4000won/house",
                type_learning: "เดี่ยว",
                date_learning: "Sunday , Monday , Friday",
                location_learning: "Maejo Univercity",
                learning_style: "On site",
                learning_media: "มีสื่อการสอนไห้",
            },
            image: [
                {
                    id: 1,
                    name: "imnayoen",
                    title_subject: "ภาษาเกาหลี",
                    type_subject: "ภาษา",
                    detail: "Korean language final",
                    price: "400",
                    file: "/storage/imnayoen.jpeg",
                    additional_costs:
                        "Korean language simple 1 300บาท/house Korean language simple 2 350บาท/house Korean language simple 3 400บาท/house",
                    type_learning: "เดี่ยว",
                    date_learning: "Sunday , Monday , Friday",
                    location_learning: "Maejo Univercity",
                    learning_style: "On site",
                    rating: 3,
                    learning_media: "มีสื่อการสอนไห้",
                },
                {
                    id: 2,
                    name: "jisuitzy",
                    title_subject: "ภาษาอังกฤษ",
                    type_subject: "ภาษา",
                    detail: "English language final",
                    price: "550",
                    file: "/storage/jisuitzy.jpeg",
                    additional_costs:
                        "Englist language simple 1 300บาท/house English language simple 2 350บาท/house Englist language simple 3 400บาท/house",
                    type_learning: "เดี่ยว",
                    date_learning: "Monday , Friday",
                    location_learning: "Noth Univercity",
                    learning_style: "On site",
                    rating: 3,
                    learning_media: "มีสื่อการสอนไห้",
                },
                {
                    id: 3,
                    name: "liaitzy",
                    title_subject: "ภาษาฝรั่งเศส",
                    type_subject: "ภาษา",
                    detail: "French language  final",
                    price: "370",
                    file: "/storage/liaitzy.jpeg",
                    additional_costs:
                        "French language simple 1 300บาท/house French language simple 2 350บาท/house French language simple 3 400บาท/house",
                    type_learning: "เดี่ยว",
                    date_learning: "Sunday , Friday",
                    location_learning: "ChaingMai Univercity",
                    learning_style: "Out site",
                    rating: 5,
                    learning_media: "มีสื่อการสอนไห้",
                },
                {
                    id: 4,
                    name: "lia lovelove",
                    title_subject: "ภาษาอิตาลี",
                    type_subject: "ภาษา",
                    detail: "Italian language final",
                    price: "420",
                    file: "/storage/lovelove.jpeg",
                    additional_costs:
                        "Italian language simple 1 300บาท/house Italian language simple 2 350บาท/house Italian language simple 3 400บาท/house",
                    type_learning: "กลุ่ม",
                    date_learning: "Sunday , Monday , Friday",
                    location_learning: "ChaingMai Univercity",
                    learning_style: "On site",
                    rating: 4,
                    learning_media: "มีสื่อการสอนไห้",
                },
                {
                    id: 5,
                    name: "lia lovely",
                    title_subject: "ภาษาญี่ปุ่น",
                    type_subject: "ภาษา",
                    detail: "Japanese language final",
                    price: "350",
                    file: "/storage/lovely.jpeg",
                    additional_costs:
                        "Japanese language simple 1 300บาท/house Japanese language simple 2 350บาท/house Japanese language simple 3 400บาท/house",
                    type_learning: "กลุ่ม",
                    date_learning: "Friday",
                    location_learning: "Maejo Univercity",
                    learning_style: "On site",
                    rating: 1,
                    learning_media: "มีสื่อการสอนไห้",
                },
                {
                    id: 6,
                    name: "tsuyu",
                    title_subject: "ภาษาสเปน",
                    type_subject: "ภาษา",
                    detail: "Spanish language final",
                    price: "300",
                    file: "/storage/tsuyu.jpeg",
                    additional_costs:
                        "Spanish language simple 1 300บาท/house Spanish language simple 2 350บาท/house Spanish language simple 3 400บาท/house",
                    type_learning: "กลุ่ม",
                    date_learning: "Sunday , Monday",
                    location_learning: "Noth Univercity",
                    learning_style: "Out site",
                    rating: 2,
                    learning_media: "ไม่มีสื่อการสอนไห้",
                },
                {
                    id: 6,
                    name: "tsuyu",
                    title_subject: "ภาษาสเปน",
                    type_subject: "ภาษา",
                    detail: "Spanish language final",
                    price: "300",
                    file: "/storage/tsuyu.jpeg",
                    additional_costs:
                        "Spanish language simple 1 300บาท/house Spanish language simple 2 350บาท/house Spanish language simple 3 400บาท/house",
                    type_learning: "กลุ่ม",
                    date_learning: "Sunday , Monday",
                    location_learning: "Noth Univercity",
                    learning_style: "Out site",
                    rating: 2,
                    learning_media: "ไม่มีสื่อการสอนไห้",
                },
                {
                    id: 6,
                    name: "tsuyu",
                    title_subject: "ภาษาสเปน",
                    type_subject: "ภาษา",
                    detail: "Spanish language final",
                    price: "300",
                    file: "/storage/tsuyu.jpeg",
                    additional_costs:
                        "Spanish language simple 1 300บาท/house Spanish language simple 2 350บาท/house Spanish language simple 3 400บาท/house",
                    type_learning: "กลุ่ม",
                    date_learning: "Sunday , Monday",
                    location_learning: "Noth Univercity",
                    learning_style: "Out site",
                    rating: 2,
                    learning_media: "ไม่มีสื่อการสอนไห้",
                },
                {
                    id: 6,
                    name: "tsuyu",
                    title_subject: "ภาษาสเปน",
                    type_subject: "ภาษา",
                    detail: "Spanish language final",
                    price: "300",
                    file: "/storage/tsuyu.jpeg",
                    additional_costs:
                        "Spanish language simple 1 300บาท/house Spanish language simple 2 350บาท/house Spanish language simple 3 400บาท/house",
                    type_learning: "กลุ่ม",
                    date_learning: "Sunday , Monday",
                    location_learning: "Noth Univercity",
                    learning_style: "Out site",
                    rating: 2,
                    learning_media: "ไม่มีสื่อการสอนไห้",
                },
                {
                    id: 6,
                    name: "tsuyu",
                    title_subject: "ภาษาสเปน",
                    type_subject: "ภาษา",
                    detail: "Spanish language final",
                    price: "300",
                    file: "/storage/tsuyu.jpeg",
                    additional_costs:
                        "Spanish language simple 1 300บาท/house Spanish language simple 2 350บาท/house Spanish language simple 3 400บาท/house",
                    type_learning: "กลุ่ม",
                    date_learning: "Sunday , Monday",
                    location_learning: "Noth Univercity",
                    learning_style: "Out site",
                    rating: 2,
                    learning_media: "ไม่มีสื่อการสอนไห้",
                },
            ],
            categories: [
                {
                    name: "วิชาหลัก",
                    subject: [
                        "คณิตศาสตร์",
                        "วิทยาศสตร",
                        "เคมี",
                        "ชีวะ",
                        "ฟิสิกสิ",
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
                        "ภาษาญี่่ปุ่น",
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
                        "TOEIc",
                        "MBA-TOEIC",
                        "PAT",
                        "SAT MATH",
                        "BMAT",
                        "อื่นๆ",
                    ],
                },
            ],
            itemsPerPage: 6,
            currentPage: 1,
        };
    },
    computed: {
        totalPages() {
            return Math.ceil(this.image.length / this.itemsPerPage);
        },
        displayedItems() {
            const start = (this.currentPage - 1) * this.itemsPerPage;
            const end = start + this.itemsPerPage;
            return this.image.slice(start, end);
        },
    },
    methods: {
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

            // const formData = new FormData();
            // formData.append("id", id);
            // formData.append("type_subject", type_subject);
            // formData.append("title_subject", title_subject);

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

            return;

            axios
                .post("/", formData)
                .then((response) => {
                    console.log(response);
                })
                .catch((error) => {
                    console.log(error);
                });
        },
        test(title_subject) {
            console.log(title_subject);
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
    background-color: #151F32;
    color: white;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

.filter-btn:hover {
    background-color: #151F32;
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
</style>
