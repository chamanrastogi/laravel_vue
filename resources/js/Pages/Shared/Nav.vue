<script setup>
import { ref, onBeforeUpdate } from "vue";
import { Link } from '@inertiajs/vue3';
const open = defineModel({ default: false });
const openTop = ref( false );
const hasError = ref(false);
</script>
<template>

    <div class="py-2 px-6 bg-[#f8f4f3] flex items-center shadow-md shadow-black/5 sticky top-0 left-0 z-30">
        <button @click=" open = !open;" type="button" class="text-lg text-gray-900 font-semibold sidebar-toggle">
            <i class="ri-menu-line"></i>
        </button>

        <ul class="ml-auto flex items-center">

            <li class="dropdown ml-3">

                <button type="button" @click=" openTop = !openTop;" class="dropdown-toggle flex items-center">
                    <div class="flex-shrink-0 w-10 h-10 relative">
                        <div class="p-1 bg-white rounded-full focus:outline-none focus:ring">
                            <img class="w-8 h-8 rounded-full"
                                src="https://laravelui.spruko.com/tailwind/ynex/build/assets/images/faces/9.jpg"
                                alt="" />
                            <div
                                class="top-0 left-7 absolute w-3 h-3 bg-lime-400 border-2 border-white rounded-full animate-ping">
                            </div>
                            <div class="top-0 left-7 absolute w-3 h-3 bg-lime-500 border-2 border-white rounded-full">
                            </div>
                        </div>
                    </div>
                    <div class="p-2 md:block text-left">
                        <h2 class="text-sm font-semibold text-gray-800 text-capitalize"> {{ $page.props.auth.user.name
                            }}</h2>
                        <p class="text-xs text-gray-500 text-danger text-capitalize"> {{ $page.props.auth.user.role }}
                        </p>
                    </div>
                </button>
                <ul class="absolute z-50 mt-2 rounded-md shadow-lg w-48 ltr:origin-top-right rtl:origin-top-left end-0dropdown-menu shadow-md shadow-black/5 z-30 py-1.5 rounded-md bg-white border border-gray-100 w-full max-w-[140px]"
                    :class="{ 'hidden': !openTop, '': hasError }">
                    <li>
                        <Link :href="route('profile.edit')"
                            class="flex items-center text-[13px] py-1.5 px-4 text-gray-600 hover:text-[#f84525] hover:bg-gray-50 cursor-pointer">
                        Profile </Link>
                    </li>
                    <li>
                        <Link :href="route('logout')" method="post" as="button"
                            class="flex items-center text-[13px] py-1.5 px-4 text-gray-600 hover:text-[#f84525] hover:bg-gray-50 cursor-pointer">
                        Logout </Link>
                    </li>

                </ul>
            </li>
        </ul>
    </div>
</template>
