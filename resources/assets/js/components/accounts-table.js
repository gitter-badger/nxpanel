module.exports = {
	template: require('./accounts-table.template.html'),

	created: function() {
		this.fetchAllUsers();
	},

	data: function() {
		return {
			users: {},
		}
	},

	methods: {
		fetchAllUsers: function() {

			if(!jQuery.isEmptyObject(this.users)) 
				return;

			this.$http.get('/api/users-get')
				.success(function(users) {
					this.users = users
				})
				.error(function() {
					return {
						message: "There was an error while fetching the users!"
					}
				})
		}
	},

	events: {
		
	}
}