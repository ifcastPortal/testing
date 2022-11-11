<!-- Breadcrumb -->
<div class="alice-bg py-5">
	<div class="container">
	  <div class="row">
		<div class="col-md-6">
		  <div class="breadcrumb-area">
			<h1>Educational details</h1>
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
                <form name="frm_educationDetials" id="frm_educationDetials"	action="" method="POST" onSubmit="return Add_educationDetails();" class="job-post-form">
					<input type="hidden" name="action" id="action" value="<?php echo $action; ?>">
					<input type="hidden" name="added_rows" id="added_rows" value="1">

					<div class="row">
						<div id="educationDetials_error" class="error col-sm-10"></div>
						<div id="educationDetials_success" class="success col-sm-10"></div>
					</div>

                  <div class="basic-info-input">
					<h4><i data-feather="plus-circle"></i>Educational Details</h4>
					
                   
                    <div id="job-summery" class="row">
					  <label class="col-md-3 col-form-label">Job Summary</label>
					  
                      <div class="col-md-9">
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
							  <select id="degreeId_0" name="degreeId[]" autofocus="autofocus" class="form-control" onchange="load_qualification(this.value, '0');"  required>
								<option value=""> Highest Degree </option>
								  <?php 
								  foreach($degreeArr as $row)
								  {	?>
									  <option value="<?php echo $row->degreeId; ?>"> <?php echo $row->degreeName; ?> </option>
							  <?php	}
							  ?> 
							 </select>
							 <i class="fa fa-caret-down"></i>
							<span class="err" id="err_degreeId_0"> </span>	


                            </div>
                          </div>
                          <!-- <div class="col-md-6">
                            <div class="form-group">
                              <input type="text" class="form-control" placeholder="Job Location">
                            </div>
                          </div> -->
                          <div class="col-md-6">
                            <div class="form-group">
                         

							  <select id="qualification_id_0" name="qualification_id[]" autofocus="autofocus" class="form-control" onchange="load_specialization(this.value, '0');" required>
								<option value="">Highest Qualification</option>
								<?php 
								  foreach($qualification as $row)
								  {	?>
									  <option value="<?php echo $row->qualification_id; ?>"> <?php echo $row->qualification_name; ?> </option>
							  <?php	}
							  ?> 
							 </select>
							 <i class="fa fa-caret-down"></i>
					<span class="err" id="err_qualification_id_0"> </span>


                            </div>
						  </div>
						  


                          <div class="col-md-6">
                            <div class="form-group">
							  <select id="specialization_id_0" name="specialization_id[]" autofocus="autofocus" class="form-control" required>
								<option value="">Specialization</option>
										<?php 
										  foreach($specialization as $row)
										  {	?>
											  <option value="<?php echo $row->specialization_id; ?>"> <?php echo $row->specialization_name; ?> </option>
									  <?php	}
									  ?> 
									 </select>
									 <i class="fa fa-caret-down"></i>
							<span class="err" id="err_specialization_id_0"> </span>
							</div>
						</div>
						  


                          <div class="col-md-6">
                            <div class="form-group">


								<select id="university_id_0" name="university_id[]" autofocus="autofocus" class="form-control" required>
									<option value=""> University/College </option>
									<?php 
									  foreach($universities as $row)
									  {	?>
									  <option value="<?php echo $row->university_id; ?>" <?php if($educationDetail->university_id == $row->university_id) {echo "selected"; } ?>> <?php echo $row->university_name; ?> </option>
									  
								  <?php	}
								  ?> 
								 </select>
								 <i class="fa fa-caret-down"></i>
								<span class="err" id="err_university_id_0"> </span>
							  
                            </div>
						  </div>
						  

                          <div class="col-md-6">
                            <div class="form-group">
							  <select id="education_type_0" name="education_type[]" autofocus="autofocus" class="form-control" required>
								<option value=""> Type-Full/Part </option>
								<option value="full"> Full </option>
								<option value="part"> Part </option>
							 </select>
							 <i class="fa fa-caret-down"></i>
							<span class="err" id="err_education_type_0"> </span>
                            </div>
						  </div>
						  
						  <div class="col-md-6">
                            <div class="form-group">

							  <select id="passing_year_0" name="passing_year[]" autofocus="autofocus" class="form-control" required>
								<option value=""> Passing Year</option>
								<option value="appear"> Appear </option>
								<?php
								  for($i=date('Y'); $i >= 1998; $i--)
								  { ?>
									  <option value="<?php echo $i; ?>"> <?php echo $i; ?> </option>
							  <?php	}
								?>
							 </select>
							 <i class="fa fa-caret-down"></i>
								<span class="err" id="err_passing_year_0"> </span>


                            </div>
						  </div>
						</div>
						
						<div id="moreEducation_details" class="">	
						</div>
		
						<div class="row">	
							<div class="input-group col-md-8 col-sm-8">
							</div>
							<div class="col-12 text-right">				
								<div class="btn-group" style="background:#10abba; color:white;padding:5px;">
									<a onClick="addRow(this.form,'1');" class="btn btn-sm btn-default ifcast-style-bg-blue ifcast-style-round-btn">
										<i class="fa fa-plus"></i>
									</a>
								</div>
							</div>
						</div>

					  </div>
					  
					</div>
					

                  
                  <hr size="3">
                   
                    <div id="post-location" class="form-group row">
                      <label class="col-md-3 col-form-label">Certification details <br>(Optional)</label>

                      <div class="col-md-9">
                        <div class="row">
                          <div class="col-md-6">
							<div class="form-group">
								<input class="form-control" id="certificationTitle_0" placeholder="Certification Title" name="certificationTitle[]" type="text" value="">
							  <span class="err" id="err_certificationTitle_0"> </span>
							  </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
								<select id="completion_year_0" name="completion_year[]" autofocus="autofocus" class="form-control">
								  <option value=""> Completion Year</option>
								  <?php
									  for($i=date('Y'); $i >= 1998; $i--)
									  { 
								  ?>
										  <option value="<?php echo $i; ?>"> <?php echo $i; ?> </option>									
								  <?php	} ?>
							  </select>
							  <i class="fa fa-caret-down"></i>
							  <span class="err" id="err_completion_year_0"> </span>
							  </div>
						  </div>


						  <div class="col-md-12">
							  <div class="form-group file-input-wrap">
								<label for="certificationDoc_0">
								  <input type="file"  id="certificationDoc_0" name="certificationDoc[]" onChange="check_fileType('certificationDoc_0', 'img');">
								  <i data-feather="upload-cloud"></i>
								  <span>Upload your Certificate <span>(pdf,zip,doc,docx)</span></span>
								</label>
								<span class="err" id="err_certificationDoc_0"> </span>
							  </div>
						  </div>


						  <div id="moreCertification_details" class="col-md-12">	
						</div>

						<div class="row ml-auto pr-3">
							<div class="col-md-12 text-right">				
								<div class="btn-group" style="background:#10abba;color:white;padding:5px;height: 30px;width: 30px;">
									<a onClick="add_newCertification();" class="">
										<i class="fa fa-plus" style="position: relative;color:white;right:5px;top:10px;font-size: 10px;right:-5px;top:-2px;"></i>
									</a>
								</div>
							</div>
						</div>
                        </div>
                      </div>
                    </div>
                  
                    
                   
                    <div class="form-group row">
                      <label class="col-md-3 col-form-label"></label>
                      <div class="col-md-9">
						<!-- <button class="button">Submit and Next</button> -->
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
                  <li><a>Profile Type</a></li>
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



<input id="certificationRows" name="certificationRows" value="1" type="hidden">
<script>
  
var base_url = "<?php echo base_url(); ?>";
	$(function(){
		
		$('#user_city').select2({
			placeholder:'Select Services',
			 allowClear: true
		});
	});

function load_qualification(degreeId,field_id)
{
	$("#qualification_id_loader_"+field_id).fadeIn(800);
	$("#qualification_id_icon_"+field_id).hide();
	$("#qualification_id_"+field_id).load(base_url+"profile/load_qualification/"+degreeId);
	  setTimeout(function(){ 		
		$(".loader").hide();
		$("#qualification_id_icon_"+field_id).fadeIn(800);
	  }, 1500);
	
}


function load_specialization(qualification_id,field_id)
{
	$("#specialization_id_loader_"+field_id).fadeIn(800);
	$("#specialization_id_icon_"+field_id).hide();
	$("#specialization_id_"+field_id).load(base_url+"profile/load_specialization/"+qualification_id);
	  setTimeout(function(){ 		
		$(".loader").hide();
		$("#specialization_id_icon_"+field_id).fadeIn(800);
	  }, 1500);
	
}
		
function add_newCertification() {
	var nextRow = $("#certificationRows").val();	
	
	var newCertification = '<div id="certificationRow_'+nextRow+'"><hr size="3"><div class="row"><div class="form-group col-12"><div class="btn-group" style="float:right;cursor: pointer;"><a onClick="remove_certificationRow('+nextRow+');" class=" btn btn-sm btn-default ifcast-style-bg-error ifcast-style-round-btn"><i class="fa fa-times"></i></a></div></div><div class="col-md-6"><div class="form-group"><input class="form-control" id="certificationTitle_'+nextRow+'" placeholder="Certification Title" name="certificationTitle[]" type="text" value=""></div><span class="err" id="err_certificationTitle_'+nextRow+'"> </span></div><div class="col-md-6"><div class="form-group"><select id="completion_year_'+nextRow+'" name="completion_year[]" autofocus="autofocus" class="form-control"><option value=""> Completion Year</option><?php for($i=date('Y'); $i >= 1998; $i--) { ?> <option value="<?php echo $i; ?>"> <?php echo $i; ?> </option>	<?php	} ?></select><i class="fa fa-caret-down"></i><span class="err" id="err_completion_year_'+nextRow+'"> </span></div></div></div><div class="row"><div class="col-md-12"><div class="form-group file-input-wrap"><label for="certificationDoc_'+nextRow+'"><input type="file"  id="certificationDoc_'+nextRow+'" name="certificationDoc[]" onChange="check_fileType(\'certificationDoc_'+nextRow+'\', \'img\');"><i data-feather="upload-cloud"></i><span>Upload your Certificate <span>(pdf,zip,doc,docx)</span></span></label><span class="err" id="err_certificationDoc_'+nextRow+'"> </span></div></div></div></div>';
	
	$('#moreCertification_details').append(newCertification);
	
	
	nextRow = parseInt(nextRow) + 1;	
	$("#certificationRows").val(nextRow);
}

function remove_certificationRow(rnum) {
	$('#certificationRow_'+rnum).remove();
}

		
function addRow(frm,no) {
	 addRow.rowNum=++addRow.rowNum || no;
	key_v=addRow.rowNum-1;
	
	$.post(base_url+"profile/add_moreDetails", {
                    rowNum: addRow.rowNum
                },
                function (data) {
                    $('#moreEducation_details').append(data);
					$('#rowNum_'+addRow.rowNum).fadeIn(1000);
                });	

	var added_rows = $("#added_rows").val();		
	added_rows = parseInt(added_rows) + 1;	
	$("#added_rows").val(added_rows);
}

function removeRow(rnum) {
	$('#rowNum_'+rnum).remove();
	
	var added_rows = $("#added_rows").val();		
	added_rows = parseInt(added_rows) - 1;	
	$("#added_rows").val(added_rows);
}

function Add_educationDetails()
{
	var frmData = new FormData( $( '#frm_educationDetials' )[ 0 ] );
	$("#submit_loader").show();
	$.ajax({
            url: base_url+"profile/education_details",
			dataType: "json",
            data: frmData,
            type: "POST",
            success: function (data) {
				if(data==1 || data == '1')
				{
					$("#educationDetials_success").fadeIn(1000);
					$("#educationDetials_success").html("&#9888 Education details added successfully.");
					$(".loader").hide();	
					window.location.href = base_url+"profile";
					$( '#frm_educationDetials' )[ 0 ].reset();	
				}
				
				return false;				 


			},
            error: function (e) {
					$("#educationDetials_error").fadeIn(1000);
					$("#educationDetials_error").html("&#9888 Oops, Error occured while adding Education details, Please try again .");
					return false;	
            },
			processData: false,
			contentType: false,
        });
		
	return false;		
}
</script>