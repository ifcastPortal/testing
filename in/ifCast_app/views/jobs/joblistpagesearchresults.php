


<!-- <?php 

echo '<pre>',print_r($onkar_results,1),'</pre>';
?> -->



    <!-- Breadcrumb -->
    <div class="alice-bg padding-top-70 padding-bottom-70">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="breadcrumb-area">
              <h1>Job Listing</h1>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Job Listing</li>
                </ol>
              </nav>
            </div>
          </div>
          <div class="col-md-6">
            <div class="breadcrumb-form">
              <form action="#">
                <input type="text" placeholder="Enter Keywords">
                <button><i data-feather="search"></i></button>
              </form>
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
                        <option value="" selected>Most Recent</option>
                        <option value="california">Top Rated</option>
                        <option value="las-vegas">Most Popular</option>
                      </select>
                    </div>
                  </div>
                  <div class="showing-number">
                    <span><a href="<?php echo base_url(); ?>guestuser/joblistpage">View all jobs </a></span>
                  </div> 
                </div>

                <div class="job-filter-result">

                <?php 


                        foreach($onkar_results as $jobs)
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
            
                        <h4><a href="jobs/details/<?php echo $jobs->jobpost_id; ?>" target="_blank" title="<?php echo $jobs->job_title; ?>"><?php echo $jobtitle_trim; ?> </a></h4>
                        <div class="info">

                        <?php
				$company_name_trim = $jobs->company_name;
				$company_name_trim = character_limiter($company_name_trim, 25);

				
			?>



                          <span class="company"><a href="#"><i data-feather="briefcase"></i><?php echo $company_name_trim; ?></a></span>
                          <span class="office-location"><a href="#"><i data-feather="map-pin"></i><?php 
				$y=0;
				//echo "<pre> ===> "; print_r($jobs); exit;
				if($jobs->city_location1)
				{
					$y++;
				
					echo $jobs->city_location1;
				} 
				if($jobs->city_location2)
				{
					if($y++ > 0)
						echo ", ";
				
					echo $jobs->city_location2;
				} 
				if($jobs->city_location3)
				{
					if($y++ > 0)
						echo ", ";
				
					echo $jobs->city_location3;
				} 
				?></a> Hidden</span>
                          <span class="job-type temporary"><a href="#"><i data-feather="clock"></i><?php echo $jobs->min_experience; ?>-<?php echo $jobs->max_experience; ?> Years</a></span>
                        </div>
                      </div>
                      <div class="more">
                        <div class="buttons">
                          <a href="jobs/details/<?php echo $jobs->jobpost_id; ?>" class="button" >View Details</a>
                          <a href="#" class="favourite"><i data-feather="heart"></i></a>
                        </div>
                        <p class="deadline">Posted on: <?php echo date('d-M-Y', strtotime($jobs->jobPostDate)); ?></p>
                      </div>
                    </div> 
                  </div>

<?php
                            
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
              <p class="m-4">Want to find more specific job?</p>
                        <a class="m-4 button primary-bg p-4" href="<?php echo base_url(); ?>profile/joblistpage" style="color:white;">Try Advance Search</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Job Listing End -->

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
                <a href="<?php echo base_url(); ?>login" class="button">Add Resume</a>
                <span>Or</span>
                <a href="<?php echo base_url(); ?>recruiter/login" class="button">Post A Job</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Call to Action End -->


    