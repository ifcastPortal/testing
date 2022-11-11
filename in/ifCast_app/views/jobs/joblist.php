
<div class="ifcast-style-position-leftcenter ifcast-style-width-big">
			<?php  $this->load->view('adviews/dreamerservices', $data);	 ?>
	</div>

	<div class="ifcast-style-position-righttop ifcast-style-width-big">
			<?php  $this->load->view('adviews/recordinterview', $data);	 ?>
	</div>

<div class="vector-bg">
	<section class="container" style="position: relative;overflow:hidden">
		<div class="row">
			<div class="col-12">
				<div class="row">
						<div class="col-12">
								<?php  $this->load->view('ifcastportal/jobsearchform', $data);	 ?>
						</div>


						
				</div>

				<div class="row">
						<div class="col-6">
							<?php  $this->load->view('adviews/dreamerregister', $data);	 ?>
						</div>
	
						<div class="col-6">
							<?php  $this->load->view('adviews/enablerregister', $data);	 ?>
						</div>
					</div>
			</div>
		</div>
	</section>
</div>

<div class="container mb-5" style="margin-top:-200px">
	<div class="row">
		<div class="col-12">
			<div class="row">
				<div class="col-12 my-3 text-left">
					<h6>Jobs for you (Dreamer)  | Trending Job (Guest) </h6>
				</div>
				<?php 
					

					$jobcount = 1;


					if(!empty($posted_jobs))
					{
						foreach($posted_jobs as $jobs)
						{	

							if($jobcount++ <= 2)
							{
				?>
							
							<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
								<a href="jobs/details/<?php echo $jobs->jobpost_id; ?>" target="_blank" class="ifcast-style-joblink">
									<div class="ifcast-style-card-1 ifcast-style-jobcard mb-3">
										<div class="row" style="margin-left:-25px;">
											<div class="col-10 text-left">
												<div class="ifcast-style-jobtitle">
													<h3 class="mb-0 ifcast-style-lineclamp-1">
													<?php echo $jobs->job_title; ?>
													</h3>
												</div>
											</div>
											<div class="col-2 text-right mt-2">
												<i style="font-size: 20px; color:#811d0c;" class="fa fa-star" aria-hidden="true"></i>
											</div>

										</div>
										<div class="row mb-2 mt-3">
											<div class="col-5 text-left ">
												<h5 class="ifcast-style-lineclamp-1" data-toggle="tooltip"
													title="Full company name here" data-placement="bottom"><i
														class="fa fa-building"></i>&nbsp;
														<?php echo $jobs->company_name; ?>
													</h5>
											</div>

											<div class="col-7">
												<div class="row text-right">
													<div class="col-4">
														<h5 class="ifcast-style-lineclamp-1" data-toggle="tooltip"
															title="Experience here" data-placement="bottom"><i
																class="fa fa-suitcase"></i>&nbsp;
															<?php echo $jobs->min_experience; ?>-<?php echo $jobs->max_experience; ?> Years
														</h5>
													</div>
													<div class="col-8">
														<h5 class="ifcast-style-lineclamp-1" data-toggle="tooltip"
															title="Locaions Mumbahi nashi pune pune nashik mumhai hello nashik hello here"
															data-placement="bottom"><i class="fa fa-map-marker "></i>&nbsp;
															Mumbai, Nashik</h5>
													</div>
												</div>

											</div>

										</div>
										<div class="row mb-2">
											<div class="col-12 text-left">
												<h5 class="ifcast-style-lineclamp-1"><i class="fa fa-cogs"></i>&nbsp;
													<?php echo $jobs->job_description; ?>
												</h5>
											</div>
										</div>

										<div class="row mb-2">
											<div class="col-12 text-left">
												<h5 class="ifcast-style-lineclamp-3"><i class="fa fa-file-text"></i>&nbsp;
													<?php echo $jobs->about_company; ?></h5>
											</div>
										</div>

										<div class="row" style="margin-right:-40px;">

											<div class="col-2">
											<?php 
												$img_url = ($jobs->comp_logo) ? "/assets/uploads/company_logo/".$jobs->comp_logo : "https://dummyimage.com/600x400/000/fff";
											?>
												<img src="<?php echo $img_url; ?>" alt="" width="100%">
											</div>

											<!-- <div class="col-5 text-center">
											<a href="jobs/details/<?php echo $jobs->jobpost_id; ?>" target="_blank" class="ifcast-style-joblink">
											<button type="button" class="btn btn-success btn-sm">View</button>
											</a>
											</div> -->

											<div class="offset-5 col-5 text-right "> 
												<p class="pr-3 mb-2 ifcast-style-color-blue">Posted on: <?php echo date('d-M-Y', strtotime($jobs->jobPostDate)); ?></p>
												<div class="ifcast-style-jobsalary">
													<h6 class=" mb-0"><i class="fa fa-money"></i>&nbsp;&nbsp;
													<?php 
														if($jobs->is_discloseSalary == '1')
														{
															 echo "Not Disclosed"; 
														}
														else
														{
															echo $jobs->min_ctc; ?>
															to 
													<?php 
														echo $jobs->max_ctc; 
														} ?>
													</h6>
												</div>
											</div>
										</div>
									</div>
								</a>
							</div>
				<?php 	}
					}
				}
				?>
								
								
				<!-- <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
					<a href="profile/jobdetail" target="_blank" class="ifcast-style-joblink">
						<div class="ifcast-style-card-1 ifcast-style-jobcard mb-3">
							<div class="row" style="margin-left:-25px;">
								<div class="col-10 text-left">
									<div class="ifcast-style-jobtitle">
										<h3 class="mb-0 ifcast-style-lineclamp-1">Jr. & Sr. PHP Developer &
											Web
											Designer with 2 years of
											experience</h6>
									</div>
								</div>
								<div class="col-2 text-right mt-2">
									<i style="font-size: 20px;" class="fa fa-star" aria-hidden="true"></i>
								</div>


							</div>
							<div class="row mb-2 mt-3">
								<div class="col-5 text-left ">
									<h5 class="ifcast-style-lineclamp-1" data-toggle="tooltip"
										title="Full company name here" data-placement="bottom"><i
											class="fa fa-building"></i>&nbsp;Company name pvt. ltd. onkar
										ghule
										onkar ghule </h5>
								</div>

								<div class="col-7">
									<div class="row text-right">
										<div class="col-4">
											<h5 class="ifcast-style-lineclamp-1" data-toggle="tooltip"
												title="Experience here" data-placement="bottom"><i
													class="fa fa-suitcase"></i>&nbsp;
												0-3 Years</h5>
										</div>
										<div class="col-8">
											<h5 class="ifcast-style-lineclamp-1" data-toggle="tooltip"
												title="Locaions Mumbahi nashi pune pune nashik mumhai hello nashik hello here"
												data-placement="bottom"><i class="fa fa-map-marker "></i>&nbsp;
												Mumbai, Nashik, Pune Pune Pune Pune</h5>
										</div>
									</div>

								</div>

							</div>
							<div class="row mb-2">
								<div class="col-12 text-left">
									<h5 class="ifcast-style-lineclamp-1"><i class="fa fa-cogs"></i>&nbsp;
										Mumbai, Nashik, Pune Mumbai, Nashik, Pune Mumbai, Nashik, Pune
										Mumbai,
										Nashik, Pune Pune Mumbai, Nashik, Pune Pune Mumbai, Nashik, Pune
									</h5>
								</div>
							</div>

							<div class="row mb-2">
								<div class="col-12 text-left">
									<h5 class="ifcast-style-lineclamp-3"><i class="fa fa-file-text"></i>&nbsp;
										Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
										eiusmod
										tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
										veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
										ea
										commodo consequat. Duis aute irure dolor in reprehenderit in
										voluptate
										velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
										occaecat cupidatat non proident, sunt in culpa qui officia deserunt
										mollit anim id est laborum.</h5>
								</div>
							</div>

							<div class="row" style="margin-right:-40px;">

								<div class="col-2">
									<img src="https://dummyimage.com/600x400/000/fff" alt="" width="100%">
								</div>

								<div class="offset-5 col-5 text-right ">
									<p class="pr-3 mb-2 ifcast-style-color-blue">Posted on: 12-12-2222</p>
									<div class="ifcast-style-jobsalary">
										<h6 class=" mb-0"><i class="fa fa-money"></i>&nbsp;&nbsp;33,10,000
											to
											33,20,000</h6>
									</div>
								</div>
							</div>
						</div>
					</a>
				</div> -->
			
			</div>

			<div class="row">
				<div class="col-12 mt-2 mb-4">
					<a href="profile/joblistpage" class="btn btn-primary" target="_blank">View All</a>
				</div>
			</div>
			<div class="row">
				<div class="col-12 my-3 text-left">
					<h6>Jobs by location</h6>
				</div>
			
					<?php  $this->load->view('ifcastportal/toplocations', $data);	 ?>
		

				<div class="col-12 mt-2 mb-4">
					<a href="profile/jobslocation" class="btn btn-primary" target="_blank">View All</a>
				</div>

				<!-- <div class="col-lg-12 ">
					<div class="ifcast-style-card-1 mb-3">
						<h6>Jobs by designation</h6>
					</div>
				</div>


				<div class="col-lg-12 text-center">
					<div class="ifcast-style-card-1 mb-3">
						By Skill
					</div>
				</div>

				<div class="col-lg-12 text-center">
					<div class="ifcast-style-card-1 mb-3">
						By Company
					</div>
				</div>
				<div class="col-lg-12 text-center">
					<div class="ifcast-style-card-1 mb-3">
						By Category
					</div>
				</div>
				<div class="col-lg-12 text-center">
					<div class="ifcast-style-card-1 mb-3">
						By Recruiter (only in login)
					</div>
				</div> -->
			</div>
		</div>
	</div>
</div>

<?php  $this->load->view('layouts/footer_menu', $data);	 ?>


<script>
	var base_url = "<?php echo base_url(); ?>";
	$(document).ready(function () {

		$('#user_dob').datepicker({
			format: "dd/mm/yyyy"
		});

		$('#preffered_location').select2({
			placeholder: 'Select at least 3 preffered locations',
			maximumSelectionLength: 3
		});

	});

</script>
