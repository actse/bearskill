<script setup>
import LayoutPage from "@/Layouts/LayoutPage.vue";

</script>
<template>
    <LayoutPage>
        <div class="fixed top-4 left-4 flex items-center justify-center bg-gray-100 border-2 border-gray-400 w-24 h-16 rounded-xl">
            <span class="sm:hidden">Mobile</span>
            <span class="hidden sm:block md:hidden">SM</span>
            <span class="hidden md:block lg:hidden">MD</span>
            <span class="hidden lg:block xl:hidden">LG</span>
            <span class="hidden xl:block 2xl:hidden">XL</span>
            <span class="hidden 2xl:block">2XL</span>
        </div>
        <div class="max-w-full mx-auto h-96 bg-[#151F32]">
            <div class="relative flex justify-center w-full h-full fon">
                <img class="absolute w-80 h-96 left-64 bottom-0 md:left-28 lg:left-44 xl:left-80 hidden md:block " src="../../imgs/BEARSKILL1.png" alt="#">
                <div class="flex bottom-0 justify-center">
                    <div class=" w-96 hidden md:block "></div>
                    <div class="flex flex-wrap py-4">
                        <div class="flex flex-col text-white font-bold ">
                            <div class="space-y-3">
                                <div class="flex flex-wrap animate-pulse space-x-5 sm:text-3xl md:text-2xl lg:text-3xl">
                                    <a href=""><p class=" transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 border-b-2 hover:text-orange-400 hover:border-orange-400 duration-150">หาติวเตอร์ที่ใช่</p></a>
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
        <div>
            <div class="w-1/2 mx-auto">
                <img src="../../imgs/BEARSKILL1.png" alt="รูปภาพ" class="opacity-0 transition-opacity duration-1000 ease-in-out hover:opacity-100" />
            </div>
        </div>
    </LayoutPage>
  
</template>

<script>

export default {
  components: {
  },
};
</script>

<style>

</style>