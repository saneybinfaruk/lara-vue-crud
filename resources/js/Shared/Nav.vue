<script setup>
import {Link} from "@inertiajs/vue3";
import NavLink from "../Components/Nav-Link.vue";

</script>


<template>
   <section class="p-5 bg-violet-50">
       <div class="flex justify-between items-center px-10">
           <div class="flex gap-14 items-center">
               <div><h3 class="font-bold text-xl">Lara Vue</h3></div>
               <div class="flex text-md items-center gap-3">
                   <NavLink href="/" title="Home" />
                   <NavLink href="/about" title="About" />
                   <NavLink href="/contact" title="Contact" />
               </div>

           </div>
           <div class="flex items-center gap-1.5">
               <NavLink href="/logout" method="post" title="Login" />
               <NavLink href="/" title="Register" />
           </div>
       </div>
   </section>
</template>

