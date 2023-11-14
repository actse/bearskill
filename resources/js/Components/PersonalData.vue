<script setup>
import InputError from "@/Components/InputError.vue";
import InputLabel from "@/Components/InputLabel.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import TextInput from "@/Components/TextInput.vue";
import LayoutPage from "@/Layouts/LayoutPage.vue";
import { Link, useForm, usePage } from "@inertiajs/vue3";

defineProps({
    mustVerifyEmail: {
        type: Boolean,
    },
    status: {
        type: String,
    },
});

const user = usePage().props.auth.user;

const form = useForm({
    name: user.name,
    email: user.email,
    id: user.id,
});
</script>

<template>
    <section>
        <!-- Modal -->
        <form
            class="w-full text-slate-500"
            @submit.prevent=""
            enctype="multipart/form-data"
        >
            <!-- ข้อมูลส่วนตัว -->
            <div class="flex flex-row mb-4">
                <div class="w-1/2 mr-2">
                    <label for="nickname" class="text-blue-500 block font-bold mb-2"
                        >ชื่อเล่น : <label class="text-slate-500">{{ name }}</label></label
                    >
                </div>
                <div class="w-2/3 ml-3">
                    <label for="birthday" class="text-blue-500 block font-bold mb-2"
                        >วัน/เดือน/ปี เกิด : <label class="text-slate-500">{{ birthday }}</label></label
                    >
                </div>
            </div>
            <div class="flex flex-row mb-4">
                <div class="w-1/2 mr-2">
                    <label for="phone" class="text-blue-500 block font-bold mb-2"
                        >เบอร์โทร : <label class="text-slate-500">{{ phone }}</label></label
                    >
                </div>
                <div class="w-2/3 ml-3">
                    <label for="lineid" class="text-blue-500 block font-bold mb-2"
                        >Email : <label class="text-slate-500">{{ email }}</label></label
                    >
                </div>
            </div>
            <div class="flex flex-row mb-4">
                <div class="w-1/2 mr-2">
                    <label for="" class="text-blue-500 block font-bold mb-2"
                        >การศึกษา : <label class="text-slate-500">{{ education }}</label></label
                    >
                </div>
                <div class="w-2/3 ml-3">
                    <label for="lineid" class="text-blue-500 block font-bold mb-2"
                        >สถานศึกษา : <label class="text-slate-500">{{ academy }}</label></label
                    >
                </div>
            </div>
            <div class="flex flex-row mb-4">
                <div class="w-1/2 mr-2">
                    <label for="" class="text-blue-500 block font-bold mb-2"
                        >ประวัติการสอน : <label class="text-slate-500">{{ teaching_history }}</label></label
                    >
                </div>
                <div class="w-2/3 ml-3">
                    <label for="" class="text-blue-500 block font-bold mb-2"
                        >ประวัติการทำงาน : <label class="text-slate-500">{{ work_history }}</label></label
                    >
                </div>
            </div>
            <div class="flex flex-row mb-4">
                <div class="w-full mr-2">
                    <label for="" class="text-blue-500 block font-bold mb-2"
                        >รายละเอียดเพิ่มเติม : <label class="text-slate-500">{{ additional_details }}</label></label
                    >
                </div>
            </div>
        </form>
    </section>
</template>
<script>
export default {
    data() {
        return {
            name: "NAYEON IM YOWO",
            birthday: "22 กันยายน ค.ศ. 1995",
            phone: "0-1-2398930-1",
            email: "NAYEONTWICE'SLOVELY@JYP.office",
            education: "ป.ตรี ภาควิชาภาพยนตร์",
            academy: "มหาวิทยาลัยคอนกุก",
            teaching_history:
                "นาย็อน เป็นนักร้องชาวเกาหลีใต้ และเป็นสมาชิกของทไวซ์ กลุ่มดนตรีหญิงซึ่งบริษัทเจวายพีเอนเตอร์เทนเมนต์ จัดตั้งขึ้นในเกาหลีใต้เมื่อปี 2015",
            work_history:
                "นาย็อน เป็นนักร้องชาวเกาหลีใต้ และเป็นสมาชิกของทไวซ์ กลุ่มดนตรีหญิงซึ่งบริษัทเจวายพีเอนเตอร์เทนเมนต์ จัดตั้งขึ้นในเกาหลีใต้เมื่อปี 2015",
            additional_details:
                "ในวันที่ 15 กันยายน ค.ศ. 2010 นาย็อนเข้ารับการคัดเลือกนักแสดงปลายเปิดครั้งที่ 7 ของบริษัทเจวายพีเอนเตอร์เทนเมนต์ และได้เป็นนักแสดงฝึกหัดของบริษัท[2] ครั้นปี ค.ศ. 2013 เธอได้รับเลือกเป็นสมาชิกของซิกซ์มิกซ์ (6mix) กลุ่มดนตรีที่ล้มเลิกไปก่อนจะได้เปิดตัวจริงๆ[3] ห้าปีต่อมาหลังจากที่เป็นเด็กฝึกหัดของบริษัทนาย็อนได้เดบิวต์เป็นสมาชิกของเกริ์ลกรุปทไวซ์ในปี ค.ศ. 2015[4][5]",
        };
    },
    methods: {},
    mounted() {},
};
</script>

<style scoped></style>
