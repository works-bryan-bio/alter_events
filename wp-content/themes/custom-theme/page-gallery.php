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
		$style_images    = $wpdb->get_results("SELECT  guid FROM wp_posts WHERE post_parent =89");		
		$beverage_images = $wpdb->get_results("SELECT  guid FROM wp_posts WHERE post_parent =85");
		$food_images     = $wpdb->get_results("SELECT  guid FROM wp_posts WHERE post_parent =82");
	?>

	<br class="clear"><br/>
	<div class="image-gallery-btn-container" style="margin-bottom: 80px;margin-left:20px;">
		<div class="gallery-btn-container left center">
			<a class="text-size-mobile gallery-btn-food btn-gallery-food" href="javascript:void(0);">FOOD</a>
		</div>
		<div class="gallery-btn-container left center">
			<a class="text-size-mobile gallery-btn-bev btn-gallery-beverage" href="javascript:void(0);">BEVERAGE</a>
		</div>
		<div class="gallery-btn-container left center">
			<a class="text-size-mobile gallery-btn-style btn-gallery-style" href="javascript:void(0);">STYLE</a>
		</div>
	</div>

	<div class="col-md-12 food-images-container left">
		<div class="grid grid-food">
			<div class="grid-sizer"></div>
			<?php $count = 0; foreach($food_images as $img_files){ ?>
				<?php 
					if( $count >= 8 ){
						$add_class = "hidden";
					}
				?>
				<div class="grid-item <?php echo $add_class; ?>"><img src="<?php echo $img_files->guid; ?>" /></div>
			<?php $count++;} ?>
		</div>
	</div>

	<div class="col-md-12 beverage-images-container left" style="display: none;">
		<div class="grid grid-beverage">
			<div class="grid-sizer"></div>
			<?php $count = 0; foreach($beverage_images as $img_files){ ?>
				<?php 
					if( $count >= 8 ){
						$add_class = "hidden";
					}
				?>
				<div class="grid-item"><img src="<?php echo $img_files->guid; ?>" /></div>
			<?php $count++;} ?>
		</div>
	</div>


	<div class="col-md-12 style-images-container left" style="display: none;">
		<div class="grid grid-style">
			<div class="grid-sizer"></div>
			<?php $count = 0; foreach($style_images as $img_files){ ?>
				<?php 
					if( $count >= 8 ){
						$add_class = "hidden";
					}
				?>
				<div class="grid-item"><img src="<?php echo $img_files->guid; ?>" /></div>
			<?php $count++;} ?>
		</div>
	</div>
	<br class="clear">
	<div class="col-md-9 center" style="margin-top:80px;margin-bottom: 40px;">
		<a href="#" class="box-black size-large">See More</a>
	</div>
</div>
</article><!-- #post-## -->

	
<section id="location" style="background: url('<?php bloginfo('template_directory'); ?>/assets/images/gallery/gallery-bottom.jpg') no-repeat center center;background-size:cover; background-attachment: fixed; bottom: 0; left: 0; "></section>
<?php get_footer('inner'); ?>