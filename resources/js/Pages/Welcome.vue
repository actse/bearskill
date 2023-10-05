<script setup>
import { Head, Link } from "@inertiajs/vue3";
import LayoutPage from "@/Layouts/LayoutPage.vue";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import Slider from "@/Components/Slider.vue";
import Footer from "@/Components/Footer.vue"

</script>

<template>
    <LayoutPage>
       
        <!-- background-animate -->
        <div class="w-full">
            <div class="fixed top-4 left-4 flex items-center justify-center bg-gray-100 border-2 border-gray-400 w-24 h-16 rounded-xl">
            <span class="sm:hidden">Mobile</span>
            <span class="hidden sm:block md:hidden">SM</span>
            <span class="hidden md:block lg:hidden">MD</span>
            <span class="hidden lg:block xl:hidden">LG</span>
            <span class="hidden xl:block 2xl:hidden">XL</span>
            <span class="hidden 2xl:block">2XL</span>
        </div>
        <div class="max-w-full mx-auto h-auto bg-gradient-to-r from-blue-900 via-indigo-900 to-[#151F32]  overflow-hidden">
            <div class="relative flex justify-between w-full h-full space-y-96">
                <div class="flex ">
                    <img src="../../imgs/bg_01.png" class="absolute w-32 top-0 -left-2">
                    <img src="../../imgs/bg_04.png" class="absolute w-32 top-0 right-4">
                </div>
                <div class="flex ">
                    <img src="../../imgs/bg_02.png" class="absolute w-32 bottom-0 -left-2">
                    <img src="../../imgs/bg_03.png" class="absolute w-32 bottom-0 right-4">
                </div>
                <img src="../../imgs/BEARSKILL1.png" class="absolute w-80 h-96 bottom-0 md:left-28 lg:left-44 xl:left-64 2xl:left-96 hidden md:block " alt="#">
                
                <div class="flex justify-center absolute left-16 bottom-20 md:left-10 lg:left-36 xl:left-80">
                    <div class=" w-96 hidden md:block">
                    </div>
                    <div class="flex flex-wrap py-4">
                        <div class="flex flex-col pl-1 text-white font-bold ">
                            <div class="space-y-5">
                                <div class="flex flex-wrap animate-pulse space-x-5 text-2xl sm:text-3xl md:text-2xl lg:text-3xl xl:text-4xl 2xl:text-5xl">
                                    <a href=""><p class="transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 border-b-2 hover:text-orange-400 hover:border-orange-400 duration-150">สมัครเป็นติวเตอร์</p></a>
                                </div>
                            <p class="text-4xl"><span class="text-orange-400">แบร์สกิล</span> Dek67</p>
                            <p class="text-2xl">แบร์สกิล แชร์ความรู้เพื่อชาติ</p>
                            </div>
                            <div class="mt-5 space-x-3">
                                <button class="border-2 border-white rounded-full p-2 px-6 hover:bg-white hover:text-gray-600 duration-300">เพิ่มเติม</button>
                                <button class="border-2 border-white rounded-full p-2 px-6 bg-orange-400 hover:bg-orange-100 hover:text-gray-600 duration-300">เริ่มต้นหาติวเตอร์</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="grid grid-cols-1 gap-4 h-auto py-1 sm:grid-cols-2 lg:grid-cols-4 sm:px-2 md:px-8 md:py-8 xl:px-3 xl:py-6">
            <div class="flex justify-center w-full p-0.5">
                <img src="../../imgs/icon-1.png" class="w-12 h-12 xl:w-12 xl:h-12 lg:h-12 lg:w-12 md:w-16 md:h-16 ">
                <div class="flex flex-col pl-2 w-full 2xl:w-72 xl:w-72 lg:w-52">
                    <p class="text-gray-700 text-sm font-bold xl:text-xl lg:text-xl md:text-lg sm:text-base">ระบบรับรองความปลอดภัย</p>
                    <p class="text-gray-600 text-xs xl:text-sm md:text-base sm:text-sm">เว็บไซด์ของเรามีระบบรับรองคุณภาพและความปลอดภัยทั่งผู้เรียนและผู้สอนมีระบบรีวิวและรีพอร์ทพร้อมดูแลตลอด 24 ชม.</p>
                </div>
            </div>
            <div class="flex justify-center w-full p-0.5">
                <img src="../../imgs/icon-2.png" class="w-12 h-12 xl:w-12 xl:h-12 lg:h-12 lg:w-12 md:w-16 md:h-16 ">
                <div class="flex flex-col pl-2 w-full 2xl:w-72 xl:w-72 lg:w-52">
                    <p class="text-gray-700 text-sm font-bold xl:text-xl lg:text-xl md:text-lg sm:text-base">User friendly สะดวกใช้งานง่าย</p>
                    <p class="text-gray-600 text-xs xl:text-sm md:text-base sm:text-sm">ระบบถูกออกแบบมาเพื่อให้มีความสะดวกและใช้งานง่ายทั้งผู้เรียนและผู้สอน ตั้งแต่ขั้นตอนลงทะเบียน และจบการเรียนการสอน</p>
                </div>
            </div>
            <div class="flex justify-center w-full p-0.5">
                <img src="../../imgs/icon-3.png" class="w-12 h-12 xl:w-12 xl:h-12 lg:h-12 lg:w-12 md:w-16 md:h-16 ">
                <div class="flex flex-col pl-2 w-full 2xl:w-72 xl:w-72 lg:w-52">
                    <p class="text-gray-700 text-sm font-bold xl:text-xl lg:text-xl md:text-lg sm:text-base">มีวิชาให้เลือกเรียนที่หลากหลาย</p>
                    <p class="text-gray-600 text-xs xl:text-sm md:text-base sm:text-sm">เราได้รวบรวมวิชาเรียนทั้งแบบ Online และ On-site ที่ครอบคลุมและหลากหลายให้เลือกทั้งวิชาหลักและวิชาเสริม</p>
                </div>
            </div>
            <div class="flex justify-center w-full p-0.5">
                <img src="../../imgs/icon-4.png" class="w-12 h-12 xl:w-12 xl:h-12 lg:h-12 lg:w-12 md:w-16 md:h-16 ">
                <div class="flex flex-col pl-2 w-full 2xl:w-72 xl:w-72 lg:w-52">
                    <p class="text-gray-700 text-sm font-bold xl:text-xl lg:text-xl md:text-lg sm:text-base">มีใบประกาศรับรองหลังจากเรียนจบ</p>
                    <p class="text-gray-600 text-xs xl:text-sm md:text-base sm:text-sm">หลังจากที่เรียนจบแล้วผู้เรียนสามารถขอใบประกาศรับรองการผ่านการเรียนได้</p>
                </div>
            </div>
        </div>
        
        <div class="w-full bg-gray-200">
            <Slider />
        </div>

        <div class="relative flex flex-col text-center items-center p-6 w-full  space-y-4">
                <div class="px-10 py-1 border-4 border-indigo-900 rounded-full text-gray-600 text-3xl font-extrabold">STEP 1</div>
                <p class="text-3xl font-extrabold text-gray-500 ">เลือกหมวดหมู่วิชาเรียน</p>
                <img src="../../imgs/BEARSKILL3.png" alt="#" class="absolute bottom-0 hidden 2xl:h-[580px] xl:h-[450px] lg:h-[450px] md:h-[450px] sm:h-[400px]  sm:block">
                <div class="flex flex-wrap space-x-10 sm:space-x-28 md:space-x-32 xl:space-x-40">
                    <div class="relative flex w-32 h-32 group sm:w-32 sm:h-32">
                        <button class="flex justify-center text-center items-center w-32 h-32 border-2 border-blue-300 text-2xl font-extrabold text-gray-600 rounded-full bg-white duration-200 shadow-lg group-hover:hover:shadow-[#8daeec] group-hover:shadow-lg sm:w-32 sm:h-32">วิชาหลัก</button>                       
                    </div>
                    <div class="relative flex w-32 h-32 group sm:w-32 sm:h-32 ">
                        <button class="flex relative justify-center text-center items-center w-32 h-32 bg-gradient-to-r from-blue-900 via-indigo-900 to-[#151F32] text-2xl font-extrabold text-slate-100 rounded-full shadow-lg duration-200 hover:hover:shadow-[#8daeec] hover:shadow-lg sm:w-32 sm:h-32">ภาษา</button>
                    </div>
                    
                </div>
                <div class="flex flex-wrap space-x-10 sm:space-x-56 md:space-x-60 xl:space-x-72">
                    <div class="relative flex w-32 h-32 group sm:w-32 sm:h-32">
                        <button class="flex justify-center text-center items-center w-32 h-32 border-2 border-blue-300 text-2xl font-extrabold text-gray-600 rounded-full bg-white duration-200 shadow-lg group-hover:hover:shadow-[#8daeec] group-hover:shadow-lg sm:w-32 sm:h-32">เทคโนโลยี</button>
                        
                    </div>
                    <div class="relative flex w-32 h-32 group sm:w-32 sm:h-32">
                        <button class="flex relative justify-center text-center items-center w-32 h-32 bg-gradient-to-r from-blue-900 via-indigo-900 to-[#151F32] text-2xl font-extrabold text-slate-100 rounded-full duration-200 hover:hover:shadow-[#8daeec] hover:shadow-lg sm:w-32 sm:h-32">ศิลปะ</button>
                    </div>

                </div>
                <div class="flex flex-wrap space-x-10 sm:space-x-80 md:space-x-80 xl:space-x-96">
                    <div class="relative flex w-32 h-32 group sm:w-32 sm:h-32">
                        <button class="flex justify-center text-center items-center w-32 h-32 border-2 border-blue-300 text-2xl font-extrabold text-gray-600 rounded-full bg-white duration-200 shadow-lg group-hover:hover:shadow-[#8daeec] group-hover:shadow-lg sm:w-32 sm:h-32">ดนตรี</button>
                        
                    </div>
                    <div class="relative flex w-32 h-32 group sm:w-32 sm:h-32">
                        <button class="flex relative justify-center text-center items-center w-32 h-32 bg-gradient-to-r from-blue-900 via-indigo-900 to-[#151F32] text-2xl font-extrabold text-slate-100 rounded-full duration-200 hover:shadow-[#8daeec] hover:shadow-lg sm:w-32 sm:h-32">อื่นๆ</button>
                    </div>
                </div>
        </div>    
        <div class="relative flex flex-col  text-center items-center p-4 pt-6 w-full h-auto space-y-4 bg-sky-200 sm:h-screen"> 
            <img src="../../imgs/bg_05.png" alt="" class="absolute w-20 h-20 top-0 left-0">
            <img src="../../imgs/bg_06.png" alt="" class="absolute w-20 h-20 top-0 right-0">
            <img src="../../imgs/bg_07.png" alt="" class="absolute w-20 h-20 bottom-0 left-0">
            <img src="../../imgs/bg_10.png" alt="" class="absolute w-[600px] h-[330px] bottom-0 right-0">    
            <div class="px-10 py-1 border-4 border-indigo-900 rounded-full text-gray-600 text-3xl font-extrabold bg-white">STEP 2</div>
                <p class="text-3xl font-extrabold text-gray-700">เลือกวิชาที่ต้องการเรียน</p>
                <div class=" w-full h-full">
                    <div class="relative flex flex-wrap justify-center w-full space-x-2 p-5 lg:space-x-4">
                        <div class=" flex flex-col space-y-4 text-gray-600">
                            <button type="button" class="py-2 px-4 text-lg font-bold border rounded-xl shadow-lg lg:px-10 lg:py-4 bg-white focus:bg-slate-200 focus:border-slate-600">ภาษาอังกฤษ</button>
                            <button type="button" class="py-2 px-4 text-lg font-bold border rounded-xl shadow-lg lg:px-10 lg:py-4 bg-white focus:bg-slate-200 focus:border-slate-600">ภาษาฝรั่งเศส</button>
                            <button type="button" class="py-2 px-4 text-lg font-bold border rounded-xl shadow-lg lg:px-10 lg:py-4 bg-white focus:bg-slate-200 focus:border-slate-600">ภาษาสเปน</button>
                            <button type="button" class="py-2 px-4 text-lg font-bold border rounded-xl shadow-lg lg:px-10 lg:py-4 bg-white focus:bg-slate-200 focus:border-slate-600">ภาษาเยอรมัน</button>
                            <button type="button" class="py-2 px-4 text-lg font-bold border rounded-xl shadow-lg lg:px-10 lg:py-4 bg-white focus:bg-slate-200 focus:border-slate-600">ภาษาอาหรับ</button>
                        </div>
                        <div class="flex flex-col space-y-4 text-gray-200">
                            <button type="button" class="py-2 px-4 text-lg font-bold border rounded-xl shadow-lg lg:px-10 lg:py-4 bg-slate-900 focus:bg-white focus:text-gray-600 focus:border-slate-600">ภาษาจีน</button>
                            <button type="button" class="py-2 px-4 text-lg font-bold border rounded-xl shadow-lg lg:px-10 lg:py-4 bg-slate-900 focus:bg-white focus:text-gray-600 focus:border-slate-600">ภาษาเกาหลี</button>
                            <button type="button" class="py-2 px-4 text-lg font-bold border rounded-xl shadow-lg lg:px-10 lg:py-4 bg-slate-900 focus:bg-white focus:text-gray-600 focus:border-slate-600">ภาษาเกาหลี</button>
                            <button type="button" class="py-2 px-4 text-lg font-bold border rounded-xl shadow-lg lg:px-10 lg:py-4 bg-slate-900 focus:bg-white focus:text-gray-600 focus:border-slate-600">ภาษารัสเซีย</button>
                            <button type="button" class="py-2 px-4 text-lg font-bold border rounded-xl shadow-lg lg:px-10 lg:py-4 bg-slate-900 focus:bg-white focus:text-gray-600 focus:border-slate-600">ภาษาอื่นๆ</button>
                        </div>
                        <div class="relative flex-col items-center justify-center w-2/4 hidden sm:block">
                            <div class="bg-"></div>
                            <img src="../../imgs/bear7.png" alt="#" class="absolute w-96 h-96 left-24">
                        </div>
                    </div>
                </div>
                
        </div>

        <div class="flex flex-col p-6 space-y-4 h-auto">
                    <div class=" flex flex-wrap justify-between space-y-2 sm:flex-wrap ">
                        <div class="relative flex flex-wrap justify-center items-center w-3/5 px-2 py-1 space-x-4 border-4 border-indigo-900 rounded-full text-gray-600 text-3xl font-extrabold bg-white md:w-2/5 lg:w-2/6 xl:w-3/12">
                            <p >STEP 3</p>
                            <p class="text-xl font-extrabold text-gray-700 hidden sm:block">เลือกครูผู้สอน</p>
                            <img src="../../imgs/bear10_1.png" alt="" class="absolute w-20 h-20 -top-5 -right-10 hidden sm:block">
                        </div>
                        <div class="flex space-x-2 justify-end">
                            <select id="type_courses" name="type_courses"
                                class="text-sm text-gray-600 rounded-lg h-10 mt-3 border-#151F32 shadow-md">
                                <option value="เลือกวิชา" selected="">เลือกวิชา</option>
                                <option v-for="items in type_courses" :key="items.id" :value="items.id">
                                    {{ items.type_courses }}
                                </option>
                            </select>
                            <select id="address" name="address"
                                class="text-sm text-gray-600 rounded-lg h-10 mt-3 border-#151F32 shadow-md">
                                <option value="เลือกจังหวัด" selected="">เลือกจังหวัด</option>
                                <option v-for="items in address" :key="items.id" :value="items.id">
                                    {{ items.address }}
                                </option>
                            </select>
                        </div>
                    </div>
                        <div class=" mt-10">
                            <h1 class="w-44 text-xl font-extrabold p-3 bg-[#026292] text-white">วิชาภาษาอังกฤษ</h1>
                            <div class="w-full my-2 p-4 bg-sky-200 space-y-5">
                                <div class="grid grid-cols-1  md:grid-cols-5">
                                    <div class="flex flex-col justify-center items-center text-center space-y-2 md:justify-normal md:items-start">
                                        <img src="../../imgs/BEARSKILL4.png" alt="" class="w-36 h-36">
                                        <button type="button" class=" px-4 py-1 bg-[#036594] text-white">ดูประวัติผู้สอน</button>
                                    </div>
                                    <div class="flex flex-col justify-center items-center text-center md:justify-normal md:items-start">
                                        <h1 class="text-2xl font-bold">ครูบี</h1>
                                        <p class="text-lg text-gray-700 font-bold ">ประสบการณ์ 5 ปี</p>
                                        <div v-for="(teacherData, index) in teacher" :key="index" class="flex flex-wrap w-52 text-gray-500 text-sm gap-1">
                                            <p v-for="(teaching_type, courseIndex) in teacherData.teaching_type" :key="courseIndex" class="bg-gray-200 border px-2 py-1 rounded-lg text-sm">{{ teaching_type.teaching_type_name }}</p>
                                        </div>
                                        <p class="text-[#026292]">(500)</p>
                                        
                                    </div>
                                    <div class="pt-3 md:col-span-2">
                                        <div v-for="(teacherData, index) in teacher" :key="index" class="grid grid-cols-3 justify-center items-center gap-3 text-white text-sm font-bold">
                                            <div v-for="(course, courseIndex) in teacherData.courses" :key="courseIndex" class="bg-[#026292] py-1 px-4 rounded-lg">คอร์ส {{ course.course_name}}</div>
                                        </div>
                                    </div>
                                    
                                    <div class="mx-auto flex items-center justify-center">
                                        <div class="px-4 py-2 bg-[#026292] text-xl text-white font-bold m-5">
                                            <p>ติดต่อครู</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
        </div>
        <div class="flex flex-col text-center items-center p-5 w-full  space-y-2 bg-gradient-to-t from-blue-900 via-indigo-900 to-[#151F32]"> 
            <div class="py-6 ">
                <div class="max-w-screen-md mx-auto px-4 sm:px-6 lg:px-8 flex flex-col justify-between">

                    <div class="text-center">
                        <h3 class="text-3xl sm:text-4xl leading-normal font-extrabold tracking-tight text-white">
                            FAQ <span class="text-indigo-600">คำถามที่พบบ่อย</span>
                        </h3>

                    </div>

                    <div class="mt-10">
                        <ul class="">
                            <li v-for="(item, index) in FAQ" :key="index" class="text-left mb-10">
                                <div class="flex flex-row items-start mb-5">
                                    <div
                                        class="hidden sm:flex items-center justify-center p-3 mr-3 rounded-full bg-indigo-500 text-white border-4 border-white text-xl font-semibold ">
                                        <svg width="30px" fill="white" height="30px" viewBox="0 0 24 24"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g data-name="Layer 2">
                                                <g data-name="menu-arrow">
                                                    <rect width="24" height="24" transform="rotate(180 12 12)" opacity="0"></rect>
                                                    <path
                                                        d="M17 9A5 5 0 0 0 7 9a1 1 0 0 0 2 0 3 3 0 1 1 3 3 1 1 0 0 0-1 1v2a1 1 0 0 0 2 0v-1.1A5 5 0 0 0 17 9z">
                                                    </path>
                                                    <circle cx="12" cy="19" r="1"></circle>
                                                </g>
                                            </g>
                                        </svg>
                                    </div>
                                    <div class="bg-gray-100 p-5 px-10 w-full flex items-center rounded-lg">
                                        <h4 class="text-md leading-6 font-medium text-gray-900">{{ item.asked }}</h4>
                                    </div>
                                </div>

                                <div class="flex flex-row items-start">
                                    <div class="bg-indigo-100 p-5 px-10 w-full flex items-center rounded-lg">
                                        <p class="text-gray-700 text-sm">{{ item.questions }}
                                        </p>
                                    </div>
                                    <div
                                        class="hidden sm:flex items-center justify-center p-3 ml-3 rounded-full bg-indigo-500 text-white border-4 border-white text-xl font-semibold">
                                        <svg height="25px" fill="white" version="1.1" id="Layer_1"
                                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                                            y="0px" viewBox="0 0 295.238 295.238" style="enable-background:new 0 0 295.238 295.238;"
                                            xml:space="preserve"> 
                                            <g>
                                                <g>
                                                    <g>
                                                        <path d="M277.462,0.09l-27.681,20.72l-27.838,64.905h-22.386l-8.79-19.048h5.743c10.505,0,19.048-8.452,19.048-18.957V28.571
                            h9.524V0H196.51v28.571h9.524V47.71c0,5.248-4.271,9.433-9.524,9.433h-10.138L174.2,30.81l14.581-7.267L141.038,3.095
                            l-11.224,39.281c-0.305-23.371-19.386-42.29-42.829-42.29c-23.633,0-42.857,19.224-42.857,42.857
                            c0,14.281,7.233,27.676,19.048,35.595v7.176H51.643L50.9,89.619c-2.314,12.005-2.529,24.343-0.638,36.648l-32.486,57.905
                            l35.876,8.195v60.014h47.619v42.857h114.286v-66.357c33.333-23.581,52.371-61.495,52.343-101.943l0.01-17.371
                            c0-6.548-0.605-13.276-1.824-19.905l-0.705-3.948h-9.348l21.429-51.338V0.09z M206.033,19.138V9.614h9.524v9.524H206.033z
                            M189.067,85.714h-18.062l-8.657-19.048h17.929L189.067,85.714z M147.219,16.119l18.929,8.11l-4.467,2.19l14.2,30.724h-17.862
                            l-11.605-25.471l-4.262,2.152L147.219,16.119z M160.543,85.715h-21.176v-9.433c0-5.252,4.271-9.614,9.524-9.614h2.995v-0.001
                            L160.543,85.715z M141.843,44.652l5.776,12.71c-9.905,0.667-17.776,8.848-17.776,18.919v9.433h-19.048v-7.176
                            c9.529-6.386,15.995-16.352,18.176-27.452L141.843,44.652z M53.653,42.948c0-18.376,14.957-33.333,33.333-33.333
                            c18.376,0,33.333,14.957,33.333,33.333c0,11.829-6.39,22.881-16.671,28.838l-2.376,1.371v12.557h-9.524V56.352
                            c5.529-1.971,9.524-7.21,9.524-13.41c0-7.876-6.41-14.286-14.286-14.286c-7.876,0-14.286,6.411-14.286,14.287
                            c0,6.2,3.995,11.438,9.524,13.41v29.362H72.7V73.157l-2.376-1.376C60.043,65.824,53.653,54.776,53.653,42.948z M86.986,47.71
                            c-2.629,0-4.762-2.139-4.762-4.762c0-2.629,2.133-4.762,4.762-4.762c2.629,0,4.762,2.133,4.762,4.762S89.615,47.71,86.986,47.71z
                            M257.366,95.239c0.691,4.761,1.039,9.59,1.039,14.285l0.01,17.405c0.029,38.148-18.795,73.871-50.286,95.552l-2.095,1.429
                            v61.805h-95.238v-42.857h-47.62v-58.086l-30.862-7.043l27.876-49.7l-0.271-1.7c-1.771-10.419-1.871-21.567-0.333-31.09h3.59
                            h47.619H257.366z M245.714,85.714H232.3l23.738-55.343l10.557,5.257L245.714,85.714z M267.938,25.714l-5.267-2.633l5.267-3.943
                            V25.714z"></path>
                                                        <path d="M96.51,123.81c-7.876,0-14.286-4.762-14.286-14.286H72.7c0,14.286,10.681,23.81,23.81,23.81
                            c13.129,0,23.81-9.524,23.81-23.81h-9.524C110.795,119.048,104.386,123.81,96.51,123.81z"></path>
                                                    </g>
                                                </g>
                                            </g>
                                        </svg>
                                    </div>
                                </div>

                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
        <Footer/>
    </div>
    </LayoutPage>
</template>

<script>
export default {
    data() {
    return {
      FAQ: [
        { asked : 'ซื้อแพ็กเกจแล้วเรียนได้กี่วิชา ? กี่ครั้ง ? กี่ชั่วโมง ?', questions: 'ซื้อแพ็กเกจแล้ว สามารถเรียนได้ทุกวิชา ทุกระดับชั้น ไม่จำกัดชั่วโมง เรียนซ้ำได้ไม่จำกัด ตลอดระยะเวลาของแพ็กเกจ'  },
        { asked: 'มีค่าใช้จ่ายเท่าไหร่ ?', questions: 'ราคาขึ้นอยู่กับแพ็กเกจที่ผู้ใช้งานเลือก เริ่มต้นที่ 1,290 บาท' },
        { asked: 'หลังจากใช้งานฟรี 3 วัน ต้องกดยกเลิกไหม / ระบบหักเงินไหม ?', questions: 'ไม่ต้องกดยกเลิก หลังหมดระยะเวลาทดลองเรียนฟรี 3 วัน ระบบจะเปลี่ยนสถานะผู้ใช้เป็น ‘ผู้ใช้ฟรี’ โดยอัตโนมัติ และไม่มีการหักค่าใช้จ่ายใด ๆ เพิ่มเติม ผู้ใช้ฟรีจะใช้งานได้เพียงคลังข้อสอบเท่านั้น' },      
      ],
      teacher: [
        {
            courses: [
            { id: 1, course_name: 'SPEAKING' },
            { id: 2, course_name: 'TOEIC' },
            { id: 3, course_name: 'GRAMMAR' },
            { id: 4, course_name: 'ปูพื้นฐาน' },
            { id: 5, course_name: 'สอบเข้ามหาลัย' },
            { id: 6, course_name: 'สำหรับธุรกิจ' },
            ],
            teaching_type: [
                {teaching_type_name: 'สอนออนไลน์'},
                {teaching_type_name: 'สอนที่บ้าน'},
                {teaching_type_name: 'สอนออนไลน์แบบกลุ่ม'},
                {teaching_type_name: 'สอนแบบกลุ่ม'},      
            ]
        },
      ],
      selectedCourse: null // สร้างตัวแปร selectedCourse เพื่อเก็บคอร์สที่ถูกเลือก
    };
  },
}
</script>

<style></style>
