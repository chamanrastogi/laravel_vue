<script setup>
import { ref } from "vue";
import Sidebar from '@/Pages/Shared/Sidebardash.vue';
import Nav from '@/Pages/Shared/Nav.vue';
import Footer from '@/Pages/Shared/Footer.vue';
import { Link,Head } from '@inertiajs/vue3';

const isOpen = defineModel();
const themeMode = defineModel('themeMode');
const hasError = ref(false);
</script>

<template >

    <Head>

        <link rel="stylesheet" href="/backend/assets/css/remixicon.css">
        <link rel="stylesheet" href="/backend/assets/css/lib/bootstrap.min.css">
        <link rel="stylesheet" href="/backend/assets/css/style.css">


    </Head>

    <!--Sidenav -->
    <Sidebar v-model="isOpen" />
    <!-- end sidenav -->
    <main class="dashboard-main" :class="{ 'active': isOpen, '': !isOpen }"> <!-- navbar -->

        <Nav v-model="isOpen" v-model:themeMode="themeMode" />

        <!-- end navbar -->

        <!-- Content -->
        <slot />
        <!-- End Content -->
        <Footer />

    </main>

</template>

