<template>
    <!-- component -->
    <div class="bg-gray-900 min-h-screen flex items-center justify-center">
      <div class="bg-gray-800 flex-1 flex flex-col space-y-5 lg:space-y-0 lg:flex-row lg:space-x-10 max-w-6xl sm:p-6 sm:my-2 sm:mx-4 sm:rounded-2xl">
        <!-- Navigation -->
        <div class="bg-gray-900 px-2 lg:px-4 py-2 lg:py-10 sm:rounded-xl flex lg:flex-col justify-between">
          
          <left-navbar></left-navbar>
  
        
        </div>
        <!-- Content -->
        <div class="flex-1 px-2 sm:px-0">
          
          <top-navbar></top-navbar>
  
          <router-view></router-view>   
          
        </div>
      </div>
    </div>
  </template>
  
  <script setup>
  
  
  
  
  </script>