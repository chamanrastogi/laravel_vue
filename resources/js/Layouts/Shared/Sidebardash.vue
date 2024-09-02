
<script setup>
import { Link } from "@inertiajs/vue3";
import { ref} from "vue";
const isOpen = defineModel();
const hasError = ref();
</script>
<template>

    <!--sidenav -->
    <aside class="sidebar" :class="{ 'active': isOpen, '': hasError }">
        <button type="button" class="sidebar-close-btn">
            <iconify-icon icon="radix-icons:cross-2"></iconify-icon>
        </button>
        <div>
            <a href="index.html" class="sidebar-logo">
                <img src="/backend/assets/images/logo.png" alt="site logo" class="light-logo">
                <img src="/backend/assets/images/logo-light.png" alt="site logo" class="dark-logo">
                <img src="/backend/assets/images/logo-icon.png" alt="site logo" class="logo-icon">
            </a>
        </div>
        <div class="sidebar-menu-area">
            <ul class="sidebar-menu" id="sidebar-menu">
                <li>
                    <Link :href="route('dashboard')">
                    <iconify-icon icon="solar:home-smile-angle-outline" class="menu-icon"></iconify-icon>
                    <span>Dashboard</span>
                    </Link>

                </li>
                <li class="sidebar-menu-group-title">Application</li>
                <li>
                    <a href="email.html">
                        <iconify-icon icon="mage:email" class="menu-icon"></iconify-icon>
                        <span>Email</span>
                    </a>
                </li>


                <li class="sidebar-menu-group-title">Settings</li>


                <li>
                    <Link :href="route('site.setting')">
                    <iconify-icon icon="icon-park-outline:setting-two" class="menu-icon"></iconify-icon>
                    <span>Site Settings</span>
                    </Link>

                </li>

            </ul>
        </div>
    </aside>

</template>
