<template>
 <dev >
    <h1>nog neit werk Photo</h1>
    <img :src="imageurl" alt="">
    <div :class="bgClassName">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia quas nobis assumenda laboriosam sunt, praesentium tenetur. Corporis eum, quaerat facere possimus beatae eveniet, doloremque, mollitia laboriosam distinctio cum tempore qui.</p>
    </div>
</dev>
</template>

<style>
.bgclass{
    background-image: url('https://images.unsplash.com/photo-1502945015378-0e284ca1a5be?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80');
    height: 100px;}

</style>

<script>
    export default {
        // this data obeject work in regulare vue
//   data: {
//     imageurl:'https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80',
//     bgClassName: 'bgclass'
//   },

//but in the component we must use data function that return een opeject
  data() {
      return{
    imageurl:'https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80',
    bgClassName: 'bgclass'
      }
  },
    }
</script>

