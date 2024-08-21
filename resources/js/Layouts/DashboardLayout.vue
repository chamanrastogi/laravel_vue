<script setup>
import { ref } from "vue";
import Sidebar from '@/Pages/Shared/Sidebardash.vue';
import Nav from '@/Pages/Shared/Nav.vue';
import { Link } from '@inertiajs/vue3';

const isOpen = defineModel();
const hasError = ref(false);
</script>
<template>

    <!--Sidenav -->
    <Sidebar v-model="isOpen" />
    <!-- end sidenav -->
    <main class="w-full md:w-[calc(100%-256px)] md:ml-64 bg-gray-200 min-h-screen transition-all main" :class="{ 'active': isOpen }">
        <!-- navbar -->
        <Nav v-model="isOpen" />

    <!-- end navbar -->

    <!-- Content -->
    <slot />
    <!-- End Content -->
    </main>
</template>
