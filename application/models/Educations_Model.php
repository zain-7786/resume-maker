<?php

class Educations_Model extends CI_Model{

    function insert_data($data){

        $this->db->insert('educations',$data);
    }

    function get_all_data($user_id)
    {
        $this->db->where("user_id", $user_id);
        $query = $this->db->get("educations")->result();
        return $query;
    }

    function delete_data($id)
    {
        $this->db->where("id", $id);
        $this->db->delete("educations");
    }
    function update_data($data, $id)
    {
        $this->db->where("id", $id);
        $this->db->update("educations", $data);
    }
}
?>