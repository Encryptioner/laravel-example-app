<template>
  <div class="flex justify-between">
    <div v-for="link in links" :key="link.url">
      <Link
        :href="link.url"
        :class="[
          link.active ? 'font-bold text-blue-500' : 'text-gray-500',
          'mx-1 hover:underline',
        ]"
        v-html="link.label"
      ></Link>
    </div>
  </div>
</template>

<script setup lang="ts">
import { Link } from "@inertiajs/vue3";
import {
  ILink,
} from '../types/index';


defineProps<{
  links: ILink[];
}>();

</script>
