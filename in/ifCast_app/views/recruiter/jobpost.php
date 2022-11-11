<!-- Breadcrumb -->
<div class="alice-bg padding-top-70 padding-bottom-70">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="breadcrumb-area">
					<h1>Post A Job</h1>
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="recruiter/jobpost/postedjobs">Back to dashboard</a></li>
							<li class="breadcrumb-item active" aria-current="page">Post A Job</li>
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
				<div class="post-container">
					<div class="post-content-wrapper">
						<?php
						$action = ($jobpost->jobpost_id) ? $jobpost->jobpost_id : "Add";
						?>

						<form name="frm_postJobDetails" id="frm_postJobDetails" action="" method="POST" onSubmit="return post_jobDetails();" class="job-post-form">

							<div class="basic-info-input">
								<input type="hidden" name="action" id="action" value="<?php echo $action; ?>">
								<div class="row">
									<div id="extraDetials_error" class="error col-sm-10"></div>
									<div id="extraDetials_success" class="success col-sm-10"></div>
								</div>

								<h4><i data-feather="plus-circle"></i>Post A Job</h4>

								<div id="job-title" class="form-group row">
									<label class="col-md-3 col-form-label">Job Title</label>
									<div class="col-md-9">
										<!-- <input type="text" class="form-control" placeholder="Your job title here"> -->
										<input class="form-control" id="job_title" placeholder="Add a job title" name="job_title" value="<?php echo (!empty($jobpost->job_title)) ? $jobpost->job_title : ""; ?>" type="text">

										<span class="err" id="err_job_title"> </span>
									</div>
								</div>

								<div id="job-description" class="row">
									<!-- <label class="col-md-3 col-form-label">Job Description</label>
					<div class="col-md-9">


						<textarea class="tinymce-editor tinymce-editor-1" id="job_description"	placeholder="Add a detailed job description" name="job_description"
						rows="2"><?php echo (!empty($jobpost->job_description)) ? $jobpost->job_description : "Not Mentioned"; ?></textarea>
				
						<span class="err" id="err_job_description"> </span>

                    </div> -->
									<label class="col-md-3 col-form-label">Job Description</label>
									<div class="col-md-9">
										<div class="form-group">
											<textarea class="form-control" id="job_description" placeholder="Add a detailed job description" name="job_description" rows="2"><?php echo (!empty($jobpost->job_description)) ? $jobpost->job_description : ""; ?></textarea>

											<span class="err" id="err_job_description"> </span>


										</div>
									</div>

								</div>



								<div id="job-description" class="row">

									<label class="col-md-3 col-form-label">Responsibilities</label>
									<div class="col-md-9">
										<div class="form-group">
											<textarea class="form-control" id="job_responsibility" placeholder="Add a detailed Responsibilities" name="job_responsibility" rows="2"><?php echo (!empty($jobpost->job_responsibility)) ? $jobpost->job_responsibility : ""; ?></textarea>

											<span class="err" id="err_job_responsibility"> </span>


										</div>
									</div>

								</div>


								<div id="job-description" class="row">

									<label class="col-md-3 col-form-label">Education</label>
									<div class="col-md-9">
										<div class="form-group">
											<textarea class="form-control" id="job_education" placeholder="Add a detailed Education/Certification" name="job_education" rows="2"><?php echo (!empty($jobpost->job_education)) ? $jobpost->job_education : ""; ?></textarea>

											<span class="err" id="err_job_education"> </span>


										</div>
									</div>

								</div>


								<div id="job-description" class="row">

									<label class="col-md-3 col-form-label">Keywords</label>
									<div class="col-md-9">
										<div class="form-group">

											<textarea class="form-control" id="keywords" placeholder="Add a detailed job description" name="keywords" rows="2"><?php echo (!empty($jobpost->keywords)) ? $jobpost->keywords : "Not Mentioned"; ?></textarea>

											<span class="err" id="err_keywords"> </span>


										</div>


									</div>

								</div>





								<!-- <div id="others" class="row">
					<label class="col-md-3 col-form-label">Keywords</label>
					<div class="col-md-9">
						<textarea class="tinymce-editor tinymce-editor-2" id="keywords"
						placeholder="Add a detailed job description" name="keywords"
						rows="2"><?php echo (!empty($jobpost->keywords)) ? $jobpost->keywords : "Not Mentioned"; ?></textarea>				
				
						<span class="err" id="err_keywords"> </span>
					</div>
				  </div> -->



								<div id="job-summery" class="row">
									<label class="col-md-3 col-form-label">Job Summary</label>
									<div class="col-md-9">
										<div class="row">


											<div class="col-md-6">
												<div class="form-group">

													<select id="min_experience" name="min_experience" autofocus="autofocus" class="form-control" required>

														<option value="">Select min. experience</option>
														<option value="00"> Fresher </option>
														<?php
														for ($i = 1; $i <= 12; $i++) {
															$selected = "";
															if ($jobpost->min_experience == $i)
																$selected = "selected";
														?>
															<option value="<?php echo ($i <= 9) ? '0' . $i : $i; ?>" <?php echo $selected; ?>>
																<?php echo ($i <= 9) ? '0' . $i : $i; ?>
															</option>
														<?php } ?>
														<option value="13">More than 12</option>

													</select>
													<i class="fa fa-caret-down"></i>
													<span class="err" id="err_min_experience"> </span>

												</div>
											</div>


											<div class="col-md-6">
												<div class="form-group">

													<select id="max_experience" name="max_experience" autofocus="autofocus" class="form-control" required>

														<option value="">Select max. experience</option>
														<option value="00"> Total years </option>
														<?php
														for ($i = 1; $i <= 12; $i++) {
															$selected = "";
															if ($jobpost->min_experience == $i)
																$selected = "selected";
														?>
															<option value="<?php echo ($i <= 9) ? '0' . $i : $i; ?>" <?php echo $selected; ?>> <?php echo ($i <= 9) ? '0' . $i : $i; ?> </option>
														<?php } ?>
														<option value="13">More than 12</option>

													</select>
													<i class="fa fa-caret-down"></i>

													<span class="err" id="err_max_experience"> </span>

												</div>
											</div>


											<div class="col-md-6">
												<div class="form-group">
													<input class="form-control" id="min_ctc" placeholder="Minimun CTC in Lacs" name="min_ctc" value="<?php echo (!empty($jobpost->min_ctc)) ? $jobpost->min_ctc : ""; ?>" type="text">


													<span class="err" id="err_min_ctc"> </span>
												</div>
											</div>


											<div class="col-md-6">
												<div class="form-group">
													<input class="form-control" id="max_ctc" placeholder="Maximum CTC in Lacs" name="max_ctc" value="<?php echo (!empty($jobpost->max_ctc)) ? $jobpost->max_ctc : ""; ?>" type="text">


													<span class="err" id="err_max_ctc"> </span>
												</div>
											</div>


											<div class="col-md-12">
												<div class="form-check form-check-inline">
													<?php
													$checked = (!empty($jobpost->is_discloseSalary) && $jobpost->is_discloseSalary) ? "checked" : "";
													?>
													<input class="form-check-input" type="checkbox" name="is_discloseSalary" id="is_discloseSalary" value="1" <?php echo $checked; ?>>
													<label class="form-check-label" for="is_discloseSalary">Do not disclose salary</label>
												</div>
											</div>





											<div class="col-md-6">
												<div class="form-group">
													<input type="text" class="form-control" id="no_ofVacancies" placeholder="Number of vacancies" name="no_ofVacancies" value="<?php echo ($jobpost->no_ofVacancies) ? $jobpost->no_ofVacancies : ""; ?>">

													<span class="err" id="err_no_ofVacancies"> </span>
												</div>
											</div>


											<div class="col-md-6">
												<div class="form-group">


													<select id="industry_id" name="industry_id" autofocus="autofocus" class="form-control" required>

														<option value="">Select industry</option>
														<?php
														foreach ($industries as $industry) {
															$selected = "";
															if ($jobpost->industry_id == $industry->industry_id)
																$selected = "selected";
														?>
															<option value="<?php echo $industry->industry_id; ?>" <?php echo $selected;  ?>>
																<?php echo $industry->industry_name; ?> </option>
														<?php	}
														?>
													</select>
													<i class="fa fa-caret-down"></i>

													<span class="err" id="err_industry_id"> </span>
												</div>
											</div>



											<div class="col-md-6">
												<div class="form-group">

													<select id="functionAreaId" name="functionAreaId" autofocus="autofocus" class="form-control" onchange="get_relatedDetails(this.value, 'role_id');" required>

														<option value="">Select FunctionalArea</option>
							<?php
							foreach ($functionareas as $row) {
								$selected = "";
								if ($jobpost->functionAreaId == $row->functionAreaId)
									$selected = "selected";
							?>
							<option value="<?php echo $row->functionAreaId; ?>" <?php echo $selected;  ?>>
								<?php echo $row->functionArea; ?> </option>
							<?php	}
							?>



														<option value="Software"> Extra Info - N/A </option>
													</select>
													<i class="fa fa-caret-down"></i>

													<span class="err" id="err_functionAreaId"> </span>




												</div>
											</div>



											<div class="col-md-6">
												<div class="form-group">

													<select id="role_id" name="role_id" autofocus="autofocus" class="form-control">

														<option value="">Select Job role</option>
														<?php
														foreach ($job_rol as $row) {
															$selected = "";
															if ($jobpost->role_id == $row->role_id)
																$selected = "selected";
														?>
															<option value="<?php echo $row->role_id; ?>" <?php echo $selected;  ?>>
																<?php echo $row->role_name; ?> </option>
														<?php	}
														?>
													</select>
													<i class="fa fa-caret-down"></i>

													<span class="err" id="err_role_id"> </span>

												</div>
											</div>



											<div class="col-md-6">
												<div class="form-group">
													<select id="job_type" name="job_type" autofocus="autofocus" class="form-control">
														<option value=""> Type-Full/Part </option>
														<?php
														$rols = array("full" => "Full Time", "part" => "Part Time");
														foreach ($rols as $key => $val) {

															$selected = "";
															if ($jobpost->job_type == $key)
																$selected = "selected";
														?>
															<option value="<?php echo $key; ?>" <?php echo $selected; ?>> <?php echo $val; ?> </option>
														<?php	}
														?>
													</select>
													<i class="fa fa-caret-down"></i>

													<span class="err" id="err_job_type"> </span>

												</div>
											</div>


										</div>
									</div>
								</div>



								<!-- <div id="response" class="row">
					<label class="col-md-3 col-form-label">Responsibilities</label>
					<div class="col-md-9">
					  <textarea id="mytextarea2" class="tinymce-editor tinymce-editor-2" placeholder="Responsibilities (Optional)"></textarea>
					</div>
				  </div>
				  <div id="education" class="row">
					<label class="col-md-3 col-form-label">Education</label>
					<div class="col-md-9">
					  <textarea id="mytextarea3" class="tinymce-editor tinymce-editor-2" placeholder="Education (Optional)"></textarea>
					</div>
				  </div> -->






								<div id="post-location" class="form-group row">
									<label class="col-md-3 col-form-label">Job Location</label>
									<div class="col-md-9">
										<div class="row">
											<div class="col-md-12">
												<div class="form-group">

													<select style="height: 100px;border: 1px solid #e9e9e9;" id="company_location" name="companyLocation[]" autofocus="autofocus" class="form-control" multiple>
														<option value=""> Select Branch locations </option>
														<?php
														$preferred_location = array();
														if (!empty($jobpost->location_1)) {
															$preferred_location[] = $jobpost->location_1;
														}
														if (!empty($jobpost->location_2)) {
															$preferred_location[] = $jobpost->location_2;
														}
														if (!empty($jobpost->location_3)) {
															$preferred_location[] = $jobpost->location_3;
														}

														foreach ($cities as $cityRow) {	?>
															<option value="<?php echo $cityRow->city_id; ?>" <?php if (in_array($cityRow->city_id, $preferred_location)) {
																													echo "selected";
																												} ?>>
																<?php echo $cityRow->cityName; ?> </option>
														<?php	}
														?>
													</select>

													<i class="fa fa-caret-down"></i>


													<span class="err" id="err_company_location"> </span>





												</div>

											</div>

										</div>
									</div>
								</div>




								<div id="about-company" class="row">
									<label class="col-md-3 col-form-label">About Company</label>
									<div class="col-md-9">
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">


													<?php
													$company_name = (!empty($jobpost->company_name)) ? $jobpost->company_name : $companydetails->company_name;
													?>

													<input class="form-control" id="company_name" placeholder="Company Name" name="company_name" value="<?php echo $company_name; ?>" type="text">
													<span class="err" id="err_company_name"> </span>

												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
												    <?php
													$contact_person = (!empty($jobpost->contact_person)) ? $jobpost->contact_person : $contact_person->contact_person;
													?>

													<input class="form-control" id="contact_person" placeholder="HR / Contact person detail" name="contact_person" value="<?=$contact_person ?>" type="text">
													<span class="err" id="err_contact_person"> </span>
												</div>
											</div>

											<div class="col-md-6">
												<div class="form-group">


													<?php
													$web_url = (!empty($jobpost->web_url)) ? $jobpost->web_url : $companydetails->web_url;
													?>
													<input type="url" class="form-control" id="web_url" placeholder="ex. http://companyweb.com" name="web_url" value="<?php echo $web_url; ?>">

													<span class="err" id="err_web_url"> </span>

												</div>
											</div>



											<div class="col-md-12">
												<div class="form-group">
													<!-- <textarea class="form-control" placeholder="Company Profile"></textarea> -->

													<textarea class="form-control" id="about_company" placeholder="Add company details" name="about_company" rows="2"><?php echo (!empty($jobpost->about_company)) ? $jobpost->about_company : ""; ?></textarea>

													<span class="err" id="err_about_company"> </span>


												</div>
											</div>

											<!-- <div class="form-group file-input-wrap">
							<label for="company_logo">
							
							  <input type="file" id="company_logo" name="company_logo" value="">
							  <i data-feather="upload-cloud"></i>
							  <span>Upload a company logo <span>(pdf,zip,doc,docx)</span></span>
							</label>
							<span class="err" id="err_company_logo"> </span>
						  </div> -->


										</div>
									</div>
								</div>



								<div class="form-group row">
									<label class="col-md-3 col-form-label"></label>
									<div class="col-md-9">
										<!-- <button class="button">Post Your Job</button> -->
										<input type="submit" name="register" id="register" value="Post Your Job" class="button">

										<span class="loader" id="submit_loader">
											&nbsp; <i class="fa fa-spinner fa-spin" style="font-size:20px; color:green;"></i>
										</span>

										<span class="err" id="err_register"> </span>
									</div>
								</div>




							</div>
						</form>
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
								<li><i class="fas fa-user"></i><a href="recruiter/profile/company_details">Edit Profile</a></li>
								<li class="active"><i class="fas fa-plus-square"></i><a href="recruiter/jobpost/">Post New Job</a></li>
								<li><i class="fas fa-briefcase"></i><a href="recruiter/jobpost/postedjobs">Manage Jobs</a></li>
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

					<!--										
			<div class="post-sidebar">
			  <h5><i data-feather="arrow-down-circle"></i>Navigation</h5>
			  <ul class="sidebar-menu">
				<li><a href="#job-title">Job Title</a></li>
				<li><a href="#job-summery">Job Summary</a></li>
				<li><a href="#job-description">Job Descruption</a></li>
				<li><a href="#response">Responsibilities</a></li>
				<li><a href="#education">Education</a></li>
				<li><a href="#others">Your Location</a></li>
				<li><a href="#post-location">About Company</a></li>
				<li><a href="#package">Select Package</a></li>
			  </ul>
			  <div class="signin-option">
				<p>Looking for quick hires? Try our customized services.</p>
				<div class="buttons">
				  <a href="http://consultancy.ifcast.com/pages/enabler" class="signin" >Know More</a>
				
				</div>
			
				<div class="account-entry">
				  <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-hidden="true">
					<div class="modal-dialog" role="document">
					  <div class="modal-content">
						<div class="modal-header">
						  <h5 class="modal-title"><i data-feather="user"></i>Login</h5>
						  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						  </button>
						</div>
						<div class="modal-body">
						  <form action="#">
							<div class="form-group">
							  <input type="email" placeholder="Email Address" class="form-control">
							</div>
							<div class="form-group">
							  <input type="password" placeholder="Password" class="form-control">
							</div>
							<div class="more-option">
							  <div class="form-check">
								<input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
								<label class="form-check-label" for="defaultCheck1">
								  Remember Me
								</label>
							  </div>
							  <a href="#">Forget Password?</a>
							</div>
							<button class="button primary-bg btn-block">Login</button>
						  </form>
						  <div class="shortcut-login">
							<span>Or connect with</span>
							<div class="buttons">
							  <a href="#" class="facebook"><i class="fab fa-facebook-f"></i>Facebook</a>
							  <a href="#" class="google"><i class="fab fa-google"></i>Google</a>
							</div>
							<p>Don't have an account? <a href="#">Register</a></p>
						  </div>
						</div>
					  </div>
					</div>
				  </div>
				  <div class="modal fade" id="exampleModalLong2" tabindex="-1" role="dialog" aria-hidden="true">
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
							<a href="#" class="candidate-acc active"><i data-feather="user"></i>Candidate</a>
							<a href="#" class="employer-acc"><i data-feather="briefcase"></i>Employer</a>
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
								<input class="form-check-input" type="checkbox" value="" id="defaultCheck2">
								<label class="form-check-label" for="defaultCheck2">
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
			  </div>
			</div>
									-->

				</div>
			</div>
		</div>
	</div>
</div>




<script>
	var base_url = "<?php echo base_url(); ?>";

	$(document).ready(function() {

		$('#user_dob').datepicker({
			format: "dd/mm/yyyy"
		});

		$('#company_location').select2({
			placeholder: 'Select at least 3 Company locations',
			maximumSelectionLength: 3
		});


		$("#company_logo").change(function() {

			var ext = $('#company_logo').val().split('.').pop().toLowerCase();

			if ($.inArray(ext, ['jpg', 'png', 'jpeg', 'gif']) == -1) {

				$('#err_company_logo').html(
					"&#9888 Company Logo must be 'jpg','png','jpeg','gif' file formats");
				$("#err_company_logo").fadeIn(1000);

				$('#company_logo').val('')

			}
		});

		$('#role_id').select2({
			placeholder: 'Select Job Role'
		});
		$('#functionAreaId').select2({
			placeholder: 'Select Functional Area'
		});
		$('#industry_id').select2({
			placeholder: 'Select Industry'
		});

	});


	function get_relatedDetails(id, field_id) {
		$("#loader_" + field_id).fadeIn(800);
		$("#icon_" + field_id).hide();

		switch (field_id) {
			case "functionAreaId":
				var url = base_url + "recruiter/profile/load_functionalArea/" + id;
				break;
			case "role_id":
				var url = base_url + "recruiter/profile/load_jobRole/" + id;
				break;
		}

		$("#" + field_id).load(url);
		setTimeout(function() {
			$(".loader").hide();
			$("#icon_" + field_id).fadeIn(800);
		}, 1500);

	}


	function loadCity(city_id, state_id) {
		$("#" + city_id + "_loader").fadeIn(800);
		$("#" + city_id + "_icon").hide();
		$("#" + city_id).load(base_url + "recruiter/profile/loadCities/" + state_id);
		setTimeout(function() {
			$(".loader").hide();
			$("#" + city_id + "_icon").fadeIn(800);
		}, 1500);

	}

	function post_jobDetails() {
		$(".err").stop().fadeOut();
		$(".error").stop().fadeOut();
		$(".success").stop().fadeOut();

		var job_title = $("#job_title").val();
		if (job_title.length == 0) {
			$("#err_job_title").fadeIn(1000);
			$("#err_job_title").html("&#9888 Oops, Please enter job title.");
			return false;
		}

		var min_experience = $("#min_experience").val();
		if (min_experience.length == 0) {
			$("#err_min_experience").fadeIn(1000);
			$("#err_min_experience").html("&#9888 Oops, Please enter minimum experience.");
			return false;
		}

		var no_ofVacancies = $("#no_ofVacancies").val();
		if (no_ofVacancies.length == 0) {
			$("#err_no_ofVacancies").fadeIn(1000);
			$("#err_no_ofVacancies").html("&#9888 Oops, Please enter number of Vacancies.");
			return false;
		}

		var industry_id = $("#industry_id").val();
		if (industry_id.length == 0) {
			$("#err_industry_id").fadeIn(1000);
			$("#err_industry_id").html("&#9888 Oops, Please select industry.");
			return false;
		}

		var company_name = $("#company_name").val();
		if (company_name.length == 0) {
			$("#err_company_name").fadeIn(1000);
			$("#err_company_name").html("&#9888 Oops, Please enter company name.");
			return false;
		}

		var job_type = $("#job_type").val();
		if (job_type.length == 0) {
			$("#err_job_type").fadeIn(1000);
			$("#err_job_type").html("&#9888 Oops, Job type is required.");
			return false;
		}

		var contact_person = $("#contact_person").val();
		if (contact_person.length == 0) {
			$("#err_contact_person").fadeIn(1000);
			$("#err_contact_person").html("&#9888 Oops, Please contact person.");
			return false;
		}

		//alert("Oops, Work is gaoin on");
		//return false;
		var frmData = new FormData($('#frm_postJobDetails')[0]);
		$("#submit_loader").show();
		$.ajax({
			url: base_url + "recruiter/jobpost",
			dataType: "json",
			data: frmData,
			type: "POST",
			success: function(data) {
				if (data == 1 || data == '1') {
					$("#extraDetials_success").fadeIn(1000);
					$("#extraDetials_success").html(
						"&#9888 You have successfully posted job!");
					$(".loader").hide();
					window.location.href = base_url + "recruiter/jobpost/postedjobs";
					//$('#frm_educationDetials')[0].reset();
				}

				return false;


			},
			error: function(e) {
				$(".loader").hide();
				$("#extraDetials_error").fadeIn(1000);
				$("#extraDetials_error").html(
					"&#9888 Oops, Error occured while posting a job details details, Please try again .");
				return false;
			},
			processData: false,
			contentType: false,
		});

		return false;
	}
</script>