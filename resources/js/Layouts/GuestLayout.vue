<script setup>
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import { Link,Head } from '@inertiajs/vue3';
</script>

<template>

    <Head>

        <link rel="stylesheet" href="/backend/assets/css/style.css">
        <link rel="stylesheet" href="/backend/assets/css/remixicon.css">
        <link rel="stylesheet" href="/backend/assets/css/lib/bootstrap.min.css">

    </Head>
    <slot />

</template>
