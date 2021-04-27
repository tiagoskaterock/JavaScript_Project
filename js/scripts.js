(function(){

	var carimages = document.querySelector('.carimages');

	carimages.addEventListener('click', function(e){

		if (e.target.tagName = 'IMG') {

			var overlay = document.createElement('div');

			overlay.id = 'overlay';

			document.body.appendChild(overlay);

		}

		console.log(e.target.tagName);

	});

	

}());