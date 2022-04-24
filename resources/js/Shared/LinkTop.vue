<template>
  <li class="mx-auto w-fit rounded-t-full px-4 bg-gray-700 text-gray-400 hover:text-gray-300" v-bind:class="{ 'animate-pulse' : active }">
    <Link :href="href">
      <slot />
    </Link>
  </li>
</template>

<script>
import { Link } from '@inertiajs/inertia-vue3';

export default {
  components: { Link, },

  props: {
    href: String,
    active: Boolean,
  },
};
</script>