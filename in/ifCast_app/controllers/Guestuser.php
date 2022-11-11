<?php
class Guestuser extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model("usermodel");
		$this->load->model("jobs_model");
	}


	public function index()
	{



		$data['sitePageName'] = 'iFCast - Best Online Job Search Portal in India';

		$data['sitePageKeyword'] = 'Online Job, Jobs, Online Job search, Online Job Vacancies, Job Openings, Jobs for Fresher, Apply Online Jobs, Employment, Career, Resumes, Online Recruitment Companies, Online Hiring Companies, Part Time Job Search, Engineering jobs in top companies, Engineering Job Vacancy';

		$data['sitePageDescription'] = 'With iFCast, dreamers and enablers can search for millions of Online Job Vacancies and Resumes. Use various features and tools to search for the best hires and jobs to help employers and job seekers at every step of the way with the best online job search portal in India.';

		$data['posted_recentJobs'] = $this->mainmodel->select_object_result('jobpost', array('jobPostDate' => 'DESC'), array('status' => '1', 'is_deleted' => '0'), "",);
		$data['posted_featureJobs'] = $this->mainmodel->select_object_result('jobpost', array('jobPostDate' => 'DESC'), array('status' => '1', 'is_featured' => '1', 'is_deleted' => '0'), "",);
		$data['industries'] = $this->mainmodel->select_object_result('tbl_industry', array('status' => '1'));

		// $selectclaus = array('city_id', 'cityName', 'state_id'); [VINBO] COMMENT THIS LINE
		$data['cities'] = $this->mainmodel->select_object_result('tbl_city', array('status' => '1', 'state_id' => '22'));
		//, $selectclaus [VINBO] REMOVED IN QUERY
		$data['subCities'] = $this->mainmodel->select_object_result('tbl_subcities', array('status' => '1', 'subCity_id', 'ASC')); //[VINBO] added query

		$data['experiance'] = $this->mainmodel->select_object_result('tbl_jobpost', array('status' => '1'));

		$data['industries_jobCounts'] = $this->jobs_model->get_industries_jobCounts('tbl_industry', array('status' => '1'));

		$data['pageName'] = 'ifcasthomeguest';

		$data['applyJobNotifications'] = $this->db->count_all_results('tbl_apply_job'); //[VINBO] added this query using for notifications

		$data['getusername'] = $this->db->select('*')->join('tbl_users', 'tbl_users.user_id = tbl_apply_job.user_id')->order_by('userJobId', 'DESC')->get('tbl_apply_job')->result(); //[VINBO] added this query using for getting applicant name
		$data['getjobtitle'] = $this->db->select('*')->join('tbl_jobpost', 'tbl_jobpost.jobpost_id = tbl_apply_job.jobpost_id')->order_by('userJobId', 'DESC')->get('tbl_apply_job')->result(); //[VINBO] added this query using for getting job title

		$data['job_count'] = $this->mainmodel->select_object_result('tbl_jobpost', array('status' => 1)); //[VINBO] added this query using for getting job count on 

		load_view('guestpagesviews/ifcasthomeguest', $data);
	}

	public function ifcasthomeguest()
	{

		$data['sitePageName'] = 'Home Guestview| iFCast Job Portal & Customized Services';
		$data['pageName'] = 'ifcasthomeguest';
		$data['posted_recentJobs'] = $this->mainmodel->select_object_result('jobpost', array('status' => '1', 'is_deleted' => '0'), "", array('jobPostDate' => 'DESC'));
		$data['posted_featureJobs'] = $this->mainmodel->select_object_result('jobpost', array('status' => '1', 'is_featured' => '1', 'is_deleted' => '0'), "", array('jobPostDate' => 'DESC'));

		$data['industries'] = $this->mainmodel->select_object_result('tbl_industry', array('status' => '1'));

		// $selectclaus = array('city_id', 'cityName', 'state_id'); [VINBO] COMMENT THIS LINE
		$data['cities'] = $this->mainmodel->select_object_result('tbl_city', array('status' => '1', 'state_id' => '22'));
		// , $selectclaus [VINBO] REMOVED TO QUERY
		$data['subCities'] = $this->mainmodel->select_object_result('tbl_subcities', array('status' => '1', 'subCity_id', 'ASC')); //[VINBO] added query

		$data['experiance'] = $this->mainmodel->select_object_result('tbl_jobpost', array('status' => '1'));

		$data['industries_jobCounts'] = $this->jobs_model->get_industries_jobCounts('tbl_industry', array('status' => '1'));

		$data['pageName'] = 'ifcasthomeguest';

		$data['job_count'] = $this->mainmodel->select_object_result('tbl_jobpost', array('status' => 1)); //[VINBO] added this query using for getting job count on 

		load_view('guestpagesviews/ifcasthomeguest', $data);
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

	public function get_appliedUsers()
	{
		$seesionData = $this->session->userdata('ifcast_recruiterLog');
		$user_id = $seesionData['user_id'];
		$_POST['jobpost_id'] = 2;
		if (isset($_POST['jobpost_id'])) {
			$data['posted_jobs'] = $this->jobs_model->get_appliedUsers($_POST['jobpost_id'], $user_id);
			//echo "<pre> ===>"; print_r($data['posted_jobs']); exit;
			$this->load->view('appliedUser_list', $data);
		}
	}



	public function details($jobid = NULL)
	{
		if ($jobid == NULL) {
			redirect('guestuser/joblist');
		}

		$seesionData = $this->session->userdata('ifcast_log');
		$user_id = $seesionData['user_id'];

		$data = $this->jobs_model->get_jobDetails($jobid);

		$whereclause = array('user_id' => $user_id, 'jobpost_id' => $jobid);
		$selectclaus = array('userJobId');
		$save_joblist = $this->mainmodel->select_object_row('save_job', $whereclause, $selectclaus);
		$data['job_count'] = $this->mainmodel->select_object_result('tbl_jobpost', array('status' => 1)); //[VINBO] added this query using for getting job count on 

		$data['getusername'] = $this->db->select('*')->join('tbl_users', 'tbl_users.user_id = tbl_apply_job.user_id')->order_by('userJobId', 'DESC')->get('tbl_apply_job')->result(); //[VINBO] added this query using for getting applicant name
		$data['getjobtitle'] = $this->db->select('*')->join('tbl_jobpost', 'tbl_jobpost.jobpost_id = tbl_apply_job.jobpost_id')->order_by('userJobId', 'DESC')->get('tbl_apply_job')->result(); //[VINBO] added this query using for getting job title

		$data['job_applied'] = 0;

		if ($save_joblist)
			$data['job_applied'] = 1;

		load_view('guestpagesviews/jobs/jobdetail', $data);
	}





	public function alljobs()
	{
		$data['pageName'] = 'jobspage';
		$data['posted_jobs'] = $this->mainmodel->select_object_result('jobpost', array('status' => '1', 'is_deleted' => '0'));
		// , $selectclaus
		load_view('guestpagesviews/jobs/alljobs', $data);
	}
	public function jobslocation()
	{
		$data['pageName'] = 'jobspage';
		load_view('guestpagesviews/jobs/jobslocation', $data);
	}

	public function jobscategory()
	{
		$data['pageName'] = 'jobspage';
		load_view('guestpagesviews/jobs/jobscategory', $data);
	}

	public function joblistpage()
	{
		$data['pageName'] = 'jobspage';

		$data['sitePageName'] = 'iFCast - Jobs Openings in Top Cities | Nashik | Pune | Mumbai | Banglore | Hyderabad';

		$data['sitePageKeyword'] = 'Jobs in Top Cities, Job Openings in Top Cities, Online Job Search, Jobs, Online Job, Online Recruitment Companies, Engineering Jobs in Top Companies, Engineering Job Vacancy';

		$data['sitePageDescription'] = 'iFCast - Search for your dream job from a large database of jobs openings in top cities with our online job search portal.';

		$data['getusername'] = $this->db->select('*')->join('tbl_users', 'tbl_users.user_id = tbl_apply_job.user_id')->order_by('userJobId', 'DESC')->get('tbl_apply_job')->result(); //[VINBO] added this query using for getting applicant name
		$data['getjobtitle'] = $this->db->select('*')->join('tbl_jobpost', 'tbl_jobpost.jobpost_id = tbl_apply_job.jobpost_id')->order_by('userJobId', 'DESC')->get('tbl_apply_job')->result(); //[VINBO] added this query using for getting job title


		//$data['posted_jobs'] = $this->mainmodel->select_object_result('jobpost', array('status'=>'1', 'is_deleted'=>'0'), $selectclaus);
		$filter_data = array();
		if ($_POST) {
			$filter_data['job_title'] = $this->input->post('job_title') ? trim($this->input->post('job_title')) : "";
			$filter_data['industry_id'] = $this->input->post('industry_id') ? $this->input->post('industry_id') : "";
			$filter_data['city_id'] = (COUNT($this->input->post('city_id')) > 0) ? $this->input->post('city_id') : "";
			$filter_data['subCity_name'] = (COUNT($this->input->post('subCity_name')) > 0) ? $this->input->post('subCity_name') : "";
			$filter_data['job_type'] = $this->input->post('job_type') ? $this->input->post('job_type') : "";
			$filter_data['job_experience'] = $this->input->post('job_experience') ? $this->input->post('job_experience') : "";

			$posted_date = $this->input->post('posted_date') ? $this->input->post('posted_date') : "";

			if ($posted_date) {
				$filter_data['posted_date'] = date('Y-m-d', strtotime('today - ' . $posted_date));
			}
		}


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

		$data['applyJobNotifications'] = $this->db->count_all_results('tbl_apply_job'); //[VINBO] added this query using for notifications

		$filter_data['get_totalCount'] = 0;
		$data['posted_jobs'] = $this->jobs_model->get_searchJoblist($filter_data);
		$data['filter_data'] = $filter_data;
		load_view('guestpagesviews/jobs/joblistpage', $data);
	}

	public function joblistpage_searchform()
	{

		$data['pageName'] = 'jobspage';
		$data['sitePageName'] = 'Jobs Search Guest | iFCast Job Portal & Customized Services';
		//$data['posted_jobs'] = $this->mainmodel->select_object_result('jobpost', array('status'=>'1', 'is_deleted'=>'0'), $selectclaus);
		// $filter_data = array();

		$key = $this->input->post('jobtitle');

		$data['onkar_results'] = $this->jobs_model->onkar_searchform($key);
		// echo '<pre>';
		// print_r($data['onkar_results']);
		// exit;
		// $data['posted_jobs'] = $this->jobs_model->get_searchJoblist($filter_data);

		load_view('guestpagesviews/jobs/joblistpagesearchresults', $data);
	}

	public function search_joblist()
	{

		$data['pageName'] = 'jobspage';
		if ($_POST) {
			$filter_data['industry_id'] = $this->input->post('industry_id') ? $this->input->post('industry_id') : "";
			$filter_data['city_id'] = (COUNT($this->input->post('city_id')) > 0) ? $this->input->post('city_id') : "";
			$filter_data['job_type'] = $this->input->post('job_type') ? $this->input->post('job_type') : "";
			$filter_data['job_experience'] = $this->input->post('job_experience') ? $this->input->post('job_experience') : "";


			$posted_date = $this->input->post('posted_date') ? $this->input->post('posted_date') : "";

			if ($posted_date) {
				$filter_data['posted_date'] = date('Y-m-d', strtotime('today - ' . $posted_date));
			}
			//echo "<pre> $posted_date ===> <br> filter_data==> "; print_r($_POST); exit;


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
		}


		$this->load->view('jobs/search_joblist', $data);
	}

	public function jobdetail()
	{
		$data['pageName'] = 'jobspage';
		$data['sitePageName'] = 'Job Detail Guest | iFCast Job Portal & Customized Services';
		load_view('guestpagesviews/jobs/jobdetail', $data);
	}

	public function joblist()
	{
		$data['pageName'] = 'jobspage';

		$selectclaus = array();
		$data['posted_jobs'] = $this->mainmodel->select_object_result('jobpost', array('status' => '1', 'is_deleted' => '0'), $selectclaus);
		load_view('guestpagesviews/jobs/joblist', $data);
	}

	/* --------------------------------------------------------------------------------------- */



	public function all_dreamerservices()
	{
		$data['pageName'] = 'services';

		$data['sitePageName'] = 'iFCast - Premium Dreamer Services for Job Openings & Online Job Vacancies';

		$data['sitePageKeyword'] = 'Online Job, Jobs, Online Job search, Online Job Vacancies, Job Openings, Jobs for Fresher, Apply Online Jobs, Employment, Career, B.Tech Jobs, B.E Jobs, Resumes, Online Recruitment Companies, Online Hiring Companies, Part Time Job Search, Latest Engineering Jobs in India, Mechanical Engineering Jobs, Best Engineering Job Portals, Civil Engineering Jobs ';

		$data['sitePageDescription'] = 'Search for the latest online jobs posted by the best companies. Get job openings based on your industry, skills ,and demographics. Post your resumes for the best online job vacancies & employment on iFCast.';

		$data['applyJobNotifications'] = $this->db->count_all_results('tbl_apply_job'); //[VINBO] added this query using for notifications

		$data['getusername'] = $this->db->select('*')->join('tbl_users', 'tbl_users.user_id = tbl_apply_job.user_id')->order_by('userJobId', 'DESC')->get('tbl_apply_job')->result(); //[VINBO] added this query using for getting applicant name
		$data['getjobtitle'] = $this->db->select('*')->join('tbl_jobpost', 'tbl_jobpost.jobpost_id = tbl_apply_job.jobpost_id')->order_by('userJobId', 'DESC')->get('tbl_apply_job')->result(); //[VINBO] added this query using for getting job title

		load_view('guestpagesviews/services/dreamer/all_dreamerservices', $data);
	}
	public function all_enablerservices()
	{
		$data['pageName'] = 'services';

		$data['sitePageName'] = 'iFCast - Top Job Posting Sites in India  ';

		$data['sitePageKeyword'] = 'Career Sites, Career Portal, best engineering jobs, top job posting sites, best job search sites, job search websites, job websites, best job sites, best job search engines, top job search engines, top job search sites, best job search, top job sites, best job finding sites, job posting, job recruiters, recruiting, advertising jobs, executive recruitment, recruitment, recruit staff, recruiting agencies, legal recruiting, online recruitment, employer, employment';

		$data['sitePageDescription'] = 'Enhance your brand identity with top job posting sites, post your jobs on iFCast, the best job search website for job posting, recruiting, and advertising as an employer.';

		$data['applyJobNotifications'] = $this->db->count_all_results('tbl_apply_job'); //[VINBO] added this query using for notifications

		$data['getusername'] = $this->db->select('*')->join('tbl_users', 'tbl_users.user_id = tbl_apply_job.user_id')->order_by('userJobId', 'DESC')->get('tbl_apply_job')->result(); //[VINBO] added this query using for getting applicant name
		$data['getjobtitle'] = $this->db->select('*')->join('tbl_jobpost', 'tbl_jobpost.jobpost_id = tbl_apply_job.jobpost_id')->order_by('userJobId', 'DESC')->get('tbl_apply_job')->result(); //[VINBO] added this query using for getting job title

		load_view('guestpagesviews/services/enabler/all_enablerservices', $data);
	}
	public function all_crafterservices()
	{
		$data['pageName'] = 'services';

		$data['sitePageName'] = 'iFCast - A-list Online Job Provider in India with the Best Online Hiring Companies';

		$data['sitePageKeyword'] = 'Online Job Provider, Jobs, Online Job search, Online Job Vacancies, Online Job Openings, Jobs for Fresher, Apply Online Jobs, Employment, Career, Resumes, Online Recruitment Companies, Online Hiring Companies, Part Time Job Search, Job Hunting Sites';

		$data['sitePageDescription'] = 'Get significant insights from top industry experts to guide you get the perfect job on Online Job Openings & the best Online Job Provider. iFCast is one of the best Online Recruitment Companies for Part Time Job Search, Jobs for Fresher, Employment & more.';

		$data['applyJobNotifications'] = $this->db->count_all_results('tbl_apply_job'); //[VINBO] added this query using for notifications

		$data['getusername'] = $this->db->select('*')->join('tbl_users', 'tbl_users.user_id = tbl_apply_job.user_id')->order_by('userJobId', 'DESC')->get('tbl_apply_job')->result(); //[VINBO] added this query using for getting applicant name
		$data['getjobtitle'] = $this->db->select('*')->join('tbl_jobpost', 'tbl_jobpost.jobpost_id = tbl_apply_job.jobpost_id')->order_by('userJobId', 'DESC')->get('tbl_apply_job')->result(); //[VINBO] added this query using for getting job title

		load_view('guestpagesviews/services/crafter/all_crafterservices', $data);
	}


	public function newslettersubscriber() //[VINBO] Added this function
	{
		$email = $_POST['to'];

		$this->load->config('email');
		$this->load->library('email');

		$this->email->set_newline("\r\n");
		$this->email->set_crlf("\r\n");

		$this->email->from('career@ifcast.co.in');
		// career@ifcast.co.in  change the email id because of email not sent to users on this email id
		$this->email->to($email);
		$this->email->subject('test email');


		$this->email->message('testing email');

		if ($this->email->send()) {
			echo "<script>alert('Please checked your email')</script>";
		} else {
			echo $this->email->print_debugger();
		}

		$this->session->set_flashdata('our_jobs', 'Thank you for subscribing!');
		$this->session->set_flashdata('special_offers', 'Thank you for subscribing!');
		redirect(base_url());
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

	public function abc()
	{
		$key = $this->input->post('job_title');

		$results = "SELECT * FROM `tbl_jobpost` WHERE job_title LIKE '%.$key.%'";
		$data = $this->db->query($results);
		$resultArr = $data->result();
		echo '<pre>';
		print_r($resultArr);
		exit;
		$options = '';
		foreach ($resultArr as $row) {
			$options .= '<option value="' . $row->subCity_id . '"> ' . $row->subCity_name . '</option>';
		}
		echo $options;
	}
}
