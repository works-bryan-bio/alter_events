<?php get_header(); ?>
<?php 
	$slider_data = $wpdb->get_results("SELECT  meta_value FROM wp_postmeta WHERE post_id =43 AND meta_key ='nivo_settings' LIMIT 1"); 
	$slider_settings   = unserialize($slider_data[0]->meta_value);
	$slider_images_ids = $slider_settings['manual_image_ids'];
		$slider_images     = $wpdb->get_results("SELECT  guid FROM wp_posts WHERE id IN(" . $slider_images_ids . ")"); 	
	?>

	<div id="background" style="">
			<?php $counter = 0; ?>
			<?php foreach($slider_images as $img_files){ ?>
			<?php $counter += 1; if($counter == 1){ ?>
				<div class="bg-photo" style="display: block; background: url('<?php echo $img_files->guid; ?>') no-repeat center center;background-size: contain;"></div>
			<?php } else{ ?>
				<div class="bg-photo" style="display: none; background: url('<?php echo $img_files->guid; ?>') no-repeat center center;background-size: contain;"></div>
			<?php } ?>
		<?php } ?>
	</div>
<div id="main-content">

	<header id="header" role="banner" style="display: block;">
		<h1><a href="" title="Alters Events" rel="home"><img style="margin: 0 auto 0px !important;" src="<?php bloginfo('template_directory'); ?>/assets/images/logo-alter.png" class="logo" alt="Alters Events"></a></h1>
		<span class="phone-number">845.537.7291</span>
		<p class="site_desc">Alters Events.</p>
		<nav id="access" role="navigation" style="padding-top: 20px;">
			<div class="menu-header">
				<?php echo wp_nav_menu(array('menu_class' => 'menu', 'menu_id' => 'menu-main-menu')); ?>				
			</div>             
		</nav>
		<!-- #access -->
		<nav id="mobile-access" role="navigation">
			<div class="mobile-menu">
				<?php echo wp_nav_menu(array('menu_class' => 'menu', 'menu_id' => 'menu-mobile-menu')); ?>				
			</div>             
		</nav><!-- #mobile-access -->
	</header>	

	<header id="mobile-menu">
		<div class="col-sm-12 no-space menu-home-container">
			<div class="col-sm-4 left">
				 <button class="menu-btn">&#9776;</button>
			</div>
			<div class="col-sm-5 left no-space">
				<a href="" title="Alters Events" rel="home"><img style="margin: 0 auto 0px !important;width: 90px;" src="<?php bloginfo('template_directory'); ?>/assets/images/logo-alter.png" alt="Alters Events"></a>
			</div>
			
		</div>
	</header>

	<section id="content-home" role="main">
	<div class="block-5 testimonial-home hidden" style="padding-bottom: 30px !important;">

		<div class="owl-carousel owl-theme left" style="width: 100% !important;padding-bottom: 22px !important;">
		<?php 
			$featured_testimonials = $wpdb->get_results("SELECT object_id FROM wp_term_relationships WHERE term_taxonomy_id=34");
			$featured_ids = array();
			foreach( $featured_testimonials as $ft ){
				$featured_ids[$ft->object_id] = $ft->object_id;				
			} 			
			$testimonials = $wpdb->get_results("SELECT  ID, post_content, post_title, post_excerpt FROM wp_posts WHERE ID IN(" . implode(",", $featured_ids) . ")"); 
		?>
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
				<div class="col-md-12 no-space">
					<!--- <div class="col-md-6 left" style="text-align: right;padding-left: 0px;">
						<div class="testimonial-image" style="display: inline-block;">
							 <img width="67" height="63" src="<?php //echo $testimonial_image;?>" class="attachment-thumbnail size-thumbnail wp-post-image"> 
						</div>
					</div>-->
					<div class="testimonial-content">
						<?php if($client_name != ""){ ?>	
							<p style="text-align: center;font-style: italic;font-size: 19px;font-weight: 400;padding-right: 10px;width: 100%;margin: 0 auto;margin-top: 30px;" class="testimonial-text-home white">"
							<?php echo $t->post_excerpt;?> - <?php echo $client_name; ?>"</p>
						<?php } else { ?>		
							<p style="text-align: center;font-style: italic;font-size: 19px;font-weight: 400;width: 100%;margin: 0 auto;margin-top: 30px;" class="testimonial-text-home white">"<?php echo mb_strimwidth($t->post_content, 0, 35, '...');?>"</p>
						<?php } ?>
					</div>

				</div>
			</div>
		<?php } ?>
		</div>

		<div class="col-md-12 center">
			<a href="<?php echo get_permalink(50); ?>" class="read-more" style="font-size: 15px !important;">See More</a>
		</div>
		</div>
	</section>
</div><!-- #main-content-int -->
<footer id="footer-home" role="contentinfo">
      <div id="footer-inner-wrap">
        <div id="footer-menu" style="text-align: center;width: 100%;">
          <div class="col-md-12">
            <div class="f-md-8 text-left left no-space">
              <h3 class="footer-text left"><strong><span style="color:#cdcdcd;"><a href="mailto:altersevents@gmail.com">altersevents@gmail.com</a></span></strong></h3>
              <h3 class="footer-text divider-f left"><span class="footer-divider left">&nbsp;|&nbsp;</span></h3>
              <h3 class="footer-text left"><strong><span style="color:#cdcdcd;">TEL</span></strong> 845-537-7291</h3>
            </div>
            <div class="f-md-3 left no-space footer-social" style="margin-bottom: 10px;">
              <div class="f-md-4 left">
                <a href="#" class="facebook-icon"><i class="fa fa-facebook font-large" aria-hidden="true"></i></a>
              </div>
              <div class="f-md-4 left">
                <a href="" class="twitter-icon"><i class="fa fa-twitter font-large" aria-hidden="true"></i></a>
              </div>
              <div class="f-md-4 left">
                <a href="" class="google-icon"><i class="fa fa-google-plus font-large" aria-hidden="true"></i></a>
              </div>
            </div>
          </div>
  
          <hr style="clear:both;border-top: 1px solid #909090;" />
          <h3 class="footer-text footer-small">All Rights Reserved. Designed by: <span><a href="#" style="color:#00b6dd;">BroProWeb</a></span></h3>
        </div>
        <div class="clearfix"></div>
      </div>
</footer>

<?php get_footer(); ?>
<?php //get_sidebar(); ?>