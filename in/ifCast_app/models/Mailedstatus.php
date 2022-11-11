<?php
class Mailedstatus extends CI_Model{

    function new_dreamer_count(){
        $last_count=$this->user_count()->user_count;
        $sql = "SELECT COUNT(user_id) FROM tbl_users where user_id>$last_count AND user_type=1";
        $query = $this->db->query($sql);
        return $query->result()[0];
    }
    function last_user_id(){
        $sql = "SELECT user_id FROM tbl_users ORDER BY user_id DESC LIMIT 1";
        $query = $this->db->query($sql);
        return $query->result()[0];
    }
    function new_enabler_count(){
        $last_count=$this->user_count()->user_count;
        $sql = "SELECT COUNT(user_id) FROM tbl_users where user_id>$last_count AND user_type=2";
        $query = $this->db->query($sql);
        return $query->result()[0];
    }
    function total_dreamer_count(){
        $last_count=$this->user_count()->user_count;
        $sql = "SELECT COUNT(user_id) FROM tbl_users where user_type=1";
        $query = $this->db->query($sql);
        return $query->result()[0];
    }
    function total_enabler_count(){
        $last_count=$this->user_count()->user_count;
        $sql = "SELECT COUNT(user_id) FROM tbl_users where user_type=2";
        $query = $this->db->query($sql);
        return $query->result()[0];
    }
    function user_count(){
        $sql = "SELECT user_count FROM tbl_status_mailed where id=1";
        $query = $this->db->query($sql);
        return $query->result()[0];
    }
    function update_user_count($value){
        $data = array(
            'user_count'  => $value
        );
        $this->db->where('id', '1');
        $this->db->update('tbl_status_mailed', $data);
    }

}