<script setup>
import {Link} from "@inertiajs/vue3";

defineProps({
    href: String,
    title: String,
    method: {
        type: String,
        default: 'get',
        required: false
    }
})
</script>
<template>
    <Link :href="href" :method="method"
          class="hover:bg-violet-200 px-4 py-1 transition-colors duration-300 rounded-2xl" :class="$page.url === href ? 'font-semibold' : 'font-normal' ">{{ title }}
    </Link>
</template>
