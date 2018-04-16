//  $(document).on('ready', function () {
//     $(".regular").slick({
//         dots: true,
//         infinite: true,
//         slidesToShow: 3,
//         slidesToScroll: 3
//     });
// });
$(function() {
	 var slickOpts = {
        dots: true,
        infinite: true,
        speed: 500,
        autoplay: true,
        fade: true
    };

	$('.owl-carousel').slick(slickOpts);
    
    var testimonialSliderOptions = {
        dots: true,
        infinite: true,
        speed: 500,
        autoplay: true,
        fade: true  
    }	
    $("#testimonial-slider").slick(testimonialSliderOptions);
	
})
