<input type="hidden" id="educationid" name="educationid" value="<?php echo $educationid; ?>">
<input type="hidden" id="editDetails" name="editDetails" value="<?php echo $editDetails; ?>">
		<div class="row">
			  <div class="form-group col-md-6 col-sm-6 col-xs-12">
				 <div class="col-sm-12">
					<div class="input-group">
					   <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
					   <select id="degreeId" name="degreeId" autofocus="autofocus" class="form-control" onchange="load_qualification(this.value, '0');"  required>
						  <option value=""> Highest Degree </option>
							<?php 
							foreach($degreeArr as $row)
							{	?>
								<option value="<?php echo $row->degreeId; ?>" <?php if($educationDetail->degreeId == $row->degreeId) {echo "selected"; } ?>> <?php echo $row->degreeName; ?> </option>
						<?php	}
						?> 
					   </select>
					</div>
					<span class="err" id="err_qualification_0"> </span>
				 </div>
			  </div>
			 
			  <div class="form-group col-md-6 col-sm-6 col-xs-12">
				 <div class="col-sm-12">
					<div class="input-group">
						<span class="input-group-text">
							<i class="fa fa-user" aria-hidden="true" id="qualification_id_icon_0"></i>
							<span class="loader" id="qualification_id_loader_0">
							 <i class="fa fa-spinner fa-spin" style="font-size:14px; color:green;"></i>
							</span>
						</span>  

					   <select id="qualification_id_0" name="qualification_id" autofocus="autofocus" class="form-control" required>
						  <option value="">Highest Qualification</option>
						  <?php 
							foreach($qualification as $row)
							{	?>
								<option value="<?php echo $row->qualification_id; ?>" <?php if($educationDetail->qualification_id == $row->qualification_id) {echo "selected"; } ?>> <?php echo $row->qualification_name; ?> </option>
						<?php	}
						?> 
					   </select>
					</div>
					<span class="err" id="err_qualification_id"> </span>
				 </div>
			  </div>
		</div>
		<div class="row">
			  <div class="form-group col-md-6 col-sm-6 col-xs-12">
				 <div class="col-sm-12">
					<div class="input-group">
					   <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
					   <select id="specialization" name="specialization" autofocus="autofocus" class="form-control" >
						  <option value=""> Specialization </option>
						  <option value="computer" <?php if($educationDetail->specialization == "computer") {echo "selected"; } ?>> Computer </option>
						  <option value="bcom" <?php if($educationDetail->specialization == "bcom") {echo "selected"; } ?>> B-com </option>
						  <option value="math" <?php if($educationDetail->specialization == "math") {echo "selected"; } ?>> Maths </option>
					   </select>
					</div>
					<span class="err" id="err_specialization_0"> </span>
				 </div>
			  </div>
			  <div class="form-group col-md-6 col-sm-6 col-xs-12">
				 <div class="col-sm-12">
					<div class="input-group">
					   <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
					   <select id="university_id" name="university_id" autofocus="autofocus" class="form-control">
						  <option value=""> University/College </option>
						  <?php 
							foreach($universities as $row)
							{	?>
							<option value="<?php echo $row->university_id; ?>" <?php if($educationDetail->university_id == $row->university_id) {echo "selected"; } ?>> <?php echo $row->university_name; ?> </option>
							
						<?php	}
						?> 
					   </select>
					</div>
					<span class="err" id="err_university_id"> </span>
				 </div>
			  </div>
		</div>
		<div class="row">
			  <div class="form-group col-md-6 col-sm-6 col-xs-12">
				 <div class="col-sm-12">
					<div class="input-group">
					   <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
					   <select id="education_type" name="education_type" autofocus="autofocus" class="form-control">
						  <option value=""> Type-Full/Part </option>
						  <option value="full" <?php if($educationDetail->education_type == "full") {echo "selected"; } ?>> Full </option>
						  <option value="part" <?php if($educationDetail->education_type == "part") {echo "selected"; } ?>> Part </option>
					   </select>
					</div>
					<span class="err" id="err_education_type"> </span>
				 </div>
			  </div>
			  <div class="form-group col-md-6 col-sm-6 col-xs-12">
				 <div class="col-sm-12">
					<div class="input-group">
					   <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
					   <select id="passing_year" name="passing_year" autofocus="autofocus" class="form-control">
						  <option value=""> Passing Year</option>
						  <option value="appear" <?php if($educationDetail->passing_year == "appear") {echo "selected"; } ?>> Appear </option>
						  <?php
							for($i=date('Y'); $i >= 1998; $i--)
							{ ?>
								<option value="<?php echo $i; ?>" <?php if($educationDetail->passing_year == $i) {echo "selected"; } ?>> <?php echo $i; ?> </option>
						<?php	}
						  ?>
					   </select>
					</div>
					<span class="err" id="err_passing_year"> </span>
				 </div>
			  </div>
		</div>	