<?php

class Visitors_Model extends CI_Model{

    function insert_data($data){

        $this->db->insert('visitors',$data);
    }

    function is_IP_Exist($ip, $user_id){

        $query = $this->db->select('*')->from('visitors')->where('ip_address',$ip)->where('user_id',$user_id)->get()->row();
        return $query;
    }
}
?>