<script setup>

import {reactive} from "vue";
import {router, useForm} from "@inertiajs/vue3";



let form = useForm({
    name: '',
    email: '',
    password: ''
})

const onSubmit = () => {
    form.post('/users')
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
            <p v-if="form.errors.name" v-text="form.errors.name"
               class="text-red-500 font-semibold text-sm"></p>
        </div>

        <div class="flex flex-col gap-1">
            <label for="email" class="text-base uppercase">Email</label>
            <input
                v-model="form.email"
                type="text"
                id="email"
                name="email"
                class="bg-slate-200 py-1.5 rounded px-2 border border-slate-400">
            <p v-if="form.errors.email" v-text="form.errors.email"
               class="text-red-500 font-semibold text-sm"></p>

        </div>

        <div class="flex flex-col gap-1">
            <label for="password" class="text-base uppercase">Password</label>
            <input
                v-model="form.password"
                type="password"
                id="password"
                name="password"
                class="bg-slate-200 py-1.5 rounded px-2 border border-slate-400">
            <p v-if="form.errors.password" v-text="form.errors.password"
               class="text-red-500 font-semibold text-sm"></p>
        </div>


        <button type="submit" class="bg-blue-600 text-white hover:bg-blue-500 px-4 py-2 rounded disabled:bg-blue-200" :disabled="form.processing">Submit</button>


    </form>

</template>

<style scoped>

</style>
