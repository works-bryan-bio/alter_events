<?php 
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header('inner'); 

?>
<section id="mast" style="position: fixed; background: none;"><div class="any stretch" style="left: 0px; top: 0px; position: absolute; overflow: hidden; z-index: -999998; margin: 0px; padding: 0px; height: 100%; width: 100%;"><img src="<?php bloginfo('template_directory'); ?>/assets/images/blog-beauty/blog-top.jpg" style="position: absolute; margin: 0px; padding: 0px; border: none; z-index: -999999; width: 1903px; height: 1031.03px; left: 0px; top: -430.516px;"></div></section>
<section id="content" role="main">
<h2 class="page-title">BEAUTY TIPS</h2>
			
<article id="post-691" class="post-691 page type-page status-publish hentry">
<div class="row margin-content">
	<div class="col-md-4 left">
		<img class="full-width max-height-img" src="<?php bloginfo('template_directory'); ?>/assets/images/blog-beauty/blog-pic.jpg"/>
		<div class="col-md-12 center margin-small">
			<span class="text-detail-beauty-blog">March 30, 2017 &nbsp; | &nbsp;</span><span class="text-detail-beauty-blog">by Admin &nbsp; | &nbsp;</span><span class="text-detail-beauty-blog">0 comments</span>
		</div>
		<div class="col-md-12 center">
				<h1 class="beauty-text-title">Name of the dished</h1>
		</div>
	</div>
	<div class="col-md-7 right content-blog-beauty">
		<?php
			// Start the loop.
			while ( have_posts() ) : the_post();

				/*
				 * Include the post format-specific template for the content. If you want to
				 * use this in a child theme, then include a file called called content-___.php
				 * (where ___ is the post format) and that will be used instead.
				 */
				get_template_part( 'content', get_post_format() );
				the_content();


			// End the loop.
			endwhile;
			?>

	</div>
	<br style="clear:both;" /><br/><br/> 

			<?php
			// Start the loop.
			while ( have_posts() ) : the_post();

				/*
				 * Include the post format-specific template for the content. If you want to
				 * use this in a child theme, then include a file called called content-___.php
				 * (where ___ is the post format) and that will be used instead.
				 */


				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

				// Previous/next post navigation.
				the_post_navigation( array(
					'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next', 'twentyfifteen' ) . '</span> ' .
						'<span class="screen-reader-text">' . __( 'Next post:', 'twentyfifteen' ) . '</span> ' .
						'<span class="post-title">%title</span>',
					'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous', 'twentyfifteen' ) . '</span> ' .
						'<span class="screen-reader-text">' . __( 'Previous post:', 'twentyfifteen' ) . '</span> ' .
						'<span class="post-title">%title</span>',
				) );

			// End the loop.
			endwhile;
			?>

</div>
</article><!-- #post-## -->
	
<section id="location" style="background: url('<?php bloginfo('template_directory'); ?>/assets/images/blog-beauty/blog-bottom.jpg') no-repeat center center;background-size:cover; background-attachment: fixed; bottom: 0; left: 0; "></section>
<?php get_footer('inner'); ?>