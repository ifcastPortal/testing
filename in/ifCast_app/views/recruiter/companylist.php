<!-- Breadcrumb -->
<div class="alice-bg padding-top-70 padding-bottom-70">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="breadcrumb-area">
              <h1>Company Listing</h1>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="profile/userhome">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Employer Listing</li>
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
            <div class="employer-container">
              <div class="filtered-employer-wrapper">
                <div class="employer-view-controller-wrapper">
                  <div class="employer-view-controller">
                    <div class="controller list active">
                      <i data-feather="menu"></i>
                    </div>
                    <div class="controller grid">
                      <i data-feather="grid"></i>
                    </div>
                    <div class="employer-view-filter">
                      <select class="selectpicker">
                        <option value="" selected>Most Recent</option>
                        <option value="california">Top Rated</option>
                        <option value="las-vegas">Most Popular</option>
                      </select>
                    </div>
                  </div>
                  <div class="showing-number">
                    <span>Showing 1–12 of 28 Jobs</span>
                  </div>
                </div>
                <div class="employer-filter-result">
                 


				  <?php foreach($get_companylist as $au): ?>
				 

                  <div class="employer">
                    <div class="thumb">
                      <a href="#">
                        <img src="<?php echo base_url(); ?>assets/images/employer/thumb-3.png" class="img-fluid" alt="">
                      </a>
                    </div>
                    <div class="body">
                      <div class="content">
                        <h4><a href="employer-details.html"><?php echo ucwords($au['company_name']); ?></a></h4>
                        <div class="info">
                          <span class="company-category"><a href="#"><i data-feather="briefcase"></i><?php echo $au['web_url']; ?></a></span>
                          <span class="location"><a href="#"><i data-feather="map-pin"></i>Nashik</a></span>
                        </div>
                      </div>
                      <div class="button-area">
                        <a href="#">
							
							<?php 
								$openvac = 0;
							?>
							<?php foreach($get_jobcount as $jc): ?>

								<?php 
								
									if($jc['user_id'] == $au['user_id'])
									{
										$openvac=$openvac+1;
								?>

								<?php 
									
									}
								
								?>
								


							<?php endforeach; ?>  
							<?php echo $openvac; ?> Openings
						
						</a>
                      </div>
                    </div>
                  </div>

			        <?php endforeach; ?>  
                 
                 
                 
                  
                 
                 
                </div>
                <div class="pagination-list text-center">
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
                </div>
              </div>
              <div class="employer-filter-wrapper">
                <div class="selected-options same-pad">
                  <div class="selection-title">
                    <h4>You Selected</h4>
                    <a href="#">Clear All</a>
                  </div>
                  <ul class="filtered-options">
                  </ul>
                </div>
                <div class="employer-filter-dropdown same-pad category">
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
                <div class="employer-filter-dropdown same-pad location">
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
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
	<!-- Job Listing End -->
	








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