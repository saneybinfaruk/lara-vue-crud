<script setup>
import {Link} from "@inertiajs/vue3";
import Pagination from "./Pagination.vue";
import {ref, watch} from "vue";
import {router} from '@inertiajs/vue3'


let props = defineProps({
    users: Object,
    filters: Object,
})

let searchValue = ref(props.filters.search);


watch(searchValue, (value) => {
    router.get('/users', {search: value}, {preserveState: true})
})


</script>
<template>
    <div>
        <div class="py-8">
            <h3 class="text-xl font-semibold">Users</h3>
            <p>A list of all the users in your account including their name, title, email and role.</p>

            <input type="text" v-model="searchValue" placeholder="search user.."
                   class="px-2 py-2.5 bg-gray-100 rounded-md w-1/2 block mt-6">
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
            <Pagination :links="users.links"/>
        </div>

    </div>
</template>
