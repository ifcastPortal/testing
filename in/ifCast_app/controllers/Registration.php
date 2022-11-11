<?php
defined('BASEPATH') or exit('No direct script access allowed');
// use Smalot\PdfParser;

class Registration extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		// $this->load->helper('getCurlData');	
	}

	public function index()
	{
		$ifcast_log = $this->session->userdata('ifcast_log');
		if ($ifcast_log) {
			redirect('profile');  //registration_success
		}
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
				$res = getCurlData($url);
				$res = json_decode($res, true);
				if (!$res['success']) //[VINBO] remove ! on a server
				{
					$_POST['user_psalt'] = md5(random_string(4));
					$password = $_POST['user_psalt'] . md5($_POST['password']);
					$_POST['user_pass'] = $password;
					$last_insertid = $this->mainmodel->insertData('users');

					if ($last_insertid && $_FILES['resume']['name']) {

						include 'vendor/autoload.php';
						// include APPPATH . 'third_party\vendor\Smalot\PdfParser';					
						// $parser = new \Smalot\PdfParser\Parser();
						// $this->load->library('Pdfparser');
						// $parser = new Pdfparser();
						
						$image_name = $_FILES['resume']['name'];
						$temp = explode(".", $image_name);
						$to = $_POST['email'];
						$userName = (!empty($_POST['name'])) ? $_POST['name'] : time();
						$new_resumename = str_replace(" ", "_", $userName) . '.' . end($temp);
						$resumepath = "./assets/uploads/resums/" . $new_resumename;

						// $pdf = $parser->parseFile($image_name);
						// $text = $pdf->getText();
						// $pdfText = nl2br($text);

						if (move_uploaded_file($_FILES["resume"]["tmp_name"], $resumepath)) {
							$this->load->config('email');
							$this->load->library('email');
							include 'vendor/autoload.php';
							$from = $this->config->item('smtp_user');
							$from = 'career@ifcast.co.in';
							$this->email->set_newline("\r\n");
							$this->email->from('career@ifcast.co.in');
							$this->email->to($to);
							$this->email->bcc('onkarmagna@gmail.com');
							$this->email->subject('Dreamer Registration - iFCast Job Portal');

							$trial_name = $this->input->post('name');
							$data['mail_name'] = $trial_name;

							$message = $this->load->view('pages/email_template/welcomemessagedreamer', $data, true);
							$this->email->message($message);
							if ($this->email->send()) {
								$tbl_data['user_id'] = $last_insertid;
								$tbl_data['upload_file'] = $new_resumename;
								$tbl_data['upload_text'] = $pdfText;

								$last_insertid = $this->mainmodel->insert_tblRecords("user_resume", $tbl_data);
							} else {
								show_error($this->email->print_debugger());
							}
						}
					}
				} else {
					$last_insertid = "invalidRecaptcha";
				}
			}

			/* $session_data = array(
				'user_login' => '0',
				'user_type' => '1',
				'user_id' => $last_insertid,
	            );

	        $this->session->set_userdata($session_data); */

			if ($last_insertid)
				echo json_encode($last_insertid);
			else
				echo json_encode(0);

			exit;
		}

		load_view('registration', $data);
	}

	public function verify_otp()
	{
		load_view('verify_otp');
	}


	public function registration_success()
	{
		$data['sitePageName'] = 'Successful Dreamer Registration | iFCast Job Portal & Customized Services';
		load_view('registration_success', $data);
	}

	public function email_verification()
	{
		$email = $_POST['email'];
		$where = array('email' => $email, 'is_deleted' => '0');
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

		redirect('login');
	}



	// public function registration_previousCode()
	// {

	// 	$ifcast_log = $this->session->userdata('ifcast_log');
	// 	if ($ifcast_log) {
	// 		redirect('profile');  //registration_success
	// 	}
	// 	//echo "<pre> file===>"; print_r($_FILES); 
	// 	//echo "<pre> post===>".$_POST['action']; print_r($_POST); exit;;
	// 	if (isset($_POST['action']) && $_POST['action'] == 'add') {
	// 		$recaptcha = $_POST['g-recaptcha-response'];
	// 		$last_insertid = "blankRecaptcha";

	// 		if (empty($recaptcha)) //[VINBO] add ! on a server
	// 		{
	// 			$google_url = "https://www.google.com/recaptcha/api/siteverify";
	// 			$secret = '6LenV8EUAAAAAEAiyE_5DhaJZvsT093-jJZE3Kk6'; // Secrete key
	// 			$ip = $_SERVER['REMOTE_ADDR'];
	// 			$url = $google_url . "?secret=" . $secret . "&response=" . $recaptcha . "&remoteip=" . $ip;
	// 			$res = getCurlData($url);
	// 			$res = json_decode($res, true);
	// 			if (!$res['success']) //[VINBO] remove ! on a server
	// 			{
	// 				$_POST['user_psalt'] = md5(random_string(4));
	// 				$password = $_POST['user_psalt'] . md5($_POST['password']);
	// 				$_POST['user_pass'] = $password;
	// 				$last_insertid = $this->mainmodel->insertData('users');

	// 				if ($last_insertid && $_FILES['resume']['name']) {
	// 					$image_name = $_FILES['resume']['name'];
	// 					$temp = explode(".", $image_name);
	// 					$to = $_POST['email'];
	// 					$userName = (!empty($_POST['name'])) ? $_POST['name'] : time();
	// 					$new_resumename = str_replace(" ", "_", $userName) . '.' . end($temp);
	// 					$resumepath = "./assets/uploads/resums/" . $new_resumename;

	// 					if (move_uploaded_file($_FILES["resume"]["tmp_name"], $resumepath)) {
	// 						$this->load->config('email');
	// 						$this->load->library('email');
	// 						include 'vendor/autoload.php';
	// 						$from = $this->config->item('smtp_user');
	// 						$from = 'career@ifcast.co.in';
	// 						$this->email->set_newline("\r\n");
	// 						$this->email->from('career@ifcast.co.in');
	// 						$this->email->to($to);
	// 						$this->email->bcc('onkarmagna@gmail.com');
	// 						$this->email->subject('Dreamer Registration - iFCast Job Portal');

	// 						$trial_name = $this->input->post('name');
	// 						$data['mail_name'] = $trial_name;

	// 						$message = $this->load->view('pages/email_template/welcomemessagedreamer', $data, true);
	// 						$this->email->message($message);
	// 						if ($this->email->send()) {
	// 							$tbl_data['user_id'] = $last_insertid;
	// 							$tbl_data['upload_file'] = $new_resumename;
	// 							$last_insertid = $this->mainmodel->insert_tblRecords("user_resume", $tbl_data);
	// 						} else {
	// 							show_error($this->email->print_debugger());
	// 						}
	// 					}
	// 				}
	// 			} else {
	// 				$last_insertid = "invalidRecaptcha";
	// 			}
	// 		}

	// 		/* $session_data = array(
	// 			'user_login' => '0',
	// 			'user_type' => '1',
	// 			'user_id' => $last_insertid,
	//             );

	//         $this->session->set_userdata($session_data); */

	// 		if ($last_insertid)
	// 			echo json_encode($last_insertid);
	// 		else
	// 			echo json_encode(0);

	// 		exit;
	// 	}

	// 	load_view('registration', $data);
	// }
}
