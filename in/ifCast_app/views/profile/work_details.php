<!-- Breadcrumb -->
<div class="alice-bg py-5">
	<div class="container">
	  <div class="row">
		<div class="col-md-6">
		  <div class="breadcrumb-area">
			<h1>Experience / Work details</h1>
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
                <form name="frm_workDetails" id="frm_workDetails" action="" method="POST" onSubmit="return Add_workDetails();" class="job-post-form">
					<input type="hidden" name="action" id="action" value="<?php echo $action; ?>">
					<input type="hidden" name="added_rows" id="added_rows" value="1">
					<div class="row">
						<div id="educationDetials_error" class="error col-sm-10"></div>
						<div id="educationDetials_success" class="success col-sm-10"></div>
					</div>

                  <div class="basic-info-input">
					<h4><i data-feather="plus-circle"></i>Experience / Work details</h4>
					
                   
                    <div id="job-summery" class="row">
					  <label class="col-md-3 col-form-label">Experience Information</label>

                      <div class="col-md-9">
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
								<select id="exp_year_0" name="exp_year" autofocus="autofocus" class="form-control" required>
									<option value="0"> Total years </option>
									<?php 
										for($i=1; $i<=12; $i++)
										{
									?>
									<option value="<?php echo ($i<=9) ? '0'.$i : $i; ?>"> <?php echo ($i<=9) ? '0'.$i : $i; ?> </option>
										<?php } ?>
										<option value="13">More than 12</option>
								</select>
							
							
							 <i class="fa fa-caret-down"></i>
							 <span class="err" id="err_exp_year_0"> </span>


                            </div>
                          </div>
                         
                          <div class="col-md-6">
                            <div class="form-group">
								<select id="exp_month_0" name="exp_month" autofocus="autofocus" class="form-control" required>
									<option value="0"> Total Month </option>
									<?php 
										for($i=1; $i<=11; $i++)
										{
									?>
									<option value="<?php echo ($i<=9) ? '0'.$i : $i; ?>"> <?php echo ($i<=9) ? '0'.$i : $i; ?> </option>
										<?php } ?>
									
									
								</select>
							 <i class="fa fa-caret-down"></i>
							 <span class="err" id="err_exp_month"> </span>
                            </div>
						  </div>

						  <div class="col-md-12">
							<input type="checkbox" value='1' id="currentlyWorking" name="currentlyWorking" onClick="hideShow_CurrentEmployment();">
							<strong>Last Employment /  Currently Working <span style="color:red;">* required</span></strong> 
							<span class="err" id="err_currentlyWorking"> </span>
						  </div>
                          
						</div>
					  </div>
					</div>

					<div id="currentEmployment" class="row" >
						<label class="col-md-3 col-form-label">Current / Last Information</label>
  
						<div class="col-md-9">
						  <div class="row">
							
							  <input type="hidden" id="worktype_0" name="worktype[]" value="full">
								  <div class="col-md-6">
									  <div class="form-group">
										  
											<input class="form-control" id="designation_0" placeholder="Your Designation" name="designation[]" type="text" required>
										 
											<span class="err" id="err_designation_0"> </span>
									  </div>
								  </div>
	  
	  
								  <div class="col-md-6">
									  <div class="form-group">
										  <input class="form-control" id="companyName_0" placeholder="Company Name" name="companyName[]" type="text" required>
										  <span class="err" id="err_companyName_0"> </span>
									  </div>
									</div>

									<div class="col-md-6">
										<div class="form-group">
											<input class="form-control" id="location_0" placeholder="Company Address" name="location[]" type="text" required>
											<span class="err" id="err_location_0"> </span>
										</div>
									  </div>
  

									  <div class="col-md-6">
										<div class="form-group">
											<select id="notice_0" name="Notice[]" autofocus="autofocus"
														  class="form-control" required>
														  <option value=""> Notice Period </option>
															  <?php 
																  for($i=1; $i<=5; $i++)
																  {
															  ?>
															  <option value="<?php echo ($i<=9) ? '0'.$i : $i; ?>"> <?php echo ($i<=9) ? '0'.$i : $i; ?> </option>
															  <?php } ?>

															  <option value=""> N/A</option>
													  </select>
										 <i class="fa fa-caret-down"></i>
										 <span class="err" id="err_university_0"> </span>
										</div>
									</div>

									<div class="col-md-6">
										<div class="form-group">
											<select id="lakhs_0" name="lakhs[]" autofocus="autofocus" class="form-control" required>
												<option value=""> Salary in-Lakhs </option>
												<?php 
													for($i=1; $i<=12; $i++)
													{
												?>
														<option value="<?php echo $i; ?>"> <?php echo $i; ?> </option>
												<?php } ?>
											</select>
										 <i class="fa fa-caret-down"></i>
										 <span class="err" id="err_type_0"> </span>
										</div>
									</div>


									<div class="col-md-6">
										<div class="form-group">
											<select id="thousand_0" name="thousand[]" autofocus="autofocus" class="form-control" required>
												<option value="">Thousand</option>
												<?php 
													for($i=1; $i<=12; $i++)
													{
												?>
													<option value="<?php echo $i; ?>"> <?php echo $i; ?> </option>
												<?php } ?>
											</select>
										 <i class="fa fa-caret-down"></i>
										 <span class="err" id="err_passing_year_0"> </span>
										</div>
									</div>

							  
						  </div>
						</div>
					  </div>

					  <div class="row">
						<div class="col-12">
							<p style="font-size:12px;font-style:italic;color:#cd3539">Note: Add same information as of 'Current/Last' to 'Employment Information' if you have worked in just 1 company.</p>
						</div>
					</div>
					  <div id="moreWork_details"  class="row">
						<label class="col-md-3 col-form-label">Employment Information</label>
							<?php 
							$data['row_num'] = '0';
							//$row_num = ($jobpreference) ? count($jobpreference) : '1';
							$row_num = '0';
							$this->load->view('profile/add_moreWorkDetails', $data);	 ?>
						</div>

						<div class="col-md-12" style="text-align: right;">
							<div class="btn-group" style="text-align: right;background:#10abba;color:white;height:30px;width:30px;">
								<a onClick="addRow(this.form,'1');" class="btn btn-sm btn-default">
									<i class="fa fa-plus"></i>
								</a>
							</div>
						</div> 
					  
						<div class="row">
							<div class="col-md-12">
								<input type="submit" name="register" id="register" value="Submit"
								class="button">
							</div>
						</div>

						
					  
				  </div>
				</form>
				

				
			  </div>
			  
              <div class="post-sidebar">
                <h5><i data-feather="arrow-down-circle"></i>Steps</h5>
                <ul class="sidebar-menu">
                  <li><a href="<?php echo base_url(); ?>profile/work_details">Verification</span></a></li>
                  <li><a href="<?php echo base_url(); ?>profile/work_details">Profile Type  </a></li>
				  <li class="active"><a href="<?php echo base_url(); ?>profile/work_details">Work details  </a></li>
				  <li><a href="<?php echo base_url(); ?>profile/work_details">Educational details  </a></li>
				
				  
                  <li><a href="<?php echo base_url(); ?>profile/work_details">Personal information </a></li>
                  <li><a href="<?php echo base_url(); ?>profile/work_details">Dashboard</a></li>
                
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



<!--
   ____   _       _____    __      __ ______  _____    _____  _____    ____   _   _      _____  _______         _____  _______ 
  / __ \ | |     |  __ \   \ \    / /|  ____||  __ \  / ____||_   _|  / __ \ | \ | |    / ____||__   __| /\    |  __ \|__   __|
 | |  | || |     | |  | |   \ \  / / | |__   | |__) || (___    | |   | |  | ||  \| |   | (___     | |   /  \   | |__) |  | |   
 | |  | || |     | |  | |    \ \/ /  |  __|  |  _  /  \___ \   | |   | |  | || . ` |    \___ \    | |  / /\ \  |  _  /   | |   
 | |__| || |____ | |__| |     \  /   | |____ | | \ \  ____) | _| |_  | |__| || |\  |    ____) |   | | / ____ \ | | \ \   | |   
  \____/ |______||_____/       \/    |______||_|  \_\|_____/ |_____|  \____/ |_| \_|   |_____/    |_|/_/    \_\|_|  \_\  |_|   
    
-->



</html>

<script>
	var base_url = "<?php echo base_url(); ?>";
	$(function () {

		$('#user_city').select2({
			placeholder: 'Select Services',
			allowClear: true
		});
		
		
	});


	function hideShow_CurrentEmployment() {
		$("#currentEmployment").hide();
		if($("#currentlyWorking").is(":checked"))
		{
			$("#currentEmployment").fadeIn('800');
		}
			
	}
	function addRow(frm, no) {
		addRow.rowNum = ++addRow.rowNum || no;
		key_v = addRow.rowNum - 1;

		$.post(base_url + "profile/add_moreWorkDetails", {
				rowNum: addRow.rowNum
			},
			function (data) {
				//$('#employment').show();
				$('#moreWork_details').append(data);
				$('#rowNum_' + addRow.rowNum).fadeIn(1000);
			});

		var added_rows = $("#added_rows").val();
		added_rows = parseInt(added_rows) + 1;
		$("#added_rows").val(added_rows);
	}

	function removeRow(rnum) {
		$('#rowNum_' + rnum).remove();

		var added_rows = $("#added_rows").val();
		added_rows = parseInt(added_rows) - 1;
		$("#added_rows").val(added_rows);
	}

	function Add_workDetails() {
		var frmData = new FormData($('#frm_workDetails')[0]);
		$("#submit_loader").show();
		$.ajax({
			url: base_url + "profile/work_details",
			dataType: "json",
			data: frmData,
			type: "POST",
			success: function (data) {
				if (data == 1 || data == '1') {
					$("#educationDetials_success").fadeIn(1000);
					$("#educationDetials_success").html(
						"&#9888 Your Work details adding done in database.");
					$(".loader").hide();
					window.location.href = base_url + "profile/";
					//$('#frm_workDetails')[0].reset();
				}

				return false;


			},
			error: function (e) {
				$("#educationDetials_error").fadeIn(1000);
				$("#educationDetials_error").html(
					"&#9888 Oops, Error occured while adding Education details, Please try again .");
				return false;
			},
			processData: false,
			contentType: false,
		});

		return false;
	}

</script>
