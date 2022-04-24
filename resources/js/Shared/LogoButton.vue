<template>
  <Link
    :href="href"
    :method="method"
    :as="as"
    :preserve-scroll="preserveScroll"
    class="mt-1 mb-1 w-fit rounded-t-full p-2 bg-gray-800 text-gray-400 hover:bg-gray-900 hover:text-gray-500"
  >
    <slot />
  </Link>
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