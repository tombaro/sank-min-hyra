jQuery(document).ready(function($) {

	$(document).on('click.nav','.navbar-collapse.in',function(e) {
		if( $(e.target).is('a') ) {
			$(this).collapse('hide');
		}
	});
	
});