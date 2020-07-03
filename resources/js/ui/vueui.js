window.onload = function () {
	var app = new Vue({
		el: '#app',
		data: { 
			isHiddenNavLi: false
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