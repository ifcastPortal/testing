<div id="rowNum_<?php echo $row_num; ?>" style="display:none;" class="row">

	<div class="col-md-12 col-sm-12 mb-3 text-right">
		<div class="btn-group" style="background:#cd3539; color:white;padding:5px;">
			<a onClick="removeRow(<?php echo $row_num; ?>);"
				class="btn btn-sm btn-default ifcast-style-bg-error ifcast-style-round-btn">
				<i class="fa fa-times"></i>
			</a>
		</div>
	</div>

	<div class="col-md-6">
		<div class="form-group">
			<select id="degreeId_<?php echo $row_num; ?>" name="degreeId[]" autofocus="autofocus" class="form-control"
				onchange="load_qualification(this.value, '<?php echo $row_num; ?>');" required>
				<option value=""> Highest Degree </option>
				<?php 
												foreach($degreeArr as $row)
												{	?>
				<option value="<?php echo $row->degreeId; ?>"> <?php echo $row->degreeName; ?> </option>
				<?php	}
											?>
			</select>
		 <i class="fa fa-caret-down"></i>
		 <span class="err" id="err_degreeId_<?php echo $row_num; ?>"> </span>


		</div>
	  </div>

	  <div class="col-md-6">
		<div class="form-group">
	 

			<select id="qualification_id_<?php echo $row_num; ?>" name="qualification_id[]" autofocus="autofocus"
				class="form-control" onchange="load_specialization(this.value, '<?php echo $row_num; ?>');" required>
				<option value="">Highest Qualification</option>
				<?php 
													foreach($qualification as $row)
													{	?>
				<option value="<?php echo $row->qualification_id; ?>"> <?php echo $row->qualification_name; ?>
				</option>
				<?php	}
												?>
			</select>
		 <i class="fa fa-caret-down"></i>
		 <span class="err" id="err_qualification_id_<?php echo $row_num; ?>"> </span>


		</div>
	  </div>


	  <div class="col-md-6">
		<div class="form-group">
		 <select id="specialization_id_<?php echo $row_num; ?>" name="specialization_id[]" autofocus="autofocus" class="form-control" >
			<option value="">Specialization</option>
					<?php 
					  foreach($specialization as $row)
					  {	?>
						  <option value="<?php echo $row->specialization_id; ?>"> <?php echo $row->specialization_name; ?> </option>
				  <?php	}
				  ?> 
				 </select>

				 <!-- <select id="specialization_<?php echo $row_num; ?>" name="specialization[]" autofocus="autofocus"
					class="form-control">
					<option value=""> Specialization </option>
					<option value="computer"> Computer </option>
					<option value="bcom"> B-com </option>
					<option value="math"> Maths </option>
				</select> -->
				 <i class="fa fa-caret-down"></i>
			<span class="err" id="err_specialization_id_<?php echo $row_num; ?>"> </span>
		</div>
	</div>


	<div class="col-md-6">
		<div class="form-group">
			<select id="university_id_<?php echo $row_num; ?>" name="university_id[]" autofocus="autofocus"
				class="form-control">
				<option value=""> University/College </option>
				<?php 
															foreach($universities as $row)
															{	?>
				<option value="<?php echo $row->university_id; ?>"> <?php echo $row->university_name; ?>
				</option>

				<?php	}
														?>
			</select>
			 <i class="fa fa-caret-down"></i>
			 <span class="err" id="err_university_id_<?php echo $row_num; ?>"> </span>
		  
		</div>
	  </div>


	  <div class="col-md-6">
		<div class="form-group">
			<select id="education_type_<?php echo $row_num; ?>" name="education_type[]" autofocus="autofocus"
				class="form-control">
				<option value=""> Type-Full/Part </option>
				<option value="full"> Full </option>
				<option value="part"> Part </option>
			</select>
		 <i class="fa fa-caret-down"></i>
		 <span class="err" id="err_education_type_<?php echo $row_num; ?>"> </span>
		</div>
	  </div>


	  <div class="col-md-6">
		<div class="form-group">

			<select id="passing_year_<?php echo $row_num; ?>" name="passing_year[]" autofocus="autofocus"
				class="form-control">
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
		 <span class="err" id="err_passing_year_<?php echo $row_num; ?>"> </span>


		</div>
	  </div>



<!-- 
	<div class="form-group col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
		<div class="input-group">
			<div class="input-group-prepend">
				<div class="input-group-text">
					<i class="fa fa-phone" aria-hidden="true"></i>
				</div>
			</div>
			<select id="specialization_<?php echo $row_num; ?>" name="specialization[]" autofocus="autofocus"
				class="form-control">
				<option value=""> Specialization </option>
				<option value="computer"> Computer </option>
				<option value="bcom"> B-com </option>
				<option value="math"> Maths </option>
			</select>
		</div>
		<span class="err" id="err_specialization_<?php echo $row_num; ?>"> </span>
	</div> -->


	







	<hr size="3">
</div>

</div>









