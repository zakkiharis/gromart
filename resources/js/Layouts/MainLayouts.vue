
<script setup>
import {Link} from '@inertiajs/vue3'
import { Icon } from '@iconify/vue';

defineProps({
    currentPage: String,
})
</script>


<template>
    <main>
        <div>
            <Icon icon="mdi-light:home" style="font-size: 24px;" />
        </div>
        <header>
            <Link href="/" class="px-3 py-2 bg-gray-300 rounded mr-2">Home</Link>
            <Link href="/profile" class="px-3 py-2 bg-gray-300 rounded mr-2">profile</Link>
        </header>
        <article class="mt-10">
            <div class="mb-5"> Curretnt Page: {{ currentPage }}</div>
            <slot />
        </article>
    </main>
</template>