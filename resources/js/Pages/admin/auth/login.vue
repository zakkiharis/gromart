<script setup>

import { Head } from '@inertiajs/vue3';
import { Icon } from '@iconify/vue';

defineProps({
    title: String
})

</script>


<template>
    <Head :title="title"></Head>
    <div>
        <h1>Lorem Ipsum Dolor</h1> 
        <p>Ini titile {{ title }}</p>
        <Icon icon="mdi-light:home" />
        
    </div>
</template>