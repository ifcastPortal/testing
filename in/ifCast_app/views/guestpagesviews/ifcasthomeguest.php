<base href="<?php echo BASE_PATH; ?>">
<script>
  function get_jobList(industry_id) {
    $("#industry_id").val(industry_id).change();
    $("#btn_searchJob").click();
  }
</script>
<!-- Banner -->
<div class="banner banner-1 banner-1-bg">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="banner-content">
          <h1><?= count($job_count) ?> Jobs Listed</h1>
          <p>Create free account to find thousands of Jobs, Employment & Career Opportunities around you!</p>
          <a href="login" class="button">Upload Resume</a>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Banner End -->

<!-- Search and Filter -->
<div class="searchAndFilter-wrapper">
  <div class="container">
    <div class="row">
      <div class="col">
        <div class="searchAndFilter-block">
          <div class="searchAndFilter">
            <form action="<?php echo base_url(); ?>guestuser/joblistpage" class="search-form" method="POST">
              <input type="text" placeholder="Enter Keywords" name="job_title" id="job_title" autocomplete="off">
              <span id="jobList" style="display:none ;">
              </span> 

              <select class="selectpicker" id="city_id" name="city_id[]">
                <option value="" selected> Location </option>
                <?php

                foreach ($cities as $row) {  ?>
                  <option value="<?php echo $row->city_id; ?>"><?php echo $row->cityName; ?></option>
                <?php
                }
                ?>
              </select>

              <select class="" id="subCity_name" name="subCity_name"  style="border-bottom:2px solid rgba(0, 0, 0, 0.08); width:calc(33% - 78px); border-left:none;border-right:none;border-top:none;cursor:pointer;height:6rem;width:28.5rem;z-index:1000;font:15px roboto,sans-serif;">
                <option selected style="color:#6c757d;max-height:252px;">Preffered Location</option> 
                <?php

                foreach ($subCities as $row) {  ?>
                  <option value="<?php echo $row->subCity_id; ?>"><?php echo $row->subCity_name; ?></option>
                <?php
                }
                ?>
              </select>

              <select class="selectpicker" name="industry_id" id="industry_id">
                <option value="" selected> Category </option>
                <?php
                foreach ($industries as $industr_row) {  ?>
                  <option value="<?php echo $industr_row->industry_id; ?>"><?php echo $industr_row->industry_name; ?></option>
                <?php } ?>
              </select>
              <button class="button primary-bg" type="submit" id="btn_searchJob"><i class="fas fa-search"></i>Search Job</button>
            </form>

            <div class="filter-categories">
              <h4>Job Category</h4>
              <ul>
                <?php
                foreach ($industries_jobCounts as $jobCount_row) {  ?>
                  <li>
                    <a onClick="get_jobList('<?php echo $jobCount_row->industry_id; ?>')" style="cursor:pointer;">
                      <i data-feather="bar-chart-2"></i><?php echo $jobCount_row->industry_name; ?> <span>(<?php echo $jobCount_row->posted_jobCount; ?>)</span>
                    </a>
                  </li>
                <?php } ?>

              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Search and Filter End -->

<!-- Jobs -->
<div class="section-padding-bottom alice-bg">
  <div class="container">
    <div class="row">
      <div class="col">
        <ul class="nav nav-tabs job-tab" id="myTab" role="tablist">

          <li class="nav-item">
            <a class="nav-link active" id="feature-tab" data-toggle="tab" href="#feature" role="tab" aria-controls="feature" aria-selected="false">Featured Jobs</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" id="recent-tab" data-toggle="tab" href="#recent" role="tab" aria-controls="recent" aria-selected="true">Recent Jobs</a>
          </li>
        </ul>


        <div class="tab-content" id="myTabContent">

          <div class="tab-pane fade show active" id="feature" role="tabpanel" aria-labelledby="feature-tab">
            <div class="row">


              <?php
              $jobcount = 1;
              if (!empty($posted_featureJobs)) {
                foreach ($posted_featureJobs as $jobs) {

                  if ($jobcount++ <= 214) {

                    if ($jobs->is_featured == 1) {



              ?>

                      <div class="col-lg-6">

                        <div class="job-list half-grid">
                          <div class="thumb">
                            <a href="#">
                              <?php
                              $img_url = ($jobs->comp_logo) ? "/assets/uploads/company_logo/" . $jobs->comp_logo : "assets/images/job/company-logo-9.png";
                              ?>
                              <img src="<?php echo $img_url; ?>" alt="" width="100%" class="img-fluid">
                            </a>
                          </div>
                          <div class="body">
                            <div class="content">
                              <h4>


                                <?php
                                $jobtitle_trim = $jobs->job_title;
                                $jobtitle_trim = character_limiter($jobtitle_trim, 25);

                                ?>


                                <a href="guestuser/details/<?php echo $jobs->jobpost_id; ?>"><?php echo $jobtitle_trim; ?></a>
                              </h4>
                              <div class="info">


                                <?php
                                $company_name_trim = $jobs->company_name;
                                $company_name_trim = character_limiter($company_name_trim, 15);
                                ?>


                                <span class="company"><a href="#"><i data-feather="briefcase"></i><?php echo $company_name_trim; ?></a></span>
                                <span class="office-location"><a href="#"><i data-feather="map-pin"></i><?php
                                                                                                        $y = 0;

                                                                                                        $job_loctions = array();
                                                                                                        if ($jobs->location_1 != 0 && $jobs->location_1 > 0)
                                                                                                          $job_loctions[] = $jobs->location_1;

                                                                                                        if ($jobs->location_2 != 0 && $jobs->location_2 > 0)
                                                                                                          $job_loctions[] = $jobs->location_2;

                                                                                                        if ($jobs->location_3 != 0 && $jobs->location_3 > 0)
                                                                                                          $job_loctions[] = $jobs->location_3;

                                                                                                        if (count($job_loctions) > 0) {
                                                                                                          $locationArr = $this->jobs_model->get_locations($job_loctions);
                                                                                                          foreach ($locationArr as $job_location) {
                                                                                                            if ($y++ > 0)
                                                                                                              echo ", ";

                                                                                                            echo $job_location->cityName;
                                                                                                          }
                                                                                                        }
                                                                                                        ?></a></span>
                                <span class="job-type temporary text-capitalize"><a href="#"><i data-feather="clock"></i><?php echo $jobs->min_experience; ?>-<?php echo $jobs->max_experience; ?> Years</a></span>
                              </div>
                            </div>
                            <div class="more">
                              <div class="buttons">
                                <a href="#" class="button">Apply Now</a>
                                <a href="#" class="favourite"><i data-feather="heart"></i></a>
                              </div>
                              <p class="deadline">Deadline: Oct 31, 2018</p>
                            </div>
                          </div>
                        </div>
                      </div>


              <?php       }
                  }
                }
              }
              ?>


            </div>
          </div>

          <div class="tab-pane fade " id="recent" role="tabpanel" aria-labelledby="recent-tab">
            <div class="row">


              <?php
              $jobcount = 1;
              if (!empty($posted_recentJobs)) {
                foreach ($posted_recentJobs as $jobs) {

                  if ($jobcount++ <= 8) {
              ?>


                    <div class="col-lg-6">
                      <div class="job-list half-grid">
                        <div class="thumb">
                          <a href="#">
                            <?php
                            $img_url = ($jobs->comp_logo) ? "/assets/uploads/company_logo/" . $jobs->comp_logo : "assets/images/job/company-logo-9.png";
                            ?>
                            <img src="<?php echo $img_url; ?>" alt="" width="100%" class="img-fluid">


                          </a>
                        </div>
                        <div class="body">
                          <div class="content">
                            <h4><a href="guestuser/details/<?php echo $jobs->jobpost_id; ?>"><?php echo $jobs->job_title; ?></a></h4>
                            <div class="info">
                              <span class="company"><a href="#"><i data-feather="briefcase"></i><?php echo $jobs->company_name; ?></a></span>
                              <span class="office-location"><a href="#"><i data-feather="map-pin"></i><?php
                                                                                                      $y = 0;
                                                                                                      $job_loctions = array();
                                                                                                      if ($jobs->location_1 != 0 && $jobs->location_1 > 0)
                                                                                                        $job_loctions[] = $jobs->location_1;

                                                                                                      if ($jobs->location_2 != 0 && $jobs->location_2 > 0)
                                                                                                        $job_loctions[] = $jobs->location_2;

                                                                                                      if ($jobs->location_3 != 0 && $jobs->location_3 > 0)
                                                                                                        $job_loctions[] = $jobs->location_3;

                                                                                                      if (count($job_loctions) > 0) {
                                                                                                        $locationArr = $this->jobs_model->get_locations($job_loctions);
                                                                                                        foreach ($locationArr as $job_location) {
                                                                                                          if ($y++ > 0)
                                                                                                            echo ", ";

                                                                                                          echo $job_location->cityName;
                                                                                                        }
                                                                                                      }
                                                                                                      ?></a></span>
                              <span class="job-type temporary text-capitalize"><a href="#"><i data-feather="clock"></i><?php echo $jobs->min_experience; ?>-<?php echo $jobs->max_experience; ?> Years</a></span>
                            </div>
                          </div>
                          <div class="more">
                            <div class="buttons">
                              <a href="#" class="button">Apply Now</a>
                              <a href="#" class="favourite"><i data-feather="heart"></i></a>
                            </div>
                            <p class="deadline">Deadline: Oct 31, 2018</p>
                          </div>
                        </div>
                      </div>

                    </div>

              <?php   }
                }
              }
              ?>







            </div>
          </div>




        </div>
        <br />
        <div class="section-header section-header-2 section-header-with-right-content">
          <a href="guestuser/joblistpage" class="header-right">+ Browse All Jobs</a>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Jobs End -->

<!-- Top Companies -->
<div class="section-padding-top padding-bottom-90">
  <div class="container">
    <div class="row">
      <div class="col">
        <div class="section-header">
          <h2>Affiliates</h2>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <div class="company-carousel owl-carousel">
          <div class="company-wrap">
            <div class="thumb">
              <a href="http://ifcloudsolutions.com/">
                <img src="<?php echo base_url(); ?>assets/images/company/ifcloudlogo.svg" class="img-fluid" alt="">
              </a>
            </div>
            <div class="body">
              <h4><a href="http://ifcloudsolutions.com/">iFCloud</a></h4>
              <span>Your files are a click away.</span>
              <!-- <a href="job-listing.html" class="button">4 Open Positions</a> -->
            </div>
          </div>
          <div class="company-wrap">
            <div class="thumb">
              <a href="https://www.ifmeets.com/">
                <img src="<?php echo base_url(); ?>assets/images/company/ifmeetinglogo.svg" class="img-fluid" alt="">
              </a>
            </div>
            <div class="body">
              <h4><a href="https://www.ifmeets.com/">iFMeets</a></h4>
              <span>Video conferencing & Desktop sharing</span>
              <!-- <a href="job-listing.html" class="button">2 Open Positions</a> -->
            </div>
          </div>
          <div class="company-wrap">
            <div class="thumb">
              <a href="https://ifbim.ifieldsmart.com/">
                <img src="<?php echo base_url(); ?>assets/images/company/ifbimlogo2.svg" class="img-fluid" alt="">
              </a>
            </div>
            <div class="body">
              <h4><a href="https://ifbim.ifieldsmart.com/">iFBIM</a></h4>
              <span>Stay updated on your project’s progress with iFBIM Integration</span>
              <!-- <a href="job-listing.html" class="button">4 Open Positions</a> -->
            </div>
          </div>


          <div class="company-wrap">
            <div class="thumb">
              <a href="http://virtualconstructionsolution.com/">
                <img src="<?php echo base_url(); ?>assets/images/company/vcs_logo.png" class="img-fluid" alt="">
              </a>
            </div>
            <div class="body">
              <h4><a href="http://virtualconstructionsolution.com/">V C S</a></h4>
              <span>Providing a complete suite of BIM Solutions</span>
              <!-- <a href="job-listing.html" class="button">1 Open Positions</a> -->
            </div>
          </div>
          <div class="company-wrap">
            <div class="thumb">
              <a href="https://www.bimengus.com/">
                <img src="<?php echo base_url(); ?>assets/images/company/bimenguslogo.png" class="img-fluid" alt="" style="width: 50px;">
              </a>
            </div>
            <div class="body">
              <h4><a href="https://www.bimengus.com/">BIMe</a></h4>
              <span>Constructability Powered by Intelligence</span>
              <!-- <a href="job-listing.html" class="button">4 Open Positions</a> -->
            </div>
          </div>



        </div>
      </div>
    </div>
  </div>
</div>
<!-- Top Companies End -->

<!-- Fun Facts -->
<div class="padding-top-90 padding-bottom-60 fact-bg">
  <div class="container">
    <div class="row fact-items">
      <div class="col-md-3 col-sm-6">
        <div class="fact">
          <div class="fact-icon">
            <i data-feather="briefcase"></i>
          </div>
          <p class="fact-number"><span class="count" data-form="0" data-to="12376"></span></p>
          <p class="fact-name">Live Jobs</p>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="fact">
          <div class="fact-icon">
            <i data-feather="users"></i>
          </div>
          <p class="fact-number"><span class="count" data-form="0" data-to="89562"></span></p>
          <p class="fact-name">Candidates</p>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="fact">
          <div class="fact-icon">
            <i data-feather="file-text"></i>
          </div>
          <p class="fact-number"><span class="count" data-form="0" data-to="28166"></span></p>
          <p class="fact-name">Resumes</p>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="fact">
          <div class="fact-icon">
            <i data-feather="award"></i>
          </div>
          <p class="fact-number"><span class="count" data-form="0" data-to="1366"></span></p>
          <p class="fact-name">Companies</p>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Fun Facts End -->

<!-- Registration Box -->
<div class="section-padding">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <div class="call-to-action-box candidate-box">
          <div class="icon">
            <img src="<?php echo base_url(); ?>assets/images/register-box/1.png" alt="">
          </div>
          <span>Are You</span>
          <h3>Candidate?</h3>
          <a href="<?php echo base_url(); ?>registration">Register Now <i class="fas fa-arrow-right"></i></a>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="call-to-action-box employer-register">
          <div class="icon">
            <img src="<?php echo base_url(); ?>assets/images/register-box/2.png" alt="">
          </div>
          <span>Are You</span>
          <h3>Employer?</h3>
          <!-- <a href="<?php echo base_url(); ?>recruiter/registration" data-toggle="modal" data-target="#exampleModalLong3">Register Now <i class="fas fa-arrow-right"></i></a> -->
          <a href="<?php echo base_url(); ?>recruiter/registration">Register Now <i class="fas fa-arrow-right"></i></a>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Registration Box End -->

<!-- Modal -->
<div class="account-entry">
  <div class="modal fade" id="exampleModalLong3" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title"><i data-feather="edit"></i>Registration</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="account-type">
            <a href="#" class="candidate-acc"><i data-feather="user"></i>Candidate</a>
            <a href="#" class="employer-acc active"><i data-feather="briefcase"></i>Employer</a>
          </div>
          <form action="#">
            <div class="form-group">
              <input type="text" placeholder="Username" class="form-control">
            </div>
            <div class="form-group">
              <input type="email" placeholder="Email Address" class="form-control">
            </div>
            <div class="form-group">
              <input type="password" placeholder="Password" class="form-control">
            </div>
            <div class="more-option terms">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="defaultCheck3">
                <label class="form-check-label" for="defaultCheck3">
                  I accept the <a href="#">terms & conditions</a>
                </label>
              </div>
            </div>
            <button class="button primary-bg btn-block">Register</button>
          </form>
          <div class="shortcut-login">
            <span>Or connect with</span>
            <div class="buttons">
              <a href="#" class="facebook"><i class="fab fa-facebook-f"></i>Facebook</a>
              <a href="#" class="google"><i class="fab fa-google"></i>Google</a>
            </div>
            <p>Already have an account? <a href="#">Login</a></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Testimonial -->
<div class="section-padding-bottom">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="testimonial">
          <div class="testimonial-quote">
            <img src="<?php echo base_url(); ?>assets/images/testimonial/quote.png" class="img-fluid" alt="">
          </div>
          <div class="testimonial-for">
            <div class="testimonial-item">
              <p>“Thanks a lot. I am glad I got this opportunity to work with you all. iFCast has been extremely professional and has helped me in more ways than one. The things I have learned alongside you will go a long way in shaping my career. For that I am grateful.”</p>
              <h5>Chandu Kumar</h5>
            </div>
            <div class="testimonial-item">
              <p>“Hi, I am an MBA in marketing Stream. Although, I had many opportunities in other faculties
                through my college placement, still, I didn't accept the proposals because I
                was not interested in joining those firms, as I was interested in a
                marketing firm, so iFCast helped me to choose the better path and bright
                future. So, Thank you so much to iFCast, for assisting me out up to this extent.”</p>
              <h5>Ayushamaan Sahu</h5>
            </div>
            <div class="testimonial-item">
              <p>“As a job seeker I was looking for the right portal and consultancy to solve my career issues. I did opt for one of their premium services, and it gave me value for money. The team at iFCast is really good at what they deliver.”</p>
              <h5>Sagar Kadve</h5>
            </div>

          </div>
          <div class="testimonial-nav">
            <div class="commenter-thumb">
              <img src="<?php echo base_url(); ?>assets/images/testimonial/thumb-1.jpg" class="img-fluid commenter" alt="">
              <img src="<?php echo base_url(); ?>assets/images/testimonial/1.png" class="comapnyLogo" alt="">
            </div>
            <div class="commenter-thumb">
              <img src="<?php echo base_url(); ?>assets/images/testimonial/thumb-2.jpg" class="img-fluid commenter" alt="">
              <img src="<?php echo base_url(); ?>assets/images/testimonial/2.png" class="comapnyLogo" alt="">
            </div>
            <div class="commenter-thumb">
              <img src="<?php echo base_url(); ?>assets/images/testimonial/thumb-3.jpg" class="img-fluid commenter" alt="">
              <img src="<?php echo base_url(); ?>assets/images/testimonial/3.png" class="comapnyLogo" alt="">
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Testimonial End -->






<!-- NewsLetter -->
<div class="newsletter-bg padding-top-90 padding-bottom-90">
  <div class="container">
    <div class="row">
      <div class="col-xl-5 col-lg-6">
        <div class="newsletter-wrap">
          <h3>A Newsletter</h3>
          <p>Get e-mail updates about our latest news and Special offers. We don’t send spam so don’t worry.</p>
          <form method="post" action="<?= base_url() ?>guestuser/newslettersubscriber" class="osg-newsletter-form form-inline" enctype="multipart/form-data">
            <div class="form-group">
              <input id="newsletter_emailid" name="to" type="text" class="form-control" placeholder="Email address..." required>
            </div>
            <button style="background: #ffffff;border-color: #ffffff;color: #10abba;" type="submit" class="btn button">Submit <i class="fas fa-caret-right"></i></button>


            <!-- <p class="newsletter-error">0 - Please enter a value</p> -->
            <p class="newsletter-success"><?php echo $this->session->flashdata('special_offers'); ?></p>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- NewsLetter End -->


<div class="container">
  <!--
	<div class="row">
		<div class="col-12">
            <br>
			<h6 class="mb-3">Top Jobs</h6>
		</div>
		<?php
    $jobcount = 1;
    if (!empty($posted_jobs)) {
      foreach ($posted_jobs as $jobs) {

        if ($jobcount++ <= 4) {
    ?>

		<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
			<a href="guestuser/details/<?php echo $jobs->jobpost_id; ?>" target="_blank" class="ifcast-style-joblink">
				<div class="ifcast-style-card-1 ifcast-style-jobcard mb-3">
					<div class="row" style="margin-left:-25px;">
						<div class="col-10 text-left">
							<div class="ifcast-style-jobtitle">
								<h3 class="mb-0 ifcast-style-lineclamp-1">
									<?php echo $jobs->job_title; ?>
								</h3>
							</div>
						</div>
						<div class="col-2 text-right mt-2">
							<i style="font-size: 20px; color:#811d0c;" class="fa fa-star" aria-hidden="true"></i>
						</div>

					</div>
					<div class="row mb-2 mt-3">
						<div class="col-5 text-left ">
							<h5 class="ifcast-style-lineclamp-1" data-toggle="tooltip" title="Full company name here"
								data-placement="bottom"><i class="fa fa-building"></i>&nbsp;
								<?php echo $jobs->company_name; ?>
							</h5>
						</div>

						<div class="col-7">
							<div class="row text-right">
								<div class="col-4">
									<h5 class="ifcast-style-lineclamp-1" data-toggle="tooltip" title="Experience here"
										data-placement="bottom"><i class="fa fa-suitcase"></i>&nbsp;
										<?php echo $jobs->min_experience; ?>-<?php echo $jobs->max_experience; ?> Years
									</h5>
								</div>
								<div class="col-8">
									<h5 class="ifcast-style-lineclamp-1" data-toggle="tooltip"
										title="Locaions Mumbahi nashi pune pune nashik mumhai hello nashik hello here"
										data-placement="bottom"><i class="fa fa-map-marker "></i>&nbsp;
										Mumbai, Nashik</h5>
								</div>
							</div>

						</div>

					</div>
					<div class="row mb-2">
						<div class="col-12 text-left">
							<h5 class="ifcast-style-lineclamp-1"><i class="fa fa-cogs"></i>&nbsp;
								<?php echo $jobs->job_description; ?>
							</h5>
						</div>
					</div>

					<div class="row mb-2">
						<div class="col-12 text-left">
							<h5 class="ifcast-style-lineclamp-3"><i class="fa fa-file-text"></i>&nbsp;
								<?php echo $jobs->about_company; ?></h5>
						</div>
					</div>

					<div class="row" style="margin-right:-40px;">

						<div class="col-2">
							<?php
              $img_url = ($jobs->comp_logo) ? "/assets/uploads/company_logo/" . $jobs->comp_logo : "https://dummyimage.com/600x400/000/fff";
              ?>
							<img src="<?php echo $img_url; ?>" alt="" width="100%">
						</div>

					

						<div class="offset-5 col-5 text-right ">
							<p class="pr-3 mb-2 ifcast-style-color-blue">Posted on:
								<?php echo date('d-M-Y', strtotime($jobs->jobPostDate)); ?></p>
							<div class="ifcast-style-jobsalary">
								<h6 class=" mb-0"><i class="fa fa-money"></i>&nbsp;&nbsp;
									<?php
                  if ($jobs->is_discloseSalary == '1') {
                    echo "Not Disclosed";
                  } else {
                    echo $jobs->min_ctc; ?>
									to
									<?php
                    echo $jobs->max_ctc;
                  } ?>
								</h6>
							</div>
						</div>
					</div>
				</div>
			</a>
		</div>
		<?php   }
      }
    }
    ?>


		<div class="col-12 mt-2 mb-4">
			<a href="guestuser/joblist" class="btn btn-primary" target="_blank">More Jobs</a>
		</div>

	</div>
-->



</div>





<?php $this->load->view('layouts/footer_menu', $data);   ?>



<script>
  /*
    Carousel
*/
  $('#carousel-example').on('slide.bs.carousel', function(e) {
    /*
        CC 2.0 License Iatek LLC 2018 - Attribution required
    */
    var $e = $(e.relatedTarget);
    var idx = $e.index();
    var itemsPerSlide = 5;
    var totalItems = $('.carousel-item').length;

    if (idx >= totalItems - (itemsPerSlide - 1)) {
      var it = itemsPerSlide - (totalItems - idx);
      for (var i = 0; i < it; i++) {
        // append slides to end
        if (e.direction == "left") {
          $('.carousel-item').eq(i).appendTo('.carousel-inner');
        } else {
          $('.carousel-item').eq(0).appendTo('.carousel-inner');
        }
      }
    }
  });


  //[VINBO] ADDED THIS FUNCTION
  function applyJob(job_id, action = "save") {
    $(".err").stop().fadeOut();
    $(".error").stop().fadeOut();
    $(".success").stop().fadeOut();

    $("#loader_" + action).show();
    $("#btn_" + action).hide();
    $.ajax({
      url: base_url + "jobs/applyJob",
      dataType: "json",
      data: {
        'job_id': job_id,
        'action': action
      },
      type: "POST",
      success: function(data) {
        if (data == 1 || data == '1') {
          $("#msg_success").fadeIn(1000);
          $("#msg_success").html("&#9888 Your have successfully applied this job.");
          $(".loader").hide();

          window.location.href = base_url + "jobs/joblist";

        }

        return false;


      },
      error: function(e) {
        $(".loader").hide();
        $("#btn_" + action).fadeIn(800);
        $("#msg_error").fadeIn(1000);
        $("#msg_error").html("&#9888 Oops, Error occured while appling job, Please try again .");
        return false;
      }
    });

    return false;
  }

  //[VINBO] add function for display auto suggetions job title
  $(document).ready(function() {
    $('#job_title').keyup(function() {
      let job_title = $(this).val();

      if (job_title != '') {
        $.ajax({
          url: base_url + "guestuser/joblistpage",
          type: 'post',
          data: {
            job_title: job_title
          },
          success: function(data) {
            // console.log(data);
            // return;
            $('#jobList').fadeIn('fast').html(data);
          }
        });
      } else {
        $('#jobList').fadeOut();
      }
    });
  });

  // [VINBO] added this function

  $(document).ready(function() {
    $('#city_id').on('change', function() {
      var city_id = $('#city_id').val();
      $.ajax({
        url: "guestuser/loadsubCities/"+city_id,
        data: {city_id : city_id},
        type: 'post',
        success: function(data) {
          // console.log(data);
          // return;
          $('#subCity_name').html(data);
        }
      });
    });
  });
</script>


<script src="assets/js/ifcastjs/weekchart.js"></script>
<script src="assets/js/ifcastjs/ifcast-javascript.js"></script>