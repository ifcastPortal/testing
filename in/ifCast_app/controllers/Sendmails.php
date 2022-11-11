<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Sendmails extends CI_Controller {

    public function __construct() {
        parent:: __construct();

        // $this->load->helper('url');
        $this->load->helper(array('form', 'url'));
    }

    public function index() {

        $this->load->view('pages/contact');
        $error = '';
        $data = array(
            'error' => $error
            
        );

    }

    function send() {
        $this->load->config('email');
        $this->load->library('email');
        
        $from = $this->config->item('smtp_user');

        $username = $this->input->post('username');
        $to = $this->input->post('to');
        $phoneno = $this->input->post('phoneno');
        $message = $this->input->post('message');

        $this->email->set_newline("\r\n");
        $this->email->from($from);
        
        $this->email->to($to);
        $this->email->bcc('onkarg@ifcast.com');
        $this->email->subject('iFCast Job Portal - Enquiry');

        $data['message']=$message;
        $data['userfullname']=$username;
        $data['useremailid']=$to;
        $data['phoneno']=$phoneno;
        
        
        $this->email->message($this->load->view('Pages/email_template/consultancycontact', $data, true));


        if ($this->email->send())
        {

            $data['emailStatus']='Email has been sent successfully.';
            $data['PageView']='Pages/contact';
            $this->load->view('Layouts/master',$data);  // [VINBO] MASTER.PHP FILE MISSING IN LAYOUTS FOLDER
        } 
        else {
            show_error($this->email->print_debugger());
        }

        redirect('ifcastportal/contactus');
    }
    



    function dreamercallback()
    {
        $this->load->config('email');
        $this->load->library('email');
        
        $from = $this->config->item('smtp_user');

        $username = $this->input->post('username');
        $to = $this->input->post('to');
        $phoneno = $this->input->post('phoneno');

        $this->email->set_newline("\r\n");
        $this->email->from($from);
        
        $this->email->to($to);
        $this->email->bcc('onkarg@ifcast.com');
        $this->email->subject('iFCast - Dreamer call back request');

        $data['userfullname']=$username;
        $data['useremailid']=$to;
        $data['phoneno']=$phoneno;
        
        
        $this->email->message($this->load->view('Pages/email_template/callbackrequest', $data, true));


        if ($this->email->send())
        {
            $data['emailStatus']='Email has been sent successfully.';
            $data['PageView']='Pages/dreamer';
            $this->load->view('Layouts/master',$data);
        } 
        else {
            show_error($this->email->print_debugger());
        }

    }


    function enablercallback()
    {
        $this->load->config('email');
        $this->load->library('email');
        
        $from = $this->config->item('smtp_user');

        $username = $this->input->post('username');
        $to = $this->input->post('to');
        $phoneno = $this->input->post('phoneno');

        $this->email->set_newline("\r\n");
        $this->email->from($from);
        
        $this->email->to($to);
        $this->email->bcc('onkarg@ifcast.com');
        $this->email->subject('iFCast - Enabler call back request');

        $data['userfullname']=$username;
        $data['useremailid']=$to;
        $data['phoneno']=$phoneno;
        
        
        $this->email->message($this->load->view('Pages/email_template/callbackrequest', $data, true));


        if ($this->email->send())
        {
            $data['emailStatus']='Email has been sent successfully.';
            $data['PageView']='Pages/enabler';
            $this->load->view('Layouts/master',$data);
        } 
        else {
            show_error($this->email->print_debugger());
        }

    }


    function appliedjob()
    {


        $this->form_validation->set_rules('to','Email ID','trim|required');
        $this->form_validation->set_rules('username','Full Name','trim|required');
        // $this->form_validation->set_rules('termsandcondition','Terms and Condition','trim|required');

        if($this->form_validation->run()=== False)
		{   
			$data['PageView'] = 'Pages/joblist';
			$this->load->view('Layouts/master', $data);
        }

        else
        {
           
            $this->load->config('email');
            $this->load->library('email');
            
            $from = $this->config->item('smtp_user');

            $username = $this->input->post('username');
            $to = $this->input->post('to');
        
            $jobname = $this->input->post('jobname');
            $jobid = $this->input->post('jobid');

            $this->email->set_newline("\r\n");
            $this->email->from($from);
            
            $this->email->to($to);
            $this->email->bcc('onkarg@ifcast.com');
            $this->email->subject('iFCast Consultancy - Job Applied');

        
            $data['userfullname']=$username;
            $data['useremailid']=$to;

            $data['jobname'] = $jobname;
            $data['jobid']= $jobid;
        
            $this->email->message($this->load->view('Pages/email_template/jobapplied', $data, true));


            if ($this->email->send())
            {
                $data['emailStatus']='Email has been sent successfully.';
                $data['PageView']='Pages/contact';
                $this->load->view('Layouts/master',$data);
            } 
            else {
                show_error($this->email->print_debugger());
            }
            
        }

    }

    function newslettersubscribe() {


        $this->load->config('email');
        $this->load->library('email');
        
        $from = $this->config->item('smtp_user');
        $to = $this->input->post('to');
        $PageView = $this->input->post('PageView');

        $this->email->set_newline("\r\n");
        $this->email->from($from);
        
        $this->email->to($to);
        $this->email->bcc('onkarg@ifcast.com');
        $this->email->bcc('nikhilm@ifcast.com');
        $this->email->bcc('nikhilm@vcsbim.com');

        $this->email->subject('iFCast - Newsletter Subscription');

      
        $data['useremailid']=$to;
         
        
        $this->email->message($this->load->view('Pages/email_template/newslettersubscription', $data, true));


        if ($this->email->send())
        {
            $data['emailStatusnewsletter']='Email has been sent successfully.';
            $data['PageView']= $PageView;
            
            $this->load->view('Layouts/master',$data);
        } 
        else {
            show_error($this->email->print_debugger());
        }
    }
}