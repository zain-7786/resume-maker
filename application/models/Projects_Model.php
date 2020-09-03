<?php

class Projects_Model extends CI_Model{

    function insert_data($data){

        $this->db->insert('projects',$data);
    }

    function get_all_data($user_id)
    {
        $this->db->where("user_id", $user_id);
        $query = $this->db->get("projects")->result();
        return $query;
    }

    function delete_data($id)
    {
        $this->db->where("id", $id);
        $this->db->delete("projects");
    }

    function update_data($data, $id)
    {
        $this->db->where("id", $id);
        $this->db->update("projects", $data);
    }
}
?>