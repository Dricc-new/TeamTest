<template>
    <div class="w-full">
      <h3 class="text-xl font-semibold mb-4">Query Analytic</h3>
      <table class="w-full border-collapse">
        <thead>
          <tr class="text-left font-semibold">
            <th class="border-b-2 border-gray-300 px-4 py-2">Query</th>
            <th class="border-b-2 border-gray-300 px-4 py-2">Count</th>
            <th class="border-b-2 border-gray-300 px-4 py-2">Average</th>
            <th class="border-b-2 border-gray-300 px-4 py-2">Max</th>
            <th class="border-b-2 border-gray-300 px-4 py-2">Min</th>
          </tr>
        </thead>
        <tbody>
          <tr v-for="(row, index) in tableData" :key="index" class="bg-white">
            <td class="border-b border-gray-300 px-4 py-2">{{ row.query }}</td>
            <td class="border-b border-gray-300 px-4 py-2">{{ row.count }}</td>
            <td class="border-b border-gray-300 px-4 py-2">{{ row.average }}</td>
            <td class="border-b border-gray-300 px-4 py-2">{{ row.max }}</td>
            <td class="border-b border-gray-300 px-4 py-2">{{ row.min }}</td>
          </tr>
        </tbody>
      </table>
    </div>
  </template>
  
  <script>
  export default {
    data() {
      return {
        tableData: [
          { query: "SELECT * FROM users", count: "9,300", average: "12ms", max: "22ms", min: "3ms" },
          { query: "SELECT * FROM posts", count: "5,872", average: "10ms", max: "18ms", min: "2ms" },
          { query: "SELECT * FROM comments", count: "2,594", average: "8ms", max: "15ms", min: "1ms" },
          { query: "SELECT * FROM likes", count: "1,231", average: "6ms", max: "12ms", min: "1ms" },
          // Añade más filas según sea necesario
        ],
      };
    },
  };
  </script>
  