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
<?php 
	global $wp_query;
	if(isset($_GET['view'])) { 
		$args = array(	    
		    'orderby'    => 'title',
		    'order'      => 'ASC',
		    'hide_empty' => false   
		);
	}else{
		$args = array(	    
		    'orderby'    => 'title',
		    'order'      => 'ASC',
		    'hide_empty' => false,
		    'number' => 3     
		);
	}
	$product_categories = get_terms( 'product_cat', $args );		
?>
<section id="mast" style="position: fixed; background: none;">
	<div class="any stretch" style="left: 0px; top: 0px; position: absolute; overflow: hidden; z-index: -999998; margin: 0px; padding: 0px; height: 100%; width: 100%;">
		<?php 
			if( has_post_thumbnail( $post->ID ) ){
				$image_bg = the_post_thumbnail();
			}else{
				$image_bg = get_template_directory_uri() . "/assets/images/gallery-landing/gallery-top.jpg";
			}					
		?>
		<img src="<?php echo $image_bg; ?>" style="position: absolute; margin: 0px; padding: 0px; border: none; z-index: -999999; width: 100%; height: 1031.03px; left: 0px; top: -430.516px;">
	</div>
</section>
<section id="content" role="main">
<h2 id="page_title" class="page-title">Our Events</h2>
			
<article id="post-691" class="post-691 page type-page status-publish hentry">
<div class="row default-theme" style="padding-right: 50px !important;">
	<div class="row">
		<?php foreach( $product_categories as $c ){ ?>
		<?php 
			$thumbnail_id = get_woocommerce_term_meta( $c->term_id, 'thumbnail_id', true );
			$image        = wp_get_attachment_url( $thumbnail_id );
			$product_url  = add_query_arg('project', $c->slug, get_permalink(21));

			//Get products
			$args     = array( 'post_type' => 'product', 'product_cat' => $c->slug );
			$products = get_posts( $args ); 						
		?>
			<div class="col-md-4 left auto-fit gallery-block" style="background-image: url('<?php echo $image; ?>')">
				<div class="overlay-gallery center hidden">
					<div style="position: relative;top: 50%;transform: translateY(-50%);">
						<h1 class="gallery-text-italic white" style="text-transform: uppercase;"><?php echo $c->name; ?></h1>
						<br/>
						<a class="black" href="<?php echo $product_url; ?>"><div class="box-transparent-beauty">VIEW</div></a>
					</div>
				</div>
			</div>
		<?php } ?>
	</div>
	<br class="clear">
	<div class="col-md-12 center">
		<?php if(isset($_GET['view'])) { ?>
			<a class="black" href="<?php echo get_permalink();?>"><div class="box-black-beauty">View Less</div></a>
		<?php }else{ ?>
			<a class="black" href="<?php echo get_permalink();?>?view=all#content"><div class="box-black-beauty">View More</div></a>
		<?php } ?>
		
	</div>
</div>
</article><!-- #post-## -->
<section id="location" style="background: url('<?php bloginfo('template_directory'); ?>/assets/images/gallery-landing/gallery-bottom.jpg') no-repeat center center;background-size:cover; background-attachment: fixed; bottom: 0; left: 0; "></section>
<?php get_footer('inner'); ?>