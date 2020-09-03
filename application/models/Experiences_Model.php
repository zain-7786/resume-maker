<?php

class Experiences_Model extends CI_Model{

    function insert_data($data){

        $this->db->insert('experiences', $data);
    }

    function get_all_data($user_id)
    {
        $this->db->where("user_id", $user_id);
        $query = $this->db->get("experiences")->result();
        return $query;
    }

    function get_single_data($user_id)
    {
        $this->db->where("user_id", $user_id);
        $query = $this->db->get("experiences")->row();
        return $query;
    }

    function delete_data($id)
    {
        $this->db->where("id", $id);
        $this->db->delete("experiences");
    }

    function update_data($data, $id)
    {
        $this->db->where("id", $id);
        $this->db->update("experiences", $data);
    }

}

?>