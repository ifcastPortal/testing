<!-- Candidates Details -->
<div class="alice-bg padding-top-60 section-padding-bottom">
  <div class="container">
    <div class="row">
      <div class="col">
        <div class="job-listing-details">
          <div class="job-title-and-info">
            <div class="title">
              <div class="thumb">
                <!-- <img src="images/job/company-logo-1.png" class="img-fluid" alt=""> -->

                <?php
                $img_url = ($jobs->comp_logo) ? "/assets/uploads/company_logo/" . $jobs->comp_logo : "assets/images/job/company-logo-9.png";
                ?>
                <img src="<?php echo $img_url; ?>" alt="" width="100%" class="img-fluid">
              </div>
              <div class="title-body">
                <?php

                $jobtitle_trim = $jobDetails->job_title;
                $jobtitle_trim = character_limiter($jobtitle_trim, 35);

                ?>
                <h4 title="<?php echo $jobDetails->job_title; ?>"><?php echo $jobtitle_trim; ?> </h4>
                <div class="info">

                  <?php
                  $company_name_trim = $jobDetails->company_name;
                  $company_name_trim = character_limiter($company_name_trim, 15);
                  ?>

                  <span class="company"><a href="#"><i data-feather="briefcase"></i><?php echo $company_name_trim; ?></a></span>
                  <span class="office-location"><a href="#"><i data-feather="map-pin"></i><?php
                                                                                          $y = 0;
                                                                                          foreach ($locationArr as $job_location) {
                                                                                            if ($y++ > 0)
                                                                                              echo ", ";

                                                                                            echo $job_location->cityName;
                                                                                          }
                                                                                          ?></a></span>
                  <!-- <span class="job-type temporary text-capitalize"><a href="#"><i data-feather="clock"></i><?php echo $jobs->job_type; ?> Time</a></span> -->
                  <span class="job-type temporary text-capitalize"><a href="#"><i data-feather="clock"></i><?php echo $jobDetails->min_experience; ?>-<?php echo $jobDetails->max_experience; ?> Years</a></span>
                </div>
              </div>
            </div>
            <div class="button">
              <a class="btn btn-outline-primary" href="login" style="cursor:pointer; padding:15px 30px; margin-right:10px;font-weight:600; font-family:'poppins',sans-serif;font-size:1.4rem;"><i data-feather="heart" style="margin:0px 7px  0px 0px;width:18px;"></i>Save Job</a>
              <!-- class="save"  -->
              <a name="apply" class="btn btn-outline-success" href="login" style="cursor:pointer;padding:15px 30px; margin-right:10px;font-weight:600; font-family:'poppins',sans-serif;font-size:1.4rem;">Apply Job</a>
              <!-- class="apply" id="btn_apply"  -->

              <span class="loader" id="loader_apply">&nbsp;
                <i class="fa fa-spinner fa-spin" style="font-size:20px; color:green;"></i>
              </span>

              <span class="err" id="err_apply"> </span>


            </div>
          </div>
          <div class="details-information section-padding-60">
            <div class="row">
              <div class="col-xl-7 col-lg-8">
                <div class="description details-section">
                  <h4><i data-feather="align-left"></i>Job Description</h4>
                  <!-- <p>Combined with a handful of model sentence structures, to generate lorem Ipsum which  It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including.</p>
					  <p>Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable </p> -->


                  <p><?php echo ucfirst($jobDetails->job_description); ?></p>
                </div>
                <div class="responsibilities details-section">
                  <h4><i data-feather="zap"></i>Responsibilities</h4>
                  <!-- <ul>
                        <li>The applicants should have experience in the following areas</li>
                        <li>Skills on M.S Word, Excel, and Integrated Accounting package i.e. Software</li>
                        <li>Have sound knowledge of commercial activities.</li>
                        <li>Should have vast knowledge in IAS/ IFRS, Company Act, Income Tax, VAT.</li>
                        <li>Good verbal and written communication skills.</li>
                        <li>Leadership, analytical, and problem-solving abilities.</li>
                      </ul> -->
                  <p><?php echo ucfirst($jobDetails->job_responsibility); ?></p>
                </div>
                <div class="edication-and-experience details-section">
                  <h4><i data-feather="book"></i>Education + Experience</h4>
                  <!-- <ul>
                        <li>M.Com (Accounting) / M.B.S / M.B.A under National University with CA course complete.</li>
                        <li>M.S (Statistics) any Public University / National University.</li>
                        <li>Masters of library science any Public University.</li>
                        <li>2 to 3 year(s) Experiance</li>
                        <li>Females candidate are discourage to apply.</li>
                      </ul> -->
                  <p><?php echo ucfirst($jobDetails->job_education); ?></p>
                </div>



                <div class="other-benifit details-section">
                  <h4><i data-feather="gift"></i>Keywords</h4>

                  <p><?php echo ucfirst($jobDetails->keywords); ?></p>
                </div>

              </div>
              <div class="col-xl-4 offset-xl-1 col-lg-4">
                <div class="information-and-share">
                  <div class="job-summary">
                    <h4>Job Summary</h4>
                    <ul>
                      <li><span>Posted on:</span> <?php echo date('d-M-Y', strtotime($jobDetails->jobPostDate)); ?></li>
                      <li><span>Vacancy:</span><?php echo $jobDetails->no_ofVacancies; ?></li>
                      <li><span>Job Type:</span><?php echo ucfirst($jobDetails->job_type); ?> Time</li>
                      <li><span>Experience:</span> <?php echo $jobDetails->min_experience; ?>-<?php echo $jobDetails->max_experience; ?> Years</h5>
                      </li>

                      <li><span>Salary:</span> <?php
                                                if ($jobDetails->is_discloseSalary == '1') {
                                                  echo "Not Disclosed";
                                                } else {
                                                ?>

                          <p class="d-inline">&#8377;<?php echo $jobDetails->min_ctc; ?> - &#8377;<?php echo $jobDetails->max_ctc; ?> (Lakhs)</p>
                        <?php
                                                }
                        ?>
                      </li>

                      <!-- <li><span>Application Deadline:</span> Oct 15,  2019</li> -->
                    </ul>
                  </div>
                  <!-- <div class="share-job-post">
                        <span class="share"><i class="fas fa-share-alt"></i>Share:</span>
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#"><i class="fab fa-google-plus-g"></i></a>
                        <a href="#"><i class="fab fa-pinterest-p"></i></a>
                        <a href="#" class="add-more"><span class="ti-plus"></span></a>
                      </div>
                      <div class="buttons">
                        <a href="#" class="button print"><i data-feather="printer"></i>Print Job</a>
                        <a href="#" class="button report"><i data-feather="flag"></i>Report Job</a>
                      </div> -->
                  <div class="job-location">
                    <h4>FREE 10GB Cloud Space <br><br>iFCloud - A Solution for your storage</h4>
                    <div id="map-area">
                      <!-- <div class="cp-map" id="location" data-lat="40.713355" data-lng="-74.005535" data-zoom="10"></div> -->
                      <!-- <div class="cp-map" id="location" data-lat="40.713355" data-lng="-74.005535" data-zoom="10"></div> -->


                      <img src="<?php echo base_url(); ?>assets/images/company/ifcloudlogo.svg" class="img-fluid" alt="iFCloud">

                      <a href="http://ifcloudsolutions.com/">Click Here</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-xl-7 col-lg-8">
              <div class="company-information details-section">
                <h4><i data-feather="briefcase"></i>About the Company</h4>
                <ul>
                  <li><span>Company Name:</span> <?php echo $jobDetails->company_name; ?></li>
                  <li><span>Address:</span> <?php echo $jobDetails->address; ?></li>
                  <li><span>Contact Person:</span><?php echo ucfirst($jobDetails->contact_person); ?></li>
                  <li><span>Website:</span> <a href="#"><?php echo $jobDetails->web_url; ?></a></li>
                  <li><span>Company Profile:</span></li>
                  <li><?php echo ucfirst($jobDetails->about_company); ?></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Candidates Details End -->

<div class="apply-popup">
  <div class="modal fade" id="apply-popup-id" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title"><i data-feather="edit"></i>APPLY FOR THIS JOB</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="#">
            <div class="form-group">
              <input type="text" placeholder="Full Name" class="form-control">
            </div>
            <div class="form-group">
              <input type="email" placeholder="Email Address" class="form-control">
            </div>
            <div class="form-group">
              <textarea class="form-control" placeholder="Message"></textarea>
            </div>
            <div class="form-group file-input-wrap">
              <label for="up-cv">
                <input id="up-cv" type="file">
                <i data-feather="upload-cloud"></i>
                <span>Upload your resume <span>(pdf,zip,doc,docx)</span></span>
              </label>
            </div>
            <div class="more-option">
              <input class="custom-radio" type="checkbox" id="radio-4" name="termsandcondition">
              <label for="radio-4">
                <span class="dot"></span> I accept the <a href="#">terms & conditions</a>
              </label>
            </div>
            <button class="button primary-bg btn-block">Apply Now</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Jobs -->
<div class="section-padding-bottom alice-bg">
  <div class="container">
    <div class="row">
      <div class="col">
        <div class="section-header section-header-2 section-header-with-right-content">
          <h2>Simillar Jobs</h2>
          <a href="guestuser/joblistpage" class="header-right">+ Browse All Jobs</a>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col">

        <p>No similar jobs found. Please click browse all.</p>

      </div>
    </div>
  </div>
</div>
<!-- Jobs End -->
<!-- Call to Action -->
<div class="call-to-action-bg padding-top-90 padding-bottom-90">
  <div class="container">
    <div class="row">
      <div class="col">
        <div class="call-to-action-2">
          <div class="call-to-action-content">
            <h2>Find Your Dream Job or Candidate</h2>
            <p>Add resume or post a job. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec.</p>
          </div>
          <div class="call-to-action-button">
            <a href="login" class="button">Add Resume</a>
            <span>Or</span>
            <a href="recruiter/login" class="button">Post A Job</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Call to Action End -->




<script>
  var base_url = "<?php echo base_url(); ?>";

  $(document).ready(function() {
    $('#preffered_location').select2({

      placeholder: 'Select at least 3 preffered locations',

      maximumSelectionLength: 3

    });

  });


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
</script>