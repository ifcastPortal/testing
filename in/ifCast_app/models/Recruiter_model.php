<?php
class Recruiter_model extends CI_Model{
		
        function __construct() {
        parent::__construct();
		$this->load->database();
      }


	public function get_companyDetails($user_id)
	{
		$sql_query = "
		SELECT `tbl_companydetails`.*,
				`tbl_users`.`name`,`tbl_users`.`phone`,`tbl_users`.`email`,
				`tbl_city`.`cityName`, `tbl_industry`.`industry_name`,
				SUM(CASE 
					WHEN (`tbl_save_job`.`jobpost_id` = `tbl_jobpost`.`jobpost_id` AND `tbl_save_job`.`flag` = 0 AND `tbl_save_job`.`is_deleted`='0' AND `tbl_users`.`user_id` = ".$user_id .") 
					THEN 1 
					ELSE 0 
				END) AS appiedUsers,
				SUM(CASE 
					WHEN (`tbl_jobpost`.`is_deleted`='0' AND `tbl_users`.`user_id` = ".$user_id .") 
					THEN 1 
					ELSE 0 
				END) AS posted_jobs,
				SUM(CASE 
					WHEN (`tbl_jobpost`.`is_deleted`='0' AND `tbl_jobpost`.`status`='1' AND `tbl_users`.`user_id` = ".$user_id .") 
					THEN 1 
					ELSE 0 
				END) active_jobs 
			

		FROM
			`tbl_users`
			INNER JOIN `tbl_companydetails` ON(`tbl_users`.`user_id` = `tbl_companydetails`.`user_id`)
			LEFT JOIN `tbl_city` ON(`tbl_city`.`city_id` = `tbl_companydetails`.`city_id`)			
			LEFT JOIN `tbl_industry` ON(`tbl_industry`.`industry_id` = `tbl_companydetails`.`industry_id`)			
			LEFT JOIN `tbl_jobpost` ON(`tbl_users`.`user_id` = `tbl_jobpost`.`user_id`)			
			LEFT JOIN `tbl_save_job` ON(`tbl_save_job`.`jobpost_id` = `tbl_jobpost`.`jobpost_id` AND `tbl_save_job`.`is_deleted`='0') 	
			
		WHERE 
			`tbl_users`.`user_id` = ".$user_id ." AND
			`tbl_users`.`user_type` = '2' AND
			`tbl_users`.`status` = '1' AND
			`tbl_users`.`is_deleted` = '0'
		GROUP BY `tbl_users`.`user_id`	
			";
	//echo $sql_query;
		
		$qry = $this->db->query($sql_query);
		
		$resultArr = $qry->row();
		//echo "<pre> ===>"; print_r($resultArr); exit;
		return $resultArr;
	}
	   
	   	
	public function get_postedJobs($user_id)
	{
		$sql_query = "
		SELECT `tbl_jobpost`.`jobpost_id` , `tbl_jobpost`.`user_id` , `tbl_jobpost`.`industry_id` , `tbl_jobpost`.`functionAreaId` , `tbl_jobpost`.`role_id` , `tbl_jobpost`.`job_title` , `tbl_jobpost`.`job_description` , `tbl_jobpost`.`keywords` , `tbl_jobpost`.`min_experience` , `tbl_jobpost`.`max_experience` , `tbl_jobpost`.`min_ctc` , `tbl_jobpost`.`max_ctc` , `tbl_jobpost`.`no_ofVacancies` , `tbl_jobpost`.`job_type` , `tbl_jobpost`.`is_discloseSalary` , `tbl_jobpost`.`company_name` , `tbl_jobpost`.`contact_person` , `tbl_jobpost`.`about_company` , `tbl_jobpost`.`comp_logo` , `tbl_jobpost`.`web_url` , `tbl_jobpost`.`jobPostDate` , `tbl_jobpost`.`jobStartDate` , `tbl_jobpost`.`jobEndDate` , `tbl_jobpost`.`status`, `tbl_jobpost`.`location_1`,`tbl_jobpost`.`location_2`,`tbl_jobpost`.`location_3` ,
		SUM(CASE 
			WHEN (`tbl_save_job`.`jobpost_id` = `tbl_jobpost`.`jobpost_id` AND `tbl_save_job`.`flag` = 0 AND `tbl_save_job`.`is_deleted`='0') 
			THEN 1 
			ELSE 0 
		END) AS appiedUsers 

		FROM `tbl_jobpost`
			  LEFT JOIN `tbl_save_job` ON(`tbl_save_job`.`jobpost_id` = `tbl_jobpost`.`jobpost_id`) 
			
		WHERE 
			`tbl_jobpost`.`is_deleted` = '0' AND
			`tbl_jobpost`.`user_id` =".$user_id ."
		GROUP BY `tbl_jobpost`.`jobpost_id`	
			";
	
		
		$qry = $this->db->query($sql_query);
		
		$resultArr = $qry->result();
		
		return $resultArr;
	}

	public function get_appliedUsers($jobpost_id, $user_id)
	{
		$sql_query = "
		SELECT `tbl_users`.*,  `tbl_save_job`.`jobApplyDate`,  `tbl_user_resume`.`upload_file`

		FROM `tbl_users`
			  INNER JOIN `tbl_save_job` ON(`tbl_save_job`.`user_id` = `tbl_users`.`user_id` AND `tbl_save_job`.`flag`='0') 			
			  INNER JOIN `tbl_jobpost` ON(`tbl_save_job`.`jobpost_id` = `tbl_jobpost`.`jobpost_id`) 			
			  LEFT JOIN `tbl_user_resume` ON(`tbl_user_resume`.`user_id` = `tbl_users`.`user_id`) 			
		WHERE 
			`tbl_save_job`.`jobpost_id` = ".$jobpost_id ." AND
			`tbl_jobpost`.`user_id` = ".$user_id ." AND
			`tbl_users`.`user_type` = '1' AND
			`tbl_users`.`status` = '1' AND
			`tbl_users`.`is_deleted` = '0' AND
			`tbl_save_job`.`is_deleted` = '0' 
		GROUP BY `tbl_users`.`user_id`	
			";
	//echo $sql_query;
		
		$qry = $this->db->query($sql_query);
		
		$resultArr = $qry->result();
		//echo "<pre> ===>"; print_r($resultArr); exit;
		return $resultArr;
	}

	function get_locations($locations)
	{
		$sql_query = "
		SELECT `city_id`, `cityName`
		FROM `tbl_city`			
		WHERE `tbl_city`.`city_id` IN(" .implode(',',$locations) .")
				AND `status` = '1'";
				
		$qry = $this->db->query($sql_query);
		
		$resultArr = $qry->result();
		return $resultArr;
	}	

	
	public function get_candidates($filter_data)
    {
		$sql_query = "
		SELECT `tbl_users`.*, `tbl_user_resume`.`upload_file`, `tbl_userworkdetails`.`total_experince`, `tbl_userworkdetails`.`preferred_location`

		FROM `tbl_users` 			
			  LEFT JOIN `tbl_user_resume` ON(`tbl_user_resume`.`user_id` = `tbl_users`.`user_id`) 			 
			  LEFT JOIN `tbl_userworkdetails` ON(`tbl_userworkdetails`.`user_id` = `tbl_users`.`user_id`) 			 
			
		WHERE 
			`tbl_users`.`user_type` = '1' AND
			`tbl_users`.`status` = '1' AND
			`tbl_users`.`is_deleted` = '0' 
			
		ORDER BY `tbl_users`.`user_id` DESC	
		
/*ORDER BY `tbl_user_resume`.`upload_file` DESC */
			";
		
		if($filter_data['get_totalCount'] == 0){
			$sql_query .=" LIMIT ".$filter_data['start_from']." , ".$filter_data['limit']; 
		}
//echo $sql_query; exit;
		
		$qry = $this->db->query($sql_query);
		
		//$resultArr = $qry->result();
		
		if($filter_data['get_totalCount']){
			$resultArr = $qry->num_rows();
		}
		else
		{
			$resultArr = $qry->result_array();
		}
		

		
        return $resultArr;
	}

	

	//WORKING FUNCTION OF DREAMER BY CATEGORY -- WITHOUT PAGINATION

	public function get_dreamerbydesignation($temp_desg)
	{
		$user_type = 1;
		$this->db->where('user_type',$user_type);
		$this->db->where('temp_desg',$temp_desg);
		
		$this->db->from('tbl_users');
	
		$this->db->join('tbl_user_resume', 'tbl_user_resume.user_id = tbl_users.user_id');
        $onkarghule = $this->db->get();
        return $onkarghule->result_array();
	}

	
	

	//WORKING FUNCTION OF DREAMER BY CATEGORY -- WITH PAGINATION
	public function get_dreamersonkarpagination($limit, $start,$temp_desg) 
	{
		$this->db->limit($limit, $start);
		$user_type = 1;
		$this->db->where('user_type',$user_type);
		$this->db->where('temp_desg',$temp_desg);
		$this->db->from('tbl_users');
		$this->db->join('tbl_user_resume', 'tbl_user_resume.user_id = tbl_users.user_id');
        $onkarghule = $this->db->get();
        return $onkarghule->result_array();
    }
}





?>