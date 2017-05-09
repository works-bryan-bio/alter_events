<?php get_header('inner'); ?>
<style>
* { box-sizing: border-box; }

/* force scrollbar */
html { overflow-y: scroll; }

body { font-family: sans-serif; }

.customNavigation{
  text-align: center;
}

.customNavigation a{
  -webkit-user-select: none;
  -khtml-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
  -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
}
</style>

<section id="mast" style="position: fixed; background: none;">
	<div class="any stretch" style="left: 0px; top: 0px; position: absolute; overflow: hidden; z-index: -999998; margin: 0px; padding: 0px; height: 100%; width: 100%;">
		<?php 
			if( has_post_thumbnail( $post->ID ) ){
				$image    = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );				
				$image_bg = $image[0];
			}else{
				$image_bg = get_template_directory_uri() . "/assets/images/testimonial/testimonial-top.png";
			}					
		?>
		<img src="<?php echo $image_bg; ?>" style="position: absolute; margin: 0px; padding: 0px; border: none; z-index: -999999; width: 100%; height: 1031.03px; left: 0px; top: -430.516px;">
	</div>
</section>
<section id="content" role="main">
<h2 class="page-title"><?php the_title(); ?></h2>
			
<article id="post-691" class="post-691 page type-page status-publish hentry" style="margin-top:40px !important;">
<div class="row tr-row">
	<?php
		/*while ( have_posts() ) : the_post();
			get_template_part( 'template-parts/page/content', 'page' );
			the_content();
			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;
		endwhile; // End of the loop.
		*/
	?>

	<div class="col-md-2 left-button left" style="text-align: right;">
		  <a class="btn-testimonial prev" style=""><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span></a>
	</div>
	<div class="owl-carousel owl-theme left">
	<?php $testimonials = $wpdb->get_results("SELECT  ID, post_content, post_title FROM wp_posts WHERE post_type ='wpm-testimonial' AND post_status ='publish'"); ?>
	<?php foreach( $testimonials as $t ){ $client_name = ""; $company_name = ""; ?>
		<div class="item">
					
			<?php 
				//Get Post Meta
				$testimonial_meta  = $wpdb->get_results("SELECT  meta_key, meta_value, post_id FROM wp_postmeta WHERE post_id =" . $t->ID . " AND (meta_key ='client_name' OR meta_key ='company_name' OR meta_key ='email' OR meta_key ='company_website' OR meta_key ='_thumbnail_id')");			
				$uploads 		   = wp_upload_dir(); 
				$testimonial_image = $uploads['baseurl'] . "/2017/04/profile-icon-1.png";

			?>
			<?php foreach( $testimonial_meta as $tm ){  ?>
				<?php 
					if( $tm->meta_key == 'client_name' ){
						$client_name = $tm->meta_value;
					}elseif( $tm->meta_key == 'email'  ){
						
					}elseif( $tm->meta_key == 'company_name' ){
						$company_name = $tm->meta_value;
					}elseif( $tm->meta_key == 'company_website' ){
					
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
			<div class="col-md-12" style="padding-left: 0px;">
				<!--- <div class="col-md-6 left" style="text-align: right;padding-left: 0px;">
					<div class="testimonial-image" style="display: inline-block;">
						 <img width="67" height="63" src="<?php //echo $testimonial_image;?>" class="attachment-thumbnail size-thumbnail wp-post-image"> 
					</div>
				</div>-->
				<div class="col-md-12 center" style="text-align: center;padding-top:45px !important;padding-left: 0px;">
				
					<?php if($client_name != ""){ ?>	
						<div class="testimonial-name" style="font-size: 18px;font-weight: bold;"><?php echo $client_name; ?></div>
					<?php } ?>
					<?php if($company_name != ""){ ?>	
					<div class="testimonial-company" style=""><?php echo $company_name; ?></div>
					<?php } ?>
				</div>
				<br style="clear:both;" />


				<div class="testimonial-content">
					<h3 class="testimonial-heading" style="text-align:center;font-weight: 700;font-size: 24px;font-style: italic;"><?php echo $t->post_title; ?></h3>			
					<p style="text-align: center;font-style: italic;font-size: 19px;font-weight: 400;width: 100%;margin: 0 auto;margin-top: 30px;"><?php echo $t->post_content; ?></p>
				</div>

			</div>
		</div>
	<?php } ?>
	</div>

	<div class="col-md-2 right-button left">
		<a class="btn-testimonial next"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></a>
	</div>
</div>

</article><!-- #post-## -->
	
<section id="location" style="background: url('<?php bloginfo('template_directory'); ?>/assets/images/testimonial/testimonial-bottom.png') no-repeat center center;background-size:cover; background-attachment: fixed; bottom: 0; left: 0;"></section>
<?php get_footer('inner'); ?>

<style type="text/css">
	#main-content-int #content article{
		padding-bottom: 0px !important;
	}
</style>