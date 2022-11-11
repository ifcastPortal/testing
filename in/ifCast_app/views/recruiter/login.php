<!-- Breadcrumb -->
<div class="alice-bg py-5">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="breadcrumb-area">
					<h1>Login as Enabler</h1>
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="#">Fill up the form and start posting for free</a></li>
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

<div class="padding-top-90 access-page-bg">
	<div class="container mt-5">
		<div class="row"  >
			<div class="col-xl-4 col-md-6" style="background-color:#e5ffff ;">
				<div class="padding-top-60 padding-bottom-60 access-form">

					<div id="login_error" class="error">&#9888 Oops, Please enter valid "username' or 'Password'
					</div>
					<div id="forgotpassword_success" class="success"></div>


					<form name="frm_login" id="frm_login" method="post" action="" onSubmit="return validateForm();">
						<input type="hidden" name="login" id="login" value="user_login">



						<div class="form-group">
							<label for="" style="color:#445578; font-weight:550; font-size:13px; line-height:18px;">Email id / Username</label>
							<input type="email" class="form-control" id="username" placeholder="Enter Email Id" name="username" required>

							<span class="err" id="err_username"> </span>
						</div>

						<div class="form-group">
							<label for="" style="color:#445578; font-weight:550; font-size:13px; line-height:18px;">Password</label>
							<input type="password" class="form-control" id="password" placeholder="Enter Password" name="password" required>

							<span class="err" id="err_password"> </span>
						</div>

						<div class="more-option">
							<div class="mt-0 terms">
								<input class="custom-radio" type="checkbox" id="radio-4" name="termsandcondition">
								<label for="radio-4">
									<span class="dot"></span> Remember Me
								</label>
							</div>

							<a style="cursor:pointer;" data-toggle="modal" data-target="#forgotpasswordModal">Forget Password?</a>
						</div>
						<span class="err" id="err_checked"> </span>


						<button type="submit" class="button primary-bg btn-block" name="user_login">
							Login
						</button>


					</form>


					<div class="shortcut-login">


						<p>Don't have an account? <a href="<?php echo base_url(); ?>recruiter/registration">Register</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<!-- ------------ Model ---------------------->
<div class="modal fade" id="forgotpasswordModal" tabindex="-1" role="dialog" aria-labelledby="modelHeader" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="modelHeader">Reset Password</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form id="forgotpassword_modelForm" name="forgotpassword_modelForm" action="<?php echo site_url('recruiter/login/reset_password'); ?>" method="post">
				<div class="row">
					<div class="form-group col-md-12 col-sm-12 col-xs-12">
						<div class="col-sm-12">
							<label for="user_email">Enter Your Username:</label>
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text"><i class="fa fa-envelope" aria-hidden="true"></i></span>
								</div>
								<input type="text" name="user_email" id="user_email" placeholder="Enter Your Email-id" class="form-control" autocomplete="off">
							</div>
							<span class="err" id="err_user_email"> </span>
						</div>
					</div>
					<div class="col-md-12">
						<div class=" d-flex modal-footer">
							<button class="btn btn-primary" onclick="return check_userEmail()">
								<i class="fa fa-paper-plane" aria-hidden="true"></i> Reset Password
							</button>
							<span class="loader" id="resetPass_loader">
								&nbsp; <i class="fa fa-spinner fa-spin" style="font-size:20px; color:green;"></i>
							</span>

							<button type="button" id="closePop_up" class="btn btn-danger btn-md" data-dismiss="modal"> <i class="fa fa-times" aria-hidden="true"></i> Close</button>

							<span class="err" id="err_buttons"> </span>
						</div>
					</div>
			</form>
		</div>
	</div>
</div>
</div>

<script>
	var base_url = "<?php echo base_url(); ?>";
	var $ = jQuery;

	function validateForm() {
		$(".err").stop().fadeOut();
		$(".error").stop().fadeOut();

		var username = $("#username").val();
		if (username.length == 0) {
			$("#err_username").fadeIn(1000);
			$("#err_username").html("&#9888 Oops, Please enter your Username.");
			return false;
		}

		var password = $("#password").val();
		if (password.length == 0) {
			$("#err_password").fadeIn(1000);
			$("#err_password").html("&#9888 Oops, Please enter your password.");
			return false;
		}

		if (!$('#radio-4').is(':checked')) {
			$("#err_checked").fadeIn(1000);
			$("#err_checked").html("&#9888 Oops, Please accept remember me.");
			return false;
		} //[VINBO] ADDED THIS CODE

		var frmData = new FormData($('#frm_login')[0]);
		$("#login_loader").show();
		$.ajax({
			url: base_url + "recruiter/login",
			dataType: "json",
			data: frmData,
			type: "POST",
			success: function(data) {
				switch (data) {
					case 0:
						$("#login_success").fadeIn(1000);
						$("#login_success").html("&#9888 login successfully Done.");

						window.location.href = base_url + "recruiter/registration/verify_otp"; //[VINBO] REMOVED IN URL /recruiter/profile
						break;
					case 1:
						$("#login_error").fadeIn(1000);
						$("#login_error").html("&#9888 Oops, Username should not be blank.");
						break;
					case 2:
						$("#login_error").fadeIn(1000);
						$("#login_error").html("&#9888 Oops, Password should not be blank.");
						break;
					case 3:
						$("#login_error").fadeIn(1000);
						$("#login_error").html("&#9888 Oops, Please enter a correct username.");
						break;
					case 4:
						$("#login_error").fadeIn(1000);
						$("#login_error").html("&#9888 Oops, Please enter a correct Password.");
						break;
				}

				$(".loader").hide();

				return false;
			},
			error: function(e) {

				$("#err_login").fadeIn(1000);
				$("#err_login").html("&#9888 Oops, Error occured while login, Please try again .");
				$(".loader").hide();
				return false;
			},
			processData: false,
			contentType: false,
			cache: false,
		});

		return false;

	}

	//[VINBO] ADDED THIS FUNCTION
	function check_userEmail() {
		

		$(".err").stop().fadeOut();
		$(".error").stop().fadeOut();
		$(".success").stop().fadeOut();

		var email = $("#user_email").val();
		if (email.length == 0) {
			$("#err_user_email").fadeIn(1000);
			$("#err_user_email").html("&#9888 Oops, Username/Email is required.");
			return false;
		} else
		if (email.trim != "") {
			var goodEmail = email.match(
				/\b(^(\S+@).+((\.com)|(\.net)|(\.edu)|(\.mil)|(\.gov)|(\.org)|(\.info)|(\.in)|(\.biz)|(\.aero)|(\.coop)|(\.museum)|(\.name)|(\.pro)|(\..{2,2}))$)\b/gi
			);
			if (!goodEmail) {

				$("#err_user_email").fadeIn(1000);
				$("#err_user_email").html("&#9888 Oops, Invalid email format.");
				return false;
			}
		}
	}

	//[VINBO] COMMETNT THIS FUNCTION

	// function check_userPassword() {
	// 	$(".err").stop().fadeOut();
	// 	$(".error").stop().fadeOut();
	// 	$(".success").stop().fadeOut();

	// 	var email = $("#user_email").val();
	// 	if (email.length == 0) {
	// 		$("#err_user_email").fadeIn(1000);
	// 		$("#err_user_email").html("&#9888 Oops, Username is required.");
	// 		return false;
	// 	} else
	// 	if (email.trim != "") {
	// 		var goodEmail = email.match(
	// 			/\b(^(\S+@).+((\.com)|(\.net)|(\.edu)|(\.mil)|(\.gov)|(\.org)|(\.info)|(\.in)|(\.biz)|(\.aero)|(\.coop)|(\.museum)|(\.name)|(\.pro)|(\..{2,2}))$)\b/gi
	// 		);
	// 		if (!goodEmail) {

	// 			$("#err_user_email").fadeIn(1000);
	// 			$("#err_user_email").html("&#9888 Oops, Invalid email format.");
	// 			return false;
	// 		}
	// 	}

	// 	var new_password = $("#new_password").val();
	// 	var confirm_password = $("#confirm_password").val();

	// 	if (new_password.length == 0) {
	// 		$("#err_new_password").fadeIn(1000);
	// 		$("#err_new_password").html("&#9888 Oops, Password is required.");
	// 		return false;
	// 	}

	// 	if (confirm_password.length == 0) {
	// 		$("#err_confirm_password").fadeIn(1000);
	// 		$("#err_confirm_password").html("&#9888 Oops, Confirm password is required.");
	// 		return false;
	// 	}

	// 	if (new_password != confirm_password) {
	// 		$("#err_confirm_password").fadeIn(1000);
	// 		$("#err_confirm_password").html("&#9888 Oops, New Password and Confirm password not matched.");
	// 		return false;
	// 	}
	// 	//alert(299);
	// 	$("#btn_resetPass").hide();
	// 	$("#resetPass_loader").fadeIn(800);

	// 	$.ajax({
	// 		url: base_url + "login/forgotPassword",
	// 		dataType: "json",
	// 		data: {
	// 			'user_email': email,
	// 			'new_password': new_password,
	// 			'user_type': 2
	// 		},
	// 		type: "POST",
	// 		success: function(data) {
	// 			if (data == 1 || data == '1') {
	// 				$("#forgotpassword_success").fadeIn(1000);
	// 				$("#forgotpassword_success").html(" Your Password reset successfully done.");
	// 				$("#forgotpassword_success").fadeOut(18000);


	// 				$('#closePop_up').click();
	// 				$('.loader').hide();
	// 				$("#btn_resetPass").fadeIn(1000);
	// 				$('#forgotpassword_modelForm')[0].reset();
	// 			} else {
	// 				$("#is_error").val("forgotpassword_error");
	// 				$("#forgotpassword_error").fadeIn(1000);
	// 				$("#btn_resetPass").fadeIn(1000);
	// 				$("#forgotpassword_error").html("&#9888 Oops, Something went wrong, your Username not matched with database.");
	// 				$('.loader').hide();
	// 				return false;
	// 			}
	// 		},
	// 		error: function(e) {
	// 			$('.loader').hide();
	// 			$("#btn_resetPass").fadeIn(1000);
	// 			$("#is_error").val("forgotpassword_error");
	// 			$("#forgotpassword_error").fadeIn(1000);
	// 			$("#forgotpassword_error").html("&#9888 Oops, Error occured in email verification proccess, Please try again .");
	// 			return false;
	// 		}
	// 	});
	// }
</script>