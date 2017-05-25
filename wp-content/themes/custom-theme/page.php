<?php get_header('inner'); ?>
<section id="mast" style="position: fixed; background: none;">
	<div style="left: 0px; top: 0px; position: absolute; overflow: hidden; z-index: 1; margin: 0px; padding: 0px; height: 100%; width: 100%;">
		<img class="img-banner-top banner-inner" src="<?php bloginfo('template_directory'); ?>/assets/images/why-us/why-us-top.jpg">
	</div>
</section>



<section id="content" role="main">
<h2 class="page-title" id="hdr"><?php the_title(); ?></h2>
			
<article id="post-691" class="post-691 page type-page status-publish hentry">
<div class="row" id="blog-content">
	<br style="clear: both;" /><Br/><Br/>
	<div class="container-blog">
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

</article><!-- #post-## -->
	
<section id="location" style="background: url('<?php bloginfo('template_directory'); ?>/assets/images/why-us/why-us-bottom.jpg') no-repeat center center;background-size:cover; background-attachment: fixed; bottom: 0; left: 0; "></section>
<?php get_footer('inner'); ?>