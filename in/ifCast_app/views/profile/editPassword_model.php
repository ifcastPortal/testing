<script>
	function changePassword(check_key = 0) {
		$(".err").stop().fadeOut(); 
		$(".error").stop().fadeOut();
		$(".success").stop().fadeOut();
		var prev_user_pass = $("#prev_user_pass").val();
		var new_password = $("#new_password").val();
		var confirm_password = $("#confirm_password").val();
		var is_error = $("#is_error").val();
		
		if (is_error.length > 0) {
			$("#"+is_error).fadeIn(1000);
			return false;
		}
		if (prev_user_pass.length == 0) {
			$("#err_prev_user_pass").fadeIn(1000);
			$("#err_prev_user_pass").html("&#9888 Oops, Previous Password is required.");
			return false;
		}
		
		if (new_password.length == 0) {
			$("#err_new_password").fadeIn(1000);
			$("#err_new_password").html("&#9888 Oops, Password is required.");
			return false;
		}

		if (confirm_password.length == 0) {
			$("#err_confirm_password").fadeIn(1000);
			$("#err_confirm_password").html("&#9888 Oops, Confirm password is required.");
			return false;
		}

		if (new_password != confirm_password) {
			$("#err_confirm_password").fadeIn(1000);
			$("#err_confirm_password").html("&#9888 Oops, New Password and Confirm password not matched.");
			return false;
		}
		
		var chk_user_type = $("#chk_user_type").val();
		
		var url_link = base_url + "profile/change_password";
		if(chk_user_type == 2)
			 url_link = base_url + "recruiter/profile/change_password";
		
		$.ajax({
			url: url_link,
			dataType: "json",
			data: {'new_password': new_password, 'chk_user_type':chk_user_type},
			type: "POST",
			success: function (data) {
				if (data == 1 || data == '1') {
					$("#userPassword_success").fadeIn(1000);
					$("#userPassword_success").html("&#9888, Your Password successfully updated done.");
					$("#userPassword_success").fadeOut(18000);

					$('#closePop_up').click();
					$('#modelForm')[0].reset();
				}
			},
			error: function (e) {
				$("#userPassword_error").fadeIn(1000);
				$("#userPassword_error").html("&#9888 Oops, Error occured in check password proccess, Please try again .");
				return false;
			}
		});
	}
	
	function check_userPassword(prev_user_pass)
	{
		$(".err").stop().fadeOut(); 
		$(".error").stop().fadeOut();
		$(".success").stop().fadeOut();
		var chk_user_type = $("#chk_user_type").val();
		
		var url_link = base_url + "profile/password_verification";
		if(chk_user_type == 2)
			 url_link = base_url + "recruiter/profile/password_verification";
		
		$.ajax({
			url: url_link,
			dataType: "json",
			data: {'prev_user_pass': prev_user_pass, 'chk_user_type':chk_user_type},
			type: "POST",
			success: function (data) {
				if (data == 1 || data == '1') {
					$("#is_error").val("");
				}else {
					$("#is_error").val("err_prev_user_pass");
					$("#err_prev_user_pass").fadeIn(1000);
					$("#err_prev_user_pass").html("&#9888 Oops, Some think went wrong, you have enter wrong password.");
					return false;
				}
			},
			error: function (e) {
				$("#is_error").val("err_prev_user_pass");
				$("#err_prev_user_pass").fadeIn(1000);
				$("#err_prev_user_pass").html("&#9888 Oops, Error occured in password verification proccess, Please try again .");
				return false;
			}
		});
	}

</script>

<input type="hidden" id="editDetails" name="editDetails" value="<?php echo $editDetails; ?>">
<input type="hidden" id="is_error" name="is_error" value="">
		<div class="row">
			<div class="form-group col-md-12 col-sm-12 col-xs-12">
				<div class="col-sm-12">
				 <label for="prev_user_pass">Previous Password:</label>
				 
					<div class="input-group mb-3">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fa fa-user" aria-hidden="true"></i></span> 
						</div>
						<input class="form-control" id="prev_user_pass" placeholder="Enter Your Previous Password" name="prev_user_pass" type="Password" value="" onchange="check_userPassword(this.value);">
					</div>
					<span class="err" id="err_prev_user_pass"> </span>
				</div>
			</div>
			
		</div>	
		<div class="row">
			<div class="form-group col-md-12 col-sm-12 col-xs-12">
				<div class="col-sm-12">
				 <label for="new_password">New Password:</label>
				 
					<div class="input-group mb-3">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fa fa-user" aria-hidden="true"></i></span> 
						</div>
						<input class="form-control" id="new_password" placeholder="Enter New Password" name="new_password" type="Password" value="">
					</div>
					<span class="err" id="err_new_password"> </span>
				</div>
			</div>
			
		</div>	
		<div class="row">
			<div class="form-group col-md-12 col-sm-12 col-xs-12">
				<div class="col-sm-12">
				 <label for="confirm_password">Confirm Password:</label>
				 
					<div class="input-group mb-3">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fa fa-user" aria-hidden="true"></i></span> 
						</div>
						<input class="form-control" id="confirm_password" placeholder="Confirm Your Password" name="confirm_password" type="Password" value="">
					</div>
					<span class="err" id="err_confirm_password"> </span>
				</div>
			</div>
			
		</div>	
