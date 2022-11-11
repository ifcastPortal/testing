<?php

class Mainmodel extends CI_Model{		

 	function __construct() {
        parent::__construct();
		$this->load->database();
      }

    function select_object_result($table,$order_by,$whereclause="",$selectclaus=""){		
		if($selectclaus)
			$this->db->select($selectclaus);
	
		if($whereclause)
			$this->db->where($whereclause);

		if(!empty($order_by))
		{
			foreach($order_by as $key=>$val)
			{
				$this->db->order_by($key,$val);
			}
		}
		
		$query = $this->db->get($table);

		$result = $query->result();

		$query->free_result();


		return $result;	 
	} 

	

    function select_object_row($table , $whereclause=array(), $selectclaus=array()){

		if(count($selectclaus) > 0)
			$this->db->select($selectclaus);


		if(count($whereclause) > 0)
			$this->db->where($whereclause);


		$query = $this->db->get($table);
		$result = $query->row();
		$query->free_result();


		return $result;	   

	} 

	

//Count Records

	function select_where_row($table, $where, $selectclaus="")
	{
		if($selectclaus)
			$this->db->select($selectclaus);
		

		$this->db->from($table);
		$this->db->where($where);
		$query = $this->db->get();
		$result = $query->row_array();

		$query->free_result();
		return $result;
   }

   

	function select_row_where($table, $where, $selectclaus="")
	{

		if($selectclaus)
			$this->db->select($selectclaus);

		
		$this->db->from($table);
		$this->db->where($where);
		$query = $this->db->get();
		$result = $query->row_array();

		$query->free_result();

		return $result;
   }

	//function select data from table as single row object 

	function select_where_results($selectclaus, $table , $whereclaus)
    {
		if($selectclaus)
			$this->db->select($selectclaus);

		
		$this->db->from($table);		

		if($whereclaus)
			$this->db->where($whereclaus);


		$query = $this->db->get();	
		$result = $query->result_array();
		$query->free_result();

		return $result;

    }	

	//function select data from table as single row object 

	function select_results_where( $table , $whereclaus)
    {
		$query = $this->db->get_where($table, $whereclaus );
		$result = $query->result_array();
		$query->free_result();
		return $result;
    }	

	

	function insert_tblRecords($table, $tbl_data) {

        $fields = $this->db->list_fields( $table );
        $data = array();

        foreach ( $fields as $field ) {

            if (isset($tbl_data[$field])) {

                $data[$field]= $tbl_data[$field];

                if (is_array($tbl_data[$field])) {
					 $data[$field] = implode( ',',array_map('strtolower',$tbl_data[$field]) );
				}
				else{
						$data[$field]= $tbl_data[$field];
				}

            }

        }

        $this->db->insert($table, $data);
		$last_insert = $this->db->insert_id();

		return $last_insert;
    }



	function insertData($table) {        
        $fields = $this->db->list_fields( $table );
        $data = array();

        foreach ($fields as $field) {
            if (isset($_POST[$field])) { 
                $data[$field]= $this->input->post($field);

                if (is_array($_POST[$field])) { 
					 $data[$field] = implode( ',',array_map('strtolower',$this->input->post($field)) );  
                }
				else{
					$data[$field]= $this->input->post($field);  
				}

            }

        }

         $this->db->insert($table, $data);

		$last_insert = $this->db->insert_id();

		return $last_insert;
    }



//Creat thumb

	function _createThumbnail($fileName, $width, $height, $dir,$spath) {
        $this->load->library('image_lib');

        $this->image_lib->clear();


        $config['image_library'] = 'gd2';

        $config['thumb_marker'] = '';

        $config['source_image'] = './common/front/images/' .$spath."/".$fileName;

	    $config['new_image'] = './common/front/images/' .$spath."/".$dir.'/' . $fileName;

	    $config['maintain_ratio'] = TRUE;

        $config['width'] = $width;

        $config['height'] = $height;

        $this->image_lib->initialize($config);

        if(!$this->image_lib->resize()) 

		echo $this->image_lib->display_errors();

    }

	

	function _createThumbnailtest($fileName, $width, $height, $dir,$spath) {

		$config['image_library'] = 'gd2';

		$config['source_image'] = './common/front/images/' .$spath."/".$fileName;

		$config['new_image'] = './common/front/images/' .$spath."/".$dir.'/' . $fileName;

		$config['maintain_ratio'] = TRUE;

		$config['width']    = $width;

		$config['height']   = $height;


		$this->load->library('image_lib', $config); 

		if (!$this->image_lib->resize()) {
    			echo $this->image_lib->display_errors();
			}
    }

	

	function _createThumbnailpetition($fileName,$dir,$spath) {

		$this->load->library('image_lib');
        $this->image_lib->clear();
        $config['image_library'] = 'gd2';
        $config['thumb_marker'] = '';
        $config['source_image'] = './common/front/images/' .$spath."/".$fileName;
	    $config['new_image'] = './common/front/images/' .$spath."/".$dir.'/' . $fileName;
	    $config['maintain_ratio'] = TRUE;
        $config['width'] = '630';
        $config['height'] = '350';
        $this->image_lib->initialize($config);
        if(!$this->image_lib->resize()) echo $this->image_lib->display_errors();

    }

	function resize_image($fileName,$width,$height,$dir,$spath)
    {

	    $this->load->library('image_lib');
        $this->image_lib->clear();
        $config['image_library'] = 'gd2';
        $config['source_image'] = './common/front/images/' .$spath."/".$fileName;
        $config['new_image'] = './common/front/images/' .$spath."/".$dir.'/' . $fileName;
        $config['quality'] = '100%';
        $config['create_thumb'] = TRUE;
        $config['maintain_ratio'] = FALSE;
        $config['thumb_marker'] = '';
		$config['master_dim']= 'width';
	    $config['width'] = $width;
        $config['height'] = $height;
        $this->image_lib->initialize($config);
 		$this->image_lib->resize();

	}

	function update($data,$conditions,$tablename="")
	{

		if($tablename=="")
			$tablename = $this->table;

		$this->db->where($conditions);
		$this->db->update($tablename,$data);
		return $this->db->affected_rows();

	}



	function updateRecords($table, $whereclaus, $data="")
	{		

		$post = $data ? $data : $_POST;
		$fields = $this->db->list_fields( $table );		
		$data = array();			
		foreach ( $fields as $field )
		{		
			if (isset($post[$field]))
			{ 
				$data[$field]= $post[$field];

				if ( is_array($post[$field] ))	
				{
					$data[$field]= implode( ',',array_map('strtolower',$post[$field]) );	
				}
				else{
				   $data[$field]= $post[$field];
				}

            }

		}		

		$this->db->where($whereclaus);	
		$this->db->update($table, $data);	
		return $this->db->affected_rows();

	}

	function updateData( $table , $id , $idValue)
	{		

		$fields = $this->db->list_fields( $table );	
		$data = array();		
		foreach ($fields as $field )
		{		
			if (isset($_POST[$field]))
			{ 
				$data[$field]= $this->input->post($field);
				if ( is_array($_POST[$field] ))	
				{
					$data[$field]= implode( ',',array_map('strtolower',$this->input->post($field)) );
				}	
				else
			    {
				   $data[$field]= $this->input->post($field);
				}

            }

		}		

		$this->db->where($id, $idValue);		

		$this->db->update($table, $data);		


		return $this->db->affected_rows();

	}


	function delete($id,$tablename)
    {
		$this->db->where($id);
		$this->db->delete($tablename);
    }


	//Function to delete single record 

	function delete_record($del_cond,$tablename)
    {	
		$this->db->where($del_cond);
		$this->db->delete($tablename);
    }



	function ConfirmOrder($order_id)
	{

		$row=$this->Mainmodel->select_row_where("user_orders",array("order_id"=>$order_id));
		$encoded_id=base64_encode($row['order_id']);
        $file1 = $this->load->view('front/confirm_order','',true);
		$admin_details=$this->Mainmodel->select_row_where("jb_admin_users",array("super_admin"=>'Yes'));
		$from = $admin_details['email'];

				//$from="info@journeybaba.com";
		$pattern=array('/{user}/','/{uid}/');
		$replacement=array($row['name'],$encoded_id);	
		$login_details=preg_replace($pattern,$replacement,$file1);
		
		//print_r($login_details);

		$config=array(
			'charset'=>'utf-8',
			'wordwrap'=> TRUE,
			'mailtype' => 'html'
		);

		$this->email->initialize($config);
		$this->email->to($row['email_id']);
		$this->email->from($from, "Journey Baba");
		$this->email->subject('Order Confirmation');
		$this->email->message($login_details);	
		$mail = $this->email->send();
	}





	public function onkar_update_password($data, $to)
    {
        // $this->db->set($this->db->escape_str($data));
        $this->db->where('email',$to);
        $this->db->update('users',$data);

        if($this->db->affected_rows() > 0)
        {
            return true;
        }
        else
        {
            return false;
        }
        // $onkarghule = $this->db->get('posts');
        // return $onkarghule->row_array();
    }

			

}


?>