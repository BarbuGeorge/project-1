jQuery(document).ready(function($) {
	$('.language .lang').click(function() {
	  $(this).toggleClass('active');
	  $(this).siblings().removeClass('active');
	});
  });
