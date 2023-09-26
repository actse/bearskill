<script setup>
import LayoutPage from "@/Layouts/LayoutPage.vue";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";

</script>

<template>
    <AuthenticatedLayout>
        <div class="max-w-7xl mx-auto">
            <div class="py-4">
                <div class="flex items-center justify-center">
                    <div
                        class="flex flex-row w-full bg-gray-300 border-2 mx-2 rounded-md"
                    >
                        <div class="w-full h-96 p-4">
                            <div class="bg-white w-full h-full">
                                <Slider></Slider>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="py-4">
                <div class="flex items-center justify-center">
                    <div
                        class="flex flex-row w-1/2 bg-gray-300 border-2 mx-2 rounded-md"
                    >
                        <div class="w-full h-96 p-4">
                            <div class="bg-white w-full h-full"></div>
                        </div>
                    </div>
                    <div
                        class="flex flex-row w-1/2 bg-slate-300 border-2 mx-2 rounded-md"
                    >
                        <div class="w-full h-96 p-4">
                            <div class="bg-white w-full h-full"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="py-4">
                <div class="flex items-center justify-center">
                    <div
                        class="flex flex-row w-full bg-gray-300 border-2 mx-2 rounded-md"
                    >
                        <div class="w-full h-44 p-4">
                            <div class="bg-white w-full h-full"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="py-4">
                <div class="flex items-center justify-center">
                    <div
                        class="flex flex-row w-1/2 bg-gray-300 border-2 mx-2 rounded-md"
                    >
                        <div class="w-full h-96 p-4">
                            <div class="bg-white w-full h-full"></div>
                        </div>
                    </div>
                    <div
                        class="flex flex-row w-1/2 bg-slate-300 border-2 mx-2 rounded-md"
                    >
                        <div class="w-full h-96 p-4">
                            <div class="bg-white w-full h-full"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="py-4">
                <div class="flex items-center justify-center">
                    <div
                        class="flex flex-row w-3/5 bg-gray-300 border-2 mx-2 rounded-md"
                    >
                        <div class="w-full h-96 p-4">
                            <div class="bg-white w-full h-full"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="py-4">
                <div class="flex items-center justify-center">
                    <div
                        class="flex flex-row w-3/5 bg-gray-300 border-2 mx-2 rounded-md"
                    >
                        <div class="w-full h-96 p-4">
                            <div class="bg-white w-full h-full"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="py-4">
                <div class="flex items-center justify-center">
                    <div
                        class="flex flex-row w-full bg-gray-300 border-2 mx-2 rounded-md"
                    >
                        <div class="w-full h-44 p-4">
                            <div class="bg-white w-full h-full"></div>
                        </div>
                    </div>
                    <div
                        class="flex flex-row w-full bg-slate-300 border-2 mx-2 rounded-md"
                    >
                        <div class="w-full h-44 p-4">
                            <div class="bg-white w-full h-full"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>

<script>
import Slider from "@/Components/Slider.vue";
import 'vue3-carousel/dist/carousel.css'

export default {
  components: {
    Slider,
  },
};
</script>