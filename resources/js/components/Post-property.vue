<template>
<div>
  
  <div class="mt-10 sm:mt-10">
    <div class="md:grid md:grid-cols-3 md:gap-6">
      <div class="md:col-span-1">
        <div class="px-4 sm:px-0">
          <h3 class="text-lg font-medium leading-6 text-gray-900">Post Property</h3>
<!--        
          <div class="flex flex-col bg-gray-200">
            <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
              <div class="overflow-hidden">
                <table class="min-w-full">
                  <thead class="border-b">
                    <tr>
                      <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                        Sl.No
                      </th>
                      <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                        Area
                      </th>
                      <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                        Price per Sq.ft
                      </th>
                      <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                        Total price
                      </th>
                      <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                        Description
                      </th>
                      <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                        City
                      </th>
                      <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                        State
                      </th>
                      <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                        Locality
                      </th>
                      <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
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
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            </div>
          </div>
-->

          <p class="mt-1 text-sm text-green-800">Here you can post your property detail for sell or rent.</p>
        </div>
      </div>
      <div class="mt-5 md:mt-0 md:col-span-2">
        <form @submit.prevent="saveData()" method="POST">

        <div class="p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg dark:bg-green-200 dark:text-green-800" role="alert" v-show="success">
          <span class="font-medium">Your data has been submitted successfully</span>
        </div>

          <div class="shadow overflow-hidden sm:rounded-md">
            <div class="px-4 py-5 bg-white-100 sm:p-6">
              <div class="grid grid-cols-6 gap-6">
                <div class="col-span-6 sm:col-span-3">
                  <label for="area" class="block text-sm font-medium text-gray-700">Area(sq.ft)</label>
                  <input id="area" name="area" type="number" autocomplete="area" required="" class="appearance-none relative px-3 py-2 border mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" placeholder="Area" v-model="property.area" />
                </div>

                <div class="col-span-6 sm:col-span-3">
                  <label for="pricesqft" class="block text-sm font-medium text-gray-700">Price per Sq.ft</label>
                  <input type="number" name="pricesqft" id="pricesqft" autocomplete="pricesqft" class="appearance-none relative px-3 py-2 border mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" placeholder="Price per sq.ft" v-model="property.pricesqft" />
                </div>

                <div class="col-span-6 sm:col-span-4">
                  <label for="totalprice" class="block text-sm font-medium text-gray-700">Total Price</label>
                  <input type="number" name="totalprice" id="totalprice" autocomplete="totalprice" class="appearance-none relative px-3 py-2 border mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" placeholder="Total price" v-model="property.totalprice" />
                </div>

                <div class="col-span-6">
                  <label for="description" class="block text-sm font-medium text-gray-700"> Description </label>
                <div class="mt-1">
                  <textarea id="description" name="description" rows="5" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md" placeholder="Brief description for your property" v-model="property.description" />
                </div>
                </div>

                <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                  <label for="city" class="block text-sm font-medium text-gray-700">City</label>
                  <input type="text" name="city" id="city" autocomplete="city" class="appearance-none relative px-3 py-2 border mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" placeholder="City" v-model="property.city" />
                </div>

                <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                  <label for="state" class="block text-sm font-medium text-gray-700">State</label>
                  <input type="text" name="state" id="state" autocomplete="state" class="appearance-none relative px-3 py-2 border mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" placeholder="State" v-model="property.state" />
                </div>

                <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                  <label for="locality" class="block text-sm font-medium text-gray-700">Locality</label>
                  <input type="text" name="locality" id="locality" autocomplete="locality" class="appearance-none relative px-3 py-2 border mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" placeholder="Locality" v-model="property.locality" />
                </div>
              </div>
            </div>
            <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
              <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500" >Save</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

</div>
</template>


<script>
export default {
  data() {
    return {
      'property': {
          'area':'',
          'pricesqft':'',
          'totalprice':'',
          'description':'',
          'city':'',
          'state':'',
          'locality':''
      },
      success:false,
      todos:[],
      api: 'http://127.0.0.1:8000/api/todos'
    };
  },

  mounted() {
    this.axios.get(this.api).then(res =>{
      this.todos = res.data;
    });
  },

  methods: {
    saveData() {
      axios.post('/property/create', this.property).then(
        response => {
          this.property = {};
          this.success = true;          
        }
      ). catch(error => {
        console.log('error here');
      })
    }
  },

};
</script>