<!-- Breadcrumb -->
<div class="alice-bg py-5">
		<div class="container">
		  <div class="row">
			<div class="col-md-6">
			  <div class="breadcrumb-area">
				<h1>Enabler - Forgot password </h1>
				<nav aria-label="breadcrumb">
				  <ol class="breadcrumb">
					<li class="breadcrumb-item"><a>At iFCast a Recruitor is 'Enabler'</a></li>
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
              <p class="text-right">Know more about these products</p></a>
			  </div>
			</div>
		  </div>
		</div>
	  </div>
	  <!-- Breadcrumb End -->




<div class="padding-top-90 access-page-bg">
      <div class="container mt-5">
        <div class="row">
          <div class="col-xl-4 col-md-6">
            <div class="access-form">

				<div id="login_error" class="error">&#9888 Oops, Please enter valid 'Username' or 'Password'
				</div>


                <form method="post" action="<?php echo base_url(); ?>forgotpassword/send" enctype="multipart/form-data">

					<input type="hidden" name="login" id="login" value="user_login">

					<div class="form-group">
					
                        <input type="email" id="to" name="to" placeholder="Receiver Email" class="form-control">
						<span class="err" id="err_username"> </span>
					</div>

					<div class="form-group">
						<input type="password" class="form-control" id="password" placeholder="Enter Password" name="password">

						<span class="err" id="err_password"> </span>
					</div>


                    <div class="form-group">
						<input type="password" class="form-control" id="confirmpassword" placeholder="Confirm Password" name="confirmpassword">

						<span class="err" id="err_password"> </span>
					</div>

					
					 
					  <!-- <button type="submit" class="button primary-bg btn-block" name="user_login">
						Change
                    </button> -->
                    <input class="button primary-bg btn-block" type="submit" value="Change Password" />


				</form>

            </div>
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

		var frmData = new FormData($('#frm_login')[0]);
		$("#login_loader").show();
		$.ajax({
			url: base_url + "login",
			dataType: "json",
			data: frmData,
			type: "POST",
			success: function (data) {
				switch (data) {
					case 0:
						window.location.href = base_url + "/profile";
						break;
					case 1:
						$("#login_error").fadeIn(1000);
						$("#login_error").html("&#9888 Oops, Username should not be blank.");
						break;
					case 2:
						$("#login_error").fadeIn(1000);
						$("#login_error").html(
							"&#9888 Oops, Password should not be blank.");
						break;
					case 3:
						$("#login_error").fadeIn(1000);
						$("#login_error").html(
							"&#9888 Oops, Please enter a correct username.");
						break;
					case 4:
						$("#login_error").fadeIn(1000);
						$("#login_error").html(
							"&#9888 Oops, Please enter a correct Password.");
						break;
				}

				$(".loader").hide();

				return false;
			},
			error: function (e) {

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

</script>
