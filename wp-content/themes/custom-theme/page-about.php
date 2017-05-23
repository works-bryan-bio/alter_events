<?php get_header('inner'); ?>
<section id="mast" style="position: fixed; background: none;">
	<div class="" style="left: 0px; top: 0px; position: absolute; overflow: hidden; z-index: 1; margin: 0px; padding: 0px; height: 100%; width: 100% !important;">
		<?php 
			if( has_post_thumbnail( $post->ID ) ){
				$image    = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );				
				$image_bg = $image[0];
			}else{				
				$image_bg = get_template_directory_uri() . "/assets/images/about/about-top.png";
			}					
		?>
		<img class="banner-inner" src="<?php echo $image_bg; ?>" style="position: absolute; margin: 0px; padding: 0px; border: none; z-index: -999999; width: 100%; height: 1031.03px; left: 0px; top: -265.516px;">
	</div>
</section>
<section id="content" role="main">
<h2 class="page-title" style="    height: 95px !important;"><?php the_title(); ?></h2>
			
<article id="post-691" class="content-about">
<div class="row margin-content about-content" style="">
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
	
<section id="location" style="background: url('<?php bloginfo('template_directory'); ?>/assets/images/about/about-bottom.png') no-repeat center center;background-size:cover; background-attachment: fixed; bottom: 0; left: 0;background-position: 0px 0px;"></section>
<?php get_footer('inner'); ?>


























