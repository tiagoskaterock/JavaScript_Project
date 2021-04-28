(function(){

	var carimages = document.querySelector('.carimages');

	carimages.addEventListener('click', function(e){

		if (e.target.tagName = 'IMG') {

			var overlay = document.createElement('div');

			overlay.id = 'overlay';

			// setting some styles
			overlay.style.position = 'absolute';
			overlay.style.top = 0;
			overlay.style.background = 'rgba(0, 0, 0, 0.7)';
			overlay.style.cursor = 'pointer';

			// setting some sizes
			overlay.style.width = window.innerWidth + 'px';
			overlay.style.height = window.innerWidth + 'px';

			// console.log(overlay.style.background);

			document.body.appendChild(overlay);

		}

		// console.log(e.target.tagName);

	});

	

}());