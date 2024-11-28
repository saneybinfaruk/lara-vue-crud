<script setup>
import {Link, usePage} from "@inertiajs/vue3";

defineProps({
    href: String,
    title: String,
    method: {
        type: String,
        default: 'get',
        required: false
    },

})

</script>
<template>
    <Link :href="href" :method="method"
          class="hover:bg-violet-200 px-4 py-1 transition-colors duration-300 rounded-2xl"
          :class="href.includes($page.url.slice(0,5)) ? 'bg-violet-200 font-semibold' : 'font-normal' ">{{ title }}
    </Link>
</template>
