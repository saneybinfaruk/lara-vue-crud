<script setup>

import {reactive} from "vue";
import {router} from "@inertiajs/vue3";

let form = reactive({
    name: '',
    email: '',
    password: ''
})

const onSubmit = () => {
    router.post('/users', form)
}

</script>

<template>
    <Head title="Create User"/>

    <h1 class="text-2xl font-bold mt-5">Create User</h1>


    <form
        action="/"
        method="post"
        @submit.prevent="onSubmit"
        class="max-w-lg mx-auto mt-5 space-y-5">

        <div class="flex flex-col gap-1">
            <label for="name" class="text-base uppercase">Name</label>
            <input
                v-model="form.name"
                type="text"
                id="name"
                name="name"
                class="bg-slate-200 py-1.5 rounded px-2 border border-slate-400">
        </div>

        <div class="flex flex-col gap-1">
            <label for="name" class="text-base uppercase">Email</label>
            <input
                v-model="form.email"
                type="text"
                id="email"
                name="email"
                class="bg-slate-200 py-1.5 rounded px-2 border border-slate-400">
        </div>

        <div class="flex flex-col gap-1">
            <label for="name" class="text-base uppercase">Password</label>
            <input
                v-model="form.password"
                type="text"
                id="name"
                name="name"
                class="bg-slate-200 py-1.5 rounded px-2 border border-slate-400">
        </div>


        <button type="submit" class="bg-blue-600 text-white hover:bg-blue-500 px-4 py-2 rounded">Submit</button>


    </form>

</template>

<style scoped>

</style>
