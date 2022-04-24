<template>
<!-- 



  H E A D E R



 -->
  <section class="my-10 p-2 bg-gray-600">
    <header class="mx-4 text-center flex justify-between">
<!--   

      heading

  -->
      <LogoButton
        :href="'/'"
        :method="'GET'"
        :as="'button'"
      >
        Nulla
      </LogoButton>
<!--   

      links

  -->
      <ul class="mt-6 mb-6 flex space-x-2 list-inside">
        <LinkTop>maiores</LinkTop>
        <LinkTop>eaque</LinkTop>
      </ul>
    </header>
  </section>
</template>

<script>
import LogoButton from './LogoButton';
import LinkTop from './LinkTop';
import ButtonTop from './ButtonTop';

export default {
  components: {
    LogoButton,
    LinkTop,
    ButtonTop,
  },

  props: {},
};
</script>