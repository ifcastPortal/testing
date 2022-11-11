 
 <!-- DREAMER LOGGED IN -->
 
 
 <!-- Breadcrumb -->
 <div class="alice-bg padding-top-70 padding-bottom-70">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="breadcrumb-area">
              <h1>Job Listing</h1>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="profile/userhome">Dashboard</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Job Listing</li>
                </ol>
              </nav>
            </div>
          </div>
          <div class="col-md-6">
            <div class="breadcrumb-form">
              <!-- <form action="#">
                <input type="text" placeholder="Enter Keywords">
                <button><i data-feather="search"></i></button>
              </form> -->
              <a href="https://www.ifieldsmart.com"><img src="<?php echo base_url(); ?>assets/images/logostrip.svg" alt="" width="90%">
              <p class="text-right">Know more about these products</p></a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Breadcrumb End -->


       <!-- Job Listing -->
       <div class="alice-bg section-padding-bottom">
      <div class="container">
        <div class="row no-gutters">
          <div class="col">
            <div class="job-listing-container">
              <div class="col-lg-9 col-md-12 filtered-job-listing-wrapper">
                <div class="job-view-controller-wrapper">
                  <div class="job-view-controller">
                    <div class="controller list active">
                      <i data-feather="menu"></i>
                    </div>
                    <div class="controller grid">
                      <i data-feather="grid"></i>
                    </div>
                    <div class="job-view-filter">
                      <select class="selectpicker">
                        <option value="" selected>Recent</option>
                        <option value="california">Featured Rated</option>
                        <!-- <option value="las-vegas">Most Popular</option> -->
                      </select>
                    </div>
                  </div>
                 
                  <div class="showing-number">
                    <span id="showingCount">Showing <?php echo ($limit * $page); ?> of <?php echo $total_records; ?> Jobs</span>
                  </div>
                </div>
                <div class="job-filter-result">

                <div id="jobList">
                  <?php 
                    $data['posted_jobs'] = $posted_jobs;
                    $this->load->view('jobs/search_joblist', $data);
                  ?>					
                </div>
				  


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
                </div>
                <!-- <div class="pagination-list text-center">
                  <nav class="navigation pagination">
                    <div class="nav-links">
                      <a class="prev page-numbers" href="#"><i class="fas fa-angle-left"></i></a>
                      <a class="page-numbers" href="#">1</a>
                      <span aria-current="page" class="page-numbers current">2</span>
                      <a class="page-numbers" href="#">3</a>
                      <a class="page-numbers" href="#">4</a>
                      <a class="next page-numbers" href="#"><i class="fas fa-angle-right"></i></a>
                    </div>
                  </nav>                
                </div> -->
              </div>
              <div class="job-filter-wrapper">
				        <?php 
					          $this->load->view('jobs/joblist_filtrationForm', $data);
				      ?>
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Job Listing End -->

    



    <!-- Job Listing 
    <div class="alice-bg section-padding-bottom">
      <div class="container">
        <div class="row no-gutters">
          <div class="col">
            <div class="job-listing-container">
              <div class="filtered-job-listing-wrapper">
                <div class="job-view-controller-wrapper">
                  <div class="job-view-controller">
                    <div class="controller list active">
                      <i data-feather="menu"></i>
                    </div>
                    <div class="controller grid">
                      <i data-feather="grid"></i>
                    </div>
                    <div class="job-view-filter">
                      <select class="selectpicker">
                      <option value="" selected>Recent</option>
                        <option value="california">Featured Rated</option>
                      </select>
                    </div>
                  </div>
                  <div class="showing-number">


                  


                    <span>Showing 58 of 128+ Jobs</span>
                  </div>
                </div>
                <div class="job-filter-result">


					<?php 
					
					if(!empty($posted_jobs))
					{
						foreach($posted_jobs as $jobs)
						{

					?>


                  <div class="job-list">
                    <div class="thumb">
                      <a href="#">
					
						
						<?php 
							$img_url = ($jobs->comp_logo) ? "/assets/uploads/company_logo/".$jobs->comp_logo : "assets/images/job/company-logo-9.png";
						?>
						<img src="<?php echo $img_url; ?>" alt="" width="100%" class="img-fluid">


                      </a>
                    </div>
                    <div class="body">
                      <div class="content">


						<?php
							$jobtitle_trim = $jobs->job_title;
							$jobtitle_trim = character_limiter($jobtitle_trim, 25);
						?>

                        <h4><a href="jobs/details/<?php echo $jobs->jobpost_id; ?>" target="_blank" title="<?php echo $jobs->job_title; ?>"><?php echo $jobtitle_trim; ?></a></h4>
                        <div class="info">

                        
                          <span class="company"><a href="#"><i data-feather="briefcase"></i><?php echo $jobs->company_name; ?> </a></span>
                          <span class="office-location"><a href="#"><i data-feather="map-pin"></i><?php 
							$y=0;
							foreach($locationArr as $job_location)
							{
								if($y++ > 0)
									echo ", ";
							
								echo $job_location->cityName;
							} 
							?></a></span>
					
						  <span class="job-type temporary text-capitalize"><a href="#"><i data-feather="clock"></i><?php echo $jobs->min_experience; ?>-<?php echo $jobs->max_experience; ?> Years</a></span>

						  
                        </div>
                      </div>
                      <div class="more">
                        <div class="buttons">
                          <a href="jobs/details/<?php echo $jobs->jobpost_id; ?>" class="button" >Apply Now</a>
                          <a href="jobs/details/<?php echo $jobs->jobpost_id; ?>" class="favourite"><i data-feather="heart"></i></a>
                        </div>
                        <p class="deadline">Posted on: <?php echo date('d-M-Y', strtotime($jobs->jobPostDate)); ?></p>
                      </div>


                    
        

                    </div> 
				  </div>
				  
				  <?php 
				}
				}
			?>
				  


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
                </div>

             



              </div>
              <div class="job-filter-wrapper">
                <div class="selected-options same-pad">
                  <div class="selection-title">
                    <h4>You Selected</h4>
                    <a href="#">Clear All</a>
                  </div>
                  <ul class="filtered-options">
                  </ul>
                </div>
                <div class="job-filter-dropdown same-pad category">
                  <select class="selectpicker">
                    <option value="" selected>Category</option>
                    <option value="california">Accounting / Finance</option>
                    <option value="california">Education</option>
                    <option value="california">Design &amp; Creative</option>
                    <option value="california">Health Care</option>
                    <option value="california">Engineer &amp; Architects</option>
                    <option value="california">Marketing &amp; Sales</option>
                    <option value="california">Garments / Textile</option>
                    <option value="california">Customer Support</option>
                    <option value="california">Digital Media</option>
                    <option value="california">Telecommunication</option>
                  </select>
                </div>
                <div class="job-filter-dropdown same-pad location">
                  <select class="selectpicker">
                    <option value="" selected>Location</option>
                    <option value="california">Chicago</option>
                    <option value="california">New York City</option>
                    <option value="california">San Francisco</option>
                    <option value="california">Washington</option>
                    <option value="california">Boston</option>
                    <option value="california">Los Angeles</option>
                    <option value="california">Seattle</option>
                    <option value="california">Las Vegas</option>
                    <option value="california">San Diego</option>
                  </select>
                </div>
                <div data-id="job-type" class="job-filter job-type same-pad">
                  <h4 class="option-title">Job Type</h4>
                  <ul>
                    <li class="full-time"><i data-feather="clock"></i><a href="#" data-attr="Full Time">Full Time</a></li>
                    <li class="part-time"><i data-feather="clock"></i><a href="#" data-attr="Part Time">Part Time</a></li>
                    <li class="freelance"><i data-feather="clock"></i><a href="#" data-attr="Freelance">Freelance</a></li>
                    <li class="temporary"><i data-feather="clock"></i><a href="#" data-attr="Temporary">Temporary</a></li>
                  </ul>
                </div>
                <div data-id="experience" class="job-filter experience same-pad">
                  <h4 class="option-title">Experience</h4>
                  <ul>
                    <li><a href="#" data-attr="Fresh">Fresh</a></li>
                    <li><a href="#" data-attr="Less than 1 year">Less than 1 year</a></li>
                    <li><a href="#" data-attr="2 Year">2 Year</a></li>
                    <li><a href="#" data-attr="3 Year">3 Year</a></li>
                    <li><a href="#" data-attr="4 Year">4 Year</a></li>
                    <li><a href="#" data-attr="5 Year">5 Year</a></li>
                    <li><a href="#" data-attr="Avobe 5 Years">Avobe 5 Years</a></li>
                  </ul>
                </div>
                <div class="job-filter same-pad">
                  <h4 class="option-title">Salary Range</h4>
                  <div class="price-range-slider">
                    <div class="nstSlider" data-range_min="0" data-range_max="10000" 
                     data-cur_min="0"    data-cur_max="6130">
                      <div class="bar"></div>
                      <div class="leftGrip"></div>
                      <div class="rightGrip"></div>
                      <div class="grip-label">
                        <span class="leftLabel"></span>
                        <span class="rightLabel"></span>
                      </div>
                    </div>
                  </div>
                </div>
                <div data-id="post" class="job-filter post same-pad">
                  <h4 class="option-title">Date Posted</h4>
                  <ul>
                    <li><a href="#" data-attr="Last hour">Last hour</a></li>
                    <li><a href="#" data-attr="Last 24 hour">Last 24 hour</a></li>
                    <li><a href="#" data-attr="Last 7 days">Last 7 days</a></li>
                    <li><a href="#" data-attr="Last 14 days">Last 14 days</a></li>
                    <li><a href="#" data-attr="Last 30 days">Last 30 days</a></li>
                  </ul>
                </div>
                <div data-id="gender" class="job-filter same-pad gender">
                  <h4 class="option-title">Gender</h4>
                  <ul>
                    <li><a href="#" data-attr="Male">Male</a></li>
                    <li><a href="#" data-attr="Female">Female</a></li>
                  </ul>
                </div>
                <div data-id="qualification" class="job-filter qualification same-pad">
                  <h4 class="option-title">Qualification</h4>
                  <ul>
                    <li><a href="#" data-attr="Matriculation">Matriculation</a></li>
                    <li><a href="#" data-attr="Intermidiate">Intermidiate</a></li>
                    <li><a href="#" data-attr="Gradute">Gradute</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
     Job Listing End -->

























    <!-- Call to Action -->
    <div class="call-to-action-bg padding-top-90 padding-bottom-90">
      <div class="container">
        <div class="row">
          <div class="col">
            <div class="call-to-action-2">
              <div class="call-to-action-content">
                <h2>National Institute of Building Technology</h2>
                <p>Know more about NIBT Courses and upgrade your skills.</p>
              </div>
              <div class="call-to-action-button">
                <a href="https://nibt.education" class="button">I am interseted</a>
               
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Call to Action End -->











<script>
	var base_url = "<?php echo base_url(); ?>";

	$(document).ready(function () {
		$('#preffered_location').select2({
			placeholder: 'Select at least 3 preffered locations',
			maximumSelectionLength: 3
		});

		$('#required_education').select2({
			placeholder: 'Select at least 3 preffered locations',
			maximumSelectionLength: 3
		});

		$('#preffered_industries').select2({
			placeholder: 'Select at least 3 preffered locations',
			maximumSelectionLength: 3
		});

		$('#preffered_salary').select2({
			placeholder: 'Select at least 3 preffered locations',
			maximumSelectionLength: 3
		});

		$('#preffered_jobtype').select2({
			placeholder: 'Select at least 3 preffered locations',
			maximumSelectionLength: 3
		});



	});
</script>




<script>
	var base_url = "<?php echo base_url(); ?>";

	$(document).ready(function () {
		$('#preffered_location').select2({

			placeholder: 'Select at least 3 preffered locations',

			maximumSelectionLength: 3

		});

	});
	
	function applyJob(job_id, action="save")
	{
		
		
		$(".err").stop().fadeOut();
		$(".error").stop().fadeOut();
		$(".success").stop().fadeOut();
		
		$("#loader_"+action).show();
		$("#btn_"+action).hide();
		$.ajax({
			url: base_url + "jobs/applyJob",
			dataType: "json",
			data: {'job_id':job_id, 'action':action},
			type: "POST",
			success: function (data) {
				if (data == 1 || data == '1') {
					$("#msg_success").fadeIn(1000);
					$("#msg_success").html("&#9888 Your have successfully applied this job.");
					$(".loader").hide();
					
					window.location.href = base_url + "jobs/details/" + job_id;
					
				}

				return false;


			},
			error: function (e) {
				$(".loader").hide();
				$("#btn_"+action).fadeIn(800);
				$("#msg_error").fadeIn(1000);
				$("#msg_error").html("&#9888 Oops, Error occured while appling job, Please try again .");
				return false;
			}
		});

		return false;
	}
</script>







