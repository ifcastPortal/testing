<div class="col-md-4 ml-auto">
	<div class="feature-content text-right">
		<a href="<?php echo base_url(); ?>recruiter/profile/dreamer_listingsearch" class="button">Search by designation</a>
	</div>
</div>
<table class="table">
	<thead>
		<tr>
			<th>Job Title</th>
			<th>Status</th>
			<th>Date/Time</th>
			<th class="action">Resume</th>
		</tr>
	</thead>
	<tbody>
		<?php
		$jobcount = 1;
		foreach ($get_candidates as $rpa) :
			//echo "<pre> ===>"; print_r($rpa); 
			//$profile_pic = $rpa['profile_pic'] ? "".$rpa['profile_pic']: "assets/images/user-1.jpg";
			$jobcount = $jobcount + 1;


			if ($jobcount <= 125) {
		?>

				<tr class="candidates-list">
					<td class="title">
						<div class="thumb">
							<img src="<?php echo base_url(); ?>assets/images/user-1.jpg" class="img-fluid" alt="">
						</div>
						<div class="body">
							<h5><a><?php echo $rpa['name'] ?></a></h5>
							<div class="info">
								<span class="designation"><a><i data-feather="briefcase"></i><?php echo $rpa['temp_desg'] ?></a></span>
								<span class="designation">
									<a><i data-feather="mail"></i><?php echo $rpa['email'] ?></a>
								</span>
								<!-- <span class="location"><a><i data-feather="briefcase"></i>
				  
					  <?php

						if ($rpa['experience_user'] == 0 && empty($rpa['total_experince'])) {
							echo 'Fresher';
						} else {
							echo $rpa['total_experince'];
						}



						?>
				</a>
			  
			  </span> -->
							</div>
						</div>
					</td>
					<td class="status"><i data-feather="check-circle"></i>Active</td>
					<td><?php echo $rpa['last_updated']; ?></td>
					<td class="action">
						<?php
						if ($rpa['upload_file']) { ?>
							<!-- <a href="./assets/uploads/resums/<?php echo $rpa['upload_file']; ?>" class="download" target="_blank">Download</a> -->
							<a href="<?php echo base_url(); ?>assets/uploads/resums/<?php echo $rpa['upload_file']; ?>" class="inbox" download><i data-feather="bx-bxs-download"></i> Download</a>

						<?php	} else
							echo "Premium only";
						?>

						<!-- <a href="#" class="inbox"><i data-feather="check-square"></i></a> -->
						<!-- <a href="#" class="inbox"><i data-feather="mail"></i></a>
			  <a href="#" class="remove"><i data-feather="trash-2"></i></a> -->
					</td>
				</tr>
		<?php
			}
		endforeach;

		?>

	</tbody>
</table>

<?php echo $pagArr['pagLink']; ?>