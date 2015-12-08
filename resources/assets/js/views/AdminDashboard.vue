<template>
	<ul class="nav nav-tabs">
	    <li role="presentation"
	    	v-on:click="updateTab('dashboard')"  
	    	class="active" 
	    	data-toggle="tab"><a href="#">Dashboard</a></li>

	    <li role="presentation" 
	    	v-on:click="updateTab('accounts')" 
	    	data-toggle="tab"><a href="#">Accounts</a></li>

	    <li role="presentation"
	    	v-on:click="updateTab('roles_perms')"
	    	data-toggle="tab"><a href="#">Roles &amp; Permissions</a></li>
	</ul>

	<div class="btn-toolbar pull-right" role="toolbar" aria-label="Toolbar with button groups" v-show="!loading">
		<div class="btn-group" role="group" aria-label="First group">
			<button type="button" class="btn btn-default" v-on:click="refresh(tab)"><i class="fa fa-refresh"></i></button>
		</div> 
	</div>

	<div class="loading" v-show="loading"></div>

	<users v-if="tab == 'accounts'"></users>
</template>

<script>
	export default {
		components: {
			'users': require('../components/UsersTable.vue'),
		},

		created: function() {
			this.updateTab('dashboard')
		},

		data: function() {
			return {
				tab: '',
				loading: false,
				refreshing: false
			}
		},

		events: {

			'loaded': function() {
				this.loading = false;
				this.refreshing = false;
			},

			'detached': function(component) {
					if(this.refreshing) {
						this.updateTab(component)
					}
			}
		},

		methods: {
			updateTab: function(tab) {
				if(this.tab == tab) return;

				this.tab = tab;
				this.loading = true;
			},

			'refresh': function(tab) {
				this.tab = '';
				this.refreshing = true;
			}

		}
	}
</script>