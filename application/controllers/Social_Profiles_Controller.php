<?php

class Social_Profiles_Controller extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        //print_r($this->session->userdata['id']);die();
        // if(!$this->session->userdata())
        // {
        //     redirect('login');
        // }
        if(!array_key_exists('id', $this->session->userdata()))
        {
            redirect('login');
        }
    }

    public function social_profiles(){

        $user_id = $this->session->userdata['id'];
        $data["user_data"] = $this->social_profiles_model->get_data($user_id);
        $this->load->view('social_profiles', $data);
    }

    public function social_profiles_valid(){

        $this->form_validation->set_rules('facebook', 'Facebook', 'required');
        $this->form_validation->set_rules('linkedin', 'LinkedIn', 'required');
        $this->form_validation->set_rules('twitter', 'Twitter', 'required');
        $this->form_validation->set_rules('github', 'Github','required');
        $this->form_validation->set_rules('stackoverflow', 'StackOverFlow','required');

        if($this->form_validation->run())
        {
            $data = array(
                'facebook' => $this->input->post('facebook'),
                'linkedin' => $this->input->post('linkedin'),
                'twitter' =>  $this->input->post('twitter'),
                'github' => $this->input->post('github'),
                'stackoverflow' => $this->input->post('stackoverflow'),
                'user_id' => $this->session->userdata['id']          
            );
            if($this->input->post("update"))
            {
                $this->social_profiles_model->update_data($data, $this->input->post("hidden_id"));
                redirect(base_url() . "profile/social_profiles");
            }
            if($this->input->post("insert"))
            {
                $this->social_profiles_model->insert_data($data);
                redirect(base_url().'profile/social_profiles');
            }
           
        }
    }
}


?>