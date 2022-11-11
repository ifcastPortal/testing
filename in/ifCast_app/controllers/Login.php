<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	
	public function index()
	{		
		$data['sitePageName'] = 'Login Dreamer | iFCast Job Portal & Customized Services';
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
							'user_email' => $usrename,
							'user_phone' => $user_details->phone
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
		$this->load->view('login');	
		$this->load->view('footer');
	}
	
	
	public function resetPassword()
	{
		
	}
	
	public function forgotPassword()
	{
		//echo "<pre> ===>"; print_r($_POST); exit;
		$result=0;
		if(isset($_POST['user_email']))
		{
			$user_email = $_POST['user_email'];
			$user_type = $_POST['user_type'] ? $_POST['user_type'] : 1;
			
			$where = array('email'=>$user_email, 'user_type'=>$user_type, 'is_deleted'=>'0');
			$selectclaus = array('user_id', 'user_pass', 'user_psalt');
			$user_details = $this->mainmodel->select_object_row('users', $where, $selectclaus);
			
			if($user_details)  
			{
				$user_id = $user_details->user_id;
				
				$new_password = $_POST['new_password'];
				unset($_POST);
				
				/* $auth_key = time()."_".$user_id;
				$tbl_data['user_id'] = $user_id;
				$tbl_data['auth_key'] = base64_encode($auth_key);
				$tbl_data['added_date'] = date("Y-m-d H:i:s");
				$tbl_data['login_ip'] = "";
				
				$url =  base_url() ."login/resetPassword?athKey=".$auth_key;
				$mssg=" Reset Your Password to <a href='".$url."'>click</a> here. ";
				$this->send_mail($user_email, $mssg);
				
						
				$this->mainmodel->insert_tblRecords('forgotPassword_history', $tbl_data); */
			
				 $_POST['user_psalt'] = md5(random_string(4));
				$password = $_POST['user_psalt'].md5($new_password);
				$_POST['user_pass'] = $password;
				//echo "<pre> ===>"; print_r(array('user_id'=>$user_id)); exit;
				$updatedRec = $this->mainmodel->updateRecords('users', array('user_id'=>$user_id)); 
			
				$result = 1;
			}
			else{
				$result=0;
			}
			
		}
			echo json_encode($result); exit;
	}
	
	public function send_mail($to, $mssg="")
	{
		$message_body = "Hello, <br> &nbsp;";
		$message_body .= $mssg;
		$message_body = " <br> &nbsp; Thanks,";
			//to = "yogesh@omwebsolution.com";
		$to = $to ? $to : "yogeshgadge92@gmail.com";							
		$cc = "onkarmagna@gmail.com";
		$from = "yogeshgadge112@gmail.com";
		
			
		$subject = 'iFCast reset password';
			
		$headers = "From: " . $from . "\r\n";
		$headers = "Cc: " . $cc . "\r\n";
			//$headers .= "Reply-To: ". strip_tags($_POST['req-email']) . "\r\n";
		$headers .= "MIME-Version: 1.0\r\n";
		$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
			
		$send =0;
		if (mail($to, $subject, $message_body, $headers))
		{
			$send =1;
		}
			
		return $send;
	}
	
	public function Out()
	{
		$this->session->sess_destroy();
	   // $this->session->unset_userdata();
	    redirect('login');
	}

	

	public function forgot_password()
	{
		load_view('forgotpassword');
	}


	public function reset_password()  //[VINBO] Added this function
	{

		$email = $_POST['user_email'];

		$this->load->config('email');
		$this->load->library('email');

		$this->email->set_newline("\r\n");
		$this->email->set_crlf("\r\n");

		$this->email->from('career@ifcast.co.in');
		$this->email->to($email);
		$this->email->subject('Forgot Password');
		
		// $link = "Click on this link and forgot your password- <a href='http://localhost/ifcast/in/login/forgot_password'>http://localhost/ifcast/in/login/forgot_password</a>";
		$link = $this->load->view('pages/email_template/forgotPassword_dreamer','',true);

		$this->email->message($link);

		if ($this->email->send()) {
			echo "<script>alert('Please checked your email')</script>";
		} else {
			echo $this->email->print_debugger();
		}

		load_view('login');
	}
}
