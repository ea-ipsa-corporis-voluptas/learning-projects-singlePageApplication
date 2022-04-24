<template>
  <li
    class="mx-auto mt-6 mb-6 w-fit rounded-l-full p-2 bg-gray-600 text-gray-200 hover:bg-gray-400 hover:text-gray-800"
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