( function( $ ) {

	$('.search-submit').on('click', function() {

		
		$('.search-field').animate({width: 'toggle'}).focus();
		console.log('hello');	
	})

	$('.search-field').focusout(function() {
		console.log()
		$('.search-field').animate({width: 'toggle' });
	}) 
})( jQuery );