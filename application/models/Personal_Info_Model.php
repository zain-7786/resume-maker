<?php

class Personal_Info_Model extends CI_Model{

    function insert_data($data){

        $this->db->insert('personal_info', $data);
    }

    function get_data($user_id)
    {
        $this->db->where("user_id", $user_id);
        $query = $this->db->get("personal_info")->row();
        return $query;
    }

    function update_data($data, $id)
    {
        $this->db->where("id", $id);
        $this->db->update("personal_info", $data);
    }

}

?>