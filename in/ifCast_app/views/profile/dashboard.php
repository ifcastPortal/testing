<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="modelHeader" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="modelHeader">Modal title</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form id="modelForm" name="modelForm" action="" method="post">
				<div class="modal-body" id="modelBody">
					<p>Some text in the modal.</p>
				</div>
			</form>
			<div class="modal-footer">
				<button type="button" class="btn btn-primary btn-md" onclick="addEdit_details();">
					<i class="fa fa-paper-plane" aria-hidden="true"></i> Update
				</button>
				<span class="loader" id="submit_loader">
					&nbsp; <i class="fa fa-spinner fa-spin" style="font-size:20px; color:green;"></i>
				</span>

				<button type="button" id="closePop_up" class="btn btn-danger btn-md" data-dismiss="modal"> <i class="fa fa-times" aria-hidden="true"></i> Close</button>

				<span class="err" id="err_buttons"> </span>
			</div>
		</div>
	</div>
</div>







<!-- Breadcrumb -->
<div class="alice-bg padding-top-70 padding-bottom-70">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="breadcrumb-area">
					<h1>Resume</h1>
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="profile/userhome">Home</a></li>
							<li class="breadcrumb-item active" aria-current="page">Resume</li>
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
						<p class="text-right">Know more about these products</p>
					</a>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Breadcrumb End -->

<div class="alice-bg section-padding-bottom">
	<div class="container no-gliters">
		<div class="row no-gliters">
			<div class="col">
				<div class="dashboard-container">
					<div class="dashboard-content-wrapper">
						<div class="download-resume dashboard-section">

							<?php
							if ($user_resume->upload_file) {
							?>
								<a id="skyBlue_hover" href="<?php echo base_url() ?>assets/uploads/resums/<?php echo $user_resume->upload_file; ?>" target="_blank">
									<i class="fa fa-file-pdf-o" aria-hidden="true"></i>
									&nbsp;View CV<i data-feather="eye"></i>
								</a>

								<a id="skyBlue_hover" href="<?php echo base_url() ?>assets/uploads/resums/<?php echo $user_resume->upload_file; ?>" target="_blank" download>
									<i class="fa fa-file-pdf-o" aria-hidden="true"></i>
									&nbsp;Download CV<i data-feather="download"></i>
								</a>

								<!-- <a id="skyBlue_hover" href="#" target="_blank" >
									<i class="fa fa-file-pdf-o" aria-hidden="true"></i>
									&nbsp;Upload CV<i data-feather="upload"></i>
								</a> -->
							<?php
							}
							?>










							</a>
							<!-- <a href="#">Download CV<i data-feather="download"></i></a>
				  
                  <a href="#">Download Cover Letter<i data-feather="download"></i></a> -->
						</div>
						<!-- <div class="skill-and-profile dashboard-section">
                  <div class="skill">
                    <label>Skills:</label>
                    <a href="#">Design</a>
                    <a href="#">Illustration</a>
                    <a href="#">iOS</a>
                  </div>
                  <div class="social-profile">
                    <label>Social:</label>
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-google-plus"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                    <a href="#"><i class="fab fa-behance"></i></a>
                    <a href="#"><i class="fab fa-dribbble"></i></a>
                    <a href="#"><i class="fab fa-github"></i></a>
                  </div>
				</div> -->


						<div class="about-details details-section dashboard-section">
							<h4><i data-feather="align-left"></i>Resume title</h4>

							<div id="userResume_error" class="error col-sm-10"></div>
							<div id="userResume_success" class="success col-sm-10"></div>


							<p><?php
								echo $user_resume->title ? $user_resume->title : "Add your resume title here";
								$resume_id = $user_resume->id ? $user_resume->id : "add";
								?></p>


							<button id="skyBlue_hover" target="_blank" class="btn btn-primary edit-resume" style="font:14px poppins,sans-serif; margin:-15% 15.2rem 10px 0; padding:15px 20px;font-weight:600;" data-toggle="modal" data-target="#myModal" onclick="load_modelForm('Update Resume', '<?php echo $resume_id; ?>', 'userResume');">
								<i class="fa fa-file-pdf-o" aria-hidden="true"></i>
								&nbsp;Upload CV<i data-feather="upload"></i>
							</button>

						</div>



						<div class="about-details details-section dashboard-section">
							<h4><i data-feather="align-left"></i>About Me</h4>

							<p><?php
								echo $user_resume->profile_summary ? $user_resume->profile_summary : "Add a summary about yourself.";
								?></p>


							<button type="button" class="btn btn-primary edit-resume" data-toggle="modal" data-target="#myModal" onclick="load_modelForm('Profile Summary', '<?php echo $resume_id; ?>', 'profileSummary');">
								<i data-feather="edit-2"></i>
							</button>
						</div>


						<div class="experience dashboard-section details-section">
							<h4><i data-feather="briefcase"></i>Work Experience</h4>

							<button type="button" class="btn btn-primary edit-resume" data-toggle="modal" data-target="#myModal" onclick="load_modelForm('Add New Employment', 'add','employment');">
								<i data-feather="plus-circle"></i>
							</button>

							<div class="row">
								<div id="employment_error" class="error col-sm-10"></div>
								<div id="employment_success" class="success col-sm-10"></div>
							</div>


							<?php
							//echo "<pre>userprevjob==>"; print_r($userprevjob); exit;
							foreach ($userprevjob as $row) { ?>

								<div class="experience-section">
									<span class="service-year"><?php echo date('d-M-Y', strtotime($row->from_date)); ?> - <?php echo date('d-M-Y', strtotime($row->to_date)); ?></span>

									<button type="button" class="btn btn-primary edit-resume" data-toggle="modal" data-target="#myModal" onclick="load_modelForm('Edit Employment', '<?php echo $row->prevJobId; ?>','employment');">
										<i data-feather="edit-2"></i>
									</button>

									<h5>
										<?php echo $row->designation; ?><span>@ <?php echo $row->prevJobCompany; ?></span>
									</h5>
									<!-- <p>Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage</p> -->
								</div>

							<?php	}	?>

						</div>

						<div class="edication-background details-section dashboard-section">


							<h4><i data-feather="book"></i>Education Background</h4>

							<div class="row">
								<div id="educationDetail_error" class="error col-sm-10"></div>
								<div id="educationDetail_success" class="success col-sm-10"></div>
							</div>


							<?php
							$user_degreeArr = array();
							foreach ($educationDetail as $row) {

								$user_degreeArr[] = $row->degreeId;

							?>


								<div class="education-label">
									<span class="study-year">Completed in: <?php echo $row->passing_year; ?></span>
									<button type="button" class="btn btn-primary edit-resume" data-toggle="modal" data-target="#myModal" onclick="load_modelForm('Edit Education Detail', '<?php echo $row->education_id; ?>','educationDetail','edit');">
										<i data-feather="edit-2"></i>
									</button>

									<h5><?php echo $row->degreeName; ?><span>@ <?php echo $row->university_name; ?></span></h5>
									<!-- <p>Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage</p> -->
								</div>


								<?php
							}
							foreach ($degrees as $degree_row) {
								if (!in_array($degree_row->degreeId, $user_degreeArr)) {
								?>
									<button class="button primary-bg mt-3" data-toggle="modal" data-target="#myModal" onclick="load_modelForm('Add Education Detail', '<?php echo $degree_row->degreeId; ?>','Apll', 'add');">
										<i class="fas fa-plus"></i> <?php echo $degree_row->degreeName; ?>
									</button>
							<?php		 }
							}
							?>
						</div>


						<!--
                <div class="professonal-skill dashboard-section details-section">
                  <h4><i data-feather="feather"></i>Professional Skill</h4>
                  <p>Combined with a handful of model sentence structures, to generate lorem Ipsum which  It has survived not only five centuries, but also the leap into electronic typesetting</p>
                  <div class="progress-group">
                    <div class="progress-item">
                      <div class="progress-head">
                        <p class="progress-on">Photoshop</p>
                      </div>
                      <div class="progress-body">
                        <div class="progress">
                          <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 0;"></div>
                        </div>
                        <p class="progress-to">70%</p>
                      </div>
                    </div>
                    <div class="progress-item">
                      <div class="progress-head">
                        <p class="progress-on">HTML/CSS</p>
                      </div>
                      <div class="progress-body">
                        <div class="progress">
                          <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 0;"></div>
                        </div>
                        <p class="progress-to">90%</p>
                      </div>
                    </div>
                    <div class="progress-item">
                      <div class="progress-head">
                        <p class="progress-on">JavaScript</p>
                      </div>
                      <div class="progress-body">
                        <div class="progress">
                          <div class="progress-bar" role="progressbar" aria-valuenow="74" aria-valuemin="0" aria-valuemax="100" style="width: 0;"></div>
                        </div>
                        <p class="progress-to">74%</p>
                      </div>
                    </div>
                    <div class="progress-item">
                      <div class="progress-head">
                        <p class="progress-on">PHP</p>
                      </div>
                      <div class="progress-body">
                        <div class="progress">
                          <div class="progress-bar" role="progressbar" aria-valuenow="86" aria-valuemin="0" aria-valuemax="100" style="width: 0;"></div>
                        </div>
                        <p class="progress-to">86%</p>
                      </div>
                    </div>
                  </div>
				</div>
				
                <div class="special-qualification dashboard-section details-section">
                  <h4><i data-feather="gift"></i>Special Qualification</h4>
                  <ul>
                    <li>5 years+ experience designing and building products.</li>
                    <li>Skilled at any Kind Design Tools.</li>
                    <li>Passion for people-centered design, solid intuition.</li>
                    <li>Hard Worker & Quick Lerner.</li>
                  </ul>
				</div>
				
                <div class="portfolio dashboard-section details-section">
                  <h4><i data-feather="gift"></i>Portfolio</h4>
                  <div class="portfolio-slider owl-carousel">
                    <div class="portfolio-item">
                      <img src="images/portfolio/thumb-3.jpg" class="img-fluid" alt="">
                      <div class="overlay">
                        <a href="#"><i data-feather="eye"></i></a>
                        <a href="#"><i data-feather="link"></i></a>
                      </div>
                    </div>
                    <div class="portfolio-item">
                      <img src="images/portfolio/thumb-1.jpg" class="img-fluid" alt="">
                      <div class="overlay">
                        <a href="#"><i data-feather="eye"></i></a>
                        <a href="#"><i data-feather="link"></i></a>
                      </div>
                    </div>
                    <div class="portfolio-item">
                      <img src="images/portfolio/thumb-2.jpg" class="img-fluid" alt="">
                      <div class="overlay">
                        <a href="#"><i data-feather="eye"></i></a>
                        <a href="#"><i data-feather="link"></i></a>
                      </div>
                    </div>
                    <div class="portfolio-item">
                      <img src="images/portfolio/thumb-3.jpg" class="img-fluid" alt="">
                      <div class="overlay">
                        <a href="#"><i data-feather="eye"></i></a>
                        <a href="#"><i data-feather="link"></i></a>
                      </div>
                    </div>
                    <div class="portfolio-item">
                      <img src="images/portfolio/thumb-2.jpg" class="img-fluid" alt="">
                      <div class="overlay">
                        <a href="#"><i data-feather="eye"></i></a>
                        <a href="#"><i data-feather="link"></i></a>
                      </div>
                    </div>
                  </div>
				</div>-->


						<?php
						if ($user_certificates->certificationDoc_file) {
						?>

							<div class="about-details details-section dashboard-section">
								<h4><i data-feather="align-left"></i>Certificates & Documents</h4>

								<div id="userResume_error" class="error col-sm-10"></div>
								<div id="userResume_success" class="success col-sm-10"></div>


								<div class="row">

									<div class="col-9">
										<p><?php echo $user_certificates->certification_title; ?> <span class="font-italic">(<?php echo $user_certificates->completion_year; ?> ) </span></p>
									</div>
									<div class="col-3">
										<a class="btn btn-primary edit-resume" href="<?php echo base_url() ?>assets/uploads/certificates/<?php echo $user_certificates->certificationDoc_file; ?>"><i data-feather="eye"></i></a>
									</div>


									<!-- <a id="skyBlue_hover" href="<?php echo base_url() ?>assets/uploads/certificates/<?php echo $user_certificates->certificationDoc_file; ?>" target="_blank">
							<i class="fa fa-file-pdf-o" aria-hidden="true"></i>
							&nbsp;View/Download<i data-feather="download"></i>
						</a> -->


								</div>
							</div>

						<?php
						}
						?>

						<div class="personal-information dashboard-section last-child details-section">
							<h4><i data-feather="user-plus"></i>Personal Deatils</h4>

							<?php

							$verified = ' <i class="fa fa-check" aria-hidden="true" style="color:green; font-weight:bold;" title="Verified"></i>';
							$not_verified = ' <i class="fa fa-times" aria-hidden="true" style="color:red; font-weight:bold;" title="Not Verified"></i>';
							$email = $user_details->email;
							$phone = $user_details->phone;

							?>

							<ul>
								<li><span>Full Name:</span> <?php echo $user_details->name; ?></li>
								<li><span>Email ID:</span>
									<?php

									echo $user_details->email;
									echo ($user_details->email_verified == 1) ? $verified : '<span onclick="verify_otp(\'email\', \'' . $email . '\');" style="cursor:pointer;" > ' . $not_verified . '</span>'; ?></li>
								<li><span>Contact No.:</span>
									<?php
									echo $user_details->phone;
									echo ($user_details->phone_verified == 1) ? $verified : '<span onclick="verify_otp(\'phone\', \'' . $phone . '\');" style="cursor:pointer;"> ' . $not_verified . '</span>'; ?></li>
								<li><span>Date of Birth:</span> <?php echo $user_details->user_dob; ?></li>
								<li><span>Experience Type:</span> <?php echo ($user_details->experience_user == 1) ? "Professional" : "Fresher";; ?></li>

								<li><span>Marital Status:</span> <?php

																	if ($user_details->marital_status == 0) {
																		echo 'Unmarried';
																	} elseif ($user_details->marital_status == 1) {
																		echo 'Married';
																	} else {
																		echo 'Divorced';
																	}


																	?></li>
								<li><span>Location:</span> <?php
															$y = 0;
															foreach ($locationArr as $job_location) {
																if ($y++ > 0)
																	echo ", ";

																echo $job_location->city;
															}
															?></li>
								<li><span>Sex:</span> <?php echo ($user_details->gender == m) ? "Male" : "Female";; ?></li>
								<!-- <li><span>Address:</span> 2018 Nelm Street, Beltsville, VA 20705</li> -->
							</ul>
						</div>

					</div>

					<div class="dashboard-sidebar">
						<div class="user-info">
							<div class="thumb">
								<img src="<?php echo base_url(); ?>assets/images/user-1.jpg" class="img-fluid" alt="">
							</div>
							<div class="user-body">
								<h5><?php echo $user_details->name; ?></h5>
								<span><?php echo $user_details->email; ?></span>
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
								<li><i class="fas fa-home"></i><a href="profile/userhome">Home</a></li>
								<!-- <li><i class="fas fa-user"></i><a href="dashboard-edit-profile.html">Edit Profile</a></li> -->
								<li class="active"><i class="fas fa-file-alt"></i><a href="profile/dashboard">Resume</a></li>
								<!-- <li><i class="fas fa-edit"></i><a href="edit-resume.html">Edit Resume</a></li> -->
								<li><i class="fas fa-heart"></i><a href="profile/savedjobs">Saved/Bookmarked</a></li>
								<li><i class="fas fa-check-square"></i><a href="profile/appliedjobs">Applied Job</a></li>
								<li><i class="fas fa-edit"></i><a href="profile/enablerlist">Enablers(Enabler) List</a></li>
								<!-- <li><i class="fas fa-comment"></i><a href="dashboard-message.html">Message</a></li>
                    <li><i class="fas fa-calculator"></i><a href="dashboard-pricing.html">Pricing Plans</a></li> -->
							</ul>
							<div class="row">
								<div id="userPassword_error" class="error col-sm-12"></div>
								<div id="userPassword_success" class="success col-sm-12"></div>
							</div>
							<ul class="delete">
								<li>
									<i class="fas fa-trash-alt"></i>
									<a data-toggle="modal" data-target="#myModal" onclick="load_modelForm('Change Password', '0', 'userPassword');" style="cursor:pointer;">
										Change Password
									</a>
								</li>
								<li><i class="fas fa-power-off"></i><a href="login/out">Logout</a></li>

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


<!-- ################################# MODAL SECTION ENDS ########################### -->
<!-- ################################################################################################### -->




</body>

</html>

<script>
	var base_url = "<?php echo base_url(); ?>";

	function load_qualification(degreeId, field_id) {
		$("#qualification_id_loader_" + field_id).fadeIn(800);
		$("#qualification_id_icon_" + field_id).hide();
		$("#qualification_id_" + field_id).load(base_url + "profile/load_qualification/" + degreeId);
		setTimeout(function() {
			$(".loader").hide();
			$("#qualification_id_icon_" + field_id).fadeIn(800);
		}, 1500);

	}

	function verify_otp(key, val) {
		$(".err").stop().fadeOut();
		$(".error").stop().fadeOut();
		$(".success").stop().fadeOut();


		$("#modelHeader").html("Verify " + key);
		/* $("#modelBody").html("");
		$("#modelBody").hide();
		$.ajax({
			url: base_url + "profile/load_modelForm",
			dataType: "html",
			data: {
				'id': table_id,
				'editDetails': editDetails,
				'action': action
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
		}); */

	}

	function load_modelForm(modelHeader, table_id, editDetails, action = "edit") {
		$(".err").stop().fadeOut();
		$(".error").stop().fadeOut();
		$(".success").stop().fadeOut();

		$("#modelHeader").html(modelHeader);

		var modelLoader = '<center><span>&nbsp; <i class="fa fa-spinner fa-spin" style="font-size:28px; color:green;"></i></span></center>';
		$("#modelBody").html(modelLoader);
		$.ajax({
			url: base_url + "profile/load_modelForm",
			dataType: "html",
			data: {
				'id': table_id,
				'editDetails': editDetails,
				'action': action
			},
			type: "POST",
			success: function(data) {
				$("#modelBody").hide();
				$("#modelBody").fadeIn(1000);
				$("#modelBody").html(data);
				return false;
			},
			error: function(e) {

				$("#modelBody").hide();
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
			case "userPassword":
				changePassword(editDetails);
				break;
			case "lastApply":
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
			success: function(data) {
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
			error: function(e) {
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
			success: function(data) {
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
						// return false;
				}
				$(".loader").hide();
				return false;


			},
			error: function(e) {
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