<header class="header-2">
  <div class="container">
    <div class="row">
      <div class="col">
        <div class="header-top">
          <div class="logo-area">
            <a href="<?= base_url() ?>"><img src="<?php echo base_url(); ?>assets/images/ifcast-logo.svg" alt=""></a>
          </div>
          <div class="header-top-toggler">
            <div class="header-top-toggler-button"></div>
          </div>
          <div class="top-nav">

            <!-- <div class="dropdown header-top-notification">
                  <a href="#" class="notification-button">Updates</a>
                  <div class="notification-card">
                    <div class="notification-head">
                      <span>Notifications</span>
                      <a href="#">Mark all as read</a>
                    </div>
                    <div class="notification-body">
                      <a href="home-2.html" class="notification-list">
                        <i class="fas fa-bolt"></i>
                        <p>Your Resume Updated!</p>
                        <span class="time">5 hours ago</span>
                      </a>
                      <a href="#" class="notification-list">
                        <i class="fas fa-arrow-circle-down"></i>
                        <p>Someone downloaded resume</p>
                        <span class="time">11 hours ago</span>
                      </a>
                      <a href="#" class="notification-list">
                        <i class="fas fa-check-square"></i>
                        <p>You applied for Project Manager <span>@homeland</span></p>
                        <span class="time">11 hours ago</span>
                      </a>
                      <a href="#" class="notification-list">
                        <i class="fas fa-user"></i>
                        <p>You changed password</p>
                        <span class="time">5 hours ago</span>
                      </a>
                      <a href="#" class="notification-list">
                        <i class="fas fa-arrow-circle-down"></i>
                        <p>Someone downloaded resume</p>
                        <span class="time">11 hours ago</span>
                      </a>
                    </div>
                    <div class="notification-footer">
                      <a href="#">See all notification</a>
                    </div>
                  </div>
                </div> -->



            <!-- [VINBO]added  -->
            <div class="dropdown header-top-account">
              <div class="icon">
                <img src="assets/images/account/bell.png" alt="" onclick="togglenotifi()"><span><?= $applyJobNotifications ?></span>
              </div>
              
              <div class="notifi-box" id="box">
                <h2>notification : <span><?= $applyJobNotifications ?></span></h2>
                <div class="notifi-item">
                  <img src="company.png" alt="">
                  <div class="text">
                    <?php foreach ($getusername as $name) { ?>
                      <?php foreach ($getjobtitle as $title) { ?>
                        <a href="">
                          <p> <?= $name->jobApplyDate ?><?= $name->name ?> applied for <?= $title->job_title ?></p>
                        </a>
                    <?php }
                    } ?>
                  </div>
                </div>
              </div>
            </div>

            <div class="dropdown header-top-account">

              <a href="#" class="account-button">My account</a>
              <div class="account-card">
                <div class="header-top-account-info">
                  <a href="#" class="account-thumb">
                    <img src="images/account/thumb-1.jpg" class="img-fluid" alt="">
                  </a>
                  <div class="account-body">
                    <h5><a href="#"><?php echo $user_name; ?></a></h5>
                    <span class="mail">Enabler (Recruiter)</span>
                  </div>
                </div>
                <ul class="account-item-list">
                  <li><a href="recruiter/profile/companydashboard"><span class="ti-user"></span>Account</a></li>
                  <li><a href="recruiter/jobpost/postedjobs"><span class="ti-settings"></span>Jobs posted</a></li>
                  <li><a href="recruiter/login/Out"><span class="ti-power-off"></span>Log Out</a></li>
                </ul>
              </div>


            </div>
            <select class="selectpicker select-language" data-width="fit">
              <option data-content='<span class="flag-icon flag-icon-in"></span> India'>India</option>
              <!-- <option  data-content='<span class="flag-icon flag-icon-mx"></span> Español'>Español</option> -->
            </select>
          </div>
        </div>
        <nav class="navbar navbar-expand-lg cp-nav-2">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
              <li class="menu-item active"><a title="Home" href="">Home</a></li>
              <!-- [VINBO]removed in href guestuser/ifcasthomeguest -->

              <li class="menu-item"><a href="guestuser/joblistpage">Jobs</a></li>



              <li class="menu-item dropdown">
                <a href="#" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true" aria-expanded="false">Terminologies</a>
                <ul class="dropdown-menu">
                  <li class="menu-item"><a href="ifcastportal/whatisdreamer">What is Dreamer?</a></li>
                  <li class="menu-item"><a href="ifcastportal/whatisenabler">What is Enabler?</a></li>
                  <li class="menu-item"><a href="ifcastportal/whatiscrafter">What is Crafter?</a></li>



                </ul>
              </li>


              <li class="menu-item dropdown">
                <a href="#" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true" aria-expanded="false">Services</a>
                <ul class="dropdown-menu">
                  <li class="menu-item"><a href="guestuser/all_dreamerservices">Dreamer</a></li>
                  <li class="menu-item"><a href="guestuser/all_enablerservices">Enabler</a></li>
                  <li class="menu-item"><a href="guestuser/all_crafterservices">Crafter</a></li>

                  <li class="menu-item"><a href="http://consultancy.ifcast.com">Consultancy Services</a></li>

                </ul>
              </li>



              <li class="menu-item"><a href="ifcastportal/aboutus">About us</a></li>
              <li class="menu-item"><a href="ifcastportal/contactus">Contact</a></li>
              <li class="menu-item dropdown">
                <a href="#" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true" aria-expanded="false">More</a>
                <ul class="dropdown-menu">

                  <li class="menu-item"><a href="ifcastportal/faq"> FAQs</a></li>

                  <li class="menu-item"><a href="http://ifcast.com/blog/" target="_blank"> Blogs</a></li>

                </ul>
              </li>


              <li class="menu-item"><a href="http://consultancy.ifcast.com">iFCast Consultancy</a></li>

              <li class="menu-item post-job"><a href="recruiter/jobpost"><i class="fas fa-plus"></i>Post a Job</a></li>
            </ul>
          </div>
        </nav>
      </div>
    </div>
  </div>
</header>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script>

  var box = document.getElementById('box');
  var down = false;

  function togglenotifi() {
    if (down) {
      box.style.height = '0px';
      box.style.opacity = 0;
      down = false;
    } else {
      box.style.height = '185px';
      box.style.opacity = 1;
      down = true;
    }
  }
</script>
