<script setup>
import LayoutPage from "@/Layouts/LayoutPage.vue";
import Footer from "@/Components/Footer.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import Textbar from "@/Components/Textbar.vue";
</script>
<template>
    <LayoutPage>
        <div
            class="max-w-full mx-auto h-auto bg-gradient-to-r from-blue-900 via-indigo-900 to-[#151F32] overflow-hidden"
        >
            <div class="relative flex justify-between w-full h-full space-y-96">
                <div class="flex">
                    <img
                        src="../../imgs/bg_01.png"
                        class="absolute w-32 top-0 -left-2"
                    />
                    <img
                        src="../../imgs/bg_04.png"
                        class="absolute w-32 top-0 right-4"
                    />
                </div>
                <div class="flex">
                    <img
                        src="../../imgs/bg_02.png"
                        class="absolute w-32 bottom-0 -left-2"
                    />
                    <img
                        src="../../imgs/bg_03.png"
                        class="absolute w-32 bottom-0 right-4"
                    />
                </div>
                <img
                    src="../../imgs/BEARSKILL1.png"
                    class="absolute w-80 h-96 bottom-0 md:left-28 lg:left-44 xl:left-64 2xl:left-96 hidden md:block"
                    alt="#"
                />

                <div
                    class="flex justify-center absolute left-16 bottom-20 md:left-10 lg:left-36 xl:left-80"
                >
                    <div class="w-96 hidden md:block"></div>
                    <div class="flex flex-wrap py-4">
                        <div class="flex flex-col pl-1 text-white font-bold">
                            <div class="space-y-5">
                                <div
                                    class="flex flex-wrap animate-pulse space-x-5 text-2xl sm:text-3xl md:text-2xl lg:text-3xl xl:text-4xl 2xl:text-5xl"
                                >
                                    <a href=""
                                        ><p
                                            class="transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 border-b-2 hover:text-orange-400 hover:border-orange-400 duration-150"
                                        >
                                            สมัครเป็นติวเตอร์
                                        </p></a
                                    >
                                </div>
                                <p class="text-4xl">
                                    <span class="text-orange-400"
                                        >แบร์สกิล</span
                                    >
                                    Dek67
                                </p>
                                <p class="text-2xl">
                                    แบร์สกิล แชร์ความรู้เพื่อชาติ
                                </p>
                            </div>
                            <div class="mt-5 space-x-3">
                                <button
                                    class="border-2 border-white rounded-full p-2 px-6 hover:bg-white hover:text-gray-600 duration-300"
                                >
                                    เพิ่มเติม
                                </button>
                                <button
                                    class="border-2 border-white rounded-full p-2 px-6 bg-orange-400 hover:bg-orange-100 hover:text-gray-600 duration-300"
                                >
                                    เริ่มต้นหาติวเตอร์
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <Textbar></Textbar>

        <div class="flex flex-col items-center p-5 space-y-2 bg-white">
            <div class="flex w-3/5 h-auto mt-10">
                <div class="flex flex-col h-auto w-full">
                    <div class="">
                        <div class="flex flex-row items-start">
                            <div class="w-full flex items-center">
                                <div
                                    class="text-md leading-6 font-medium text-gray-900"
                                >
                                    <!-- เพิ่มเนื้อหาตามต้องการ -->
                                    <img
                                        src="/storage/imnayoen.jpeg"
                                        class="w-full h-full rounded-lg shadow-md shadow-slate-600"
                                        alt=""
                                    />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    class="flex flex-col h-auto sm:px-6 md:px-8 w-full font-sans"
                >
                    <div class="flex flex-col">
                        <div class="text-start">
                            <h3
                                class="text-lg leading-normal tracking-tight text-white"
                            >
                                <span class="text-slate-600"
                                    >Nayeon (Twice's)</span
                                >
                            </h3>
                        </div>
                        <div class="text-start mt-1">
                            <h3
                                class="text-3xl leading-normal tracking-tight text-white"
                            >
                                <span class="text-slate-400"
                                    >Korean language</span
                                >
                            </h3>
                        </div>
                        <div class="text-start mt-2 mx-2">
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
                                    <label for="" class="flex w-1/4 text-right"
                                        >รายละเอียดวิชา</label
                                    >
                                    <label
                                        for=""
                                        class="flex w-3/4 ml-5 mt-1 text-slate-600 text-left"
                                        >Korean language final
                                        10000won/house</label
                                    >
                                </div>
                                <div
                                    class="flex-col w-full text-md leading-6 font-sans my-5"
                                >
                                    <label for="" class="flex w-1/4 text-right"
                                        >คอสเพิ่มเติม</label
                                    >
                                    <label
                                        for=""
                                        class="flex w-3/4 ml-5 mt-1 text-slate-600 text-left"
                                        >Korean language simple 1 3000won/house
                                        Korean language simple 2 3500won/house
                                        Korean language simple 3
                                        4000won/house</label
                                    >
                                </div>
                                <div
                                    class="flex-col w-full text-md leading-6 font-sans my-5"
                                >
                                    <label for="" class="flex w-1/4 text-right"
                                        >เรียนวัน</label
                                    >
                                    <label
                                        for=""
                                        class="flex w-3/4 ml-5 mt-1 text-slate-600 text-left"
                                        >Sunday , Monday , Friday</label
                                    >
                                </div>
                                <div
                                    class="flex-col w-full text-md leading-6 font-sans my-5"
                                >
                                    <label for="" class="flex w-1/4 text-right"
                                        >สถานที่สอน</label
                                    >
                                    <label
                                        for=""
                                        class="flex w-3/4 ml-5 mt-1 text-slate-600 text-left"
                                        >Maejo Univercity</label
                                    >
                                </div>
                                <div
                                    class="flex-col w-full text-md leading-6 font-sans my-5"
                                >
                                    <label for="" class="flex w-1/4 text-right"
                                        >รูปแบบการสอน</label
                                    >
                                    <label
                                        for=""
                                        class="flex w-3/4 ml-5 mt-1 text-slate-600 text-left"
                                        >Onsite/Out site</label
                                    >
                                </div>
                                <div
                                    class="flex-col w-full text-md leading-6 font-sans my-5"
                                >
                                    <label for="" class="flex w-1/4 text-right"
                                        >ประเภทการสอน</label
                                    >
                                    <label
                                        for=""
                                        class="flex w-3/4 ml-5 mt-1 text-slate-600 text-left"
                                        >กลุ่ม / เดี่ยว</label
                                    >
                                </div>
                                <div
                                    class="flex-col w-full text-md leading-6 font-sans my-5"
                                >
                                    <label for="" class="flex w-1/4 text-right"
                                        >สื่อการสอน</label
                                    >
                                    <label
                                        for=""
                                        class="flex w-3/4 ml-5 mt-1 text-slate-600 text-left"
                                        >มีสื่อการสอนไห้ /
                                        ไม่มีสื่อการสอนไห้</label
                                    >
                                </div>
                                <primary-button
                                    class="flex-col p-3 border-2 text-md rounded-md text-blue-500 mb-5 bg-blue-800"
                                >
                                    ดูข้อมูลติดต่อ
                                </primary-button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <Textbar></Textbar>
        <div
            class="flex flex-col items-center justify-center p-5 w-full space-y-2 bg-slate-100"
        >
            <div>
                <div class="grid grid-cols-3 gap-3 w-auto h-auto my-10 mx-auto">
                    <!-- Grid Item 1 -->
                    <label for="" class="text-center mt-2">Grid Item 1</label>
                    <div class="bg-white p-10 rounded-md">Grid Item 1</div>

                    <!-- Grid Item 2 -->
                    <label for="" class="text-center mt-2">Grid Item 2</label>
                    <div class="bg-white p-10 rounded-md">Grid Item 2</div>

                    <!-- Grid Item 3 -->
                    <label for="" class="text-center mt-2">Grid Item 3</label>
                    <div class="bg-white p-10 rounded-md">Grid Item 3</div>

                    <!-- Grid Item 4 -->
                    <label for="" class="text-center mt-2">Grid Item 4</label>
                    <div class="bg-white p-10 rounded-md">Grid Item 4</div>

                    <!-- Grid Item 5 -->
                    <label for="" class="text-center mt-2">Grid Item 5</label>
                    <div class="bg-white p-10 rounded-md">Grid Item 5</div>

                    <!-- Grid Item 6 -->
                    <label for="" class="text-center mt-2">Grid Item 6</label>
                    <div class="bg-white p-10 rounded-md">Grid Item 6</div>
                </div>
            </div>
        </div>
    </LayoutPage>
    <Footer />
</template>

<script></script>

<style></style>
