<?php
class Webhook extends CI_Model{


    function last_job(){
        $sql = "SELECT * FROM tbl_jobpost ORDER BY jobpost_id DESC LIMIT 1";
        $query = $this->db->query($sql);
        return $query->result()[0];
    }
    function fb_token(){
        $sql = "SELECT tokenvalue1 FROM tbl_webhook_social where name='fb'";
        $query = $this->db->query($sql);
        return $query->result()[0];
    }
    function fb_token_update($value){
        $data = array(
            'tokenvalue1'  => $value
        );
        $this->db->where('name', 'fb');
        $this->db->update('tbl_webhook_social', $data);

    }
    function linkedin_token_update1($value){
        $data = array(
            'tokenvalue1'  => $value
        );
        $this->db->where('name', 'linkedin');
        $this->db->update('tbl_webhook_social', $data);
    }
    function linkedin_token1(){
        $sql = "SELECT tokenvalue1 FROM tbl_webhook_social where name='linkedin'";
        $query = $this->db->query($sql);
        return $query->result();
    }
    function linkedin_token_update2($value){
        $data = array(
            'tokenvalue2'  => $value
        );
        $this->db->where('name', 'linkedin');
        $this->db->update('tbl_webhook_social', $data);
    }
    function linkedin_token2(){
        $sql = "SELECT tokenvalue2 FROM tbl_webhook_social where name='linkedin'";
        $query = $this->db->query($sql);
        return $query->result();
    }
    function location($value){
        $sql = "SELECT cityName FROM tbl_city where city_id=$value";
        $query = $this->db->query($sql);
        return $query->result()[0];
    }
}