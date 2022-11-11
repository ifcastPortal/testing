<!-- Breadcrumb -->
<div class="alice-bg py-5">
	<div class="container">
	  <div class="row">
		<div class="col-md-6">
		  <div class="breadcrumb-area">
			<h1>Profile type</h1>
			<nav aria-label="breadcrumb">
			  <ol class="breadcrumb">
				<li class="breadcrumb-item">Choose a profile type</li>
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

	<div class="vector-bg ">
		<section class="container" style="position: relative;overflow:hidden">
			<div class="row ">
				<div class="offset-xl-2 col-xl-8 offset-lg-3 col-lg-6 offset-md-1 col-md-10 col-sm-12">
					<div class="ifcast-style-card-1">

						<div class="loader" id="loader_Fresher">
							<div class="load-bar">
								<div class="bar"></div>
								<div class="bar"></div>
								<div class="bar"></div>
							</div>
						</div>


						<div class="loader" id="loader_Experience">
							<div class="load-bar">
								<div class="bar"></div>
								<div class="bar"></div>
								<div class="bar"></div>
							</div>
						</div>

<div class="access-form">
	<form name="frm_profileType" id="frm_profileType" action="" method="POST">
		<input type="hidden" name="action" id="action" value="<?php echo $action; ?>">
		<input type="hidden" name="experience_user" id="experience_user" value="0">


		<div class="row">
			<div class="input-group col-12">
				<div class="row">
					<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 text-center">

						<img class="my-4 text-center"
							src="<?php echo base_url(); ?>assets/images/fresherdreamer.gif"
							width="80%" style="border:1px solid #10abba;border-radius: 500px;">

						
							<input type="button" name="Fresher" id="Fresher" value="I am a Fresher"
								class="button primary-bg btn-block" onclick="save_profileType('Fresher')">
						


					</div>

					<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 text-center">

						<img class="my-4 text-center"
							src="<?php echo base_url(); ?>assets/images/professionaldreamer.gif"
							width="80%" style="border:1px solid #10abba;border-radius: 500px;">


						
							<input type="button" name="Experience" id="Experience"
								value="I am Experienced" class="button primary-bg btn-block"
								onclick="save_profileType('Experience')">
						

					</div>


					<span id="err_profileType" class="err"></span>

					

				</div>
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
	var base_url = "<?php echo base_url(); ?>";
	$(function () {

		$('#user_city').select2({
			placeholder: 'Select Services',
			allowClear: true
		});
	});



	function save_profileType(profileType) {
		if(profileType == "Experience")
		{
			$("#experience_user").val('1');
		}
		else
			$("#experience_user").val('0');
		
		
		var frmData = new FormData($('#frm_profileType')[0]);
		$("#loader_"+profileType).show();
		$.ajax({
			url: base_url + "profile/profile_type",
			dataType: "json",
			data: frmData,
			type: "POST",
			success: function (data) {				
				$(".loader").hide();
				window.location.href = base_url + "profile";
				return false;
			},
			error: function (e) {
				$("#err_profileType").fadeIn(1000);
				$("#err_profileType").html("&#9888 Oops, Error occured while saving ProfileType, Please try again .");
				return false;
			},
			processData: false,
			contentType: false,
		});

		return false;
	}

</script>
