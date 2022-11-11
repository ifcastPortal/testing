<script type="text/javascript">
	var widgetId1;
	var onloadCallback = function () {
		widgetId1 = grecaptcha.render('example1', {
			'sitekey': '6LenV8EUAAAAAK-Bm5mv-W4twiD2WUqYjYm0I1gh',
			'theme': 'light'
		});
	};
</script>






<!-- <?php  phpinfo(); ?> -->

	<!-- Breadcrumb -->
	<div class="alice-bg py-5">
		<div class="container">
		  <div class="row">
			<div class="col-md-6">
			  <div class="breadcrumb-area">
				<h1>PRATIKSHA</h1>
				<nav aria-label="breadcrumb">
				  <ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="#">Dreamer Registration</a></li>
				  </ol>
				</nav>
			  </div>
			</div>
			<div class="col-md-6">
			  <div class="breadcrumb-form">
				<form action="#">
				  <input type="text" placeholder="Enter Keywords">
				  <button><i data-feather="search"></i></button>
				</form>
			  </div>
			</div>
		  </div>
		</div>
	  </div>
	  <!-- Breadcrumb End -->


 
    <div class="padding-top-60 access-page-bg">
      <div class="container">
        <div class="row">
          <div class="col-xl-4 col-md-6">

			
            <div class="access-form">
				<input type="hidden" name="is_error" id="is_error" value="">

			  <form name="frm_registration" id="frm_registration" method="post" enctype="multipart/form-data" action="" onSubmit="return validateForm();">
				
				<input type="hidden" name="action" id="action" value="add">


                <div class="form-group">
				  <input type="text" class="form-control" id="name" placeholder="Enter your full name" name="name">
				  <span class="err" id="err_name"> </span>
				</div>


				<div class="form-group">
				  <input type="text" class="form-control" id="temp_desg" placeholder="Developer" name="temp_desg">
				  <!-- <span class="err" id="err_name"> </span> -->
				</div>



				<div class="form-group">
					<input type="text" class="form-control" id="phone"placeholder="Enter your mobile" name="phone" maxlength="10" pattern="[0-9]*">
					<span class="err" id="err_phone"> </span>
				  </div>


				  <div class="form-group">
					<input type="email" class="form-control" id="email"	placeholder="Enter your email" name="email"	onChange="check_email(this.value);">
					<span class="err" id="err_email"> </span>
				  </div>

				  <div class="form-group">
					<input type="password" class="form-control" id="password" placeholder="Enter a password" name="password" onChange="checkPassword('1');">
						<span class="err" id="err_password"> </span>
				  </div>	
				  
				  <div class="form-group">
					<input type="password" class="form-control" id="confirm_password" placeholder="Confirm your password" name="confirm_password" onChange="checkPassword('2');">
					<span class="err" id="err_confirm_password"> </span>
				  </div>	


				  <div class="form-group file-input-wrap">
					<label for="resume">
					  <!-- <input id="up-cv" type="file">  -->
					  <input type="file" id="resume" name="resume">
					  <i data-feather="upload-cloud"></i>
					  <span>Upload your resume <span>(pdf,zip,doc,docx)</span></span>
					</label>
					<span class="err" id="err_resume"> </span>
				  </div>

				  <div class="form-group col-md-12 col-sm-12 col-xs-12">
					<label class="control-label col-sm-2" for="Submit"></label>

					<div id="example1"></div>
					<script
						src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit"
						async defer> </script>
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
					<input type="submit" name="register" id="register" value="Register"	class="button primary-bg btn-block">

					<span class="loader" id="register_loader">
						&nbsp; <i class="fa fa-spinner fa-spin"
							style="font-size:20px; color:green;"></i>
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
                <p>Already have an account? <a href="<?php echo base_url(); ?>login">Login</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
	</div>
	





<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Terms and conditions</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
	 
The domain name www.ifcast.com is owned by iFieldSmart Technologies LLP, (in this document referred as “ifcast.com”).
The use of our website or portal, and its services or products shall be governed by the “Terms of Use” and the relevant policies which have been consolidated by way of mention.
If you perform any transactions on the site, you shall follow the policies that are subject to our portal or website for any transaction whatsoever.
For the purpose of usage, the terms “user” or “you”, would be any individual or person who has agreed to use the website in terms of browsing or using any of its services or products hereafter.
ifcast.com does allow the user to use the website without registering on the website or purchasing any of its services or products. 
You will be subject to the terms and conditions or policies when you use ifcast.com to browse or use or buy any of its services or products. Ifcast.com reserves the right to change, modify, or remove some parts of the “Terms and Conditions”, at any time without any prior notice.
It is the sole responsibility of the user to review the “Terms and Conditions” perpetually to stay informed about changes or updates pertaining to ifcast.com.
Your use of the portal or website means you do accept the rules, policies, or terms and conditions, and agree to any changes or revisions of the website or/and its policies or terms and conditions. 

<br><br>

<strong>
PLEASE READ THE TERMS AND CONDITIONS CAREFULLY BEFORE PROCEEDING TO ACCESS, BROWSE, OR BUY ANY SERVICES OR PRODUCTS FROM OUR WEBSITE.
</strong>


<br><br>
<strong>MEMBERSHIP </strong>

<br><br>
If you are a minor i.e. under 18 years of age, you shall not be allowed to register with ifcast.com or use any of the services or products thereafter. This is not in accordance with the terms and conditions of the website, and ifcast.com shall not be held responsible if users enter their age incorrectly, and they are minors. ifcast.com reserves the right to terminate any such membership or registration that violates any law mentioned in the “terms and conditions”.

<br><br>
<strong>
ACCOUNT RESPONSIBILITY
</strong>
If you choose to visit or use this website, it would be your sole responsibility to maintain the confidentiality of the username and password, or any other details that gives you access to the website or its services. If it is brought to our notice that the details that have been provided are incorrect or untrue, ifcast.com reserves the right to suspend your account indefinitely as it is not in accordance with our terms of use. This can lead to legal action being registered against you. You further agree to reimburse losses that are incurred due to distorted, misleading, vulgar, fraudulent actions performed by you on the website or portal.

<br><br>
<strong>
COMMUNICATION
</strong>
<br><br>
Ifcast.com use electronic media to communicate with its users i.e. via email. With these terms and conditions, you do agree to receive certain communication based on our recent developments, feedback, marketing material from us as and when required. You can choose to opt out of our newsletters if you wish to do so. <br><br>

<strong>USE OF THE WEBSITE</strong>

<br><br>

	By agreeing to the terms and conditions, you do abide by the terms of use, if not, do not proceed to use this website or any of its services.
	You shall not upload, modify, or transmit any information that does not belong to you, or has not received prior consent from the said person
	You shall not post any indecent, obscene, vulgar, defamatory, or any hate content on our platform or website, this will lead to immediate termination of your membership, and legal actions will be taken against you
	Users are not allowed to upload any kind of evasive information 
	You are not allowed to harass or advocate such action towards another person
	Users are not allowed to change, modify, or transfer any part of the website as this infringes or violates our terms of use
	Users shall not upload any information that includes information about any illegal actions or activities like violating privacy or solicit information from others
	Users are not allowed to upload any information about minors, this can lead to strict legal action being taken against a user(s)
	Ifcast.com holds the right to dismiss or remove users from the platform who violate any law for any said period of time
	Users who upload viruses, destroy any part of the code, or perform actions to block the use of our website would be dealt with serious legal action
<br><br>

<strong>
SITE CONTENT
</strong>

<br><br>
	No part of the website may be copied, transferred, translated, or distributed in any way to another device or user
	All the content on the site viz. graphics, logo, text, videos, or any artwork is the sole property of ifcast.com 
	Ifcast.com shall not be held responsible for third-party advertising, and as such has no active control over this kind of content

<br><br>
<strong>
INFORMATION SECURITY AND PRIVACY
</strong>
<br><br>
Your personal information is very important, and ifcast.com shall protect it through physical protective measures and procedures in accordance with the Information Technology Act 2000 and its rules thereafter. 
If you do object to your information being used or accessed by us to make your browsing experience better and productive, kindly do not browse this site
<br><br>

<strong>
DISCLAIMERS AND WARRANTY
</strong>
<br><br>

The information displayed on the website is meant for general use, and does not base any relation to taking a decision. Feedbacks or queries being displayed or sent to the site are personal opinions, and ifcast.com holds no control over users sending these messages. However, user(s) need to comply with our terms of use on not uploading or sending illicit content that violates are terms of use, such messages and users will be suspended or removed from the site
<br><br>

<strong>
PAYEMNTS
</strong>
<br><br>        
Whilst using any of the payment methods on the site, ifcast.com shall not be responsible or liable for any loss or damage that pertains to –<br><br>
Unauthorized transactions
Exceeding any payment limits as set by a bank(s)
Transaction Decline arising for any other reason whatsoever
Payment platforms on ifcast.com are not owned by ifcast.com, but act as gateways to facilitate a financial transaction for our services or products  
ifcast.com shall not be responsible for any decline of payments through various methods viz. credit card, debit card, net banking, or any other means 
ifcast.com does reserve the right to refuse or process certain transactions that are questionable, malicious, or fraudulent in nature<br><br>

<strong>
INDEMNITY
</strong>

<br><br>

You are liable to compensate ifcast.com and all its stakeholders, or group companies, directors, agents and employees for any breach of terms of use or violation of any law or regulation or rights<br><br>

<strong>
TRADEMARK AND COPYRIGHT
</strong>
<br><br>
The website and platform is controlled by ifcast.com. All material on the site viz. text, images, videos, audio, illustrations, or any other material are protected by trademarks, copyrights, and intellectual rights. You are not allowed to copy, transfer, modify, or change any part of the site or portal<br><br>

<strong>
CONTACT US
</strong>
<br><br>
Kindly contact us for any queries or questions regarding our terms of use, services, or feedback
 
  

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Ok</button>
      </div>
    </div>
  </div>
</div>



<script>
	$(function () {
		$("#resume").change(function () {
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
			url: base_url + "registration",
			dataType: "json",
			data: frmData,
			type: "POST",
			success: function (data) {
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
					window.location.href = base_url + "registrationif";
				}
				$(".loader").hide();
				return false;
			},
			error: function (e) {
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
				$("#err_email").html("&#9888 Oops, Invalid email format.");
				return false;
			}
		}
		$("#is_error").val("");
		$.ajax({
			url: base_url + "registration/email_verification",
			dataType: "json",
			data: {
				'email': email
			},
			type: "POST",
			success: function (data) {
				if (data == 1 || data == '1') {
					$("#is_error").val("err_email");
					$("#err_email").fadeIn(1000);
					$("#err_email").html("&#9888 Oops, Email is already registered.");
					return false;
				}

			},
			error: function (e) {
				$("#is_error").val("err_email");
				$("#err_register").fadeIn(1000);
				$("#err_register").html(
					"&#9888 Oops, Error occured in email verification proccess, Please try again .");
				return false;
			}
		});
	}
</script>