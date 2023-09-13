<template>
<div class="font-bold text-6xl bg-amber-500">
    {{ message }}! <Link :href="route('dashboard')">Dashboard</Link>
</div>

    <Head >
        <title>Home</title>
        <meta name="description" content="Inertia Home Page">

    </Head>
</template>


<script setup>

import {Head,Link} from '@inertiajs/vue3';
 defineProps({
     message : String
 })

</script>
