<script setup>
import LayoutPage from "@/Layouts/LayoutPage.vue";
import Footer from "@/Components/Footer.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import Textbar from "@/Components/Textbar.vue";
</script>
<template>
    <LayoutPage>

        <div class="flex flex-col items-center p-5 space-y-2 bg-white">
            <div class="w-auto sm:w-3/5 mt-10 items-center justify-center">
                <div class="flex h-full">
                    <div class="h-auto w-2/12 mb-4 sm:mb-0">
                        <div class="flex h-auto items-center">
                            <img
                                :src="this.form.image"
                                class="cursor-move sm:h-auto sm:w-auto rounded-lg shadow-md shadow-slate-600 hover:scale-105 transition-transform"
                                alt=""
                            />
                        </div>
                    </div>
                    <div
                        class="flex h-auto w-10/12 font-sans text-xl ml-5"
                    >
                        <div class="flex flex-col w-full">
                            <div class="text-start">
                                <h3
                                    class="text-lg leading-normal tracking-tight text-white"
                                >
                                    <span class="text-slate-600"
                                        >{{ this.form.name }} (Twice's)</span
                                    >
                                </h3>
                            </div>
                            <div class="text-start mt-1">
                                <h3
                                    class="text-3xl leading-normal tracking-tight text-white"
                                >
                                    <span class="text-slate-400">{{
                                        this.form.title_subject
                                    }}</span>
                                </h3>
                            </div>
                            <div class="text-start w-full mt-2 mx-2">
                                <h3
                                    class="text-md leading-normal tracking-tight text-white"
                                >
                                    <span class="text-slate-500">
                                        โดยเรียนรู้อย่างสะดวกสบายกับคอร์สเรียนสนทนาออนไลน์
                                        ที่สามารถเข้าถึงได้ทุกที่ทุกเวลา
                                        ไม่ว่าคุณอยู่ในระดับภาษาไหนก็เริ่มเรียนภาษาเกาหลีกับเราได้
                                    </span>
                                </h3>
                            </div>
                            <div class="flex flex-row text-slate-500 mb-5">
                                <div class="flex-row">
                                    <div
                                        class="flex-col w-full text-md leading-6 font-sans my-5"
                                    >
                                        <label
                                            for=""
                                            class="flex w-full text-right"
                                            >รายละเอียดวิชา</label
                                        >
                                        <label
                                            for=""
                                            class="flex full ml-1 mt-1 text-slate-600 text-left"
                                            >{{ this.form.detail }}
                                            {{
                                                this.form.price
                                            }}
                                            won/hour</label
                                        >
                                    </div>
                                    <div
                                        class="flex-col w-full text-md leading-6 font-sans my-5"
                                    >
                                        <label
                                            for=""
                                            class="flex w-full text-right"
                                            >คอสเพิ่มเติม</label
                                        >
                                        <label
                                            for=""
                                            class="flex w-full ml-1 mt-1 text-slate-600 text-left"
                                            >{{
                                                this.form.additional_costs
                                            }}</label
                                        >
                                    </div>
                                    <div
                                        class="flex-col w-full text-md leading-6 font-sans my-5"
                                    >
                                        <label
                                            for=""
                                            class="flex w-full text-right"
                                            >เรียนวัน</label
                                        >
                                        <label
                                            for=""
                                            class="flex w-full ml-1 mt-1 text-slate-600 text-left"
                                            >{{
                                                this.form.date_learning
                                            }}</label
                                        >
                                    </div>
                                    <div
                                        class="flex-col w-full text-md leading-6 font-sans my-5"
                                    >
                                        <label
                                            for=""
                                            class="flex w-full text-right"
                                            >สถานที่สอน</label
                                        >
                                        <label
                                            for=""
                                            class="flex w-full ml-1 mt-1 text-slate-600 text-left"
                                            >{{
                                                this.form.location_learning
                                            }}</label
                                        >
                                    </div>
                                    <div
                                        class="flex-col w-full text-md leading-6 font-sans my-5"
                                    >
                                        <label
                                            for=""
                                            class="flex w-full text-right"
                                            >รูปแบบการสอน</label
                                        >
                                        <label
                                            for=""
                                            class="flex w-full ml-1 mt-1 text-slate-600 text-left"
                                            >{{
                                                this.form.learning_style
                                            }}</label
                                        >
                                    </div>
                                    <div
                                        class="flex-col w-full text-md leading-6 font-sans my-5"
                                    >
                                        <label
                                            for=""
                                            class="flex w-full text-right"
                                            >ประเภทการสอน</label
                                        >
                                        <label
                                            for=""
                                            class="flex w-full ml-1 mt-1 text-slate-600 text-left"
                                            >{{
                                                this.form.type_learning
                                            }}</label
                                        >
                                    </div>
                                    <div
                                        class="flex-col w-full text-md leading-6 font-sans my-5"
                                    >
                                        <label
                                            for=""
                                            class="flex w-full text-right"
                                            >สื่อการสอน</label
                                        >
                                        <label
                                            for=""
                                            class="flex w-full ml-1 mt-1 text-slate-600 text-left"
                                            >{{
                                                this.form.learning_media
                                            }}</label
                                        >
                                    </div>
                                    <primary-button
                                        class="flex-col mt-2 lg:mt-3 ml-28 lg:ml-0 p-3 border-2 text-md rounded-md text-blue-500 bg-blue-800"
                                    >
                                        ดูข้อมูลติดต่อ
                                    </primary-button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <Textbar></Textbar>
        <div
            class="flex flex-col items-center justify-center p-5 w-full space-y-2 bg-white"
        >
            <label for="" class="text-sans text-3xl mt-5 text-slate-500"
                >หมวดภาษา</label
            >
            <div>
                <div
                    class="grid grid-cols-1 gap-3 lg:grid-cols-3 w-auto h-auto mt-5 mb-10 mx-auto"
                >
                    <div
                        v-for="(list, index) in image"
                        class="relative cursor-pointer bg-slate-100 w-auto lg:w-64 h-72 overflow-hidden group rounded-md shadow-lg shadow-slate-300 hover:shadow-slate-600"
                    >
                        <a
                            type="botton"
                            @click="
                                subject(
                                    list.id,
                                    list.type_subject,
                                    list.title_subject
                                )
                            "
                        >
                            <img
                                :src="list.file"
                                class="w-full h-full rounded-md"
                                alt=""
                            />
                            <div
                                class="flex flex-col absolute inset-0 rounded-md bg-black bg-opacity-50 opacity-0 duration-300 group-hover:opacity-100 hover:scale-105 transition-transform transformitems-center justify-center"
                            >
                                <p
                                    class="text-white text-center font-sans text-lg"
                                >
                                    {{ list.name }}
                                </p>
                                <p
                                    class="text-white text-center font-sans text-lg mt-2"
                                >
                                    {{ list.title_subject }}
                                </p>
                                <p
                                    class="text-white text-center font-sans text-lg mt-2"
                                >
                                    {{ list.detail }}
                                </p>
                                <p
                                    class="text-white text-center font-sans text-lg mt-2"
                                >
                                    ราคา {{ list.price }} won/hour
                                </p>
                            </div>
                        </a>
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
                    price: "4000",
                    file: "/storage/imnayoen.jpeg",
                    additional_costs:
                        "Korean language simple 1 3000won/house Korean language simple 2 3500won/house Korean language simple 3 4000won/house",
                    type_learning: "เดี่ยว",
                    date_learning: "Sunday , Monday , Friday",
                    location_learning: "Maejo Univercity",
                    learning_style: "On site",
                    learning_media: "มีสื่อการสอนไห้",
                },
                {
                    id: 2,
                    name: "jisuitzy",
                    title_subject: "ภาษาอังกฤษ",
                    type_subject: "ภาษา",
                    detail: "Englist language final",
                    price: "5500",
                    file: "/storage/jisuitzy.jpeg",
                    additional_costs:
                        "Englist language simple 1 3000won/house Englist language simple 2 3500won/house Englist language simple 3 4000won/house",
                    type_learning: "เดี่ยว",
                    date_learning: "Monday , Friday",
                    location_learning: "Noth Univercity",
                    learning_style: "On site",
                    learning_media: "มีสื่อการสอนไห้",
                },
                {
                    id: 3,
                    name: "liaitzy",
                    title_subject: "ภาษาฝรั่งเศส",
                    type_subject: "ภาษา",
                    detail: "French language  final",
                    price: "3700",
                    file: "/storage/liaitzy.jpeg",
                    additional_costs:
                        "French language simple 1 3000won/house French language simple 2 3500won/house French language simple 3 4000won/house",
                    type_learning: "เดี่ยว",
                    date_learning: "Sunday , Friday",
                    location_learning: "ChaingMai Univercity",
                    learning_style: "Out site",
                    learning_media: "มีสื่อการสอนไห้",
                },
                {
                    id: 4,
                    name: "lia lovelove",
                    title_subject: "ภาษาอิตาลี",
                    type_subject: "ภาษา",
                    detail: "Italian language final",
                    price: "4200",
                    file: "/storage/lovelove.jpeg",
                    additional_costs:
                        "Italian language simple 1 3000won/house Italian language simple 2 3500won/house Italian language simple 3 4000won/house",
                    type_learning: "กลุ่ม",
                    date_learning: "Sunday , Monday , Friday",
                    location_learning: "ChaingMai Univercity",
                    learning_style: "On site",
                    learning_media: "มีสื่อการสอนไห้",
                },
                {
                    id: 5,
                    name: "lia lovely",
                    title_subject: "ภาษาญี่ปุ่น",
                    type_subject: "ภาษา",
                    detail: "Japanese language final",
                    price: "3500",
                    file: "/storage/lovely.jpeg",
                    additional_costs:
                        "Japanese language simple 1 3000won/house Japanese language simple 2 3500won/house Japanese language simple 3 4000won/house",
                    type_learning: "กลุ่ม",
                    date_learning: "Friday",
                    location_learning: "Maejo Univercity",
                    learning_style: "On site",
                    learning_media: "มีสื่อการสอนไห้",
                },
                {
                    id: 6,
                    name: "tsuyu",
                    title_subject: "ภาษาสเปน",
                    type_subject: "ภาษา",
                    detail: "Spanish language final",
                    price: "3000",
                    file: "/storage/tsuyu.jpeg",
                    additional_costs:
                        "Spanish language simple 1 3000won/house Spanish language simple 2 3500won/house Spanish language simple 3 4000won/house",
                    type_learning: "กลุ่ม",
                    date_learning: "Sunday , Monday",
                    location_learning: "Noth Univercity",
                    learning_style: "Out site",
                    learning_media: "ไม่มีสื่อการสอนไห้",
                },
            ],
        };
    },
    methods: {
        subject(id, type_subject, title_subject) {
            // console.log(id);
            // console.log(type_subject);
            // console.log(title_subject);
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
                this.form.detail = foundImage.detail
                this.form.price = foundImage.price
                this.form.additional_costs = foundImage.additional_costs
                this.form.type_learning = foundImage.type_learning
                this.form.date_learning = foundImage.date_learning
                this.form.location_learning = foundImage.location_learning
                this.form.learning_style = foundImage.learning_style
                this.form.learning_media = foundImage.learning_media

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
    },
    mounted() {},
};
</script>

<style>
.img-container img {
    object-fit: cover;
    width: 100%;
    height: 100%;
}
</style>
