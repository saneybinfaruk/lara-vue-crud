<script setup lang="ts">
import Layout from "../Shared/Layout.vue";


defineProps({
    name: String,
    frameworks: Array,
    date: String
})

defineOptions({
    layout: Layout
})
</script>


<template>

    <h1>Home</h1>

</template>

