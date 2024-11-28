<script setup>
import {Link} from "@inertiajs/vue3";

defineProps({
    links: Array
})
</script>

<template>
    <Component
        v-for="link in links"
        :is="link.url ? Link : 'span' "
        :key="link.label"
        :href="link.url"
        v-html="link.label"
        class="px-1"
        :class="link.active ? 'font-bold text-mg':'' || link.url? '':'text-gray-400' "
    />
</template>
