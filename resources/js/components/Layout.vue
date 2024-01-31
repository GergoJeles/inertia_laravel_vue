<template>
    <Head title="Inertia JS"></Head>
    <Navbar />
    <slot> </slot>

    <Footer />
</template>

<script setup>
import Footer from "@/components/Footer.vue";
import Link from "@/components/Link.vue";
import Navbar from "@/components/Navbar.vue";
import { Head } from "@inertiajs/vue3";
</script>
