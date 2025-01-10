<template>
  <div>
    <h1 class="text-2xl font-bold mb-4">Student Details</h1>
    <div class="border p-4 rounded">
      <p><strong>Name:</strong> {{ student.name }}</p>
      <p><strong>Email:</strong> {{ student.email }}</p>
      <p><strong>Class:</strong> {{ student.class }}</p>
      <p><strong>Address:</strong> {{ student.address }}</p>
      <p><strong>Linked User:</strong> {{ student.user?.name || "N/A" }}</p>
    </div>

    <Link href="/students" class="mt-4 inline-block text-blue-500 hover:underline">
      Back to Students List
    </Link>
  </div>
</template>

<script setup lang="ts">

import { Link } from '@inertiajs/vue3';

defineProps<{
  student: any;
}>();

</script>
