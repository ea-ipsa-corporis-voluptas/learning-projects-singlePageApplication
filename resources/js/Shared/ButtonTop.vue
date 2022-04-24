<template>
  <li
    class="mx-auto mt-1 mb-1 w-fit rounded-t-full p-2 bg-gray-800 text-gray-400 hover:bg-gray-600 hover:text-gray-200"
  >
    <Link
      :href="href"
      :method="method"
      :as="as"
      :preserve-scroll="preserveScroll"
    >
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
    method: String,
    as: String,
    preserveScroll: Boolean,
  },
};
</script>