<script setup>
import { ref } from "vue";
import { Link } from '@inertiajs/vue3';
const openTop = defineModel();
const themeMode = defineModel('themeMode',{default:true});
const toggleBodyClass = () =>
{

    themeMode.value = !themeMode.value;
    const html = document.documentElement;

    // Toggle the `data-theme` attribute
    if (themeMode.value) {
        html.setAttribute('data-theme', 'dark');
    } else {
        html.setAttribute('data-theme', 'light');
    }
}
</script>
<template>

    <div class="navbar-header">
        <div class="row align-items-center justify-content-between">
            <div class="col-auto">
                <div class="d-flex flex-wrap align-items-center gap-4">
                    <button type="button" class="sidebar-toggle" :class="{ 'active': openTop, '': !openTop }">
                        <iconify-icon @click="openTop = !openTop;"
                            :icon="!openTop?'heroicons:bars-3-solid':'iconoir:arrow-right'"
                            :class="{ 'non-active': !openTop, '': openTop }" class="icon text-2xl"></iconify-icon>

                    </button>
                    <button type="button" class="sidebar-mobile-toggle">
                        <iconify-icon icon="heroicons:bars-3-solid" class="icon"></iconify-icon>
                    </button>

                </div>
            </div>

            <div class="col-auto">
                <div class="d-flex flex-wrap align-items-center gap-3">
                    <button type="button" @click="toggleBodyClass()" data-theme-toggle=""
                        class="w-40-px h-40-px bg-neutral-200 rounded-circle d-flex justify-content-center align-items-center"
                        :aria-label=" themeMode ?'light' :'dark' ">light</button>

                    <div class="dropdown">
                        <button class="d-flex justify-content-center align-items-center rounded-circle" type="button"
                            data-bs-toggle="dropdown">
                            <img src="/backend/assets/images/user.png" alt="image"
                                class="w-40-px h-40-px object-fit-cover rounded-circle">
                        </button>
                        <div class="dropdown-menu to-top dropdown-menu-sm">
                            <div
                                class="py-12 px-16 radius-8 bg-primary-50 mb-16 d-flex align-items-center justify-content-between gap-2">
                                <div>
                                    <h6 class="text-lg text-primary-light fw-semibold mb-2"> {{
                                        $page.props.auth.user.name }}</h6>
                                    <span
                                        class="text-secondary-light fw-medium text-sm text-capitalize text-white bg-danger badge">
                                        {{ $page.props.auth.user.role }}</span>
                                </div>
                                <button type="button" class="hover-text-danger">
                                    <iconify-icon icon="radix-icons:cross-1" class="icon text-xl"></iconify-icon>
                                </button>
                            </div>
                            <ul class="to-top-list">
                                <li>
                                    <Link
                                        class="dropdown-item text-black px-0 py-8 hover-bg-transparent hover-text-primary d-flex align-items-center gap-3"
                                        :href="route('profile.edit')">
                                    <iconify-icon icon="solar:user-linear" class="icon text-xl"></iconify-icon> My
                                    Profile</Link>
                                </li>
                                <li>
                                    <a class="dropdown-item text-black px-0 py-8 hover-bg-transparent hover-text-primary d-flex align-items-center gap-3"
                                        href="email.html">
                                        <iconify-icon icon="tabler:message-check" class="icon text-xl"></iconify-icon>
                                        Inbox</a>
                                </li>
                                <li>
                                    <a class="dropdown-item text-black px-0 py-8 hover-bg-transparent hover-text-primary d-flex align-items-center gap-3"
                                        href="company.html">
                                        <iconify-icon icon="icon-park-outline:setting-two"
                                            class="icon text-xl"></iconify-icon> Setting</a>
                                </li>
                                <li>
                                    <Link
                                        class="dropdown-item text-black px-0 py-8 hover-bg-transparent hover-text-danger d-flex align-items-center gap-3"
                                        :href="route('logout')" method="post" as="button">
                                    <iconify-icon icon="lucide:power" class="icon text-xl"></iconify-icon> Log
                                    Out</Link>
                                </li>
                            </ul>
                        </div>
                    </div><!-- Profile dropdown end -->
                </div>
            </div>
        </div>
    </div>

</template>
