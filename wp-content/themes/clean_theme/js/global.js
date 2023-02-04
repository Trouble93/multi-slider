;(function ($) {

$(document).ready(function() {
	//slider

	let autoPlay = $('.slider-item').data('autoplay');
	let pagination = $('.slider-item').data('pagination');
	let navigation = $('.slider-item').data('navigation');
	let fade = $('.slider-item').data('fade');
	let sliderSpeed = $('.slider-item').data('slider-speed');
	let elemsToShow = $('.slider-item').data('slider-elems');

	class SlickCarousel {
		constructor() {
			this.initiateCarousel();
		}

		initiateCarousel() {
			$( '.slider' ).slick( {
				autoplay: autoPlay,
				autoplaySpeed: sliderSpeed,
				pagination: pagination,
				slidesToShow: elemsToShow,
				slidesToScroll: 1,
				infinite: true,
				fade: fade,
				navigation: navigation,
			} );
		}
	}

	new SlickCarousel();


    //Remove placeholder on click
    $("input, textarea").each(function() {
		$(this).data('holder',$(this).attr('placeholder'));

		$(this).focusin(function(){
			$(this).attr('placeholder','');
		});

		$(this).focusout(function(){
			$(this).attr('placeholder',$(this).data('holder'));
		});
    });

	//Disable search button
	$('#searchsubmit').attr('disabled', true);
	$('#s').keyup(function() {
		if($(this).val().length != 0)
			$('#searchsubmit').attr('disabled', false);
		else
			$('#searchsubmit').attr('disabled', true);
	});

});

$(window).load(function() {

	//jQuery code goes here

});

}(jQuery));