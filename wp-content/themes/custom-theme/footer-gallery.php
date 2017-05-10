        <div id="contact-window" class="" style="display: none;padding-top: 30px;padding-bottom: 30px;padding-left: 50px;padding-right: 50px;text-align: center;">
          <h1><a href="" title="Alters Events" rel="home"><img style="margin: 0 auto 0px !important;" src="<?php bloginfo('template_directory'); ?>/assets/images/logo-alter.png" class="logo" alt="Sweet Basil"></a></h1>
          <span class="" style="font: 21px/28px 'brandon_grotesque_regularRg', Arial, 'sans-serif';color: #ececec;">845.537.7291</span>
        </div>
        <footer id="footer-home" role="contentinfo">
          <div id="footer-inner-wrap">
            <div id="footer-menu" style="text-align: center;width: 100%;">
              <div class="col-md-12">
                <div class="col-md-9 left">
                  <h3 class="footer-text"><strong><span style="color:#cdcdcd;">ADDRESS</span></strong> 3 strelisk Ct #401a, Monroe NY 10950 | <strong><span style="color:#cdcdcd;">TEL</span></strong> <a href="tel:+8455377291">845-537-7291</a></h3>
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
              <h3 class="footer-text">All Rights Reserved. Design and Developed by <span style="color:#00b6dd;">BroProWeb</span></h3>
            </div>

            <div class="clearfix"></div>
        </div>
      </footer>
    </section><!-- #main -->
    <div id="backTop" style="display: block;"></div>
</div>

<!-- jQuery -->
<script src="<?php bloginfo('template_directory'); ?>/assets/bootstrap/js/jquery.min.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="<?php bloginfo('template_directory'); ?>/assets/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/masonry.pkgd.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/imagesloaded.pkgd.js"></script>


<script src="<?php bloginfo('template_directory'); ?>/assets/js/plugins.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/b-script.js"></script>

<script type="text/javascript">
$(document).ready(function(){  

  $('.grid').masonry({
    itemSelector: '.grid-item',
    columnWidth: 1,
    percentPosition: true
  });
  $(".gallery-block").hover(function() {
    $(this).find('.overlay-gallery').removeClass("hidden");
  },function(){
    $(this).find('.overlay-gallery').addClass("hidden");
  });

});
/* <![CDATA[ */
var $s = {"cp":"1","c":"$","p":"2","t":",","d":".","g":"3","nocache":""};var $cv = {"field":"Your %s is required.","email":"The e-mail address you provided does not appear to be a valid address.","minlen":"The %s you entered is too short. It must be at least %d characters long.","pwdmm":"The passwords you entered do not match. They must match in order to confirm you are correctly entering the password you want to use.","chkbox":"%s must be checked before you can proceed."};var $ct = {"items":"Items","total":"Total"};/* ]]> */
</script>
<?php wp_footer(); ?>
</body>
</html>