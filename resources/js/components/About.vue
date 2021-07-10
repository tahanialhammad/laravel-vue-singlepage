<template>
<div style="padding-top: 1000px;">
    <!-- <h1 class="pb-96">About Page </h1> -->
    <div class="flex justify-center">
        <div class="bg-gray-500 rounded-lg p-4 mx-4">
            <count :to="11"></count>
        </div>
        <div class="bg-gray-500 rounded-lg p-4 mx-4">
            <count :to="110"></count>
        </div>
        <div class="bg-gray-500 rounded-lg p-4 mx-4">
            <count :to="1100"></count>
        </div>
    </div>
</div>
</template>

<script>
import Count from './Count';
    export default {
        components:{Count},
    }
</script>
