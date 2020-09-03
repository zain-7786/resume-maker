<?php

class Signup_Model extends CI_Model{

    function insert_data($data){

        $this->db->insert('users', $data);
    }

    function check_valid($email,$password){

        $query = $this->db->select('*')->from('users')->where('email',$email)->where('password',$password)->get()->row();
        return $query;
    }

    function get_unique_key($id){

        $query = $this->db->select('*')->from('users')->where('id',$id)->get()->row();
        return $query;
    }
    

    function get_id($key){

        $query = $this->db->where('unique_key', $key)->get('users');
        $firstRow = $query->row();
        return $firstRow->id;
    }

    function is_Key_Exist($key){

        $query = $this->db->select('*')->from('users')->where('unique_key',$key)->get()->row();
        return $query;
    }

    function update_data($data, $id)
    {
        $this->db->where("id", $id);
        $this->db->update("users", $data);
    }

    function get_count($id){

        $query = $this->db->where('id', $id)->get('users');
        $firstRow = $query->row();
        return $firstRow->visitors_count;
    }

}

?>