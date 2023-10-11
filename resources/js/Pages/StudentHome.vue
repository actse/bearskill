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
    <!-- <div class="max-w-md">
      <div class="min-w-min">
        <img src="" alt=""><h1 class="text-gray-800 text-xl font-bold pb-2">Proflie</h1>
        <p class="text-gray-600">ตั้งค่าบัญชี</p>
        <div class="border-t border-gray-300 py-2">
            <ul class="space-y-1">
                <li>บัญชีของฉัน</li>
                <li>ประวัติการเรียน</li>
            </ul>
        </div>
        <div class="border-t border-gray-300 pt-2">
            <button class="flex items-center justify-center space-x-2">
              <svg aria-hidden="true" data-fa="far-arrow-right-from-bracket" role="img" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg" class="w-4 text-danger-main desktop:w-5"><path d="M505 273c9.4-9.4 9.4-24.6 0-33.9L377 111c-9.4-9.4-24.6-9.4-33.9 0s-9.4 24.6 0 33.9l87 87L184 232c-13.3 0-24 10.7-24 24s10.7 24 24 24l246.1 0-87 87c-9.4 9.4-9.4 24.6 0 33.9s24.6 9.4 33.9 0L505 273zM168 80c13.3 0 24-10.7 24-24s-10.7-24-24-24L88 32C39.4 32 0 71.4 0 120L0 392c0 48.6 39.4 88 88 88l80 0c13.3 0 24-10.7 24-24s-10.7-24-24-24l-80 0c-22.1 0-40-17.9-40-40l0-272c0-22.1 17.9-40 40-40l80 0z" fill="#ea4335"></path></svg>
              <p>ออกจากระบบ</p>
            </button>
        </div>
      </div>
    </div> 
 Icon 6
    <div>
      <button class="relative group">
        <div class="relative flex overflow-hidden items-center justify-center rounded-full w-[50px] h-[50px] transform transition-all bg-slate-700 ring-0 ring-gray-300 hover:ring-8 group-focus:ring-4 ring-opacity-30 duration-200 shadow-md">
          <div class="flex flex-col justify-between w-[20px] h-[20px] transform transition-all duration-300 origin-center overflow-hidden">
            <div class="bg-white h-[2px] w-7 transform transition-all duration-300 origin-left group-focus:translate-x-10"></div>
            <div class="bg-white h-[2px] w-7 rounded transform transition-all duration-300 group-focus:translate-x-10 delay-75"></div>
            <div class="bg-white h-[2px] w-7 transform transition-all duration-300 origin-left group-focus:translate-x-10 delay-150"></div>

            <div class="absolute items-center justify-between transform transition-all duration-500 top-2.5 -translate-x-10 group-focus:translate-x-0 flex w-0 group-focus:w-12">
              <div class="absolute bg-white h-[2px] w-5 transform transition-all duration-500 rotate-0 delay-300 group-focus:rotate-45"></div>
              <div class="absolute bg-white h-[2px] w-5 transform transition-all duration-500 -rotate-0 delay-300 group-focus:-rotate-45"></div>
            </div>
          </div>
        </div>
      </button>
    </div>
  <div class="flex min-h-min sm:gap-5 ">
  <div class="bg-white shadow-lg min-w-full sm:min-w-0 sm:max-w-xs sm:rounded-xl mx-auto relative" >
    <header class="bg-gradient-to-r from-[#1c2942] to-[#151F32] transform flex items-center mb-10 py-8 px-6 sm:rounded-tl-10 sm:rounded-tr-10 sm:rounded-br-0 sm:rounded-bl-55">
      <img class="rounded-full w-20 h-20 ring-4 ring-opacity-80 ring-indigo-900" src="https://randomuser.me/api/portraits/women/79.jpg" alt="Dr. Jessica James">
    <div class="ml-5">
        <h1 class="text-white tracking-wide text-lg">Dr. Jessica James</h1>
      <p class="text-gray-300 tracking-wider text-sm">Dermathologist</p>
    </div>
    </header>
    <button class="text-white capitalize text-sm bg-gradient-to-r from-[#1c2942] to-[#151F32] inline-block rounded-md flex items-center py-2 pl-3 pr-4 shadow-md mx-auto tracking-wider mb-5"><svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path></svg> หาครูสอนพิเศษ</button>
    
  <ul class="px-8 relative pb-5">
    <li class="flex group items-center px-2 text-gray-900 text-md py-4 hover:bg-gray-200 duration-300 rounded-lg"><span class="text-gray-400 mr-5"><svg class="w-7 h-7 group-hover:text-gray-900 group-focus:text-gray-900" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17V7m0 10a2 2 0 01-2 2H5a2 2 0 01-2-2V7a2 2 0 012-2h2a2 2 0 012 2m0 10a2 2 0 002 2h2a2 2 0 002-2M9 7a2 2 0 012-2h2a2 2 0 012 2m0 10V7m0 10a2 2 0 002 2h2a2 2 0 002-2V7a2 2 0 00-2-2h-2a2 2 0 00-2 2"></path></svg></span> บัญชีผู้ใช้</li>

    <li class="flex group items-center px-2 text-gray-900 text-md py-4 hover:bg-gray-200 duration-300 rounded-lg"><span class="text-gray-400 mr-5"><svg class="w-6 h-6 group-hover:text-gray-900 group-focus:text-gray-900" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 4v12l-4-2-4 2V4M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg></span> คอร์สเรียนทั้งหมด</li>

    <div class="bg-[#151F32] w-1 h-14 absolute left-0" style="bottom:8.235rem;"></div>

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
<div class="bg-white w-full shadow-lg rounded-xl sm:min-w-full mx-auto py-7">
      Name
      <input
      class="w-full px-8 py-4 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white"
      id="name" type="text"  required autofocus autocomplete="name" placeholder="Name" />
    Name
     <input
      class="w-full px-8 py-4 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white"
      id="name" type="text"  required autofocus autocomplete="name" placeholder="Name" />
</div>  -->




<div class="container mx-auto">
  <div class="md:flex no-wrap md:-mx-2 ">
    <div class="w-full md:w-3/12 md:mx-2">
      
      <div class="bg-white sm:p-3">
        <header class="bg-gradient-to-r from-[#1c2942] to-[#151F32] transform flex items-center mb-10 py-8 px-6 sm:rounded-tl-10 sm:rounded-tr-10 sm:rounded-br-0 sm:rounded-bl-55">
          <img class="rounded-full w-20 h-20 ring-4 ring-opacity-80 ring-indigo-900" src="https://randomuser.me/api/portraits/women/79.jpg" alt="Dr. Jessica James">
        <div class="ml-5">
            <h1 class="text-white tracking-wide text-lg">Dr. Jessica James</h1>
          <p class="text-gray-300 tracking-wider text-sm">Dermathologist</p>
        </div>
        </header>
        <button class="text-white capitalize text-sm bg-gradient-to-r from-[#1c2942] to-[#151F32] inline-block rounded-md flex items-center py-2 pl-3 pr-4 shadow-md mx-auto tracking-wider mb-5"><svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path></svg> หาครูสอนพิเศษ</button>
        <ul class="px-8 relative pb-5">
          <li class="flex group items-center px-2 text-gray-900 text-md py-4 hover:bg-gray-200 duration-300 rounded-lg"><span class="text-gray-400 mr-5"><svg class="w-7 h-7 group-hover:text-gray-900 group-focus:text-gray-900" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17V7m0 10a2 2 0 01-2 2H5a2 2 0 01-2-2V7a2 2 0 012-2h2a2 2 0 012 2m0 10a2 2 0 002 2h2a2 2 0 002-2M9 7a2 2 0 012-2h2a2 2 0 012 2m0 10V7m0 10a2 2 0 002 2h2a2 2 0 002-2V7a2 2 0 00-2-2h-2a2 2 0 00-2 2"></path></svg></span> บัญชีผู้ใช้</li>

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
    <div class="w-full md:w-9/12 mx-2 h-64"></div>
  </div>
</div>

  </GuestLayout>
</template>

<script>
export default {

}
</script>

<style>

</style>