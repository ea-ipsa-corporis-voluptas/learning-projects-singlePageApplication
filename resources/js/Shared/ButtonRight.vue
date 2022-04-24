<template>
  <Link
    :href="href"
    :method="method"
    :as="as"
    :preserve-scroll="preserveScroll"
    class="mx-auto mt-1 mb-1 w-fit rounded-r-full p-2 bg-gray-600 text-gray-200 hover:bg-gray-400 hover:text-gray-800"
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