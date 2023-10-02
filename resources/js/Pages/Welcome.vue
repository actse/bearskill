<script setup>
import { Head, Link } from "@inertiajs/vue3";
import LayoutPage from "@/Layouts/LayoutPage.vue";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";

</script>

<template>
    <LayoutPage>
       
        <!-- background-animate -->
        <div class="fixed top-4 left-4 flex items-center justify-center bg-gray-100 border-2 border-gray-400 w-24 h-16 rounded-xl">
            <span class="sm:hidden">Mobile</span>
            <span class="hidden sm:block md:hidden">SM</span>
            <span class="hidden md:block lg:hidden">MD</span>
            <span class="hidden lg:block xl:hidden">LG</span>
            <span class="hidden xl:block 2xl:hidden">XL</span>
            <span class="hidden 2xl:block">2XL</span>
        </div>
        <div class="max-w-full mx-auto h-[470px] bg-gradient-to-r from-blue-900 via-indigo-900 to-[#151F32]  overflow-hidden">
            <div class="relative flex justify-center w-full h-full">
                <img src="../../imgs/BEARSKILL1.png" class="absolute w-80 h-96 left-80 bottom-0 md:left-28 lg:left-44 xl:left-64 2xl:left-90 hidden md:block " alt="#">
                <img src="../../imgs/BEAR1.png" alt="#" class="absolute w-60 bottom-0 right-72">
                <div class="flex ">
                    <img src="../../imgs/bg-h-l.png" class="absolute left-0">
                    <img src="../../imgs/bg-h-r.png" class="absolute right-4">
                </div>
                <div class="flex justify-center absolute bottom-36">
                    <div class=" w-96 hidden md:block ">
                    </div>
                    <div class="flex flex-wrap py-4">
                        <div class="flex flex-col pl-2 text-white font-bold ">
                            <div class="space-y-3">
                                <div class="flex flex-wrap animate-pulse space-x-5 text-3xl sm:text-3xl md:text-2xl lg:text-3xl xl:text-4xl 2xl:text-5xl">
                                    <a href=""><p class=" transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 border-b-2 hover:text-orange-400 hover:border-orange-400 duration-150">หาติวเตอร์ที่ใช่</p></a>
                                    <span>|</span>
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
        <div class="flex w-full h-h-auto px-10 py-12 sm:px-2">
            <div class="flex justify-center w-full">
                <img src="../../imgs/icon-1.png" class="w-20 h-20 lg:h-12 lg:w-12 md:w-8 md:h-8 sm:w-6 sm:h-6">
                <div class="flex flex-col pl-2 w-56 2xl:w-72 xl:w-64 lg:w-52 md:w-44 sm:w-36">
                    <p class="text-gray-700 text-2xl font-bold lg:text-xl md:text-lg sm:text-base">ระบบรับรองความปลอดภัย</p>
                    <p class="text-gray-600 text-lg md:text-base sm:text-sm">เว็บไซด์ของเรามีระบบรับรองคุณภาพและความปลอดภัยทั่งผู้เรียนและผู้สอนมีระบบรีวิวและรีพอร์ทพร้อมดูแลตลอด 24 ชม.</p>
                </div>
            </div>
            <div class="flex justify-center w-full">
                <img src="../../imgs/icon-2.png" class="w-20 h-20 lg:h-12 lg:w-12 md:w-8 md:h-8 sm:w-6 sm:h-6">
                <div class="flex flex-col pl-2 w-56 2xl:w-72 xl:w-64 lg:w-52 md:w-44 sm:w-36">
                    <p class="text-gray-700 text-2xl font-bold lg:text-xl md:text-lg sm:text-base">User friendly สะดวกใช้งานง่าย</p>
                    <p class="text-gray-600 text-lg md:text-base sm:text-sm">ระบบถูกออกแบบมาเพื่อให้มีความสะดวกและใช้งานง่ายทั้งผู้เรียนและผู้สอน ตั้งแต่ขั้นตอนลงทะเบียน และจบการเรียนการสอน</p>
                </div>
            </div>
            <div class="flex justify-center w-full">
                <img src="../../imgs/icon-3.png" class="w-20 h-20 lg:h-12 lg:w-12 md:w-8 md:h-8 sm:w-6 sm:h-6">
                <div class="flex flex-col pl-2 w-56 2xl:w-72 xl:w-64 lg:w-52 md:w-44 sm:w-36">
                    <p class="text-gray-700 text-2xl font-bold lg:text-xl md:text-lg sm:text-base">มีวิชาให้เลือกเรียนที่หลากหลาย</p>
                    <p class="text-gray-600 text-lg md:text-base sm:text-sm">เราได้รวบรวมวิชาเรียนทั้งแบบ Online และ On-site ที่ครอบคลุมและหลากหลายให้เลือกทั้งวิชาหลักและวิชาเสริม</p>
                </div>
            </div>
            <div class="flex justify-center w-full">
                <img src="../../imgs/icon-4.png" class="w-20 h-20 lg:h-12 lg:w-12 md:w-8 md:h-8 sm:w-6 sm:h-6">
                <div class="flex flex-col pl-2 w-56 2xl:w-72 xl:w-64 lg:w-52 md:w-44 sm:w-36">
                    <p class="text-gray-700 text-2xl font-bold lg:text-xl md:text-lg sm:text-base">มีใบประกาศรับรองหลังจากเรียนจบ</p>
                    <p class="text-gray-600 text-lg md:text-base sm:text-sm">หลังจากที่เรียนจบแล้วผู้เรียนสามารถขอใบประกาศรับรองการผ่านการเรียนได้</p>
                </div>
            </div>
        </div>
        <div class="w-full bg-gray-200">
            <Slider />
        </div>

            <div class="relative flex flex-col  text-center items-center p-6 w-full h-screen space-y-4">
                <div class="px-10 py-1 border-2 border-teal-500 rounded-full text-gray-600 text-3xl font-extrabold">STEP 1</div>
                <p class="text-3xl font-extrabold text-gray-500">เลือกหมวดหมู่วิชาเรียน</p>
                <img src="../../imgs/BEARSKILL3.png" alt="#" class="absolute h-[500px] bottom-0">
                <div class="flex flex-wrap space-x-40 ">
                    <div class="relative flex w-44 h-44 group ">
                        <button class="flex justify-center text-center items-center w-40 h-40 border border-teal-500 text-3xl font-extrabold text-gray-600 rounded-full bg-white duration-200 shadow-lg group-hover:shadow-teal-400 group-hover:shadow-lg">วิชาหลัก</button>
                        <img src="../../imgs/bear3.png" alt="#" class="absolute w-44 h-44 hover:animate-bounce -left-36 opacity-0 transition-opacity duration-300 group-hover:opacity-100">
                        
                    </div>
                    <div class="relative flex w-44 h-44 group">
                        <button class="flex relative justify-center text-center items-center w-40 h-40 bg-gradient-to-r from-emerald-400 to-cyan-400 text-3xl font-extrabold text-gray-700 rounded-full shadow-lg duration-200 hover:shadow-teal-500 hover:shadow-lg">ภาษา</button>
                        <img src="../../imgs/bear6.png" alt="#" class="absolute w-44 h-44 hover:animate-bounce left-40 opacity-0 transition-opacity duration-300 group-hover:opacity-100">  
                    </div>
                    
                </div>
                <div class="flex flex-wrap space-x-72">
                    <div class="relative flex w-44 h-44 group">
                        <button class="flex justify-center text-center items-center w-40 h-40 border border-teal-500 text-3xl font-extrabold text-gray-600 rounded-full bg-white duration-200 shadow-lg group-hover:shadow-teal-400 group-hover:shadow-lg">วิชาหลัก</button>
                        <img src="../../imgs/bear4.png" alt="#" class="absolute w-44 h-44 hover:animate-bounce -left-36 opacity-0 transition-opacity duration-300 group-hover:opacity-100">
                        
                    </div>
                    <div class="relative flex w-44 h-44 group">
                        <div class="flex relative justify-center text-center items-center w-40 h-40 bg-gradient-to-r from-emerald-400 shadow-lg to-cyan-400 text-3xl font-extrabold text-gray-700 rounded-full duration-200 hover:shadow-teal-500 hover:shadow-lg">ภาษา</div>
                        <img src="../../imgs/bear2.png" alt="#" class="absolute w-44 h-44 hover:animate-bounce left-40 opacity-0 transition-opacity duration-300 group-hover:opacity-100">  
                    </div>

                </div>
                <div class="flex flex-wrap space-x-96">
                    <div class="relative flex w-44 h-44 group">
                        <button class="flex justify-center text-center items-center w-40 h-40 border border-teal-500 text-3xl font-extrabold text-gray-600 rounded-full bg-white duration-200 shadow-lg group-hover:shadow-teal-400 group-hover:shadow-lg">วิชาหลัก</button>
                        <img src="../../imgs/bear5.png" alt="#" class="absolute w-44 h-44 hover:animate-bounce -left-36 opacity-0 transition-opacity duration-300 group-hover:opacity-100">
                        
                    </div>
                    <div class="relative flex w-44 h-44 group">
                        <div class="flex relative justify-center text-center items-center w-40 h-40 bg-gradient-to-r from-emerald-400 shadow-lg to-cyan-400 text-3xl font-extrabold text-gray-700 rounded-full duration-200 hover:shadow-teal-500 hover:shadow-lg">ภาษา</div>
                        <img src="../../imgs/bear2.png" alt="#" class="absolute w-44 h-44 hover:animate-bounce left-40 opacity-0 transition-opacity duration-300 group-hover:opacity-100">  
                    </div>
                </div>
            </div>
            
            <div class=" flex flex-col  text-center items-center p-6 pt-20 w-full h-screen space-y-4 bg-orange-100"> 
                <div class="px-10 py-1 border-2 border-teal-500 rounded-full text-gray-600 text-3xl font-extrabold bg-white">STEP 2</div>
                <p class="text-3xl font-extrabold text-gray-700">เลือกวิชาที่ต้องการเรียน</p>
                <div class=" w-full h-full">
                    <div class="relative flex flex-wrap w-wull space-x-6 p-5 ">
                        <div class=" flex flex-col space-y-4 text-gray-600 pl-44">
                            <button type="button" class="py-2 px-10 text-2xl font-bold border rounded-xl shadow-lg bg-white focus:bg-slate-200 focus:border-slate-600">ภาษาอังกฤษ</button>
                            <button type="button" class="py-2 px-10 text-2xl font-bold border rounded-xl shadow-lg bg-white focus:bg-slate-200 focus:border-slate-600">ภาษาฝรั่งเศส</button>
                            <button type="button" class="py-2 px-10 text-2xl font-bold border rounded-xl shadow-lg bg-white focus:bg-slate-200 focus:border-slate-600">ภาษาสเปน</button>
                            <button type="button" class="py-2 px-10 text-2xl font-bold border rounded-xl shadow-lg bg-white focus:bg-slate-200 focus:border-slate-600">ภาษาเยอรมัน</button>
                            <button type="button" class="py-2 px-10 text-2xl font-bold border rounded-xl shadow-lg bg-white focus:bg-slate-200 focus:border-slate-600">ภาษาอาหรับ</button>
                        </div>
                        <div class="flex flex-col space-y-4 text-gray-200">
                            <button type="button" class="py-2 px-10 text-2xl font-bold border rounded-xl shadow-lg bg-slate-900 focus:bg-white focus:text-gray-600 focus:border-slate-600">ภาษาจีน</button>
                            <button type="button" class="py-2 px-10 text-2xl font-bold border rounded-xl shadow-lg bg-slate-900 focus:bg-white focus:text-gray-600 focus:border-slate-600">ภาษาเกาหลี</button>
                            <button type="button" class="py-2 px-10 text-2xl font-bold border rounded-xl shadow-lg bg-slate-900 focus:bg-white focus:text-gray-600 focus:border-slate-600">ภาษาเกาหลี</button>
                            <button type="button" class="py-2 px-10 text-2xl font-bold border rounded-xl shadow-lg bg-slate-900 focus:bg-white focus:text-gray-600 focus:border-slate-600">ภาษารัสเซีย</button>
                            <button type="button" class="py-2 px-10 text-2xl font-bold border rounded-xl shadow-lg bg-slate-900 focus:bg-white focus:text-gray-600 focus:border-slate-600">ภาษาอื่นๆ</button>
                        </div>
                        <div class="relative flex flex-col items-center justify-center w-2/4">
                            <div class="bg-"></div>
                            <img src="../../imgs/bear7.png" alt="#" class="absolute w-96 h-96 ">
                        </div>
                    </div>
                </div>
                
            </div>

            <div class="flex flex-col p-6 space-y-4 h-screen">
                <div>
                    <div class=" flex flex-wrap items-center w-full space-x-10 ">
                        <div class=""><p class="px-10 py-3 border-2 border-teal-500 rounded-full text-gray-600 text-3xl font-extrabold bg-white">STEP 3</p></div>
                        <div class="flex flex-col space-y-5">
                            <p class="text-3xl font-extrabold text-gray-700">เลือกครูผู้สอน</p>
                        </div>
                        <div class="relative w-44 -top-28">
                            <img src="../../imgs/bear10_1.png" alt="" class="absolute w-44 h-44 top-0">
                        </div>
                        <div class="flex w-2/4 text-right space-x-1 justify-end">
                            <input v-model="searchName" placeholder="Search name..." class="mt-3 rounded-lg h-10 border-teal-500 shadow-md"/>
                            <select v-model="searchType" class="text-sm text-gray-600 rounded-lg h-10 mt-3 border-teal-500 shadow-md">
                                <option value="" selected="">ประเภทการสอน</option>
                                <option v-for="items in teacher" :key="items.id" :value="items.id">
                                    {{ items.teacher_name }}
                                </option>
                            </select>
                            <select v-model="searchType" class="text-sm text-gray-600 rounded-lg h-10 mt-3 border-teal-500 shadow-md">
                                <option value="" selected="">เลือกจังหวัด</option>
                                <option v-for="items in courses" :key="items.id" :value="items.id">
                                    {{ items.courses }}
                                </option>
                            </select>
                        </div>
                    </div>
                        <div class="flex flex-col mt-20">
                            <h1 class="w-44 text-xl font-extrabold p-3 bg-[#026292] text-white">วิชาภาษาอังกฤษ</h1>
                            <div class="w-full my-2 p-4 bg-[#CFDBDE] space-y-5">
                                <div class="flex flex-wrap">
                                    <img src="../../imgs/BEARSKILL4.png" alt="" class="w-44 h-44 mr-10">
                                    <div class="flex flex-col space-y-0">
                                        <h1 class="text-4xl font-bold">ครูบี</h1>
                                        <p class="text-lg text-gray-700 font-bold">ประสบการณ์ 5 ปี</p>
                                        <div class="grid grid-cols-2 text-gray-500 text-sm gap-1">
                                            <p>สอนออนไลน์</p><p>สอนออนไลน์</p><p>สอนออนไลน์</p>
                                        </div>
                                        <button type="button" class="bg-[#036594] text-white">ดูประวัติผู้สอน</button>
                                    </div>
                                    <div class="px-5 ml-36">
                                        <div class="grid grid-cols-3 justify-center items-center gap-4 text-white text-lg font-bold">
                                            <div class="bg-[#026292] py-1 px-4 rounded-lg">คอร์ส SPEAKING</div>
                                            <div class="bg-[#026292] py-1 px-4 rounded-lg">คอร์ส SPEAKING</div>
                                            <div class="bg-[#026292] py-1 px-4 rounded-lg">คอร์ส SPEAKING</div>
                                            <div class="bg-[#026292] py-1 px-4 rounded-lg">คอร์ส SPEAKING</div>
                                            <div class="bg-[#026292] py-1 px-4 rounded-lg">คอร์ส SPEAKING</div>
                                            <div class="bg-[#026292] py-1 px-4 rounded-lg">คอร์ส SPEAKING</div>
                                            <div class="bg-[#026292] py-1 px-4 rounded-lg">คอร์ส SPEAKING</div>
                                            <div class="bg-[#026292] py-1 px-4 rounded-lg">คอร์ส SPEAKING</div>
                                        </div>
                                    </div>
                                    <div class="mx-auto flex items-center justify-center ml-28 ">
                                        <div class=" text-xl text-gray-600 font-bold ">
                                            <p>ติดต่อครู</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex flex-wrap">
                                    <img src="../../imgs/BEARSKILL5.png" alt="" class="w-44 h-44 mr-10">
                                    <div class="flex flex-col space-y-0">
                                        <h1 class="text-4xl font-bold">ครูบี</h1>
                                        <p class="text-lg text-gray-700 font-bold">ประสบการณ์ 5 ปี</p>
                                        <div class="grid grid-cols-2 text-gray-500 text-sm gap-1">
                                            <p>สอนออนไลน์</p><p>สอนออนไลน์</p><p>สอนออนไลน์</p>
                                        </div>
                                        <button type="button" class="bg-[#036594] text-white">ดูประวัติผู้สอน</button>
                                    </div>
                                    <div class="px-5 ml-36">
                                        <div class="grid grid-cols-3 justify-center items-center gap-4 text-white text-lg font-bold">
                                            <div class="bg-[#026292] py-1 px-4 rounded-lg">คอร์ส SPEAKING</div>
                                            <div class="bg-[#026292] py-1 px-4 rounded-lg">คอร์ส SPEAKING</div>
                                            <div class="bg-[#026292] py-1 px-4 rounded-lg">คอร์ส SPEAKING</div>
                                            <div class="bg-[#026292] py-1 px-4 rounded-lg">คอร์ส SPEAKING</div>
                                            <div class="bg-[#026292] py-1 px-4 rounded-lg">คอร์ส SPEAKING</div>
                                            <div class="bg-[#026292] py-1 px-4 rounded-lg">คอร์ส SPEAKING</div>
                                            <div class="bg-[#026292] py-1 px-4 rounded-lg">คอร์ส SPEAKING</div>
                                            <div class="bg-[#026292] py-1 px-4 rounded-lg">คอร์ส SPEAKING</div>
                                        </div>
                                    </div>
                                    <div class="mx-auto flex items-center justify-center ml-28 ">
                                        <div class=" text-xl text-gray-600 font-bold ">
                                            <p>ติดต่อครู</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>

            <footer class="bg-gradient-to-t from-blue-900 via-indigo-900 to-[#151F32]">
                <div class="flex items-center justify-between w-full h-44 px-56 text-white sm:px-1 md:px-2 lg:px-16">
                    <div class="w-44 h-44"><img src="../../imgs/bear2.png" alt=""></div>
                    <div class="flex flex-col lg:w-56 xl:w-80">
                        <h1 class="text-3xl  sm:text-xl">Bear Skill</h1>
                        <p class="text-lg  sm:text-base">Bear your skill for the future.</p>
                        <p>แพลตฟอร์มหาติวเตอร์ทั้งแบบออนไลน์และนัดสอนนอกสถานที่</p>
                    </div>
                    <div class=" sm:text-sm">
                        <p>คอร์สออนไลน์</p>
                        <p>คอร์ส On-site</p>
                        <p>คอร์สสำหรับสอบเข้ามหาลัย</p>
                        <p>คอร์สสำหรับสอบเข้าม.ปลาย</p>
                    </div>
                    <div  class="sm:text-sm">
                        <p>บล็อค</p>
                        <p>เกี่ยวกับเรา</p>
                        <p>ติดต่อเรา</p>
                    </div>
                </div>
            </footer>
    </LayoutPage>
</template>

<style></style>
