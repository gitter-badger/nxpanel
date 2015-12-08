<template>
<dropdown src="/api/roles-get" type="danger" size="lg">
		Select A Role
</dropdown>

	<table class="table table-condensed table-hover margin-top-30">
	    <thead>
	    	<tr>
	    		<th>ID</th>
		        <th>Name</th>
		     	<th>Email</th>
		        <th>Password</th>
		       	<th>Profile</th>
		     	<th>Role</th>
		     	<th>Status</th>
	     	</tr>
	    </thead>
	    <tbody>
	        <tr v-for="user in users">
	        	<th>{{ user.id }}</th>
	        	<th>{{ user.name }}</th>
	        	<th>{{ user.email }}</th>
	        	<th><button class="btn btn-default btn-xs">Edit</button></th>
	        	<th><button class="btn btn-default btn-xs">Edit</button></th>
	        	<th>
	        		<div class="dropdown">
						<button class="btn btn-default dropdown-toggle btn-xs" 
								type="button" 
								id="dropdownMenu1" 
								data-toggle="dropdown" 
								aria-haspopup="true" 
								aria-expanded="true"
						>
							{{ user.roles[0].name }}

							<span class="caret"></span>
						</button>
						<ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
							<li v-for="role in roles"><a href="#">{{ role.label }}</a></li>
						</ul>
					</div>
	        	</th>
	        	<th>
	        		<div class="dropdown">
						<button class="btn btn-default dropdown-toggle btn-xs" 
								type="button" 
								id="dropdownMenu1" 
								data-toggle="dropdown" 
								aria-haspopup="true" 
								aria-expanded="true"
						>
							{{ user.status.label }}

							<span class="caret"></span>
						</button>
						<ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
							<li v-for="status in statuses"><a href="#">{{ status.label }}</a></li>
						</ul>
					</div>
	        	</th>
	        </tr>
	    </tbody>
	</table>
</template>

<script>
	export default {
		components: {
			'dropdown': require('./dropdown.vue'),
		},

		created: function() {
			this.fetchAllUsers();
			this.fetchAllRoles();
			this.fetchAllStatuses();
		},

		detached: function() {
			this.$dispatch('detached', 'accounts')
		},

		data: function() {
			return {
				users: {},
				roles: {},
				statuses: {},
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

			fetchAllRoles: function() {

				if(!jQuery.isEmptyObject(this.roles)) 
					this.roles = {};

				this.$http.get('/api/roles-get')
					.success(function(roles) {
						this.roles = roles;
						this.$dispatch('loaded');
						this.loaded = true;
					})
					.error(function() {
						return {
							message: "There was an error while fetching the roles!"
						}
					})
			},

			fetchAllStatuses: function() {

				if(!jQuery.isEmptyObject(this.statuses)) 
					this.statuses = {};

				this.$http.get('/api/statuses-get')
					.success(function(statuses) {
						this.statuses = statuses;
						this.$dispatch('loaded');
						this.loaded = true;
					})
					.error(function() {
						return {
							message: "There was an error while fetching the statuses!"
						}
					})
			},
		},

		events: {

		}
	}
</script>