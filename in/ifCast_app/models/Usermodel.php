<?php
class Usermodel extends CI_Model
{

	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function userprevjob_details($user_id, $userprevjob = "")
	{
		$sql_query = "select `tbl_userprevjob`.*, `tbl_functionarea`.`functionArea`
					FROM `tbl_userprevjob`
						LEFT JOIN `tbl_functionarea` on (`tbl_functionarea`.`functionAreaId` = `tbl_userprevjob`.`functionAreaId`)
					
					WHERE `tbl_userprevjob`.`user_id` =" . $user_id . "  AND
						  `tbl_userprevjob`.`is_deleted` = '0' ";

		if ($userprevjob != "") {
			$sql_query .= " AND `tbl_userprevjob`.`prevJobId`  =" . $userprevjob;
		}


		$sql_query .= " ORDER BY `tbl_userprevjob`.`prevJobId` ASC ";

		$qry = $this->db->query($sql_query);

		if ($userprevjob != "") {
			$resultArr = $qry->row();
		} else
			$resultArr = $qry->result();
		//echo "<pre>==> ".$sql_query; print_r($resultArr); exit;
		return $resultArr;
	}

	// public function lastapplyjob_details($user_id , $userJobId)
	// {
	// 	$sql_query = "select `tbl_apply_job`.*, ` tbl_jobpost`.`job_title` from `tbl_apply_job` LEFT JOIN `tbl_jobpost` on (`tbl_jobpost`.`jobpost_id` = `tbl_apply_job` =`jobpost_id`) WHERE `tbl_apply_job`.`user_id` =" .$user_id." AND `tbl_apply_job`.`is_deleted`='0' ";

	// 	if($userJobId != "")
	// 	{
	// 		$sql_query .= "AND `tbl_apply_job`.`useJobId` ="  . $userJobId;
	// 	}
		 
	// 	$sql_query ="ORDER BY `tbl_apply_job`.`userJobId` ASC ";

	// 	$query = $this->db->query($sql_query);

	// 	if($userJobId != "")
	// 	{
	// 		$resultArr =$query->row();
	// 	}else{
	// 		$resultArr = $query->result();
	// 		return $resultArr;
	// 	}

	// }

	public function educational_details($user_id, $education_id = "")
	{
		$sql_query = "select `tbl_educationdetails`.*, `tbl_degree`.`degreeName`, `tbl_degree`.`degreeId`, `tbl_university`.`university_name`
					FROM `tbl_educationdetails`
						LEFT JOIN `tbl_degree` on (`tbl_degree`.`degreeId` = `tbl_educationdetails`.`degreeId`)
						LEFT JOIN `tbl_university` on (`tbl_university`.`university_id` = `tbl_educationdetails`.`university_id`)
					
					WHERE `tbl_educationdetails`.`user_id` =" . $user_id . "  AND
						  `tbl_educationdetails`.`is_deleted` = '0' ";

		if ($education_id != "") {
			$sql_query .= " AND `tbl_educationdetails`.`education_id`  =" . $education_id;
		}


		$sql_query .= " ORDER BY `tbl_educationdetails`.`education_id` ASC ";

		$qry = $this->db->query($sql_query);

		if ($userprevjob != "") {
			$resultArr = $qry->row();
		} else
			$resultArr = $qry->result();
		//echo "<pre>==> ".$sql_query; print_r($resultArr); exit;
		return $resultArr;
	}


	public function extra_educations($user_id)
	{
		$sql_query = "select `tbl_degree`.`degreeName`, `tbl_degree`.`degreeId`
					FROM `tbl_degree`
					WHERE 
						  `tbl_degree`.`status` = '1' ";


		//$sql_query .= " GROUP BY `tbl_degree`.`degreeName` ";
		$sql_query .= " ORDER BY `tbl_degree`.`degreeId` ASC ";

		$qry = $this->db->query($sql_query);

		$resultArr = $qry->result();

		//echo "<pre>==> ".$sql_query; print_r($resultArr); exit;
		return $resultArr;
	}


	public function get_appliedjobs($catid)
	{

		$this->db->where('catid', $catid);
		$onkarghule = $this->db->get('tbl_save_job');
		return $onkarghule->result_array();
	}


	public function get_enablerlist()
	{
		$user_type = 2;
		$this->db->where('user_type', $user_type);
		$onkarghule = $this->db->get('tbl_users');
		return $onkarghule->result_array();
	}

	public function get_companylist()
	{
		// $user_type = 2;
		// $this->db->where('user_type',$user_type);
		$onkarghule = $this->db->get('tbl_companydetails');
		return $onkarghule->result_array();
	}


	public function get_jobcount()
	{
		// $user_type = 2;
		// $this->db->where('user_type',$user_type);
		$onkarghule = $this->db->get('tbl_jobpost');
		return $onkarghule->result_array();
	}


	public function get_appliedjoblist()
	{
		// $user_type = 2;
		// $this->db->where('user_type',$user_type);
		$onkarghule = $this->db->get('tbl_apply_job');
		return $onkarghule->result_array();
	}

	//[VINBO] added this function
	public function get_savedjoblist()
	{
		// $user_type = 2;
		// $this->db->where('user_type',$user_type);
		$onkarghule = $this->db->get('tbl_save_job');
		return $onkarghule->result_array();
	}

	public function get_appliedjobinformation()
	{
		// $user_type = 2;
		// $this->db->where('user_type',$user_type);
		$onkarghule = $this->db->get('tbl_jobpost');
		return $onkarghule->result_array();
	}


	public function newsletterlist()
	{
		$this->db->order_by('ns_id', 'DESC');
		$onkarghule = $this->db->get('tbl_newsletter_subscription');
		return $onkarghule->result_array();
	}

	public function newsletter_subscription($data)
	{


		if ($this->db->insert('newsletter_subscription', $this->db->escape_str($data))) {
			return true;
		} else {
			return false;
		}
		// $user_type = 2;
		// $this->db->where('user_type',$user_type);
		// $onkarghule = $this->db->get('tbl_jobpost');
		// return $onkarghule->result_array();
	}




	// public function onkar_update_password($data, $to)
	// {
	//     // $this->db->set($this->db->escape_str($data));
	//     $this->db->where('email',$to);
	//     $this->db->update('users',$data);

	//     if($this->db->affected_rows() > 0)
	//     {
	//         return true;
	//     }
	//     else
	//     {
	//         return false;
	//     }
	//     // $onkarghule = $this->db->get('posts');
	//     // return $onkarghule->row_array();
	// }





}
