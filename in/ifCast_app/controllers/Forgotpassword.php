<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Forgotpassword extends CI_Controller {

	
	public function index()
	{		
		$data['sitePageName'] = 'Forgot Password | iFCast Job Portal & Customized Services';
		$ifcast_log = $this->session->userdata('ifcast_log');
		if($ifcast_log)
		{
			 redirect('profile');
		}
		
		if(isset($_POST['login']))
		{
			$error_code = 0;
			$usrename = $_POST['username'] ? $_POST['username'] : "";
			$password = $_POST['password'] ? $_POST['password'] : "";
			
			if(!$usrename)
			{
				$error_code = 1;
			}
			if(!$password && $error_code == 0)
			{
				$error_code = 2;
			}
			
			if($error_code == 0)
			{
				$where = array('email'=>$usrename, 'user_type'=>'1', 'is_deleted'=>'0');
				$user_details = $this->mainmodel->select_object_row('users', $where);
				if($user_details)
				{
					$user_psalt = $user_details->user_psalt;
					$user_pass = $user_details->user_pass;
					$password = $user_psalt.md5($password);
					if($password == $user_pass)
					{
						$session_data['ifcast_log'] = array(
							'user_type' => $user_details->user_type,
							'user_id' => $user_details->user_id,
							'user_name' => $user_details->name,
							'user_email' => $usrename
						);

						$this->session->set_userdata($session_data);
						
						$tbl_data['user_id'] = $user_details->user_id;
						$tbl_data['last_login'] = date("Y-m-d H:i:s");
						$tbl_data['login_ip'] = "";
						
						$this->mainmodel->insert_tblRecords('userlog', $tbl_data);
					}
					else
					{
						$error_code = 4;
					}
				}
				else
				{
					$error_code = 3;
				}
			}
			
			echo json_encode($error_code); exit;
                
		}
		//$this->load->view('login');
		
		$this->load->view('header',$data);
		$this->load->view('forgotpassword');	
		$this->load->view('footer');
	}
    
    
    
	
	function send() {


        $this->load->config('email');
        $this->load->library('email');

        // $this->load->library('email');
        
        $onkar_password_input = $this->input->post('password');

        $onkar_user_psalt = md5(random_string(4));
		$onkar_password = $onkar_user_psalt.md5($onkar_password_input);
		
													
        // $last_insertid = $this->mainmodel->insertData('users');
        
        // $this->mainmodel->insertData('users')

        
        $from = $this->config->item('smtp_user');
        $to = $this->input->post('to');
        // $subject = $this->input->post('subject');
        // $message = $this->input->post('message');

        $this->email->set_newline("\r\n");
        $this->email->from('career@ifcast.co.in');
        $this->email->to($to);
        $this->email->bcc('onkarmagna@gmail.com');
        $this->email->subject('iFCast - Dreamer Password change');
        $this->email->message('Your iFCast Dreamer login password is successfully reset to:'.$onkar_password_input);


        $data = array(
			'user_pass' => $onkar_password,
			'user_psalt' => $onkar_user_psalt
        );
        
        if ($this->email->send())
        {
            if($this->mainmodel->onkar_update_password($data,$to))
		    {
                redirect('login');
		    }
		    else
		    {
			    echo 'Account does not exist';
            }

        } 
        else 
        {
            show_error($this->email->print_debugger());
        }

    }
}
