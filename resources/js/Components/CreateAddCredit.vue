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
        <div
            class="flex flex-row w-full h-10 mb-4 bg-[#151F32] text-white items-center justify-center rounded"
        >
            เติมเงินเข้ากระเป๋า
        </div>
        <form class="w-full text-slate-500" @submit.prevent="" enctype="multipart/form-data">
            <!-- ข้อมูลส่วนตัว -->
            <div class="flex flex-row mb-4">
                <div class="w-1/2 mr-2">
                    <label for="nickname" class="block font-bold mb-2"
                        >จำนวน Credit</label
                    >
                    <input
                        type="number"
                        v-model="credit"
                        name="credit"
                        id="credit"
                        class="border-slate-400 rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline"
                    />
                </div>
            </div>
            <!-- submit -->
            <div class="flex flex-row items-center justify-center mt-5">
                <div class="flex-col">
                    <button
                        type="submit"
                        class="bg-[#151F32] hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                    >
                        เติม credit
                    </button>
                </div>
            </div>
        </form>
    </section>
</template>
<script>
export default {
    data() {
        return {
            credit: "",
        };
    },
    methods: {},
    mounted() {},
};
</script>

<style scoped></style>
