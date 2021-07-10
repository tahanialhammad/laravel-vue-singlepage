<template>
  <div>
    <slot></slot>
  </div>
</template>

<script>
import { throttle } from "lodash";
export default {
  mounted() {
    // let bar =  this.$refs['infobar'];
    let el = this.$el;

    let originalOffsetTop = this.$el.offsetTop;
    window.addEventListener(
      "scroll",
      throttle(function () {
        console.log("yor are scrolling");
        if (window.scrollY >= originalOffsetTop) {
          el.classList.add(
            // 'fixed',
            // 'w-full',
            // 'pin-t' old,
            "sticky",
            "top-0"
          );
        } else {
          el.classList.remove("sticky", "top-0");
        }
        // console.log('yor are scrolling');  //that need to be throtel
      }, 300)
    );
  },
};
</script>
