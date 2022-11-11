<script>
	var base_url = "<?php echo base_url(); ?>";

$(document).ready(function () {
		$('#city_id').select2({
			placeholder: 'Select at least 3 locations',
			maximumSelectionLength: 3
		});
	});
	
function set_values(id, value)
{
	$("#"+id).val(value);
	$("#page").val(1);
	get_joblist(id+"_"+value);
	
}

function pegination_script(count, page)
{
	var page_limit = $("#page_limit").val();
	$("#page_no").val(page);
	
	$("#limit").val(page_limit);
	$("#page").val(page);
	
	get_joblist("pegination");
	
}

function get_joblist(id)
{
	$("#loader_"+id).show();
	var posted_data=$("#filtration_form").serialize();
	$.ajax({
			url:base_url+"guestuser/search_joblist",						 
			type:"POST",
			dataType: 'html',
			data:posted_data,
			success:function(data)
				{					
					$("#jobList").html(data);
					$(".loader").stop().fadeOut();
				},
			error: function(data)	
				{
					$(".loader").stop().fadeOut();
					//$("#jobList").hide();
					alert(" Oops! error occured while fetching partner leadSource.");	
				}
	});
}
</script>
<?php
	$industries = $this->mainmodel->select_object_result('industry', array('status'=>'1'));
	
	$selectclaus = array('city_id', 'cityName', 'state_id');
	$cities = $this->mainmodel->select_object_result('city', array('status'=>'1', 'state_id'=>'22'), $selectclaus);	
?>
<form name="filtration_form" id="filtration_form" method="post">
 <input type="hidden" name="limit" id="limit" value="10">
 <input type="hidden" name="page" id="page" value="1">
	<div class="selected-options same-pad">
	  <div class="selection-title">
		<h4>You Selected</h4>
		<a href="#">Clear All</a>
	  </div>
	  <ul class="filtered-options">
	  </ul>
	</div>
	<div class="job-filter-dropdown same-pad category">
	  <select class="selectpicker" name="industry_id" id="industry_id" onchange="get_joblist('industry_id');">
		<option value="" selected> Category </option>
		<?php
		
		foreach($industries as $industr_row)
		{	?>
			<option value="<?php echo $industr_row->industry_id; ?>" <?php if($industry_id == $industr_row->industry_id) echo "selected"; ?>><?php echo $industr_row->industry_name; ?></option>
	<?php
		}
		?>
	  </select>
	  
		<span class="loader" id="loader_industry_id">
			<i class="fa fa-spinner fa-pulse fa-3x fa-fw" style="font-size:17px;"></i>
		</span>
	</div>
	<div class="job-filter-dropdown same-pad location">
	  <select class="selectpicker" id="city_id" name="city_id[]" onchange="get_joblist('city_id');">
		<option value="" selected> Location </option>
		<?php
		
		foreach($cities as $row)
		{	?>
		<option value="<?php echo $row->city_id; ?>" <?php if(in_array($row->city_id, $city_id)) echo "selected"; ?>><?php echo $row->cityName; ?></option>
	<?php
		}
		?>
	  </select>
		<span class="loader" id="loader_city_id">
			<i class="fa fa-spinner fa-pulse fa-3x fa-fw" style="font-size:17px;"></i>
		</span>
	</div>
	<div data-id="job-type" class="job-filter job-type same-pad">
	  <h4 class="option-title">Job Type</h4>
	  <ul>
		<li class="full-time"><i data-feather="clock"></i>
			<a onclick="set_values('job_type', 'full');" style="cursor:pointer;" data-attr="Full Time">Full Time</a>
			<span class="loader" id="loader_job_type_full">
				<i class="fa fa-spinner fa-pulse fa-3x fa-fw" style="font-size:17px;"></i>
			</span>
		</li>
		<li class="part-time"><i data-feather="clock"></i>
			<a onclick="set_values('job_type', 'part');" style="cursor:pointer;" data-attr="Part Time">Part Time</a>
			<span class="loader" id="loader_job_type_part">
				<i class="fa fa-spinner fa-pulse fa-3x fa-fw" style="font-size:17px;"></i>
			</span>
		</li>
		<!--
		<li class="freelance"><i data-feather="clock"></i>
			<a onclick="set_jobType('full');" style="cursor:pointer;" data-attr="Freelance">Freelance</a>
		</li>
		<li class="temporary"><i data-feather="clock"></i>
			<a onclick="set_jobType('part');" style="cursor:pointer;" data-attr="Temporary">Temporary</a>
		</li> -->
		<input type="hidden" name="job_type" id="job_type" value="">
	  </ul>
	</div>
	<div data-id="experience" class="job-filter experience same-pad">
	  <h4 class="option-title">Experience (max)</h4>
	  <ul>
		<li>
			<a onclick="set_values('job_experience', 'fresh');" style="cursor:pointer;" data-attr="Fresh">Fresh</a>
			<span class="loader" id="loader_job_experience_fresh">
				<i class="fa fa-spinner fa-pulse fa-3x fa-fw" style="font-size:17px;"></i>
			</span>
		</li>
		<li>
			<a onclick="set_values('job_experience', '1');" style="cursor:pointer;" data-attr="Less than 1 year">Less than 1 year</a>
			<span class="loader" id="loader_job_experience_1">
				<i class="fa fa-spinner fa-pulse fa-3x fa-fw" style="font-size:17px;"></i>
			</span>
		</li>
		<li>
			<a onclick="set_values('job_experience', '2');" style="cursor:pointer;" data-attr="2 Year">2 Year</a>
			<span class="loader" id="loader_job_experience_2">
				<i class="fa fa-spinner fa-pulse fa-3x fa-fw" style="font-size:17px;"></i>
			</span>
		</li>
		<li>
			<a onclick="set_values('job_experience', '3');" style="cursor:pointer;" data-attr="3 Year">3 Year</a>
			<span class="loader" id="loader_job_experience_3">
				<i class="fa fa-spinner fa-pulse fa-3x fa-fw" style="font-size:17px;"></i>
			</span>
		</li>
		<li>
			<a onclick="set_values('job_experience', '4');" style="cursor:pointer;" data-attr="4 Year">4 Year</a>
			<span class="loader" id="loader_job_experience_4">
				<i class="fa fa-spinner fa-pulse fa-3x fa-fw" style="font-size:17px;"></i>
			</span>
		</li>
		<li>
			<a onclick="set_values('job_experience', '5');" style="cursor:pointer;" data-attr="5 Year">5 Year</a>
			<span class="loader" id="loader_job_experience_5">
				<i class="fa fa-spinner fa-pulse fa-3x fa-fw" style="font-size:17px;"></i>
			</span>
		</li>
		<li>
			<a onclick="set_values('job_experience', '6');" style="cursor:pointer;" data-attr="Avobe 5 Years">Avobe 5 Years</a>
			<span class="loader" id="loader_job_experience_6">
				<i class="fa fa-spinner fa-pulse fa-3x fa-fw" style="font-size:17px;"></i>
			</span>
		</li>
	  </ul>
	  <input type="hidden" name="job_experience" id="job_experience" value="">
	</div>
	<div class="job-filter same-pad">
	  <h4 class="option-title">Salary Range</h4>
	  <div class="price-range-slider">
		<div class="nstSlider" data-range_min="0" data-range_max="20" data-cur_min="0" data-cur_max="2">
		  <div class="bar"></div>
		  <div class="leftGrip"></div>
		  <div class="rightGrip"></div>
		  <div class="grip-label">
			<span class="leftLabel"></span>
			<span class="rightLabel"></span>
		  </div>
		</div>
	  </div>
	</div>
	<div data-id="post" class="job-filter post same-pad">
	  <h4 class="option-title">Date Posted</h4>
	  <ul>
		<!--<li><a onclick="set_values('posted_date', '30 days');" style="cursor:pointedata-attr="Last hour">Last hour</a></li> -->
		<li><a onclick="set_values('posted_date', '1 days');" style="cursor:pointer;" data-attr="Last 24 hour">Last 24 hour</a></li>
		<li><a onclick="set_values('posted_date', '7 days');" style="cursor:pointer;" data-attr="Last 7 days">Last 7 days</a></li>
		<li><a onclick="set_values('posted_date', '14 days');" style="cursor:pointer;" data-attr="Last 14 days">Last 14 days</a></li>
		<li><a onclick="set_values('posted_date', '30 days');" style="cursor:pointer;" data-attr="Last 30 days">Last 30 days</a></li>
	  </ul>
	  <input type="hidden" name="posted_date" id="posted_date" value="">
	</div>
	<!-- <div data-id="gender" class="job-filter same-pad gender">
	  <h4 class="option-title">Gender</h4>
	  <ul>
		<li><a href="#" data-attr="Male">Male</a></li>
		<li><a href="#" data-attr="Female">Female</a></li>
	  </ul>
	</div>
	<div data-id="qualification" class="job-filter qualification same-pad">
	  <h4 class="option-title">Qualification</h4>
	  <ul>
		<li><a href="#" data-attr="Matriculation">Matriculation</a></li>
		<li><a href="#" data-attr="Intermidiate">Intermidiate</a></li>
		<li><a href="#" data-attr="Gradute">Gradute</a></li>
	  </ul>
	</div> -->
	
</form>