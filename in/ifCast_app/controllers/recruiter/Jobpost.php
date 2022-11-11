<?php

class Jobpost extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model("usermodel");
		$this->load->model("webhook");
		check_login(2);
	} 	
	
	public function index()
	{
		$seesionData = $this->session->userdata('ifcast_recruiterLog');	
		$user_id = $seesionData['user_id'];
		
		$data['applyJobNotifications'] =$this->db->count_all_results('tbl_apply_job'); //[VINBO] added this query using for notifications
		$data['getusername'] =$this->db->select('*')->join('tbl_users','tbl_users.user_id = tbl_apply_job.user_id')->order_by('userJobId','DESC')->get('tbl_apply_job')->result(); //[VINBO] added this query using for getting applicant name
		$data['getjobtitle'] =$this->db->select('*')->join('tbl_jobpost','tbl_jobpost.jobpost_id = tbl_apply_job.jobpost_id')->order_by('userJobId','DESC')->get('tbl_apply_job')->result(); //[VINBO] added this query using for getting job title

		if(isset($_POST['action']))
		{
			$preffered = json_encode($_POST['preffered']);
			$user_dob = date("Y-m-d", strtotime($_POST['user_dob']));
				
			$company_name = $_POST['company_name']."_jobPost_".time();		
			if($_FILES['company_logo']['name'])
			{				
				$image_name=$_FILES['company_logo']['name'];
				$temp = explode(".", $image_name);				
				$userName = time();
				$new_name = str_replace(" ","_", $company_name) . '.' . end($temp);
				
				$uploadpath="./assets/uploads/company_logo/".$new_name;
				if(move_uploaded_file($_FILES["company_logo"]["tmp_name"],$uploadpath))
				{
					$_POST['comp_logo'] = $new_name;
				}
			}
			
			$companyLocation = $_POST['companyLocation'];
			for($i=0; $i<3; $i++)
			{
				$y = $i+1;
				$_POST["location_".$y] = (!empty($companyLocation[$i])) ? $companyLocation[$i] : "";
			}
				
			$_POST['company_location'] = json_encode($_POST['companyLocation']);
			$_POST['is_discloseSalary'] = (isset($_POST['is_discloseSalary'])) ? '1' : '0';
			
			if($_POST['action']=="Add")
			{
				$_POST['user_id'] = $user_id;
				$_POST['jobPostDate'] = date('Y-m-d H:i:s');
				$updatedRec = $this->mainmodel->insertData('jobpost');
				$this->linkedin_post();
				$this->facebook_post();
			}
			else 
				if(!empty($_POST['action']))
				{
					$_POST['last_updated'] = date('Y-m-d H:i:s');
					$updatedRec = $this->mainmodel->updateRecords('jobpost', array('jobpost_id'=>$_POST['action']));
				}
			
			
			echo json_encode('1'); exit;
		}	
		
		//[VINBO] commented here
		// $selectclaus = array('state_id', 'name', 'country_id');, $selectclaus

		$data['states'] = $this->mainmodel->select_object_result('tbl_state', array('status'=>'1', 'country_id'=>'101'));

		// $selectclaus = array('city_id', 'cityName', 'state_id');, $selectclaus
		$data['cities'] = $this->mainmodel->select_object_result('tbl_city', array('status'=>'1', 'state_id'=>'22'));
		
		$data['industries'] = $this->mainmodel->select_object_result('tbl_industry', array('status' =>'1'));
		

		$data['functionareas'] = $this->mainmodel->select_object_result('functionarea', array('status'=>'1'));	
		
		$data['job_rol'] = $this->mainmodel->select_object_result('role', array('status'=>'1'));
		
		
		$data['companydetails'] = $this->mainmodel->select_object_row('companydetails', array('user_id'=>$user_id, 'is_deleted'=>'0'), array());
		
		$data['jobpost'] =  array();
		
		
		
		load_view('recruiter/jobpost', $data);	
	}
	

	
	public function update_Jobpost($jobpost_id=NULL)
	{
		$seesionData = $this->session->userdata('ifcast_recruiterLog');	
		$user_id = $seesionData['user_id'];
		
		if(isset($_POST['action']))
		{
			$preffered = json_encode($_POST['preffered']);
			$user_dob = date("Y-m-d", strtotime($_POST['user_dob']));
				
			$company_name = $_POST['company_name']."_jobPost_".time();		
			if($_FILES['company_logo']['name'])
			{				
				$image_name=$_FILES['company_logo']['name'];
				$temp = explode(".", $image_name);				
				$userName = time();
				$new_name = str_replace(" ","_", $company_name) . '.' . end($temp);
				
				$uploadpath="./assets/uploads/company_logo/".$new_name;
				if(move_uploaded_file($_FILES["company_logo"]["tmp_name"],$uploadpath))
				{
					$_POST['comp_logo'] = $new_name;
				}
			}
			
			$companyLocation = $_POST['companyLocation'];
			for($i=0; $i<3; $i++)
			{
				$y = $i+1;
				$_POST["location_".$y] = (!empty($companyLocation[$i])) ? $companyLocation[$i] : "";
			}
			
			$_POST['is_discloseSalary'] = (isset($_POST['is_discloseSalary'])) ? '1' : '0';	
			$_POST['company_location'] = json_encode($_POST['companyLocation']);
			if($_POST['action']=="Add")
			{
				$_POST['user_id'] = $user_id;
				$_POST['jobPostDate'] = date('Y-m-d H:i:s');
				$updatedRec = $this->mainmodel->insertData('jobpost');
			}
			else 
				if(!empty($_POST['action']))
				{
					$_POST['last_updated'] = date('Y-m-d H:i:s');
					$updatedRec = $this->mainmodel->updateRecords('jobpost', array('jobpost_id'=>$_POST['action']));
				}
			
			
			echo json_encode('1'); exit;
		}	
		
		$data['jobpost'] = $this->mainmodel->select_object_row('jobpost', array('jobpost_id'=>$jobpost_id, 'is_deleted'=>'0'), array());
		
		// $selectclaus = array('state_id', 'name', 'country_id');
		$data['states'] = $this->mainmodel->select_object_result('tbl_state', array('status'=>'1', 'country_id'=>'101'));
		// , $selectclaus

		// $selectclaus = array('city_id', 'cityName', 'state_id');
		// $data['cities'] = $this->mainmodel->select_object_result('tbl_city', array('status'=>'1', 'state_id'=>'22'));	
		// , $selectclaus

		$data['industries'] = $this->mainmodel->select_object_result('tbl_industry', array('status' =>'1'));
		
		$functionareas_whereClaus['status'] = '1'; 
		if($data['jobpost']->industry_id)
		{
			$functionareas_whereClaus['industryId'] = $data['jobpost']->industry_id;
		}
		$data['functionareas'] = $this->mainmodel->select_object_result('functionarea', $functionareas_whereClaus);	
	
		$roles_whereClaus['status'] = '1'; 
		if($data['jobpost']->functionAreaId)
		{
			$roles_whereClaus['functionAreaId'] = $data['jobpost']->functionAreaId;
		}
		$data['job_rol'] = $this->mainmodel->select_object_result('role', $roles_whereClaus);
		
		
		$data['companydetails'] = $this->mainmodel->select_object_row('companydetails', array('user_id'=>$user_id, 'is_deleted'=>'0'), array());
		
		$data['jobpost'] = $this->mainmodel->select_object_row('jobpost', array('jobpost_id'=>$jobpost_id,'user_id'=>$user_id, 'is_deleted'=>'0'), array());
		
		
		
		load_view('recruiter/jobpost', $data);	
	}


	public function postedjobs()
	{
		$this->load->model("jobs_model");
		
		$seesionData = $this->session->userdata('ifcast_recruiterLog');	
		$user_id = $seesionData['user_id'];
		
		//$selectclaus = array();
		//$data['posted_jobs'] = $this->mainmodel->select_object_result('jobpost', array('user_id'=>$user_id, 'is_deleted'=>'0'), $selectclaus);
		$data['posted_jobs'] = $this->jobs_model->get_postedJobs($user_id);
		//echo "<pre> ===>"; print_r($data['posted_jobs']); exit;
		$data['applyJobNotifications'] =$this->db->count_all_results('tbl_apply_job'); //[VINBO] added this query using for notifications
		$data['getusername'] =$this->db->select('*')->join('tbl_users','tbl_users.user_id = tbl_apply_job.user_id')->order_by('userJobId','DESC')->get('tbl_apply_job')->result(); //[VINBO] added this query using for getting applicant name
		$data['getjobtitle'] =$this->db->select('*')->join('tbl_jobpost','tbl_jobpost.jobpost_id = tbl_apply_job.jobpost_id')->order_by('userJobId','DESC')->get('tbl_apply_job')->result(); //[VINBO] added this query using for getting job title
		load_view('recruiter/profile/postedjobs', $data);
	}


	public function facebook()
	{

	require_once APPPATH."third_party/vendor/autoload.php";
	$fb = new Facebook\Facebook([
		'app_id'=> APP_ID,
		'app_secret'=> APP_SECRET,
		'default_graph_version'=> DEFAULT_GRAPH_VERSION,
	]);
	$fb_token=$this->webhook->fb_token();
	$fb_token=$fb_token->tokenvalue1;
	if(!empty($fb_token))
	 {
		 
		try 
		{
			
			$res = $fb->get('/me/accounts', $fb_token);
			$res = $res->getDecodedBody();
			
			foreach($res['data'] as $page)
			{
				echo $page['name'];
        	} // end for
		} // try close

		catch( Facebook\Exceptions\FacebookSDKException $e ) 
		{
			$helper = $fb->getRedirectLoginHelper();
		  $permissions = ['pages_show_list', 'pages_read_engagement', 'pages_manage_posts'];
		  $callback    = 'https://www.ifcast.com/in/recruiter/jobpost/facebook_hello';
		  $loginUrl    = $helper->getLoginUrl($callback, $permissions);
		  echo '<a href="' . $loginUrl . '">Log in with Facebook!</a>';
			exit();
		} // catch close
			
	} // if close
		
	
	else
	{
		  $helper = $fb->getRedirectLoginHelper();
		  $permissions = ['pages_show_list', 'pages_read_engagement', 'pages_manage_posts'];
		  $callback    = 'https://www.ifcast.com/in/recruiter/jobpost/facebook_hello';
		  $loginUrl    = $helper->getLoginUrl($callback, $permissions);
		  echo '<a href="' . $loginUrl . '">Log in with Facebook!</a>';
		  exit();
	} // else close

	  
	

	} // end webhook

	public function facebook_hello(){

		require_once APPPATH."third_party/vendor/autoload.php";
		$fb = new Facebook\Facebook([
			'app_id'=> APP_ID,
			'app_secret'=> APP_SECRET,
			'default_graph_version'=> DEFAULT_GRAPH_VERSION,
		]);

		$helper = $fb->getRedirectLoginHelper();
		try {
			$accessToken = $helper->getAccessToken();
		} catch(Facebook\Exceptions\FacebookSDKException $e) {
			echo $e->getMessage();
			exit;
		}
		
		if (isset($accessToken)) {
		
			$cilent = $fb->getOAuth2Client();
			try {
			$accessToken = $cilent->getLongLivedAccessToken($accessToken);
			} catch(Facebook\Exceptions\FacebookSDKException $e) {
			echo $e->getMessage();
			exit;
			}
			$page_token = (string) $accessToken;

			$this->webhook->fb_token_update($page_token);
			
			header("Location: /in/recruiter/jobpost/facebook");
			
		} elseif ($helper->getError()) {
			header("Location: /in/recruiter/jobpost/facebook");
		}
	}


	private function facebook_post()
	{

		require_once APPPATH."third_party/vendor/autoload.php";

		$fb_us_id=FACEBOOK_PAGE_ID_IN;
		$fb = new Facebook\Facebook([
			'app_id'=> APP_ID,
			'app_secret'=> APP_SECRET,
			'default_graph_version'=> DEFAULT_GRAPH_VERSION,
		]);
		$this->load->model("webhook");
		$fb_token=$this->webhook->fb_token();
		$fb_token=$fb_token->tokenvalue1;

		$last_job= $this->webhook->last_job();
		if(!empty($last_job->location_1)){
			$location1json=$this->webhook->location($last_job->location_1);
			$location1="𝐋𝐨𝐜𝐚𝐭𝐢𝐨𝐧 𝟏: ".$location1json->cityName."\n";
		}
		if(!empty($last_job->location_2)){
			$location2json=$this->webhook->location($last_job->location_2);
			$location2="𝐋𝐨𝐜𝐚𝐭𝐢𝐨𝐧 𝟐: ".$location2json->cityName."\n";
		}
		if(!empty($last_job->location_3)){
			$location3json=$this->webhook->location($last_job->location_3);
			$location3="𝐋𝐨𝐜𝐚𝐭𝐢𝐨𝐧 𝟑: ".$location3json->cityName."\n";
		}
		$jobpostapplylink = 'https://www.ifcast.com/in/guestuser/details/'.$last_job->jobpost_id;


		if(!empty($fb_token))
		 {
			 
			try 
			{
	
				$message = "\n𝐖𝐞 𝐚𝐫𝐞 𝐡𝐢𝐫𝐢𝐧𝐠 𝐍𝐨𝐰 \n\n𝐉𝐨𝐛 𝐓𝐈𝐭𝐥𝐞: ".$last_job->job_title."\n\n".$location1.$location2.$location3."\n𝐀𝐩𝐩𝐥𝐲 𝐍𝐨𝐰\n\n".$jobpostapplylink;
				
				$data = array(
						'message' => $message
				);
				
				$res = $fb->get('/me/accounts', $fb_token);
				$res = $res->getDecodedBody();
				
				foreach($res['data'] as $page)
				{
					if($page['id'] == $fb_us_id)
					{
						$accesstoken = $page['access_token'];
					} // end if
				} // end for
			
				$res = $fb->post('/'.$fb_us_id . '/feed/', $data, $accesstoken);

			} // try close
	
			catch( Facebook\Exceptions\FacebookSDKException $e ) 
			{
				return '1';
			} // catch close
			catch(FacebookExceptionsFacebookResponseException $e) {
				return '1';
			}
				
		} // if close
		
		else
		{
			  return '1';
		} // else close

	}


	public function linkedin()
	{
		$state = substr(str_shuffle("0123456789asdfghjklqwertyuiopzxcvbnmASDFGHJKLQWERTYUIOPZXCVBNM"), 0, 10);
		$redirect_uri="https://www.ifcast.com/in/recruiter/jobpost/linkedin_login";

		$url = "https://www.linkedin.com/oauth/v2/authorization?response_type=code&client_id=".LINKEDIN_CLIENT_ID."&redirect_uri=".$redirect_uri."&scope=".LINKEDIN_SCOPES."&state=".$state;
		echo '<a href="' . $url . '">Log in with Linkedin</a>';
	}
	public function linkedin_login()
	{

			$redirect_uri="https://www.ifcast.com/in/recruiter/jobpost/linkedin_login";
			$uri = "https://www.linkedin.com/oauth/v2/accessToken";
			$data = array(
				'grant_type' => 'authorization_code',
				 'code' => $_GET['code'],
				 "redirect_uri" => $redirect_uri,
				 "client_id" => LINKEDIN_CLIENT_ID,
				  "client_secret" => LINKEDIN_CLIENT_SECRET );
			$data = http_build_query($data);
			
			$ch = curl_init();

			curl_setopt($ch,CURLOPT_URL, $uri);
			curl_setopt($ch,CURLOPT_POST, true);
			curl_setopt($ch,CURLOPT_POSTFIELDS, $data);
			curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);

			$result = curl_exec($ch);
			echo $result;

			$data = json_decode($result,true);
			
				$access_token = $data['access_token']; // store this token somewhere
				$this->load->model('webhook');
				$this->webhook->linkedin_token_update1($access_token);

	} // end linked in login

	public function linkedin_id()
	{
			$access_token = $this->webhook->linkedin_token1();
			$access_token=$access_token[0]->tokenvalue1;


			$uri = "https://api.linkedin.com/v2/me";
			
			$ch = curl_init();

			curl_setopt($ch,CURLOPT_URL, $uri);
			curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);

			$headers = array(
				"Authorization: Bearer ".$access_token
			);
			curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

			$result = curl_exec($ch);
			echo $result;

			$data = json_decode($result,true);
			
			$linkedin_profile_id = $data['id']; // store this token somewhere
			$this->webhook->linkedin_token_update2($linkedin_profile_id);

	} // end linkedin id

	private function linkedin_post()
	{
			$last_job= $this->webhook->last_job();
			if(!empty($last_job->location_1)){
				$location1json=$this->webhook->location($last_job->location_1);
				$location1="𝐋𝐨𝐜𝐚𝐭𝐢𝐨𝐧 𝟏: ".$location1json->cityName."\n";
				$location1tag=preg_replace("/\s+/", "", "#".$location1json->cityName."jobs");
				$location1tag2=preg_replace("/\s+/", "", "#jobsin".$location1json->cityName);
				// echo $location1;
			}
			if(!empty($last_job->location_2)){
				$location2json=$this->webhook->location($last_job->location_2);
				$location2="𝐋𝐨𝐜𝐚𝐭𝐢𝐨𝐧 𝟐: ".$location2json->cityName."\n";
				$location2tag=preg_replace("/\s+/", "", "#".$location2json->cityName."jobs");
				$location2tag2=preg_replace("/\s+/", "", "#jobsin".$location2json->cityName);
				// echo $location2;
			}
			if(!empty($last_job->location_3)){
				$location3json=$this->webhook->location($last_job->location_3);
				$location3="𝐋𝐨𝐜𝐚𝐭𝐢𝐨𝐧 𝟑: ".$location3json->cityName."\n";
				$location3tag=preg_replace("/\s+/", "","#".$location3json->cityName."jobs");
				$location3tag2=preg_replace("/\s+/", "","#jobsin".$location3json->cityName);
				// echo $location3;
			}
			$jobpostapplylink = 'https://www.ifcast.com/in/guestuser/details/'.$last_job->jobpost_id;
			$access_token = $this->webhook->linkedin_token1();
			$access_token=$access_token[0]->tokenvalue1;
			$linkedin_id = $this->webhook->linkedin_token2();
			$linkedin_id=$linkedin_id[0]->tokenvalue2;
			// $organisation_id="ifcastservices";
			// $organisation_id="14501599";
			// {"serviceErrorCode":100,"message":"Field Value validation failed in REQUEST_BODY: Data Processing Exception while processing fields [/owner]","status":403}

			$uri = "https://api.linkedin.com/v2/shares";
			$headers = array(
				"Authorization: Bearer ". $access_token,
				"Content-Type: application/json",
				"x-li-format: json"
			);
			$tagarray=["#vacancyalert","#jobslive","#newjobs","#jobinindia","#needjob","#jobhunt","#jobsearch","#jobhiring","#jobhunting"];
			shuffle($tagarray);
			$titletag=preg_replace("/\s+/", "","#".$last_job->job_title."jobs");
			$tags="$titletag $tagarray[0] $location1tag $tagarray[1] $location1tag2 $tagarray[2] $tagarray[3] $tagarray[4] $tagarray[5] $location2tag $location2tag2 $location3tag $location3tag2 ";

			$link = $jobpostapplylink;
			$body = new \stdClass();
			$body->content = new \stdClass();
			$body->content->contentEntities[0] = new \stdClass();
			$body->text = new \stdClass();
			$body->content->contentEntities[0]->thumbnails[0] = new \stdClass();
			$body->content->contentEntities[0]->entityLocation = $link;
			$body->content->contentEntities[0]->thumbnails[0]->resolvedUrl = "";
			$body->content->title = "Ifcast - Job Portal & Consultancy";
			$body->owner = 'urn:li:person:'.$linkedin_id;
			// $body->owner = 'urn:li:organization:'.$organisation_id;
			$body->text->text = "\n𝐖𝐞 𝐚𝐫𝐞 𝐡𝐢𝐫𝐢𝐧𝐠 𝐍𝐨𝐰 \n\n𝐉𝐨𝐛 𝐓𝐈𝐭𝐥𝐞: ".$last_job->job_title."\n".$location1.$location2.$location3."\n𝐀𝐩𝐩𝐥𝐲 𝐍𝐨𝐰\n\n$tags";
			$body_json = json_encode($body, true);

			
			$ch = curl_init();

			curl_setopt($ch,CURLOPT_URL, $uri);
			curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
			curl_setopt($ch,CURLOPT_POST, true);
			curl_setopt($ch,CURLOPT_POSTFIELDS, $body_json);
			curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);

			$result = curl_exec($ch);
			

	} // end linkedin post

}
