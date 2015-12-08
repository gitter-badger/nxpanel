<template>
	<table class="table table-condensed table-hover margin-top-30">
	    <thead>
	    	<tr>
	    		<th>ID</th>
		        <th>Name</th>
		     	<th>Email</th>
		        <th>Password</th>
		       	<th>Profile</th>
		     	<th>Role</th>
	     	</tr>
	    </thead>
	    <tbody>
	        <tr v-for="user in users">
	        	<th>{{ user.id }}</th>
	        	<th>{{ user.name }}</th>
	        	<th>{{ user.email }}</th>
	        	<th><button class="btn btn-default btn-xs">Change Password</button></th>
	        	<th></th>
	        	<th><roles></roles></th>
	        </tr>
	    </tbody>
	</table>
</template>

<script>
	export default {
		components: {
			'roles': require('./UserRolesDropdown.vue')
		},

		created: function() {
			this.fetchAllUsers();
		},

		detached: function() {
			this.$dispatch('detached', 'accounts')
		},

		data: function() {
			return {
				users: {},
				loaded: false
			}
		},

		methods: {
			fetchAllUsers: function() {
				
				if(!jQuery.isEmptyObject(this.users)) 
					this.users = {};

				this.$http.get('/api/users-get')
					.success(function(users) {
						this.users = users;
						this.$dispatch('loaded');
						this.loaded = true;
					})
					.error(function() {
						return {
							message: "There was an error while fetching the users!"
						}
					})
			},
		},

		events: {

		}
	}
</script>