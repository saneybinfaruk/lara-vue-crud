<script setup lang="ts">
import Layout from "../Shared/Layout.vue";

defineProps({
    name: String,
    frameworks: Array,
    date: String
})
</script>


<template>

    <Layout>
        <h1>Home</h1>
    </Layout>

</template>

