        <div id="contact-window" class="" style="display: none;padding-top: 30px;padding-bottom: 30px;padding-left: 50px;padding-right: 50px;text-align: center;">
          <h1><a href="" title="Alters Events" rel="home"><img style="margin: 0 auto 0px !important;" src="<?php bloginfo('template_directory'); ?>/assets/images/logo-alter.png" class="logo" alt="Sweet Basil"></a></h1>
          <span class="" style="font: 21px/28px 'brandon_grotesque_regularRg', Arial, 'sans-serif';color: #ececec;">845.537.7291</span>
        </div>
        <footer id="footer-home" role="contentinfo">
          <div id="footer-inner-wrap">
            <div id="footer-menu" style="text-align: center;width: 100%;">
              <div class="col-md-12">
                <div class="col-md-9 left">
                  <h3 class="footer-text"><strong><span style="color:#cdcdcd;">ADDRESS</span></strong> 500 terry Francois StreeSan Francisco, CA 94158 | <strong><span style="color:#cdcdcd;">TEL</span></strong> 123-456-7890</h3>
                </div>
                <div class="col-md-1 left">
                  <a href="#" class="facebook-icon"><i class="fa fa-facebook font-large" aria-hidden="true"></i></a>
                </div>
                <div class="col-md-1 left">
                  <a href="" class="twitter-icon"><i class="fa fa-twitter font-large" aria-hidden="true"></i></a>
                </div>
                <div class="col-md-1 left">
                  <a href="" class="google-icon"><i class="fa fa-google-plus font-large" aria-hidden="true"></i></a>
                </div>
              </div>
              <br style="clear:both;" />
              <hr style="border-top: 1px solid #909090;" />
              <h3 class="footer-text footer-small">All Rights Reserved. Designed by: <span><a href="#" style="color:#00b6dd;">BroProWeb</a></span></h3>
            </div>

            <div class="clearfix"></div>
        </div>
      </footer>
    </section><!-- #main -->
    <div id="backTop" style="display: block;"></div>
</div>



<!-- QUICK QUOTE -->

  <div class="col-md-12">
    <a href="#quickQuoteModal" data-toggle="modal" class="quote">Q<br/>u<br/>i<br/>c<br/>k<br/><br/>Q<br/>u<br/>o<br/>t<br/>e</a>
    <div class="modal fade" id="quickQuoteModal" tabindex="-1" role="dialog" aria-labelledby="qqModalLabel">
        <div class="modal-dialog " role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>  </button>
                <h4 class="modal-title" id="qqModalLabel" style="float: right;">Quick Quote</h4>
              </div>

              <div class="modal-body">
                <?php echo do_shortcode('[contact-form-7 id="182" title="Free Quote"]'); ?>
              </div>

            </div>
        </div><!--/.modal-dialog-->
    </div><!--/.modal-->
  </div>

<!-- END QUICK QUOTE -->

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

<script type="text/javascript">
$(document).ready(function(){
  $('.grid').masonry({
    itemSelector: '.grid-item',
    columnWidth: 5
  });

  $('.owl-carousel').owlCarousel({
      items: 1,
      loop:true,
      autoplay: true,
      margin:10     

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