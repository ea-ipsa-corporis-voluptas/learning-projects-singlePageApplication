<template>
<!--   

  
  
  S I D E B A R



 -->
  <nav class="w-24 rounded-l-3xl bg-gray-800">
    <List>
<!--   

      time

 -->
      <LinkRight>
        <ButtonRight
          :href="'/time'"
          :method="'GET'"
          :as="'button'"
          :preserveScroll="true"
        >
          Time
        </ButtonRight>
      </LinkRight>
    </List>
  </nav>
</template>

<script>
import LinkRight from './LinkRight';
import ButtonRight from './ButtonRight';
import List from './List';

export default {
  components: {
    LinkRight,
    ButtonRight,
    List,
  },
};
</script>