<?php get_header('inner'); ?>
<style>
* { box-sizing: border-box; }

/* force scrollbar */
html { overflow-y: scroll; }

body { font-family: sans-serif; }

/* ---- grid ---- */

.grid {
  background: #DDD;
}

/* clear fix */
.grid:after {
  content: '';
  display: block;
  clear: both;
}

/* ---- .grid-item ---- */

.grid-sizer,
.grid-item {
  width: 33.333%;
}

.grid-item {
  float: left;
}

.grid-item img {
  display: block;
  max-width: 100%;
}
</style>

<section id="mast" style="position: fixed; background: none;"><div class="any stretch" style="left: 0px; top: 0px; position: absolute; overflow: hidden; z-index: -999998; margin: 0px; padding: 0px; height: 100%; width: 100%;"><img src="<?php bloginfo('template_directory'); ?>/assets/images/about/about-top.png" style="position: absolute; margin: 0px; padding: 0px; border: none; z-index: -999999; width: 1903px; height: 1031.03px; left: 0px; top: -430.516px;"></div></section>
<section id="content" role="main">
<h2 class="page-title"><?php the_title(); ?></h2>
			
<article id="post-691" class="post-691 page type-page status-publish hentry">
<div class="row margin-content" style="">
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
</div>
</article><!-- #post-## -->
<div class="image-gallery-container">
	<div class="image-gallery-btn-container">
		<a class="btn btn-primary btn-gallery-food" href="javascript:void(0);">FOOD</a>
		<a class="btn btn-primary btn-gallery-beverage" href="javascript:void(0);">BEVERAGE</a>
		<a class="btn btn-primary btn-gallery-style" href="javascript:void(0);">STYLE</a>
	</div>
	<?php 	
		$style_images    = $wpdb->get_results("SELECT  guid FROM wp_posts WHERE post_parent =89");		
		$beverage_images = $wpdb->get_results("SELECT  guid FROM wp_posts WHERE post_parent =85");
		$food_images     = $wpdb->get_results("SELECT  guid FROM wp_posts WHERE post_parent =82");
	?>

	<div class="food-images-container">
		<div class="grid">
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
		<a class="btn-food-more" href="javascript:void(0);">SHOW MORE</a>
	</div>

	<div class="beverage-images-container" style="display: none;">
		<div class="grid">
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
		<a class="btn-beverage-more" href="javascript:void(0);">SHOW MORE</a>
	</div>
	<div class="style-images-container" style="display: none;">
		<div class="grid">
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
		<a class="btn-style-more" href="javascript:void(0);">SHOW MORE</a>
	</div>
</div>
	
<section id="location" style="background: url('<?php bloginfo('template_directory'); ?>/assets/images/about/about-bottom.png') no-repeat center center;background-size:cover; background-attachment: fixed; bottom: 0; left: 0; "></section>
<?php get_footer('inner'); ?>