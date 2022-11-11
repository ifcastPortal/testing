<?php

class Profile extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model("usermodel");

		$this->load->model("jobs_model");
		$this->load->helper('url');
		check_login();
	}


	public function create_pageLinks($pageArr = array())
	{
		$activeclass = "";
		$total_pages = ceil($pageArr['total_records'] / $pageArr['limit']);
		$prev        = ($pageArr['page'] - 1);
		$next        = ($pageArr['page'] + 1);

		$call_jsFunction = (!empty($pageArr['call_jsFunction'])) ? $pageArr['call_jsFunction'] : "showReport";

		$data['srNo']       = ($pageArr['page'] * $pageArr['limit']) - $pageArr['limit'];
		$data['activepage'] = $pageArr['page'];

		$data['totalCount'] = $pageArr['total_records'];

		$data['pagLink']    = '<div class="pagination-list text-center">
								<nav class="navigation pagination">
									<div class="nav-links"> ';
		if ($prev != 0) {
			$data['pagLink']  .= '<a class="prev page-numbers" id="PageNo_' . $prev . '" onclick="' . $call_jsFunction . '(\'0\', ' . $prev . ')" style="padding:4px;cursor:pointer;"><i class="fas fa-angle-left"></i></a>';


			$data['pagLink'] .= '<span class="loader" id="loader_' . $prev . '">
				<i class="fa fa-spinner fa-pulse fa-3x fa-fw" style="font-size:17px;"></i>
			</span>';
		}

		for ($i = max(1, $pageArr['page'] - 3); $i <= min($pageArr['page'] + 3, $total_pages); $i++) {

			$activeclass = ($i == $pageArr['page']) ? 'current' : '';

			$data['pagLink'] .= '<a class="page-numbers ' . $activeclass . '" id="PageNo_' . $i . '" onclick="' . $call_jsFunction . '(\'0\', ' . $i . ')" style="padding:4px;cursor:pointer;">' . $i . '</a>';
			$data['pagLink'] .= '<span class="loader" id="loader_' . $i . '">
				<i class="fa fa-spinner fa-pulse fa-3x fa-fw" style="font-size:17px;"></i>
			</span>';
		}

		if ($next < $total_pages) {
			$data['pagLink'] .= '<a class="next page-numbers" id="PageNo_' . $next . '" onclick="' . $call_jsFunction . '(\'0\', ' . $next . ')" style="padding:4px;cursor:pointer;"><i class="fas fa-angle-right"></i></a>';

			$data['pagLink'] .= '<span class="loader" id="loader_' . $next . '">
				<i class="fa fa-spinner fa-pulse fa-3x fa-fw" style="font-size:17px;"></i>
			</span>';
		}


		$data['pagLink'] .= " </div>
                    </nav>                
                  </div>";

		return $data;
	}

	public function index()
	{
		$seesionArr = $this->session->userdata('ifcast_log');
		$user_id = $seesionArr['user_id'];

		$selectclaus = array('step');
		$user_details = $this->mainmodel->select_object_row('users', array('user_id' => $user_id), $selectclaus);
		$step = $user_details->step;
		switch ($step) {
			case 1:
				redirect('profile/verify_otp');
				break;
			case 2:
				redirect('profile/profile_type');
				break;
			case 3:
				redirect('profile/work_details');
				break;
			case 4:
				redirect('profile/education_details');
				break;
			case 5:
				redirect('profile/extra_details');
				break;

			default:
				redirect('profile/dashboard');
				break;
		}
		// $this->load->view('profile/education_details');		
	}




	public function joblistpage_searchform()
	{

		$data['pageName'] = 'jobspage';
		$data['sitePageName'] = 'Job Search Dreamer | iFCast Job Portal & Customized Services';
		//$data['posted_jobs'] = $this->mainmodel->select_object_result('jobpost', array('status'=>'1', 'is_deleted'=>'0'), $selectclaus);
		// $filter_data = array();


		$key = $this->input->post('jobtitle');


		$data['onkar_results'] = $this->jobs_model->onkar_searchform($key);
		// $data['posted_jobs'] = $this->jobs_model->get_searchJoblist($filter_data);

		load_view('jobs/joblistpagesearchresults', $data);
	}



	public function ifcasthome()
	{
		$subCityId = $this->input->post('city_id');

		$data['pageName'] = 'ifcasthome';
		$data['sitePageName'] = 'Home - Dreamer | iFCast Job Portal & Customized Services';
		$data['posted_jobs'] = $this->mainmodel->select_object_result('jobpost', array('status' => '1', 'is_deleted' => '0'));
		// $selectclaus = array('city_id', 'cityName', 'state_id');
		$data['cities'] = $this->mainmodel->select_object_result('tbl_city', array('status' => '1', 'state_id' => '22'));
		$data['subCities'] = $this->mainmodel->select_object_result('tbl_subcities', array('status' => '1','subCity_id','ASC')); //[VINBO] added query
		
		$data['industries_jobCounts'] = $this->jobs_model->get_industries_jobCounts('tbl_industry', array('status' => '1')); //[VINBO] added this query
		$data['industries'] = $this->mainmodel->select_object_result('tbl_industry', array('status' => '1'));  //[VINBO] added this query
		$data['job_count'] = $this->mainmodel->select_object_result('tbl_jobpost', array('status' => 1));//[VINBO] added this query using for getting job count on 

		load_view('profile/ifcasthome', $data);
	}

	public function dashboard()
	{

		$data['sitePageName'] = 'Dreamer Dashboard | iFCast Job Portal & Customized Services';

		$seesionArr = $this->session->userdata('ifcast_log');
		$user_id = $seesionArr['user_id'];

		$selectclaus = array('user_id', 'name', 'phone', 'email', 'city', 'phone_verified', 'email_verified', 'profile_pic', 'gender', 'experience_user', 'status');
		$data['user_details'] = $this->mainmodel->select_object_row('users', array('user_id' => $user_id), $selectclaus);

		$selectclaus = array();
		$data['user_resume'] = $this->mainmodel->select_object_row('user_resume', array('user_id' => $user_id), $selectclaus);

		$selectclaus = array();
		$data['user_certificates'] = $this->mainmodel->select_object_row('user_certificates', array('user_id' => $user_id), $selectclaus);

		// $selectclaus="";
		// $data['user_certificates'] = $this->mainmodel->select_object_result('user_certificates', array('user_id'=>$user_id));	 [VINBO] COMMENT THIS QUERY because already defined on top.

		
		$selectclaus = array();
		$data['userwork_details'] = $this->mainmodel->select_object_row('userworkdetails', array('user_id' => $user_id, 'is_deleted' => '0'), $selectclaus);

		$selectclaus = "";
		$data['userprevjob'] = $this->usermodel->userprevjob_details($user_id);

		$selectclaus = "";
		$data['educationDetail'] = $this->usermodel->educational_details($user_id);

		$data['degrees'] = $this->usermodel->extra_educations($user_id);

		load_view('profile/dashboard', $data);
	}

	function load_modelForm()
	{
		$seesionArr = $this->session->userdata('ifcast_log');
		$user_id = $seesionArr['user_id'];

		$id = $_POST['id'];
		$editDetails = $_POST['editDetails'];
		$action = $_POST['action'];
		$data['editDetails'] = $editDetails;
		$view = "";


		switch ($editDetails) {
			case "employment":
				$selectclaus = $data['userprevjob'] = array();
				if ($id != "add" && $id != "") {
					$data['userprevjob'] = $this->mainmodel->select_object_row('userprevjob', array('user_id' => $user_id, 'prevJobId' => $id), $selectclaus);
				}

				$data['prevJob_id'] = $id;
				$data['industries'] = $this->mainmodel->select_object_result('industry');
				$data['functionareas'] = $this->mainmodel->select_object_result('functionarea', array('status' => '1'));
				//$data['job_rol'] = $this->mainmodel->select_object_result('role', array('status'=>'1'));	
				$view = "profile/employment_model";
				break;

			case "userResume":

			case "profileSummary":
				$selectclaus = $data['userResume'] = array();

				if ($id != "add" && $id != "") {
					$data['userResume'] = $this->mainmodel->select_object_row('user_resume', array('id' => $id), $selectclaus);
				}
				$data['resume_id'] = $id;
				$view = "profile/userResume_model";
				break;

			case "userPassword":
				$data['user_id'] = $user_id;
				$view = "profile/editPassword_model";
				break;

			case "educationDetail":
				$selectclaus = $data['educationDetail'] = array();

				$data['qualification'] = array();
				$degree_whereClaus['status'] = '1';
				if ($action == "add") {
					$degreeId = $id;
					$degree_whereClaus['degreeId'] = $degreeId;
					$id = $action;
				} else {
					$data['educationDetail'] = $this->mainmodel->select_object_row('educationdetails', array('education_id' => $id), $selectclaus);

					$degreeId = $data['educationDetail']->degreeId;
				}

				$data['qualification'] = $this->mainmodel->select_object_result('qualification', array('degreeId' => $degreeId));
				//}	



				$data['degreeArr'] = $this->mainmodel->select_object_result('degree', $degree_whereClaus);
				$data['universities'] = $this->mainmodel->select_object_result('university', array('status' => '1'));

				$data['educationid'] = $id;
				$view = "profile/educationDetail_model";
				break;
		}

		$this->load->view($view, $data);
	}

	function password_verification()
	{
		$password_match = 0;
		if (!empty($_POST)) {

			$user_type = $_POST['chk_user_type'];

			$seesionArr = $this->session->userdata('ifcast_log');

			$user_id = $seesionArr['user_id'];

			$selectclaus = array('user_id', 'name', 'user_pass', 'user_psalt');
			$user_details = $this->mainmodel->select_object_row('users', array('user_id' => $user_id), $selectclaus);

			$user_psalt = $user_details->user_psalt;
			$user_pass = $user_details->user_pass;

			$prev_user_pass = $user_psalt . md5($_POST['prev_user_pass']);

			if ($prev_user_pass == $user_pass) {
				$password_match = 1;
			}
		}

		echo json_encode($password_match);
		exit;
	}

	function change_password()
	{
		$result = 0;
		if (!empty($_POST) &&  $_POST['new_password']) {
			$user_type = $_POST['chk_user_type'];

			$seesionArr = $this->session->userdata('ifcast_log');

			$user_id = $seesionArr['user_id'];

			$new_password = $_POST['new_password'];


			$_POST['user_psalt'] = md5(random_string(4));
			$password = $_POST['user_psalt'] . md5($new_password);
			$_POST['user_pass'] = $password;

			//echo "<pre> ===>".$user_id; print_r($_POST);exit;
			$updatedRec = $this->mainmodel->updateRecords('users', array('user_id' => $user_id));

			$result = 1;
		}

		echo json_encode($result);
		exit;
	}

	function update_userResume()
	{
		$seesionArr = $this->session->userdata('ifcast_log');
		$user_id = $seesionArr['user_id'];

		$updatedRec = 0;
		if (!empty($_POST) &&  $_POST['editDetails'] == "educationDetail") {
			$_POST['user_id'] = $user_id;
			$_POST['last_updated'] = date('Y-m-d H:i:s');
			if ($_POST['educationid'] == "add" || $_POST['educationid'] == "") {

				$updatedRec = $this->mainmodel->insertData('educationdetails');
			} else {
				$updatedRec = $this->mainmodel->updateRecords('educationdetails', array('education_id' => $_POST['educationid']));
			}
		} else {
			if ($_FILES['resume']['name']) {
				$image_name = $_FILES['resume']['name'];
				$temp = explode(".", $image_name);

				$userName = time();
				$new_resumename = str_replace(" ", "_", $userName) . '.' . end($temp);
				$resumepath = "./assets/uploads/resums/" . $new_resumename;
				if (move_uploaded_file($_FILES["resume"]["tmp_name"], $resumepath)) {
					$_POST['upload_file'] = $new_resumename;
				}
			}


			if (!empty($_POST)) {
				$_POST['user_id'] = $user_id;
				$_POST['last_updated'] = date('Y-m-d H:i:s');
				if ($_POST['resume_id'] == "add" || $_POST['resume_id'] == "") {

					$updatedRec = $this->mainmodel->insertData('user_resume');
				} else {
					$updatedRec = $this->mainmodel->updateRecords('user_resume', array('id' => $_POST['resume_id']));
				}
			}
		}

		if ($updatedRec)
			echo json_encode(1);
		else
			echo json_encode(0);

		exit;
	}
	function updated_employment()
	{
		$seesionArr = $this->session->userdata('ifcast_log');
		$user_id = $seesionArr['user_id'];
		$updatedRec = 0;
		if (!empty($_POST)) {
			$id = $_POST['prevJob_id'];
			$_POST['user_id'] = $user_id;
			//	echo "<pre>====>"; print_r($_POST); exit;

			$_POST['from_date'] = date("Y-m-d", strtotime($_POST['from_date']));
			$_POST['to_date'] = date("Y-m-d", strtotime($_POST['to_date']));
			//	echo "<pre>====>"; print_r($_POST); exit; 
			if ($_POST['prevJob_id'] == "add" || $_POST['prevJob_id'] == "") {
				$tbl_data['added_date'] = date('Y-m-d H:i:s');
				$updatedRec = $this->mainmodel->insertData('userprevjob');
			} else {
				$updatedRec = $this->mainmodel->updateRecords('userprevjob', array('prevJobId' => $id));
			}
		}

		//	echo "<pre>====>"; print_r($_POST); 

		if ($updatedRec)
			echo json_encode(1);
		else
			echo json_encode(0);

		exit;
	}

	public function profile_type()
	{
		$seesionData = $this->session->userdata('ifcast_log');
		$user_id = $seesionData['user_id'];
		// $user_email_id = $seesionData['email'];

		if (isset($_POST['action']) && $_POST['action'] != "") {
			$experience_user = (!empty($_POST['experience_user'])) ? $_POST['experience_user'] : '0';
			$userStep = ($experience_user == 1) ? '3' : '4';

			$affectedRows = update_userStep(array('experience_user' => $experience_user, 'step' => $userStep)); // helperFuntion


			echo json_encode($affectedRows);
			exit;
		}

		$data['action'] = 'add';

		$this->load->config('email');
		$this->load->library('email');


		// $this->load->library('email');


		$from = $this->config->item('smtp_user');
		// $to = $this->input->post('to');
		// $subject = $this->input->post('subject');
		// $message = $this->input->post('message');

		$this->email->set_newline("\r\n");
		$this->email->from('career@ifcast.co.in');
		$this->email->to('onkarmagna@gmail.com');
		$this->email->subject('Welcome to iFCast');

		// $html_content = $this->load->view('Pages/email_template/welcomemessagedreamer', $data);

		// $this->email->message($this->load->view('Pages/email_template/welcomemessagedreamer', $data);
		$this->email->message($this->load->view('Pages/email_template/welcomemessagedreamer', $data, true));

		if ($this->email->send()) {
			// echo 'Your Email has successfully been sent.';
		} else {
			show_error($this->email->print_debugger());
		}



		load_view('profile/profile_type', $data);
	}
	public function education_details()
	{


		$data['sitePageName'] = 'Dreamer Educational Details | iFCast Job Portal & Customized Services';
		$seesionData = $this->session->userdata('ifcast_log');
		$user_id = $seesionData['user_id'];

		if (isset($_POST['action']) && $_POST['action'] != "") {
			foreach ($_POST['degreeId'] as $key => $val) {
				$tbl_data = array(
					'user_id' => $user_id,
					'degreeId' => $_POST['degreeId'][$key],
					'qualification_id' => $_POST['qualification_id'][$key],
					'specialization_id' => $_POST['specialization_id'][$key],
					'specialization' => $_POST['specialization'][$key],
					'university_id' => $_POST['university_id'][$key],
					'education_type' => $_POST['education_type'][$key],
					'passing_year' => $_POST['passing_year'][$key],
				);
				$last_inserted = $this->mainmodel->insert_tblRecords("educationdetails", $tbl_data);
			}

			//echo "<pre> ===>"; print_r($_POST['certificationTitle']); exit;
			foreach ($_POST['certificationTitle'] as $key => $val) {
				$certificationDoc = "";
				if ($_FILES['certificationDoc']['name'][$key]) {
					$image_name = $_FILES['certificationDoc']['name'][$key];
					$temp = explode(".", $image_name);
					$userName = time();
					$new_resumename = str_replace(" ", "_", $userName) . '.' . end($temp);

					$resumepath = "./assets/uploads/certificates/" . $new_resumename;
					if (move_uploaded_file($_FILES["certificationDoc"]["tmp_name"][$key], $resumepath)) {
						$certificationDoc = $new_resumename;
					}
				}


				$tbl_data = array(
					'user_id' => $user_id,
					'certification_title' => $_POST['certificationTitle'][$key],
					'completion_year' => $_POST['completion_year'][$key],
					'certificationDoc_file' => $certificationDoc
				);
				$last_inserted = $this->mainmodel->insert_tblRecords("user_certificates", $tbl_data);
			}

			if ($last_inserted) {
				update_userStep(array('step' => '5')); // helperFuntion
			}

			echo json_encode(1);
			exit;
		}

		$data['action'] = 'add';
		$data['degreeArr'] = $this->mainmodel->select_object_result('degree', array('status' => '1'));
		$data['universities'] = $this->mainmodel->select_object_result('university', array('status' => '1'));
		load_view('profile/education_details', $data);
	}

	public function add_moreDetails($row_num = 1)
	{
		$data['row_num'] = $_POST['rowNum'] ? $_POST['rowNum'] : $row_num;
		$data['degreeArr'] = $this->mainmodel->select_object_result('degree', array('status' => '1'));
		$data['universities'] = $this->mainmodel->select_object_result('university', array('status' => '1'));
		$this->load->view('profile/add_moreDetails', $data);
	}

	public function ajax_verifyOtp()
	{
		$seesionArr = $this->session->userdata('ifcast_log');
		$user_id = $seesionArr['user_id'];
		$error_code = 0;
		$where = array('user_id' => $user_id, 'is_deleted' => '0');
		$selectclaus = array('mob_otp', 'mobOtp_startTime', 'email_otp', 'emailOtp_startTime');
		$Otp_details = $this->mainmodel->select_object_row('otpdetails', $where, $selectclaus);
		if ($Otp_details) {
			$email_otpDate = $Otp_details->emailOtp_startTime;
			$new_otpDate = date($email_otpDate, strtotime('+1 day'));
			$curr_time = date('Y-m-d H:i:s');
			//echo "email_otpDate: ".$new_otpDate;
			//echo "curr_time: ".$curr_time; exit;

			$otpVerified = 0;
			$complited_steps['step'] = '2';
			//echo $_POST['mob_otp'] . " === ". $Otp_details->mob_otp; exit;
			if ($_POST['mob_otp'] == $Otp_details->mob_otp) {
				$complited_steps['phone_verified'] = '1';
				$otpVerified = 1;
				//echo "phone_verified"; 
			} else
				$error_code = 4;


			$verify_later = $_POST['verify_later'] ? $_POST['verify_later'] : 0;
			if ($verify_later == 0) {
				if (strtotime($curr_time) >= strtotime($new_otpDate)) {
					if ($_POST['email_otp'] == $Otp_details->email_otp) {
						$complited_steps['email_verified'] = '1';
						$otpVerified = 1;
						$this->activeCampaign($seesionArr['user_email'], $seesionArr['user_name'], '-', $seesionArr['user_phone']);
					} else
						$error_code = 1;
				} else {
					$error_code = 2;
				}
			}
			//	echo "<br>otpVerified ==>";  	print_r($complited_steps); exit;

			if ($otpVerified == 1) {
				update_userStep($complited_steps); // helperFuntion
				$this->activeCampaign($seesionArr['user_email'], $seesionArr['user_name'], '-', $seesionArr['user_phone']);
			}
		} else {
			$error_code = 3;
		}

		echo json_encode($error_code);
	}

	public function verify_otp($email = "")
	{
		$data['sitePageName'] = 'Verify OTP Dreamer | iFCast Job Portal & Customized Services';

		$seesionArr = $this->session->userdata('ifcast_log');
		$user_id = $seesionArr['user_id'];

		//echo random_string(); exit;
		$where = array('user_id' => $user_id, 'is_deleted' => '0');
		$otp_details = $this->mainmodel->select_object_row('otpdetails', $where);
		//echo "<pre> ===>"; print_r($otp_details); exit;		
		if (!$otp_details) {
			$where = array('user_id' => $user_id, 'is_deleted' => '0');
			$selectClaus = array('email', 'phone');
			$user_details = $this->mainmodel->select_object_row('users', $where, $selectClaus);
			//echo "<pre> user_details ===>"; print_r($user_details); exit;	
			$userDetails['user_mail'] = $user_details->email;
			$userDetails['user_phone'] = $user_details->phone;
			$email_otp = random_string();
			$mob_otp = random_string();
			$affectedRows = $this->saveOTP($user_id, $mob_otp, $email_otp, $userDetails);
		}

		load_view('verify_otp', $data);
	}

	public function saveOTP($user_id, $mob_otp = "", $email_otp = "", $userDetails = array())
	{

		$otpdetails = $this->mainmodel->select_where_row('otpdetails', array('user_id' => $user_id));

		if ($mob_otp != "") {
			$_POST['mob_otp'] = $mob_otp;
			$_POST['mobOtp_startTime'] = date('Y-m-d H:i:s');

			$massage = "Your ifcast verification code is: " . $mob_otp;
			send_SMS($mob_otp, $userDetails['user_phone'], $massage);
		}

		if ($email_otp != "") {
			$_POST['email_otp'] = $email_otp;
			$_POST['emailOtp_startTime'] = date('Y-m-d H:i:s');

			$this->send_mail($email_otp, $userDetails['user_mail']);
		}

		if ($otpdetails) {
			$affectedRows = $this->mainmodel->updateRecords('otpdetails', array('user_id' => $user_id));
		} else {
			$_POST['user_id'] = $user_id;
			$affectedRows = $this->mainmodel->insertData('otpdetails');
		}

		return $affectedRows;
	}


	public function resend_otp($email = "")
	{
		$seesionArr = $this->session->userdata('ifcast_log');
		$user_id = $seesionArr['user_id'];

		$email_otp = $mob_otp = "";
		$error_code = 0;
		if (isset($_POST['resendOTP']) && $_POST['resendOTP'] == 'mob_otp') {
			$mob_otp = random_string();
			$error_code = 1;
		}

		if (isset($_POST['resendOTP']) && $_POST['resendOTP'] == 'email_otp') {
			$email_otp = random_string();
			$error_code = 2;
		}
		if ($email_otp != "" || $mob_otp != "") {
			$where = array('user_id' => $user_id, 'is_deleted' => '0');
			$selectClaus = array('email', 'phone');
			$user_details = $this->mainmodel->select_object_row('users', $where, $selectClaus);

			$userDetails['user_mail'] = $user_details->email;
			$userDetails['user_phone'] = $user_details->phone;

			$affectedRows = $this->saveOTP($user_id, $mob_otp, $email_otp, $userDetails);
			//	$this->send_mail($email_otp, $user_mail,);

		}
		echo json_encode($error_code);
	}
	public function send_mail($mail_OTP, $user_mail = "")
	{
		$message_body = "Hello, <br> &nbsp; Your OTP is <strong>" . $mail_OTP . "</strong>";
		//to = "yogesh@omwebsolution.com";
		$to = $user_mail ? $user_mail : "yogeshgadge92@gmail.com";
		$cc = "onkarmagna@gmail.com";
		$from = "yogeshgadge92@gmail.com";

		$subject = 'iFCast Registration OTP';

		$headers = "From: " . $from . "\r\n";
		$headers = "Cc: " . $cc . "\r\n";
		//$headers .= "Reply-To: ". strip_tags($_POST['req-email']) . "\r\n";
		$headers .= "MIME-Version: 1.0\r\n";
		$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

		$send = 0;
		if (mail($to, $subject, $message_body, $headers)) {
			$send = 1;
		}

		return $send;
	}


	public function add_moreExtraDetails($row_num = 1)
	{
		$data['row_num'] = $_POST['rowNum'] ? $_POST['rowNum'] : $row_num;

		$data['industries'] = $this->mainmodel->select_object_result('industry');
		$data['functionareas'] = $this->mainmodel->select_object_result('functionarea', array('status' => '1'));

		$data['job_rol'] = $this->mainmodel->select_object_result('role', array('status' => '1'));


		$this->load->view('profile/add_moreExtraDetails', $data);
	}


	public function extra_details()
	{

		$data['sitePageName'] = 'Personal Details - Dreamer	 | iFCast Job Portal & Customized Services';

		$seesionData = $this->session->userdata('ifcast_log');
		$user_id = $seesionData['user_id'];

		if (isset($_POST['action']) && $_POST['action'] == "Add") {

			//echo "<pre>"; print_r($_POST); exit; 
			$preffered = json_encode($_POST['preffered']);
			$user_dob = date("Y-m-d", strtotime($_POST['user_dob']));
			$userUpdate_rec = array(
				'gender' => $_POST['user_gender'],
				'marital_status' => $_POST['user_marital_status'],
				'city' => $_POST['user_city'],
				'state' => $_POST['user_state'],
				'zipcode' => $_POST['user_zipcode'],
				'address' => $_POST['address'],
				'step' => 6,
				'user_dob' => $user_dob,
				'preferred_location' => $preffered
			);
			$updatedRec = $this->mainmodel->updateRecords('users', array('user_id' => $user_id), $userUpdate_rec);

			$industry = $_POST['industry'];
			$jobpreferedId = $_POST['jobpreferedId'];

			if (!empty($industry)) {
				$no_of_rows = count($industry);
				for ($i = 0; $i < $no_of_rows; $i++) {
					$tbl_data = array(
						'user_id' => $user_id,
						'industry_id' => $industry[$i],
						'functional_area' => $_POST['functional_area'][$i],
						'role' => $_POST['user_role'][$i],
						'job_type' => $_POST['jobType'][$i],
						'work_type' => $_POST['worktype'][$i]
					);
					if (!empty($jobpreferedId[$i])) {
						$updatedRec = $this->mainmodel->updateRecords('jobpreference', array('jobprefered_id' => $jobpreferedId[$i]), $tbl_data);
					} else {
						$tbl_data['added_date'] = date('Y-m-d H:i:s');
						$updatedRec = $this->mainmodel->insert_tblRecords('jobpreference', $tbl_data);
					}
				}

				$preffered = json_encode($_POST['preffered']);
				$updatedRec = $this->mainmodel->updateRecords('userworkdetails', array('user_id' => $user_id), array('preferred_location' => $preffered));
			}

			update_userStep($userUpdate_rec);

			echo json_encode('1');
			exit;
		}
		$selectclaus = array('name', 'phone', 'email', 'profile_pic', 'gender', 'marital_status', 'address', 'city', 'state', 'country', 'zipcode', 'experience_user', 'status', 'user_dob', 'preferred_location');
		$data['user_details'] = $this->mainmodel->select_object_row('users', array('user_id' => $user_id), $selectclaus);

		// $selectclaus = array('state_id', 'name', 'country_id'); [VINBO] COMMENTED
		$data['states'] = $this->mainmodel->select_object_result('state', array('status' => '1', 'country_id' => '101'));
		// , $selectclaus [VINBO] REMOVED IN QUERY

		// $selectclaus = array('city_id', 'cityName', 'state_id');[VINBO] COMMENTED
		// $data['cities'] = $this->mainmodel->select_object_result('city', array('status' => '1', 'state_id' => '22')); [VINBO] COMMENTED

		$data['tbl_cities'] = $this->mainmodel->select_object_result('city', array('status' => '1', 'state_id' => '22'));


		$data['industries'] = $this->mainmodel->select_object_result('industry', array('status' => 1));

		// $data['jobpreference'] = $this->mainmodel->select_object_result('jobpreference', array('user_id' => $user_id, 'is_deleted' => '0'));[VINBO] COMMENTED
		

		$data['functionareas'] = $this->mainmodel->select_object_result('functionarea', array('status' => '1'));
		$data['job_rol'] = $this->mainmodel->select_object_result('role', array('status' => '1'));

		$data['action'] = 'Add';

		load_view('profile/personal_profile', $data);
	}

	public function loadCities($stateId = NULL)
	{
		$options = '<option value=""> select City </option>';
		if ($stateId != NULL) {
			$selectclaus = array('city_id', 'state_id', 'cityName');
			$cities = $this->mainmodel->select_object_result('city', array('state_id' => $stateId, 'status' => '1'), $selectclaus);

			foreach ($cities as $row) {
				$options .= '<option value="' . $row->city_id . '"> ' . $row->cityName . '</option>';
			}
		}
		echo $options;
		exit;
	}

	// [VINBO]added this function
	public function loadsubCities($cityId = NULL)
	{
		$options = '<option selected style="font-color:#6c757d;">Preffered Location</option>';
			$cities = "SELECT * FROM `tbl_subcities` WHERE city_id = $cityId";
			$data = $this->db->query($cities);
			$resultArr = $data->result();
			
			foreach ($resultArr as $row) {
				$options .= '<option value="' . $row->subCity_id . '"> ' . $row->subCity_name . '</option>';
			}
		
		echo  $options;
		
	}

	
	public function load_qualification($degreeId = NULL)
	{
		$selectclaus = "";

		if ($degreeId != NULL)
			$whereclause = array('degreeId' => $degreeId);

		$results = $this->mainmodel->select_object_result('qualification', $whereclause, $selectclaus);

		$options = '<option value=""> Highest Qualification </option>';
		foreach ($results as $row) {
			$options .= '<option value="' . $row->qualification_id . '"> ' . $row->qualification_name . '</option>';
		}
		echo $options;
		exit;
	}



	public function load_specialization($qualification_id = NULL)
	{
		$selectclaus = "";

		if ($qualification_id != NULL)
			$whereclause = array('qualification_id' => $qualification_id);

		$results = $this->mainmodel->select_object_result('specialization', $whereclause, $selectclaus);

		$options = '<option value=""> Specialization </option>';
		foreach ($results as $row) {
			$options .= '<option value="' . $row->specialization_id . '"> ' . $row->specialization_name . '</option>';
		}
		echo $options;
		exit;
	}


	public function load_jobRole($functionAreaId = NULL)
	{
		$selectclaus = "";

		if ($functionAreaId != NULL)
			$whereclause = array('functionAreaId' => $functionAreaId, 'status' => '1');

		$jobRoles = $this->mainmodel->select_object_result('role', $whereclause, $selectclaus);

		$options = '<option value=""> Job Role </option>';
		foreach ($jobRoles as $roles) {
			$options .= '<option value="' . $roles->role_id . '"> ' . $roles->role_name . '</option>';
		}
		echo $options;
		exit;
	}

	public function load_functionalArea($industryId = NULL)
	{
		$selectclaus = "";

		if ($industryId != NULL)
			$whereclause = array('industryId' => $industryId);

		$functionareas = $this->mainmodel->select_object_result('functionarea', $whereclause, $selectclaus);

		$options = '<option value=""> Functional Area </option>';
		foreach ($functionareas as $function_area) {
			$options .= '<option value="' . $function_area->functionAreaId . '"> ' . $function_area->functionArea . '</option>';
		}
		echo $options;
		exit;
	}




	public function work_details()
	{

		$seesionData = $this->session->userdata('ifcast_log');
		$user_id = $seesionData['user_id'];

		if (isset($_POST['action']) && $_POST['action'] == "Add") {
			$currentlyWorking = (isset($_POST['currentlyWorking']) && !empty($_POST['currentlyWorking'])) ? $_POST['currentlyWorking'] : '0';
			$total_experince = $_POST['exp_year'] . ":" . $_POST['exp_month'];

			$tbl_data = array(
				'user_id' => $user_id,
				'current_working' => $currentlyWorking,
				'total_experince' => $total_experince,
				'total_year' => $_POST['exp_year'],
				'total_month' => $_POST['exp_month'],
				'added_date' => date('Y-m-d H:i:s')
			);

			$updatedRec = $this->mainmodel->insert_tblRecords('userworkdetails', $tbl_data);
			$j = 0;
			if ($currentlyWorking == 0) {
				$j = 1;
			}

			$companyName = $_POST['companyName'];

			if (!empty($companyName)) {
				$no_of_rows = count($companyName);

				for ($i = $j; $i < $no_of_rows; $i++) {
					$notice_period = (!empty($_POST['Notice'][$i])) ? $_POST['Notice'][$i] : '0';
					$work_type = (!empty($_POST['worktype'][$i])) ? $_POST['worktype'][$i] : '';

					$lakhs = (!empty($_POST['lakhs'][$i])) ? $_POST['lakhs'][$i] : '0';
					$thousand = (!empty($_POST['thousand'][$i])) ? $_POST['thousand'][$i] : '0';
					$tbl_data = array(
						'user_id' => $user_id,
						'current_working' => $currentlyWorking,
						'prevJobCompany' => $_POST['companyName'][$i],
						'designation' => $_POST['designation'][$i],
						'company_address' => $_POST['location'][$i],
						'role_id' => $_POST['user_role'][$i],
						'notice_period' => $notice_period,
						'salary' => $lakhs . ":" . $thousand,
						'work_type' => $work_type,
						'from_date' => date("Y-m-d", strtotime($_POST['from_date'][$i])),
						'to_date' => date("Y-m-d", strtotime($_POST['to_date'][$i])),
						'industryId' => 1,
						'functionAreaId' => 1
					);

					$currentlyWorking = 0;
					$tbl_data['added_date'] = date('Y-m-d H:i:s');
					$updatedRec = $this->mainmodel->insert_tblRecords('userprevjob', $tbl_data);
				}
			}

			update_userStep(array('step' => '4'));

			echo json_encode('1');
			exit;
		}


		$selectclaus = array('name', 'phone', 'email', 'profile_pic', 'gender', 'marital_status', 'address', 'city', 'state', 'country', 'zipcode', 'experience_user', 'total_experience', 'status');
		$data['user_details'] = $this->mainmodel->select_object_row('users', array('user_id' => $user_id), $selectclaus);


		$selectclaus = array('state_id', 'name', 'country_id');
		$data['states'] = $this->mainmodel->select_object_result('state', array('status' => '1', 'country_id' => '101'), $selectclaus);




		$data['action'] = 'Add';
		load_view('profile/work_details', $data);
	}



	public function add_moreWorkDetails($row_num = 1)
	{
		$data['row_num'] = $_POST['rowNum'] ? $_POST['rowNum'] : $row_num;

		$data['industries'] = $this->mainmodel->select_object_result('industry');

		$this->load->view('profile/add_moreWorkDetails', $data);
	}



	public function profDetails($row_num = 1)
	{
		$data['user_details'] = "";
		$data['action'] = 'Add';
		load_view('profile/add_profDetails', $data);
	}



	/* Onkar created Functions for temporary pages -- START */
	public function alljobs()
	{
		load_view('jobs/alljobs');
		// , $data
	}
	public function jobslocation()
	{
		load_view('jobs/jobslocation');
		// , $data
	}

	public function jobscategory()
	{
		load_view('jobs/jobscategory');
		// , $data
	}


	public function joblistpage()
	{
		$filter_data = array();


		$data['limit'] = $this->input->post('limit') ? $this->input->post('limit') : '10';
		$data['page'] = $this->input->post('page') ? $this->input->post('page') : '1';
		$data['total_records'] = "all";

		if ($data['limit'] != "all") {

			$filter_data['get_totalCount'] = 1;
			$filter_data['total_records']  = $data['total_records'] = $this->jobs_model->get_searchJoblist($filter_data);

			$filter_data['limit']           = $data['limit'];
			$filter_data['page']            = $data['page'];
			$filter_data['start_from']      = ($filter_data['page'] - 1) * $filter_data['limit'];
			$filter_data['call_jsFunction'] = "pegination_script";
			$data['pagArr']                 = $this->create_pageLinks($filter_data);
		}

		$filter_data['get_totalCount'] = 0;

		$data['posted_jobs'] = $this->jobs_model->get_searchJoblist($filter_data);


		// $data['posted_jobs'] = $this->mainmodel->select_object_result('jobpost', array('status'=>'1', 'is_deleted'=>'0'), $selectclaus);

		load_view('jobs/joblistpage', $data);
	}





	public function jobdetail()
	{
		load_view('jobs/jobdetail');
		// , $data
	}

	public function userhome()
	{



		$seesionArr = $this->session->userdata('ifcast_log');
		$user_id = $seesionArr['user_id'];

		$selectclaus = array('user_id', 'name', 'phone', 'email', 'city', 'phone_verified', 'email_verified', 'profile_pic', 'gender', 'experience_user', 'status');
		$data['user_details'] = $this->mainmodel->select_object_row('users', array('user_id' => $user_id), $selectclaus);




		$data['get_appliedjoblist'] = $this->usermodel->get_appliedjoblist();
		$data['get_appliedjobinformation'] = $this->usermodel->get_appliedjobinformation();




		// $data['posted_jobs'] = $this->mainmodel->select_object_result('jobpost', array('status'=>'1', 'is_deleted'=>'0'), $selectclaus);
		load_view('profile/userhome', $data);
	}

	public function appliedjobs()
	{

		$seesionArr = $this->session->userdata('ifcast_log');
		$user_id = $seesionArr['user_id'];

		$selectclaus = array('user_id', 'name', 'phone', 'email', 'city', 'phone_verified', 'email_verified', 'profile_pic', 'gender', 'experience_user', 'status');
		$data['user_details'] = $this->mainmodel->select_object_row('users', array('user_id' => $user_id), $selectclaus);




		$data['get_appliedjoblist'] = $this->usermodel->get_appliedjoblist();
		$data['get_appliedjobinformation'] = $this->usermodel->get_appliedjobinformation();
		load_view('profile/appliedjobs', $data);
	}

	public function savedjobs()
	{
		$seesionArr = $this->session->userdata('ifcast_log');
		$user_id = $seesionArr['user_id'];

		$selectclaus = array('user_id', 'name', 'phone', 'email', 'city', 'phone_verified', 'email_verified', 'profile_pic', 'gender', 'experience_user', 'status');
		$data['user_details'] = $this->mainmodel->select_object_row('users', array('user_id' => $user_id), $selectclaus);




		$data['get_savedjoblist'] = $this->usermodel->get_savedjoblist();
		$data['get_appliedjobinformation'] = $this->usermodel->get_appliedjobinformation();
		load_view('profile/savedjobs', $data);
	}

	public function enablerlist()
	{
		$data['get_enablerlist'] = $this->usermodel->get_enablerlist();
		$data['get_jobcount'] = $this->usermodel->get_jobcount();



		load_view('recruiter/enablerlist', $data);
	}

	public function companylist()
	{
		$data['get_companylist'] = $this->usermodel->get_companylist();
		$data['get_jobcount'] = $this->usermodel->get_jobcount();
		load_view('recruiter/companylist', $data);
	}
	/* Onkar created Functions for temporary pages -- END */



	private function activeCampaign($email, $firstName, $lastName, $phone)
	{
		$ch = curl_init();
		$curlUrl = "https://cmogal.api-us1.com";
		$relativePath = "/api/3/contacts";
		$curlMethod = "POST";
		$fields = '{
			"contact": {
				"email": "' . $email . '",
				"firstName": "' . $firstName . '",
				"lastName": "' . $lastName . '",
				"phone": "' . $phone . '",
				"orgid": "317"
			}
		}';
		curl_setopt($ch, CURLOPT_URL, $curlUrl . $relativePath);
		curl_setopt($ch, CURLOPT_HTTPHEADER, array(
			"Api-Token: f08ad4cb4df6847230f8fc4745b4b59045697039fc97e24927c290b1ce87530f53fb50e0"
		));
		curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $curlMethod);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

		$data = curl_exec($ch);
		curl_close($ch);
		$data = json_decode($data);


		$contactId = $data->contact->id;
		$ch = curl_init();
		$curlUrl = "https://cmogal.api-us1.com";
		$relativePath = "/api/3/contactLists";
		$curlMethod = "POST";
		$fields = '{
			"contactList": {
				"list": 20,
				"contact": ' . $contactId . ',
				"status": 1
			}
		}';

		curl_setopt($ch, CURLOPT_URL, $curlUrl . $relativePath);
		curl_setopt($ch, CURLOPT_HTTPHEADER, array(
			"Api-Token: f08ad4cb4df6847230f8fc4745b4b59045697039fc97e24927c290b1ce87530f53fb50e0"
		));
		curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $curlMethod);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$data = curl_exec($ch);
		curl_close($ch);
	}
	//Active campaign close


	public function newslettersubscriber() //[VINBO] Added this function
	{
		$email = $_POST['to'];

		$this->load->config('email');
		$this->load->library('email');

		$this->email->set_newline("\r\n");
		$this->email->set_crlf("\r\n");

		$this->email->from('career@ifcast.co.in');
		$this->email->to($email);
		$this->email->subject('test email');

		// $link = $this->load->view('pages/email_template/forgotPassword_dreamer','',true);

		$this->email->message('testing email');

		if ($this->email->send()) {
			echo "<script>alert('Please checked your email')</script>";
		} else {
			echo $this->email->print_debugger();
		}

		$this->session->set_flashdata('our_jobs', 'Thanks...');
		$this->session->set_flashdata('special_offers', 'Thanks...');

		redirect(base_url());
	}
}
