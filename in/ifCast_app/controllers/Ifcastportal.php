<?php

class Ifcastportal extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model("usermodel");
		$this->load->model("jobs_model");
	} 


	// public function index(){
	// 	$data['posted_jobs'] = $this->mainmodel->select_object_result('jobpost', array('status'=>'1', 'is_deleted'=>'0'), $selectclaus);
	// 	load_view('ifcastportal/ifcasthomeguest', $data);
	// }

	
	
	// public function applyJob()
	// {
	// 	$seesionData = $this->session->userdata('ifcast_log');	
	// 	$user_id = $seesionData['user_id'];
		
	// 	if(isset($_POST['job_id']))
	// 	{
	// 		$action = ($_POST['action'] == "save") ? 1 : 0;
	// 		$tbl_data = array(
	// 						'user_id'=>$user_id,
	// 						'jobpost_id'=>$_POST['job_id'],
	// 						'jobApplyDate'=>date('Y-m-d H:i:s'),
	// 						'flag'=>$action,
	// 						'job_status'=>$_POST['action'],
	// 						);
				
	// 		$last_insertid = $this->mainmodel->insert_tblRecords('save_job', $tbl_data);
			
	// 		if($last_insertid)
	// 		{
	// 			echo json_encode(1);
	// 			exit;
	// 		}			
				
	// 	}
	// 	echo json_encode(0);
	// 	exit;
	// }

	/* Onkar created Functions for temporary pages -- START */
	
	public function contactus()
	{
		$data['pageName']='more';
		$data['applyJobNotifications'] =$this->db->count_all_results('tbl_apply_job'); //[VINBO] added this query using for notifications

		$data['sitePageName']='iFCast - Get in touch with the best Online Job Provider in India';
		$data['sitePageDescription'] ='At iFCast you get to clutch your dream job or hire with a simple registration process with a premium online job search & online hiring companies. iFCast is a one-of-a-kind online job provider in India.';

		$data['getusername'] =$this->db->select('*')->join('tbl_users','tbl_users.user_id = tbl_apply_job.user_id')->order_by('userJobId','DESC')->get('tbl_apply_job')->result(); //[VINBO] added this query using for getting applicant name
		$data['getjobtitle'] =$this->db->select('*')->join('tbl_jobpost','tbl_jobpost.jobpost_id = tbl_apply_job.jobpost_id')->order_by('userJobId','DESC')->get('tbl_apply_job')->result(); //[VINBO] added this query using for getting job title

		
		load_view('ifcastportal/contactus', $data);
	}
	public function aboutus()
	{
		$data['pageName']='more';
		$data['applyJobNotifications'] =$this->db->count_all_results('tbl_apply_job'); //[VINBO] added this query using for notifications
		$data['getusername'] = $this->db->select('*')->join('tbl_users', 'tbl_users.user_id = tbl_apply_job.user_id')->order_by('userJobId', 'DESC')->get('tbl_apply_job')->result(); //[VINBO] added this query using for getting applicant name
		$data['getjobtitle'] = $this->db->select('*')->join('tbl_jobpost', 'tbl_jobpost.jobpost_id = tbl_apply_job.jobpost_id')->order_by('userJobId', 'DESC')->get('tbl_apply_job')->result(); //[VINBO] added this query using for getting job title

		$data['job_count'] = $this->mainmodel->select_object_result('tbl_jobpost', array('status' => 1)); //[VINBO] added this query using for getting job count on 
		$data['sitePageName']='iFCast - Top - Notch Online Job Provider & Online Recruitment Companies in India';
		$data['sitePageDescription'] ='About iFCast - iFCast is a one-of-a-kind online job provider & job portal for recruiters and job seekers to find their dream job or a great hire.';


		
		load_view('ifcastportal/aboutus', $data);
	}
	public function faq()
	{
		$data['pageName']='more';
		$data['applyJobNotifications'] =$this->db->count_all_results('tbl_apply_job'); //[VINBO] added this query using for notifications
		$data['getusername'] =$this->db->select('*')->join('tbl_users','tbl_users.user_id = tbl_apply_job.user_id')->order_by('userJobId','DESC')->get('tbl_apply_job')->result(); //[VINBO] added this query using for getting applicant name
		$data['getjobtitle'] =$this->db->select('*')->join('tbl_jobpost','tbl_jobpost.jobpost_id = tbl_apply_job.jobpost_id')->order_by('userJobId','DESC')->get('tbl_apply_job')->result(); //[VINBO] added this query using for getting job title

		$data['sitePageName']='iFCast Jobs - Get answers to all your questions here.';
		$data['sitePageDescription'] ='As recruiting and applying for jobs is a perpetual process, it takes a robust platform to post jobs and hire the best talent from all over the globe.';
		load_view('ifcastportal/faq', $data);
	}

	public function surveys()
	{
		$data['pageName']='more';
		$data['sitePageName']='KLSDJFLKDJLFKSDJLFKSJDLKFJSLDKFJSKLDFJLSKDJF';
		load_view('ifcastportal/surveys', $data);
	}

	public function whatisdreamer()
	{
		$data['pageName']='terminologies';
		$data['applyJobNotifications'] =$this->db->count_all_results('tbl_apply_job'); //[VINBO] added this query using for notifications


		$data['sitePageName']='iFCast - Online Job Search with the best Online Job Vacancies for Dreamers begins here.';

		$data['sitePageKeyword']='Online Job, Jobs, Online Job search, Online Job Vacancies, Job Openings, Jobs for Fresher, Apply Online Jobs, Employment, Career, B.Tech Jobs, B.E Jobs, Resumes, Online Recruitment Companies, Online Hiring Companies, Part Time Job Search, Latest Engineering Jobs in India, Mechanical Engineering Jobs, Best Engineering Job Portals, Civil Engineering Jobs ';

		$data['sitePageDescription']='Search & apply for the latest online jobs with the best online job search & employment posted by the best companies. Get online job vacancies based on your industry, skills ,and demographics. Post your resumes on one of the best Engineering Job Portals in India.';

		$data['getusername'] =$this->db->select('*')->join('tbl_users','tbl_users.user_id = tbl_apply_job.user_id')->order_by('userJobId','DESC')->get('tbl_apply_job')->result(); //[VINBO] added this query using for getting applicant name
		$data['getjobtitle'] =$this->db->select('*')->join('tbl_jobpost','tbl_jobpost.jobpost_id = tbl_apply_job.jobpost_id')->order_by('userJobId','DESC')->get('tbl_apply_job')->result(); //[VINBO] added this query using for getting job title


		load_view('ifcastportal/terminologies/dreamer', $data);
	}
	public function whatisenabler()
	{
		$data['pageName']='terminologies';
		$data['applyJobNotifications'] =$this->db->count_all_results('tbl_apply_job'); //[VINBO] added this query using for notifications

		$data['sitePageName']='iFCast - Top Career Portal & Career Sites in India for Job Recruiters ';

		$data['sitePageKeyword']='Career Sites, Career Portal, best engineering jobs, top job posting sites, best job search sites, job search websites, job websites, best job sites, best job search engines, top job search engines, top job search sites, best job search, top job sites, best job finding sites, job posting, job recruiters, recruiting, advertising jobs, executive recruitment, recruitment, recruit staff, recruiting agencies, legal recruiting, online recruitment, employer, employment';

		$data['sitePageDescription']='Enhance your brand identity, post your jobs on iFCast, a top career portal in India for job posting, recruiting, and advertising as an employer.';

		$data['getusername'] =$this->db->select('*')->join('tbl_users','tbl_users.user_id = tbl_apply_job.user_id')->order_by('userJobId','DESC')->get('tbl_apply_job')->result(); //[VINBO] added this query using for getting applicant name
		$data['getjobtitle'] =$this->db->select('*')->join('tbl_jobpost','tbl_jobpost.jobpost_id = tbl_apply_job.jobpost_id')->order_by('userJobId','DESC')->get('tbl_apply_job')->result(); //[VINBO] added this query using for getting job title

	
		load_view('ifcastportal/terminologies/enabler', $data);
	}

	public function whatiscrafter()
	{
		$data['pageName']='terminologies';
		$data['applyJobNotifications'] =$this->db->count_all_results('tbl_apply_job'); //[VINBO] added this query using for notifications

		$data['sitePageName']='iFCast - Top Online Job Provider with the best crafters in the Industry';

		$data['sitePageKeyword']='Online Job Provider, Jobs, Online Job search, Online Job Vacancies, Online Job Openings, Jobs for Fresher, Apply Online Jobs, Employment, Career, Resumes, Online Recruitment Companies, Online Hiring Companies, Part Time Job Search, Job Hunting Sites';

		$data['sitePageDescription']='Get significant insights from top industry experts to guide you get the perfect job on Online Job Openings. iFCast is one of the best Online Recruitment Companies & Online Job Provider for Part Time Job Search, Jobs for Fresher, Employment & more.';

		$data['getusername'] =$this->db->select('*')->join('tbl_users','tbl_users.user_id = tbl_apply_job.user_id')->order_by('userJobId','DESC')->get('tbl_apply_job')->result(); //[VINBO] added this query using for getting applicant name
		$data['getjobtitle'] =$this->db->select('*')->join('tbl_jobpost','tbl_jobpost.jobpost_id = tbl_apply_job.jobpost_id')->order_by('userJobId','DESC')->get('tbl_apply_job')->result(); //[VINBO] added this query using for getting job title

		load_view('ifcastportal/terminologies/crafter', $data);
	}


	public function termsofuse()
	{
		$data['pageName']='more';
		$data['sitePageName']='KLSDJFLKDJLFKSDJLFKSJDLKFJSLDKFJSKLDFJLSKDJF';
		load_view('ifcastportal/termsofuse', $data);
	}


	public function privacypolicy()
	{
		$data['pageName']='more';
		$data['sitePageName']='KLSDJFLKDJLFKSDJLFKSJDLKFJSLDKFJSKLDFJLSKDJF';
		load_view('ifcastportal/privacypolicy', $data);
	}




/* ____________________________________________________________________________________________________ */



	public function ifcasthome()
	{
		$data['posted_jobs'] = $this->mainmodel->select_object_result('jobpost', array('status'=>'1', 'is_deleted'=>'0'));
		// , $selectclaus
		load_view('ifcastportal/ifcasthome', $data);
	}

	public function jobcard(){
		$data['posted_jobs'] = $this->mainmodel->select_object_result('jobpost', array('status'=>'1', 'is_deleted'=>'0'));
		// , $selectclaus 
		load_view('ifcastportal/jobcardview', $data);
	}

	public function myservices(){
		load_view('profile/myservices');
		// , $data
	}

	public function mymentors(){
		load_view('profile/mymentors');
		// , $data
	}

	public function myrecruiters(){
		load_view('profile/myrecruiters');
		// , $data
	}

	/* Onkar created Functions for temporary pages -- END */

}




