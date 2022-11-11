<div class="container">
<h5 class="mt-5">Total Subscribers: <?php echo $subscriber_count; ?></h5>

    <div class="row" >
            <div class="col-12">
                <div class="mt-5">
                <div class="row text-left" style="background: #10abba;padding: 10px;color: white;">
                    <div class="col-2 ">
                    <p>Sr. No.</p>
                    </div>
    
                    <div class="col-8">
                    <p>Email ID</p>
                    </div>
    
                    <div class="col-2">
                        <p>Subscribed on</p>
                        </div>
                </div>
    
                   
                    
                 
                    <!-- <?php echo anchor('page/post_viewsingle/'.$rpa['id'],'Read More'); ?> -->
                   
                </div>
            </div>
        
    </div>




<div class="row">
    <?php foreach($onkarghule as $rpa): ?>
        <div class="col-12">
            <div class="mt-0">
            <div class="row text-left" style="padding:10px;border:1px solid #f1f1f1;">
                <div class="col-2 ">
                <p><?php echo $rpa['ns_id'] ?> </p>
                </div>

                <div class="col-8">
                <p><?php echo $rpa['ns_email'] ?> </p>
                </div>

                <div class="col-2">
                    <p><?php echo $rpa['susbcribed_date'] ?> </p>
                    </div>
            </div>

               
                
             
                <!-- <?php echo anchor('page/post_viewsingle/'.$rpa['id'],'Read More'); ?> -->
                
            </div>
        </div>
    <?php endforeach; ?>  
</div>
</div>


