<?php
//echo "<pre>==>"; print_r($jobpreference); exit;
if(!empty($jobpreference))
{
	$y=0;
	foreach($jobpreference as $details_row)
	{ 
		if($y++ > 0)
			echo '<hr size="3">';
	?>
<div id="rowNum_<?php echo $row_num; ?>" >	
	<input type="hidden" name="jobpreferedId[]" value="<?php echo $details_row->jobprefered_id; ?>">
		<div class="row">
			<div class="form-group col-md-6 col-sm-6 col-xs-12">
				<div class="col-sm-12">
					<div class="input-group">
						<div class="input-group-prepend">
							<span class="input-group-text">
								<i class="fa fa-user" aria-hidden="true" id="function_icon_<?php echo $row_num; ?>"></i>
								<span class="loader" id="functional_area_loader_<?php echo $row_num; ?>">
								 <i class="fa fa-spinner fa-spin" style="font-size:14px; color:green;"></i>
								</span>
							</span> 
						</div>	
						<select id="functional_area_<?php echo $row_num; ?>" name="functional_area[]" autofocus="autofocus" class="form-control" onchange="load_jobRole(this.value, '<?php echo $row_num; ?>');" required>
							<option value="">Functional Area</option>
														<?php 
								foreach($functionareas as $row)
								{	?>
									<option value="<?php echo $row->functionAreaId; ?>" <?php echo ($details_row->functional_area == $row->functionAreaId) ? "selected" : ""; ?>> <?php echo $row->functionArea; ?> </option>
						<?php	}
							?>

							
						</select>
						
					</div>
					
					<span class="err" id="err_functional_area_<?php echo $row_num; ?>"> </span>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="form-group col-md-6 col-sm-6 col-xs-12">
				<div class="col-sm-12">
					<div class="input-group">
						<div class="input-group-prepend">
							<span class="input-group-text">
								<i class="fa fa-user" aria-hidden="true" id="user_role_icon_<?php echo $row_num; ?>"></i>
								<span class="loader" id="user_role_loader_<?php echo $row_num; ?>">
								 <i class="fa fa-spinner fa-spin" style="font-size:14px; color:green;"></i>
								</span>
							</span>  
						</div>	
						<select id="user_role_<?php echo $row_num; ?>" name="user_role[]" autofocus="autofocus"
							class="form-control" required>
							<option value=""> Job Role </option>
							<?php 
								foreach($job_rol as $row)
								{	?>
									<option value="<?php echo $row->role_id; ?>" <?php echo ($details_row->role == $row->role_id) ? "selected" : ""; ?>> <?php echo $row->role_name; ?> </option>
							<?php	}
							?> 

						</select>
					</div>
					<span class="err" id="err_user_role_<?php echo $row_num; ?>"> </span>
				</div>
			</div>

			<div class="form-group col-md-6 col-sm-6 col-xs-12">
				<div class="col-sm-12">
					<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
						<select id="jobType_<?php echo $row_num; ?>" name="jobType[]" autofocus="autofocus"
							class="form-control">
							<option value=""> Job Type </option>
							<?php 
								$rols = array("permanent"=>"Permanent", "contract"=>"Contract", "any"=>"Any", );
								foreach($rols as $key=>$val)
								{	?>
									<option value="<?php echo $key; ?>" <?php echo ($details_row->job_type == $key) ? "selected" : ""; ?>> <?php echo $val; ?> </option>
						<?php	}
							?>
						</select>
					</div>
					<span class="err" id="err_jobType_<?php echo $row_num; ?>"> </span>
				</div>
			</div>
		</div>

		<div class="row"> 
			<div class="form-group col-md-12 col-sm-12 col-xs-12">
				<div class="col-sm-6">
					<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
						<select id="worktype_<?php echo $row_num; ?>" name="worktype[]" autofocus="autofocus" class="form-control">
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
					<span class="err" id="err_worktype_<?php echo $row_num; ?>"> </span>
				</div>
				<div class="col-md-6 col-sm-6">
				 <div class="btn-group" style="background:#cd3539;color:white;padding:5px;height: 30px;width: 30px;">
					<a onClick="removeRow(<?php echo $row_num; ?>);" class="btn btn-sm btn-default">
						<i class="fa fa-times"></i>
					</a>
				 </div>
				</div>
			</div>
		</div>
    </div>
<?php
	
	     $row_num++;
	} // foreach
}
else
{ 
$hr = $display = "";
 if($row_num > 0) { 
	$hr ='<hr size="3">';
	$display ='display:none';
 } 

?>
<div id="rowNum_<?php echo $row_num; ?>" style="<?php echo $display; ?>;">
<?php  
	echo $hr;
?>	

<div class="row">

	<?php	
			if($row_num > 0)
			{  
		?>
			<div class="col-md-12" style="text-align: right;">
				<div class="btn-group" style="background:#cd3539;color:white;padding:5px;height: 30px;width: 30px;">
				<a onClick="removeRow(<?php echo $row_num; ?>);" class="btn btn-sm btn-default">
					<i class="fa fa-times"></i>
				</a>
				</div>
			</div>
		<?php 
			} 
		?>



		<div class="col-md-6">
			<div class="form-group">
				<select id="industry_<?php echo $row_num; ?>" name="industry[]" autofocus="autofocus" class="form-control"  required>
					<option value=""> Industry </option>
					<?php 
						foreach($industries as $industry)
						{	?>
							<option value="<?php echo $industry->industry_id; ?>"> <?php echo $industry->industry_name; ?> </option>
				<?php	}
					?>
				</select>
				<i class="fa fa-caret-down"></i>
				<span class="err" id="err_industry_<?php echo $row_num; ?>"> </span>
			</div>
		</div>


		<div class="col-md-6">
			<div class="form-group">
				<select id="functional_area_<?php echo $row_num; ?>" name="functional_area[]" autofocus="autofocus" class="form-control" onchange="load_jobRole(this.value, '<?php echo $row_num; ?>');" required>
					<option value="">Functional Area</option>
					<?php 
						foreach($functionareas as $row)
						{	?>
							<option value="<?php echo $row->functionAreaId; ?>"> <?php echo $row->functionArea; ?> </option>
				<?php	}
					?>
				</select>
				<i class="fa fa-caret-down"></i>
				<span class="err" id="err_functional_area_<?php echo $row_num; ?>"> </span>
			</div>
		</div>

		<div class="col-md-6">
			<div class="form-group">
				<select id="user_role_<?php echo $row_num; ?>" name="user_role[]" autofocus="autofocus"
					class="form-control" required>
					<option value=""> Job Role </option>
					<?php 
						foreach($job_rol as $row)
						{	?>
							<option value="<?php echo $row->role_id; ?>"> <?php echo $row->role_name; ?> </option>
					<?php	}
					?> 
				</select>
				<i class="fa fa-caret-down"></i>
				<span class="err" id="err_user_role_<?php echo $row_num; ?>"> </span>
			</div>
		</div>

		<div class="col-md-6">
			<div class="form-group">
				<select id="jobType_<?php echo $row_num; ?>" name="jobType[]" autofocus="autofocus"
					class="form-control" required>
					<option value=""> Job Type </option>
					<option value="pune"> Permanent</option>
					<option value="nashik"> Contract </option>
					<option value="pune"> Any</option>
				</select>
				<i class="fa fa-caret-down"></i>
				<span class="err" id="err_jobType_<?php echo $row_num; ?>"> </span>
			</div>
		</div>

		<div class="col-md-6">
			<div class="form-group" required>
				<select id="worktype_<?php echo $row_num; ?>" name="worktype[]" autofocus="autofocus" class="form-control" required>
					<option value=""> Work-Full/Part </option>
					<option value="full"> Full </option>
					<option value="part"> Part </option>
				</select>
				<i class="fa fa-caret-down"></i>
				<span class="err" id="err_worktype_<?php echo $row_num; ?>"> </span>
			</div>
		</div>

		
	
		</div>

		
	</div>
<?php } ?>
