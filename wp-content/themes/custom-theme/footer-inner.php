        <div id="contact-window" class="" style="display: none;padding-top: 30px;padding-bottom: 30px;padding-left: 50px;padding-right: 50px;text-align: center;">
          <h1><a href="" title="Alters Events" rel="home"><img style="margin: 0 auto 0px !important;" src="<?php bloginfo('template_directory'); ?>/assets/images/logo-alter.png" class="logo" alt="Sweet Basil"></a></h1>
          <span class="" style="font: 21px/28px 'brandon_grotesque_regularRg', Arial, 'sans-serif';color: #ececec;">845.537.7291</span>
        </div>
        <footer id="footer-home" class="footer-inner" role="contentinfo">
              <div id="footer-inner-wrap">
                <div id="footer-menu" style="text-align: center;width: 100%;">
                  <div class="col-md-12">
                    <div class="f-md-8 text-left left no-space">
                      <h3 class="footer-text left"><strong><span style="color:#cdcdcd;"><a href="mailto:altersevents@gmail.com">altersevents@gmail.com</a></span></strong></h3>
                      <h3 class="footer-text divider-f left"><span class="footer-divider left">&nbsp;|&nbsp;</span></h3>
                      <h3 class="footer-text left"><strong><span style="color:#cdcdcd;">TEL</span></strong> <a href="tel:845-537-7291"><phone>845-537-7291</phone></a></h3>
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
    </section><!-- #main -->
    <div id="backTop" style="display: block;"></div>
</div>
</div>
<!-- jQuery -->
<script src="<?php bloginfo('template_directory'); ?>/assets/bootstrap/js/jquery.min.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="<?php bloginfo('template_directory'); ?>/assets/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/owl.carousel.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/masonry.pkgd.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/imagesloaded.pkgd.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/gallery.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/plugins.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/b-script.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/pushy.js"></script>
<?php 
  global $wp_query;
  $args = array(      
        'orderby'    => 'title',
        'order'      => 'ASC',
        'hide_empty' => false       
    );
  $product_categories = get_terms( 'product_cat', $args );
  $total_categories   = count($product_categories);
?>
<?php wp_footer(); ?>
<script type="text/javascript">
$(document).ready(function(){
  $('#cp-gallery-list li:lt(1)').fadeIn();

  $('.cf-less').fadeOut();
  var items = <?php echo $total_categories; ?>;
  var shown = 3;
  $('.cf-more').click(function () {    
      $('.cf-less').fadeIn();
      shown = $('#cp-gallery-list li:visible').size() + 3;      
      if (shown < items) { $('#cp-gallery-list li:lt(' + shown + ')').fadeIn(300); }
      else {
          $('#cp-gallery-list li:lt(' + items + ')').fadeIn(300);
          $('.cf-more').fadeOut();
      }
  });
  $('.cf-less').click(function () {
      $('#cp-gallery-list li').not(':lt(3)').fadeOut(300);
      $('.cf-more').fadeIn();
      $('.cf-less').fadeOut();
  });
  $('.grid').masonry({
    itemSelector: '.grid-item',
    columnWidth: 5
  });

  $('.owl-carousel').owlCarousel({
      items: 1,
      loop:true,
      autoPlay: true,
      margin:10,
      autoHeight:true          

  });

  var owl = $('.owl-carousel'); 
  owl.owlCarousel();

  // Custom Navigation Events
  $(".next").click(function(){
    owl.trigger('owl.next');
  })
  $(".prev").click(function(){
    owl.trigger('owl.prev');
  })

  $(".gallery-block").hover(function() {
    $(this).find('.overlay-gallery').removeClass("hidden");
  },function(){
    $(this).find('.overlay-gallery').addClass("hidden");
  });

  /*$(".read-more").click(function(){
    var href_text = $(this).text();
    if( href_text == 'Read More' ){
      $(".page-content").removeClass('content-small');
      $(".page-content").addClass('content-large');
      $(this).text('Read Less');      
    }else{
      $(".page-content").removeClass('content-large');
      $(".page-content").addClass('content-small');
      $(this).text('Read More');      
    } 
  });*/
});
/* <![CDATA[ */
var $s = {"cp":"1","c":"$","p":"2","t":",","d":".","g":"3","nocache":""};var $cv = {"field":"Your %s is required.","email":"The e-mail address you provided does not appear to be a valid address.","minlen":"The %s you entered is too short. It must be at least %d characters long.","pwdmm":"The passwords you entered do not match. They must match in order to confirm you are correctly entering the password you want to use.","chkbox":"%s must be checked before you can proceed."};var $ct = {"items":"Items","total":"Total"};/* ]]> */
</script>

</body>
</html>