<template>
  <div>
    <h1>Grafic Page carousel les 34</h1>
   <!-- using https://flickity.metafizzy.co/  v34 vue2-->

    <p>Flickity Carousel Initialize with HTML</p>
    <!-- <div class="main-carousel" data-flickity='{ "cellAlign": "left", "contain": true, "wrapAround":  true }'> ...</div> -->
      <!-- https://placeimg.com/ -->
      <!-- using npm te make componentes -->
<carousel :autoPlay= "true">
      <img src="https://placeimg.com/640/480/any" >
      <img src="https://placeimg.com/640/480/any?2" >
      <img src="https://placeimg.com/640/480/any?3" >
      <img src="https://placeimg.com/640/480/any?4" >
      <img src="https://placeimg.com/640/480/any?5" >
</carousel>

<!-- user can set props to carousel using Initialize with vanilla JavaScript -->
  </div>
</template>

<script>
import Carousel from './Carousel';
export default {
    components:{Carousel}
    };
</script>
