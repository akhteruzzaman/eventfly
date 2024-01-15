<template>
    <section class="max-w-4xl p-6 mx-auto bg-indigo-600 rounded-md shadow-md dark:bg-gray-800">
      <h1 class="text-xl font-bold text-white capitalize dark:text-white">Create Event</h1>
      <form @submit.prevent="addEvent">
       
        <div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-1">
          <div>
            <label class="text-white dark:text-gray-200">Event Name</label>
            <input v-model="eventTitle" id="username" type="text" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
          </div>
  
          <div>
            <label class="text-white dark:text-gray-200" for="event_type">Event Type</label>
            <select v-model="eventType" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
              <option value="Festival">Festival</option>
              <option value="Seasonal">Seasonal</option>
              <option value="Special Day">Special Day</option>
              <option value="Holiday">Holiday</option>
            </select>
          </div>
  
          <div>
            <label class="text-white dark:text-gray-200" for="event_details">Event Details</label>
            <textarea v-model="eventDetails" id="textarea" type="textarea" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring"></textarea>
          </div>
  
         
          <div>
            <label class="text-white dark:text-gray-200" for="start_date">Start Date</label>
            <input v-model="startDate" id="start_date" type="date" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
          </div>
  
          <div>
            <label class="text-white dark:text-gray-200" for="end_date">End Date</label>
            <input v-model="endDate" id="end_date" type="date" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
          </div>
  
          <div>
            <label class="text-white dark:text-gray-200" for="discount_code">Discount Code</label>
            <select v-model="discountCode" id="discount_code" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
              <option value="DIS01">DIS01</option>
              <option value="DIS02">DIS02</option>
              <option value="DIS03">DIS03</option>
              <option value="DIS04">DIS04</option>
            </select>
          </div>
  
          <!-- Additional fields can be added similarly -->
  
          <div>
            <label class="block text-sm font-medium text-white">
              Image
            </label>
            <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
              <div class="space-y-1 text-center">
                <label for="file-upload" class="relative cursor-pointer bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                  <span class="">Upload a file</span>
                  <input id="file-upload" name="file-upload" type="file" class="sr-only">
                </label>
                <p class="pl-1 text-white">or drag and drop</p>
              </div>
              <p class="text-xs text-white">
                PNG, JPG, GIF up to 10MB
              </p>
            </div>
          </div>
        </div>
  
        <div class="flex justify-end mt-6">
          <button class="px-6 py-2 leading-5 text-white transition-colors duration-200 transform bg-pink-500 rounded-md hover:bg-pink-700 focus:outline-none focus:bg-gray-600">Save</button>
        </div>
      </form>
    </section>
  </template>
  
  <script>
  import axios from 'axios';

  export default {
    data() {
      return {
        eventTitle: '',
        eventType: '',
        eventDetails: '',
        startDate: '',
        endDate: '',
        priority: '',
        discountCode: '',
      };
    },
    methods: {
      addEvent() {
        // Make an API request to Laravel backend to store the event
        axios.post('/add-event', {
          shop_id: "2",  
          event_title: this.eventTitle,
          event_type: this.eventType,
          event_details: this.eventDetails,
          start_date: this.startDate,
          end_date: this.endDate,
          priority: "3",
          discount_code: this.discountCode,
        })
        .then(response => {
          console.log(response.data.message);
          this.$router.push({ name: 'events' });
        })
        .catch(error => {
          console.error(error.response.data.message);
          // Handle error, e.g., show validation errors to the user
        });
      },
    },
  };
  </script>
  
  <style scoped>
  /* Your component styles go here */
  </style>
  