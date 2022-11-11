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

<div class="alice-bg section-padding-bottom">
  <div class="container no-gliters">
    <div class="row no-gliters">
      <div class="col">
        <div class="dashboard-container">
          <div class="dashboard-content-wrapper">
            <div class="manage-job-container">
              <table class="table">
                <thead>
                  <tr>
                    <th>Job Title</th>

                    <th>Applied on</th>
                    <!-- <th>Status</th>
                        <th class="action">Action</th> -->
                  </tr>
                </thead>
                <tbody>

                  
                  <?php foreach ($get_savedjoblist as $ajl) : ?>

                    <?php
                    if ($user_details->user_id == $ajl['user_id']) {

                    ?>

                      <?php

                      $appliedid = $ajl['jobpost_id'];

                      ?>

                      <?php foreach ($get_appliedjobinformation as $aji) : ?>

                        <?php
                        if ($aji['jobpost_id'] == $appliedid) {
                         
                        ?>



                            <tr class="job-items">
                              <td class="title">
                                <h5><a href="<?php base_url(); ?>jobs/details/<?php echo $aji['jobpost_id']; ?>"><?php echo $aji['job_title']; ?></a></h5>
                                <div class="info">
                                  <span class="office-location"><a href="#"><i data-feather="map-pin"></i><?php echo $aji['web_url'] ?></a></span>
                                  <span class="job-type full-time"><a href="#"><i data-feather="clock"></i>Full Time</a></span>
                                </div>
                              </td>

                              <td class="deadline"><?php echo $ajl['jobApplyDate']; ?></td>
                              <!-- <td class="status active">Active</td>
								<td class="action">
								<a href="#" class="preview" title="Preview"><i data-feather="eye"></i></a>
								<a href="#" class="edit" title="Edit"><i data-feather="edit"></i></a>
								<a href="#" class="remove" title="Delete"><i data-feather="trash-2"></i></a>
								</td> -->
                            </tr>

                        <?php
                          }
                        
                        ?>
                      <?php endforeach; ?>



                    <?php
                    }
                    ?>








                  <?php endforeach; ?>











                </tbody>
              </table>
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
                <li><i class="fas fa-home"></i><a href="profile/userhome">Home</a></li>
                <!-- <li><i class="fas fa-user"></i><a href="dashboard-edit-profile.html">Edit Profile</a></li> -->
                <li><i class="fas fa-file-alt"></i><a href="profile/dashboard">Resume</a></li>
                <!-- <li><i class="fas fa-edit"></i><a href="edit-resume.html">Edit Resume</a></li> -->
                <li class="active"><i class="fas fa-heart"></i><a href="profile/savedjobs">Saved/Bookmarked</a></li>
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