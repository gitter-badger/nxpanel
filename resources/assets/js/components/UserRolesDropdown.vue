<template>
	<div class="dropdown">
		<button class="btn btn-default dropdown-toggle btn-xs" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
			{{ roles[0].label }}
			<span class="caret"></span>
		</button>
		<ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
			<li v-for="role in roles"><a href="#">{{ role.label }}</a></li>
		</ul>
	</div>
</template>

<script>
	export default {
		created: function() {
			this.getRoles();
		},

		data: function() {
			return {
				roles: {},
			}
		},

		methods: {
			getRoles: function() {
				this.roles = this.$parent._data.users[0].roles;
			},

		},
	}
</script>