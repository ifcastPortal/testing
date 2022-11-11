<form method="post" action="<?php echo base_url(); ?>tempemail/send" enctype="multipart/form-data">
                <input type="email" id="to" name="to" placeholder="Receiver Email">
                <br><br>
                <input type="text" id="subject" name="subject" placeholder="Subject">
                <br><br>
                <textarea rows="6" id="message" name="message" placeholder="Type your message here"></textarea>
                <br><br>
                <input type="submit" value="Send Email" />
            </form>







            <!-- NewsLetter -->
    <div class="newsletter-bg padding-top-90 padding-bottom-90">
      <div class="container">
        <div class="row">
          <div class="col-xl-5 col-lg-6">
            <div class="newsletter-wrap">
              <h3>A Newsletter</h3>
              <p>Get e-mail updates about our latest news and Special offers. We don’t send spam so don’t worry.</p>
              <form method="post" action="<?php echo base_url(); ?>newsletter/subscription" class="newsletter-form form-inline"   enctype="multipart/form-data">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Email address...">
                </div>
                <button type="submit" class="btn button">Submit<i class="fas fa-caret-right"></i></button>

                <input class="button" type="submit" value="Submit 2" />
                <!-- <p class="newsletter-error">0 - Please enter a value</p>
                <p class="newsletter-success">Thank you for subscribing!</p> -->
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- NewsLetter End -->


<div class="row">
<div class="col-12">

    <div class="bg-primary p-4">
    
    <form method="post" action="https://www.ifcast.com/in/newsletter/subscription" class=""   enctype="multipart/form-data">
                <div class="form-group">
                  <input id="newsletter_emailid" name="newsletter_emailid" type="text" class="form-control" placeholder="Email address..." required>
                </div>
                <button type="submit" class="btn button">Submit<i class="fas fa-caret-right"></i></button>

                <input  class="btn btn-warning" type="submit" value="Submit 2" />
                <!-- <p class="newsletter-error">0 - Please enter a value</p>
                <p class="newsletter-success">Thank you for subscribing!</p> -->
              </form>
    
    </div>
</div>
</div>
