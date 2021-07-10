<template>
<div>
    <div>
        <picture
        style="height: 300px"
        class="block rounded-lg shadow flex items-cneter justify-center mb-6 bg-blue-300">
        <img src="/images/logo.svg" alt="logo" class="w-8" />
      </picture></div>

      <!-- <pinned>
          <div ref="infobar" class="bg-purple-600"> <h1>Website Page </h1></div>
      </pinned> -->
    <pinned>
          <div class="bg-purple-600"> <h1>Website Page </h1></div>
      </pinned>

    <div><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio aperiam harum itaque dolorem enim eum, architecto et qui, totam saepe eaque? Omnis nihil id at! Blanditiis tempore itaque ad odit.</p>
     <div>
        <picture
        style="height: 300px"
        class="block rounded-lg shadow flex items-cneter justify-center mb-6 bg-blue-300">
        <img src="/images/logo.svg" alt="logo" class="w-8" />
      </picture></div>
       <div>
        <picture
        style="height: 300px"
        class="block rounded-lg shadow flex items-cneter justify-center mb-6 bg-blue-300">
        <img src="/images/logo.svg" alt="logo" class="w-8" />
      </picture></div>
    </div>
</div>
<!--Note v 42
- we need to use scroll func not all time ,
- finde position for stiky part >> write in console and ENTER in the location that we need
window.scrollY
- figer the offset of the stiky bar , select el. in inspect
then writ $0 in the consol
then $0.offsetTop
then window.scrollY>= $0.offsetTop
- make refacture to the bar
- add css class for sticky when window.scrollY>= $0.offsetTop
- els remove claas when we scroll to top
- not code to lessen to scroll so many time so we nee to throtte over it by using lodash
- now in test 1000 we getting 1 event every second , but we use 300 >>normaly without diealy
- now make it usable to evry where in the website v-43
- v-44 use <pinned> componentes
- cut monteted to Pinned.vue
- delete  ref="infobar"
- chenge bar to el
-->
</template>

<script>

 import Pinned from './Pinned';

    export default {
        components:{Pinned},
        // lessen whene user scroll

    }
</script>
