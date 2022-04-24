<template>
<!-- 



  L I N K S



 -->
  <nav class="w-24 rounded-r-3xl bg-gray-800">
    <List>
<!-- 

      saepe

 -->
      <LinkLeft
        :href="'/'"
        :active="$page.component === 'Saepe'"
      >
        Saepe
      </LinkLeft>
<!-- 

      quia

 -->
      <LinkLeft
        :href="'/quia'"
        :active="$page.component === 'Quia'"
      >
        Quia
      </LinkLeft>
<!-- 

      users

 -->
      <LinkLeft
        :href="'/users'"
        :active="$page.component === 'Users'"
      >
        Users
      </LinkLeft>
<!-- 

      log out

 -->
      <ButtonLeft
        :href="'/logout'"
        :method="'POST'"
        :as="'button'"
      >
        Log Out
      </ButtonLeft>
    </List>
  </nav>
</template>

<script>
import LinkLeft from './LinkLeft';
import ButtonLeft from './ButtonLeft';
import List from './List';

export default {
  components: {
    LinkLeft,
    ButtonLeft,
    List,
  },
};
</script>