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
	<input type="hidden" name="prevJob_id" value="<?php echo $details_row->prevJobId; ?>">
		<div class="row">
			<div class="form-group col-md-6 col-sm-6 col-xs-12">
				<div class="col-sm-12">
					<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
						<input class="form-control" id="companyName_<?php echo $row_num; ?>" placeholder="Company Name" name="companyName[]" type="text">
					</div>
					<span class="err" id="err_companyName_<?php echo $row_num; ?>"> </span>
				</div>
			</div>
			
			<div class="form-group col-md-6 col-sm-6 col-xs-12">
				<div class="col-sm-12">
					<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
						
						<input class="form-control" id="designation_<?php echo $row_num; ?>" placeholder="Your Designation" name="designation[]" type="text" required>
						
					</div>
					<span class="err" id="err_designation_<?php echo $row_num; ?>"> </span>
				</div>
			</div>
			
		</div>
		<div class="row">
			<div class="form-group col-md-6 col-sm-6 col-xs-12">
				<div class="col-sm-12">
					<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
						<input class="form-control" id="location_<?php echo $row_num; ?>" placeholder="Company Address" name="location[]" type="text">						
					</div>
					<span class="err" id="err_location_<?php echo $row_num; ?>"> </span>
				</div>
			</div>
			<div class="form-group col-md-6 col-sm-6 col-xs-12">
				<div class="col-sm-12">
					<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
						<select id="worktype_<?php echo $row_num; ?>" name="worktype[]" autofocus="autofocus" class="form-control">
							<option value=""> Work-Full/Part </option>
							<?php 
								$rols = array("Full"=>"Full", "Part"=>"Part");
								foreach($rols as $key=>$val)
								{	?>
									<option value="<?php echo $key; ?>" <?php //echo ($details_row->work_type == $key) ? "selected" : ""; ?>> <?php echo $val; ?> </option>
						<?php	}
							?>
						</select>
					</div>
					<span class="err" id="err_worktype_<?php echo $row_num; ?>"> </span>
				</div>
			</div>
		</div>
	
		<div class="row">
			<div class="form-group col-md-6 col-sm-6 col-xs-12">
				<div class="col-sm-12">
					<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
						<input class="form-control dateClass" id="fromDate_<?php echo $row_num; ?>" placeholder="From Date (dd-mm-yyyy)" name="fromDate[]" type="text">						
					</div>
					<span class="err" id="err_fromDate_<?php echo $row_num; ?>"> </span>
				</div>
			</div>
			<div class="form-group col-md-6 col-sm-6 col-xs-12">
				<div class="col-sm-12">
					<div class="input-group">
						<span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
						<input class="form-control dateClass" id="toDate_0" placeholder="To Date (dd-mm-yyyy)" name="toDate[]" type="text">						
					</div>
					<span class="err" id="err_toDate_<?php echo $row_num; ?>"> </span>
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
				 <div class="btn-group" style="float:right; padding-right:15px;">
					<a onClick="removeRow(<?php echo $row_num; ?>);" class="btn btn-sm btn-default">
						<i class="fa fa-plus"></i>Remove
					</a>
				 </div>
				</div>
			</div>
		</div>
<?php
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
<div class="col-md-9" id="rowNum_<?php echo $row_num; ?>" style="<?php echo $display; ?>;">
<?php  
	echo $hr;
?>	

		<br>

		

<div class="row">

	<?php	if($row_num > 0) {  ?>

	
		<div class="col-md-12" style="text-align: right;">
			<div class="btn-group" style="text-align: right;background:#cd3539;color:white;height:30px;width:30px;">
			   <a onClick="removeRow(<?php echo $row_num; ?>);" class="btn btn-sm btn-default">
				   <i class="fa fa-times"></i>
			   </a>
			</div>
		   </div>
	
	
<?php } ?>

	<div class="col-md-6">
		<div class="form-group">

					<input class="form-control" id="designation_<?php echo $row_num; ?>" placeholder="Your Designation" name="designation[]" type="text" required>
					<span class="err" id="err_designation_<?php echo $row_num; ?>"> </span>
		</div>
	  </div>




	<div class="col-md-6">
		<div class="form-group">
			<input class="form-control" id="companyName_<?php echo $row_num; ?>" placeholder="Company Name" name="companyName[]" type="text" required>
			<span class="err" id="err_companyName_<?php echo $row_num; ?>"> </span>
		</div>
	  </div>

	  <div class="col-md-6">
		<div class="form-group">
			<input class="form-control" id="location_<?php echo $row_num; ?>" placeholder="Company Address" name="location[]" type="text" required>
			<span class="err" id="err_location_<?php echo $row_num; ?>"> </span>
		</div>
	  </div>

	  <div class="col-md-6">
		<div class="form-group">
			<select id="worktype_<?php echo $row_num; ?>" name="worktype[]" autofocus="autofocus" class="form-control">
				<option value=""> Work-Full/Part </option>
				<?php 
					$rols = array("Full"=>"Full", "Part"=>"Part");
					foreach($rols as $key=>$val)
					{	?>
						<option value="<?php echo $key; ?>" <?php //echo ($details_row->work_type == $key) ? "selected" : ""; ?>> <?php echo $val; ?> </option>
			<?php	}
				?>
			</select>
		 <i class="fa fa-caret-down"></i>
		 <span class="err" id="err_worktype_<?php echo $row_num; ?>"> </span>
		</div>
	  </div>

	  <div class="col-md-6">
		<div class="form-group">
			<input class="form-control dateClass" id="fromDate_<?php echo $row_num; ?>" placeholder="From Date (dd-mm-yyyy)" name="fromDate[]" type="text" required>
			<span class="err" id="err_fromDate_<?php echo $row_num; ?>"> </span>
		</div>
	  </div>

	  <div class="col-md-6">
		<div class="form-group">
			<input class="form-control dateClass" id="toDate_<?php echo $row_num; ?>" placeholder="To Date (dd-mm-yyyy)" name="toDate[]" type="text" required>	
			<span class="err" id="err_toDate_<?php echo $row_num; ?>"> </span>
		</div>
	  </div>


	 


</div>

		



	
	
		
		
	</div>
<?php } ?>


<script>
$(function () {

		
    $('.dateClass').datepicker({
            format: "dd-mm-yyyy"
        });
               
	});
</script>
<!--####################################################################################################################### -->
<!--####################################################################################################################### -->
<!--####################################################################################################################### -->
<!--####################################################################################################################### -->
<!--####################################################################################################################### -->
<!--####################################################################################################################### -->
<!--####################################################################################################################### -->
<!--####################################################################################################################### -->
<!--####################################################################################################################### -->
<!--####################################################################################################################### -->
<!--####################################################################################################################### -->
