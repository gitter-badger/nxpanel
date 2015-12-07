module.exports = {
	template: require('./admin-dashboard.template.html'),

	components: {
		'accounts-table': require('../components/accounts-table')
	},

	data: function() {
		return {
			tab: 'dashboard'
		}
	},

	methods: {
		updateTab: function(tab) {
			this.tab = tab
		}
	}
}