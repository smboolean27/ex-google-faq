var app = new Vue({
	el: '#app',
	data: {
		faqs: []
	},
	mounted: function() {
		axios.get('http://localhost/ex-google-faq/api.php')
		.then( (response) => {
			this.faqs = response.data;
		} );
	}
});