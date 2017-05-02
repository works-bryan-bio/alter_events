<?php get_header('inner'); ?>
<section id="mast" style="position: fixed; background: none;">
	<div class="any stretch" style="left: 0px; top: 0px; position: absolute; overflow: hidden; z-index: -999998; margin: 0px; padding: 0px; height: 100%; width: 100%;">
		<?php 
			if( has_post_thumbnail( $post->ID ) ){
				$image    = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );				
				$image_bg = $image[0];
			}else{
				$image_bg = get_template_directory_uri() . "/assets/images/why-us/why-us-top.jpg";
			}					
		?>
		<img src="<?php echo $image_bg; ?>" style="position: absolute; margin: 0px; padding: 0px; border: none; z-index: -999999; width: 100%; height: 1031.03px; left: 0px; top: -166.516px;">
	</div>
</section>
<section id="content" role="main">
<h2 class="page-title"><?php the_title(); ?></h2>
			
<article id="post-691" class="post-691 page type-page status-publish hentry">
<div class="row margin-content">
	<div class="col-md-12 center">
		<h1 class="contact-text-1"><?php the_title(); ?></h1>
	</div>
	<br style="clear: both;" /><Br/>
	<div class="col-md-12 center">
		<div class="page-content content-small">
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
	</div>
	<br style="clear: both;" /><Br/><Br/>
	<div class="col-md-12 center"><a href="javascript:void(0);" class="read-more">Read More</a></div>	
</div>

</article><!-- #post-## -->
	
<section id="location" style="background: url('<?php bloginfo('template_directory'); ?>/assets/images/why-us/why-us-bottom.jpg') no-repeat center center;background-size:cover; background-attachment: fixed; bottom: 0; left: 0; "></section>
<?php get_footer('inner'); ?>