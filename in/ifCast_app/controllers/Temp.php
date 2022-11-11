<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Temp extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
    }

    public function index()
    {

        $PageView = 'upload_form';
        $error = '';
        $data = array(
            'error' => $error,
            'PageView' => $PageView
        );

       
        load_view('profile/tempfile', $data);
    }


    public function do_upload()
    {
       
            $config['upload_path'] = './uploads/';
            $config['allowed_types'] = 'pdf|doc|docx';
            $config['max_size'] = 2000000;

            $filename= $_FILES["userfile"]["name"];
            $file_ext = pathinfo($filename,PATHINFO_EXTENSION);

            $fullname=$this->input->post('fullname');

            $new_name = 'Resume_'.$fullname;
            $config['file_name'] = $new_name;


            $this->load->library('upload', $config);

            if ( ! $this->upload->do_upload('userfile'))
            {
              
                $error = array(
                    'error' => $this->upload->display_errors(),
                    'PageView' => $PageView
                );
                load_view('profile/tempfile', $data);

            }

            else
            {


                $image_data = $this->upload->data();
                $fname=$image_data['file_name'];
                $fpath=$image_data['file_path'].$fname;

                load_view('profile/ifcasthome', $data);
              
                
            }

        
    }
   



    

}