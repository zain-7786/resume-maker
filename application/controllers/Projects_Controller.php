<?php

class Projects_Controller extends CI_Controller{

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

    public function projects(){

        $user_id = $this->session->userdata['id'];
        $data['project_data'] = $this->projects_model->get_all_data($user_id);
        $this->load->view('projects',$data);
    }

    public function add_project(){

        $this->form_validation->set_rules('project_name', 'Project Name', 'required');
        $this->form_validation->set_rules('url', 'URL', 'required');
        $this->form_validation->set_rules('technologies', 'Technologies', 'required');
        $this->form_validation->set_rules('description', 'Description','required');

        if($this->form_validation->run())
        {
            $data = array(
                'name' => $this->input->post('project_name'),
                'url' => $this->input->post('url'),
                'technologies' =>  $this->input->post('technologies'),
                'description' => $this->input->post('description'),
                'user_id' => $this->session->userdata['id']
             
            );
            $this->projects_model->insert_data($data);
            redirect(base_url().'profile/projects');
        }
    }
    // public function add_projects(){

    //     $user_id = $this->session->userdata['id'];
    //     $data['project_data'] = $this->projects_model->get_all_data($user_id);
    //     $this->load->view('projects', $data);
    // }

    public function delete_project($id){

        //$id = $this->uri->segment(3);
        $this->projects_model->delete_data($id);

        redirect(base_url()."profile/projects");
    }

    public function update_project($id){

        //$id = $this->uri->segment(3);
        $data = array(
            'name' => $this->input->post('project_name'),
            'url' => $this->input->post('url'),
            'technologies' =>  $this->input->post('technologies'),
            'description' => $this->input->post('description'),
            'user_id' => $this->session->userdata['id']
         
        );
        $this->projects_model->update_data($data,$id);
        redirect(base_url()."profile/projects");
    }

    
}


?>