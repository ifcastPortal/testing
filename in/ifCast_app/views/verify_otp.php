<!-- Breadcrumb -->
<div class="alice-bg py-5">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="breadcrumb-area">
					<h1>Verify OTP</h1>
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item">Please verify mobile and email id.</li>
						</ol>
					</nav>

				</div>
			</div>
			<div class="col-md-6">
				<div class="breadcrumb-form">
					<!-- <form action="#">
			  <input type="text" placeholder="Enter Keywords">
			  <button><i data-feather="search"></i></button>

			 
			</form> -->
					<a href="https://www.ifieldsmart.com"><img src="<?php echo base_url(); ?>assets/images/logostrip.svg" alt="" width="90%">
						<p class="text-right">Know more about these products</p>
					</a>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Breadcrumb End -->


<body>

	<div class="vector-bg">
		<section class="container" style="position: relative;overflow:hidden">
			<div class="row ">
				<div class="offset-xl-2 col-xl-8 offset-lg-2 col-lg-8 offset-md-1 col-md-10 col-sm-12">
					<div class="ifcast-style-card-1">
						<div class="loader" id="verify_loader">
							<div class="load-bar">
								<div class="bar"></div>
								<div class="bar"></div>
								<div class="bar"></div>
							</div>
						</div>
						<!-- <div class="row">
							<div class="offset-xl-4 col-xl-4 offset-lg-2 col-lg-8 offset-md-2 col-md-8 col-sm-12">
								<img src="<?php echo base_url(); ?>assets/images/ifcast-logo.svg" alt="" width="80px"
									class="text-center m-auto d-block">
							</div>
						</div> -->

						<br>
						<br>

						<div class="access-form">
							<form name="frm_verifyOtp" id="frm_verifyOtp" action="" onSubmit="return verify_emaiMobOTP();">
								<div class="row">
									<div id="otp_error" class="error col-sm-12"></div>
									<div id="otp_success" class="success col-sm-12"></div>
								</div>

								<div class="row">
									<div class="form-group col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">

										<img class="my-4 text-center d-block m-auto" src="<?php echo base_url(); ?>assets/images/otpmobile.gif" width="60%" style="border:1px solid #10abba;border-radius: 500px;">



										<input type="text" class="form-control" id="mob_otp" placeholder="Mobile OTP" name="mob_otp">

										<button type="button" class="button primary-bg" onclick="resend_otp('mob_otp');">
											Resend
										</button>
										
										<span class="loader" id="mob_otp_loader">
											&nbsp; <i class="fa fa-spinner fa-spin" style="font-size:20px; color:green;"></i>
										</span>

										<span class="err d-block" id="err_name"> </span>
									</div>


									<div class="form-group col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
										<img class="my-4 text-center d-block m-auto" src="<?php echo base_url(); ?>assets/images/otpemail.gif" width="60%" style="border:1px solid #10abba;border-radius: 500px;">

										<input type="text" class="form-control" id="email_otp" placeholder="Email OTP" name="email_otp">

										<div class="row">

											<div class="col-12">
												<button type="button" class="button primary-bg" onclick="resend_otp('email_otp');">

													Resend
												</button>


												<span class="loader" id="email_otp_loader">
													&nbsp; <i class="fa fa-spinner fa-spin" style="font-size:20px; color:green;"></i>
												</span>
												&nbsp;
											</div>
											<span class="err d-block mt-3" id="err_email_otp"> </span>
										</div>

									</div>
								</div>
								<hr>
								<div class="row">
									<div class="col-md-12 col-sm-12 col-xs-12">
										<div class="input-group">
											<button type="submit" class="button primary-bg">
												Verify Both
											</button>

											<button type="button" class="button primary-bg ml-2" onclick="verify_later('later');">
												Verify Email Later
											</button>


											<span class="loader" id="verify_loader">
												&nbsp; <i class="fa fa-spinner fa-spin" style="font-size:20px; color:green;"></i>
											</span>
										</div>
										<label class="control-label col-sm-2" for="Submit"></label>
									</div>
								</div>

							</form>

						</div>

					</div>
				</div>
			</div>
		</section>
	</div>

</body>

</html>
<script>
	function verify_later() {
		window.location.href = base_url + "profile/";

		verify_emaiMobOTP(1);
	}

	function resend_otp(OTP) {

		$(".err").stop().fadeOut();
		$(".error").stop().fadeOut();
		$(".success").stop().fadeOut();
		$("#" + OTP + "_loader").show();
		$.ajax({
			url: base_url + "profile/resend_otp",
			dataType: "json",
			data: {
				'resendOTP': OTP
			},
			type: "POST",
			success: function(data) {
				switch (data) {
					case 0:
						$("#otp_error").fadeIn(1000);
						$("#otp_error").html("&#9888 Oops, OTP not send properly, Please try again .");
						$("#otp_error").fadeOut(15000);
						break;
					case 1:
						$("#otp_success").fadeIn(1000);
						$("#otp_success").html("&#9888 OTP send on your registered mobile number.");
						$("#otp_success").fadeOut(15000);
						break;
					case 2:
						$("#otp_success").fadeIn(1000);
						$("#otp_success").html("&#9888  OTP send on your registered Email id.");
						$("#otp_success").fadeOut(15000);
						break;

				}

				$(".loader").hide();
				return false;

			},
			error: function(e) {
				$("#otp_error").fadeIn(1000);
				$("#otp_error").html("&#9888 Oops, Error occured in resend OTP, Please try again .");

				$(".loader").hide();
				$("#otp_error").fadeOut(12000);
				return false;
			}
		});

	}

	function verify_emaiMobOTP(verify_later = 0) {

		$(".err").stop().fadeOut();
		$(".error").stop().fadeOut();
		$(".success").stop().fadeOut();

		var mob_otp = $("#mob_otp").val();
		if (mob_otp.length == 0) {
			$("#err_mob_otp").fadeIn(1000);
			$("#err_mob_otp").html("&#9888 Oops, Mobile OTP is required.");
			return false;
		}

		if (verify_later == 0) {
			var email_otp = $("#email_otp").val();
			if (email_otp.length == 0) {
				$("#err_email_otp").fadeIn(1000);
				$("#err_email_otp").html("&#9888 Oops, Email OTP is required.");
				return false;
			}
		}


		$("#verify_loader").show();
		$.ajax({
			url: base_url + "profile/ajax_verifyOtp",
			dataType: "json",
			data: {
				'email_otp': email_otp,
				'mob_otp': mob_otp,
				'verify_later': verify_later
			},
			type: "POST",
			success: function(data) {
				switch (data) {
					case 0:
						window.location.href = base_url + "profile";
						break;
					case 1:
						$("#otp_error").fadeIn(1000);
						$("#otp_error").html("&#9888 Oops, Email-otp not matched.");
						break;
					case 4:
						$("#otp_error").fadeIn(1000);
						$("#otp_error").html("&#9888 Oops, Mobile-otp not matched.");
						break;
					case 2:
						$("#otp_error").fadeIn(1000);
						$("#otp_error").html("&#9888 Oops, Email-otp session expired.");
						break;
					case 3:
						$("#otp_error").fadeIn(1000);
						$("#otp_error").html("&#9888 Oops, OTP records not found in database.");
						break;
				}
				$(".loader").hide();
				return false;

			},
			error: function(e) {
				$(".loader").hide();
				$("#otp_error").fadeIn(1000);
				$("#otp_error").html("&#9888 Oops, Error occured in verify OTP, Please try again .");
				return false;
			}
		});

		return false;
	}
</script>