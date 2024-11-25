<script setup lang="ts">
import Layout from "../Shared/Layout.vue";
import {Link} from "@inertiajs/vue3";


defineProps({
    users: Object
})

defineOptions({
    layout: Layout
})


</script>


<template>

    <Head title="Home"/>


    <div>
        <div class="py-8 space-y-1">
            <h3 class="text-xl font-semibold">Users</h3>
            <p>A list of all the users in your account including their name, title, email and role.</p>
        </div>


        <div class="relative overflow-x-auto">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Email
                    </th>
                    <th scope="col" class="px-6 py-3">

                    </th>
                    <th scope="col" class="px-6 py-3">

                    </th>
                </tr>
                </thead>
                <tbody>
                <tr v-for="user in users.data" :key="user.id"
                    class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ user.name }}
                    </th>
                    <td class="px-6 py-4">
                        {{ user.email }}
                    </td>
                    <td class="px-6 py-4">

                    </td>
                    <td class="px-6 py-4">
                        <Link :href="`/users/${user.id}/edit`">Edit</Link>
                    </td>
                </tr>

                </tbody>
            </table>
        </div>

        <div class="py-6">
            <Component
                :is="link.url ? Link : 'span' "
                v-for="link in users.links"
                :key="link.label"
                :href="link.url"
                v-html="link.label"
                class="px-1"
                :class="link.active ? 'font-bold text-mg':'' || link.url? '':'text-gray-400' "

            />
        </div>

    </div>


</template>

