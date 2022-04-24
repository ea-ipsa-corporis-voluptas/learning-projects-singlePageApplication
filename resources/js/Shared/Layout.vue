<template>
<!--   
  
  header

 -->
  <Header />
  <div class="flex justify-center">
    <p
      class="w-fit rounded-full p-2 bg-gray-200 font-bold font-mono text-gray-600"
      v-text="time"
    >
    </p>
  </div>
  <div class="my-20 w-full flex justify-between">
<!--         

    links

    -->
    <Nav />
<!--         

    main

    -->
    <div class="w-8/12 rounded-full bg-gray-900">
      <slot />
    </div>
<!--         

    sidebar

    -->
    <Aside />
  </div>
</template>

<script>
import Header from './Header';
import Nav from './Nav';
import Aside from './Aside';

export default {
  components: {
    Header,
    Nav,
    Aside,
  },

  computed: {
    time() {
      return this.$page.props.aside.time;
    }
  },
};
</script>