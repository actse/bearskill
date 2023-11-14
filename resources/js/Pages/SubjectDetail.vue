<script setup>
import LayoutPage from "@/Layouts/LayoutPage.vue";
import Footer from "@/Components/Footer.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import Textbar from "@/Components/Textbar.vue";
import { Link } from "@inertiajs/vue3";
</script>
<template>
    <LayoutPage>
        <div class="flex flex-col items-center p-5 space-y-2 bg-white">
            <div class="w-auto sm:w-6/12 my-10 items-center justify-center">
                <div class="flex h-full" v-for="(form, index) in filterData">
                    <div
                        class="flex w-full bg-white border border-gray-200 rounded-lg md:flex-row md:max-w-auto shadow-lg hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700"
                    >
                        <div
                            class="flex flex-col w-3/6 justify-between leading-normal h-auto"
                        >
                            <img
                                class="object-cover rounded-t-lg h-auto w-auto md:h-auto md:w-auto md:rounded-none md:rounded-l-lg"
                                :src="form.file"
                                alt=""
                            />
                        </div>
                        <div
                            class="flex flex-col w-3/6 p-2 ml-2 leading-normal"
                        >
                            <p
                                class="m-0.5 text-4xl font-sans tracking-tight text-slate-600 dark:text-white"
                            >
                                {{ form.title_subject }}
                                {{ form.price }} บาท/ชั่วโมง
                            </p>
                            <div class="flex m-1">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke-width="1.5"
                                    stroke="currentColor"
                                    class="w-6 h-6"
                                >
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="M2.25 8.25h19.5M2.25 9h19.5m-16.5 5.25h6m-6 2.25h3m-3.75 3h15a2.25 2.25 0 002.25-2.25V6.75A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25v10.5A2.25 2.25 0 004.5 19.5z"
                                    />
                                </svg>

                                <p
                                    class="ml-4 mb-1 text-lg font-sans text-slate-600 dark:text-gray-400"
                                >
                                    {{ form.name }}
                                </p>
                            </div>
                            <div class="flex m-1">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke-width="1.5"
                                    stroke="currentColor"
                                    class="w-6 h-6"
                                >
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="M4.26 10.147a60.436 60.436 0 00-.491 6.347A48.627 48.627 0 0112 20.904a48.627 48.627 0 018.232-4.41 60.46 60.46 0 00-.491-6.347m-15.482 0a50.57 50.57 0 00-2.658-.813A59.905 59.905 0 0112 3.493a59.902 59.902 0 0110.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.697 50.697 0 0112 13.489a50.702 50.702 0 017.74-3.342M6.75 15a.75.75 0 100-1.5.75.75 0 000 1.5zm0 0v-3.675A55.378 55.378 0 0112 8.443m-7.007 11.55A5.981 5.981 0 006.75 15.75v-1.5"
                                    />
                                </svg>

                                <p
                                    class="ml-4 mb-1 text-lg font-sans text-slate-600 dark:text-gray-400"
                                >
                                    {{ form.detail }}
                                </p>
                            </div>
                            <div class="flex m-1">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke-width="1.5"
                                    stroke="currentColor"
                                    class="w-6 h-6"
                                >
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="M20.25 14.15v4.25c0 1.094-.787 2.036-1.872 2.18-2.087.277-4.216.42-6.378.42s-4.291-.143-6.378-.42c-1.085-.144-1.872-1.086-1.872-2.18v-4.25m16.5 0a2.18 2.18 0 00.75-1.661V8.706c0-1.081-.768-2.015-1.837-2.175a48.114 48.114 0 00-3.413-.387m4.5 8.006c-.194.165-.42.295-.673.38A23.978 23.978 0 0112 15.75c-2.648 0-5.195-.429-7.577-1.22a2.016 2.016 0 01-.673-.38m0 0A2.18 2.18 0 013 12.489V8.706c0-1.081.768-2.015 1.837-2.175a48.111 48.111 0 013.413-.387m7.5 0V5.25A2.25 2.25 0 0013.5 3h-3a2.25 2.25 0 00-2.25 2.25v.894m7.5 0a48.667 48.667 0 00-7.5 0M12 12.75h.008v.008H12v-.008z"
                                    />
                                </svg>
                                <p
                                    class="ml-4 mb-1 text-lg font-sans text-slate-600 dark:text-gray-400"
                                >
                                    {{ form.additional_costs }}
                                </p>
                            </div>
                            <div class="flex m-1">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke-width="1.5"
                                    stroke="currentColor"
                                    class="w-6 h-6"
                                >
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z"
                                    />
                                </svg>

                                <p
                                    class="ml-4 mb-1 text-lg font-sans text-slate-600 dark:text-gray-400"
                                >
                                    {{ form.type_learning }}
                                </p>
                            </div>
                            <div class="flex m-1">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke-width="1.5"
                                    stroke="currentColor"
                                    class="w-6 h-6"
                                >
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z"
                                    />
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z"
                                    />
                                </svg>

                                <p
                                    class="ml-4 mb-1 text-lg font-sans text-slate-600 dark:text-gray-400"
                                >
                                    {{ form.location_learning }}
                                </p>
                            </div>
                            <div class="flex m-1">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke-width="1.5"
                                    stroke="currentColor"
                                    class="w-6 h-6"
                                >
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z"
                                    />
                                </svg>

                                <p
                                    class="ml-4 mb-1 text-lg font-sans text-slate-600 dark:text-gray-400"
                                >
                                    {{ form.date_learning }}
                                </p>
                            </div>
                            <div class="flex m-1">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke-width="1.5"
                                    stroke="currentColor"
                                    class="w-6 h-6"
                                >
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m6.75 12H9m1.5-12H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z"
                                    />
                                </svg>

                                <p
                                    class="ml-4 mb-1 text-lg font-sans text-slate-600 dark:text-gray-400"
                                >
                                    {{ form.learning_style }}
                                </p>
                            </div>
                            <div class="flex m-1">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke-width="1.5"
                                    stroke="currentColor"
                                    class="w-6 h-6"
                                >
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 002.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 00-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25zM6.75 12h.008v.008H6.75V12zm0 3h.008v.008H6.75V15zm0 3h.008v.008H6.75V18z"
                                    />
                                </svg>
                                <p
                                    class="ml-4 text-lg font-sans text-slate-600 dark:text-gray-400"
                                >
                                    {{ form.learning_media }}
                                </p>
                            </div>
                            <div
                                v-if="form.status > 0"
                                class="flex flex-col m-1 items-left text-[#1a243b] rounded-lg p-2 max-mx-auto w-6/12 bg-white"
                            >
                                <div class="flex m-1">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke-width="1.5"
                                        stroke="currentColor"
                                        class="w-8 h-8 fill-current"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M14.25 9.75v-4.5m0 4.5h4.5m-4.5 0l6-6m-3 18c-8.284 0-15-6.716-15-15V4.5A2.25 2.25 0 014.5 2.25h1.372c.516 0 .966.351 1.091.852l1.106 4.423c.11.44-.054.902-.417 1.173l-1.293.97a1.062 1.062 0 00-.38 1.21 12.035 12.035 0 007.143 7.143c.441.162.928-.004 1.21-.38l.97-1.293a1.125 1.125 0 011.173-.417l4.423 1.106c.5.125.852.575.852 1.091V19.5a2.25 2.25 0 01-2.25 2.25h-2.25z"
                                        />
                                    </svg>
                                    <p
                                        class="ml-4 text-lg font-sans text-[#1a243b] dark:text-gray-400"
                                    >
                                        {{ form.phone }}
                                    </p>
                                </div>
                                <div
                                    v-if="form.status > 0"
                                    class="flex m-1 -mb-0.5"
                                >
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="w-11 h-11 -ml-1"
                                        viewBox="0 0 48 48"
                                    >
                                        <path
                                            fill="#00c300"
                                            d="M12.5,42h23c3.59,0,6.5-2.91,6.5-6.5v-23C42,8.91,39.09,6,35.5,6h-23C8.91,6,6,8.91,6,12.5v23C6,39.09,8.91,42,12.5,42z"
                                        ></path>
                                        <path
                                            fill="#fff"
                                            d="M37.113,22.417c0-5.865-5.88-10.637-13.107-10.637s-13.108,4.772-13.108,10.637c0,5.258,4.663,9.662,10.962,10.495c0.427,0.092,1.008,0.282,1.155,0.646c0.132,0.331,0.086,0.85,0.042,1.185c0,0-0.153,0.925-0.187,1.122c-0.057,0.331-0.263,1.296,1.135,0.707c1.399-0.589,7.548-4.445,10.298-7.611h-0.001C36.203,26.879,37.113,24.764,37.113,22.417z M18.875,25.907h-2.604c-0.379,0-0.687-0.308-0.687-0.688V20.01c0-0.379,0.308-0.687,0.687-0.687c0.379,0,0.687,0.308,0.687,0.687v4.521h1.917c0.379,0,0.687,0.308,0.687,0.687C19.562,25.598,19.254,25.907,18.875,25.907z M21.568,25.219c0,0.379-0.308,0.688-0.687,0.688s-0.687-0.308-0.687-0.688V20.01c0-0.379,0.308-0.687,0.687-0.687s0.687,0.308,0.687,0.687V25.219z M27.838,25.219c0,0.297-0.188,0.559-0.47,0.652c-0.071,0.024-0.145,0.036-0.218,0.036c-0.215,0-0.42-0.103-0.549-0.275l-2.669-3.635v3.222c0,0.379-0.308,0.688-0.688,0.688c-0.379,0-0.688-0.308-0.688-0.688V20.01c0-0.296,0.189-0.558,0.47-0.652c0.071-0.024,0.144-0.035,0.218-0.035c0.214,0,0.42,0.103,0.549,0.275l2.67,3.635V20.01c0-0.379,0.309-0.687,0.688-0.687c0.379,0,0.687,0.308,0.687,0.687V25.219z M32.052,21.927c0.379,0,0.688,0.308,0.688,0.688c0,0.379-0.308,0.687-0.688,0.687h-1.917v1.23h1.917c0.379,0,0.688,0.308,0.688,0.687c0,0.379-0.309,0.688-0.688,0.688h-2.604c-0.378,0-0.687-0.308-0.687-0.688v-2.603c0-0.001,0-0.001,0-0.001c0,0,0-0.001,0-0.001v-2.601c0-0.001,0-0.001,0-0.002c0-0.379,0.308-0.687,0.687-0.687h2.604c0.379,0,0.688,0.308,0.688,0.687s-0.308,0.687-0.688,0.687h-1.917v1.23H32.052z"
                                        ></path>
                                    </svg>
                                    <p
                                        class="ml-2 mt-2.5 text-lg font-sans text-[#1a243b] dark:text-gray-400"
                                    >
                                        {{ form.id_line }}
                                    </p>
                                </div>
                            </div>
                            <button
                                v-if="form.status == 0"
                                @click="submit_contact(form.id)"
                                class="flex-col w-1/2 items-center mt-2 text-white lg:ml-0 p-2 border-2 text-md rounded-md bg-blue-800"
                            >
                                ดูข้อมูลติดต่อ
                            </button>
                            <div v-if="isLoading" class="loading-animation">
                                <div class="loader"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <Textbar></Textbar>
        <div
            class="flex flex-col items-center justify-center p-5 w-full space-y-2 bg-white"
        >
            <label for="" class="text-sans text-3xl mt-5 text-slate-500"
                >ติวเตอร์ที่ท่านอาจสนใจ วิชา
                {{ this.$props.title_subject }}</label
            >
            <div>
                <div
                    class="grid grid-cols-1 gap-3 lg:grid-cols-3 w-auto h-auto mt-5 mb-10 mx-auto"
                >
                    <div
                        v-for="(list, index) in filterSubject"
                        class="relative cursor-pointer bg-slate-100 w-auto lg:w-64 h-72 overflow-hidden group rounded-md shadow-lg shadow-slate-300 hover:shadow-slate-600"
                    >
                        <Link
                            :href="`/subject_detail/${list.id},${list.name},${list.title_subject}`"
                        >
                            <img
                                :src="list.file"
                                class="w-full h-full rounded-md"
                                alt=""
                            />
                            <div
                                class="flex flex-col absolute inset-0 rounded-md bg-black bg-opacity-50 opacity-0 duration-300 group-hover:opacity-100 hover:scale-105 transition-transform transformitems-center justify-center"
                            >
                                <p
                                    class="text-white text-center font-sans text-lg"
                                >
                                    {{ list.name }}
                                </p>
                                <p
                                    class="text-white text-center font-sans text-lg mt-2"
                                >
                                    {{ list.title_subject }}
                                </p>
                                <p
                                    class="text-white text-center font-sans text-lg mt-2"
                                >
                                    {{ list.detail }}
                                </p>
                                <p
                                    class="text-white text-center font-sans text-lg mt-2"
                                >
                                    ราคา {{ list.price }} บาท/ชั่วโมง
                                </p>
                            </div>
                        </Link>
                    </div>
                </div>
            </div>
        </div>
    </LayoutPage>
    <Footer />
    <CardModal v-if="this.card_contact">
        <div
            v-for="(form, index) in filterData"
            class="flex flex-col justify-center text-[#fafafa] sm:px-12 dark:text-gray-100"
        >
            <button
                @click="this.card_contact = false"
                class="cursor-pointer flex justify-end -mt-1 -mr-12"
            >
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="3"
                    stroke="currentColor"
                    class="w-7 h-7"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M6 18L18 6M6 6l12 12"
                    />
                </svg>
            </button>
            <img
                :src="form.file"
                alt=""
                class="w-32 h-32 mx-auto -mt-2 mb-2 rounded-full dark:bg-gray-500 aspect-square"
            />
            <div class="text-center divide-gray-700">
                <div class="my-2 space-y-2">
                    <p class="px-5 text-2xl font-medium dark:text-gray-400">
                        {{ form.phone }}
                    </p>
                    <p class="px-5 text-lg font-base dark:text-gray-400">
                        {{ form.id_line }}
                    </p>
                    <h2 class="text-slate-100 text-lg font-base">
                        {{ form.name }}
                    </h2>
                </div>
                <div
                    class="flex justify-center border-t-2 py-2 space-x-4 align-center"
                >
                    <a
                        rel="noopener noreferrer"
                        href="#"
                        aria-label="GitHub"
                        class="p-2 rounded-md dark:text-gray-100 hover:dark:text-violet-400"
                    >
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke-width="1.5"
                            stroke="currentColor"
                            class="w-8 h-8 fill-current mt-1.5"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M14.25 9.75v-4.5m0 4.5h4.5m-4.5 0l6-6m-3 18c-8.284 0-15-6.716-15-15V4.5A2.25 2.25 0 014.5 2.25h1.372c.516 0 .966.351 1.091.852l1.106 4.423c.11.44-.054.902-.417 1.173l-1.293.97a1.062 1.062 0 00-.38 1.21 12.035 12.035 0 007.143 7.143c.441.162.928-.004 1.21-.38l.97-1.293a1.125 1.125 0 011.173-.417l4.423 1.106c.5.125.852.575.852 1.091V19.5a2.25 2.25 0 01-2.25 2.25h-2.25z"
                            />
                        </svg>
                    </a>
                    <a
                        rel="noopener noreferrer"
                        href="#"
                        aria-label="Dribble"
                        class="p-2 rounded-md dark:text-gray-100 hover:dark:text-violet-400"
                    >
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="w-11 h-11 -ml-1"
                            viewBox="0 0 48 48"
                        >
                            <path
                                fill="#00c300"
                                d="M12.5,42h23c3.59,0,6.5-2.91,6.5-6.5v-23C42,8.91,39.09,6,35.5,6h-23C8.91,6,6,8.91,6,12.5v23C6,39.09,8.91,42,12.5,42z"
                            ></path>
                            <path
                                fill="#fff"
                                d="M37.113,22.417c0-5.865-5.88-10.637-13.107-10.637s-13.108,4.772-13.108,10.637c0,5.258,4.663,9.662,10.962,10.495c0.427,0.092,1.008,0.282,1.155,0.646c0.132,0.331,0.086,0.85,0.042,1.185c0,0-0.153,0.925-0.187,1.122c-0.057,0.331-0.263,1.296,1.135,0.707c1.399-0.589,7.548-4.445,10.298-7.611h-0.001C36.203,26.879,37.113,24.764,37.113,22.417z M18.875,25.907h-2.604c-0.379,0-0.687-0.308-0.687-0.688V20.01c0-0.379,0.308-0.687,0.687-0.687c0.379,0,0.687,0.308,0.687,0.687v4.521h1.917c0.379,0,0.687,0.308,0.687,0.687C19.562,25.598,19.254,25.907,18.875,25.907z M21.568,25.219c0,0.379-0.308,0.688-0.687,0.688s-0.687-0.308-0.687-0.688V20.01c0-0.379,0.308-0.687,0.687-0.687s0.687,0.308,0.687,0.687V25.219z M27.838,25.219c0,0.297-0.188,0.559-0.47,0.652c-0.071,0.024-0.145,0.036-0.218,0.036c-0.215,0-0.42-0.103-0.549-0.275l-2.669-3.635v3.222c0,0.379-0.308,0.688-0.688,0.688c-0.379,0-0.688-0.308-0.688-0.688V20.01c0-0.296,0.189-0.558,0.47-0.652c0.071-0.024,0.144-0.035,0.218-0.035c0.214,0,0.42,0.103,0.549,0.275l2.67,3.635V20.01c0-0.379,0.309-0.687,0.688-0.687c0.379,0,0.687,0.308,0.687,0.687V25.219z M32.052,21.927c0.379,0,0.688,0.308,0.688,0.688c0,0.379-0.308,0.687-0.688,0.687h-1.917v1.23h1.917c0.379,0,0.688,0.308,0.688,0.687c0,0.379-0.309,0.688-0.688,0.688h-2.604c-0.378,0-0.687-0.308-0.687-0.688v-2.603c0-0.001,0-0.001,0-0.001c0,0,0-0.001,0-0.001v-2.601c0-0.001,0-0.001,0-0.002c0-0.379,0.308-0.687,0.687-0.687h2.604c0.379,0,0.688,0.308,0.688,0.687s-0.308,0.687-0.688,0.687h-1.917v1.23H32.052z"
                            ></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </CardModal>
</template>

<script>
import axios from "axios";
import CardModal from "@/Components/CardModal.vue";
export default {
    components: {
        CardModal,
    },
    props: {
        id: String,
        name: String,
        title_subject: String,
    },
    data() {
        return {
            form: {
                id: this.$props.id,
                name: this.$props.name,
                title_subject: this.$props.title_subject,
                detail: "",
                type_subject: "",
                image: "",
                price: "",
                additional_costs: "",
                type_learning: "",
                date_learning: "",
                location_learning: "",
                learning_style: "",
                learning_media: "",
                rating: "",
                status: 0,
            },
            image: [
                {
                    id: 1,
                    name: "ดร. สมชาย แสงสว่าง",
                    title_subject: "ภาษาอังกฤษ",
                    type_subject: "ภาษา",
                    detail: "ปริญญาเอก ภาษาอังกฤษ, มหาวิทยาลัยอัสสัมชัญ",
                    price: "500",
                    file: "/storage/imnayoen.jpeg",
                    additional_costs: "10 ปีที่สอนภาษาอังกฤษในมหาวิทยาลัย",
                    type_learning: "เดี่ยว",
                    date_learning: "จันทร์-พฤหัส, 17:00-19:00",
                    location_learning: "มหาวิทยาลัยอัสสัมชัญ",
                    learning_style: "ส่วนตัว",
                    status: 0,
                    phone: "0901234567",
                    id_line: "line12345",
                    rating: 3,
                    learning_media: "หนังสือ, แผนผัง, แลป",
                },
                {
                    id: 2,
                    name: "ครูวิทยา สุขสวัสดิ์",
                    title_subject: "คณิตศาสตร์",
                    type_subject: "วิชาหลัก",
                    detail: "ปริญญาโท คณิตศาสตร์, มหาวิทยาลัยเชียงใหม่",
                    price: "600",
                    file: "/storage/imnayoen.jpeg",
                    additional_costs: "7 ปีที่สอนคณิตศาสตร์ในโรงเรียนมัธยม",
                    type_learning: "กลุ่ม",
                    date_learning: "อังคาร-ศุกร์, 15:00-18:00",
                    location_learning: "Microsoft Teams Teams",
                    learning_style: "ออนไลน์",
                    status: 0,
                    phone: "0912345678",
                    id_line: "user56789",
                    rating: 5,
                    learning_media: "บทเรียนทางออนไลน์, แบบฝึกหัด",
                },
                {
                    id: 3,
                    name: "นายวิทย์ แสงสว่าง",
                    title_subject: "วิทยาศาสตร์",
                    type_subject: "วิชาหลัก",
                    detail: "ปริญญาตรี วิทยาศาสตร์, มหาวิทยาลัยมหิดล",
                    price: "550",
                    file: "/storage/imnayoen.jpeg",
                    additional_costs: "8 ปีที่สอนวิทยาศาสตร์ในโรงเรียนมัธยม",
                    type_learning: "กลุ่ม",
                    date_learning: "พุธ-เสาร์, 14:00-16:00",
                    location_learning: "บ้านพักอาจารย์",
                    learning_style: "ส่วนตัว",
                    status: 0,
                    phone: "0923456789",
                    id_line: "idLine23456",
                    rating: 4,
                    learning_media: "การทดลอง, สื่อต่างๆ",
                },
                {
                    id: 4,
                    name: "ครูรัชชา สุขสวัสดิ์",
                    title_subject: "ประวัติศาสตร์",
                    type_subject: "วิชาหลัก",
                    detail: "ปริญญาโท ประวัติศาสตร์, มหาวิทยาลัยเทคโนโลยี",
                    price: "450",
                    file: "/storage/imnayoen.jpeg",
                    additional_costs: "4 ปีที่สอนประวัติศาสตร์ในโรงเรียนมัธยม",
                    type_learning: "กลุ่ม",
                    date_learning: "จันทร์-ศุกร์, 18:00-20:00",
                    location_learning: "Microsoft Teams Teams",
                    learning_style: "ออนไลน์",
                    status: 0,
                    phone: "0934567890",
                    id_line: "line78901",
                    rating: 4,
                    learning_media: "หนังสือ, สื่อประกอบ",
                },
                {
                    id: 5,
                    name: "ครูรัชชา สุขสวัสดิ์",
                    title_subject: "ภาษาไทย",
                    type_subject: "ภาษา",
                    detail: "ปริญญาตรี ภาษาไทย, มหาวิทยาลัยธรรมศาสตร์",
                    price: "500",
                    file: "/storage/imnayoen.jpeg",
                    additional_costs: "6 ปีที่สอนภาษาไทยในโรงเรียนมัธยม",
                    type_learning: "กลุ่ม",
                    date_learning: "พุธ-เสาร์, 16:00-18:00",
                    location_learning: "บ้านพักอาจารย์",
                    learning_style: "ส่วนตัว",
                    status: 0,
                    phone: "0945678901",
                    id_line: "randomLine67",
                    rating: 4,
                    learning_media: "หนังสือ, กิจกรรมการเรียน",
                },
                {
                    id: 6,
                    name: "ครูสุขใจ แสงสว่าง",
                    title_subject: "เคมี",
                    type_subject: "วิชาหลัก",
                    detail: "ปริญญาตรี เคมี, มหาวิทยาลัยเชียงใหม่",
                    price: "550",
                    file: "/storage/imnayoen.jpeg",
                    additional_costs: "5 ปีที่สอนเคมีในโรงเรียนมัธยม",
                    type_learning: "กลุ่ม",
                    date_learning: "จันทร์-พุธ, 14:00-16:00",
                    location_learning: "Microsoft Teams",
                    learning_style: "ออนไลน์",
                    status: 0,
                    phone: "0956789012",
                    id_line: "myLine8901",
                    rating: 4,
                    learning_media: "สไลด์",
                },
                {
                    id: 7,
                    name: "ครูสุริยา แสงสว่าง",
                    title_subject: "สังคมศึกษา",
                    type_subject: "วิชาหลัก",
                    detail: "ปริญญาโท สังคมศึกษา, มหาวิทยาลัยมหิดล",
                    price: "500",
                    file: "/storage/imnayoen.jpeg",
                    additional_costs: "8 ปีที่สอนสังคมศึกษาในโรงเรียนมัธยม",
                    type_learning: "เดี่ยว",
                    date_learning: "อังคาร-ศุกร์, 16:00-18:00",
                    location_learning: "Microsoft Teams",
                    learning_style: "ออนไลน์",
                    status: 0,
                    phone: "0967890123",
                    id_line: "line45678",
                    rating: 4,
                    learning_media: "หนังสือ, สื่อต่างๆ",
                },
                {
                    id: 8,
                    name: " ครูสมศรี แสงสว่าง",
                    title_subject: "สังคมศึกษา",
                    type_subject: "วิชาหลัก",
                    detail: "ปริญญาตรี ศิลปะ, มหาวิทยาลัยกรุงเทพ",
                    price: "600",
                    file: "/storage/imnayoen.jpeg",
                    additional_costs: "6 ปีที่สอนศิลปะในโรงเรียนมัธยม",
                    type_learning: "กลุ่ม",
                    date_learning: "พุธ-เสาร์, 15:00-17:00",
                    location_learning: "บ้านพักอาจารย์",
                    learning_style: "ส่วนตัว",
                    status: 0,
                    phone: "0978901234",
                    id_line: "line90123",
                    rating: 4,
                    learning_media: "ภาพ, วีดีโอ, งานปฏิบัติ",
                },
                {
                    id: 9,
                    name: "ครูสุรัตนา แสงสว่าง",
                    title_subject: "การเขียน",
                    type_subject: "ศิลปะ",
                    detail: "ปริญญาโท การเขียนสรรค์, มหาวิทยาลัยเมือง",
                    price: "550",
                    file: "/storage/imnayoen.jpeg",
                    additional_costs: "6 ปีที่สอนการเขียนในโรงเรียนประถม",
                    type_learning: "ส่วนตัว",
                    date_learning: "จันทร์-พฤหัส, 18:00-20:00",
                    location_learning: "บ้านพักอาจารย์",
                    learning_style: "ส่วนตัว",
                    status: 0,
                    phone: "0989012345",
                    id_line: "line01234",
                    rating: 4,
                    learning_media: "การเขียนเรื่อง, การแก้ไข",
                },
                {
                    id: 10,
                    name: "ครูสมพร แสงสว่าง",
                    title_subject: "สุขศึกษา",
                    type_subject: "วิชาหลัก",
                    detail: "ปริญญาตรี สุขศึกษา, มหาวิทยาลัยศิลปากร",
                    price: "500",
                    file: "/storage/imnayoen.jpeg",
                    additional_costs: "5 ปีที่สอนสุขศึกษาในโรงเรียนอนุบาล",
                    type_learning: "กลุ่ม",
                    date_learning: "พุธ-เสาร์, 14:00-16:00",
                    location_learning: "บ้านพักอาจารย์",
                    learning_style: "ส่วนตัว",
                    status: 0,
                    phone: "0990123456",
                    id_line: "line456789",
                    rating: 4,
                    learning_media: "สื่อประกอบ",
                },
                {
                    id: 11,
                    name: "ครูวิทยา แสงสว่าง",
                    title_subject: "ฟิสิกส์",
                    type_subject: "วิชาหลัก",
                    detail: "ปริญญาตรี ฟิสิกส์, มหาวิทยาลัยเชียงใหม่",
                    price: "600",
                    file: "/storage/imnayoen.jpeg",
                    additional_costs: "8 ปีที่สอนฟิสิกส์ในโรงเรียนมัธยม",
                    type_learning: "กลุ่ม",
                    date_learning: "จันทร์-พุธ, 15:00-17:00",
                    location_learning: "Microsoft Teams",
                    learning_style: "ออนไลน์",
                    status: 0,
                    phone: "0954321098",
                    id_line: "line7890ab",
                    rating: 4,
                    learning_media: "แผนผัง, การทดลอง",
                },
                {
                    id: 12,
                    name: "ครูสุชาติ แสงสว่าง",
                    title_subject: "มิติเรขาคณิต",
                    type_subject: "วิชาหลัก",
                    detail: "ปริญญาโท คณิตศาสตร์ประยุกต์, มหาวิทยาลัยมหิดล",
                    price: "550",
                    file: "/storage/imnayoen.jpeg",
                    additional_costs: "9 ปีที่สอนมิติเรขาคณิตในโรงเรียนมัธยม",
                    type_learning: "กลุ่ม",
                    date_learning: "อังคาร-ศุกร์, 16:00-19:00",
                    location_learning: "Microsoft Teams",
                    learning_style: "ออนไลน์",
                    status: 0,
                    phone: "0943210987",
                    id_line: "line2345cd",
                    rating: 4,
                    learning_media: "แบทเรียนทางออนไลน์, แบบฝึกหัด",
                },
                {
                    id: 13,
                    name: "ภูมิศาสตร์",
                    title_subject: "มิติเรขาคณิต",
                    type_subject: "วิชาหลัก",
                    detail: "ปริญญาโท คณิตศาสตร์ประยุกต์, มหาวิทยาลัยมหิดล",
                    price: "500",
                    file: "/storage/imnayoen.jpeg",
                    additional_costs: "3 ปีที่สอนมิติเรขาคณิตในโรงเรียนมัธยม",
                    type_learning: "กลุ่ม",
                    date_learning: "อังคาร-ศุกร์, 16:00-19:00",
                    location_learning: "Microsoft Teams",
                    learning_style: "ออนไลน์",
                    status: 0,
                    phone: "0932109876",
                    id_line: "line6789ef",
                    rating: 4,
                    learning_media: "",
                },
                {
                    id: 14,
                    name: "ครูศิริรัตน์ แสงสว่าง",
                    title_subject: "ศิลปะการตกแต่ง",
                    type_subject: "วิชาหลัก",
                    detail: "ปริญญาโท ศิลปะการตกแต่ง, มหาวิทยาลัยกรุงเทพ",
                    price: "600",
                    file: "/storage/imnayoen.jpeg",
                    additional_costs: "7 ปีที่สอนศิลปะการตกแต่งในโรงเรียนมัธยม",
                    type_learning: "กลุ่ม",
                    date_learning: "จันทร์-พุธ, 18:00-20:00",
                    location_learning: "บ้านพักอาจารย์",
                    learning_style: "ส่วนตัว",
                    status: 0,
                    phone: "0921098765",
                    id_line: "line0123gh",
                    rating: 4,
                    learning_media: "",
                },
                {
                    id: 15,
                    name: "ครูธนวัฒน์ แสงสว่าง",
                    title_subject: " วิทยาศาสตร์การคอมพิวเตอร์",
                    type_subject: "เทคโนโลยี",
                    detail: "ปริญญาตรี วิทยาการคอมพิวเตอร์, มหาวิทยาลัยเทคโนโลยี",
                    price: "550",
                    file: "/storage/imnayoen.jpeg",
                    additional_costs:
                        "7 ปีที่สอนวิทยาศาสตร์การคอมพิวเตอร์ในมหาวิทยาลัยเทคโนโลยี",
                    type_learning: "กลุ่ม",
                    date_learning: "พุธ-เสาร์, 15:00-17:00",
                    location_learning: "Microsoft Teams",
                    learning_style: "ออนไลน์",
                    status: 0,
                    phone: "0910987654",
                    id_line: "line456ij",
                    rating: 4,
                    learning_media: "โค้ด, แผนผัง",
                },
                {
                    id: 16,
                    name: "ครูมานะ แสงสว่าง",
                    title_subject: "ภาษาจีน",
                    type_subject: "ภาษา",
                    detail: "ปริญญาตรี ภาษาจีน, มหาวิทยาลัยเหนือ",
                    price: "550",
                    file: "/storage/imnayoen.jpeg",
                    additional_costs:
                        "4 ปีที่สอนวิทยาศาสตร์กาภาษาจีนในมหาวิทยาลัยเหนือ",
                    type_learning: "กลุ่ม",
                    date_learning: "จันทร์-พุธ, 17:00-19:00",
                    location_learning: "Microsoft Teams",
                    learning_style: "ออนไลน์",
                    status: 0,
                    phone: "0909876543",
                    id_line: "line789kl",
                    rating: 4,
                    learning_media: "",
                },
                {
                    id: 17,
                    name: "ครูวิทยา แสงสว่าง",
                    title_subject: "วิทยาศาสตร์ทางสังคม",
                    type_subject: "วิชาหลัก",
                    detail: "โท วิทยาศาสตร์ทางสังคม, มหาวิทยาลัยศรีนครินทรวิโรฒ",
                    price: "500",
                    file: "/storage/imnayoen.jpeg",
                    additional_costs:
                        "4 ปีที่สอนวิทยาศาสตร์กาภาษาจีนในมหาวิทยาลัยศรีนครินทรวิโรฒ",
                    type_learning: "กลุ่ม",
                    date_learning: "อังคาร-ศุกร์, 16:00-18:00",
                    location_learning: "Microsoft Teams",
                    learning_style: "ออนไลน์",
                    status: 0,
                    phone: "0987654321",
                    id_line: "line0123mn",
                    rating: 4,
                    learning_media: "",
                },
                {
                    id: 18,
                    name: "ครูศรีวรรณ แสงสว่าง",
                    title_subject: "พลศึกษา",
                    type_subject: "c",
                    detail: "ปริญญาตรี พลศึกษา, มหาวิทยาลัยนครราชสีมา",
                    price: "550",
                    file: "/storage/imnayoen.jpeg",
                    additional_costs:
                        "4 ปีที่สอนวิทยาศาสตร์กาพลศึกษาในมหาวิทยาลัยนครราชสีมา",
                    type_learning: "กลุ่ม",
                    date_learning: "จันทร์-พุธ, 15:00-17:00",
                    location_learning: "Microsoft Teams",
                    learning_style: "ออนไลน์",
                    status: 0,
                    phone: "0976543210",
                    id_line: "line456op",
                    rating: 4,
                    learning_media: "",
                },
                {
                    id: 19,
                    name: "ครูวรรณี แสงสว่าง",
                    title_subject: "วรรณคดี",
                    type_subject: "วิชาหลัก",
                    detail: "ปริญญาตรี วรรณคดี, มหาวิทยาลัยมหิดล",
                    price: "500",
                    file: "/storage/imnayoen.jpeg",
                    additional_costs: "7 ปีที่สอนวรรณคดีในโรงเรียนมัธยม",
                    type_learning: "กลุ่ม",
                    date_learning: "พุธ-ศุกร์, 17:00-19:00",
                    location_learning: "Microsoft Teams",
                    learning_style: "ออนไลน์",
                    status: 0,
                    phone: "0965432109",
                    id_line: "line789qr",
                    rating: 4,
                    learning_media: "",
                },
                {
                    id: 20,
                    name: "ครูวุทย์ แสงสว่าง",
                    title_subject: "คอมพิวเตอร์ศึกษา",
                    type_subject: "เทคโนโลยี",
                    detail: "ปริญญาตรี คอมพิวเตอร์ศึกษา, มหาวิทยาลัยราชภัฏ",
                    price: "550",
                    file: "/storage/imnayoen.jpeg",
                    additional_costs:
                        "3 ปีที่สอนคอมพิวเตอร์ศึกษาในมหาวิทยาลัยราชภัฏ",
                    type_learning: "กลุ่ม",
                    date_learning: "อังคาร-ศุกร์, 14:00-16:00",
                    location_learning: "Microsoft Teams",
                    learning_style: "ออนไลน์",
                    status: 0,
                    phone: "0954321098",
                    id_line: "line0123st",
                    rating: 4,
                    learning_media: "โค้ด, แบบฝึกหัด",
                },
                {
                    id: 21,
                    name: "ครูวุทย์ แสงสว่าง",
                    title_subject: "เศรษฐศาสตร์",
                    type_subject: "วิชาหลัก",
                    detail: "ปริญญาโท เศรษฐศาสตร์, มหาวิทยาลัยเชียงใหม่",
                    price: "600",
                    file: "/storage/imnayoen.jpeg",
                    additional_costs: "10 ปีที่สอนเศรษฐศาสตร์ในโรงเรียนมัธยม",
                    type_learning: "กลุ่ม",
                    date_learning: "จันทร์-พุธ, 16:00-18:00",
                    location_learning: "Microsoft Teams",
                    learning_style: "ออนไลน์",
                    status: 0,
                    phone: "0943210987",
                    id_line: "line456uv",
                    rating: 4,
                    learning_media: "หนังสือ, กราฟ",
                },
                {
                    id: 22,
                    name: "ครูศิริรัตน์ แสงสว่าง",
                    title_subject: "ศิลปะนิพนธ์",
                    type_subject: "วิชาหลัก",
                    detail: "ปริญญาโท เศรษฐศาสตร์, มหาวิทยาลัยเชียงใหม่",
                    price: "550",
                    file: "/storage/imnayoen.jpeg",
                    additional_costs: "8 ปีที่สอนศิลปะนิพนธ์ในโรงเรียนมัธยม",
                    type_learning: "กลุ่ม",
                    date_learning: "พุธ-ศุกร์, 17:00-19:00",
                    location_learning: "บ้านพักอาจารย์",
                    learning_style: "ส่วนตัว",
                    status: 0,
                    phone: "0932109876",
                    id_line: "line789wx",
                    rating: 4,
                    learning_media: "การเขียน, วาดรูป",
                },
                {
                    id: 23,
                    name: "ครูสุวรรณ แสงสว่าง",
                    title_subject: "การออกแบบกราฟิก",
                    type_subject: "เทคโนโลยี",
                    detail: "ปริญญาตรี ภาษาญี่ปุ่น, มหาวิทยาลัยศิลปากร",
                    price: "600",
                    file: "/storage/imnayoen.jpeg",
                    additional_costs:
                        "8 ปีที่สอนการออกแบบกราฟิกในมหาวิทยาลัยเชียงใหม่",
                    type_learning: "กลุ่ม",
                    date_learning: "จันทร์-พุธ, 15:00-17:00",
                    location_learning: "Microsoft Teams",
                    learning_style: "ออนไลน์",
                    status: 0,
                    phone: "0921098765",
                    id_line: "line0123yz",
                    rating: 4,
                    learning_media: "โปรแกรมออกแบบ, ภาพวาด",
                },
                {
                    id: 24,
                    name: "ครูธิติ แสงสว่าง",
                    title_subject: "ภาษาญี่ปุ่น",
                    type_subject: "ภาษา",
                    detail: "ปริญญาตรี ภาษาญี่ปุ่น, มหาวิทยาลัยศิลปากร",
                    price: "550",
                    file: "/storage/imnayoen.jpeg",
                    additional_costs:
                        "8 ปีที่สอนภาษาญี่ปุ่นในมหาวิทยาลัยเชียงใหม่",
                    type_learning: "กลุ่ม",
                    date_learning: "พุธ-ศุกร์, 16:00-18:00",
                    location_learning: "Microsoft Teams",
                    learning_style: "ออนไลน์",
                    status: 0,
                    phone: "0910987654",
                    id_line: "line456abc",
                    rating: 4,
                    learning_media: "การฟัง-พูด-อ่าน-เขียน",
                },
                {
                    id: 25,
                    name: "ครูสุวรรณ แสงสว่าง",
                    title_subject: "กีต้าไฟฟ้า",
                    type_subject: "ดนตรี",
                    detail: "ปริญญาตรี ดุริยางคศาสตร์, มหาวิทยาลัยราชภัฏ",
                    price: "300",
                    file: "/storage/imnayoen.jpeg",
                    additional_costs:
                        "8 ปีที่สอนกีต้าไฟฟ้าในมหาวิทยาลัยเชียงใหม่",
                    type_learning: "กลุ่ม",
                    date_learning: "จันทร์-พุธ, 15:00-17:00",
                    location_learning: "บ้านพักอาจารย์",
                    learning_style: "ส่วนตัว",
                    status: 0,
                    phone: "0909876543",
                    id_line: "line789def",
                    rating: 4,
                    learning_media: "เครื่องดนตรี, การร้องเพลง",
                },
            ],
            filterData: "",
            filterSubject: "",
            card_contact: false,
            isLoading: false,
        };
    },
    methods: {
        fetchData() {
            const formData = new FormData();

            formData.append("id", this.form.id);
            formData.append("name", this.form.name);
            formData.append("title_subject", this.form.title_subject);
            formData.append("status", this.form.status);

            axios
                .post("/fetch_tutordetail", formData)
                .then((response) => {
                    this.filterData = this.image.filter((item) => {
                        const titleMatches = item.id == response.data.id;
                        const statusMatches = (item.status =
                            response.data.status);
                        return titleMatches && statusMatches;
                    });

                    console.log(this.filterData);
                })
                .catch((error) => {
                    console.error("Error fetching data:", error);
                });
        },
        fetchSubject() {
            const formData = new FormData();

            formData.append("id", this.form.id);
            formData.append("name", this.form.name);
            formData.append("title_subject", this.form.title_subject);

            axios
                .post("/fetch_tutordetail", formData)
                .then((response) => {
                    this.filterSubject = this.image.filter((item) => {
                        const titleMatches =
                            item.title_subject == response.data.title_subject;

                        return titleMatches;
                    });

                    console.log(this.filterSubject);
                })
                .catch((error) => {
                    console.error("Error fetching data:", error);
                });
        },
        submit_contact(id) {
            this.isLoading = true;

            const formData = new FormData();
            this.form.id = id;
            console.log(this.form.id);
            formData.append("id", id);

            setTimeout(() => {
                axios
                    .post("/check_login", formData)
                    .then((response) => {
                        if (response.data) {
                            this.card_contact = true;
                            this.filterData = this.image.filter((item) => {
                                const titleMatches =
                                    item.id == response.data.id;
                                const statusMatches = (item.status =
                                    response.data.status);
                                return titleMatches && statusMatches;
                            });
                            console.log(this.filterData);
                        }
                    })
                    .catch((error) => {
                        console.error("Error fetching data:", error);
                    })
                    .finally(() => {
                        this.isLoading = false;
                    });
            }, 1300);
        },
    },
    mounted() {
        this.fetchData();
        this.fetchSubject();
    },
};
</script>

<style>
.img-container img {
    object-fit: cover;
    width: 100%;
    height: 100%;
}
.loading-animation {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(239, 239, 239, 0.8);
    display: flex;
    align-items: center;
    justify-content: center;
    z-index: 999;
}

.loader {
    border: 4px solid #f3f3f3;
    border-top: 4px solid #2394da;
    border-radius: 50%;
    width: 50px;
    height: 50px;
    animation: spin 1s linear infinite;
}

@keyframes spin {
    0% {
        transform: rotate(0deg);
    }
    100% {
        transform: rotate(360deg);
    }
}
</style>
