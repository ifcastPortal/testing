<!-- Breadcrumb -->
<div class="alice-bg padding-top-70 padding-bottom-70">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="breadcrumb-area">
              <h1>Employer Dashboard</h1>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Employer Dashboard</li>
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

    <div class="alice-bg section-padding-bottom">
      <div class="container no-gliters">
        <div class="row no-gliters">
          <div class="col">
            <div class="dashboard-container">
              <div class="dashboard-content-wrapper">
                <form name="frm_companyDetails" id="frm_companyDetails" action="" method="POST" onSubmit="return Add_companyDetails();" class="dashboard-form">


				<?php 
							$action = ($user_details->comp_id) ? "Edit" : "Add"; 
						?>
						<input type="hidden" name="action" id="action" value="<?php echo $action; ?>">
						<input type="hidden" name="company_id" id="company_id" value="<?php echo ($user_details->comp_id) ? $user_details->comp_id : ""; ?>">
						<input type="hidden" name="added_rows" id="added_rows" value="1">
						<div class="row">
							<div id="extraDetials_error" class="error col-sm-10"></div>
							<div id="extraDetials_success" class="success col-sm-10"></div>
						</div>



                  <div class="dashboard-section upload-profile-photo">






                    <div class="update-photo">
                      <img class="image" src="<?php echo base_url(); ?>assets/images/company-logo.png" alt="">
                    </div>
                    <div class="file-upload">            
					  <input type="file" class="file-input" id="company_logo" name="company_logo" value="">Change Avatar
					  <span class="err" id="err_company_logo"> </span>
                    </div>
				  </div>
				  
				


                  <div class="dashboard-section basic-info-input">
					<h4><i data-feather="user-check"></i>Basic Info</h4>



					
                    <div class="form-group row">
					  <label class="col-sm-3 col-form-label">Enabler's Name</label>
					  

                      <div class="col-sm-9">
						<input class="form-control" id="company_name" placeholder="Company Name" name="company_name" value="<?php echo ($user_details->company_name) ? $user_details->company_name : ""; ?>" type="text">
								
						<span class="err" id="err_company_name"> </span>

					  </div>
					  

					</div>


					<div class="form-group row">
						<label class="col-sm-3 col-form-label">Enabler's Email</label>
						
  
						<div class="col-sm-9">
						  <input class="form-control" id="company_name" placeholder="Company Name" name="company_name" value="<?php echo ($user_details->company_name) ? $user_details->company_name : ""; ?>" type="text">
								  
						  <span class="err" id="err_company_name"> </span>
  
						</div>
						
  
					  </div>


					  <div class="form-group row">
						<label class="col-sm-3 col-form-label">Enabler Designation</label>
						
  
						<div class="col-sm-9">
							<select id="industry_id" name="industry_id" autofocus="autofocus" class="form-control" >

								<option value="">Select industry</option>
							<?php 
									foreach($industries as $industry)
									{	?>
										<option value="<?php echo $industry->industry_id; ?>" <?php if($industry->industry_id == $user_details->industry_id) {echo "selected"; } ?>> <?php echo $industry->industry_name; ?> </option>
							<?php	}
								?>
							</select>
								  
							<span class="err" id="err_industry_id"> </span>
  
						</div>
						
  
					  </div>


					  <div class="form-group row">
						<label class="col-sm-3 col-form-label">Industry</label>
						
  
						<div class="col-sm-9">
							<select id="industry_id" name="industry_id" autofocus="autofocus" class="form-control" >

								<option value="">Select industry</option>
							<?php 
									foreach($industries as $industry)
									{	?>
										<option value="<?php echo $industry->industry_id; ?>" <?php if($industry->industry_id == $user_details->industry_id) {echo "selected"; } ?>> <?php echo $industry->industry_name; ?> </option>
							<?php	}
								?>
							</select>
								  
							<span class="err" id="err_industry_id"> </span>
  
						</div>
						
  
					  </div>




					  <div class="form-group row">
						<label class="col-sm-3 col-form-label">Company Name</label>
						
  
						<div class="col-sm-9">
						  <input class="form-control" id="company_name" placeholder="Company Name" name="company_name" value="<?php echo ($user_details->company_name) ? $user_details->company_name : ""; ?>" type="text">
								  
						  <span class="err" id="err_company_name"> </span>
  
						</div>
						
  
					  </div>
  
  
					  <div class="form-group row">
						  <label class="col-sm-3 col-form-label">Company Name</label>
						  
	
						  <div class="col-sm-9">
							<input class="form-control" id="company_name" placeholder="Company Name" name="company_name" value="<?php echo ($user_details->company_name) ? $user_details->company_name : ""; ?>" type="text">
									
							<span class="err" id="err_company_name"> </span>
	
						  </div>
						  
	
						</div>


						<div class="form-group row">
							<label class="col-sm-3 col-form-label">About Us</label>
							<div class="col-sm-9">
							
							  <textarea class="form-control" id="about_company" placeholder="About Company Short Description" name="about_company" rows="2"><?php echo $user_details->about_company; ?></textarea>
							  <span class="err" id="err_about_company"> </span>
							</div>
						  </div>




<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$-->
<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$-->
<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$-->
<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$-->
<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$-->
<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$-->
<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$-->
<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$-->




					  <div class="form-group row">
						<label class="col-sm-3 col-form-label">Company Name</label>
						
  
						<div class="col-sm-9">
						  <input class="form-control" id="company_name" placeholder="Company Name" name="company_name" value="<?php echo ($user_details->company_name) ? $user_details->company_name : ""; ?>" type="text">
								  
						  <span class="err" id="err_company_name"> </span>
  
						</div>
						
  
					  </div>





					<div class="form-group row">
						<label class="col-sm-3 col-form-label">Industry</label>
						
  
						<div class="col-sm-9">
							<select id="industry_id" name="industry_id" autofocus="autofocus" class="form-control" >

								<option value="">Select industry</option>
							<?php 
									foreach($industries as $industry)
									{	?>
										<option value="<?php echo $industry->industry_id; ?>" <?php if($industry->industry_id == $user_details->industry_id) {echo "selected"; } ?>> <?php echo $industry->industry_name; ?> </option>
							<?php	}
								?>
							</select>
								  
							<span class="err" id="err_industry_id"> </span>
  
						</div>
						
  
					  </div>



					  <div class="form-group row">
						<label class="col-sm-3 col-form-label">Company Type</label>
						
  
						<div class="col-sm-9">
							<select id="company_type" name="company_type" autofocus="autofocus" class="form-control" >

								<option value="">Company Type</option>
							<?php 
								$types = array('consultancy'=>'Consultancy', 'company'=>'Company', 'multi branche'=>'Multi Branche', 'mnc'=>'MNC', 'start up'=>'Start Up');
								
								foreach($types as $key=>$row)
								{	?>
									<option value="<?php echo $key; ?>" <?php if($key == $user_details->company_type) {echo "selected"; } ?>> <?php echo $row; ?> </option>
						<?php	}
							?>
							</select>
						
						<span class="err" id="err_company_type"> </span>
  
						</div>
						
  
					  </div>


					  <div class="form-group row">
						<label class="col-sm-3 col-form-label">Address</label>
						<div class="col-sm-9">
					
						  	<textarea class="form-control" id="address" placeholder="Your Address" name="address" rows="2"><?php echo $user_details->address; ?></textarea>
							<span class="err" id="err_address"> </span>
						</div>
					  </div>



					  <div class="form-group row">
						<label class="col-sm-3 col-form-label">State</label>
						
  
						<div class="col-sm-9">
							<select id="state_id" name="state_id" autofocus="autofocus" class="form-control" onchange="loadCity('city_id', this.value);">

								<option value="">State</option>
							<?php 
								$state = "";	
									foreach($states as $stateRow)
									{	?>
										<option value="<?php echo $stateRow->state_id; ?>" <?php if($stateRow->state_id == $user_details->state_id) {echo "selected"; } ?>> <?php echo $stateRow->name; ?> </option>
							<?php	}
								?>
							</select>
						
							<span class="err" id="err_state_id"> </span>
  
						</div>
						
  
					  </div>





					  <div class="form-group row">
						<label class="col-sm-3 col-form-label">City</label>
						
  
						<div class="col-sm-9">
							<select id="city_id" name="city_id" autofocus="autofocus" class="form-control" >

								<option value="">City</option>
							<?php 
								$city = "";	
									foreach($cities as $cityRow)
									{	?>
										<option value="<?php echo $cityRow->city_id; ?>" <?php if($cityRow->city_id ==  $user_details->city_id) {echo "selected"; } ?>> <?php echo $cityRow->cityName; ?> </option>
							<?php	}
								?>
							</select>
						
						<span class="err" id="err_city_id"> </span>
  
						</div>
						
  
					  </div>



					  
			
					<div class="form-group row">
						<label class="col-sm-3 col-form-label">Zipcode</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" id="user_zipcode" placeholder="Pin Code" name="user_zipcode" value="<?php echo ($user_details->user_zipcode) ? $user_details->user_zipcode : ""; ?>">
							<span class="err" id="err_user_zipcode"> </span>
						</div>
					  </div>

					  


					  <div class="form-group row">
						<label class="col-sm-3 col-form-label">Branch Locations</label>
						
  
						<div class="col-sm-9">
							<select style="height: 100px;border:1px solid #e9e9e9;" id="company_location" name="companyLocation[]" autofocus="autofocus" class="form-control" multiple>
								<option value=""> Company Location </option>
								<?php 
								$preferred_location = (!empty($user_details->company_location)) ? json_decode($user_details->company_location) : array();
									foreach($cities as $cityRow)
									{	
										$selected = "";
										if(in_array($cityRow->city_id, $preferred_location))
										{
											$selected = "selected";
										}
									?>
										<option value="<?php echo $cityRow->city_id; ?>" <?php echo $selected;  ?>> <?php echo $cityRow->cityName; ?> </option>
							<?php	}
								?>
							</select>
							
						
						<span class="err" id="err_company_location"> </span>
  
						</div>
						
  
					  </div>




					<div class="form-group row">
						<label class="col-sm-3 col-form-label">Company Size</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" id="company_size" placeholder="No. of Employee" name="company_size" value="<?php echo ($user_details->company_size) ? $user_details->company_size : ""; ?>">
					
						<span class="err" id="err_company_size"> </span>
						</div>
					  </div>


					  <div class="form-group row">
						<?php
						$if_gst = ($user_details->is_gst == '1') ? "checked" : "";
						$not_gst = ($user_details->is_gst != '1') ? "checked" : "";
					?>
					  <label class="col-sm-4"><input type="radio" name="is_gst" id="is_gst" value="1" <?php echo $if_gst;?>> :if GST</label>
					&nbsp;
					  <label class="col-sm-6"><input type="radio" name="is_gst" id="is_gst" value="0" <?php echo $if_gst;?>> :Not GST</label>
							
					  <span class="err" id="err_is_gst"> </span>	
					  </div>


					  <div class="form-group row">
						<label class="col-sm-3 col-form-label">Website</label>
						<div class="col-sm-9">
							<input type="url" class="form-control" id="web_url" placeholder="ex. http://companyweb.com" name="web_url" value="<?php echo ($user_details->web_url) ? $user_details->web_url : ""; ?>">
					
							<span class="err" id="err_web_url"> </span>
						</div>
					  </div>

					  <div class="form-group row">
						<label class="col-sm-3 col-form-label">About Us</label>
						<div class="col-sm-9">
						
						  <textarea class="form-control" id="about_company" placeholder="About Company Short Description" name="about_company" rows="2"><?php echo $user_details->about_company; ?></textarea>
						  <span class="err" id="err_about_company"> </span>
						</div>
					  </div>


					  <div class="form-group row">
						<label class="col-sm-3 col-form-label"></label>
						<div class="col-sm-9">
					

						  
							<input type="submit" name="register" id="register" value="Submit"
								class="button">
					
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
                  <li class="active"><i class="fas fa-user"></i><a href="recruiter/profile/company_details">Edit Profile</a></li>
                  <li><i class="fas fa-plus-square"></i><a href="recruiter/jobpost/">Post New Job</a></li>
                  <li><i class="fas fa-briefcase"></i><a href="recruiter/jobpost/postedjobs">Manage Jobs</a></li>
                  <li><i class="fas fa-heart"></i><a href="#">Shortlisted Resumes</a></li>
                  <li><i class="fas fa-users"></i><a href="recruiter/profile/dreamer_listing">Manage Candidates</a></li>
                  <li><i class="fas fa-comment"></i><a href="employer-dashboard-message.html">Message</a></li>
                  <li><i class="fas fa-calculator"></i><a href="employer-dashboard-pricing.html">Pricing Plans</a></li>
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



<body>
	<?php // $this->load->view('layouts/regisheader', $data);	 ?>
	<div class="vector-bg">
		<section class="container" style="position: relative;overflow:hidden">
			<div class="row">
				<div class="offset-md-2 col-md-8 col-sm-12 col-12">
					<div class="ifcast-style-card-1 mb-5">
						<h5>Recruiter details</h5>
						<hr>
					<form name="frm_companyDetails" id="frm_companyDetails" action="" method="POST" onSubmit="return Add_companyDetails();">
						<?php 
							$action = ($user_details->comp_id) ? "Edit" : "Add"; 
						?>
						<input type="hidden" name="action" id="action" value="<?php echo $action; ?>">
						<input type="hidden" name="company_id" id="company_id" value="<?php echo ($user_details->comp_id) ? $user_details->comp_id : ""; ?>">
						<input type="hidden" name="added_rows" id="added_rows" value="1">
						<div class="row">
							<div id="extraDetials_error" class="error col-sm-10"></div>
							<div id="extraDetials_success" class="success col-sm-10"></div>
						</div>

					
						<div class="row">
							<div class="form-group col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                    <label class="control-label" for="Username">Enabler Name:</label>
							
									<div class="input-group">
										<div class="input-group-prepend">
											<span class="input-group-text">
												<i class="fa fa-user" aria-hidden="true"></i>
											</span>	
										</div>
										<input class="form-control" id="companyowner_name" placeholder="Recruiters Name" name="companyowner_name" value="<?php echo ($user_details->companyowner_name) ? $user_details->companyowner_name : ""; ?>" type="text">
									</div>
									<span class="err" id="err_companyowner_name"> </span>
								
                            </div>
                            

                            <div class="form-group col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                    <label class="control-label" for="Username">Enabler Email:</label>
                                    <div class="input-group">
        
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <i class="fa fa-user" aria-hidden="true"></i>
                                            </div>
                                        </div>
        
                                        <input type="email" class="form-control" id="username" placeholder="Enter your email id"
                                            name="username">
                                    </div>
                                    <span class="err" id="err_username"> </span>
        
                                </div>
							
							<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                    <label class="control-label" for="Username">Enabler designation:</label>
									<div class="input-group">
										<div class="input-group-prepend">
											<span class="input-group-text">
												<i class="fa fa-user" aria-hidden="true" id="industry_icon"></i>
											</span>
										</div>
										<select id="industry_id" name="industry_id" autofocus="autofocus" class="form-control" >

											<option value="">Designation </option>
										<?php 
												foreach($industries as $industry)
												{	?>
													<option value="<?php echo $industry->industry_id; ?>" <?php if($industry->industry_id == $user_details->industry_id) {echo "selected"; } ?>> <?php echo $industry->industry_name; ?> </option>
										<?php	}
											?>
										</select>
									</div>
									<span class="err" id="err_industry_id"> </span>
								
                            </div>
                            

                            <div class="form-group col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                    <label class="control-label" for="Username">Experience in hiring:</label>
									<div class="input-group">
										<div class="input-group-prepend">
											<span class="input-group-text">
												<i class="fa fa-user" aria-hidden="true" id="industry_icon"></i>
											</span>
										</div>
										<select id="industry_id" name="industry_id" autofocus="autofocus" class="form-control" >

											<option value="">Select Experience </option>
										<?php 
												foreach($industries as $industry)
												{	?>
													<option value="<?php echo $industry->industry_id; ?>" <?php if($industry->industry_id == $user_details->industry_id) {echo "selected"; } ?>> <?php echo $industry->industry_name; ?> </option>
										<?php	}
											?>
										</select>
									</div>
									<span class="err" id="err_industry_id"> </span>
								
                            </div>
                            

                            <div class="form-group col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
									<label class="control-label">Mobile:</label>
									<div class="input-group">
										<div class="input-group-prepend">
											<div class="input-group-text">
												<i class="fa fa-phone" aria-hidden="true"></i>
											</div>
										</div>
										<input type="text" class="form-control" id="phone"
											placeholder="Enter your mobile" name="phone" maxlength="10"
											pattern="[0-9]*">
									</div>
									<span class="err" id="err_phone"> </span>
                                </div>

                                
                        <div class="form-group col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <label for="company_address">Linkedin URL</label>
                              
                                    <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fa fa-user" aria-hidden="true"></i>
                                        </span>
                                    </div>
                                        <input type="url" class="form-control" id="web_url" placeholder="ex. http://companyweb.com" name="web_url" value="<?php echo ($user_details->web_url) ? $user_details->web_url : ""; ?>">
                                    </div>
                                    <span class="err" id="err_web_url"> </span>
                               
                            </div>
                                


                               
                                        <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                                <label class="control-label">I hire for skills:</label>
                                        							
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                            <span class="input-group-text"><i class="fa fa-map-marker" aria-hidden="true"></i></span> 
                                                    </div>
                                                        
                                                    <select id="company_location" name="companyLocation[]" autofocus="autofocus" class="form-control" multiple>
                                                        <option value=""> Company Location </option>
                                                        <?php 
                                                        $preferred_location = (!empty($user_details->company_location)) ? json_decode($user_details->company_location) : array();
                                                            foreach($cities as $cityRow)
                                                            {	
                                                                $selected = "";
                                                                if(in_array($cityRow->city_id, $preferred_location))
                                                                {
                                                                    $selected = "selected";
                                                                }
                                                            ?>
                                                                <option value="<?php echo $cityRow->city_id; ?>" <?php echo $selected;  ?>> <?php echo $cityRow->cityName; ?> </option>
                                                    <?php	}
                                                        ?>
                                                    </select>
                                                    
                                                </div>
                                                <span class="err" id="err_company_location"> </span>
                                          
                                        
                                        </div>
                                
							
							
							
							<div class="form-group col-md-12 col-sm-12 col-xs-12">
							
								<label for="company_address">About Enabler:</label>
									<div class="input-group">
										<div class="input-group-prepend">
											<span class="input-group-text"><i class="fa fa-map-marker" aria-hidden="true"></i></span> 
										</div>
										<textarea class="form-control" id="address" placeholder="Your Address" name="address" rows="2"><?php echo $user_details->address; ?></textarea>
															
									</div>
									<span class="err" id="err_address"> </span>
								
                            </div>
                            
                            <div class="form-group col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <label for="company_address">Add a photo:</label>
                                    
                                        <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="fa fa-user" aria-hidden="true"></i>
                                            </span>
                                        </div>
                                            <input type="file" class="form-control" id="company_logo" name="company_logo" value="">
                                        </div>
                                        <span class="err" id="err_company_logo"> </span>
                                    
                                </div>
							

                        </div>
                        

				
                      
					
					
					
						<hr size="3">

						<div class="row">
							<div class="input-group col-md-8 col-sm-8">
								<div class="btn-group" style="padding-left:30px;">
									<input type="submit" name="register" id="register" value="Submit"
										class="btn btn-primary">
								</div>
								<span class="loader" id="submit_loader">
									&nbsp; <i class="fa fa-spinner fa-spin" style="font-size:20px; color:green;"></i>
								</span>
								<span class="err" id="err_register"> </span>
							</div>
						</div>
					</form>
					</div>
				</div>
			</div>
		</section>
	</div>
</body>
</html>

<script>
	var base_url = "<?php echo base_url(); ?>";

    $(document).ready(function () {
                
        $('#user_dob').datepicker({
            format: "dd/mm/yyyy"
        });
                
        $('#company_location').select2({
            placeholder: 'Select at least 3 preffered locations',
            maximumSelectionLength: 3
        });
      

		$("#company_logo").change(function() {

		var ext = $('#company_logo').val().split('.').pop().toLowerCase();

			if($.inArray(ext, ['jpg','png','jpeg','gif']) == -1) {

    			$('#err_company_logo').html("&#9888 Company Logo must be 'jpg','png','jpeg','gif' file formats");
				$("#err_company_logo").fadeIn(1000);

                $('#company_logo').val('')    		

			}
		});	

		
    });      

function load_functionalArea(industryId,field_id)
{
	$("#functional_area_loader_"+field_id).fadeIn(800);
	$("#function_icon_"+field_id).hide();
	$("#functional_area_"+field_id).load(base_url+"recruiter/profile/load_functionalArea/"+industryId);
	  setTimeout(function(){ 		
		$(".loader").hide();
		$("#function_icon_"+field_id).fadeIn(800);
	  }, 1500);
	
}
function load_jobRole(functionAreaId,field_id)
{
	$("#user_role_loader_"+field_id).fadeIn(800);
	$("#user_role_icon_"+field_id).hide();
	$("#user_role_"+field_id).load(base_url+"recruiter/profile/load_jobRole/"+functionAreaId);
	  setTimeout(function(){ 		
		$(".loader").hide();
		$("#user_role_icon_"+field_id).fadeIn(800);
	  }, 1500);
	
}
function loadCity(city_id, state_id)
{
	$("#"+city_id+"_loader").fadeIn(800);
	$("#"+city_id+"_icon").hide();
	$("#"+city_id).load(base_url+"recruiter/profile/loadCities/"+state_id);
	  setTimeout(function(){ 		
		$(".loader").hide();
		$("#"+city_id+"_icon").fadeIn(800);
	  }, 1500);
	
}

	function Add_companyDetails() {
		$(".err").stop().fadeOut();
		$(".error").stop().fadeOut();
		$(".success").stop().fadeOut();
		
		
		var company_name = $("#company_name").val();
		if(company_name.length == 0)
		{
			$("#err_company_name").fadeIn(1000);
			$("#err_company_name").html("&#9888 Oops, Please enter company name.");
			return false;
		}
		
		var industry_id = $("#industry_id").val();
		if(industry_id.length == 0)
		{
			$("#err_industry_id").fadeIn(1000);
			$("#err_industry_id").html("&#9888 Oops, Please select industry.");
			return false;
		}
		
		var company_type = $("#company_type").val();
		if(company_type.length == 0)
		{
			$("#err_company_type").fadeIn(1000);
			$("#err_company_type").html("&#9888 Oops, Company type is required.");
			return false;
		}
		
		var state_id = $("#state_id").val();
		if(state_id.length == 0)
		{
			$("#err_state_id").fadeIn(1000);
			$("#err_state_id").html("&#9888 Oops, Please select state.");
			return false;
		}
		
		var city_id = $("#city_id").val();
		if(city_id.length == 0)
		{
			$("#err_city_id").fadeIn(1000);
			$("#err_city_id").html("&#9888 Oops, Please select City.");
			return false;
		}

		
		var frmData = new FormData($('#frm_companyDetails')[0]);
		$("#submit_loader").show();
		$.ajax({
			url: base_url + "recruiter/profile/company_details",
			dataType: "json",
			data: frmData,
			type: "POST",
			success: function (data) {
				if (data == 1 || data == '1') {
					$("#extraDetials_success").fadeIn(1000);
					$("#extraDetials_success").html("&#9888 Your Personal Details adding successfull done in a database.");
					$(".loader").hide();
					//window.location.href = base_url + "profile/";
					//$('#frm_educationDetials')[0].reset();
				}

				return false;


			},
			error: function (e) {
				$(".loader").hide();
				$("#extraDetials_error").fadeIn(1000);
				$("#extraDetials_error").html("&#9888 Oops, Error occured while adding Education details, Please try again .");
				return false;
			},
			processData: false,
			contentType: false,
		});

		return false;
	}

</script>