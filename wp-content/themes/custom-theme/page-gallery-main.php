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
	$args = array(	    
	    'orderby'    => 'title',
	    'order'      => 'ASC',
	    'hide_empty' => false	    
	);
	$product_categories = get_terms( 'product_cat', $args );	
?>

<section id="mast" style="position: fixed; background: none;"><div class="any stretch" style="left: 0px; top: 0px; position: absolute; overflow: hidden; z-index: -999998; margin: 0px; padding: 0px; height: 100%; width: 100%;"><img src="<?php bloginfo('template_directory'); ?>/assets/images/gallery-landing/gallery-top.jpg" style="position: absolute; margin: 0px; padding: 0px; border: none; z-index: -999999; width: 1903px; height: 1031.03px; left: 0px; top: -430.516px;"></div></section>
<section id="content" role="main">
<h2 class="page-title"><?php the_title(); ?></h2>
			
<article id="post-691" class="post-691 page type-page status-publish hentry">
<div class="row default-theme" style="padding-right: 50px !important;">
	<div class="row">
		<?php foreach( $product_categories as $c ){ ?>
		<?php 
			$thumbnail_id = get_woocommerce_term_meta( $c->term_id, 'thumbnail_id', true );
			$image        = wp_get_attachment_url( $thumbnail_id );
			$product_url  = add_query_arg('projectid', $c->term_id, get_permalink(21));
		?>
			<div class="col-md-4 left auto-fit gallery-block" style="background-image: url('<?php echo $image; ?>')">
				<div class="overlay-gallery center hidden">
					<p class="overlay-title"><?php echo $c->name; ?></p>
					<h1 class="gallery-text-italic white">Food</h1>
					<h1 class="gallery-text-italic white">Beverage</h1>
					<h1 class="gallery-text-italic white">Decoration</h1>
					<br/>
					<a class="black" href="http://localhost/dov/git/wordpress/alterseventsdev/2017/04/03/ad-mei-mundi-inimicus-ocurreret/"><div class="box-transparent-beauty">VIEW</div></a>
				</div>
			</div>
		<?php } ?>
	</div>
	<br class="clear">
	<div class="col-md-12 center">
		<a class="black" href="http://localhost/dov/git/wordpress/alterseventsdev/2017/04/03/ad-mei-mundi-inimicus-ocurreret/"><div class="box-black-beauty">View More</div></a>
	</div>
</div>
</article><!-- #post-## -->
<section id="location" style="background: url('<?php bloginfo('template_directory'); ?>/assets/images/gallery-landing/gallery-bottom.jpg') no-repeat center center;background-size:cover; background-attachment: fixed; bottom: 0; left: 0; "></section>
<?php get_footer('inner'); ?>