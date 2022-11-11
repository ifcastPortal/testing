<div class="row">
				<div class="col-12">
					<br>
					<h6 class="mb-3">Top Jobs</h6>
				</div>
				<?php 
							$jobcount = 1;
							if(!empty($posted_jobs))
							{
								foreach($posted_jobs as $jobs)
								{	
		
									if($jobcount++ <= 4)
									{
							?>
		
				<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
					<a href="guestuser/details/<?php echo $jobs->jobpost_id; ?>" target="_blank" class="ifcast-style-joblink">
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
									<h5 class="ifcast-style-lineclamp-1" data-toggle="tooltip" title="Full company name here"
										data-placement="bottom"><i class="fa fa-building"></i>&nbsp;
										<?php echo $jobs->company_name; ?>
									</h5>
								</div>
		
								<div class="col-7">
									<div class="row text-right">
										<div class="col-4">
											<h5 class="ifcast-style-lineclamp-1" data-toggle="tooltip" title="Experience here"
												data-placement="bottom"><i class="fa fa-suitcase"></i>&nbsp;
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
									<p class="pr-3 mb-2 ifcast-style-color-blue">Posted on:
										<?php echo date('d-M-Y', strtotime($jobs->jobPostDate)); ?></p>
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
		
		
				
		
				<div class="col-12 mt-2 mb-4">
					<a href="guestuser/alljobs" class="btn btn-primary" target="_blank">More Jobs</a>
				</div>
		
			</div>