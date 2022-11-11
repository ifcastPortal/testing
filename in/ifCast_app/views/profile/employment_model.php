<script>
$(function() {
  $("#work_type").select2({
    placeholder: "Select Work Type",
    width: "100%"
  });
  
    $('#from_date').datepicker({
            format: "dd-mm-yyyy"
        });
               
    $('#to_date').datepicker({
            format: "dd-mm-yyyy"
        });
               
});
</script>
<?php $details_row = $userprevjob; ?>
<input type="hidden" id="prevJob_id" name="prevJob_id" value="<?php echo $prevJob_id; ?>">
<input type="hidden" id="editDetails" name="editDetails" value="<?php echo $editDetails; ?>">
		<div class="row">
			<div class="form-group col-md-12 col-sm-12 col-xs-12">
				<div class="col-sm-12">
				 <label for="prevJobCompany">Company Name:</label>
				 
					<div class="input-group mb-3">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fa fa-user" aria-hidden="true"></i></span> 
						</div>
						<input class="form-control" id="prevJobCompany" placeholder="Company Name" name="prevJobCompany" type="text" value="<?php echo $details_row->prevJobCompany; ?>">
					</div>
					<span class="err" id="err_prevJobCompany"> </span>
				</div>
			</div>
			
		</div>	
		<div class="row">
			<div class="form-group col-md-12 col-sm-12 col-xs-12">
				<div class="col-sm-12">
				<label for="company_address">Company Address:</label>
					<div class="input-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fa fa-map-marker" aria-hidden="true"></i></span> 
						</div>
						<textarea class="form-control" id="company_address" placeholder="Company Address" name="company_address" rows="2"><?php echo $details_row->company_address; ?></textarea>
											
					</div>
					<span class="err" id="err_company_address"> </span>
				</div>
			</div>
			
		</div>
	<!--	<div class="row">
			<div class="form-group col-md-12 col-sm-12 col-xs-12">
				<div class="col-sm-12">
				<label for="company_address">Job Role:</label>
					<div class="input-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fa fa-user" aria-hidden="true"></i></span> 
						</div>
						<select id="jobId" name="jobId" autofocus="autofocus" class="form-control">
							<option value=""> Job Role </option>
							<?php 
								foreach($job_rol as $row)
								{	?>
									<option value="<?php echo $row->role_id; ?>"> <?php echo $row->role_name; ?> </option>
							<?php	}
							?> 
						</select>
					</div>
					<span class="err" id="err_user_role_<?php echo $row_num; ?>"> </span>
				</div>
			</div>
			
		</div> -->
		<div class="row">
			
			<div class="form-group col-md-6 col-sm-6 col-xs-12">
				<div class="col-sm-12">
				<label for="designation">Designation:</label>
					<div class="input-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fa fa-user" aria-hidden="true"></i></span> 
						</div>
						<input class="form-control" id="designation" placeholder="Designation" name="designation" type="text" value="<?php echo $details_row->designation; ?>">	
					</div>
					<span class="err" id="err_designation"> </span>
				</div>
			</div>
			
			<div class="form-group col-md-6 col-sm-6 col-xs-12">
				<div class="col-sm-12">
				<label for="work_type">Work Type:</label>
					<div class="input-group">
					<?php /* <div class="input-group-prepend">
								<span class="input-group-text"><i class="fa fa-user" aria-hidden="true"></i></span> 
							</div> */ ?>
						<select id="work_type" name="work_type" autofocus="autofocus" class="form-control">
							<option value=""> Work-Full/Part </option>
							<?php 
								$rols = array("Full"=>"Full", "Part"=>"Part");
								foreach($rols as $key=>$val)
								{	?>
									<option value="<?php echo $key; ?>" <?php echo ($details_row->work_type == $key) ? "selected" : ""; ?>> <?php echo $val; ?> </option>
						<?php	}
							?>
						</select>
					</div>
					<span class="err" id="err_worktype"> </span>
				</div>
			</div>
			
		</div>
		
	 <?php //echo "<pre>"; print_r($details_row); exit;?>
		<div class="row">
			<div class="form-group col-md-6 col-sm-6 col-xs-12">
				<div class="col-sm-12">
				<label for="from_date">From Date:</label>
					<div class="input-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fa fa-calendar" aria-hidden="true"></i></span> 
						</div>
						<input class="form-control" id="from_date" placeholder="From Date" name="from_date" type="text" value="<?php  echo date('d-m-Y', strtotime($details_row->from_date)); ?>">						
					</div>
					<span class="err" id="err_from_date"> </span>
				</div>
			</div>
			<div class="form-group col-md-6 col-sm-6 col-xs-12">
				<div class="col-sm-12">
				<label for="to_date">To Date:</label>
					<div class="input-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fa fa-calendar" aria-hidden="true"></i></span> 
						</div>
						<input class="form-control" id="to_date" placeholder="To Date" name="to_date" type="text"  value="<?php echo date('d-m-Y', strtotime($details_row->to_date)); ?>">												
					</div>
					<span class="err" id="err_to_date"> </span>
				</div>
			</div> 
		</div>
