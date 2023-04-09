
<script setup>
import Header from './Header/index.vue'

const props = defineProps({
    currentPage: String,
})
</script>


<template>
    <main>
        <Header />

        <body class="mt-10">
            <div class="mb-5"> Curretnt Pages: {{ props.currentPage }}</div>
            <slot />
        </body>
    </main>
</template>