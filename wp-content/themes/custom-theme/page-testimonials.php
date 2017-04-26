<?php get_header('inner'); ?>
<section id="mast" style="position: fixed; background: none;">
	<div class="any stretch" style="left: 0px; top: 0px; position: absolute; overflow: hidden; z-index: -999998; margin: 0px; padding: 0px; height: 100%; width: 100%;">
		<?php 
			if( has_post_thumbnail( $post->ID ) ){
				$image_bg = the_post_thumbnail();
			}else{
				$image_bg = get_template_directory_uri() . "/assets/images/testimonial/testimonial-top.png";
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
		while ( have_posts() ) : the_post();
			get_template_part( 'template-parts/page/content', 'page' );
			the_content();
			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;
		endwhile; // End of the loop.
	?>
	<div class="owl-carousel owl-theme">
	<?php $testimonials = $wpdb->get_results("SELECT  ID, post_content, post_title FROM wp_posts WHERE post_type ='wpm-testimonial' AND post_status ='publish'"); ?>
	<?php foreach( $testimonials as $t ){ ?>
		<div class="item">
			<h1><?php echo $t->post_title; ?></h1>				
			<?php 
				//Get Post Meta
				$testimonial_meta  = $wpdb->get_results("SELECT  meta_key, meta_value, post_id FROM wp_postmeta WHERE post_id =" . $t->ID . " AND (meta_key ='client_name' OR meta_key ='company_name' OR meta_key ='email' OR meta_key ='company_website' OR meta_key ='_thumbnail_id')");			
				$uploads 		   = wp_upload_dir(); 
				$testimonial_image = $uploads['baseurl'] . "/2017/04/profile-icon-1.png";

			?>
			<?php foreach( $testimonial_meta as $tm ){ ?>
				<?php 
					if( $tm->meta_key == 'client_name' ){
						echo "<span>Client Name : " . $tm->meta_value . "</span><br/>";
					}elseif( $tm->meta_key == 'email'  ){
						echo "<span>Email : " . $tm->meta_value . "</span><br/>";
					}elseif( $tm->meta_key == 'company_name' ){
						echo "<span>Company Name : " . $tm->meta_value . "</span><br/>";
					}elseif( $tm->meta_key == 'company_website' ){
						echo "<span>Company Website" . $tm->meta_value . "</span><br/>";
					}elseif( $tm->meta_key == '_thumbnail_id' ){
						$thumb_meta_id = $tm->meta_value;
						$testimonial_thumb_meta = $wpdb->get_results("SELECT  guid FROM wp_postmeta WHERE post_id =" . $thumb_meta_id );
						foreach( $testimonial_thumb_meta as $thumb ){
							if( $thumb->meta_key == '_wp_attached_file' ){
								$testimonial_image = $uploads['baseurl'] . "/" . $thumb->meta_value;		
							}
						}
						
					}
				?>
			<?php } ?>	
			<img src="<?php echo $testimonial_image; ?>">		
			<p><?php echo $t->post_content; ?></p>
		</div>
	<?php } ?>
	</div>
</div>
</article><!-- #post-## -->
	
<section id="location" style="background: url('<?php bloginfo('template_directory'); ?>/assets/images/testimonial/testimonial-bottom.png') no-repeat center center;background-size:cover; background-attachment: fixed; bottom: 0; left: 0;"></section>
<?php get_footer('inner'); ?>