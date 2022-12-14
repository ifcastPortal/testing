<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Tempemail extends CI_Controller {

    public function __construct() {
        parent:: __construct();

        $this->load->helper('url');
    }

    public function index() {
       
        load_view('profile/tempemail');
    }

    function send() {
        $this->load->config('email');
        $this->load->library('email');


        // $this->load->library('email');
        
        
        $from = $this->config->item('smtp_user');
        $to = $this->input->post('to');
        $subject = $this->input->post('subject');
        $message = $this->input->post('message');

        $this->email->set_newline("\r\n");
        $this->email->from('career@ifcast.co.in');
        $this->email->to('onkarmagna@gmail.com');
        $this->email->subject($subject);
        $this->email->message($message);

        if ($this->email->send()) {
            echo 'Your Email has successfully been sent.';
        } else {
            show_error($this->email->print_debugger());
        }
    }
}