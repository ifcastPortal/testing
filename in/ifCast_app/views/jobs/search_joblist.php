<?php 
	
	if(!empty($posted_jobs))
	{
		foreach($posted_jobs as $jobs)
		{

	?>


	  <div class="job-list">
		<div class="thumb">
		  <a href="#">
			<!-- <img src="images/job/company-logo-8.png"  alt=""> -->
			
			<?php 
				$img_url = ($jobs->comp_logo) ? "/assets/uploads/company_logo/".$jobs->comp_logo : "assets/images/job/company-logo-9.png";
			?>
			<img src="<?php echo $img_url; ?>" alt="" width="100%" class="img-fluid">


		  </a>
		</div>
		<div class="body">
		  <div class="content">


			<?php
				$jobtitle_trim = $jobs->job_title;
				$jobtitle_trim = character_limiter($jobtitle_trim, 25);

				
			?>

			<h4><a href="jobs/details/<?php echo $jobs->jobpost_id; ?>" target="_blank" title="<?php echo $jobs->job_title; ?>"><?php echo $jobtitle_trim; ?></a></h4>
			<div class="info">

			<?php
				$company_name_trim = $jobs->company_name;
				$company_name_trim = character_limiter($company_name_trim, 25);

				
			?>

			  <span class="company"><a href="#"><i data-feather="briefcase"></i><?php echo $company_name_trim; ?></a></span>
			  <span class="office-location"><a href="#"><i data-feather="map-pin"></i><?php 
				$y=0;
				//echo "<pre> ===> "; print_r($jobs); exit;
				if($jobs->city_location1)
				{
					$y++;
				
					echo $jobs->city_location1;
				} 
				if($jobs->city_location2)
				{
					if($y++ > 0)
						echo ", ";
				
					echo $jobs->city_location2;
				} 
				if($jobs->city_location3)
				{
					if($y++ > 0)
						echo ", ";
				
					echo $jobs->city_location3;
				} 
				?> </a></span>


				<?php echo $jobs->prefferedLocation ?>
				
			  <!-- <span class="job-type temporary text-capitalize"><a href="#"><i data-feather="clock"></i><?php echo $jobs->job_type; ?> Time</a></span> -->
			  <span class="job-type temporary text-capitalize"><a href="#"><i data-feather="clock"></i><?php echo $jobs->min_experience; ?>-<?php echo $jobs->max_experience; ?> Years</a></span>

			  
			</div>
		  </div>
		  <div class="more">
			<div class="buttons">
			  <a href="jobs/details/<?php echo $jobs->jobpost_id; ?>" class="button" >View details</a>
			  <a href="jobs/details/<?php echo $jobs->jobpost_id; ?>" class="favourite"><i data-feather="heart"></i></a>
			</div>
			<p class="deadline">Posted on: <?php echo date('d-M-Y', strtotime($jobs->jobPostDate)); ?></p>
		  </div>
		</div> 
	  </div>
	  
  <?php 
	} ?>
	
	<div class="job-list">
		<div class="">
		 
		</div>
		<div class="body">
		  <div class="content">
			<h4 style="color:red;">

			</h4>
			<div class="info">
			 
			</div>
		  </div>
		  <div class="more">
			<div class="buttons">
			<?php echo $pagArr['pagLink']; ?>
			</div>
			<p class="deadline"> 
				<span class="loader" id="loader_pegination">
					<i class="fa fa-spinner fa-pulse fa-3x fa-fw" style="font-size:17px;"></i>
				</span> 
			</p>
		  </div>
		</div> 
	  </div>
 
<?php }
else
{
	?>
	 <div class="job-list">
		<div class="thumb">
		 
		</div>
		<div class="body">
		  <div class="content">
			<h4 style="color:red;">
				Oops, No Jobs Found.!
			</h4>
			<div class="info">
			 
			</div>
		  </div>
		  <div class="more">
			<div class="buttons">
			
			</div>
			<p class="deadline"> </p>
		  </div>
		</div> 
	  </div>
<?php	
}

?>

	  
		<input type="hidden" name="page_limit" id="page_limit" value="<?php echo $limit; ?>">
		<input type="hidden" name="page_no" id="page_no" value="<?php echo $page; ?>">
		
	<script>
	var page_limit = $("#page_limit").val();
	var page_no = $("#page_no").val();
	
	var showingCount = page_limit * page_no;
	var total_records = <?php echo $total_records; ?> * 1;
	
	if(showingCount >= total_records)
		showingCount = total_records;
	//alert(showingCount);
	$("#showingCount").html("Showing "+showingCount+" of "+total_records+" Jobs");
	</script>
	
		