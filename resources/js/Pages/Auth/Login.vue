<script setup>

import {useForm} from "@inertiajs/vue3";



let form = useForm({
    email: '',
    password: ''
})

const onSubmit = () => {
    form.post('/login')
}

</script>

<template>
    <Head title="User Login"/>




    <main class="max-w-md mx-auto border px-4 pb-5 rounded">
        <h1 class="text-2xl font-bold mt-5">Login</h1>
        <section>
            <form
                action="/"
                method="post"
                @submit.prevent="onSubmit"
                class=" mt-5 space-y-5">


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


                <button type="submit" class="bg-blue-600 text-white hover:bg-blue-500 px-4 py-2 rounded disabled:bg-blue-200" :disabled="form.processing">Login</button>


            </form>
        </section>
    </main>


</template>

<style scoped>

</style>
