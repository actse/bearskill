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
    <div class="w-full md:w-8/12 mx-2 md:mb-5 h-auto border-2 border-slate-200 rounded-lg">
      <div class="bg-white p-4 shadow-sm rounded-sm">
          <div class="flex items-center space-x-2 text-gray-900 leading-8">
          <span clas="text-green-500">
              <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                  stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                  </svg>
              </span>
              <span class="tracking-wide text-2xl text-gray-600">โพสหาครู</span>
          </div>
          <div class="text-gray-700 w-full">
              <div class="flex flex-wrap p-5 text-sm md:text-base">
                <div class="flex flex-wrap items-center justify-start w-full md:w-1/2">
                    <div class="py-2 font-semibold">ตั้งชื่อโพส</div>
                    <div class="py-2 w-full md:text-left "><input class="rounded-lg w-full border-gray-300 text-gray-600"  type="text" name="call_name"></div>
                </div>

                <div class="w-full border-b-2 border-gray-200 my-5 text-gray-600 text-xs md:text-sm"><span>กำหนดวิชาเรียน</span></div>

                <div class="text-gray-700 w-full">
                    <div class="flex flex-wrap text-sm items-start justify-start md:text-base ">
                        <div class="flex flex-wrap items-center justify-start px-1 w-full md:w-1/2">
                            <div class=" py-2 font-semibold">วิชาที่ต้องการเรียน</div>
                            <div class="py-2 w-full md:text-left "><input class="rounded-lg w-full border-gray-300 text-gray-600"  type="text" name="subject" ></div>
                        </div>
                        <div class="flex flex-wrap items-center justify-start px-1 w-full md:w-1/2">
                            <div class=" py-2 font-semibold">เวลาที่ต้องการให้สอน</div>
                            <div class="py-2 w-full md:text-left"><input class="rounded-lg w-full border-gray-300 text-gray-600" type="text" name="subject_price" ></div>
                        </div>
                      </div>
                  </div>
                
                <div class="w-full border-b-2 border-gray-200 my-5 text-gray-600 text-xs md:text-sm"><span>กำหนดวันที่ทำการสอน</span></div>
                
                <div class="flex flex-wrap items-start justify-start w-full">
                  <div class="py-2 font-semibold w-full md:w-1/2">
                    <span>เลือกวันที่ต้องการเรียน</span>
                    <div v-for="day in days" :key="day">
                      <label class="flex items-center space-x-2 space-y-2">
                        <input
                          type="checkbox"
                          v-model="selectedDays[day]"
                          class="form-checkbox text-indigo-600 rounded-sm h-5 w-5"
                        />
                        <span>{{ day }}</span>
                      </label>
                    </div>
                  </div> 
                  <div class="py-2 font-semibold w-full md:w-1/2">
                    <div class="py-2 font-semibold">กำหนดราคา</div>
                    <div class="py-2 px-1 md:text-left w-full md:w-auto"><input class="w-full rounded-lg border-gray-300 text-gray-600" type="number" name="subject_price"></div>   
                  </div>
                </div>

                <div class="w-full border-b-2 border-gray-200 my-5 text-gray-600 text-xs md:text-sm"><span>รูปแบบบการสอน</span></div>
                <div class="py-2 font-semibold w-full md:w-1/2">
                    <span>เลือกบริการสอน</span>
                    <div v-for="TeachingServices in TeachingServices" :key="TeachingServices">
                      <label class="flex items-center space-x-2 space-y-2">
                        <input
                          type="checkbox"
                          v-model="selectedTeachingServices[TeachingServices]"
                          class="form-checkbox text-indigo-600 rounded-sm h-5 w-5"
                        />
                        <span>{{ TeachingServices }}</span>
                      </label>
                    </div>
                  </div> 
                <div class="py-2 font-semibold w-full md:w-1/2">
                    <span>เลือกประเภทการสอน</span>
                    <div v-for="teachingMethod in teachingMethods" :key="teachingMethod">
                      <label class="flex items-center space-x-2 space-y-2">
                        <input
                          type="checkbox"
                          v-model="selectedTeachingMethods[teachingMethod]"
                          class="form-checkbox text-indigo-600 rounded-sm h-5 w-5"
                        />
                        <span>{{ teachingMethod }}</span>
                      </label>
                    </div>
                  </div> 
                  
                  
                <div class="w-full border-b-2 border-gray-200 my-5 text-gray-600 text-xs md:text-sm"><span>สื่อประกอบการสอน</span></div>

                <div class="py-2 font-semibold w-full md:w-auto">
                    <div v-for="TeachingEquipment in TeachingEquipment" :key="TeachingEquipment">
                      <label class="flex items-center space-x-2 space-y-2">
                        <input
                          type="checkbox"
                          v-model="selectedTeachingEquipment[TeachingEquipment]"
                          class="form-checkbox text-indigo-600 rounded-sm h-5 w-5"
                        />
                        <span>{{ TeachingEquipment }}</span>
                      </label>
                    </div>
                  </div>

                  <div class="w-full border-b-2 border-gray-200 my-5 text-gray-600 text-xs md:text-sm"><span>ช่องทางติดต่อ</span></div>

                  <div class="text-gray-700 w-full">
                    <div class="flex flex-wrap text-sm md:text-base">
                        <div class="flex flex-wrap items-center justify-start w-full md:w-1/2">
                            <div class="py-2 font-semibold">เบอร์โทรศัพท์</div>
                            <div class="py-2 px-1 w-full md:text-left "><input class="rounded-lg w-full border-gray-300 text-gray-600"  type="text" name="phone" v-model="inputValuePhone"></div>
                        </div>
                        <div class="flex flex-wrap items-center justify-start w-full md:w-1/2">
                            <div class="py-2 font-semibold">LINE</div>
                            <div class="py-2 px-1 w-full md:text-left "><input class="rounded-lg w-full border-gray-300 text-gray-600" type="text" name="line" v-model="inputValueLine"></div>
                        </div>
                      </div>
                      <div class="flex items-center justify-center mt-5 px-5">
                          <button class="border-2 border-blue-800 hover:bg-blue-800 bg-blue-600 text-white px-10 py-2 rounded">โพส</button>
                      </div>
                  </div>
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
      inputValuePhone: "0891234561",
      inputValueLine: "LINE1234",
      days: ["จันทร์", "อังคาร", "พุธ", "พฤหัสบดี", "ศุกร์", "เสาร์", "อาทิตย์"],
      selectedDays: {
        จันทร์: true,
        อังคาร: true,
        พุธ: true,
        พฤหัสบดี: true,
        ศุกร์: true,
        เสาร์: true,
        อาทิตย์: true,
      },
      TeachingServices: ["สอนออนไลน์","สอนที่บ้าน"],
      teachingMethods: [ "สอนกลุ่ม", "สอนตัวต่อตัว"],
      selectedTeachingServices:{
        "สอนออนไลน์": true,
        "สอนที่บ้าน": true,
      },
      selectedTeachingMethods:{
        "สอนกลุ่ม": true,
        "สอนตัวต่อตัว": true,
      },
      TeachingEquipment: ["มี", "ไม่มี"],
      selectedTeachingEquipment:{
        "มี": true,
        "ไม่มี": true,
      },
    };
  },
}
</script>

<style>

</style>