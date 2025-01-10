<template>
  <div>
    <h1 class="text-2xl font-bold mb-4">Students List</h1>
    <table class="table-auto w-full border-collapse border border-gray-200">
      <thead>
        <tr>
          <th class="border border-gray-300 px-4 py-2">#</th>
          <th class="border border-gray-300 px-4 py-2">Name</th>
          <th class="border border-gray-300 px-4 py-2">Email</th>
          <th class="border border-gray-300 px-4 py-2">Class</th>
          <th class="border border-gray-300 px-4 py-2">Actions</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="(student, index) in students.data" :key="student.id">
          <td class="border border-gray-300 px-4 py-2">{{ index + 1 }}</td>
          <td class="border border-gray-300 px-4 py-2">{{ student.name }}</td>
          <td class="border border-gray-300 px-4 py-2">{{ student.email }}</td>
          <td class="border border-gray-300 px-4 py-2">{{ student.class }}</td>
          <td class="border border-gray-300 px-4 py-2">
            <Link :href="`/students/${student.id}`" class="text-blue-500 hover:underline">View</Link>
          </td>
        </tr>
      </tbody>
    </table>

  </div>
</template>

<script setup lang="ts">

import { Link } from '@inertiajs/vue3';

defineProps<{
  students: any;
}>();

</script>

