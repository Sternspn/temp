$(document).ready(function(){
			$('.slider').slick({
				autoplay: true,
				autoplaySpeed: 3500,
				centerMode: true,
				centerPadding: '0',
				slidesToShow: 3,
				responsive: [
				{
				breakpoint: 824,
					settings: {
						slidesToShow: 1
					}
				}]
			});
});

function Feedback() {
	$('.modalback, .modalform').css('display', 'block');

	$('.exit-btn').click(function(){
		$('.modalback, .modalform').css('display', 'none');
	});
}

function Show_slider() {
	$('.exit-btn1, .slider, .center-point').css('display', 'block');
	$('.case-img, .contacts-description, .description').css('visibility', 'hidden');
	$('.case-background .title').css('margin-top', '75px');

	$('.exit-btn1').click(function(){
		$('.exit-btn1, .slider, .center-point').css('display', 'none');
		$('.case-img, .contacts-description, .description').css('visibility', 'visible');
		$('.case-background .title').css('margin-top', '0');
	});
}