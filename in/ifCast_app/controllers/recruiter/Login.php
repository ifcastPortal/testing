<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{


	public function index()
	{
		$onkartry['sitePageName'] = 'Login Enabler | iFCast Job Portal & Customized Services';
		if (isset($_POST['login'])) {
			$error_code = 0;
			$usrename = $_POST['username'] ? $_POST['username'] : "";
			$password = $_POST['password'] ? $_POST['password'] : "";

			if (!$usrename) {
				$error_code = 1;
			}
			if (!$password && $error_code == 0) {
				$error_code = 2;
			}

			if ($error_code == 0) {
				$where = array('email' => $usrename, 'user_type' => '2', 'is_deleted' => '0');
				$user_details = $this->mainmodel->select_object_row('users', $where);
				if ($user_details) {
					$user_psalt = $user_details->user_psalt;
					$user_pass = $user_details->user_pass;
					$password = $user_psalt . md5($password);
					if ($password == $user_pass) {
						$session_data['ifcast_recruiterLog'] = array(
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
					} else {
						$error_code = 4;
					}
				} else {
					$error_code = 3;
				}
			}

			echo json_encode($error_code);
			exit;
		}
		//$this->load->view('login');
		$data = array();
		$this->load->view('header', $onkartry);
		//$this->load->view('layouts/regisheader', $data);
		$this->load->view('recruiter/login');
		$this->load->view('footer');
	}


	public function Out()
	{
		$this->session->sess_destroy();
		// $this->session->unset_userdata('ifcast_recruiterLog');
		redirect('recruiter/login');
	}

	public function forgot_password()
	{
		load_view('recruiter/forgotpassword');
	}


	public function reset_password()
	{

		$email = $_POST['user_email'];

		$this->load->config('email');
		$this->load->library('email');

		$this->email->set_newline("\r\n");
		$this->email->set_crlf("\r\n");
		$this->email->from('career@ifcast.co.in');
		$this->email->to($email);
		$this->email->subject('Forgot Password');
		
		// $link = "Click on this link and forgot your password- <a href='http://localhost/ifcast/in/recruiter/login/forgot_password'> http://localhost/ifcast/in/recruiter/login/forgot_password </a>";
		$link = $this->load->view('pages/email_template/forgotPassword_enabler','', true);

		$this->email->message($link);

		if ($this->email->send()) {
			echo "<script>alert('Please checked your email')</script>";
		} else {
			echo $this->email->print_debugger();
		}

		load_view('recruiter/login');
	}
}
