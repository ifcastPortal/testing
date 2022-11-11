<?php

class Automail extends CI_Controller {

	public function __construct()
	{
        parent::__construct();
        $this->load->model("Mailedstatus");
		check_login(2);
    }

    public function report(){
        
        
        $this->load->model("Mailedstatus");
        $new_enabler_count=(array)$this->Mailedstatus->new_enabler_count();
        $new_dreamer_count=(array)$this->Mailedstatus->new_dreamer_count();
        $total_enabler_count=(array)$this->Mailedstatus->total_enabler_count();
        $total_dreamer_count=(array)$this->Mailedstatus->total_dreamer_count();
        
        $this->load->config('email');
        $this->load->library('email');
        $from = $this->config->item('smtp_user');
        // $this->email->set_header('MIME-Version', '1.0');
        // $this->email->set_header('Content-type', 'text/html;charset=UTF-8');
        $this->email->set_newline("\r\n");
        $this->email->from('career@ifcast.co.in');
        $this->email->to('onkarmagna@gmail.com');
        // $this->email->bcc('onkarmagna@gmail.com');
        $this->email->subject('Test mail');
        $msg="Report Generation Time: ".date("d-M-Y h:i:sa")."<br>
        New Enabler: ".$new_enabler_count['COUNT(user_id)']."<br>
        Total Enabler: ".$total_enabler_count['COUNT(user_id)']."<br>
        New Dreamer: ".$new_dreamer_count['COUNT(user_id)']."<br>
        Total Dreamer: ".$total_dreamer_count['COUNT(user_id)']."<br>";
        $this->email->message($msg);
        if($this->email->send()){
            $total_user=$this->Mailedstatus->last_user_id()->user_id;
            $this->Mailedstatus->update_user_count($total_user);
        } 
    }
    public function model_test(){
        echo date('d-M-Y h:i:sa');
        exit();
    }
}