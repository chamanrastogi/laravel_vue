<script setup>
import { Head, Link } from '@inertiajs/vue3';
import { ref } from "vue";
import Top from '@/Components/Front/Top.vue';
import Navigation from '@/Components/Front/Navigation.vue';
import Footer from '@/Components/Front/Footer.vue';
import Copywrite from '@/Components/Front/Copywrite.vue';
defineProps(['isHome']);

</script>
<template>

    <Head>
        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link
            href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Roboto:wght@400;500;700;900&display=swap"
            rel="stylesheet">

        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link rel="stylesheet" href="/frontend/lib/animate/animate.min.css" />
        <link href="/frontend/lib/lightbox/css/lightbox.min.css" rel="stylesheet">
        <link href="/frontend/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">


        <!-- Customized Bootstrap Stylesheet -->
        <link href="/frontend/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="/frontend/css/style.css">

    </Head>
    <!-- Topbar Start -->
    <Top />
    <!-- Topbar End -->
    <Navigation :isHome="isHome" />

    <slot />
    <!-- Footer Start -->
    <Footer />
    <!-- Footer End -->

    <!-- Copyright Start -->
    <Copywrite />
    <!-- Copyright End -->



</template>
