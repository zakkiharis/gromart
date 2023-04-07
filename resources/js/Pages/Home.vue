<template>
    <MainLayouts :current-page="currentPage">
        <h1>Home Page</h1>
    </MainLayouts>
</template>

<script setup>
import MainLayouts from '../Layouts/MainLayouts.vue';

defineProps({
    currentPage: String,
})

</script>