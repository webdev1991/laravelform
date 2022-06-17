<template>
    <div class="flex flex-col bg-gray-800">
            <div class="overflow-x-auto sm:-mx-6 lg:mx-0">
            <div class="py-2 inline-block min-w-full sm:px-0 lg:px-2">
              <div class="overflow-hidden">
                <table class="min-w-full">
                  <thead class="border-b">
                    <tr>
                      <th scope="col" class="text-sm font-medium text-gray-100 px-6 py-4 text-left">
                        Sl.No
                      </th>
                      <th scope="col" class="text-sm font-medium text-gray-100 px-6 py-4 text-left">
                        Area
                      </th>
                      <th scope="col" class="text-sm font-medium text-gray-100 px-6 py-4 text-left">
                        Price per Sq.ft
                      </th>
                      <th scope="col" class="text-sm font-medium text-gray-100 px-6 py-4 text-left">
                        Total price
                      </th>
                      <th scope="col" class="text-sm font-medium text-gray-100 px-6 py-4 text-left">
                        Description
                      </th>
                      <th scope="col" class="text-sm font-medium text-gray-100 px-6 py-4 text-left">
                        City
                      </th>
                      <th scope="col" class="text-sm font-medium text-gray-100 px-6 py-4 text-left">
                        State
                      </th>
                      <th scope="col" class="text-sm font-medium text-gray-100 px-6 py-4 text-left">
                        Locality
                      </th>
                      <th scope="col" class="text-sm font-medium text-gray-100 px-6 py-4 text-left">
                        Action
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr v-for="(todo,index) in todos" :key="index" class="border-b bg-gray-100 ">
                      <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{ ++index }}</td>
                      <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                        {{ todo.area }}
                      </td>
                      <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                        {{ todo.pricesqft }}
                      </td>
                      <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                        {{ todo.totalprice }}
                      </td>
                      <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                        {{ todo.description }}
                      </td>
                      <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                        {{ todo.city }}
                      </td>
                      <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                        {{ todo.state }}
                      </td>
                      <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                        {{ todo.locality }}
                      </td>
                      <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                        Delete
                      </td>
                      <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                        Delete
                      </td>
                      <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                        Delete
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            </div>
          </div>
</template>


<script>
export default {
  data() {
    return {
      todos:[],
      api: 'http://127.0.0.1:8000/api/todos'
    }
  },
  mounted() {
    this.axios.get(this.api).then(res =>{
      this.todos = res.data;
    });
  },

}
</script>