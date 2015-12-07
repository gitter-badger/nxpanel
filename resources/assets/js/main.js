var Vue = require('vue');

Vue.use(require('vue-resource'));

new Vue({
   el: '#app',

   components: {
   	'admin-dashboard': require('./views/admin-dashboard')
   }
})