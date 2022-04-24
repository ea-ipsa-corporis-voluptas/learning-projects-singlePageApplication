<template>
  <li
    class="mx-auto mt-6 mb-6 w-fit rounded-l-full p-2 bg-gray-200 text-gray-700 hover:text-gray-500"
    v-bind:class="{ 'animate-pulse' : active }"
  >
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