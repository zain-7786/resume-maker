<?php

class Preview_Controller extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        //print_r($this->session->userdata['id']);die();
        if(!$this->session->userdata())
        {
            redirect('login');
        }
    }

    public function preview_cv(){

        $user_id = $this->session->userdata['id'];
        $data['personalinfo_data'] = $this->personal_info_model->get_data($user_id);
        $data['experience_data'] = $this->experiences_model->get_all_data($user_id);
        $data['education_data'] = $this->educations_model->get_all_data($user_id);
        $data['project_data'] = $this->projects_model->get_all_data($user_id);
        $data['social_data'] = $this->social_profiles_model->get_data($user_id);
        $this->load->view('preview', $data);
    }
}

?>