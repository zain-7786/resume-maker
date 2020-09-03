<?php

class Social_Profiles_Model extends CI_Model{

    function insert_data($data){

        $this->db->insert('social_profiles',$data);
    }

    function get_data($user_id)
    {
        $this->db->where("user_id", $user_id);
        $query = $this->db->get("social_profiles")->row();
        return $query;
    }

    function update_data($data, $id)
    {
        $this->db->where("id", $id);
        $this->db->update("social_profiles", $data);
    }
}
?>