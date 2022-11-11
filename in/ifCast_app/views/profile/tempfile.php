<h4><?php echo $error;?></h4>

			  

			  <form method="post" action="<?php echo base_url(); ?>temp/do_upload" enctype="multipart/form-data">
                <div class="form-group">
                  <input type="email" id="to" name="to" placeholder="Email" class="form-control">
                </div>
               
                <div class="form-group file-input-wrap">
                  <label for="up-cv">
                    <input id="up-cv" type="file" name="userfile">
                    
                    <i data-feather="upload-cloud"></i>
                    <span>Upload your resume <span>(pdf,zip,doc,docx)</span></span>
                  </label>
                </div>
                <div class="more-option">
                  <input class="custom-radio" type="checkbox" id="radio-4" name="termsandcondition">
                  <label for="radio-4">
                    <span class="dot"></span> I accept the <a target="_blank" href="<?php echo base_url(); ?>pages/terms">terms & conditions</a>
                  </label>
                </div>
                <button class="button primary-bg btn-block">Apply Now</button>
              </form>
