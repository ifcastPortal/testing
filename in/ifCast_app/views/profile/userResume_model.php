<input type="hidden" id="resume_id" name="resume_id" value="<?php echo $resume_id; ?>">
<input type="hidden" id="editDetails" name="editDetails" value="<?php echo $editDetails; ?>">
<?php 
	if($editDetails == "userResume")
	{
?>
		<div class="row">
			<div class="form-group col-md-12 col-sm-12 col-xs-12">
				<div class="col-sm-12">
				 <label for="prevJobCompany">Resume Title:</label>
				 
					<div class="input-group mb-3">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fa fa-user" aria-hidden="true"></i></span> 
						</div>
						<input class="form-control" id="title" placeholder="Resume Title" name="title" type="text" value="<?php echo $userResume->title; ?>">
					</div>
					<span class="err" id="err_title"> </span>
				</div>
			</div>
			
		</div>	
		<div class="row">	
			<div class="form-group col-md-12 col-sm-12 col-xs-12">
				<label class="control-label col-sm-2" for="confirm_password">Resume:</label>
				<div class="col-sm-10">	
					
						<input type="file" class="form-control" id="resume" name="resume" onChange="check_fileType('resume', 'doc');">
					
					<span class="err" id="err_resume"> </span>
				</div>
			</div>
		</div>
<?php 
	}
	else
	{
?>
		<div class="row">
			<div class="form-group col-md-12 col-sm-12 col-xs-12">
				<div class="col-sm-12">
				<label for="profile_summary">Profile Summary:</label>
					<div class="input-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></span> 
						</div>
						<textarea class="form-control" id="profile_summary" placeholder="Profile Summary" name="profile_summary" rows="3"><?php echo $userResume->profile_summary; ?></textarea>
											
					</div>
					<span class="err" id="err_profile_summary"> </span>
				</div>
			</div>
			
		</div>
	<?php } ?>