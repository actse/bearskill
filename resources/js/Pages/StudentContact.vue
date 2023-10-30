<script setup>
import Checkbox from "@/Components/Checkbox.vue";
import GuestLayout from "@/Layouts/StudentLaout.vue";
import InputError from "@/Components/InputError.vue";
import InputLabel from "@/Components/InputLabel.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import TextInput from "@/Components/TextInput.vue";
import { Head, Link, useForm } from "@inertiajs/vue3";
</script>
<template>
    <GuestLayout>
        <div class="w-full md:w-3/12 md:mx-2">
        <div class="bg-white">
            <header class="bg-gradient-to-r from-[#1c2942] to-[#151F32] transform flex items-center mb-5 py-6 px-6 sm:rounded-t-md">
            <img class="rounded-full w-20 h-20 ring-4 ring-opacity-80 ring-indigo-900" src="https://randomuser.me/api/portraits/women/79.jpg" alt="Dr. Jessica James">
            <div class="ml-5">
                <h1 class="text-white tracking-wide text-lg">Dr. Jessica James</h1>
            <p class="text-gray-300 tracking-wider text-sm">Dermathologist</p>
            </div>
            </header>
            <button class="text-white capitalize text-sm bg-gradient-to-r from-[#1c2942] to-[#151F32] inline-block rounded-md flex items-center py-2 pl-3 pr-4 shadow-md mx-auto tracking-wider mb-5"><svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path></svg> หาครูสอนพิเศษ</button>
            <ul class="px-8 relative pb-5">
            <li class="flex group items-center px-2 text-gray-900 text-md py-4 hover:bg-gray-200 duration-300 rounded-lg"><span class="text-gray-400 mr-5"><svg class="w-7 h-7 group-hover:text-gray-900 group-focus:text-gray-900" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17V7m0 10a2 2 0 01-2 2H5a2 2 0 01-2-2V7a2 2 0 012-2h2a2 2 0 012 2m0 10a2 2 0 002 2h2a2 2 0 002-2M9 7a2 2 0 012-2h2a2 2 0 012 2m0 10V7m0 10a2 2 0 002 2h2a2 2 0 002-2V7a2 2 0 00-2-2h-2a2 2 0 00-2 2"></path></svg></span> บัญชีผู้ใช้</li>

            <li class="flex group items-center px-2 text-gray-900 text-md py-4 hover:bg-gray-200 duration-300 rounded-lg"><span class="text-gray-400 mr-5"><svg class="w-6 h-6 group-hover:text-gray-900 group-focus:text-gray-900" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 4v12l-4-2-4 2V4M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg></span> โพสหาครู</li>
            <li class="flex group items-center px-2 text-gray-900 text-md py-4 hover:bg-gray-200 duration-300 rounded-lg"><span class="text-gray-400 mr-5"><svg class="w-6 h-6 group-hover:text-gray-900 group-focus:text-gray-900" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 4v12l-4-2-4 2V4M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg></span> คอร์สเรียนทั้งหมด</li>

            <li class="flex group items-center px-2 text-gray-900 text-md py-4 hover:bg-gray-200 duration-300 rounded-lg"><span class="text-gray-400 mr-5"><svg class="w-6 h-6 group-hover:text-gray-900 group-focus:text-gray-900" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path></svg></span> ประวัติการเรียน</li>
                <div class="py-5 border-t-2 border-gray-200">
                    <button class="flex group w-full items-center px-3 text-gray-900 space-x-4 text-md py-4 hover:bg-gray-200 duration-300 rounded-lg">
                        <svg aria-hidden="true" data-fa="far-arrow-right-from-bracket" role="img" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg" class="w-5 text-danger-main desktop:w-5"><path d="M505 273c9.4-9.4 9.4-24.6 0-33.9L377 111c-9.4-9.4-24.6-9.4-33.9 0s-9.4 24.6 0 33.9l87 87L184 232c-13.3 0-24 10.7-24 24s10.7 24 24 24l246.1 0-87 87c-9.4 9.4-9.4 24.6 0 33.9s24.6 9.4 33.9 0L505 273zM168 80c13.3 0 24-10.7 24-24s-10.7-24-24-24L88 32C39.4 32 0 71.4 0 120L0 392c0 48.6 39.4 88 88 88l80 0c13.3 0 24-10.7 24-24s-10.7-24-24-24l-80 0c-22.1 0-40-17.9-40-40l0-272c0-22.1 17.9-40 40-40l80 0z" fill="#ea4335"></path></svg>
                        <p>ออกจากระบบ</p>
                    </button>
                </div>
            </ul>
        </div>
        </div>
        
    <div class="w-full md:w-8/12 px-2 md:mx-2 md:mb-5 h-auto ">
        
        <div class="  w-full border-b-4 border-gray-200 md:my-5 py-4 px-2 "><span class="tracking-wide text-2xl text-blue-800">ประวัติการติดต่อ</span></div>

      <div class=" px-1 py-2 w-full">
          <div class="flex flex-col items-center space-y-3 w-full text-gray-900 leading-8">
            <div v-for="contact in contacts" :key="contact" class="flex flex-wrap items-center justify-center w-full space-x-2 py-4 px-3 bg-white shadow-md md:border-2 border-slate-200 rounded-lg">
                <div class="w-2/12 md:w-2/12">
                    <img class="rounded-full w-11 h-11 md:w-14 md:h-14 ring-2 ring-opacity-80 ring-indigo-900" :src="contact.teacher_imgs" alt="Dr. Jessica James">
                </div>
                <div class="flex flex-col text-sm md:text-base text-gray-700 w-7/12 md:w-8/12">
                    <div class="text-sm text-blue-800"><span>{{ contact.subject_name }}</span></div>
                    <div class="text-xs text-gray-500"><span>{{contact.teacher_name}}</span></div>
                </div>  
                <button>
                    <img class="w-10 h-10 md:w-14 md:h-14" src="../../imgs/phone.svg" alt="#">
                </button> 
            </div>
            
          </div>
          
      </div>
  </div>
    </GuestLayout>
</template>

<script>
export default {
  data() {
    return {
      contacts: [
                {
                    id: 1,
                    teacher_imgs: "https://randomuser.me/api/portraits/women/79.jpg",
                    subject_name: "สร้างคาแรกเตอร์ให้โดดเด่นมีเอกลักษณ์แบบ Fatlipz",
                    teacher_name: "Benjarong Pisuthnoraseth",
                },
                {
                    id: 2,
                    teacher_imgs: "https://randomuser.me/api/portraits/women/79.jpg",
                    subject_name: "สร้างคาแรกเตอร์ให้โดดเด่นมีเอกลักษณ์แบบ Fatlipz",
                    teacher_name: "Benjarong Pisuthnoraseth",
                },
                {
                    id: 3,
                    teacher_imgs: "https://randomuser.me/api/portraits/women/79.jpg",
                    subject_name: "สร้างคาแรกเตอร์ให้โดดเด่นมีเอกลักษณ์แบบ Fatlipz",
                    teacher_name: "Benjarong Pisuthnoraseth",
                },
                {
                    id: 4,
                    teacher_imgs: "https://randomuser.me/api/portraits/women/79.jpg",
                    subject_name: "สร้างคาแรกเตอร์ให้โดดเด่นมีเอกลักษณ์แบบ Fatlipz",
                    teacher_name: "Benjarong Pisuthnoraseth",
                },
    ],
    };
  },
};
</script>

<style>

</style>