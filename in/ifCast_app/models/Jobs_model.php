<?php
class Jobs_model extends CI_Model{
		
        function __construct() {
        parent::__construct();
		$this->load->database();
      }
	   
	public function get_jobDetails($jobid)
	{
		$sql_query = "
		SELECT `tbl_jobpost`.`jobpost_id` , `tbl_jobpost`.`user_id` , `tbl_jobpost`.`industry_id` , `tbl_jobpost`.`functionAreaId` , `tbl_jobpost`.`role_id` , `tbl_jobpost`.`job_title` , `tbl_jobpost`.`job_description` , `tbl_jobpost`.`job_responsibility` , `tbl_jobpost`.`job_education` , `tbl_jobpost`.`keywords` , `tbl_jobpost`.`min_experience` , `tbl_jobpost`.`max_experience` , `tbl_jobpost`.`min_ctc` , `tbl_jobpost`.`max_ctc` , `tbl_jobpost`.`no_ofVacancies` , `tbl_jobpost`.`job_type` , `tbl_jobpost`.`is_discloseSalary` , `tbl_jobpost`.`company_name` , `tbl_jobpost`.`contact_person` , `tbl_jobpost`.`about_company` , `tbl_jobpost`.`comp_logo` , `tbl_jobpost`.`web_url` , `tbl_jobpost`.`jobPostDate` , `tbl_jobpost`.`jobStartDate` , `tbl_jobpost`.`jobEndDate` , `tbl_jobpost`.`status`, `tbl_jobpost`.`location_1`,`tbl_jobpost`.`location_2`,`tbl_jobpost`.`location_3`
		FROM `tbl_jobpost`
			
		WHERE `tbl_jobpost`.`jobpost_id` =".$jobid;
	
		
		$qry = $this->db->query($sql_query);
		
		$resultArr = $qry->row();
		
		$locations = array();
		if($resultArr)
		{
			if($resultArr->location_1)
				$locations[] = $resultArr->location_1;
			
			if($resultArr->location_2)
				$locations[] = $resultArr->location_2;
			
			if($resultArr->location_3)
				$locations[] = $resultArr->location_3;
		}
		
		$locationArr = $this->get_locations($locations);
		
		
		return array('jobDetails'=>$resultArr, 'locationArr'=>$locationArr);
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




	public function onkar_searchform($key)
	{
		$this->db->like('job_title',$key,'both');
		$query = $this->db->get('tbl_jobpost');
		return $query->result();
	}

	public function get_searchJoblist($filter_data)
	{
		if($filter_data['get_totalCount'] == 1)
		{
			$select = " SELECT `tbl_jobpost`.`jobpost_id` ";
		}
		else
		{
			$select = "SELECT `tbl_jobpost`.`jobpost_id` , `tbl_jobpost`.`user_id` , `tbl_jobpost`.`industry_id` , `tbl_jobpost`.`functionAreaId` , `tbl_jobpost`.`role_id` , `tbl_jobpost`.`job_title` , `tbl_jobpost`.`job_description` , `tbl_jobpost`.`keywords` , `tbl_jobpost`.`min_experience` , `tbl_jobpost`.`max_experience` , `tbl_jobpost`.`min_ctc` , `tbl_jobpost`.`max_ctc` , `tbl_jobpost`.`no_ofVacancies` , `tbl_jobpost`.`job_type` , `tbl_jobpost`.`is_discloseSalary` , `tbl_jobpost`.`company_name` , `tbl_jobpost`.`contact_person` , `tbl_jobpost`.`about_company` , `tbl_jobpost`.`comp_logo` , `tbl_jobpost`.`web_url` , `tbl_jobpost`.`jobPostDate` , `tbl_jobpost`.`jobStartDate` , `tbl_jobpost`.`jobEndDate` , `tbl_jobpost`.`status`, `tbl_jobpost`.`location_1`,`tbl_jobpost`.`location_2`,`tbl_jobpost`.`location_3` , `tbl_industry`.`industry_name`,

		IFNULL((CASE  
			WHEN (	`tbl_city`.`city_id` = `tbl_jobpost`.`location_1`)
			
			THEN `tbl_city`.`cityName`
		   END ),0) AS city_location1,
		   
		IFNULL((CASE  
			WHEN (	`tbl_city`.`city_id` = `tbl_jobpost`.`location_2`)
			
			THEN `tbl_city`.`cityName`
		   END ),0) AS city_location2,
		   
		IFNULL((CASE  
			WHEN (	`tbl_city`.`city_id` = `tbl_jobpost`.`location_3`)
			
			THEN `tbl_city`.`cityName`
		   END ),0) AS city_location3 ";
		}
		
		$sql_query = " {$select}		
		
		FROM `tbl_jobpost`
			  LEFT JOIN `tbl_industry` ON(`tbl_industry`.`industry_id` = `tbl_jobpost`.`industry_id`) 
			  LEFT JOIN `tbl_city` ON(`tbl_city`.`city_id` = `tbl_jobpost`.`location_1` OR `tbl_city`.`city_id` = `tbl_jobpost`.`location_2` OR `tbl_city`.`city_id` = `tbl_jobpost`.`location_3`) 
			
		WHERE 
			`tbl_jobpost`.`is_deleted` = '0' 
			AND `tbl_jobpost`.`status` = '1' ";
		
		if($filter_data['posted_date'])
		{
			$sql_query .= " AND date(`tbl_jobpost`.`jobPostDate`) >=  '".$filter_data['posted_date']."'";	
		}
		if($filter_data['job_title'])
		{
			$sql_query .= " AND `tbl_jobpost`.`job_title` LIKE  '%".$filter_data['job_title']."%'";	
		}
		
		if($filter_data['industry_id'])
		{
			$sql_query .= " AND `tbl_jobpost`.`industry_id` =  ".$filter_data['industry_id'];	
		}
		if($filter_data['job_type'])
		{
			$sql_query .= " AND `tbl_jobpost`.`job_type` =  '".$filter_data['job_type']."'";	
		}		
		
		if($filter_data['job_experience'])
		{
			if($filter_data['job_experience'] == "fresh")
				$sql_query .= " AND `tbl_jobpost`.`min_experience` =  0";
			else
			if($filter_data['job_experience'] >= 6)
				$sql_query .= " AND `tbl_jobpost`.`max_experience` >=  ".$filter_data['job_experience'];
			else{
				$sql_query .= " AND (`tbl_jobpost`.`min_experience` <=  ".$filter_data['job_experience']." AND `tbl_jobpost`.`max_experience` =  ".$filter_data['job_experience'].")";
			}				
		}
		
		if(count($filter_data['city_id']) > 0 && !empty($filter_data['city_id'][0]))
		{
			$sql_query .= " AND (`tbl_jobpost`.`location_1` IN  (". implode(",",$filter_data['city_id']) .")";	
			$sql_query .= " OR `tbl_jobpost`.`location_2` IN  (". implode(",",$filter_data['city_id']) .")";	
			$sql_query .= " OR `tbl_jobpost`.`location_3` IN  (". implode(",",$filter_data['city_id']) .") )";	
		}
		
		$sql_query .= " GROUP BY `tbl_jobpost`.`jobpost_id`	";
		
		if($filter_data['get_totalCount'] == 0){
			$sql_query .= " ORDER BY `tbl_jobpost`.`jobPostDate` DESC";
			$sql_query .=" LIMIT ".$filter_data['start_from']." , ".$filter_data['limit']; 
		}
		
		
	//echo "<pre> $sql_query ===> <br> filter_data==> "; print_r($filter_data); exit;
			
		$qry = $this->db->query($sql_query);
		
		if($filter_data['get_totalCount'] == 1)
		{
			$resultArr = $qry->num_rows();
		}
		else
		{
			$resultArr = $qry->result();
		}
 
		//echo "<pre> => $sql_query ===> "; print_r($resultArr); exit;

		return $resultArr;
	}

	
	public function get_industries_jobCounts($user_id=0)
	{
		$sql_query = "
		SELECT `tbl_industry`.`industry_id`, `tbl_industry`.`industry_name`,
		IFNULL(COUNT(CASE  
						WHEN (
								`tbl_industry`.`industry_id` = `tbl_jobpost`.`industry_id` AND
								`tbl_jobpost`.`status` = '1' AND `tbl_jobpost`.`is_deleted` = '0'
							)		
						THEN 1
	  				 END),0) AS posted_jobCount

		FROM `tbl_industry`		
			  INNER JOIN `tbl_jobpost` ON(`tbl_industry`.`industry_id` = `tbl_jobpost`.`industry_id`) 		
		WHERE 
			`tbl_industry`.`status` = '1' ";

	if($user_id != 0 && $user_id > 0)
		{
			$sql_query .= " AND `tbl_jobpost`.`user_id` = ".$user_id;
		}

	$sql_query .= "		
		GROUP BY `tbl_jobpost`.`industry_id`	
		ORDER BY posted_jobCount DESC;";
	//echo $sql_query; //exit;
		
		$qry = $this->db->query($sql_query);
		
		$resultArr = $qry->result();
		//echo "<pre> ===>"; print_r($resultArr); exit;
		return $resultArr;
	}

}
		

?>