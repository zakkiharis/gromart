<template>
    <MainLayouts :current-page="currentPage">
        <div>Name: {{ user.name }}</div>
        <div>Email: {{ user.email }}</div>
        <h1>Hellow World</h1>
    </MainLayouts>
</template>

<script setup>
import MainLayouts from '../layouts/MainLayout.vue';

defineProps({
    currentPage: String,
    user: Object,
})
</script>