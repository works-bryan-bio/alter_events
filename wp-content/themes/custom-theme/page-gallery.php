<?php get_header('inner'); ?>
<style>
* { box-sizing: border-box; }

/* force scrollbar */
html { overflow-y: scroll; }

body { font-family: sans-serif; }

/* clear fix */
.grid:after {
  content: '';
  display: block;
  clear: both;
}

/* ---- .grid-item ---- */

.grid-sizer,
.grid-item {
  width: 25.333%;
}

.grid-item {
  float: left;
}

.grid-item img {
  display: block;
  max-width: 100%;
}
</style>

<section id="mast" style="position: fixed; background: none;">
	<div class="any stretch" style="left: 0px; top: 0px; position: absolute; overflow: hidden; z-index: -999998; margin: 0px; padding: 0px; height: 100%; width: 100%;">
		<?php 
			if( has_post_thumbnail( $post->ID ) ){
				$image    = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );				
				$image_bg = $image[0];
			}else{
				$image_bg = get_template_directory_uri() . "/assets/gallery/gallery-top.jpg";
			}					
		?>
		<img src="<?php echo $image_bg; ?>" style="position: absolute; margin: 0px; padding: 0px; border: none; z-index: -999999; width: 100%; height: 1031.03px; left: 0px; top: -430.516px;">
	</div>
</section>
<section id="content" role="main">
<h2 class="page-title"><?php the_title(); ?></h2>
			
<article id="post-691" class="post-691 page type-page status-publish hentry" style="padding-bottom: 0px !important;">
	<div id="event-container" class="row mrg-150 default-theme" style="">
		<h1 class="about-text-1">event name</h1>
		<div class="col-md-12 gallery-event"> 
			<p>This is your About section. It’s a great space to tell your story and to describe who you are and what you do. If you're a business, talk about how you started and tell the story of your paThis is your About section. It’s a great space to tell your story and to describe who you are and what you do. If you're a business, talk about how you started and tell the story of your place.</p>
		</div>
	</div>
		<?php
				while ( have_posts() ) : the_post();

					get_template_part( 'template-parts/page/content', 'page' );
					the_content();
					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;

				endwhile; // End of the loop.
		?>
		<?php 	
			$project = $_GET['project'];
			//Get products
			$args      = array( 'post_type' => 'product', 'product_cat' => $project );
			$products  = get_posts( $args );
			$productsB = get_posts( $args );
		?>

		<br class="clear"><br/>
		<div class="image-gallery-btn-container" style="margin-bottom: 80px;margin-left:20px;">
			<?php $count=0; foreach( $products as $p ){ ?>
			<?php 
				if( $count == 0 ){
					$add_class_active = 'gallery-btn-active';
				}else{
					$add_class_active = '';
				}
			?>
			<div class="border-black" style="width: 20%;float: left;">
				<div class="gallery-btn-container left center">
					<a data-id="<?php echo $p->post_name; ?>" class="text-size-mobile gallery-btn gallery-btn-<?php echo $p->post_name; ?> btn-gallery-<?php echo $p->post_name; ?> <?php echo $add_class_active; ?>" href="javascript:void(0);"><?php echo $p->post_title; ?></a>
				</div>
			</div>
			<?php $count++;} ?>
			<div class="border-black" style="width: 20%;float: left;">
				<div class="gallery-btn-container left center">
					<a data-id="all" class="text-size-mobile gallery-btn gallery-btn-all btn-gallery-all" href="javascript:void(0);">ALL</a>
				</div>	
			</div>
			<div class="border-black" style="width: 20%;float: left;">
				<div class="gallery-btn-container left center">
					<a data-id="videos" class="text-size-mobile gallery-btn gallery-btn-videos btn-gallery-videos" href="javascript:void(0);">VIDEOS</a>
				</div>		
			</div>
		</div>

	

</article><!-- #post-## -->


<div class="top-80 grid-gallery" style="">
	<?php  $count = 0; foreach( $products as $p ){ ?>
			<?php 
				if( $count > 0 ){ 
					$add_hidden = "display: none;";
				}else{
					$add_hidden = '';
				}
			?>
			<div style="background-color: #fdfcf8; <?php echo $add_hidden; ?>" class="col-md-12 <?php echo $p->post_name; ?>-images-container gallery-container left">
				<div class="grid grid-<?php echo $p->post_name; ?>">
					<div class="grid-sizer"></div>
					<?php 
						$count   = 0;
						$limiter = 0;
						$product = new WC_product($p->ID);
			    		$attachment_ids = $product->get_gallery_image_ids();
			    	?>
			    	<ul class="list-unstyled" id="cp-gallery-list-<?php echo $p->post_name; ?>">
			    	<?php foreach( $attachment_ids as $attachment_id ){ ?>
			    		<?php if($limiter < 6 || isset($_GET['view'])) { ?>	
				          <?php 
				          	$image_url = wp_get_attachment_url( $attachment_id );
				          	if( $count >= 8 ){
								$add_class = "hidden";
							}
				          ?>
				          <li><div class="grid-item <?php echo $add_class; ?>"><img src="<?php echo $image_url; ?>" /></div></li>
				        <?php } ?>
				        <?php $limiter++; ?>
				    <?php } ?>				
				    </ul>
				</div>
				<br class="clear">
				<div class="col-md-12 center" style="margin-top:80px;margin-bottom: 40px;">					
					<a href="javascript:void(0);" class="box-black size-large  cf-less-<?php echo $p->post_name; ?>">View less</a>					
					<!-- <a href="javascript:void(0);" class="box-black size-large cf-more-<?php echo $p->post_name; ?>">See More</a> -->
				</div>
			</div>
		<?php $count++;} ?>
</div>



<br class="clear"/>
	
<section id="location" style="background: url('<?php bloginfo('template_directory'); ?>/assets/images/gallery/gallery-bottom.jpg') no-repeat center center;background-size:cover; background-attachment: fixed; bottom: 0; left: 0; "></section>
<?php get_footer('gallery'); ?>
<script type="text/javascript">
 	$(function(){
 		var items = 28;
  		var shown = 3;
 		<?php foreach( $products as $p ){ ?> 
 			$('.cf-more-<?php echo $p->post_name; ?>').click(function () {    
		      $('.cf-less-<?php echo $p->post_name; ?>').fadeIn();
		      shown = $('#cp-gallery-list-<?php echo $p->post_name; ?> li:visible').size() + 3;      
		      if (shown < items) { $('#cp-gallery-list-<?php echo $p->post_name; ?> li:lt(' + shown + ')').fadeIn(300); }
		      else {
		          $('#cp-gallery-list-<?php echo $p->post_name; ?> li:lt(' + items + ')').fadeIn(300);
		          $('.cf-more-<?php echo $p->post_name; ?>').fadeOut();
		      }
		  	});
		  	$('.cf-less-<?php echo $p->post_name; ?>').click(function () {
		      $('#cp-gallery-list-<?php echo $p->post_name; ?> li').not(':lt(3)').fadeOut(300);
		      $('.cf-more-<?php echo $p->post_name; ?>').fadeIn();
		      $('.cf-less-<?php echo $p->post_name; ?>').fadeOut();
		  	});

 			$('.btn-gallery-<?php echo $p->post_name; ?>').click(function(){
 				var selected_gallery = $(this).attr("data-id");  				
 				$(".text-size-mobile").removeClass('gallery-btn-active');
 				$(this).addClass('gallery-btn-active');				
 				$(".gallery-container").not("." + selected_gallery + "-images-container").fadeOut('fast',function(){
 					$("." + selected_gallery + "-images-container").fadeIn();
 				});

 				var $grid = $('.grid-' + selected_gallery).masonry({
				  itemSelector: '.grid-item',
				  percentPosition: true,
				  columnWidth: 2
				});

				$grid.imagesLoaded().progress( function() {
				  $grid.masonry();
				}); 		
 			});
		<?php } ?>

		<?php if(isset($_GET['view']) || isset($_GET['product_selected'])) { ?>
			$(".btn-gallery-<?php echo $_GET['product_selected']; ?>").trigger('click');
		<?php } ?>


 	});
</script>