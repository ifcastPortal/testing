 <!-- <div class="container">
           
            <div class="column">
               <?php $jobTempCount = 30; ?>
                   
                   
                        <?php foreach ($onkarPaginatedata as $author): ?>
                          <p><?= $author['name'] ?></p>
                        
                          <?php  $jobTempCount =  $jobTempCount + 1; ?>
                         
                        <?php endforeach; ?>
                    
                
                <p><?php echo $links; ?></p>
              
               
            </div>
        </div>
  -->



<!-- Breadcrumb -->
<div class="alice-bg padding-top-70 padding-bottom-70">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="breadcrumb-area">
              <h1>Enabler Dashboard</h1>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>recruiter/profile/dreamer_listing">Back to Dashboard</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Enabler Search by designation</li>
                </ol>
              </nav>
            </div>
          </div>
          <div class="col-md-6">
            <div class="breadcrumb-form">
              <a href="https://www.ifieldsmart.com"><img
                src="<?php echo base_url(); ?>assets/images/logostrip.svg" alt="" width="90%">
            <p class="text-right">Know more about these products</p>
        </a>
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

                <form name="frm_postJobDetails" id="frm_postJobDetails" action="<?php echo base_url(); ?>recruiter/profile/dreamer_listingsearch" method="POST"  class="job-post-form">
                    <div class="basic-info-input">
                        <input type="hidden" name="action" id="action" value="<?php echo $action; ?>">
                        <div class="row">
                            <div id="extraDetials_error" class="error col-sm-10"></div>
                            <div id="extraDetials_success" class="success col-sm-10"></div>
                        </div>
    
                      <div id="job-summery" class="row">
                          <div class="col-md-6">
                              <p>Showing results: <?php echo $num_rows; ?>, Designation: <?php echo $temp_desg; ?></p>
                          </div>
                        <div class="col-md-6">
                          <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <!-- <?php echo $temp_desg; ?> -->
                                    <select id="temp_desg" name="temp_desg" autofocus="autofocus" class="form-control" required>
                                        <option value="">Select designation</option>
                                         <option value="Accountant"> Accountant </option>
                                        <option value="Marketing"> Marketing </option>
                                        <option value="Software Developer - App Developer"> Software Developer - App Developer </option>
                                        <option value="" <?php echo  set_select('temp_desg', 'Select Designation'); ?> >Select Designation</option>
                                        <option value="Accountant" <?php echo  set_select('temp_desg', 'Accountant'); ?> >Accountant</option>
                                        <option value="HR-Admin" <?php echo  set_select('temp_desg', 'HR-Admin'); ?> >HR-Admin</option>
                                        <option value="Marketing" <?php echo  set_select('temp_desg', 'Marketing'); ?> >Marketing</option>
                                        <option value="IT Network and Hardware" <?php echo  set_select('temp_desg', 'IT Network and Hardware'); ?> >IT Network and Hardware</option>
                                        <option value="Sales Executive and Sales Manager" <?php echo  set_select('temp_desg', 'Sales Executive and Sales Manager'); ?> >Sales Executive and Sales Manager</option>
                                        <option value="Software Developer - App Developer" <?php echo  set_select('temp_desg', 'Software Developer - App Developer'); ?> >Software Developer - App Developer</option>
                                    </select>
                                    
                                    
                                    <i class="fa fa-caret-down"></i>
                                </div>

                               
                              </div>

                              <div class="col-md-4">
                                  <div class="form-group" style="text-align: right;">
                                    <input type="submit" name="register" id="register" value="Search"
                                    class="button">
                                  </div>
                              </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </form>

                  <p><?php echo $links; ?></p>

                <div class="manage-candidate-container">
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

                        foreach($onkarPaginatedata as $dd)
                        {
                    ?>

                        <tr class="candidates-list">
                            <td class="title">
                            <div class="thumb">
                                <img src="<?php echo base_url(); ?>assets/images/user-1.jpg" class="img-fluid" alt="">
                            </div>
                            <div class="body">
                                <h5><a><?php echo $dd['name']; ?></a></h5>
                                <div class="info">
                                <span class="designation"><a ><i data-feather="check-square"></i><?php echo $dd['temp_desg']; ?></a></span>
                                <span class="location"><a ><i data-feather="mail"></i><?php echo $dd['email']; ?></a></span>
                                </div>
                            </div>
                            </td>
                            <td class="status"><i data-feather="check-circle"></i>Active</td>
                            <td><?php echo $dd['added_date']; ?></td>
                            <td class="action">



                            <?php 
					            if($dd['upload_file'])
						        { 
                            ?>
							<!-- <a href="./assets/uploads/resums/<?php echo $rpa['upload_file']; ?>" class="download" target="_blank">Download</a> -->
							<a href="<?php echo base_url(); ?>assets/uploads/resums/<?php echo $dd['upload_file']; ?>" class="download" download><i data-feather="download"></i></a>

                            <?php	
                                }
				            	else
						            echo "Premium only";
					        ?>


                            <!-- <a href="#" class="download">
                                <i data-feather="download"></i>
                            </a>




                            <a href="#" class="inbox"><i data-feather="mail"></i></a>
                            <a href="#" class="remove"><i data-feather="trash-2"></i></a> -->
                            </td>
                        </tr>
                    <?php        
                        }
                    ?>

                     
                     
                    </tbody>
                  </table>

                        <div>
                        
                        <p><?php echo $links; ?></p>
                        </div>

                  <!-- <div class="pagination-list text-center">
                    <nav class="navigation pagination">
                      <div class="nav-links">
                        <a class="prev page-numbers" href="#"><i class="fas fa-angle-left"></i></a>
                        <a class="page-numbers" href="#">1</a>
                        <span aria-current="page" class="page-numbers current">2</span>
                        <a class="page-numbers" href="#">3</a>
                        <a class="page-numbers" href="#">4</a>
                        <a class="next page-numbers" href="#"><i class="fas fa-angle-right"></i></a>
                      </div>
                    </nav>                
                  </div> -->
                </div>
              </div>



              <div class="dashboard-sidebar">
                <div class="company-info">
                  <div class="thumb">
                    <img src="dashboard/images/company-logo.png" class="img-fluid" alt="">
                  </div>
                  <div class="company-body">
				  <h5><?php echo $companydetails->company_name; ?></h5>
                  <span><?php echo $companydetails->web_url; ?></span>
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
                  <li><i class="fas fa-home"></i><a href="recruiter/profile/companydashboard">Dashboard</a></li>
                  <li ><i class="fas fa-user"></i><a href="recruiter/profile/company_details">Edit Profile</a></li>
                  <li><i class="fas fa-plus-square"></i><a href="recruiter/jobpost/">Post New Job</a></li>
                  <li ><i class="fas fa-briefcase"></i><a href="recruiter/jobpost/postedjobs">Manage Jobs</a></li>
                  <!-- <li><i class="fas fa-heart"></i><a href="#">Shortlisted Resumes</a></li> -->
                  <li class="active"><i class="fas fa-users"></i><a href="recruiter/profile/dreamer_listing">Manage Candidates</a></li>
                  <!-- <li><i class="fas fa-comment"></i><a href="employer-dashboard-message.html">Message</a></li>
                  <li><i class="fas fa-calculator"></i><a href="employer-dashboard-pricing.html">Pricing Plans</a></li> -->
                </ul>
                <ul class="delete">
                  <li><i class="fas fa-power-off"></i><a href="recruiter/login/Out">Logout</a></li>
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

