<?php get_header('inner'); ?>
<style>
* { box-sizing: border-box; }

/* force scrollbar */


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
.gallery-container{
	min-height: 400px;	
}
</style>

<section id="mast" style="position: fixed; background: none;">
	<div class="any stretch" style="left: 0px; top: 0px; position: absolute; overflow: hidden; z-index: -999998; margin: 0px; padding: 0px; height: 100%; width: 100%;">
		<?php 
			if( has_post_thumbnail( $post->ID ) ){
				$image    = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );				
				$image_bg = $image[0];
			}else{
				$image_bg = get_template_directory_uri() . "/assets/images/gallery/gallery-top.jpg";
			}					
		?>
		<img class="banner-inner" src="<?php echo $image_bg; ?>" style="position: absolute; margin: 0px; padding: 0px; border: none; z-index: -999999; width: 100%; height: 1031.03px; left: 0px; top: -430.516px;">
	</div>
</section>
<section id="content" role="main">
<h2 class="page-title">	
	<?php 	
		$keys = parse_url(trim($_SERVER["REQUEST_URI"],"/")); // parse the url
		$path = explode("/", $keys['path']); // splitting the path 			
		$last_item_index = count($path) - 1;
		$project = $path[$last_item_index];			
		//Get products
		$args      = array( 'post_type' => 'product', 'product_cat' => $project );
		$products  = get_posts( $args );
		$productsB = get_posts( $args );
		echo str_replace("-", " ", $project);

		global $post;
		$args = array( 'taxonomy' => 'product_cat',);
		$terms = wp_get_post_terms($post->ID,'product_cat', $args);
	?>
</h2>
			
<article id="post-691" class="post-691 page type-page status-publish hentry" style="padding-bottom: 0px !important;">
	<div id="event-container" class="row" style="">
		<h1 class="about-text-1"><?php echo $terms[0]->name; ?></h1>
		<div class="col-md-12 no-space center" style="max-width:100% !important;"> 
			<div class="container-blog" style="margin-top:30px;padding-bottom: 0px !important;">
				<p><?php echo $terms[0]->description; ?></p>
			</div>
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
		<br class="clear"><br/>
		<div class="image-gallery-btn-container" style="margin-bottom: 80px;margin-left:20px;">
			<?php $count=0; foreach( $products as $p ){ ?>
			<?php 
				if( $count == 0 ){
					//$add_class_active = 'gallery-btn-active';
					$add_class_active = '';
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
					<a data-id="all" class="text-size-mobile gallery-btn gallery-btn-all btn-gallery-all gallery-btn-active" href="javascript:void(0);">ALL</a>
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
	<?php  $product_images_count = array(); $total_product_images; $count = 0; ?>
	<?php foreach( $products as $p ){ ?>
			<?php 
				if( $count > 0 ){ 
					$add_hidden = "display: none;";
				}else{
					$add_hidden = 'display: none;';
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
			    		$product_images_count[$p->ID] = count($attachment_ids) - 1;
			    	?>
					<ul class="list-unstyled" id="cp-gallery-list-<?php echo $p->post_name; ?>">
			    	<?php $count_product_image = 0;?>
			    	<?php foreach( $attachment_ids as $attachment_id ){ ?>			    		
				          <?php 
				          	$image_url = wp_get_attachment_url( $attachment_id );
				          	$add_hidden_style = "";

							if( $count_product_image > 5 ){
								$add_hidden_style = "style='display:none;'";
							}
				          ?>
				          <li <?php echo $add_hidden_style; ?>><div class="grid-item"><a class="gallery-zoom-image" href="<?php echo $image_url; ?>"><img src="<?php echo $image_url; ?>" /></a></div></li>				        
				        <?php $limiter++; ?>
				    <?php $count_product_image++; $total_product_images++;} ?>				
				    </ul>		
				</div>
				<br class="clear">
				<div class="col-md-12 center" style="margin-top:80px;margin-bottom: 40px;display:block;">										
					<a href="javascript:void(0);" class="box-black size-large cf-more-<?php echo $p->post_name; ?>">See More</a>
				</div>
			</div>
	<?php $count++;} ?>		

	<!-- All Photos -->
		<div style="background-color: #fdfcf8;" class="col-md-12 all-images-container gallery-container left">
			<div class="grid grid-all">
			<div class="grid-sizer"></div>			
				<ul class="list-unstyled" id="cp-gallery-list-all-photos">
				<?php  $count_product_image = 1; foreach( $products as $p ){ ?>
					<?php 				
						$limiter = 0;
						$product = new WC_product($p->ID);
			    		$attachment_ids = $product->get_gallery_image_ids();
			    	?>
			    		<?php foreach( $attachment_ids as $attachment_id ){ ?>			    			
				          <?php 
				          	$image_url = wp_get_attachment_url( $attachment_id );
				          	$add_hidden_style = "";

							if( $count_product_image > 10 ){
								$add_hidden_style = "style='display:none;'";
							}
				          ?>
				          <li <?php echo $add_hidden_style; ?>><div class="grid-item"><a class="gallery-zoom-image" href="<?php echo $image_url; ?>"><img src="<?php echo $image_url; ?>" /></a></div></li>					       						       	
			    		<?php $count_product_image++;} ?>
				<?php } ?>				
				</ul>
			</div>
			<br class="clear">
			<div class="col-md-12 center" style="margin-top:80px;margin-bottom: 40px;display:block;">										
				<a href="javascript:void(0);" class="box-black size-large cf-more-all-photos">See More</a>
			</div>
		</div>
</div>
<br class="clear"/>
	
<section id="location" style="background: url('<?php bloginfo('template_directory'); ?>/assets/images/gallery/gallery-bottom.jpg') no-repeat center center;background-size:cover; background-attachment: fixed; bottom: 0; left: 0; "></section>
<?php get_footer('gallery'); ?>
<script type="text/javascript">
 	$(function(){
 		$(".gallery-zoom-image").colorbox({maxWidth:'95%', maxHeight:'95%'});
 		var total_items = <?php echo $total_product_images; ?>;
  		var shown = 10;

  		$('#cp-gallery-list-all-photos li:lt(5)').fadeIn();

  		$('.btn-gallery-all').click(function(){
			var selected_gallery = $(this).attr("data-id");  				
			$(".text-size-mobile").removeClass('gallery-btn-active');
			$('.cf-more-all-photos').hide();
			$(this).addClass('gallery-btn-active');				
			$(".gallery-container").not("." + selected_gallery + "-images-container").fadeOut('fast',function(){
				$("." + selected_gallery + "-images-container").fadeIn('fast',function(){ 	
					setTimeout(function(){ 
						$('.grid-all').masonry();
						if( !$('.cf-more-all-photos').hasClass('shown-all') ){
							$('.cf-more-all-photos').fadeIn();  
						}						
					}, 1);
				});
			}); 				
		}); 	

		$('.cf-more-all-photos').click(function () {    		      
	      shown = $('#cp-gallery-list-all-photos li:visible').size() + 6;      
	      if (shown < total_items) { 
	      	$('#cp-gallery-list-all-photos li:lt(' + shown + ')').fadeIn(300); }
	      else {
	         $('#cp-gallery-list-all-photos li:lt(' + total_items + ')').fadeIn(300);
	         $('.cf-more-all-photos').addClass('shown-all');
	         $('.gallery-container').addClass('hide-transparent');
	         $('.cf-more-all-photos').fadeOut();
	      }			      	
	      $('.grid-all').masonry();		  	
	  	});

 		<?php foreach( $products as $p ){ ?>  
 			var t = $('.grid-<?php echo $p->post_name; ?>');    		 		
		    t.masonry({
		        itemSelector:        '.layout-card',
		        animate:        true		        
		    })
 			
 			$('#cp-gallery-list-<?php echo $p->post_name; ?> li:lt(5)').fadeIn();
 			
 			$('.cf-more-<?php echo $p->post_name; ?>').click(function () {    
 			  var items = <?php echo $product_images_count[$p->ID]; ?>;   		      
		      shown = $('#cp-gallery-list-<?php echo $p->post_name; ?> li:visible').size() + 6;  		      
		      if (shown < items) { 
		      	$('#cp-gallery-list-<?php echo $p->post_name; ?> li:lt(' + shown + ')').fadeIn(300); }
		      else {
		         $('#cp-gallery-list-<?php echo $p->post_name; ?> li:lt(' + items + ')').fadeIn(300);
		         $('.cf-more-<?php echo $p->post_name; ?>').addClass('shown-all');
		         $('.cf-more-<?php echo $p->post_name; ?>').fadeOut();
		      }			      	
		      $('.grid-<?php echo $p->post_name; ?>').masonry();		  	
		  	});

 			$('.btn-gallery-<?php echo $p->post_name; ?>').click(function(){
 				var selected_gallery = $(this).attr("data-id");  				
 				$(".text-size-mobile").removeClass('gallery-btn-active');
 				$('.cf-more-<?php echo $p->post_name; ?>').hide();
 				$(this).addClass('gallery-btn-active');				
 				$(".gallery-container").not("." + selected_gallery + "-images-container").fadeOut('fast',function(){
 					$("." + selected_gallery + "-images-container").fadeIn('fast',function(){ 	
 						setTimeout(function(){ 
 							$('.grid-<?php echo $p->post_name; ?>').masonry();
 							if( !$('.cf-more-<?php echo $p->post_name; ?>').hasClass('shown-all') ){
								$('.cf-more-<?php echo $p->post_name; ?>').fadeIn();  
							} 							
 						}, 1);
 					});
 				}); 				
 			});
		<?php } ?>
		setTimeout(function(){ 			
			$('.grid-all').masonry();
			if( !$('.cf-more-all-photos').hasClass('shown-all') ){
				$('.cf-more-all-photos').fadeIn();  
			}						
		}, 1000);
 	});
</script>