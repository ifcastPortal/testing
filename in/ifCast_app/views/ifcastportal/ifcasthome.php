<div class="ifcast-style-position-leftcenter ifcast-style-width-big">
	<?php  $this->load->view('adviews/dreamerregister', $data);	 ?>
	<?php  $this->load->view('adviews/enablerregister', $data);	 ?>

</div>

<div class="ifcast-style-position-rightcenter ifcast-style-width-small">
	<?php  $this->load->view('adviews/companiessmall1', $data);	 ?>
</div>




<!-- end cont stats -->


<div class="bd-example">
	<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
	
		<div class="carousel-inner">
			<div class="carousel-item active" style="height:500px;">
				<video autoplay="" id="myVideo3" style="width:100%" controls="" muted="" loop=""
					style="box-shadow: 0 0 12px 0.1rem rgba(12, 188, 211, 0.342) !important;">
					<source src="http://consultancy.ifcast.com/assets/videos/intro-ifcast.mp4" type="video/mp4">Your
					browser does
					not support
					HTML5
					video..
				</video>
				<div class="carousel-caption d-none d-md-block">
					<div class="container">
						<div class="row mt-5 text-center">
							<div class="col-12">
								<?php  $this->load->view('ifcastportal/jobsearchform', $data);	 ?>
							</div>

						</div>
					</div>

				</div>
			</div>


		</div>

	</div>
</div>



<!-- <div class="vector-vd" style="min-height: 500px;">
	<section class="container" style="position: relative;overflow:hidden">
	</section>
</div> -->

<div class="container">
	<hr size="3">
	<div class="row">
		<div class="col-12">
			<h6 class="mb-3">Top Jobs</h6>
		</div>
		<?php 
					
					if(!empty($posted_jobs))
					{
						foreach($posted_jobs as $jobs)
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
				?>


		<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
			<a href="profile/jobdetail" target="_blank" class="ifcast-style-joblink">
				<div class="ifcast-style-card-1 ifcast-style-jobcard mb-3">
					<div class="row" style="margin-left:-25px;">
						<div class="col-10 text-left">
							<div class="ifcast-style-jobtitle">
								<h3 class="mb-0 ifcast-style-lineclamp-1">Jr. & Sr. PHP Developer & Web
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
							<h5 class="ifcast-style-lineclamp-1" data-toggle="tooltip" title="Full company name here"
								data-placement="bottom"><i class="fa fa-building"></i>&nbsp;Company name pvt. ltd. onkar
								ghule
								onkar ghule </h5>
						</div>

						<div class="col-7">
							<div class="row text-right">
								<div class="col-4">
									<h5 class="ifcast-style-lineclamp-1" data-toggle="tooltip" title="Experience here"
										data-placement="bottom"><i class="fa fa-suitcase"></i>&nbsp;
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
								Mumbai, Nashik, Pune Mumbai, Nashik, Pune Mumbai, Nashik, Pune Mumbai,
								Nashik, Pune Pune Mumbai, Nashik, Pune Pune Mumbai, Nashik, Pune</h5>
						</div>
					</div>

					<div class="row mb-2">
						<div class="col-12 text-left">
							<h5 class="ifcast-style-lineclamp-3"><i class="fa fa-file-text"></i>&nbsp;
								Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
								veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
								commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
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
								<h6 class=" mb-0"><i class="fa fa-money"></i>&nbsp;&nbsp;33,10,000 to
									33,20,000</h6>
							</div>
						</div>
					</div>
				</div>
			</a>
		</div>

		<div class="col-12 mt-2 mb-4">
			<a href="profile/alljobs" class="btn btn-primary" target="_blank">More Jobs</a>
		</div>

	</div>


	<hr size="3">
	<div class="row">

		<div class="col-12">
			<h5 class="mb-3">Bored of repetative interviews? Record your interview to get selected in a flash
			</h5>
			<h6 class="mb-3 font-weight-normal">With iFCast's authorized mentors record a interview and get
				selected in a flash. A new process that record your interview for our Recruiter, They judge you
				and you are through</h6>
		</div>

		<div class=" col-xl-4 col-lg-4 mt-5">

			<div class="ifcast-style-card-1 mb-3">
				<h6> Do's during interview</h6>
				<p class="ifcast-style-lineclamp-5">
					Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
					labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
					laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
					voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
					cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</p>

				<div class="row">
					<div class="col-12">
						<button class="btn btn-primary" data-toggle="modal" data-target="#myModal">Read
							more</button>
					</div>
				</div>
			</div>
		</div>

		<div class=" col-xl-4 col-lg-4 d-xl-block d-lg-block d-md-none d-sm-none d-none">
			<img src="<?php echo base_url(); ?>assets/images/characters/char-2.svg" width="100%">
		</div>

		<div class=" col-xl-4 col-lg-4 mt-5">
			<div class="ifcast-style-card-1 mb-3">
				<h6>Dont's during interview</h6>
				<p class="ifcast-style-lineclamp-5">
					Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
					labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
					laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
					voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
					cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</p>

				<div class="row">
					<div class="col-12">
						<button class="btn btn-primary" data-toggle="modal" data-target="#myModal"> View
							All</button>
					</div>
				</div>
			</div>
		</div>


		<div class="col-12 mt-2 mb-4 text-center">
			<a href="profile/alljobs" class="btn btn-primary" target="_blank">Yes, I am interested</a>
		</div>

	</div>

</div>


<div class="vector-bg-2 mt-5" style="height: 100%;">
	<section class="container" style="position: relative;overflow:hidden">
		<div class="row">
			<div class="col-12 text-center">
				<h5 class="mb-3">Our intersting services</h5>
				<h6 class="mb-3">Enabler</h6>
			</div>

			<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 mt-3">
				<div class="ifcast-style-card-1 mb-3 p-3">
					<div class="row mt-2">
						<!-- <div class="col-12">
                                <img src="<?php echo base_url(); ?>assets/images/characters/char-1.gif" width="50%" class="d-block m-auto">
                             </div> -->
						<div class="col-12 text-center">

							<h6>#AccessADreamer</h6>
							<p>Outstanding resume writing services</p>
							<hr size="3">
						</div>
						<hr size="3">
						<div class="col-12 mt-2 mb-1 text-center">
							<a href="profile/alljobs" class="btn btn-primary ifcast-style-bg-white" target="_blank">Know
								more</a>
						</div>
					</div>
				</div>
			</div>

			<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 mt-3">
				<div class="ifcast-style-card-1 mb-3 p-3">
					<div class="row mt-2">
						<!-- <div class="col-12">
                                <img src="<?php echo base_url(); ?>assets/images/characters/char-1.gif" width="50%" class="d-block m-auto">
                             </div> -->
						<div class="col-12 text-center">

							<h6>#LetMePost</h6>
							<p>Outstanding resume writing services</p>
							<hr size="3">
						</div>
						<hr size="3">
						<div class="col-12 mt-2 mb-1 text-center">
							<a href="profile/alljobs" class="btn btn-primary ifcast-style-bg-white" target="_blank">Know
								more</a>
						</div>
					</div>
				</div>
			</div>

			<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 mt-3">
				<div class="ifcast-style-card-1 mb-3 p-3">
					<div class="row mt-2">
						<!-- <div class="col-12">
                                <img src="<?php echo base_url(); ?>assets/images/characters/char-1.gif" width="50%" class="d-block m-auto">
                             </div> -->
						<div class="col-12 text-center">

							<h6>#PickForMe</h6>
							<p>Outstanding resume writing services</p>
							<hr size="3">
						</div>
						<hr size="3">
						<div class="col-12 mt-2 mb-1 text-center">
							<a href="profile/alljobs" class="btn btn-primary ifcast-style-bg-white" target="_blank">Know
								more</a>
						</div>
					</div>
				</div>
			</div>

			<div class="offset-xl-2 offset-lg-2 col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 mt-3">
				<div class="ifcast-style-card-1 mb-3 p-3">
					<div class="row mt-2">
						<!-- <div class="col-12">
                                <img src="<?php echo base_url(); ?>assets/images/characters/char-1.gif" width="50%" class="d-block m-auto">
                             </div> -->
						<div class="col-12 text-center">

							<h6>#BrandMyOrg</h6>
							<p>Outstanding resume writing services</p>
							<hr size="3">
						</div>
						<hr size="3">
						<div class="col-12 mt-2 mb-1 text-center">
							<a href="profile/alljobs" class="btn btn-primary ifcast-style-bg-white" target="_blank">Know
								more</a>
						</div>
					</div>
				</div>
			</div>


			<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 mt-3">
				<div class="ifcast-style-card-1 mb-3 p-3">
					<div class="row mt-2">
						<!-- <div class="col-12">
                                <img src="<?php echo base_url(); ?>assets/images/characters/char-1.gif" width="50%" class="d-block m-auto">
                             </div> -->
						<div class="col-12 text-center">

							<h6>#BoostMyVacancy</h6>
							<p>Outstanding resume writing services</p>
							<hr size="3">
						</div>
						<hr size="3">
						<div class="col-12 mt-2 mb-1 text-center">
							<a href="profile/alljobs" class="btn btn-primary ifcast-style-bg-white" target="_blank">Know
								more</a>
						</div>
					</div>
				</div>
			</div>
		</div>


		<div class="row mt-5">
			<div class="col-12 text-center">
				<h5 class="mb-3">Our intersting services</h5>
				<h6 class="mb-3">Dreamer</h6>
			</div>

			<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 mt-3">
				<div class="ifcast-style-card-1 mb-3 p-3">
					<div class="row mt-2">
						<!-- <div class="col-12">
                                <img src="<?php echo base_url(); ?>assets/images/characters/char-1.gif" width="50%" class="d-block m-auto">
                             </div> -->
						<div class="col-12 text-center">

							<h6>#BuildMyProfile</h6>
							<p>Outstanding resume writing services</p>
							<hr size="3">
						</div>
						<hr size="3">
						<div class="col-12 mt-2 mb-1 text-center">
							<a href="profile/alljobs" class="btn btn-primary ifcast-style-bg-white" target="_blank">Know
								more</a>
						</div>
					</div>
				</div>
			</div>

			<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 mt-3">
				<div class="ifcast-style-card-1 mb-3 p-3">
					<div class="row mt-2">
						<!-- <div class="col-12">
                                <img src="<?php echo base_url(); ?>assets/images/characters/char-1.gif" width="50%" class="d-block m-auto">
                             </div> -->
						<div class="col-12 text-center">

							<h6>#BoostMyProfile</h6>
							<p>Outstanding resume writing services</p>
							<hr size="3">
						</div>
						<hr size="3">
						<div class="col-12 mt-2 mb-1 text-center">
							<a href="profile/alljobs" class="btn btn-primary ifcast-style-bg-white" target="_blank">Know
								more</a>
						</div>
					</div>
				</div>
			</div>

			<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 mt-3">
				<div class="ifcast-style-card-1 mb-3 p-3">
					<div class="row mt-2">
						<!-- <div class="col-12">
                                <img src="<?php echo base_url(); ?>assets/images/characters/char-1.gif" width="50%" class="d-block m-auto">
                             </div> -->
						<div class="col-12 text-center">

							<h6>#Advisory Service</h6>
							<p>Outstanding resume writing services</p>
							<hr size="3">
						</div>
						<hr size="3">
						<div class="col-12 mt-2 mb-1 text-center">
							<a href="profile/alljobs" class="btn btn-primary ifcast-style-bg-white" target="_blank">Know
								more</a>
						</div>
					</div>
				</div>
			</div>

			<?php  $this->load->view('footer', $data);	 ?>






		</div>



	</section>




</div>


<?php  $this->load->view('layouts/footer_menu', $data);	 ?>

<script>
	var base_url = "<?php echo base_url(); ?>";

	function load_qualification(degreeId, field_id) {
		$("#qualification_id_loader_" + field_id).fadeIn(800);
		$("#qualification_id_icon_" + field_id).hide();
		$("#qualification_id_" + field_id).load(base_url + "profile/load_qualification/" + degreeId);
		setTimeout(function () {
			$(".loader").hide();
			$("#qualification_id_icon_" + field_id).fadeIn(800);
		}, 1500);

	}


	function load_modelForm(modelHeader, table_id, editDetails) {
		$(".err").stop().fadeOut();
		$(".error").stop().fadeOut();
		$(".success").stop().fadeOut();

		$("#modelHeader").html(modelHeader);
		$("#modelBody").html("");
		$("#modelBody").hide();
		$.ajax({
			url: base_url + "profile/load_modelForm",
			dataType: "html",
			data: {
				'id': table_id,
				'editDetails': editDetails
			},
			type: "POST",
			success: function (data) {
				$("#modelBody").fadeIn(1000);
				$("#modelBody").html(data);
				return false;
			},
			error: function (e) {
				$("#modelBody").fadeIn(1000);
				$("#modelBody").html(
					"&#9888 Oops, Error occured while loading form, Please try again .");
				return false;
			}
		});

	}


	function addEdit_details() {
		$(".err").stop().fadeOut();
		$(".error").stop().fadeOut();
		$(".success").stop().fadeOut();
		$(".loader").hide();

		var editDetails = $("#editDetails").val();
		switch (editDetails) {
			case "employment":
				Add_employment(editDetails);
				break;
			case "userResume":
			case "profileSummary":
				Add_userResume(editDetails);
				break;
			case "educationDetail":
				Add_userResume(editDetails);
				break;
			default:
				alert("Work is going on :  update " + editDetails);

		}


		return false
	}

	function Add_userResume(editDetails) {
		var frmData = new FormData($('#modelForm')[0]);
		$("#submit_loader").show();
		$.ajax({
			url: base_url + "profile/update_userResume",
			dataType: "json",
			data: frmData,
			type: "POST",
			success: function (data) {
				if (data == 1 || data == '1') {
					$("#" + editDetails + "_success").fadeIn(1000);
					$("#" + editDetails + "_success").html("&#9888 Record successfully update done.");


					$('#closePop_up').click();
					$('#modelForm')[0].reset();
				} else {
					$("#" + editDetails + "_error").fadeIn(1000);
					$("#err_buttons").fadeIn(1000);
					$("#err_buttons").html("&#9888 Oops, Records not updated Properly, Please try again .");
					$("#" + editDetails + "_error").html(
						"&#9888 Oops, Records not updated Properly, Please try again .");
					return false;
				}
				$(".loader").hide();
				return false;


			},
			error: function (e) {
				$("#" + editDetails + "_error").fadeIn(1000);
				$("#" + editDetails + "_error").html(
					"&#9888 Oops, Error occured while updating records, Please try again .");
				return false;
			},
			processData: false,
			contentType: false,
		});

		return false;
	}

	function Add_employment(editDetails) {
		var frmData = new FormData($('#modelForm')[0]);
		$("#submit_loader").show();
		$.ajax({
			url: base_url + "profile/updated_employment",
			dataType: "json",
			data: frmData,
			type: "POST",
			success: function (data) {
				if (data == 1 || data == '1') {
					$("#" + editDetails + "_success").fadeIn(1000);
					$("#" + editDetails + "_success").html("&#9888 Record successfully update done.");


					$('#closePop_up').click();
					$('#modelForm')[0].reset();
				} else {
					$("#" + editDetails + "_error").fadeIn(1000);
					$("#err_buttons").fadeIn(1000);
					$("#err_buttons").html(
						"<br/>&#9888 Oops, Records not updated Properly, Please try again .");
					$("#" + editDetails + "_error").html(
						"&#9888 Oops, Records not updated Properly, Please try again .");

				}
				$(".loader").hide();
				return false;


			},
			error: function (e) {
				$("#" + editDetails + "_error").fadeIn(1000);
				$("#" + editDetails + "_error").html(
					"&#9888 Oops, Error occured while updating records, Please try again .");
				$(".loader").hide();
				return false;
			},
			processData: false,
			contentType: false,
		});

		return false;
	}
</script>


<script>
	/*
    Carousel
*/
	$('#carousel-example').on('slide.bs.carousel', function (e) {
		/*
		    CC 2.0 License Iatek LLC 2018 - Attribution required
		*/
		var $e = $(e.relatedTarget);
		var idx = $e.index();
		var itemsPerSlide = 5;
		var totalItems = $('.carousel-item').length;

		if (idx >= totalItems - (itemsPerSlide - 1)) {
			var it = itemsPerSlide - (totalItems - idx);
			for (var i = 0; i < it; i++) {
				// append slides to end
				if (e.direction == "left") {
					$('.carousel-item').eq(i).appendTo('.carousel-inner');
				} else {
					$('.carousel-item').eq(0).appendTo('.carousel-inner');
				}
			}
		}
	});
</script>


<script src="assets/js/ifcastjs/weekchart.js"></script>
<script src="assets/js/ifcastjs/ifcast-javascript.js"></script>