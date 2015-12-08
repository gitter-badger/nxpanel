var Vue = require('vue');
Vue.use(require('vue-resource'));

import dashboard from './views/AdminDashboard.vue';

var vm = new Vue({
   el: '#app',

   ready: function() {
      
   },

   data: function() {
	   	return {

	   	}
   },

   components: {
   		'dashboard': dashboard,
   },

   methods: {

   },


})