<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package NIBT
 */

?>

</div>
	<!--START FOOTER-->


<footer class="footer" id="faq">
	<div class="container">
    <div class="row">
      
      <div class="col-md-2 col-sm-3 col-xs-6">
        <h3>Quick Links</h3>
          <ul>
            <li><a href="https://nibt.education/aboutus">About NIBT</a></li>
            <li><a href="http://blog.nibt.education">Content Hub</a></li>
            <!-- <li><a href="https://nibt.education/home/existing">Partner's</a></li>
            <li><a href="http://blog.nibt.education/category/video-resources/">Video Resources</a></li> -->
            <li><a href="https://nibt.education/faq">FAQ</a></li>
            <li><a href="https://nibt.education/home/webpage/terms_and_condition">Terms and Condition</a></li>
            <li><a href="https://nibt.education/home/webpage/privacy_policy">Privacy Policy</a></li>
            <li><a href="https://nibt.education/home/webpage/refund-and-cancellation">Refund &amp; Cancellation</a></li>
            
          </ul>
      </div>
      
      <div class="col-md-2 col-sm-3 col-xs-6">
        <h3>Our Partner's</h3>
        <ul class="country-box">
            <li><a href="https://nibt.education/existing">NIBT Delhi</a></li>
            <li><a href="https://nibt.education/existing">NIBT Mumbai</a></li>
            <li><a href="https://nibt.education/existing">NIBT Pune</a></li>
            <li><a href="https://nibt.education/existing">NIBT Nashik</a></li>
            <li><a href="https://nibt.education/existing">NIBT USA</a></li>    
        </ul>
      </div>

      <div class="col-md-2 col-sm-3 col-xs-6">
        <h3>nibt App</h3>
        <ul>
          <li>
            <a href="https://nibt.education/apps"><img src="<?php bloginfo('template_url'); ?>/assets/images/gplay.png" alt="google" class="img-responsive"/></a>
          </li>
          <li>
             <a href="https://nibt.education/apps"><img src="<?php bloginfo('template_url'); ?>/assets/images/appstore.png" alt="apple" class="img-responsive"/></a>
          </li>
          <li>
            <a href="javascript:void(0)">Comming Soon</a>
          </li>
        </ul>
      </div>

      <div class="col-md-3 col-sm-3 col-xs-6">
         <h3>Follow Us</h3>
         <ul class="socIcon">
          <li><a href="http://facebook.com/nibtindia" target="_blank"><i class="fa fa-facebook"></i></a></li>
          <li><a href="http://twitter.com/NIBTEducation" target="_blank"><i class="fa fa-twitter"></i></a></li>
          <li><a href="https://www.linkedin.com/in/nibt-education-397054132?trk=hp-identity-name" target="_blank"><i class="fa fa-linkedin"></i></a></li>
          <li><a href="https://www.instagram.com/nibteducation_/" target="_blank"><i class="fa fa-instagram"></i></a></li>
          <li><a href="https://plus.google.com/101177820191650646500" target="_blank"><i class="fa fa-google-plus"></i></a> </li>
         </ul>
      </div>

      <div class="col-md-3 col-sm-3 col-xs-6">  
        <h3>Contact Us</h3>
        <div class="contactInfo">
          <p><i class="fa fa-mobile" aria-hidden="true"></i> +91 73502 55855</p>
          <p><i class="fa fa-phone" aria-hidden="true"></i> 0253 656 1755</p>
          <p>Dattashri, Near Hotel Riviera, ABB Circle, Mahatma Nagar, <br>Nashik, Maharashtra 422005, India</p>
        </div>
      </div>
      
      </div>
    </div>
    
	<!-- <div class="copyright"></div> -->
</footer>
<!--END FOOTER-->


	<!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php bloginfo('stylesheet_directory'); ?>/js/bootstrap.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="<?php bloginfo('stylesheet_directory'); ?>/js/ie10-viewport-bug-workaround.js"></script>
  
    <script src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.fitvids.js"></script>
    <!--<script src="js/scrolling-nav.js"></script>-->
    
    <script>
      $(document).ready(function(){
        // Target your .container, .wrapper, .post, etc.
        $(".small-video").fitVids();
      });
    </script>

    
<?php wp_footer(); ?>

</body>
</html>
