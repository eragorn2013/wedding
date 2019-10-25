function testWebP(callback) {
	var webP = new Image();
	webP.onload = webP.onerror = function () {
		callback(webP.height == 2);
	};
	webP.src = 'data:image/webp;base64,UklGRjoAAABXRUJQVlA4IC4AAACyAgCdASoCAAIALmk0mk0iIiIiIgBoSygABc6WWgAA/veff/0PP8bA//LwYAAA';
};

testWebP(function(support) {
	if (!support){
		$.each($("img[src$='.webp']"), function( index, value ) {
			var src=$(value).attr('src').replace('.webp', '.jpeg');
			$(value).attr('src', src);
		});
		$.each($("a[href$='.webp']"), function( index, value ) {
			var src=$(value).attr('href').replace('.webp', '.jpeg');
			$(value).attr('href', src);
		});
	}
});