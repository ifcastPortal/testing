<!-- Breadcrumb -->
	<div class="alice-bg padding-top-70 padding-bottom-70">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="breadcrumb-area">
              <h1>Enabler Dashboard</h1>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>recruiter/profile/companydashboard">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Enabler Dashboard</li>
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

              <a href="https://www.ifieldsmart.com"><img
								src="<?php echo base_url(); ?>assets/images/logostrip.svg" alt="" width="90%">
							<p class="text-right">Know more about these products</p>
						</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Breadcrumb End -->
<script>
var base_url = "<?php echo base_url(); ?>";
function ajax_dreamer_listing(limit, pageno)
{	
	$("#loader_"+pageno).show();
	$("#PageNo_"+pageno).hide();
	var posted_data="page="+pageno+"&limit=5";
	$.ajax({
			url:base_url+"recruiter/profile/ajax_dreamer_listing",						 
			type:"POST",
			dataType: 'html',
			data:posted_data,
			success:function(data)
				{					
					$("#PageNo_"+pageno).fadeIn(1000);
					$("#dreamerListing").html(data);
					$(".loader").stop().fadeOut();
				},
			error: function(data)	
				{
					$("#PageNo_"+pageno).fadeIn(1000);
					$(".loader").stop().fadeOut();
					alert(" Oops! error occured while fetching partner leadSource.");	
				}
	});
}
</script>
    <div class="alice-bg section-padding-bottom">
      <div class="container no-gliters">
        <div class="row no-gliters">
          <div class="col">
            <div class="dashboard-container">
              <div class="dashboard-content-wrapper">
                <div class="manage-candidate-container" id="dreamerListing">
                <?php 
					$data['get_candidates'] = $get_candidates;
					$data['pagArr'] = $pagArr;
					$this->load->view('recruiter/profile/partial_dreamer_listing', $data);
				?>
                 <!-- 
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
                  </div> -->
                </div>
              </div>
              <div class="dashboard-sidebar">
                <div class="company-info">
                  <div class="thumb">
                    <img src="dashboard/images/company-logo.png" class="img-fluid" alt="">
                  </div>
                  <div class="company-body">
                  <h5><?php echo $companydetails->company_name; ?></h5>
                  <span><?php echo $companydetails->web_url; ?></span>
                  </div>
                </div>
                <div class="profile-progress">
                  <div class="progress-item">
                    <div class="progress-head">
                      <p class="progress-on">Profile</p>
                    </div>
                    <div class="progress-body">
                      <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 0;"></div>
                      </div>
                      <p class="progress-to">70%</p>
                    </div>
                  </div>
                </div>
                <div class="dashboard-menu">
                <ul>
                  <li><i class="fas fa-home"></i><a href="recruiter/profile/companydashboard">Dashboard</a></li>
                  <li ><i class="fas fa-user"></i><a href="recruiter/profile/company_details">Edit Profile</a></li>
                  <li><i class="fas fa-plus-square"></i><a href="recruiter/jobpost/">Post New Job</a></li>
                  <li><i class="fas fa-briefcase"></i><a href="recruiter/jobpost/postedjobs">Manage Jobs</a></li>
                  <!-- <li><i class="fas fa-heart"></i><a href="#">Shortlisted Resumes</a></li> -->
                  <li class="active"><i class="fas fa-users"></i><a href="recruiter/profile/dreamer_listing">Manage Candidates</a></li>
                  <!-- <li><i class="fas fa-comment"></i><a href="employer-dashboard-message.html">Message</a></li>
                  <li><i class="fas fa-calculator"></i><a href="employer-dashboard-pricing.html">Pricing Plans</a></li> -->
                </ul>
                <ul class="delete">
                  <li><i class="fas fa-power-off"></i><a href="recruiter/login/Out">Logout</a></li>
                  <!-- <li><i class="fas fa-trash-alt"></i><a href="#" data-toggle="modal" data-target="#modal-delete">Delete Profile</a></li> -->
                </ul>
                  <!-- Modal -->
                  <div class="modal fade modal-delete" id="modal-delete" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-body">
                          <h4><i data-feather="trash-2"></i>Delete Account</h4>
                          <p>Are you sure! You want to delete your profile. This can't be undone!</p>
                          <form action="#">
                            <div class="form-group">
                              <input type="password" class="form-control" placeholder="Enter password">
                            </div>
                            <div class="buttons">
                              <button class="delete-button">Save Update</button>
                              <button class="">Cancel</button>
                            </div>
                            <div class="form-group form-check">
                              <input type="checkbox" class="form-check-input" checked="">
                              <label class="form-check-label">You accepts our <a href="#">Terms and Conditions</a> and <a href="#">Privacy Policy</a></label>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Call to Action -->
   <div class="call-to-action-bg padding-top-90 padding-bottom-90">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="call-to-action-2">
            <div class="call-to-action-content">
              <h2>Looking for quick closures?</h2>
              <p>Try our customized services.</p>
            </div>
            <div class="call-to-action-button">
              <a href="http://consultancy.ifcast.com/pages/enabler" class="button">Know More</a>
             
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Call to Action End -->