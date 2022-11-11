<?php
class Designerpages extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model("jobs_model");
	} 
	public function get_appliedUsers()
	{
		$seesionData = $this->session->userdata('ifcast_recruiterLog');	
		$user_id = $seesionData['user_id'];
		$_POST['jobpost_id'] = $_POST['jobpost_id'];
		if(isset($_POST['jobpost_id']))
		{
			$data['posted_jobs'] = $this->jobs_model->get_appliedUsers($_POST['jobpost_id'], $user_id);
			//echo "<pre> ===>"; print_r($data['posted_jobs']); exit;
			$this->load->view('recruiter/appliedUser_list', $data);
		}
	}
}