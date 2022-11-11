<?php

class Jobs extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model("usermodel");
		$this->load->model("jobs_model");
		check_login();
	} 	

	public function joblist(){
		
		$selectclaus = array();
		
		
		$data['posted_jobs'] = $this->mainmodel->select_object_result('jobpost', array('status'=>'1', 'is_deleted'=>'0'), $selectclaus);
		
		
		load_view('jobs/joblist', $data);
	}

	
	public function details($jobid=NULL){
		
		if($jobid==NULL)
		{
			redirect('Jobs/joblist');
		}
		
		$seesionData = $this->session->userdata('ifcast_log');	
		$user_id = $seesionData['user_id'];
		
		$data = $this->jobs_model->get_jobDetails($jobid);
		
		
		$whereclause = array('user_id'=>$user_id, 'jobpost_id'=>$jobid, 'is_deleted'=>'0');		
		$selectclaus = array('userJobId', 'job_status', 'flag');
		$save_joblist = $this->mainmodel->select_object_row('save_job', $whereclause, $selectclaus);
		$apply_joblist = $this->mainmodel->select_object_row('apply_job', $whereclause, $selectclaus); //[VINBO] added query

		// $data['job_applied'] = $data['job_saved'] = 0;  //[VINBO] commented

		if($save_joblist)
		{
			if($save_joblist->job_status == "save")
			{
				$data['job_saved'] = 1;
			}
		}
		if($apply_joblist)  //[VINBO] add condition
		{
		if($save_joblist->job_status == "save")
			{
				$data['job_applied'] = 0;
			}
		}
		load_view('jobs/jobdetail', $data);
	}


	
	public function applyJob(){
		$seesionData = $this->session->userdata('ifcast_log');	
		$user_id = $seesionData['user_id'];
		
		if(isset($_POST['job_id']))
		{
			$action = ($_POST['action'] == "apply") ? 0 : 1;
			$tbl_data = array(
							'user_id'=>$user_id,
							'jobpost_id'=>$_POST['job_id'],
							'jobApplyDate'=>date('Y-m-d H:i:s'),
							'flag'=>$action,
							'job_status'=>$_POST['action'],
							);
				
			$last_insertid = $this->mainmodel->insert_tblRecords('tbl_apply_job', $tbl_data);
			
			if($last_insertid)
			{
				echo json_encode(0);
				exit;
			}			
				
		}
		
		echo json_encode(0);
		exit;
		
	}

//[VINBO] ADDED THIS FUNCTION

	public function saveJob(){
		$seesionData = $this->session->userdata('ifcast_log');	
		$user_id = $seesionData['user_id'];
		
		if(isset($_POST['job_id']))
		{
			$action = ($_POST['action'] == "save") ? 1 : 0;
			$tbl_data = array(
							'user_id'=>$user_id,
							'jobpost_id'=>$_POST['job_id'],
							'jobApplyDate'=>date('Y-m-d H:i:s'),
							'flag'=>$action,
							'job_status'=>$_POST['action'],
							);
				
			$last_insertid = $this->mainmodel->insert_tblRecords('tbl_save_job', $tbl_data);
			
			if($last_insertid)
			{
				echo json_encode(1);
				exit;
			}			
				
		}
		
		echo json_encode(1);
		exit;
		
	}

}




