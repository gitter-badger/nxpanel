var Vue = require('vue');
Vue.use(require('vue-resource'));

new Vue({
   el: '#app',

   ready: function() {
      
   },

   data: function() {
	   	return {
            
	   	}
   },

   components: {
   		'dashboard': require('./views/AdminDashboard.vue'),
   },

   methods: {

   },


})