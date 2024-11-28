<script setup>
import {Link,usePage} from "@inertiajs/vue3";
import NavLink from "../Components/Nav-Link.vue";





</script>


<template>
   <section class="p-5 bg-violet-50">
       <div class="flex justify-between items-center px-10">
           <div class="flex gap-14 items-center">
               <div><h3 class="font-bold text-xl">Lara Vue</h3></div>
               <div class="flex text-md items-center gap-3">
                   <NavLink href="/users" title="Users" />
                   <NavLink href="/about" title="About" />
                   <NavLink href="/contact" title="Contact" />
               </div>

           </div>
           <div class="flex items-center gap-1.5">

               <template v-if="!$page.props.auth.user">
                   <NavLink href="/login" title="Login" />
                   <NavLink href="/" title="Register" />
               </template>


                <template v-else>
                    <p class="pr-1">{{ $page.props.auth.user.name }}</p>
                    <NavLink href="/logout" title="Logout" method="post" class="hover:bg-red-500 hover:text-white" />

                </template>
           </div>
       </div>
   </section>
</template>

