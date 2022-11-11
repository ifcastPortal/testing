<!-- Breadcrumb -->
<div class="alice-bg padding-top-70 padding-bottom-70">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="breadcrumb-area">
              <h1>Enabler Dashboard</h1>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
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
	

    <div class="alice-bg section-padding-bottom">

		<div class="row">
			<div id="userResume_error" class="error col-sm-10"></div>
			<div id="userResume_success" class="success col-sm-10"></div>
		</div>


	 


		<!-- <h6 class="font-weight-normal mt-3 mb-4">
			<?php 
						echo $user_resume->title ? $user_resume->title : "Job details";
						$resume_id = $user_resume->id ? $user_resume->id : "add";
					?>
		</h6> -->


      <div class="container no-gliters">
        <div class="row no-gliters">
          <div class="col">
            <div class="dashboard-container">
              <div class="dashboard-content-wrapper">
                <div class="manage-job-container">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>Job Title</th>
                        <th>Applications</th>
                        <th>Posted on</th>
                        <th>Status</th>
                        <th class="action">Action</th>
                      </tr>
                    </thead>
                    <tbody>


						<?php 
							
					if(!empty($posted_jobs))
					{
						foreach($posted_jobs as $jobs)
						{	?>

                      <tr class="job-items">
                        <td class="title">
                          <h5 id="job_title_<?php echo $jobs->jobpost_id; ?>"><?php echo $jobs->job_title; ?></h5>
                          <div class="info">
                            <span class="office-location"><a ><i data-feather="briefcase"></i><?php echo $jobs->min_experience; ?> - <?php echo $jobs->max_experience; ?> Exp.</a></span>
							<span class="job-type full-time"><a ><i data-feather="clock"></i>
								<?php echo ucfirst($jobs->job_type);  ?> Time
							</a></span>
                          </div>
						</td>
						

						


                        <td class="application"><a data-toggle="modal" data-target="#myModal" onclick="get_appliedUsers('<?php echo $jobs->jobpost_id; ?>');">
							<?php echo $jobs->appiedUsers; ?>  Application(s)</a></td>
                        <td class="deadline"><?php echo date('d-M-Y', strtotime($jobs->jobPostDate)); ?></td>
                        <td class="status active">Active</td>
                        <td class="action">
                          <!-- <a href="#" class="preview" title="Preview"><i data-feather="eye"></i></a> -->
						  <a  class="edit" title="View" href="guestuser/details/<?php echo $jobs->jobpost_id; ?>"><i data-feather="eye"></i></a>
                          <a  class="edit" title="Edit" onclick="edit_jobPost('<?php echo $jobs->jobpost_id; ?>');"><i data-feather="edit"></i></a>
                          <!-- <a href="#" class="remove" title="Delete"><i data-feather="trash-2"></i></a> -->
                        </td>
					  </tr>

					  <?php 	}
					}
				?>

                     
                    </tbody>
                  </table>
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
                  <li class="active"><i class="fas fa-briefcase"></i><a href="recruiter/jobpost/postedjobs">Manage Jobs</a></li>
                  <!-- <li><i class="fas fa-heart"></i><a href="#">Shortlisted Resumes</a></li> -->
                  <li><i class="fas fa-users"></i><a href="recruiter/profile/dreamer_listing">Manage Candidates</a></li>
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
                <h2>Not getting desired candidates?</h2>
                <p>Try our customized services to get quick closures.</p>
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










<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="modelHeader" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
		<div class="modal-header">
			<h5 class="modal-title" id="modelHeader">Modal title</h5>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
			<div id="msg_error" class="error col-sm-10"></div>
		</div>
		<form id="modelForm" name="modelForm" action="" method="post">
			<div class="modal-body" id="modelBody"> 
				<p style="text-align:center;"><i class="fa fa-spinner fa-spin" style="font-size:40px; color:green;"></i></p>
			</div>
		</form>
		<div class="modal-footer">
			<!--<button type="button" class="btn btn-primary btn-md" onclick="addEdit_details();"> 
				<i class="fa fa-paper-plane" aria-hidden="true"></i> Update
			</button> -->
			<span class="loader" id="submit_loader">
					&nbsp; <i class="fa fa-spinner fa-spin" style="font-size:20px; color:green;"></i>
			</span>
			  
			  <button type="button" id="closePop_up" class="btn btn-danger btn-md" data-dismiss="modal"> <i class="fa fa-times" aria-hidden="true"></i> Close</button>
			  
			  <span class="err" id="err_buttons"> </span>
		</div>
    </div>
  </div>
</div>

<!-- Modal -->

<script>
	function get_appliedUsers(jobpost_id)
	{		
		$(".err").stop().fadeOut();
		$(".error").stop().fadeOut();
		$(".success").stop().fadeOut();
		var modelHeader = $("#job_title_"+jobpost_id).html();
			//alert(jobpost_id);	
		$("#modelHeader").html('<span style="font-size: 16px;color: #1f7be3;"> Job Title </span><span style="color: #2ca4d4;font-weight: bold;font-size: 19px;">: '+modelHeader+'	</span>');
		$("#modelBody").html('<p style="text-align:center;"><i class="fa fa-spinner fa-spin" style="font-size:40px; color:green;"></i></p>');
		$.ajax({
			url: base_url + "designerpages/get_appliedUsers",
			dataType: "HTML",
			data: {'jobpost_id':jobpost_id, 'action':'get'},
			type: "POST",
			success: function (data) {
				$("#modelBody").html(data);

				return false;


			},
			error: function (e) {
				$(".loader").hide();
				$("#btn_"+action).fadeIn(800);
				$("#msg_error").fadeIn(1000);
				$("#msg_error").html("&#9888 Oops, Error occured while fetching applied user list, Please try again .");
				return false;
			}
		});

		return false;
	
	}
</script>

<!-- end cont stats -->







<script>
	var base_url = "<?php echo base_url(); ?>";

	function load_qualification(degreeId, field_id) {
		$("#qualification_id_loader_" + field_id).fadeIn(800);
		$("#qualification_id_icon_" + field_id).hide();
		$("#qualification_id_" + field_id).load(base_url + "profile/load_qualification/" + degreeId);
		setTimeout(function () {
			$(".loader").hide();
			$("#qualification_id_icon_" + field_id).fadeIn(800);
		}, 1500);

	}

	function edit_jobPost(jobPost_id) {
		window.location.href = base_url + "recruiter/jobpost/update_Jobpost/" + jobPost_id;

	}


	function load_modelForm(modelHeader, table_id, editDetails) {
		$(".err").stop().fadeOut();
		$(".error").stop().fadeOut();
		$(".success").stop().fadeOut();

		$("#modelHeader").html(modelHeader);
		$("#modelBody").html("");
		$("#modelBody").hide();
		$.ajax({
			url: base_url + "profile/load_modelForm",
			dataType: "html",
			data: {
				'id': table_id,
				'editDetails': editDetails
			},
			type: "POST",
			success: function (data) {
				$("#modelBody").fadeIn(1000);
				$("#modelBody").html(data);
				return false;
			},
			error: function (e) {
				$("#modelBody").fadeIn(1000);
				$("#modelBody").html(
					"&#9888 Oops, Error occured while loading form, Please try again .");
				return false;
			}
		});

	}


	function addEdit_details() {
		$(".err").stop().fadeOut();
		$(".error").stop().fadeOut();
		$(".success").stop().fadeOut();
		$(".loader").hide();

		var editDetails = $("#editDetails").val();
		switch (editDetails) {
			case "employment":
				Add_employment(editDetails);
				break;
			case "userResume":
			case "profileSummary":
				Add_userResume(editDetails);
				break;
			case "educationDetail":
				Add_userResume(editDetails);
				break;
			default:
				alert("Work is going on :  update " + editDetails);

		}


		return false
	}

	function Add_userResume(editDetails) {
		var frmData = new FormData($('#modelForm')[0]);
		$("#submit_loader").show();
		$.ajax({
			url: base_url + "profile/update_userResume",
			dataType: "json",
			data: frmData,
			type: "POST",
			success: function (data) {
				if (data == 1 || data == '1') {
					$("#" + editDetails + "_success").fadeIn(1000);
					$("#" + editDetails + "_success").html("&#9888 Record successfully update done.");


					$('#closePop_up').click();
					$('#modelForm')[0].reset();
				} else {
					$("#" + editDetails + "_error").fadeIn(1000);
					$("#err_buttons").fadeIn(1000);
					$("#err_buttons").html("&#9888 Oops, Records not updated Properly, Please try again .");
					$("#" + editDetails + "_error").html(
						"&#9888 Oops, Records not updated Properly, Please try again .");
					return false;
				}
				$(".loader").hide();
				return false;


			},
			error: function (e) {
				$("#" + editDetails + "_error").fadeIn(1000);
				$("#" + editDetails + "_error").html(
					"&#9888 Oops, Error occured while updating records, Please try again .");
				return false;
			},
			processData: false,
			contentType: false,
		});

		return false;
	}

	function Add_employment(editDetails) {
		var frmData = new FormData($('#modelForm')[0]);
		$("#submit_loader").show();
		$.ajax({
			url: base_url + "profile/updated_employment",
			dataType: "json",
			data: frmData,
			type: "POST",
			success: function (data) {
				if (data == 1 || data == '1') {
					$("#" + editDetails + "_success").fadeIn(1000);
					$("#" + editDetails + "_success").html("&#9888 Record successfully update done.");


					$('#closePop_up').click();
					$('#modelForm')[0].reset();
				} else {
					$("#" + editDetails + "_error").fadeIn(1000);
					$("#err_buttons").fadeIn(1000);
					$("#err_buttons").html(
						"<br/>&#9888 Oops, Records not updated Properly, Please try again .");
					$("#" + editDetails + "_error").html(
						"&#9888 Oops, Records not updated Properly, Please try again .");

				}
				$(".loader").hide();
				return false;


			},
			error: function (e) {
				$("#" + editDetails + "_error").fadeIn(1000);
				$("#" + editDetails + "_error").html(
					"&#9888 Oops, Error occured while updating records, Please try again .");
				$(".loader").hide();
				return false;
			},
			processData: false,
			contentType: false,
		});

		return false;
	}

</script>


<script>
	/*
    Carousel
*/
	$('#carousel-example').on('slide.bs.carousel', function (e) {
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

</script>


<script src="assets/js/ifcastjs/weekchart.js"></script>
<script src="assets/js/ifcastjs/ifcast-javascript.js"></script>
