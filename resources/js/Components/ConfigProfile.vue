<script setup>
import { Link } from "@inertiajs/vue3";
import Swal from "sweetalert2";
import Unsucceed from "@/Components/Unsuccessful.vue";
import Succeed from "@/Components/Succeed.vue";
</script>
<template>
    <div id="app" class="flex items-center justify-center">
        <div class="w-full rounded-md">
            <div class="flex h-full items-center justify-center">
                <label class="text-red-800 text-lg" for=""
                    >* แจ้งเตือน :
                </label>
                <label class="ml-2 text-[#1c2746] text-lg" for="">
                    หากท่านไม่ตั้งค่าโปรไฟล์ไห้เสร็จสมบูรณ์ท่านจะไม่สามารถเข้าถึงหน้าโปรไฟล์ของท่านได้
                    !</label
                >
            </div>
        </div>
    </div>
    <div id="app" class="flex items-center justify-center">
        <div
            class="w-1/2 mx-auto border-2 p-1 border-slate-300 bg-white h-9 my-4 rounded-md"
        >
            <div
                class="flex h-full text-white rounded-md items-center justify-center"
                :class="{
                    'bg-red-500': progressBarPercentage <= 25,
                    'bg-orange-500':
                        progressBarPercentage > 25 &&
                        progressBarPercentage <= 50,
                    'bg-blue-500':
                        progressBarPercentage > 50 &&
                        progressBarPercentage <= 75,
                    'bg-green-500': progressBarPercentage > 75,
                }"
                :style="{ width: progressBarPercentage + '%' }"
            >
                <label v-if="progressBarPercentage != 0" for=""
                    >{{ Math.floor(progressBarPercentage) }}%</label
                >
            </div>
        </div>
    </div>
    <div v-if="isFormContact" class="flex items-center justify-center">
        <form
            class="flex flex-row w-full h-auto items-center justify-center"
            @submit.prevent="
                FormContact(
                    $page.props.auth.user.id,
                    $page.props.auth.user.name
                )
            "
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
                                v-model="data.name"
                            />
                            <Succeed
                                v-if="this.data.name != null"
                                class="ml-2 h-8 w-8"
                            ></Succeed>
                            <Unsucceed
                                v-if="this.data.name == null"
                                class="ml-2 h-8 w-8"
                            ></Unsucceed>
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
                                type="tel"
                                pattern="[0]{1}[0-9]{2}[0-9]{3}[0-9]{4}"
                                class="ml-4 rounded-md border-slate-400"
                                v-model="data.phone"
                            />
                            <Succeed
                                v-if="this.data.phone != null"
                                class="ml-2 h-8 w-8"
                            ></Succeed>
                            <Unsucceed
                                v-if="this.data.phone == null"
                                class="ml-2 h-8 w-8"
                            ></Unsucceed>
                        </div>
                        <div class="flex w-full py-3 text-gray-500 text-center">
                            มีตัวอักษรทั้งหมดไม่เกิน 10 ตัวอักษร เช่น
                            (0999999999) ไม่อนุญาตให้ใช้ emojis ข้อมูลการติดต่อ
                            หรือคำโฆษณาเชิญชวนโปรไฟล์
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
                                <span class="text-success">&#10004;</span>
                                <span class="ml-2">Saramaree Ananda</span>
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
            @submit.prevent="FormDetail($page.props.auth.user.id)"
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
                        <div class="flex flex-col p-2 w-full">
                            <div class="flex">
                                <label for=""
                                    >รายละเอียดเบื่องต้น
                                    (เพื่อไห้เราได้ทราบข้อมูลของท่านคราวๆ)</label
                                >
                            </div>
                        </div>
                        <div class="flex flex-col p-2 w-full">
                            <div>
                                <textarea
                                    v-model="data.detail_data"
                                    class="w-full h-32 rounded-md border-slate-400"
                                />
                                <Succeed
                                    v-if="this.data.detail_data != null"
                                    class="ml-2 h-8 w-8"
                                ></Succeed>
                                <Unsucceed
                                    v-if="this.data.detail_data == null"
                                    class="ml-2 h-8 w-8"
                                ></Unsucceed>
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
                                <label>เติมเงินเข้าบัญชีของคุณ</label>
                            </div>
                            <div class="flex text-md mt-2 ml-3 text-slate-600">
                                <label
                                    >ก่อนที่คุณจะสามารถดูข้อมูลการติดต่อ
                                    (เบอร์โทรหรือไลน์ไอดี) ของลูกค้า
                                    คุณจำเป็นต้องเติมเงินเข้าบัญชีของคุณ
                                </label>
                            </div>
                        </div>
                        <div class="flex flex-row p-2 w-full">
                            <div class="flex flex-col w-1/3 mb-3">
                                <Link
                                    href="/billing"
                                    type="button"
                                    class="border-2 p-1.5 w-full rounded-md text-lg text-slate-100 bg-[#172a4f] text-center"
                                >
                                    อ่านวิธีการเติมเงิน
                                </Link>
                            </div>
                            <div class="flex flex-col w-1/2 mb-3">
                                <Succeed
                                    v-if="
                                        this.data.payment_services_start != null
                                    "
                                    class="ml-2 mt-1 h-8 w-8"
                                ></Succeed>
                                <Unsucceed
                                    v-if="
                                        this.data.payment_services_start == null
                                    "
                                    class="ml-2 mt-1 h-8 w-8"
                                ></Unsucceed>
                            </div>
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
                        <form
                            @submit.prevent="
                                sendOTP(
                                    $page.props.auth.user.email,
                                    $page.props.auth.user.phone
                                )
                            "
                            enctype="multipart/form-data"
                        >
                            <div class="flex flex-col p-2 w-full pb-5">
                                <div class="flex mb-3 w-1/3">
                                    <input
                                        id="yourDivId"
                                        type="text"
                                        class="w-full border-slate-300 rounded-md"
                                        v-model="$page.props.auth.user.phone"
                                    />
                                    <Succeed
                                        v-if="this.data.phone != null"
                                        class="ml-2 h-10 w-10"
                                    ></Succeed>
                                    <Unsucceed
                                        v-if="this.data.phone == null"
                                        class="ml-2 h-10 w-10"
                                    ></Unsucceed>
                                </div>
                                <button
                                    type="submit"
                                    class="mt-1 border-2 p-1.5 w-1/3 rounded-md text-lg text-slate-100 bg-[#172a4f]"
                                    :disabled="isSending"
                                >
                                    {{
                                        isSending
                                            ? `Waiting ... ( ${countdown}s )`
                                            : "Send OTP"
                                    }}
                                </button>
                            </div>
                        </form>
                        <form
                            @submit.prevent="
                                veriflyOTP($page.props.auth.user.id)
                            "
                            enctype="multipart/form-data"
                            class="pb-5"
                        >
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
                                        v-model="otpnumber"
                                    />
                                    <Succeed
                                        v-if="this.data.verify_status != null"
                                        class="ml-2 h-10 w-10"
                                    ></Succeed>
                                    <Unsucceed
                                        v-if="this.data.verify_status == null"
                                        class="ml-2 h-10 w-10"
                                    ></Unsucceed>
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
            username: "",
            isSending: false,
            countdown: 30,
            isFormContact: true,
            isFormDetail: false,
            isFormVerify: false,
            progressBarPercentage: 0,
            data: {
                name: "",
                phone: "",
                detail_data: "",
                verify_status: "",
                payment_services_start: "",
            },
            otpnumber: "",
        };
    },
    methods: {
        FormContact(id, name) {
            this.data.name = name;
            console.log(this.data.name);
            console.log(this.data.phone);
            const formData = new FormData();

            formData.append("id", id);
            formData.append("name", this.data.name);
            formData.append("phone", this.data.phone);

            Swal.fire({
                title: "บันทึกข้อมูล?",
                text: "ท่านยืนยันบันทึกข้อมูลใช่หรือไม่?!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "ยืนยัน",
            }).then((result) => {
                if (result.isConfirmed) {
                    axios
                        .post("/insertContact", formData)
                        .then((response) => {
                            console.log(response.data);
                            if (response.data != null) {
                                Swal.fire(
                                    "สำเร็จ!",
                                    "ข้อมูลท่านบันทึกลงฐานข้อมูลสำเร็จ",
                                    "success"
                                );
                                setTimeout(function () {
                                    window.location.reload();
                                }, 2000);
                            } else {
                                Swal.fire(
                                    "สำเร็จ!",
                                    "ข้อมูลท่านบันทึกลงฐานข้อมูลไม่สำเร็จ กรุณาลองใหม่อีกครั้ง",
                                    "error"
                                );
                            }
                        })
                        .catch((error) => {
                            console.error(error.response.data);
                        });
                }
            });
        },
        FormDetail(id) {
            console.log(this.data.detail_data);
            const formData = new FormData();
            formData.append("id", id);
            formData.append("detail_data", this.data.detail_data);

            Swal.fire({
                title: "บันทึกข้อมูล!",
                text: "ท่านยืนยันบันทึกข้อมูลใช่หรือไม่?!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "ยืนยัน",
            }).then((result) => {
                if (result.isConfirmed) {
                    axios
                        .post("/insertDetail", formData)
                        .then((response) => {
                            console.log(response.data);
                            if (response.data != null) {
                                Swal.fire(
                                    "สำเร็จ!",
                                    "ข้อมูลท่านบันทึกลงฐานข้อมูลสำเร็จ",
                                    "success"
                                );

                                setTimeout(function () {
                                    window.location.reload();
                                }, 2000);
                            } else {
                                Swal.fire(
                                    "สำเร็จ!",
                                    "ข้อมูลท่านบันทึกลงฐานข้อมูลไม่สำเร็จ กรุณาลองใหม่อีกครั้ง",
                                    "error"
                                );
                            }
                        })
                        .catch((error) => {
                            console.error(error.response.data);
                        });
                }
            });
        },
        sendOTP(email, phone) {
            console.log(email);
            console.log(phone);
            const formData = new FormData();
            formData.append("email", email);
            formData.append("phone", phone);

            this.isSending = true;

            axios
                .post("/sendOTP", {
                    email: this.$page.props.auth.user.email,
                    phone: this.$page.props.auth.user.phone,
                })
                .then((response) => {
                    console.log(response.data);
                    if (response.data != null) {
                        const Toast = Swal.mixin({
                            toast: true,
                            position: "center",
                            showConfirmButton: false,
                            timer: 2500,
                            timerProgressBar: true,
                            didOpen: (toast) => {
                                toast.addEventListener(
                                    "mouseenter",
                                    Swal.stopTimer
                                );
                                toast.addEventListener(
                                    "mouseleave",
                                    Swal.resumeTimer
                                );
                            },
                            appendTo: "#yourDivId",
                        });

                        Toast.fire({
                            icon: "success",
                            title: `ส่งรหัส (OTP) ไห้ท่านสำเร็จ กรุณาตรวจสอบ SMS และทำการยืนยันตัวตนของท่าน !!`,
                        });

                        // Toast.fire({
                        //     icon: "success",
                        //     title: `ระบบได้ทำการส่งรหัส (OTP)
                        //     เบอร์ : ${this.data.phone}
                        //     กรุณาตรวจสอบ SMS และทำการยืนยันตัวตนของท่าน !!`,
                        // });

                        let timer = setInterval(() => {
                            if (this.countdown > 0) {
                                this.countdown--;
                            } else {
                                clearInterval(timer);
                                this.isSending = false;
                            }
                        }, 1000);
                    } else {
                        this.isSending = false;
                    }
                })
                .catch((error) => {
                    console.error(error.response.data);
                    this.isSending = false;
                });
        },
        veriflyOTP(id) {
            const formData = new FormData();
            formData.append("id", id);
            formData.append("otpnumber", this.otpnumber);

            console.log(id);
            console.log(this.otpnumber);

            const Toast = Swal.mixin({
                toast: true,
                position: "center",
                showConfirmButton: false,
                timer: 2500,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener("mouseenter", Swal.stopTimer);
                    toast.addEventListener("mouseleave", Swal.resumeTimer);
                },
                appendTo: "#yourDivId",
            });

            Toast.fire({
                icon: "warning",
                title: `ยืนยัน (OTP) สำเร็จ กรุณารอสักครู่ระบบกำลังตรวจสอบความถูกต้อง !!`,
            });

            setTimeout(function () {
                axios
                    .post("/veriflyAccount", formData)
                    .then((response) => {
                        console.log(response.data);

                        if (response.data != "User not found") {
                            Toast.fire({
                                icon: "success",
                                title: `รหัส (OTP) ของท่านยืนยันสำเร็จ !!`,
                            });

                            setTimeout(function () {
                                window.location.reload();
                            }, 3000);
                        } else {
                            Toast.fire({
                                icon: "error",
                                title: `รหัส (OTP) ของท่านยืนยันไม่สำเร็จ กรุณาตรวจสอบรหัสใหม่ หรือ ส่งรหัส OTP อีกครั้ง !!`,
                            });
                            setTimeout(function () {
                                window.location.reload();
                            }, 3000);
                        }
                    })
                    .catch((error) => {
                        console.error(error.response.data);
                    });
            }, 3500);
        },
        simulateProgress() {
            const nonEmptyFields = Object.values(this.data).filter(
                (value) => value !== null
            ).length;

            const percentageIncrement = 100 / Object.keys(this.data).length;

            for (let index = 0; index < nonEmptyFields; index++) {
                this.progressBarPercentage += percentageIncrement;
            }
        },
        selectData() {
            const userId = this.$page.props.auth.user.id;
            const formData = new FormData();
            formData.append("id", userId);

            axios
                .post("/selectdata", formData)
                .then((response) => {
                    this.data.name = response.data.name;
                    this.data.phone = response.data.phone;
                    this.data.verify_status = response.data.verifly_account;
                    this.data.detail_data = response.data.detailsimple;
                    this.data.payment_services_start =
                        response.data.status_services_start;

                    console.log(response.data);

                    console.log(this.data.name);
                    console.log(this.data.phone);
                    console.log(this.data.verify_status);
                    console.log(this.data.detail_data);
                    console.log(this.data.payment_services_start);

                    if (this.data.name == null || this.data.phone == null) {
                        this.isFormContact = true;
                        this.isFormDetail = false;
                        this.isFormVerify = false;
                    }

                    if (
                        this.data.name != null &&
                        this.data.phone != null &&
                        this.data.detail_data == null
                    ) {
                        this.isFormDetail = true;
                        this.isFormContact = false;
                        this.isFormVerify = false;
                    }
                    if (
                        (this.data.verify_status == null ||
                            this.data.verify_status != null) &&
                        this.data.name != null &&
                        this.data.phone != null &&
                        this.data.detail_data != null &&
                        (this.data.payment_services_start == null ||
                            this.data.payment_services_start != null)
                    ) {
                        this.isFormVerify = true;
                        this.isFormContact = false;
                        this.isFormDetail = false;
                    }
                    this.simulateProgress();
                })
                .catch((error) => {
                    console.error(error.response.data);
                });
        },
    },
    mounted() {
        this.selectData();
    },
};
</script>
<style scoped></style>
