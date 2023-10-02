<script setup>
import { Link } from "@inertiajs/vue3";

</script>
<template>
    <div v-if="isFormContact" class="flex items-center justify-center">
        <form
            class="flex flex-row w-full h-auto items-center justify-center"
            @submit.prevent="FormContact"
            enctype="multipart/form-data"
        >
            <div
                class="flex flex-row w-full h-auto items-center justify-center bg-white border-2 rounded-md"
            >
                <div class="flex-row w-1/2 p-1">
                    <div
                        class="flex w-full py-10 text-2xl items-center justify-center"
                    >
                        ตั้งค่าโปรไฟล์ของคุณ
                    </div>
                    <div class="flex w-full items-center justify-center">
                        ตั้งชื่อโปรไฟล์ของคุณ คุณสามารถใช้ชื่อเล่น ชื่อจริง
                        ชื่อบริษัท หรือชื่อทีมงานของคุณก็ได้
                    </div>
                    <div
                        class="flex-row w-full p-4 items-center justify-center"
                    >
                        <div class="flex p-2 items-center justify-center">
                            ชื่อเรียก<input
                                type="text"
                                class="ml-4 rounded-md border-slate-400"
                            />
                        </div>
                        <div class="flex w-full py-3 text-gray-500 text-center">
                            มีตัวอักษรทั้งหมดไม่เกิน 40 ตัวอักษร ไม่อนุญาตให้ใช้
                            emojis ข้อมูลการติดต่อ
                            หรือคำโฆษณาเชิญชวนเป็นชื่อโปรไฟล์
                        </div>
                        <div
                            class="flex w-full py-3 items-center justify-center"
                        >
                            ตั้งเบอร์โทรของคุณ คุณสามารถใช้เบอร์จริง
                            และเบอร์บริษัท หรือเบอร์ทีมงานของคุณก็ได้
                        </div>
                        <div class="flex p-2 items-center justify-center">
                            เบอร์โทร<input
                                type="text"
                                class="ml-4 rounded-md border-slate-400"
                            />
                        </div>
                        <div class="flex w-full py-3 text-gray-500 text-center">
                            มีตัวอักษรทั้งหมดไม่เกิน 10 ตัวอักษร ไม่อนุญาตให้ใช้
                            emojis ข้อมูลการติดต่อ หรือคำโฆษณาเชิญชวนโปรไฟล์
                        </div>
                        <div
                            class="flex w-full py-3 ml-2 text-gray-700 text-center"
                        >
                            <label>ตัวอย่าง</label>
                        </div>
                        <div
                            class="flex-row w-full h-auto p-3 border-2 rounded-md bg-gray-100 text-gray-600 text-center"
                        >
                            <div class="flex items-center ml-2 mb-2">
                                <span class="text-danger">&#10060;</span>
                                <span class="ml-2"
                                    >😅😅 เรียนภาษาอังกฤษวันนี้ 😅😅
                                </span>
                            </div>
                            <div class="flex items-center ml-2 mb-2">
                                <span class="text-danger">&#10060;</span>
                                <span class="ml-2"
                                    >📞 จัดเลี้ยง โทรเลย 87654321</span
                                >
                            </div>
                            <div class="flex items-center ml-2 mb-2">
                                <span class="text-success">&#10004;</span>
                                <span class="ml-2">Saramaree Ananda</span>
                            </div>
                            <div class="flex items-center ml-2 mb-2">
                                <span class="text-success">&#10004;</span>
                                <span class="ml-2">SMD บริการช่วยเหลือ</span>
                            </div>
                        </div>

                        <div
                            class="flex w-full py-3 my-5 mb-5 items-center justify-center"
                        >
                            <button
                                type="submit"
                                class="bg-[#172a4f] hover:bg-blue-600 text-white text-lg py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                            >
                                ดำเนินการต่อ >
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <div v-if="isFormDetail" class="flex items-center justify-center">
        <form
            class="flex flex-row w-full h-auto items-center justify-center"
            @submit.prevent="FormDetail"
            enctype="multipart/form-data"
        >
            <div
                class="flex flex-row w-full h-auto items-center justify-center bg-white border-2 rounded-md"
            >
                <div class="flex-row w-1/2 p-1">
                    <div
                        class="flex w-full pt-10 pb-5 text-2xl items-center justify-center"
                    >
                        ตั้งค่าโปรไฟล์ของคุณ
                    </div>
                    <div
                        class="flex w-full text-xl items-center justify-center"
                    >
                        บอกเกี่ยวกับรายละเอียดการสอนของท่าน
                    </div>
                    <div
                        class="flex-row w-full p-4 items-center justify-center"
                    >
                        <div class="flex flex-col p-2 w-1/3">
                            <div class="flex">
                                <label for="">รายละเอียดเบื่องต้น</label>
                            </div>
                        </div>
                        <div class="flex flex-col p-2 w-full">
                            <div>
                                <textarea
                                    class="w-full h-32 rounded-md border-slate-400"
                                />
                            </div>
                        </div>
                        <div class="flex w-full py-3 text-gray-500 text-center">
                            มีตัวอักษรทั้งหมดไม่เกิน 200 ตัวอักษร
                            ไม่อนุญาตให้กรอกข้อมูลการติดต่อ
                            หรือคำโฆษณาเชิญชวนเกินจริง
                        </div>
                        <div
                            class="flex w-full py-3 ml-2 text-gray-700 text-center"
                        >
                            <label>ตัวอย่าง</label>
                        </div>
                        <div
                            class="flex-row w-full h-auto p-3 border-2 rounded-md bg-gray-100 text-gray-600"
                        >
                            <div class="">
                                <label>
                                    ไม่ใส่ข้อมูลการติดต่อ (เบอร์โทร, messengers,
                                    อีเมล เป็นต้น) คุณเป็นใคร?
                                    ประสบการณ์การให้บริการของคุณ?
                                    คุณให้บริการอย่างไร?
                                    คุณมีขั้นตอนการทำงานอย่างไร?
                                    กลุ่มลูกค้าของคุณคือใคร?
                                    จะจ้างคุณได้อย่างไร? ราคาเท่าไหร่?
                                    จะชำระค่าบริการได้อย่างไร? คุณทำงานเวลาใด?
                                    คุณมีวันหยุดหรือไม่?
                                </label>
                            </div>
                        </div>
                        <div
                            class="flex w-full py-3 my-5 mb-5 items-center justify-center"
                        >
                            <button
                                type="submit"
                                class="bg-[#172a4f] hover:bg-blue-600 text-white text-lg py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                            >
                                ดำเนินการต่อ >
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <div v-if="isFormVerify" class="flex items-center justify-center">
        <div class="flex flex-row w-full h-auto items-center justify-center">
            <div
                class="flex flex-row w-full h-auto items-center justify-center bg-white border-2 rounded-md"
            >
                <div class="flex-row w-1/2 py-5 pb-10">
                    <div class="flex w-full pt-10 pb-3 text-2xl">
                        เรียบร้อยแล้ว ! สิ่งที่คุณสามารถทำได้ต่อจากนี้
                    </div>
                    <div
                        class="flex-row w-full px-4 items-center justify-center"
                    >
                        <div class="flex flex-col p-2 w-full">
                            <div class="flex text-xl">
                                <label>เติมเงินเข้าบัญชีของคุณ </label>
                            </div>
                            <div class="flex text-md mt-2 ml-3 text-slate-600">
                                <label
                                    >ก่อนที่คุณจะสามารถดูข้อมูลการติดต่อ
                                    (เบอร์โทรหรือไลน์ไอดี) ของลูกค้า
                                    คุณจำเป็นต้องเติมเงินเข้าบัญชีของคุณ
                                </label>
                            </div>
                        </div>
                        <div class="flex flex-col p-2 w-full mb-3">
                            <Link href="/profile" type="button"
                                class="border-2 p-1.5 w-1/3 rounded-md text-lg text-slate-100 bg-[#172a4f] text-center"
                            >
                                อ่านวิธีการเติมเงิน
                            </Link>
                        </div>
                        <div class="flex flex-col p-2 w-full">
                            <div class="flex text-xl">
                                <label
                                    >ยืนยันตัวตนของท่านผ่านเบอร์มือถือ
                                    (OTP)</label
                                >
                            </div>
                            <div class="flex text-md mt-2 ml-3 text-slate-600">
                                <label
                                    >โปรไฟล์ที่ทำการยืนยันตัวตนจะได้รับสัญญาลักษณ์พิเศษแสดงต่อลูกค้า
                                    เมื่อลูกค้าเชื่อคุณมากขึ้น
                                    คุณก็จะได้รับข้อความจากลูกค้ามากขึ้น
                                </label>
                            </div>
                        </div>
                        <div class="flex flex-col p-2 w-full pb-5">
                            <button
                                class="border-2 p-1.5 w-1/3 rounded-md text-lg text-slate-100 bg-[#172a4f]"
                            >
                                ยืนยันตัวตน
                            </button>
                        </div>

                        <form action="" class="pb-5">
                            <div class="flex flex-col p-2 w-full">
                                <div class="flex text-xl">
                                    <label>กรุณากรอกรหัส (OTP) ที่นี้</label>
                                </div>
                                <div
                                    class="flex text-md my-1 ml-2 text-slate-500"
                                >
                                    <label
                                        >กรุณาเช็ครหัส (OTP)
                                        ของท่านที่ได้รับจากข้อความ SMS ทาง
                                        Bearskill ได้ส่งไปให้ ภายใน 60
                                        วินาที</label
                                    >
                                </div>
                                <div class="flex text-md w-1/3 mt-2">
                                    <input
                                        type="text"
                                        class="w-full border-slate-300 rounded-md"
                                    />
                                </div>
                            </div>
                            <div class="flex flex-col p-2 w-full">
                                <button
                                    class="border-2 p-2 w-1/3 rounded-md text-lg text-slate-100 bg-[#172a4f]"
                                >
                                    ยืนยันรหัส (OTP)
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    data() {
        return {
            isFormContact: false,
            isFormDetail: false,
            isFormVerify: true,
        };
    },
    methods: {
        FormContact() {
            this.isFormDetail = true;
            this.isFormContact = false
            console.log(this.isFormDetail);
        },
        FormDetail() {
            this.isFormVerify = true;
            this.isFormDetail = false;
            console.log(this.isFormVerify);
        },
        FormVerify() {

        },
    },
    mounted() {},
};
</script>
<style scoped></style>
