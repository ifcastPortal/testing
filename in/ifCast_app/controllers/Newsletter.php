<?php

class Newsletter extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model("usermodel");
        $this->load->helper('url');
		$this->load->helper('date');
	} 	
	
	 public function index()
	{
    // 	$seesionArr = $this->session->userdata('ifcast_log');
    // 	$user_id = $seesionArr['user_id'];
        
    // 	$selectclaus = array('step');
    // 	$user_details = $this->mainmodel->select_object_row('users', array('user_id'=>$user_id), $selectclaus);
    // 	$step = $user_details->step;
    // 	switch($step)
    // 	{
    // 		case 1: redirect('profile/verify_otp'); break;
    // 		case 2: redirect('profile/profile_type'); break;
    // 		case 3: redirect('profile/work_details'); break;
    // 		case 4: redirect('profile/education_details'); break;
    // 		case 5: redirect('profile/extra_details'); break;
            
    // 		default: redirect('profile/dashboard'); break;
    // 	}
	
     }
    

    
    public function newsletterlist()
    {
        $data['onkarghule'] = $this->usermodel->newsletterlist();

        $data['subscriber_count']= count($this->usermodel->newsletterlist());

        load_view('ifcastadmindash/newsletterlist',$data);
    }


    public function subscription()
    {

        $this->form_validation->set_rules('newsletter_emailid','Email ID','trim|required');

        
       

        if ($this->form_validation->run() == TRUE)
        {
            
            $to = $this->input->post('newsletter_emailid');
            $datetime = now('Asia/Karachi');
            $dateTime = date('Y-m-d H:i:s');

            $data = array(
                'ns_email' => $to,
                'susbcribed_date' => $dateTime
            );
            

            if ($this->usermodel->newsletter_subscription($data))
			{


                $this->load->config('email');
                $this->load->library('email');
                
                $from = $this->config->item('smtp_user');
                
            
        
                $this->email->set_newline("\r\n");
                $this->email->from('career@ifcast.co.in');
                $this->email->to($to);
                $this->email->cc('nikhilm@vcsbim.com');
                $this->email->cc('onkarmagna@gmail.com');
        
                $this->email->subject('Newsletter Subscription');
                $this->email->message('Thank you for subscribing to iFCast Newsletters');
        
                if ($this->email->send()) {
                    echo 'Your Email has successfully been sent.';
                } else {
                    show_error($this->email->print_debugger());
                }
				
			}
			else
			{
				echo 'Database error';
            }
        }
        else
        {
            // load_view('profile/tempemail');
            load_view('profile/try');
        }
    }


    // public function verifyemail($str)
	// {
	// 	return true;
	// }

}