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
    <GuestLayout>
      <div class="w-full md:w-3/12 md:mx-2">
   HEAD
          <div class="bg-white">
          <header class="bg-gradient-to-r from-[#1c2942] to-[#151F32] transform flex items-center mb-5 py-6 px-6 sm:rounded-t-lg">
  =======
        <div class="bg-white">
        <header class="bg-gradient-to-r from-[#1c2942] to-[#151F32] transform flex items-center mb-5 py-6 px-6 sm:rounded-t-lg">
          <img class="rounded-full w-20 h-20 ring-4 ring-opacity-80 ring-indigo-900" src="https://randomuser.me/api/portraits/women/79.jpg" alt="Dr. Jessica James">
        <div class="ml-5">
            <h1 class="text-white tracking-wide text-lg">Dr. Jessica James</h1>
          <p class="text-gray-300 tracking-wider text-sm">Dermathologist</p>
        </div>
        </header>
        <button class="text-white capitalize text-sm bg-gradient-to-r from-[#1c2942] to-[#151F32] inline-block rounded-md items-center py-2 pl-3 pr-4 shadow-md mx-auto tracking-wider mb-5"><svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path></svg> หาครูสอนพิเศษ</button>
        <ul class="px-8 relative pb-5">
          <li class="flex group items-center px-2 text-gray-900 text-md py-4 hover:bg-gray-200 duration-300 rounded-lg"><span class="text-gray-400 mr-5"><svg class="w-7 h-7 group-hover:text-gray-900 group-focus:text-gray-900" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17V7m0 10a2 2 0 01-2 2H5a2 2 0 01-2-2V7a2 2 0 012-2h2a2 2 0 012 2m0 10a2 2 0 002 2h2a2 2 0 002-2M9 7a2 2 0 012-2h2a2 2 0 012 2m0 10V7m0 10a2 2 0 002 2h2a2 2 0 002-2V7a2 2 0 00-2-2h-2a2 2 0 00-2 2"></path></svg></span> บัญชีผู้ใช้</li>
          <header class="bg-gradient-to-r from-[#1c2942] to-[#151F32] transform flex items-center mb-5 py-6 px-6 sm:rounded-t-md">
   chotipong07
            <img class="rounded-full w-20 h-20 ring-4 ring-opacity-80 ring-indigo-900" src="https://randomuser.me/api/portraits/women/79.jpg" alt="Dr. Jessica James">
          <div class="ml-5">
              <h1 class="text-white tracking-wide text-lg">Dr. Jessica James</h1>
  @ -25,9 +30,10 @@ import { Head, Link, useForm } from "@inertiajs/vue3";
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
            <li class="flex group items-center px-2 text-gray-900 text-md py-4 hover:bg-gray-200 duration-300 rounded-lg"><span class="text-gray-400 mr-5"><svg class="w-6 h-6 group-hover:text-gray-900 group-focus:text-gray-900" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 4v12l-4-2-4 2V4M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg></span> โพสหาครู</li>
            <li class="flex group items-center px-2 text-gray-900 text-md py-4 hover:bg-gray-200 duration-300 rounded-lg"><span class="text-gray-400 mr-5"><svg class="w-6 h-6 group-hover:text-gray-900 group-focus:text-gray-900" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 4v12l-4-2-4 2V4M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg></span> คอร์สเรียนทั้งหมด</li>

                <li class="flex group items-center px-2 text-gray-900 text-md py-4 hover:bg-gray-200 duration-300 rounded-lg"><span class="text-gray-400 mr-5"><svg class="w-6 h-6 group-hover:text-gray-900 group-focus:text-gray-900" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path></svg></span> ประวัติการเรียน</li>
            <li class="flex group items-center px-2 text-gray-900 text-md py-4 hover:bg-gray-200 duration-300 rounded-lg"><span class="text-gray-400 mr-5"><svg class="w-6 h-6 group-hover:text-gray-900 group-focus:text-gray-900" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path></svg></span> ประวัติการเรียน</li>
                <div class="py-5 border-t-2 border-gray-200">
                  <button class="flex group w-full items-center px-3 text-gray-900 space-x-4 text-md py-4 hover:bg-gray-200 duration-300 rounded-lg"></button>
                      <svg aria-hidden="true" data-fa="far-arrow-right-from-bracket" role="img" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg" class="w-5 text-danger-main desktop:w-5"><path d="M505 273c9.4-9.4 9.4-24.6 0-33.9L377 111c-9.4-9.4-24.6-9.4-33.9 0s-9.4 24.6 0 33.9l87 87L184 232c-13.3 0-24 10.7-24 24s10.7 24 24 24l246.1 0-87 87c-9.4 9.4-9.4 24.6 0 33.9s24.6 9.4 33.9 0L505 273zM168 80c13.3 0 24-10.7 24-24s-10.7-24-24-24L88 32C39.4 32 0 71.4 0 120L0 392c0 48.6 39.4 88 88 88l80 0c13.3 0 24-10.7 24-24s-10.7-24-24-24l-80 0c-22.1 0-40-17.9-40-40l0-272c0-22.1 17.9-40 40-40l80 0z" fill="#ea4335"></path></svg>
  @ -39,6 +45,7 @@ import { Head, Link, useForm } from "@inertiajs/vue3";
        </div>
      </div>
    </div>
    <div class="w-full md:w-8/12 mx-2 h-64">
      <div class="w-full md:w-8/12 mx-2 h-64">
  <<<<<<< HEAD
          <div class="bg-white p-3 shadow-sm rounded-sm">
              <div class="flex items-center space-x-2 font-semibold text-gray-900 leading-8">
                  <span clas="text-green-500">
  @ -145,12 +152,139 @@ import { Head, Link, useForm } from "@inertiajs/vue3";
      </div>
  </GuestLayout>

  =======
        <div class="bg-white p-3 shadow-sm rounded-sm">
            <div class="flex items-center space-x-2 font-semibold text-gray-900 leading-8">
                <span clas="text-green-500">
                    <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
            <span clas="text-green-500">
                <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                    </svg>
                </span>
                <span class="tracking-wide">เกี่ยวกับคุณ</span>
            </div>
            <div class="text-gray-700">
                <div class="grid md:grid-cols-2 p-3 text-sm md:text-base">
                    <div class="grid grid-cols-2">
                        <div class="px-4 py-2 font-semibold">ชื่อ</div>
                        <div class="px-4 py-2">Jane</div>
                    </div>
                    <div class="grid grid-cols-2">
                        <div class="px-4 py-2 font-semibold">นามสกุล</div>
                        <div class="px-4 py-2">Doe</div>
                    </div>
                    <div class="grid grid-cols-2">
                        <div class="px-4 py-2 font-semibold">เพศ</div>
                        <div class="px-4 py-2">Female</div>
                    </div>
                    <div class="grid grid-cols-2">
                        <div class="px-4 py-2 font-semibold">เบอร์โทร</div>
                        <div class="px-4 py-2">+11 998001001</div>
                    </div>
                    <div class="grid grid-cols-2">
                        <div class="px-4 py-2 font-semibold">Email.</div>
                        <div class="px-4 py-2">
                            <a class="text-blue-800" href="mailto:jane@example.com">jane@example.com</a>
                        </div>
                <div class="flex flex-wrap p-5 text-sm items-start justify-start md:text-base ">
                  <div class="flex flex-wrap w-full px-1 md:w-1/2">
                      <div class="py-2 font-semibold">ชื่อ</div>
                      <div class="py-2 w-full md:text-left "><input class="rounded-lg w-full border-gray-300 text-gray-600"  type="text" name="fire_name" v-model="inputValueFireName" :disabled="isDisabled_name" :class="{ 'bg-gray-100': isDisabled_name, 'bg-white': !isDisabled_name }"></div>
                  </div>
                  <div class="flex flex-wrap w-full px-1 md:w-1/2">
                      <div class=" py-2 font-semibold">นามสกุล</div>
                      <div class="py-2 w-full md:text-left"><input class="rounded-lg w-full border-gray-300 text-gray-600" type="text" name="last_name" v-model="inputValueLastName" :disabled="isDisabled_name" :class="{ 'bg-gray-100': isDisabled_name, 'bg-white': !isDisabled_name }"></div>
                  </div>

                </div>
                <div class="flex items-center justify-end mt-2 px-5">
                    <div v-if="isEditing" class="text-center space-x-5">
                      <button @click="cancelEdit" class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded">ยกเลิก</button>
                      <button @click="saveChanges" class="bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded">บันทึก</button>
                    </div>
                    <button @click="edit" v-else class="border-2 border-blue-800 hover:bg-blue-600 text-blue-700 hover:text-white px-4 py-2 rounded">แก้ไข</button>
                </div>
            </div>
          </div>
          <div class="my-4"></div>

        </div>
        <div class="my-4"></div>
    <!-- Experience and education -->
    <div class="bg-white p-3 shadow-sm rounded-sm">

                <!-- Experience and education -->
                <div class="bg-white p-3 shadow-sm rounded-sm">
                    <div class="grid grid-cols-2">
                        <div>
                            <div class="flex items-center space-x-2 font-semibold text-gray-900 leading-8 mb-3">
                                <span clas="text-green-500">
                                    <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                    </svg>
                                </span>
                                <span class="tracking-wide">วิชาที่กำลังเรียนอยู่</span>
                            </div>
                            <ul class="list-inside space-y-2">
                                <li>
                                    <div class="text-teal-600">Owner at Her Company Inc.</div>
                                    <div class="text-gray-500 text-xs">March 2020 - Now</div>
                                </li>
                                <li>
                                    <div class="text-teal-600">Owner at Her Company Inc.</div>
                                    <div class="text-gray-500 text-xs">March 2020 - Now</div>
                                </li>
                                <li>
                                    <div class="text-teal-600">Owner at Her Company Inc.</div>
                                    <div class="text-gray-500 text-xs">March 2020 - Now</div>
                                </li>
                                <li>
                                    <div class="text-teal-600">Owner at Her Company Inc.</div>
                                    <div class="text-gray-500 text-xs">March 2020 - Now</div>
                                </li>
                            </ul>
                        </div>
                        <div>
                            <div class="flex items-center space-x-2 font-semibold text-gray-900 leading-8 mb-3">
                                <span clas="text-green-500">
                                    <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path fill="#fff" d="M12 14l9-5-9-5-9 5 9 5z" />
                                        <path fill="#fff"
                                            d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222" />
                                    </svg>
                                </span>
                                <span class="tracking-wide">ประวัติการเรียน</span>
                            </div>
                            <ul class="list-inside space-y-2">
                                <li>
                                    <div class="text-teal-600">Masters Degree in Oxford</div>
                                    <div class="text-gray-500 text-xs">March 2020 - Now</div>
                                </li>
                                <li>
                                    <div class="text-teal-600">Bachelors Degreen in LPU</div>
                                    <div class="text-gray-500 text-xs">March 2020 - Now</div>
                                </li>
                            </ul>
                        </div>
    <div class="flex flex-wrap items-center justify-start">
        <div class="w-full px-5">
            <span>เบอร์โทรศัพท์</span>
            <div><input class="rounded-lg w-full border-gray-300 text-gray-600 md:w-1/2 "  type="text" name="phone" v-model="inputValuePhone" :disabled="isDisabled_phone" :class="{ 'bg-gray-100': isDisabled_phone, 'bg-white': !isDisabled_phone }"></div>
            <div class="flex items-center justify-end mt-7 ">
                    <div v-if="isEditing_phone" class="text-center space-x-5">
                      <button @click="cancelEdit_phone" class="border-2 bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded">ยกเลิก</button>
                      <button @click="saveChanges_phone" class="border-2 bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded">บันทึก</button>
                    </div>
                    <!-- End of Experience and education grid -->
                </div>
                <!-- End of profile tab -->
                    <button @click="edit_phone" v-else class="border-2 border-blue-800 hover:bg-blue-600 text-blue-700 hover:text-white px-4 py-2 rounded">เปลี่ยนเบอร์โทร</button>
            </div>
        </div>
        <div class="w-full px-5">
            <span>รหัสผ่าน</span>
            <div><input class="rounded-lg w-full border-gray-300 text-gray-600 md:w-1/2 "  type="password" name="password" v-model="inputValuePassword" :disabled="isDisabled_password" :class="{ 'bg-gray-100': isDisabled_password, 'bg-white': !isDisabled_password }"></div>
            <div class="flex items-center justify-end mt-7 ">
                    <div v-if="isEditing_password" class="text-center space-x-5">
                      <button @click="cancelEdit_password" class="border-2 bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded">ยกเลิก</button>
                      <button @click="saveChanges_password" class="border-2 bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded">บันทึก</button>
                    </div>
                    <button @click="edit_password" v-else class="border-2 border-blue-800 hover:bg-blue-600 text-blue-700 hover:text-white px-4 py-2 rounded">เปลี่ยนรหัสผ่าน</button>
            </div>
        </div>
      </div>
      <!-- End of Experience and education grid -->
      </div>
  <!-- End of profile tab -->
    </div>
</GuestLayout>

</template>
<script>


</script>
  <script>
  export default {
    data() {
      return {
        inputValueFireName: "Jessica",
        inputValueLastName: "James",
        inputValuePhone: "08xxxxxxxx",
        inputValuePassword: "12341234",
        // กำหนด Input เป็น disabled ตั้งแต่เริ่มต้น
        isDisabled_name: true,
        isDisabled_phone: true,
        isDisabled_password: true,
        isEditing: false,// กำหนดว่าอยู่ในโหมดแก้ไขหรือไม่
        isEditing_phone: false,
        isEditing_password: false,
      };
    },
    methods: {
      edit() {
        this.isEditing = true;
        this.isDisabled_name = false;
      },
      cancelEdit() {
        this.isEditing = false;
        this.isDisabled_name = true;
      },
      edit_phone() {
        this.isEditing_phone = true;
        this.isDisabled_phone = false;
      },
      cancelEdit_phone() {
        this.isEditing_phone = false;
        this.isDisabled_phone = true;
      },
      edit_password() {
        this.isEditing_password = true;
        this.isDisabled_password = false;
      },
      cancelEdit_password() {
        this.isEditing_password = false;
        this.isDisabled_password = true;
      },
      saveChanges() {
        // ทำงานที่นี่เมื่อกดปุ่มบันทึก
        console.log("บันทึกค่า: " + this.inputValueFireName + this.inputValueLastName);
        this.isEditing = false;
        this.isDisabled_name = true;
      },
      saveChanges_phone() {
        // ทำงานที่นี่เมื่อกดปุ่มบันทึก
        console.log("บันทึกค่า: " + this.inputValuePhone);
        this.isEditing_phone = false;
        this.isDisabled_phone = true;
      },
      saveChanges_password() {
        // ทำงานที่นี่เมื่อกดปุ่มบันทึก
        console.log("บันทึกค่า: " + this.inputValuePassword);
        this.isEditing_password = false;
        this.isDisabled_password = true;
      },
    },
  };
  </script>

  <style>
</style>
