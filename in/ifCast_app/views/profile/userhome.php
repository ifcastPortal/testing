<?php 
					
					$appliedjobsbyusercount = 0;

					?>
				  
					<?php foreach($get_appliedjoblist as $ajl): ?>

<?php 
	if($user_details->user_id == $ajl['user_id'])
	{

?>

		<?php 
		
		$appliedid = $ajl['jobpost_id'];
		
		?> 
		
		<?php foreach($get_appliedjobinformation as $aji): ?>

				<?php 
					if($aji['jobpost_id'] == $appliedid )	
					{
						$appliedjobsbyusercount = $appliedjobsbyusercount + 1;
				?>

			
						
			<!-- <tr class="job-items">
		<td class="title">
		<h5><a href="<?php base_url(); ?>jobs/details/<?php echo $aji['jobpost_id']; ?>"><?php echo $aji['job_title']; ?></a></h5>
		<div class="info">
			<span class="office-location"><a href="#"><i data-feather="map-pin"></i><?php echo $aji['web_url'] ?></a></span>
			<span class="job-type full-time"><a href="#"><i data-feather="clock"></i>Full Time</a></span>
		</div>
		</td>
	
		<td class="deadline"><?php echo $ajl['jobApplyDate']; ?></td>
	
	</tr> -->

	<?php 
}
?>
			<?php endforeach; ?>  
		


	<?php 
}
?>








<?php endforeach; ?>  








<!-- Breadcrumb -->
<div class="alice-bg padding-top-70 padding-bottom-70">
	<div class="container">
	  <div class="row">
		<div class="col-md-6">
		  <div class="breadcrumb-area">
			<h1>Dreamer Dashboard</h1>
			<nav aria-label="breadcrumb">
			  <ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="#">Home</a></li>
				<li class="breadcrumb-item active" aria-current="page">Dreamer Dashboard</li>
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

  <div class="alice-bg section-padding-bottom">
	<div class="container no-gliters">
	  <div class="row no-gliters">
		<div class="col">
		  <div class="dashboard-container">
			<div class="dashboard-content-wrapper">
			  <div class="dashboard-section user-statistic-block">
				<div class="user-statistic">
				  <i data-feather="pie-chart"></i>
				  <h3>-</h3>
				  <span>Companies Viewed</span>
				</div>
				<div class="user-statistic">
				  <i data-feather="briefcase"></i>
				  <h3>

					<?php echo $appliedjobsbyusercount; ?>



				  </h3>
				  <span>Applied Jobs</span>
				</div>
				<div class="user-statistic">
				  <i data-feather="heart"></i>
				  <h3><?php echo $appliedjobsbyusercount; ?></h3>
				  <span>Saved Jobs</span>
				</div>
			  </div>
			  <!-- <div class="dashboard-section dashboard-view-chart">
				<canvas id="view-chart" width="400" height="200"></canvas>
			  </div> -->
			  <div class="dashboard-section dashboard-recent-activity">
				<h4 class="title">Week Activity</h4>
				<div class="activity-list">
				  <i class="fas fa-bolt"></i>
				  <div class="content">
					<h5>Your Resume Updated!</h5>
					<span class="time">Sometime ago</span>
				  </div>
				  <div class="close-activity">
					<i class="fas fa-times"></i>
				  </div>
				</div>
				
			  </div>
			</div>
			<div class="dashboard-sidebar">
			  <div class="user-info">
				<div class="thumb">
				<img src="<?php echo base_url(); ?>assets/images/user-1.jpg" class="img-fluid" alt="">
				</div>
			
				<div class="user-body">
                    <h5><?php echo $user_details->name; ?></h5>
                    <span><?php echo $user_details->email; ?></span>
                </div>
			  </div>
			  <div class="profile-progress">
				<div class="progress-item">
				  <div class="progress-head">
					<p class="progress-on">Profile</p>
				  </div>
				  <div class="progress-body">
					<div class="progress">
					  <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 0;"></div>
					</div>
					<p class="progress-to">70%</p>
				  </div>
				</div>
			  </div>
			  <div class="dashboard-menu">
			  <ul>
                    <li class="active"><i class="fas fa-home"></i><a href="profile/userhome">Home</a></li>
                    <!-- <li><i class="fas fa-user"></i><a href="dashboard-edit-profile.html">Edit Profile</a></li> -->
                    <li ><i class="fas fa-file-alt"></i><a href="profile/dashboard">Resume</a></li>
                    <!-- <li><i class="fas fa-edit"></i><a href="edit-resume.html">Edit Resume</a></li> -->
                    <li><i class="fas fa-heart"></i><a href="profile/savedjobs">Saved/Bookmarked</a></li>
					<li><i class="fas fa-check-square"></i><a href="profile/appliedjobs">Applied Job</a></li>
					<li><i class="fas fa-edit"></i><a href="profile/enablerlist">Enablers(Enabler) List</a></li>
                    <!-- <li><i class="fas fa-comment"></i><a href="dashboard-message.html">Message</a></li>
                    <li><i class="fas fa-calculator"></i><a href="dashboard-pricing.html">Pricing Plans</a></li> -->
                  </ul>
                  <ul class="delete">
                    <li><i class="fas fa-power-off"></i><a href="login/out">Logout</a></li>
                    <!-- <li><i class="fas fa-trash-alt"></i><a href="#" data-toggle="modal" data-target="#modal-delete">Delete Profile</a></li> -->
				  </ul>
				<!-- Modal -->
				<div class="modal fade modal-delete" id="modal-delete" tabindex="-1" role="dialog" aria-hidden="true">
				  <div class="modal-dialog" role="document">
					<div class="modal-content">
					  <div class="modal-body">
						<h4><i data-feather="trash-2"></i>Delete Account</h4>
						<p>Are you sure! You want to delete your profile. This can't be undone!</p>
						<form action="#">
						  <div class="form-group">
							<input type="password" class="form-control" placeholder="Enter password">
						  </div>
						  <div class="buttons">
							<button class="delete-button">Save Update</button>
							<button class="">Cancel</button>
						  </div>
						  <div class="form-group form-check">
							<input type="checkbox" class="form-check-input" checked="">
							<label class="form-check-label">You accepts our <a href="#">Terms and Conditions</a> and <a href="#">Privacy Policy</a></label>
						  </div>
						</form>
					  </div>
					</div>
				  </div>
				</div>
			  </div>
			</div>
		  </div>
		</div>
	  </div>
	</div>
  </div>

  <!-- Call to Action -->
  <div class="call-to-action-bg padding-top-90 padding-bottom-90">
	<div class="container">
	  <div class="row">
		<div class="col">
		  <div class="call-to-action-2">
			<div class="call-to-action-content">
			  <h2>National Institute of Building Technology</h2>
			  <p>Check out the courses at NIBT and get skilled enough for the job.</p>
			</div>
			<div class="call-to-action-button">
			  <a href="https://nibt.education" class="button">Know More</a>
			  
			</div>
		  </div>
		</div>
	  </div>
	</div>
  </div>
  <!-- Call to Action End -->


















	<!-- Modal -->
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="modelHeader" aria-hidden="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="modelHeader">Modal title</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<form id="modelForm" name="modelForm" action="" method="post">
					<div class="modal-body" id="modelBody">
						<p>Some text in the modal.</p>
					</div>
				</form>
				<div class="modal-footer">
					<button type="button" class="btn btn-primary btn-md" onclick="addEdit_details();">
						<i class="fa fa-paper-plane" aria-hidden="true"></i> Update
					</button>
					<span class="loader" id="submit_loader">
						&nbsp; <i class="fa fa-spinner fa-spin" style="font-size:20px; color:green;"></i>
					</span>

					<button type="button" id="closePop_up" class="btn btn-danger btn-md" data-dismiss="modal"> <i
							class="fa fa-times" aria-hidden="true"></i> Close</button>

					<span class="err" id="err_buttons"> </span>
				</div>
			</div>
		</div>
	</div>
	<!-- Modal -->
	
	

	<!-- end cont stats -->


	

	
	

	

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
