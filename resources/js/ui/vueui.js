window.onload = function () {

	Vue.component("modal", {
		template: "#modal-template"
	});


	var app = new Vue({
		el: '#app',
		data: { 
			isHiddenNavLi: false,
			showModal: false
		},
		methods: {
			showsubmenu: function (event) {
				// `this` внутри методов указывает на экземпляр Vue
				//alert('Привет, ' + this.name + '!')
				// `event` — нативное событие DOM
				console.log(this);
				if (event) {
					alert(event.target.tagName)
				}
			}
		}
	});


	const anchors = document.querySelectorAll('a.scroll-to')
	for (let anchor of anchors) {
		anchor.addEventListener('click', function (e) {
			e.preventDefault() 
			const blockID = anchor.getAttribute('href')
			document.querySelector(blockID).scrollIntoView({
				behavior: 'smooth',
				block: 'start'
			}) 
		})
	}

}