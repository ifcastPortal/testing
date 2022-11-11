<script type="text/javascript">
	var widgetId1;
	var onloadCallback = function() {
		widgetId1 = grecaptcha.render('example1', {
			'sitekey': '6LenV8EUAAAAAK-Bm5mv-W4twiD2WUqYjYm0I1gh',
			'theme': 'light'
		});

	};
</script>




<!-- Breadcrumb -->
<div class="alice-bg py-5">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="breadcrumb-area">
					<h1>Register as Enabler</h1>
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="#">Enabler Registration</a></li>
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



<div class="padding-top-60 access-page-bg">
	<div class="container">
		<div class="row">
			
			<div class="col-lg-6 col-md-6" style="background-color:#e5ffff ;">
				<div class="access-form" style="padding:4rem 0 2rem 0;">
					<input type="hidden" name="is_error" id="is_error" value="">

					<form name="frm_registration" id="frm_registration" method="post" enctype="multipart/form-data" action="" onSubmit="return validateForm();">

						<input type="hidden" name="action" id="action" value="add">


						<div class="form-group">
						<label for="" style="color:#445578; font-weight:550; font-size:13px; line-height:18px;">Full Name</label>
							<input type="text" class="form-control" id="name" placeholder="What is your full name?" name="name" required>
							<span class="err" id="err_name"> </span>
						</div>



						<div class="form-group">
						<label for="" style="color:#445578; font-weight:550; font-size:13px; line-height:18px;">Mobile Number</label>
						     <span style="position:absolute; top:18.5%; left:16px; transition:inherit; transform:transletY(-49%); font-size:17px; line-height:22px;">+91</span>
							<input type="text" class="form-control" style="padding-left:55px;" id="phone" placeholder="Enter your mobile" name="phone" maxlength="10" pattern="[0-9]*" required>
							<span class="err" id="err_phone"> </span>

						</div>


						<div class="form-group">
						<label for="" style="color:#445578; font-weight:550; font-size:13px; line-height:18px;">Email Id</label>
							<input type="email" class="form-control" id="email" placeholder="Tell us your email Id" name="email" onChange="check_email(this.value);" required>
							<span class="err" id="err_email"> </span>
						</div>

						<div class="form-group">
						<label for="" style="color:#445578; font-weight:550; font-size:13px; line-height:18px;">Password</label>
							<input type="password" class="form-control" id="password" placeholder="Create your password for account" name="password" onChange="checkPassword('1');" required>
							<span class="err" id="err_password"> </span>
						</div>

						<div class="form-group">
						<label for="" style="color:#445578; font-weight:550; font-size:13px; line-height:18px;">Confirm Password</label>
							<input type="password" class="form-control" id="confirm_password" placeholder="Confirm your password" name="confirm_password" onChange="checkPassword('2');" required>
							<span class="err" id="err_confirm_password"> </span>
						</div>




						<div class="form-group col-md-12 col-sm-12 col-xs-12">
							<label class="control-label col-sm-2" for="Submit"></label>

							<div id="example1"></div>
							<script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit" async defer> </script>
							<span class="err" id="err_recaptcha"> </span>


						</div>


						<div class="more-option terms">
							<div class="mt-0 terms">
								<input class="custom-radio" type="checkbox" id="radio-4" name="termsandcondition" checked>
								<input class="custom-radio" type="checkbox" id="termsConditions" name="termsConditions">
								<label for="termsConditions">
									<span class="dot"></span> I accept the <a href="" data-toggle="modal" data-target="#exampleModalCenter">Terms and Conditions </a>
								</label>
								<span class="err" id="err_termsConditions"> </span>
							</div>
						</div>



						<div class="input-group">
							<input type="submit" name="register" id="register" value="Register" class="button primary-bg btn-block">

							<span class="loader" id="register_loader">
								&nbsp; <i class="fa fa-spinner fa-spin" style="font-size:20px; color:green;"></i>
							</span>


							<span class="err" id="err_register"> </span>
						</div>


					</form>


					<div class="shortcut-login">
						<!-- <span>Or connect with</span>
                <div class="buttons">
                  <a href="#" class="facebook"><i class="fab fa-facebook-f"></i>Facebook</a>
                  <a href="#" class="google"><i class="fab fa-google"></i>Google</a>
                </div> -->
						<p>Already have an account? <a href="<?php echo base_url(); ?>recruiter/login">Login</a></p>
					</div>
				</div>
			</div>
			

		</div>
	</div>
</div>

</html>
<script>
	$(function() {
		$("#resume").change(function() {



			var ext = $('#resume').val().split('.').pop().toLowerCase();

			if ($.inArray(ext, ['doc', 'pdf', 'docx']) == -1) {

				$('#err_resume').html("&#9888 Resume must be 'doc','pdf','docx' file formats");
				$("#err_resume").fadeIn(1000);

				$('#resume').val('')

			}


		});
	});

	function validateForm() {
		$(".err").stop().fadeOut();
		
		var is_error = $("#is_error").val();
		if (is_error.length > 0) {
			$("#" + is_error).fadeIn(1000);
			return false;
		}

		var email = $("#email").val();
		if (email.length == 0) {
			$("#err_email").fadeIn(1000);
			$("#err_email").html("&#9888 Oops, Email is required.");
			return false;
		} else
		if (email.trim != "") {
			var goodEmail = email.match(
				/\b(^(\S+@).+((\.com)|(\.net)|(\.edu)|(\.mil)|(\.gov)|(\.org)|(\.info)|(\.in)|(\.biz)|(\.aero)|(\.coop)|(\.museum)|(\.name)|(\.pro)|(\..{2,2}))$)\b/gi
			);
			if (!goodEmail) {

				$("#err_email").fadeIn(1000);
				$("#err_email").html("&#9888 Oops, Invalid email format.");
				return false;
			}
		}


		var phone = $("#phone").val();
		if (phone.length == 0) {
			$("#err_phone").fadeIn(1000);
			$("#err_phone").html("&#9888 Oops, Phone number is required.");
			return false;
		} else {
			if (phone.length < 10) {
				$("#err_phone").fadeIn(1000);
				$("#err_phone").html("&#9888 Oops, Please enter Phone number correctly.");
				return false;
			} else
			if (!($.isNumeric(phone))) {
				$("#err_phone").fadeIn(1000);
				$("#err_phone").html("&#9888 Oops, Phone number must be numeric.");
				return false;
			}
		}

		var passFlag = checkPassword('0');


		if (!$("#termsConditions").is(":checked")) {
			$("#err_termsConditions").fadeIn(1000);
			$("#err_termsConditions").html("<br/>&#9888 Oops, Accepts Terms & Conditions.");
			return false;
		}

		

		var frmData = new FormData($('#frm_registration')[0]);
		$("#register_loader").show();
		$.ajax({
			url: base_url + "recruiter/registration",
			dataType: "json",
			data: frmData,
			type: "POST",
			success: function(data) {
				if (data == 0 || data == '0') {
					$("#err_register").fadeIn(1000);
					$("#err_register").html(
						"&#9888 Oops, Regitration not done sussessfully, Please try again .");
					return false;

				} else {
					$(".loader").hide();
					if (data == "blankRecaptcha") {
						$("#err_recaptcha").fadeIn(1000);
						$("#err_recaptcha").html("&#9888 Oops, Please select recaptcha.");
						return false;
					}
					if (data == "invalidRecaptcha") {
						$("#err_recaptcha").fadeIn(1000);
						$("#err_recaptcha").html("&#9888 Oops, Something went wrong while selecting captcha.");
						return false;
					}


					window.location.href = base_url + "recruiter/registration/registration_success";
					// window.location.href = base_url + "recruiter/registration/verify_otp";


				}
				$(".loader").hide();
				return false;
			},
			error: function(e) {

				$("#err_register").fadeIn(1000);
				$("#err_register").html("&#9888 Oops, Error occured while regitration, Please try again .");
				$(".loader").hide();
				return false;
			},
			processData: false,
			contentType: false,
			cache: false,
		});

		return false;

	}

	function checkPassword(check_key = 0) {
		$(".err").stop().fadeOut();
		var password = $("#password").val();
		var confirm_password = $("#confirm_password").val();
		$("#is_error").val("");
		if (password.length == 0 && check_key != 2) {
			$("#err_password").fadeIn(1000);
			$("#err_password").html("&#9888 Oops, Password is required.");
			$("#is_error").val("err_password");
			return false;
		}

		if (confirm_password.length == 0 && check_key != 1) {
			$("#err_confirm_password").fadeIn(1000);
			$("#err_confirm_password").html("&#9888 Oops, Confirm password is required.");
			$("#is_error").val("err_password");
			return false;
		}

		if ((password.length > 0 && confirm_password.length > 0) && password != confirm_password) {
			$("#err_confirm_password").fadeIn(1000);
			$("#err_confirm_password").html("&#9888 Oops, Password and Confirm password not matched.");
			$("#is_error").val("err_password");
			return false;
		}

	}

	function check_email(email) {
		$(".err").stop().fadeOut();

		//var email = $("#email").val();
		if (email.length == 0) {
			$("#err_email").fadeIn(1000);
			$("#err_email").html("&#9888 Oops, Email is required.");
			return false;
		} else
		if (email.trim != "") {
			var goodEmail = email.match(
				/\b(^(\S+@).+((\.com)|(\.net)|(\.edu)|(\.mil)|(\.gov)|(\.org)|(\.info)|(\.in)|(\.biz)|(\.aero)|(\.coop)|(\.museum)|(\.name)|(\.pro)|(\..{2,2}))$)\b/gi
			);
			if (!goodEmail) {

				$("#err_email").fadeIn(1000);
				$("#err_email").html("&#9888 Oops, Invalide email format.");
				return false;
			}
		}
		$("#is_error").val("");
		$.ajax({
			url: base_url + "recruiter/registration/email_verification",
			dataType: "json",
			data: {
				'email': email
			},
			type: "POST",
			success: function(data) {
				if (data == 1 || data == '1') {
					$("#is_error").val("err_email");
					$("#err_email").fadeIn(1000);
					$("#err_email").html("&#9888 Oops, Email is already registered.");
					return false;
				}

			},
			error: function(e) {
				$("#is_error").val("err_email");
				$("#err_register").fadeIn(1000);
				$("#err_register").html(
					"&#9888 Oops, Error occured in email verification proccess, Please try again .");
				return false;
			}
		});

	}
</script>