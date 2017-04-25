<?php get_header('inner'); ?>
<section id="mast" style="position: fixed; background: none;">
	<div class="any stretch" style="left: 0px; top: 0px; position: absolute; overflow: hidden; z-index: -999998; margin: 0px; padding: 0px; height: 100%; width: 100%;">
		<?php 
			if( has_post_thumbnail( $post->ID ) ){
				$image_bg = the_post_thumbnail();
			}else{
				$image_bg = get_template_directory_uri() . "/assets/images/beauty/beauty-top.jpg";
			}					
		?>
		<img src="<?php echo $image_bg; ?>" style="position: absolute; margin: 0px; padding: 0px; border: none; z-index: -999999; width: 100%; height: 1031.03px; left: 0px; top: -430.516px;">
	</div>
</section>
<section id="content" role="main">
<h2 class="page-title"><?php the_title(); ?></h2>
			
<article id="post-691" class="post-691 page type-page status-publish hentry">
<div class="row margin-content">
<?php 
	$args = array( 'posts_per_page' => 6, 'offset'=> 1, 'category' => 3 );
    $beautyPosts = get_posts( $args );   
?>
	<div class="col-md-12">
		<?php foreach( $beautyPosts as $post ){ ?>			
		<div class="col-md-4 left margin-top-35">
			<h1 class="beauty-text-italic">Perfect for your event</h1>
			<br/>
			<div class="center beauty-image">
				<?php echo get_the_post_thumbnail( $post->ID, 'full-width' ); ?>				
			</div>
			<br/>
			<div class="col-md-12 center">
				<span class="text-detail-beauty">March 30, 2017 &nbsp; | &nbsp;</span><span class="text-detail-beauty">by Admin &nbsp; | &nbsp;</span><span class="text-detail-beauty"><?php echo $post->comment_count; ?> comments</span>
			</div>
			<div class="col-md-12 center">
				<h1 class="beauty-text-title"><?php echo apply_filters( 'the_title', $post->post_title, $post->ID ); ?></h1>
				<a class="black" href="<?php echo get_permalink( $post->ID ); ?>"><div class="box-black-beauty">Read More</div></a>
			</div>
		</div>	
		<?php } ?>		
	</div>




	<?php
			/*
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/page/content', 'page' );
				the_content();
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			*/
			?>
</div>
</article><!-- #post-## -->
	
<section id="location" style="background: url('<?php bloginfo('template_directory'); ?>/assets/images/beauty/beauty-bottom.jpg') no-repeat center center;background-size:cover; background-attachment: fixed; bottom: 0; left: 0; "></section>
<?php get_footer('inner'); ?>