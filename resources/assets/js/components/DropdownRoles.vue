<template>
	<div class="dropdown">
		<button class="btn btn-default dropdown-toggle btn-xs" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
			{{ current }}
			<span class="caret"></span>
		</button>
		<ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
			<li v-for="role in roles"><a href="#">{{ role.name }}</a></li>
		</ul>
	</div>
</template>

<script>
	export default {
		created: function() {
			this.fetchAllRoles();
		},

		data: function() {
			return {
				roles: {},
			}
		},

		methods: {
			fetchAllRoles: function() {

				if(!jQuery.isEmptyObject(this.roles)) 
					this.roles = {};

				this.$http.get('/api/roles-get')
					.success(function(roles) {
						this.roles = roles;
					})
					.error(function() {
						return {
							message: "There was an error while fetching the roles!"
						}
					})
			},
		},
	}
</script>