<!-- Breadcrumb -->
<div class="alice-bg py-5">
	<div class="container">
	  <div class="row">
		<div class="col-md-6">
		  <div class="breadcrumb-area">
			<h1>Personal and Preferrence details</h1>
			<nav aria-label="breadcrumb">
			  <ol class="breadcrumb">
				<li class="breadcrumb-item">Please fill out the details so that you can reach your dream job.</li>
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





<div class="alice-bg section-padding-bottom">
      <div class="container no-gliters">
        <div class="row no-gliters">
          <div class="col">
            <div class="post-container">
              <div class="post-content-wrapper">
                <form name="frm_extraDetials" id="frm_extraDetials" action="" method="POST"	onSubmit="return Add_extraDetails();" class="job-post-form">
					<input type="hidden" name="action" id="action" value="<?php echo $action; ?>">
							<input type="hidden" name="added_rows" id="added_rows" value="1">

							<div class="row">
								<div id="extraDetials_error" class="error col-sm-10"></div>
								<div id="extraDetials_success" class="success col-sm-10"></div>
							</div>

                  <div class="basic-info-input">
					<h4><i data-feather="plus-circle"></i>Personal and Preferrence details</h4>
					
                   
                    <div id="job-summery" class="row">
					  <label class="col-md-3 col-form-label">Job preference</label>
					  
                      <div class="col-md-9">
                        <div class="row">

							<div class="col-md-12">
							<div id="preffered_industry">
								<?php 
									$data['industries'] = $industries;
									$data['jobpreference'] = $jobpreference;
									$data['functionareas'] = $functionareas;
									$data['job_rol'] = $job_rol;
									$data['row_num'] = '0';
									$row_num = ($jobpreference) ? count($jobpreference) : '1';
									
									$this->load->view('profile/add_moreExtraDetails', $data);
								?>
							</div>
							</div>
						


							<div class="col-md-12" style="text-align:right;">
								<div class="btn-group" style="background:#10abba;color:white;padding:5px;height: 30px;width: 30px;">
									<a onClick="addRow(this.form,'<?php echo $row_num; ?>');" class="btn btn-sm btn-default">
										<i class="fa fa-plus"></i>
									
									</a>
								</div>
							</div>
							

							<hr size="3"> 
							<br><br>

							<div class="col-md-12">
								<div class="form-group">
									<select style="height: 100px;border:1px solid #e9e9e9;" id="preffered_location" name="preffered[]" autofocus="autofocus"
												class="form-control" multiple>
												<option value=""> Preffered Location(Upto 3) </option>
												<?php 
												$preferred_location = (!empty($user_details->preferred_location)) ? json_decode($user_details->preferred_location) : "";
													foreach($cities as $cityRow)
													{	?>
												<option value="<?php echo $cityRow->city_id; ?>"
													<?php if(in_array($cityRow->city_id, $preferred_location)) {echo "selected"; } ?>>
													<?php echo $cityRow->cityName; ?> </option>
												<?php	}
												?>
											</select>
									<i class="fa fa-caret-down"></i>
									<span class="err" id="err_preffered_1"> </span>
								</div>
							</div>


							

									
										

							
							<!-- ##############################################################################################################################-->
							<!-- ##############################################################################################################################-->
							<!-- ##############################################################################################################################-->
							<!-- ##############################################################################################################################-->
							<!-- ##############################################################################################################################-->
							<!-- ##############################################################################################################################-->
							<!-- ##############################################################################################################################-->
							<!-- ##############################################################################################################################-->
							<!-- ##############################################################################################################################-->
							<!-- ##############################################################################################################################-->
							<!-- ##############################################################################################################################-->
							<!-- ##############################################################################################################################-->
							<!-- ##############################################################################################################################-->
							<!-- ##############################################################################################################################-->
							<!-- ##############################################################################################################################-->

                         
						  

                          <!-- <div class="col-md-6">
                            <div class="form-group">
                              <input type="text" class="form-control" placeholder="Job Location">
                            </div>
                          </div> -->
						</div>
						
					  </div>
					</div>
					

                  
                  
                   
                    <div id="post-location" class="form-group row">
                      <label class="col-md-3 col-form-label">Personal Details</label>
                      <div class="col-md-9">
                        <div class="row">



							<div class="col-md-6">
								<div class="form-group">
									<select id="user_gender" name="user_gender" autofocus="autofocus"
												class="form-control" required>
												<?php 
														$gender = $user_details->gender;
													?>
												<option value=""> Gender </option>
												<option value="m" <?php echo ($gender == 'm') ? "selected":"" ?>> Male </option>
												<option value="f" <?php echo ($gender == 'f') ? "selected":"" ?>> Female
												</option>
												<option value="o" <?php echo ($gender == 'o') ? "selected":"" ?>> Other
												</option>

											</select>
									<i class="fa fa-caret-down"></i>
									<span class="err" id="err_user_gender"> </span>
								</div>
							</div>


							<div class="col-md-6">
								<div class="form-group">
									<select id="user_marital_status" name="user_marital_status" autofocus="autofocus"
												class="form-control" required>
												<?php $Marrital = $user_details->marital_status; ?>
												<option value="">Marrital Status</option>
												<option value="0" <?php echo ($Marrital == '0') ? "selected":""; ?>>Unmarried
												</option>
												<option value="1" <?php echo ($Marrital == '1') ? "selected":""; ?>>Married
												</option>
												<option value="2" <?php echo ($Marrital == '2') ? "selected":""; ?>>Divorced
												</option>
											</select>
									<i class="fa fa-caret-down"></i>
									<span class="err" id="err_user_marital_status"> </span>
								</div>
							</div>


							<div class="col-md-6">
								<div class="form-group">
									<input class="form-control" id="user_dob" placeholder="Date of Birth (dd/mm/yyyy)" name="user_dob" value="<?php echo date("d/m/Y", strtotime($user_details->user_dob));
													?>" type="text">
									
													<span class="err" id="err_user_dob"> </span>
								</div>
							</div>



							<div class="col-md-12">
								<div class="form-group">
									<textarea class="form-control" id="address" placeholder="Your Address"
												name="address" rows="2"><?php echo $user_details->address; ?></textarea>
										<span class="err" id="err_address"> </span>
								  </div>
							  </div>


							<div class="col-md-6">
								<div class="form-group">
									<select id="user_state" name="user_state" autofocus="autofocus" class="form-control"
												onchange="loadCity('user_city', this.value);" required>
												<?php 
														$selected_state = $user_details->state;
													?>
												<option value="">State</option>
												<?php 
													foreach($states as $state)
													{	?>
												<option value="<?php echo $state->state_id; ?>"
													<?php echo ($selected_state == $state->state_id) ? "selected" : ""; ?>>
													<?php echo $state->name; ?> </option>
												<?php	}
												?>

											</select>
										
										
									<i class="fa fa-caret-down"></i>
									<span class="err" id="err_user_state"> </span>
								</div>
							</div>


							<div class="col-md-6">
								<div class="form-group">
									<select id="user_city" name="user_city" autofocus="autofocus" class="form-control"
												required>

												<option value="">City</option>
												<?php 
														$city = $user_details->city;	
															foreach($tbl_cities as $cityRow)
													{	?>
												<option value="<?php echo $cityRow->city_id; ?>"
													<?php if($cityRow->city_id == $city) {echo "selected"; } ?>>
													<?php echo $cityRow->cityName; ?> </option>
												<?php	}
												?>
											</select>
										
										
									<i class="fa fa-caret-down"></i>
									<span class="err" id="err_user_city"> </span>
								</div>
							</div>


							<div class="col-md-6">
								<div class="form-group">
									<input type="text" class="form-control" id="user_zipcode" placeholder="Pin Code"
							  name="user_zipcode"
							  value="<?php echo ($user_details->zipcode) ? $user_details->zipcode : ""; ?>">
							  <span class="err" id="err_user_zipcode"> </span>
								  </div>
							  </div>




							<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
							<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
							<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
							<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
							<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
							<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
							<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
							<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
							<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
							<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
							<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->

       

                        </div>
                      </div>
                    </div>
                  
                    
                   
                    <div class="form-group row">
                      <label class="col-md-3 col-form-label"></label>
                      <div class="col-md-9">
					
						<input type="submit" name="register" id="register" value="Submit" class="button">

								<span class="loader" id="submit_loader">
									&nbsp; <i class="fa fa-spinner fa-spin" style="font-size:20px; color:green;"></i>
								</span>
								<span class="err" id="err_register"> </span>
                      </div>
					</div>
				  </div>
				</form>
			  </div>
			  
              <div class="post-sidebar">
                <h5><i data-feather="arrow-down-circle"></i>Steps</h5>
                <ul class="sidebar-menu">
                  <li><a >Verification</a></li>
                  <li><a >Profile Type</a></li>
                  <li class="active"><a >Educational details</a></li>
                  <li><a >Personal information</a></li>
                  <li><a >Dashboard</a></li>
                
                </ul>
                <div class="signin-option">
                  <p>Try our customized services. Get hired quickly</p>
                  <div class="buttons">
                    <a href="http://consultancy.ifcast.com" class="signin" data-toggle="modal" data-target="#exampleModalLong">Know more</a>
                    <!-- <a href="#" class="register" data-toggle="modal" data-target="#exampleModalLong2">Register</a> -->
                  </div>
                  <!-- Modal -->
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
			  

            </div>
          </div>
        </div>
      </div>
    </div>








<script>
	var base_url = "<?php echo base_url(); ?>";

	$(document).ready(function () {

		$('#user_dob').datepicker({
			format: "dd/mm/yyyy"
		});

		$('#preffered_location').select2({
			placeholder: 'Select at least 3 preffered locations',
			maximumSelectionLength: 3
		});

	});


	function load_functionalArea(industryId, field_id) {
		$("#functional_area_loader_" + field_id).fadeIn(800);
		$("#function_icon_" + field_id).hide();
		$("#functional_area_" + field_id).load(base_url + "profile/load_functionalArea/" + industryId);
		setTimeout(function () {
			$(".loader").hide();
			$("#function_icon_" + field_id).fadeIn(800);
		}, 1500);

	}

	function load_jobRole(functionAreaId, field_id) {
		$("#user_role_loader_" + field_id).fadeIn(800);
		$("#user_role_icon_" + field_id).hide();
		$("#user_role_" + field_id).load(base_url + "profile/load_jobRole/" + functionAreaId);
		setTimeout(function () {
			$(".loader").hide();
			$("#user_role_icon_" + field_id).fadeIn(800);
		}, 1500);

	}

	function loadCity(city_id, state_id) {
		$("user_city#" + city_id + "_loader").fadeIn(800);
		$("user_city#" + city_id + "_icon").hide();
		$("user_city#" + city_id).load(base_url + "profile/loadCities/" + state_id);
		setTimeout(function () {
			$(".loader").hide();
			$("user_city#" + city_id + "_icon").fadeIn(800);
		}, 1500);

	}

	function addRow(frm, no) {
		addRow.rowNum = ++addRow.rowNum || no;
		//key_v=addRow.rowNum-1;

		$.post(base_url + "profile/add_moreExtraDetails", {
				rowNum: addRow.rowNum
			},
			function (data) {
				$('#preffered_industry').append(data);
				$('#rowNum_' + addRow.rowNum).fadeIn(1000);
			});
	}

	function removeRow(rnum) {
		$('#rowNum_' + rnum).remove();

	}

	function Add_extraDetails() {
		$(".err").stop().fadeOut();
		$(".error").stop().fadeOut();
		$(".success").stop().fadeOut();

		var frmData = new FormData($('#frm_extraDetials')[0]);
		$("#submit_loader").show();
		$.ajax({
			url: base_url + "profile/extra_details",
			dataType: "json",
			data: frmData,
			type: "POST",
			success: function (data) {
				if (data == 1 || data == '1') {
					$("#extraDetials_success").fadeIn(1000);
					$("#extraDetials_success").html(
						"&#9888 Your Personal Details adding successfull done in a database.");
					$(".loader").hide();
					window.location.href = base_url + "profile/";
					//$('#frm_educationDetials')[0].reset();
				}

				return false;


			},
			error: function (e) {
				$(".loader").hide();
				$("#extraDetials_error").fadeIn(1000);
				$("#extraDetials_error").html(
					"&#9888 Oops, Error occured while adding Education details, Please try again .");
				return false;
			},
			processData: false,
			contentType: false,
		});

		return false;
	}
</script>