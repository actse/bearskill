<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Link } from "@inertiajs/vue3";
import Swal from "sweetalert2";
</script>
<template>
    <AuthenticatedLayout>
        <div class="py-2">
            <div class="max-w-7xl mx-auto font-sans">
                <div class="py-4">
                    <div class="flex items-center justify-center">
                        <form
                            class="flex flex-row w-full h-auto items-center justify-center"
                            @submit.prevent="paymentService"
                            enctype="multipart/form-data"
                        >
                            <div
                                class="flex flex-row w-full h-auto items-center justify-center bg-white border-2 rounded-md"
                            >
                                <div class="flex-row w-1/2 p-1">
                                    <div
                                        class="flex w-full mt-10 p-4 border-2 border-white rounded-md bg-slate-100 text-slate-600 items-center justify-center"
                                    >
                                        เพื่อใช้บริการที่มีค่าธรรมเนียมของเว็บไซต์
                                        เช่น การโปรโมทโปรไฟล์
                                        และดูข้อมูลการติดต่อลูกค้า
                                        คุณต้องมียอดเงินในบัญชีของคุณ
                                    </div>
                                    <div
                                        class="flex w-full mt-4 text-sm ml-1 text-slate-600 items-center justify-center"
                                    >
                                        โปรดกรอกจำนวนที่ต้องการเติม
                                        ในช่องด้านล่าง
                                        หลังการเติมเงินสำเร็จเรียบร้อยแล้วคุณจะสามารถใช้บริการที่มีค่าธรรมเนียมได้ทันที
                                    </div>
                                    <div
                                        class="flex w-full mt-4 text-sm ml-1 text-slate-600 items-center justify-center"
                                    >
                                        การทำธุรกรรมนี้ได้รับการดำเนินการโดยบริษัท
                                        ACTSE เว็บไซต์ BearSkill
                                    </div>
                                    <div
                                        class="flex-row w-full p-4 items-center justify-center"
                                    >
                                        <div
                                            class="flex p-2 items-center justify-center"
                                        >
                                            จำนวน<input
                                                type="number"
                                                class="ml-4 rounded-md border-slate-400"
                                                v-model="amount_price"
                                            />
                                        </div>
                                        <div
                                            class="flex w-full py-3 text-gray-500 items-center justify-center"
                                        >
                                            กรอกตัวเลขทั้งหมดไม่เกิน 6 ตัว
                                            ไม่อนุญาตให้ใช้ emojis
                                        </div>
                                        <div
                                            class="flex w-full py-3 ml-2 text-gray-700 text-center"
                                        >
                                            <label>ตัวอย่าง</label>
                                        </div>
                                        <div
                                            class="flex-row w-full h-auto p-3 border-2 rounded-md bg-gray-100 text-gray-600 text-center"
                                        >
                                            <div
                                                class="flex items-center ml-2 mb-2"
                                            >
                                                <span class="text-danger"
                                                    >&#10060;</span
                                                >
                                                <span class="ml-2"
                                                    >😅😅 6000 😅😅
                                                </span>
                                            </div>
                                            <div
                                                class="flex items-center ml-2 mb-2"
                                            >
                                                <span class="text-success"
                                                    >&#10004;</span
                                                >
                                                <span class="ml-2">6000</span>
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
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
<script>
export default {
    data() {
        return {
            amount_price: 0,
        };
    },
    methods: {
        paymentService() {
            const userId = this.$page.props.auth.user.id;
            const formData = new FormData();

            formData.append("id", userId);
            formData.append("coin", this.amount_price);

            console.log(userId);
            console.log(this.amount_price);

            const Toast = Swal.mixin({
                toast: true,
                position: "center",
                showConfirmButton: false,
                timer: 3500,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener("mouseenter", Swal.stopTimer);
                    toast.addEventListener("mouseleave", Swal.resumeTimer);
                },
            });

            Toast.fire({
                icon: "warning",
                title: `ระบบกำลังประมวลผลโปรดรอสีกครู่ !!`,
            });

            setTimeout(function () {

                axios
                    .post("/addcredit", formData)
                    .then((response) => {
                        console.log(response.data);

                        if (response.data != 'Data insertion failed') {
                            Toast.fire({
                                icon: "success",
                                title: `ท่านทำรายการสำเร็จ กรุณารอสักครู่ระบบกำลังตรวจสอบความถูกต้องการชำระของท่าน!`,
                            });
                            setTimeout(function () {
                                window.location.reload();
                            }, 4000);
                        } else {
                            Toast.fire({
                                icon: "error",
                                title: `ท่านทำรายการไม่สำเร็จ กรุณาตรวจสอบความถูกต้องการชำระของท่าน!`,
                            });
                            setTimeout(function () {
                                window.location.reload();
                            }, 4000);
                        }
                    })
                    .catch((error) => {
                        console.error(error.response.data);
                    });
            }, 4500);
        },
    },
    mounted() {},
};
</script>
<style scoped></style>
