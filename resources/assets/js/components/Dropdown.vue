<style>
	
</style>

<template>
<!--
	<dropdown src="/api/roles-get">
		Select A Role
	</dropdown>
-->
	<div class="dropdown">
						<button	v-bind:class="{
							      'btn':			 true,
							      'dropdown-toggle': true,
							      'btn-xs':			(size == 'xs'),
							      'btn-sm':			(size == 'sm'),
							      'btn-md':			(size == 'md'),
							      'btn-lg':			(size == 'lg'),
							      'btn-default':	(type == 'default'),
							      'btn-primary':	(type == 'primary'),
							      'btn-info':		(type == 'info'),
							      'btn-warning':	(type == 'warning'),
							      'btn-danger':		(type == 'danger')
							    }" 
								type="button" 
								id="{{ elID }}" 
								data-toggle="dropdown" 
								aria-haspopup="true" 
								aria-expanded="true"
						>
							<slot></slot>

							<span class="caret"></span>
						</button>
						<ul class="dropdown-menu" aria-labelledby="{{ elID }}">
							<li v-for="item in items"><a href="#">{{ item.label }}</a></li>
						</ul>
					</div>
</template>

<script>
	export default {

		props: {
			src: {
				type: String,
				default: '',
				required: true
			},

			size: {
				type: String,
				defualt: 'sm'
			},

			type: {
				type: String,
				default: 'default'
			}
		},




		attached: function() {
			this.fetchData(this.src);
			this.setElID();
		},

		data: function() {
			return {
				items: {},

				elID: 0,

				success: false
			}
		},

		methods: {
			fetchData: function(src) {

				if(!jQuery.isEmptyObject(this.items)) 
					this.items = {};

				this.$http.get(src)
					.success(function(items) {
						this.items = items;
						this.$dispatch('loaded');
						this.success = true;
					})
					.error(function() {
						this.success = false;

						return {
							message: "There was an error while fetching the items!",
							success: false
						}
					})
			},

			setElID: function() {
				this.elID = Math.floor(Math.random() * (50000000 - 1000 + 1)) + 1000;
			}
		}


	}
</script>