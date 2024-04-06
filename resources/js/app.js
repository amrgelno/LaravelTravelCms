/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

 require('./bootstrap');

 /*window.Vue = require('vue').default*/
 

 import  Vue from 'vue';

 import  ExampleComponent from './components/ExampleComponent.vue';


 import Myapp from './components/Myapp.vue';

 
  /**Vue.component('ExampleComponent', require('./components/ExampleComponent.vue'));
 Vue.component('Myapp.vue', require('./components/views/Myapp.vue'));*/

 
 const app = new Vue({
     el: '#app',
     components : {
         ExampleComponent,
         Myapp
    
    
    }

    

 });
 

 
//  createApp({
//     components : {
//         ExampleComponent,
//         Myapp
   
   
//    }
//   }).mount('#app');
