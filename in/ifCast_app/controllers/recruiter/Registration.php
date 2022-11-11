<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Registration extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		//$this->load->helper('getCurlData');		
	}

	public function index()
	{
		$data['sitePageName'] = 'Registration Enabler | iFCast Job Portal & Customized Services';
		//echo "<pre> file===>"; print_r($_FILES); 
		//echo "<pre> post===>".$_POST['action']; print_r($_POST); exit;;
		
		if (isset($_POST['action']) && $_POST['action'] == 'add') {

			$recaptcha = $_POST['g-recaptcha-response'];
			$last_insertid = "blankRecaptcha";
			if (empty($recaptcha)) //[VINBO] add ! on a server
			{

				$google_url = "https://www.google.com/recaptcha/api/siteverify";
				$secret = '6LenV8EUAAAAAEAiyE_5DhaJZvsT093-jJZE3Kk6'; // Secrete key
				$ip = $_SERVER['REMOTE_ADDR'];
				$url = $google_url . "?secret=" . $secret . "&response=" . $recaptcha . "&remoteip=" . $ip;
				$to = $_POST['email'];
				$name = $this->input->post('name');
				$res = getCurlData($url);
				$res = json_decode($res, true);
				if (!$res['success'])  //[VINBO] remove ! on a server
				{

					$this->load->config('email');
					$this->load->library('email');
					$from = $this->config->item('smtp_user');
					$this->email->set_newline("\r\n");
					$this->email->from('career@ifcast.co.in');
					$this->email->to($to);
					$this->email->bcc('onkarmagna@gmail.com');
					$this->email->subject('Enabler Registration - iFCast Job Portal');
					$user_name = $to;
					// $user_email = 'vino@gmail.com';
					$data['mail_name'] = $name;
					// $data['mail_email'] = $user_email;
					$message = $this->load->view('pages/email_template/welcomemessageenabler', $data, true);
					$this->email->message($message);

					if ($this->email->send()) {
						$_POST['user_psalt'] = md5(random_string(4));
						$password = $_POST['user_psalt'] . md5($_POST['password']);
						$_POST['user_pass'] = $password;
						$_POST['user_type'] = '2';
						$last_insertid = $this->mainmodel->insertData('users');
					} else {
						show_error($this->email->print_debugger());
					}
				} else {
					$last_insertid = "invalidRecaptcha";
				}
			}


			if ($last_insertid)
				echo json_encode($last_insertid);
			else
				echo json_encode(0);

			exit;
		}

		load_view('recruiter/registration', $data);
	}

	public function verify_otp()
	{
		$data['applyJobNotifications'] =$this->db->count_all_results('tbl_apply_job'); //[VINBO] added this query using for notifications

		load_view('recruiter/verify_otp',$data);
	}

	public function registration_success()
	{
		$data['sitePageName'] = 'Successful Dreamer Registration | iFCast Job Portal & Customized Services';
		load_view('recruiter/registration_success');
	}

	public function email_verification()
	{
		$email = $_POST['email'];
		$where = array('email' => $email, 'user_type' => '2', 'is_deleted' => '0');
		$result = $this->mainmodel->select_where_row('users', $where, array('email'));

		if ($result)
			echo json_encode(1);
		else
			echo json_encode(0);

		exit;
	}

	public function logout()
	{
		$this->session->sess_destroy();

		redirect('recruiter/login');
	}
}
