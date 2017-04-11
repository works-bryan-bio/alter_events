
var $grid = $('.grid-food').masonry({
  itemSelector: '.grid-item',
  percentPosition: true,
  columnWidth: '.grid-sizer'
});

$grid.imagesLoaded().progress( function() {
  $grid.masonry();
});  

$(function(){

	$(".btn-gallery-food").click(function(){
		$(".btn-gallery-food").addClass('gallery-btn-active');
		$(".btn-gallery-style").removeClass('gallery-btn-active');
		$(".btn-gallery-beverage").removeClass('gallery-btn-active');
		$(".beverage-images-container").fadeOut('slow',function(){
			$(".style-images-container").fadeOut('slow',function(){
				$(".food-images-container").fadeIn();

				var $grid = $('.grid-food').masonry({
				  itemSelector: '.grid-item',
				  percentPosition: true,
				  columnWidth: '.grid-sizer'
				});

				$grid.imagesLoaded().progress( function() {
				  $grid.masonry();
				}); 		
			});		
		});
		//$(".style-images-container").fadeOut();		
		
	});

	$(".btn-gallery-style").click(function(){
		$(".btn-gallery-food").removeClass('gallery-btn-active');
		$(".btn-gallery-style").addClass('gallery-btn-active');
		$(".btn-gallery-beverage").removeClass('gallery-btn-active');	
		$(".beverage-images-container").fadeOut('slow',function(){
			$(".food-images-container").fadeOut('slow', function(){
				$(".style-images-container").fadeIn();

				var $grid = $('.grid-style').masonry({
				  itemSelector: '.grid-item',
				  percentPosition: true,
				  columnWidth: '.grid-sizer'
				});

				$grid.imagesLoaded().progress( function() {
				  $grid.masonry();
				});
			});			
		});
	});

	$(".btn-gallery-beverage").click(function(){
		$(".btn-gallery-food").removeClass('gallery-btn-active');
		$(".btn-gallery-style").removeClass('gallery-btn-active');
		$(".btn-gallery-beverage").addClass('gallery-btn-active');
		$(".food-images-container").fadeOut('slow', function(){
			$(".style-images-container").fadeOut('slow', function(){
				$(".beverage-images-container").fadeIn();

				var $grid = $('.grid-beverage').masonry({
				  itemSelector: '.grid-item',
				  percentPosition: true,
				  columnWidth: '.grid-sizer'
				});

				$grid.imagesLoaded().progress( function() {
				  $grid.masonry();
				});
			});			
		});
	});
});