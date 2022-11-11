<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registrationif extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//$this->load->helper('getCurlData');		
	} 	
	
	public function index()
	{
		$ifcast_log = $this->session->userdata('ifcast_log');
		if($ifcast_log)
		{
			 redirect('profile');
		}
		//echo "<pre> file===>"; print_r($_FILES); 
		//echo "<pre> post===>".$_POST['action']; print_r($_POST); exit;;
		if(isset($_POST['action']) && $_POST['action'] == 'add')
		{					
			$recaptcha=$_POST['g-recaptcha-response'];
			$last_insertid = "blankRecaptcha";
								
			if(!empty($recaptcha))
			{
				$google_url="https://www.google.com/recaptcha/api/siteverify";
				$secret='6LenV8EUAAAAAEAiyE_5DhaJZvsT093-jJZE3Kk6'; // Secrete key
				$ip=$_SERVER['REMOTE_ADDR'];
				$url=$google_url."?secret=".$secret."&response=".$recaptcha."&remoteip=".$ip;
				$res=getCurlData($url);
				$res= json_decode($res, true);
				if($res['success'])
				{					
					$_POST['user_psalt'] = md5(random_string(4));
					$password = $_POST['user_psalt'].md5($_POST['password']);
					$_POST['user_pass'] = $password;
					$value = 'Developer 2';
                    $_POST['temp_desg'] = $value;
													
					$last_insertid = $this->mainmodel->insertData('users');
					//$last_insertid = 1;
					//echo "<pre> File ===>".$_FILES['resume']['name']; print_r($_FILES);
					
					if($last_insertid && isset($_FILES['resume']['name']))
					{				
						$image_name=$_FILES['resume']['name'];
						$temp = explode(".", $image_name);
						
						$userName = (!empty($_POST['name'])) ? $_POST['name'] : time();
						$new_resumename = str_replace(" ","_", $userName) . '.' . end($temp);
						$resumepath="./assets/uploads/resums/".$new_resumename;

						// $resumepath="./uploads/".$new_resumename;


						
						//echo "<pre> ext ===> ".$_FILES['resume']['tmp_name']; 
						//print_r($temp); 
						if(move_uploaded_file($_FILES['resume']['tmp_name'],$resumepath))
						{
							$tbl_data['user_id'] = $last_insertid;
							$tbl_data['upload_file'] = $new_resumename;
							//echo "<pre> tbl_data ===>"; print_r($tbl_data); exit;
							$last_insertid = $this->mainmodel->insert_tblRecords("user_resume", $tbl_data);

						}
						//exit;
					}
				}
				else
				{
					$last_insertid = "invalidRecaptcha";
				}								
			} 
			
			/* $session_data = array(
				'user_login' => '0',
				'user_type' => '1',
				'user_id' => $last_insertid,
                );
			
            $this->session->set_userdata($session_data); */
			
			if($last_insertid)
				echo json_encode($last_insertid);
			else
				echo json_encode(0);	
			
			exit;
		}
		
		load_view('registrationif', $data);
	}
	
	
    public function email_verification()
    {
		$email = $_POST['email'];
		$where = array('email'=>$email, 'is_deleted'=>'0');
        $result = $this->mainmodel->select_where_row('users', $where, array('email'));

       if($result)
			echo json_encode(1);
		else
			echo json_encode(0);	
			
			exit;
    }	
	
    public function logout()
    {
        $this->session->sess_destroy();

        redirect('login');
    }
}
