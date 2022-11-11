<!-- GUEST USER -->



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
								$data = $filter_data;
					          $this->load->view('jobs/joblist_filtrationForm', $data);
				      ?>
                
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
                <p>Add resume or post a job.</p>
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