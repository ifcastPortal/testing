<!-- Footer -->
<footer class="footer-bg">
  <div class="footer-top border-bottom section-padding-top padding-bottom-40">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="footer-logo">
            <a href="https://www.ifcast.com/in/">
              <img src="http://consultancy.ifcast.com/assets/images/footer-logo.png" class="img-fluid" alt="">
            </a>
          </div>
        </div>
        <!-- <div class="col-md-6">
            <div class="footer-social">
              <ul class="social-icons">
                <li><a href="https://www.facebook.com/iFCastCareer/"><i data-feather="facebook"></i></a></li>
                <li><a href="https://twitter.com/Ifcast1"><i data-feather="twitter"></i></a></li>
                <li><a href="https://www.linkedin.com/company/ifcastservices/"><i data-feather="linkedin"></i></a></li>
                <li><a href="https://www.instagram.com/ifcast/"><i data-feather="instagram"></i></a></li>
                <li><a href="https://in.pinterest.com/ifcast7/"><i data-feather="youtube"></i></a></li>
              </ul>
            </div>
          </div> bg-color : CDD8DC-->
      </div>
    </div>
  </div>   
  <div class="footer-widget-wrapper padding-bottom-60 padding-top-80" style="background-color:#f7f9fc">
    <div class="container">
      <div class="row">
        <div class="col-lg-2 col-sm-6">
          <div class="footer-widget footer-shortcut-link">
            <h4>Information</h4>
            <div class="widget-inner">
              <ul>
                <li><a href="http://consultancy.ifcast.com/" target="_blank">iFCast - Consultancy</a></li>
                <li><a href="<?php echo base_url(); ?>ifcastportal/aboutus">About Us</a></li>
                <li><a href="<?php echo base_url(); ?>ifcastportal/contactus">Contact Us</a></li>
                <li><a href="http://consultancy.ifcast.com/pages/howitworks">Blogs</a></li>
                <li><a href="http://consultancy.ifcast.com/pages/terms">Privacy Policy</a></li>
                <li><a href="http://consultancy.ifcast.com/pages/terms">Terms &amp; Conditions</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-lg-2 col-sm-6">
          <div class="footer-widget footer-shortcut-link">
            <h4>Job Seekers</h4>
            <div class="widget-inner">
              <ul>
                <li><a href="<?php echo base_url(); ?>ifcastportal/whatisdreamer">I am a Dreamer</a></li>
                <li><a href="<?php echo base_url(); ?>guestuser/all_dreamerservices">Boost My Profile</a></li>
                <li><a href="<?php echo base_url(); ?>guestuser/all_dreamerservices">Be My Guide</a></li>
                <li><a href="<?php echo base_url(); ?>guestuser/all_dreamerservices">Build My Resume</a></li>
                <li><a href="<?php echo base_url(); ?>ifcastportal/faq">FAQ</a></li>
              </ul>
            </div>
          </div>
        </div>


        <div class="col-lg-2 col-sm-6">
          <div class="footer-widget footer-shortcut-link">
            <h4>Employers</h4>
            <div class="widget-inner">
              <ul>
                <li><a href="<?php echo base_url(); ?>ifcastportal/whatisenabler">I am an Enabler</a></li>
                <li><a href="<?php echo base_url(); ?>guestuser/all_enablerservices">Help Me Hire</a></li>
                <li><a href="<?php echo base_url(); ?>guestuser/all_enablerservices">Pick For Me</a></li>
                <li><a href="<?php echo base_url(); ?>guestuser/all_enablerservices">Conduct My Drive</a></li>
                <li><a href="<?php echo base_url(); ?>ifcastportal/faq">FAQ</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-lg-5 offset-lg-1 col-sm-6">
          <div class="footer-widget footer-newsletter">
            <h4>Newsletter</h4>
            <p>Get e-mail updates about our jobs and more.</p>

            <!-- newsletter-form form-inline -->
            <form class="" method="post" action="<?= base_url() ?>guestuser/newslettersubscriber" enctype="multipart/form-data">
              <div class="form-group">
                <input style="height: 50px;
                border: 0;
                border-radius: 0;
                border-bottom: 1px solid rgba(0, 0, 0, 0.08);
                font-size: 1.4rem;
                outline: none;
                -webkit-box-shadow: none;
                box-shadow: none;" type="email" id="to" name="to" class="form-control" placeholder="Email address..." required>
              </div>

              <input id="PageView" name="PageView" hidden type="text" value="<?php echo $PageView; ?>">

              <!-- <input class="btn button primary-bg" type="submit" value="Submit" /> -->
              <input style="    background: #10abba;
                  border-radius: 3px;
                  border: 0;
                  color: #ffffff;
                  padding: 10px 30px;
                  font-family: 'Poppins', sans-serif;
                  font-weight: 600;
                  font-size: 1.4rem;" class="button" type="submit" value="Submit" />


              <!-- <button class="btn button primary-bg" type="submit">Submit<i class="fas fa-caret-right"></i></button> -->
            </form>

            <?php echo $this->session->flashdata('our_jobs'); ?>
          </div>

        </div>
        <div class="col-md-12">
          <div class="footer-social">
            <ul class="social-icons">
              <li><a  id="fb" href="https://www.facebook.com/iFCastCareer/"><i data-feather="facebook"></i></a></li>
              <li><a id="twitter" href="https://twitter.com/Ifcast1"><i data-feather="twitter"></i></a></li>
              <li><a id="linkedin" href="https://www.linkedin.com/company/ifcastservices/"><i data-feather="linkedin"></i></a></li>
              <li><a id="instagram" href="https://www.instagram.com/ifcast/"><i data-feather="instagram"></i></a></li>
              <li><a id="youtube" href="https://in.pinterest.com/ifcast7/"><i class="i" data-feather="youtube"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

  </div>
  </div>
  <div class="footer-bottom-area" style="background-color:#f7f9fc">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="footer-bottom border-top">
            <div class="row">
              <div class="col-xl-4 col-lg-5 order-lg-2">
                <div class="footer-app-download">
                  <!-- <a href="#" class="apple-app">Apple Store</a>
                  <a href="#" class="android-app">Google Play</a> -->
                </div>
              </div>
              <div class="col-xl-4 col-lg-4 order-lg-1">
                <p class="copyright-text">Copyright <a href="#">iFCast</a> 2019, All rights reserved</p>
              </div>
              <div class="col-xl-4 col-lg-3 order-lg-3">
                <div class="back-to-top">
                  <a href="#">Back to top<i class="fas fa-angle-up"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</footer>
<!-- Footer End -->


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<!-- <script src="assets/js/jquery.min.js"></script> -->
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/feather.min.js"></script>
<script src="assets/js/bootstrap-select.min.js"></script>
<script src="assets/js/jquery.nstSlider.min.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/visible.js"></script>
<script src="assets/js/jquery.countTo.js"></script>
<script src="assets/js/chart.js"></script>
<script src="assets/js/plyr.js"></script>
<script src="assets/js/tinymce.min.js"></script>
<script src="assets/js/slick.min.js"></script>
<script src="assets/js/jquery.ajaxchimp.min.js"></script>

<script src="assets/js/custom.js"></script>
<script src="assets/js/dashboard.js"></script>
<script src="assets/js/datePicker.js"></script>
<script src="assets/js/upload-input.js"></script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC87gjXWLqrHuLKR0CTV5jNLdP4pEHMhmg"></script>
<script src="assets/js/map.js"></script>
</body>

</html>