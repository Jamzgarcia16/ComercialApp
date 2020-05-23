var urlUsers = 'https://randomuser.me/api/?results=1';
//		var urlUsers = 'https://jsonplaceholder.typicode.com/users';
		new Vue({
			el: '#main',
			created: function() {
				this.getUsers();
			},
			data: {
				lists: []
			},
			methods: {
				getUsers: function() {
					this.$http.get(urlUsers).then(function(response){
						this.lists = response.data.results;
					});
				}
			}
		});


		var app3 = new Vue({
			el: '#app-3',
			data: {
			  seen: true
			}
		  })