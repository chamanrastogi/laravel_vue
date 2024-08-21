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
