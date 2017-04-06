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

<section id="mast" style="position: fixed; background: none;"><div class="any stretch" style="left: 0px; top: 0px; position: absolute; overflow: hidden; z-index: -999998; margin: 0px; padding: 0px; height: 100%; width: 100%;"><img src="<?php bloginfo('template_directory'); ?>/assets/images/gallery/gallery-top.jpg" style="position: absolute; margin: 0px; padding: 0px; border: none; z-index: -999999; width: 1903px; height: 1031.03px; left: 0px; top: -430.516px;"></div></section>
<section id="content" role="main">
<h2 class="page-title"><?php the_title(); ?></h2>
			
<article id="post-691" class="post-691 page type-page status-publish hentry">
<div class="row default-theme" style="">
	<h1 class="about-text-1">event name</h1>
	<div class="col-md-12 gallery-event"> 
		<p>This is your About section. It’s a great space to tell your story and to describe who you are and what you do. If you're a business, talk about how you started and tell the story of your paThis is your About section. It’s a great space to tell your story and to describe who you are and what you do. If you're a business, talk about how you started and tell the story of your place.</p>
	</div>
	
</div>
<?php 
	global $wp_query;
	$args = array(	    
	    'orderby'    => 'title',
	    'order'      => 'ASC',
	    'hide_empty' => false	    
	);
	$product_categories = get_terms( 'product_cat', $args );	
?>
<?php foreach( $product_categories as $c ){ ?>
	<?php 
		$thumbnail_id = get_woocommerce_term_meta( $c->term_id, 'thumbnail_id', true );
		$image        = wp_get_attachment_url( $thumbnail_id );
		$product_url  = add_query_arg('projectid', $c->term_id, get_permalink(21));
	?>
	<a href="<?php echo $product_url; ?>"><h1><?php echo $c->name; ?></h1></a>
	<img src="<?php echo $image; ?>" width="152" height="245"/>
<?php } ?>
</article><!-- #post-## -->

	
<section id="location" style="background: url('<?php bloginfo('template_directory'); ?>/assets/images/gallery/gallery-bottom.jpg') no-repeat center center;background-size:cover; background-attachment: fixed; bottom: 0; left: 0; "></section>
<?php get_footer('inner'); ?>