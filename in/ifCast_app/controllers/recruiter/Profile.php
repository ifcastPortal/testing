<?php

class Profile extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		
		$this->load->helper('url');
		$this->load->library("pagination");
		
		$this->load->model("usermodel");

		$this->load->model("recruiter_model");

		check_login(2);
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
	/*
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
        $data['pagLink']    = "<div class=''>";
        // $data['pagLink'] .= "<img src='images/preloader.gif' border='0' alt='' style='height: 50px;width: auto;' />";  
        
        if ($prev > 3) {
            $data['pagLink'] .= '<span title="First" class="hover_skyBlue" id="PageNo_1" onclick="' . $call_jsFunction . '(\'0\', 1)" style="padding:4px;cursor:pointer;">&#171;</span>';
        }
        
        if ($prev != 0) {
            $data['pagLink'] .= '<span title="Previous" class="hover_skyBlue" id="PageNo_' . $prev . '" onclick="' . $call_jsFunction . '(\'0\', ' . $prev . ')" style="padding:4px;cursor:pointer;">&#8249;</span>';
        }
        
        for ($i = max(1, $pageArr['page'] - 3); $i <= min($pageArr['page'] + 3, $total_pages); $i++) {
            
            $activeclass = ($i == $pageArr['page']) ? 'active_pageLink' : '';
            
            $data['pagLink'] .= '<span title="' . $i . '" class="' . $activeclass . ' hover_skyBlue" id="PageNo_' . $i . '" onclick="' . $call_jsFunction . '(\'0\', ' . $i . ')" style="padding:4px;cursor:pointer;">' . $i . '</span>';
        }
        if ($next < $total_pages) {
            $data['pagLink'] .= '<span title="Next" class="hover_skyBlue" id="PageNo_' . $next . '" onclick="' . $call_jsFunction . '(\'0\', ' . $next . ')" style="padding:4px;cursor:pointer;">&#8250;</span>';
        }
        
        if ($next < $total_pages) {
            $data['pagLink'] .= '<span title="Last" class="hover_skyBlue" id="PageNo_' . $total_pages . '" onclick="' . $call_jsFunction . '(\'0\', ' . $total_pages . ')" style="padding:4px;cursor:pointer;">&#187;</span>';
        }
        $data['pagLink'] .= "</div>";
        
        
        return $data;
    }
	*/
	public function index()
	{
		$seesionArr = $this->session->userdata('ifcast_recruiterLog');
		$user_id = $seesionArr['user_id'];
		
		$selectclaus = array('step');
		$user_details = $this->mainmodel->select_object_row('users', array('user_id'=>$user_id), $selectclaus);
		$step = $user_details->step;
		$this->activeCampaign($seesionArr['user_email'],$seesionArr['user_name'],'-',$seesionArr['user_phone']);
		
		switch($step)
		{
			/* case 1: redirect('profile/verify_otp'); break;
			case 2: redirect('profile/profile_type'); break;
			case 3: redirect('profile/work_details'); break; */
			case 1: redirect('recruiter/profile/company_details'); break;
			//case 2: redirect('recruiter/profile/company_details'); break;
			//case 2: redirect('recruiter/profile/recruter_details'); break;
			
			default: redirect('recruiter/profile/companydashboard'); break;
		}
		//$this->load->view('profile/education_details');		

		
		
	}
	
	public function companydashboard()
	{
		$seesionArr = $this->session->userdata('ifcast_recruiterLog');
		$user_id = $seesionArr['user_id'];
		
		
		$data['companydetails'] = $this->recruiter_model->get_companyDetails($user_id);
		

		
		$selectclaus = array('user_id','name','phone','email','phone_verified','email_verified','profile_pic','gender','experience_user','status');
		$data['user_details'] = $this->mainmodel->select_object_row('users', array('user_id'=>$user_id), $selectclaus);
	
		$data['applyJobNotifications'] =$this->db->count_all_results('tbl_apply_job'); //[VINBO] added this query using for notifications
		$data['getusername'] =$this->db->select('*')->join('tbl_users','tbl_users.user_id = tbl_apply_job.user_id')->order_by('userJobId','DESC')->get('tbl_apply_job')->result(); //[VINBO] added this query using for getting applicant name
		$data['getjobtitle'] =$this->db->select('*')->join('tbl_jobpost','tbl_jobpost.jobpost_id = tbl_apply_job.jobpost_id')->order_by('userJobId','DESC')->get('tbl_apply_job')->result(); //[VINBO] added this query using for getting job title

	//	echo "<pre>"; print_r($data['user_details']); exit;
		load_view('recruiter/profile/companydashboard', $data);
	}


	public function dreamer_listingsearch()
	{
		$seesionArr = $this->session->userdata('ifcast_recruiterLog');
		$user_id = $seesionArr['user_id'];
		
		
		$data['companydetails'] = $this->recruiter_model->get_companyDetails($user_id);
		
		
		
		$selectclaus = array('user_id','name','phone','email','phone_verified','email_verified','profile_pic','gender','experience_user','status');
		$data['user_details'] = $this->mainmodel->select_object_row('users', array('user_id'=>$user_id), $selectclaus);

		if($this->input->post('temp_desg') == '')
		{
			$temp_desg = $temp_desg;
		}
		else
		{
			$temp_desg= $this->input->post('temp_desg');
		}


		$data['temp_desg']= $temp_desg;


		// $temp_desg= 'Software Developer - App Developer';


		$data['onkar_dreamerbydesg'] = $this->recruiter_model->get_dreamerbydesignation($temp_desg);

		$data['num_rows'] = count($data['onkar_dreamerbydesg']);
		
		
		// load_view('recruiter/profile/dreamer_listingsearch', $data);



		$config = array();
        $config["base_url"] = base_url() . "recruiter/profile/dreamer_listingsearch";
        $config["total_rows"] = count($data['onkar_dreamerbydesg']);
        $config["per_page"] = 500;
		$config["uri_segment"] = 4;


		// $config['full_tag_open'] = "<div class='pagination-list text-center'><nav class='navigation pagination'><div class='nav-links'>";
		// $config['full_tag_close'] =" </div></nav></div>";
		// $config['num_tag_open'] = '<a class="page-numbers" href="#">';
		// $config['num_tag_close'] = '</a>';
		// $config['cur_tag_open'] = "<span aria-current='page' class='page-numbers current'>";
		// $config['cur_tag_close'] = "</span>";
		// $config['next_tag_open'] = "<a class='next page-numbers' href='#'><i class='fas fa-angle-right'></i>";
		// $config['next_tagl_close'] = "</a>";
		// $config['prev_tag_open'] = "<a class='prev page-numbers' href='#'><i class='fas fa-angle-left'></i>";
		// $config['prev_tagl_close'] = "</a>";
		// $config['first_tag_open'] = "<li>";
		// $config['first_tagl_close'] = "</li>";
		// $config['last_tag_open'] = "<li>";
		// $config['last_tagl_close'] = "</li>";

        $this->pagination->initialize($config);

        $page = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;

        $data["links"] = $this->pagination->create_links();

		$data['onkarPaginatedata'] = $this->recruiter_model->get_dreamersonkarpagination($config["per_page"], $page,$temp_desg);

		$data['applyJobNotifications'] =$this->db->count_all_results('tbl_apply_job'); //[VINBO] added this query using for notifications
		
		load_view('recruiter/profile/dreamer_listingsearch', $data);

	}

	public function dreamer_listing()
	{
		$seesionArr = $this->session->userdata('ifcast_recruiterLog');
		$user_id = $seesionArr['user_id'];
		
		$data['limit'] = $this->input->post('limit') ? $this->input->post('limit') : '5';
		
        if ($data['limit'] != "all") {
        
			$filter_data['get_totalCount'] = 1;
			$filter_data['total_records']  = $this->recruiter_model->get_candidates($filter_data);			
		   
			$filter_data['limit']           = $data['limit'];
			$filter_data['page']            = 1;
			$filter_data['start_from']      = ($filter_data['page'] - 1) * $filter_data['limit'];
			$filter_data['call_jsFunction'] = "ajax_dreamer_listing";
			$data['pagArr']                 = $this->create_pageLinks($filter_data);
        }
		
		$filter_data['get_totalCount'] = 0;		
		
		$data['get_candidates'] = $this->recruiter_model->get_candidates($filter_data);
		$data['applyJobNotifications'] =$this->db->count_all_results('tbl_apply_job'); //[VINBO] added this query using for notifications
		$data['getusername'] =$this->db->select('*')->join('tbl_users','tbl_users.user_id = tbl_apply_job.user_id')->order_by('userJobId','DESC')->get('tbl_apply_job')->result(); //[VINBO] added this query using for getting applicant name
		$data['getjobtitle'] =$this->db->select('*')->join('tbl_jobpost','tbl_jobpost.jobpost_id = tbl_apply_job.jobpost_id')->order_by('userJobId','DESC')->get('tbl_apply_job')->result(); //[VINBO] added this query using for getting job title
		
		load_view('recruiter/profile/dreamer_listing', $data);
	}
	
	public function ajax_dreamer_listing()
	{
		$seesionArr = $this->session->userdata('ifcast_recruiterLog');
		$user_id = $seesionArr['user_id'];
		
		 $data['limit'] = $this->input->post('limit') ? $this->input->post('limit') : '5';
		
        if ($data['limit'] != "all") {
        
			$filter_data['get_totalCount'] = 1;
			$filter_data['total_records']  = $this->recruiter_model->get_candidates($filter_data);			
		   
			$filter_data['limit']           = $data['limit'];
			$filter_data['page']            = $this->input->post('page');
			$filter_data['start_from']      = ($filter_data['page'] - 1) * $filter_data['limit'];
			$filter_data['call_jsFunction'] = "ajax_dreamer_listing";
			$data['pagArr']                 = $this->create_pageLinks($filter_data);
        }
		
		$filter_data['get_totalCount'] = 0;
		//print_r($filter_data); exit;
		
		$data['get_candidates'] = $this->recruiter_model->get_candidates($filter_data);
		
		//	echo "<pre>"; print_r($data['user_details']); exit;
		$this->load->view('recruiter/profile/partial_dreamer_listing', $data);
	}
	
		
	
	public function company_details(){
		
		$seesionData = $this->session->userdata('ifcast_recruiterLog');	
		$user_id = $seesionData['user_id'];
		
		if(isset($_POST['action']))
		{
			$preffered = json_encode($_POST['preffered']);
			$user_dob = date("Y-m-d", strtotime($_POST['user_dob']));
				
			$company_name = $_POST['company_name'];		
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
				
			$_POST['company_location'] = json_encode($_POST['companyLocation']);
			if($_POST['action']=="Add")
			{
				$_POST['user_id'] = $user_id;
				$_POST['added_date'] = date('Y-m-d H:i:s');
				$updatedRec = $this->mainmodel->insertData('companydetails');
			}
			else 
				if(!empty($_POST['company_id']))
				{
					$_POST['last_updated'] = date('Y-m-d H:i:s');
					$updatedRec = $this->mainmodel->updateRecords('companydetails', array('comp_id'=>$_POST['company_id']));
				}
			
			update_userStep(array('step'=>'2', 'is_recruiter'=>1));
			
			echo json_encode('1'); exit;
		}		
		
		// $selectclaus = array('industry_id', 'industry_name');
		$data['industries'] = $this->mainmodel->select_object_result('tbl_industry', array('status'=>'1'));	
		//, $selectclaus [VINBO] REMOVED IN QUERY


		// $selectclaus = array('state_id', 'name', 'country_id');
		// $data['states'] = $this->mainmodel->select_object_result('tbl_state', array('country_id'=>'101'));
		//, $selectclaus [VINBO] REMOVED IN QUERY
		

		// $selectclaus = array('city_id', 'cityName', 'state_id');
		// $data['cities'] = $this->mainmodel->select_object_result('tbl_city', array('status'=>'1', 'state_id'=>'22'));	

		//, $selectclaus [VINBO] REMOVED IN QUERY
	
		
		$data['user_details'] = $this->mainmodel->select_object_row('companydetails', array('user_id'=>$user_id, 'is_deleted'=>'0'),array());
		
		$data['applyJobNotifications'] =$this->db->count_all_results('tbl_apply_job'); //[VINBO] added this query using for notifications

		$data['getusername'] =$this->db->select('*')->join('tbl_users','tbl_users.user_id = tbl_apply_job.user_id')->order_by('userJobId','DESC')->get('tbl_apply_job')->result(); //[VINBO] added this query using for getting applicant name
		$data['getjobtitle'] =$this->db->select('*')->join('tbl_jobpost','tbl_jobpost.jobpost_id = tbl_apply_job.jobpost_id')->order_by('userJobId','DESC')->get('tbl_apply_job')->result(); //[VINBO] added this query using for getting job title

		
		$data['action']='Add';
		load_view('recruiter/profile/company_details', $data);
	}
	
	
	
	function load_modelForm()
	{
		$seesionArr = $this->session->userdata('ifcast_log');
		$user_id = $seesionArr['user_id'];
		
		$id=$_POST['id'];  $editDetails=$_POST['editDetails'];
		$data['editDetails'] = $editDetails;	$view = "";
		
		
		switch($editDetails)
		{
			case "employment":	$selectclaus = $data['userprevjob'] = array();
								if($id != "add" && $id != "")
								{
									$data['userprevjob'] = $this->mainmodel->select_object_row('userprevjob', array('user_id'=>$user_id, 'prevJobId'=>$id), $selectclaus);
								}
								
								$data['prevJob_id'] = $id;	
								$data['industries'] = $this->mainmodel->select_object_result('industry');	
								$data['functionareas'] = $this->mainmodel->select_object_result('functionarea', array('status'=>'1'));
								//$data['job_rol'] = $this->mainmodel->select_object_result('role', array('status'=>'1'));	
								$view = "profile/employment_model";
								break;
								
			case "userResume":	
			
			case "profileSummary":	$selectclaus = $data['userResume'] = array();
								
								if($id != "add" && $id != "")
								{
									$data['userResume'] = $this->mainmodel->select_object_row('user_resume', array('id'=>$id), $selectclaus);
								}								
								$data['resume_id'] = $id;	
								$view = "profile/userResume_model";
								break;
			
			case "userPassword":						
								$data['user_id'] = $user_id;	
								$view = "profile/editPassword_model";
								break; 		
			
			case "educationDetail":	$selectclaus = $data['educationDetail'] = array();
								
								$data['qualification'] = array();
								if($id != "add" && $id != "")
								{
									$data['educationDetail'] = $this->mainmodel->select_object_row('educationdetails', array('education_id'=>$id), $selectclaus);
									
									$degreeId= $data['educationDetail']->degreeId;
									
									$data['qualification'] = $this->mainmodel->select_object_result('qualification', array('degreeId'=>$degreeId));
								}	
								
								
								
								$data['degreeArr'] = $this->mainmodel->select_object_result('degree', array('status'=>'1'));	
								$data['universities'] = $this->mainmodel->select_object_result('university', array('status'=>'1'));	
		
								$data['educationid'] = $id;	
								$view = "profile/educationDetail_model";
								break;
		}
		
		$this->load->view($view,$data);	
	}
	

	function password_verification()
	{			
		$password_match = 0;
		if(!empty($_POST))
		{	

			$user_type = $_POST['chk_user_type'];
			
			$seesionArr = $this->session->userdata('ifcast_recruiterLog');
				
			$user_id = $seesionArr['user_id'];
			
			$selectclaus = array('user_id','name','user_pass','user_psalt');
			$user_details = $this->mainmodel->select_object_row('users', array('user_id'=>$user_id), $selectclaus);
			
			$user_psalt = $user_details->user_psalt;
			$user_pass = $user_details->user_pass;
			
			$prev_user_pass = $user_psalt.md5($_POST['prev_user_pass']);
			
			if($prev_user_pass == $user_pass)
			{
				$password_match = 1;
			}
		}
		
		echo json_encode($password_match); 
		exit;		
	}
	
	function change_password()
	{		
		$result = 0;
		if(!empty($_POST) &&  $_POST['new_password'])
		{					
			$user_type = $_POST['chk_user_type'];
			
			$seesionArr = $this->session->userdata('ifcast_recruiterLog');
			
			$user_id = $seesionArr['user_id'];
				
			$new_password = $_POST['new_password'];
			
			
			$_POST['user_psalt'] = md5(random_string(4));
			$password = $_POST['user_psalt'].md5($new_password);
			$_POST['user_pass'] = $password;
			
			//echo "<pre> ===>".$user_id; print_r($_POST);exit;
			$updatedRec = $this->mainmodel->updateRecords('users', array('user_id'=>$user_id));
			
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
		if(!empty($_POST) &&  $_POST['editDetails']== "educationDetail")
		{
			$_POST['user_id'] = $user_id;
			$_POST['last_updated'] = date('Y-m-d H:i:s');
			if($_POST['educationid'] == "add" || $_POST['educationid'] == "")
			{
				
				$updatedRec = $this->mainmodel->insertData('educationdetails');
			}
			else
			{
				$updatedRec = $this->mainmodel->updateRecords('educationdetails', array('education_id'=>$_POST['educationid']));
			}
		}
		else
		{
			if($_FILES['resume']['name'])
			{				
				$image_name=$_FILES['resume']['name'];
				$temp = explode(".", $image_name);
				
				$userName = time();
				$new_resumename = str_replace(" ","_", $userName) . '.' . end($temp);
				$resumepath="./assets/uploads/resums/".$new_resumename;
				if(move_uploaded_file($_FILES["resume"]["tmp_name"],$resumepath))
				{
					$_POST['upload_file'] = $new_resumename;
				}
			}
			
			
			if(!empty($_POST))
			{
				$_POST['user_id'] = $user_id;
				$_POST['last_updated'] = date('Y-m-d H:i:s');
				if($_POST['resume_id'] == "add" || $_POST['resume_id'] == "")
				{
					
					$updatedRec = $this->mainmodel->insertData('user_resume');
				}
				else
				{
					$updatedRec = $this->mainmodel->updateRecords('user_resume', array('id'=>$_POST['resume_id']));
				}
			}
		}
		
	if($updatedRec)
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
		if(!empty($_POST))
		{
			$id = $_POST['prevJob_id'];
			$_POST['user_id'] = $user_id;
		//echo "<pre>====>"; print_r($_POST['from_date']); echo " >".$_POST['to_date'];
			
			$_POST['from_date'] = date("Y-m-d", strtotime($_POST['from_date']));
			$_POST['to_date'] = date("Y-m-d", strtotime($_POST['to_date']));
		//echo "<br>====>"; print_r($_POST); exit; 
			if($_POST['prevJob_id'] == "add" || $_POST['prevJob_id'] == "")
			{
				$tbl_data['added_date'] = date('Y-m-d H:i:s');
				$updatedRec = $this->mainmodel->insertData('userprevjob');
			}
			else
			{
				$updatedRec = $this->mainmodel->updateRecords('userprevjob', array('prevJobId'=>$id));
			}
		
		}
		
	//	echo "<pre>====>"; print_r($_POST); 
		
		if($updatedRec)
			echo json_encode(1);
		else
			echo json_encode(0);
		
		exit;
		
	}

	public function loadCities($stateId){
		$options = '<option value=""> select City </option>';
		if($stateId)
		{
			// $selectclaus = array('city_id', 'state_id', 'cityName');
			$cities = $this->mainmodel->select_object_result('tbl_city', array('state_id'=>$stateId, 'status'=>'1'));
		 //[VINBO] ,$selectclaus removed in query
			foreach($cities as $row)
			{
				$options .= '<option value="'. $row->city_id .'"> '. $row->cityName .'</option>';
			}
		}
		echo $options;
	}

	public function load_jobRole($functionAreaId=NULL){
		$selectclaus = "";
		
		if($functionAreaId != NULL)
			$whereclause = array('functionAreaId'=>$functionAreaId, 'status'=>'1');
		
		$jobRoles = $this->mainmodel->select_object_result('role', $whereclause, $selectclaus);	

		$options = '<option value=""> Job Role </option>';
		foreach($jobRoles as $roles)
			{
				$options .= '<option value="'. $roles->role_id .'"> '. $roles->role_name .'</option>';
			}
		echo $options; exit;
	}
	
	public function load_functionalArea($industryId=NULL){
		$selectclaus = "";
		
		if($industryId != NULL)
			$whereclause = array('industryId'=>$industryId);
		
		$functionareas = $this->mainmodel->select_object_result('functionarea', $whereclause, $selectclaus);	

		$options = '<option value=""> Functional Area </option>';
		foreach($functionareas as $function_area)
			{
				$options .= '<option value="'. $function_area->functionAreaId .'"> '. $function_area->functionArea .'</option>';
			}
		echo $options; exit;
	}
	
	public function companyowner_details($industryId=NULL){
		
		$data = array();
		load_view('recruiter/profile/companyowner_details', $data);
		
	}


	private function activeCampaign($email,$firstName,$lastName,$phone)
	{
		$ch = curl_init();
		$curlUrl="https://cmogal.api-us1.com";
		$relativePath="/api/3/contacts";
		$curlMethod="POST";
		$fields='{
			"contact": {
				"email": "'.$email.'",
				"firstName": "'.$firstName.'",
				"lastName": "'.$lastName.'",
				"phone": "'.$phone.'",
				"orgid": "317"
			}
		}';
		curl_setopt($ch, CURLOPT_URL, $curlUrl.$relativePath);
		curl_setopt($ch, CURLOPT_HTTPHEADER, array(
		"Api-Token: f08ad4cb4df6847230f8fc4745b4b59045697039fc97e24927c290b1ce87530f53fb50e0"
		));
		curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $curlMethod);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		
		$data = curl_exec($ch);
		curl_close($ch);
		$data=json_decode($data);
		
		
		$contactId=$data->contact->id;
		$ch = curl_init();
		$curlUrl="https://cmogal.api-us1.com";
		$relativePath="/api/3/contactLists";
		$curlMethod="POST";
		$fields='{
			"contactList": {
				"list": 21,
				"contact": '.$contactId.',
				"status": 1
			}
		}';
		
		curl_setopt($ch, CURLOPT_URL, $curlUrl.$relativePath);
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
	
	
}
