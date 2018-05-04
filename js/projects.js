$(function() {
	$(".portfolio-nav-option").on('click', function() {
		$(".portfolio-nav-option.active").removeClass('active');
		$(this).addClass('active');

		var sectionToShow = $(this).attr('data-rel');
		var navs = $(".portfolio-nav-content > div");

		$.each(navs, function(index, item) {
			var attr = $(this).attr('data-nav');
			if(attr == sectionToShow) {
				if(!$(this).hasClass('active')) {
					$(this).addClass('active');
				}
			}
			else {
				$(this).removeClass('active');
			}
		})
	});
});	
