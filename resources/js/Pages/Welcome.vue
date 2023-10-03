<script setup>
import { Head, Link } from "@inertiajs/vue3";
import LayoutPage from "@/Layouts/LayoutPage.vue";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";

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
                <img src="../../imgs/BEARSKILL1.png" class="absolute w-80 h-96 bottom-0 md:left-28 lg:left-44 xl:left-64 2xl:left-90 hidden md:block " alt="#">
                
                <div class="flex justify-center absolute left-16 bottom-20 md:left-10 lg:left-36 xl:left-52">
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
        <div class="flex  w-full h-auto py-1 sm:px-2 md:px-10 md:py-12 ">
            <div class="flex justify-center w-full">
                <img src="../../imgs/icon-1.png" class="w-6 h-6 xl:w-20 xl:h-20 lg:h-12 lg:w-12 md:w-8 md:h-8 sm:w-6 sm:h-6">
                <div class="flex flex-col pl-2 w-24 2xl:w-72 xl:w-64 lg:w-52 md:w-44 sm:w-36">
                    <p class="text-gray-700 text-sm font-bold xl:text-2xl lg:text-xl md:text-lg sm:text-base">ระบบรับรองความปลอดภัย</p>
                    <p class="text-gray-600 text-xs xl:text-lg md:text-base sm:text-sm">เว็บไซด์ของเรามีระบบรับรองคุณภาพและความปลอดภัยทั่งผู้เรียนและผู้สอนมีระบบรีวิวและรีพอร์ทพร้อมดูแลตลอด 24 ชม.</p>
                </div>
            </div>
            <div class="flex justify-center w-full">
                <img src="../../imgs/icon-2.png" class="w-6 h-6 xl:w-20 xl:h-20 lg:h-12 lg:w-12 md:w-8 md:h-8 sm:w-6 sm:h-6">
                <div class="flex flex-col pl-2 w-24 2xl:w-72 xl:w-64 lg:w-52 md:w-44 sm:w-36">
                    <p class="text-gray-700 text-sm font-bold xl:text-2xl lg:text-xl md:text-lg sm:text-base">User friendly สะดวกใช้งานง่าย</p>
                    <p class="text-gray-600 text-xs xl:text-lg md:text-base sm:text-sm">ระบบถูกออกแบบมาเพื่อให้มีความสะดวกและใช้งานง่ายทั้งผู้เรียนและผู้สอน ตั้งแต่ขั้นตอนลงทะเบียน และจบการเรียนการสอน</p>
                </div>
            </div>
            <div class="flex justify-center w-full">
                <img src="../../imgs/icon-3.png" class="w-6 h-6 xl:w-20 xl:h-20 lg:h-12 lg:w-12 md:w-8 md:h-8 sm:w-6 sm:h-6">
                <div class="flex flex-col pl-2 w-24 2xl:w-72 xl:w-64 lg:w-52 md:w-44 sm:w-36">
                    <p class="text-gray-700 text-sm font-bold xl:text-2xl lg:text-xl md:text-lg sm:text-base">มีวิชาให้เลือกเรียนที่หลากหลาย</p>
                    <p class="text-gray-600 text-xs xl:text-lg md:text-base sm:text-sm">เราได้รวบรวมวิชาเรียนทั้งแบบ Online และ On-site ที่ครอบคลุมและหลากหลายให้เลือกทั้งวิชาหลักและวิชาเสริม</p>
                </div>
            </div>
            <div class="flex justify-center w-full">
                <img src="../../imgs/icon-4.png" class="w-6 h-6 xl:w-20 xl:h-20 lg:h-12 lg:w-12 md:w-8 md:h-8 sm:w-6 sm:h-6">
                <div class="flex flex-col pl-2 w-24 2xl:w-72 xl:w-64 lg:w-52 md:w-44 sm:w-36">
                    <p class="text-gray-700 text-sm font-bold xl:text-2xl lg:text-xl md:text-lg sm:text-base">มีใบประกาศรับรองหลังจากเรียนจบ</p>
                    <p class="text-gray-600 text-xs xl:text-lg md:text-base sm:text-sm">หลังจากที่เรียนจบแล้วผู้เรียนสามารถขอใบประกาศรับรองการผ่านการเรียนได้</p>
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
                        <div class="flex relative justify-center text-center items-center w-32 h-32 bg-gradient-to-r from-blue-900 via-indigo-900 to-[#151F32] text-2xl font-extrabold text-slate-100 rounded-full duration-200 hover:hover:shadow-[#8daeec] hover:shadow-lg sm:w-32 sm:h-32">ศิลปะ</div>
                    </div>

                </div>
                <div class="flex flex-wrap space-x-10 sm:space-x-80 md:space-x-80 xl:space-x-96">
                    <div class="relative flex w-32 h-32 group sm:w-32 sm:h-32">
                        <button class="flex justify-center text-center items-center w-32 h-32 border-2 border-blue-300 text-2xl font-extrabold text-gray-600 rounded-full bg-white duration-200 shadow-lg group-hover:hover:shadow-[#8daeec] group-hover:shadow-lg sm:w-32 sm:h-32">ดนตรี</button>
                        
                    </div>
                    <div class="relative flex w-32 h-32 group sm:w-32 sm:h-32">
                        <div class="flex relative justify-center text-center items-center w-32 h-32 bg-gradient-to-r from-blue-900 via-indigo-900 to-[#151F32] text-2xl font-extrabold text-slate-100 rounded-full duration-200 hover:shadow-[#8daeec] hover:shadow-lg sm:w-32 sm:h-32">อื่นๆ</div>
                    </div>
                </div>
        </div>
            
        <div class="relative flex flex-col  text-center items-center p-4 pt-6 w-full h-auto space-y-4 bg-orange-100 sm:h-screen"> 
            <img src="../../imgs/bg_05.png" alt="" class="absolute w-20 h-20 top-0 left-0">
            <img src="../../imgs/bg_06.png" alt="" class="absolute w-20 h-20 top-0 right-0">
            <img src="../../imgs/bg_07.png" alt="" class="absolute w-20 h-20 bottom-0 left-0">
            <img src="../../imgs/bg_08.png" alt="" class="absolute w-20 h-20 bottom-0 right-0">    
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
                <div class="">
                    
                    <div class=" flex flex-wrap justify-between space-y-2 sm:flex-wrap ">
                        <div class="relative flex flex-wrap justify-center items-center w-3/5 px-2 py-1 space-x-4 border-4 border-indigo-900 rounded-full text-gray-600 text-3xl font-extrabold bg-white md:w-2/5 lg:w-2/6 xl:w-3/12">
                            <p >STEP 3</p>
                            <p class="text-xl font-extrabold text-gray-700 hidden sm:block">เลือกครูผู้สอน</p>
                            <img src="../../imgs/bear10_1.png" alt="" class="absolute w-20 h-20 -top-5 -right-10 hidden sm:block">
                        </div>
                        <div class="flex space-x-2 justify-end">
                            <select v-model="searchType" class="text-sm text-gray-600 rounded-lg h-10 mt-3 border-#151F32 shadow-md">
                                <option value="" selected="">ประเภทการสอน</option>
                                <option v-for="items in teacher" :key="items.id" :value="items.id">
                                    {{ items.teacher_name }}
                                </option>
                            </select>
                            <select v-model="searchType" class="text-sm text-gray-600 rounded-lg h-10 mt-3 border-#151F32 shadow-md">
                                <option value="" selected="">เลือกจังหวัด</option>
                                <option v-for="items in courses" :key="items.id" :value="items.id">
                                    {{ items.courses }}
                                </option>
                            </select>
                        </div>
                    </div>
                        <div class="flex flex-col mt-10">
                            <h1 class="w-44 text-xl font-extrabold p-3 bg-[#026292] text-white">วิชาภาษาอังกฤษ</h1>
                            <div class="w-full my-2 p-4 bg-[#CFDBDE] space-y-5">
                                <div class="flex flex-wrap items-center justify-center sm:justify-between sm:gap-20">
                                    <img src="../../imgs/BEARSKILL4.png" alt="" class="w-44 h-44">
                                    <div class="flex flex-col text-center">
                                        <h1 class="text-2xl font-bold">ครูบี</h1>
                                        <p class="text-lg text-gray-700 font-bold">ประสบการณ์ 5 ปี</p>
                                        <div class="grid grid-cols-2 text-gray-500 text-sm gap-1">
                                            <p>สอนออนไลน์</p><p>สอนออนไลน์</p><p>สอนออนไลน์</p>
                                        </div>
                                        จำนวนนักเรียนที่สอน<p class="text-[#026292]">(500)</p>
                                        <button type="button" class="bg-[#036594] text-white">ดูประวัติผู้สอน</button>
                                    </div>
                                    <div class="pt-3">
                                        <div class="grid grid-cols-3 justify-center items-center gap-3 text-white text-sm font-bold">
                                            <div class="bg-[#026292] py-1 px-4 rounded-lg">คอร์ส SPEAKING</div>
                                            <div class="bg-[#026292] py-1 px-4 rounded-lg">คอร์ส TOEIC</div>
                                            <div class="bg-[#026292] py-1 px-4 rounded-lg">คอร์ส GRAMMAR</div>
                                            <div class="bg-[#026292] py-1 px-4 rounded-lg">คอร์ส สอบเข้ามหาลัย</div>
                                            <div class="bg-[#026292] py-1 px-4 rounded-lg">คอร์ส ปูพื้นฐาน</div>
                                            <div class="bg-[#026292] py-1 px-4 rounded-lg">คอร์ส บริหารธุรกิจ</div>
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
        </div>

        <footer class="bg-gradient-to-t from-blue-900 via-indigo-900 to-[#151F32]">
                <div class="flex pt-5 justify-between w-full h-44 text-white sm:px-1 md:px-2 lg:px-16">
                    <div class="w-20 h-20"><img src="../../imgs/bear2.png" alt=""></div>
                    <div class="flex flex-col w-2/4 lg:w-56 xl:w-80">
                        <h1 class="text-lg  sm:text-xl">Bear Skill</h1>
                        <p class="text-xs sm:text-base">Bear your skill for the future.</p>
                        <p>แพลตฟอร์มหาติวเตอร์ทั้งแบบออนไลน์และนัดสอนนอกสถานที่</p>
                    </div>
                    <div class="w-1/4 text-xs sm:text-sm">
                        <p>คอร์สออนไลน์</p>
                        <p>คอร์ส On-site</p>
                        <p>คอร์สสำหรับสอบเข้ามหาลัย</p>
                        <p>คอร์สสำหรับสอบเข้าม.ปลาย</p>
                    </div>
                    <div  class="w-1/4 text-xs sm:text-sm">
                        <p>บล็อค</p>
                        <p>เกี่ยวกับเรา</p>
                        <p>ติดต่อเรา</p>
                    </div>
                </div>
        </footer>
        </div>
    </LayoutPage>
</template>

<style></style>
