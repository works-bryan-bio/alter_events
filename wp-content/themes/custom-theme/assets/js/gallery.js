var $grid = $('.grid').masonry({
  itemSelector: '.grid-item',
  percentPosition: true,
  columnWidth: '.grid-sizer'
});

$grid.imagesLoaded().progress( function() {
  $grid.masonry();
});  

$(function(){
	$(".btn-gallery-food").click(function(){
		$(".beverage-images-container").fadeOut();
		$(".style-images-container").fadeOut();
		$(".food-images-container").fadeIn();
	});

	$(".btn-gallery-style").click(function(){
		$(".beverage-images-container").fadeOut();
		$(".food-images-container").fadeOut();
		$(".style-images-container").fadeIn();
	});

	$(".btn-gallery-beverage").click(function(){
		$(".food-images-container").fadeOut();
		$(".style-images-container").fadeOut();
		$(".beverage-images-container").fadeIn();
	});
});