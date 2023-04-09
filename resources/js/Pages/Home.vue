<template>
    <MainLayouts :current-page="currentPage">
        <h1 class="">Home Page</h1>
    </MainLayouts>
</template>

<script setup>
import MainLayouts from '../layouts/MainLayout.vue';

defineProps({
    currentPage: String,
})

</script>