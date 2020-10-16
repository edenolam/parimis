//menu responsive//

(function  ($) {
	$('.handle').on('click', function(){
				$('nav ul').toggleClass('showing');
			});


/////////////active//////////////////
		

		
	$(document).ready(function(){
		var path = window.location.pathname.split('/').pop();

		if (path == '') {
			path = 'index.html';
		};

		var target = $('nav a[href="'+path+'"]');

		target.addClass('active');
	})


		


})(jQuery);


			
