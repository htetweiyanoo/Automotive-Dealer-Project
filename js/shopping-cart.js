// add items to the cart

(function() {
	const cartBtn = document.getElementsByClassName("button btn-cart");

	cartBtn.forEach(function(btn){
		btn.addEventListener("click", function(event) {
			console.log(event.target);
		});
	});
})();