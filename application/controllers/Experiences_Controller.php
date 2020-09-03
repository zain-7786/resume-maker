<?php

class Experiences_Controller extends CI_Controller{

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

    public function experiences(){

        $user_id = $this->session->userdata['id'];
        $data['experience_data'] = $this->experiences_model->get_all_data($user_id);
        $this->load->view('experiences',$data);
    }

    public function add_experience(){

        $this->form_validation->set_rules('start_month', 'Start Month', 'required');
        $this->form_validation->set_rules('end_month', 'End Month', 'required');
        $this->form_validation->set_rules('company_name', 'Company Name', 'required');
        $this->form_validation->set_rules('position', 'Position', 'required');
        $this->form_validation->set_rules('description', 'Description','required');
        
        if($this->form_validation->run())
        {
            $data = array(
                'start_month' => $this->input->post('start_month'),
                'end_month' => $this->input->post('end_month'),
                'company_name' =>  $this->input->post('company_name'),
                'position' => $this->input->post('position'),
                'description' => $this->input->post('description'),
                'user_id' => $this->session->userdata['id']
             
            );
            $this->experiences_model->insert_data($data);
            redirect(base_url().'profile/experiences');
        }
    }
    // public function add_experiences(){

    //     $user_id = $this->session->userdata['id'];
    //     $data['experience_data'] = $this->experiences_model->get_all_data($user_id);
    //     $this->load->view('experiences', $data);
    // }

    public function delete_experience($id){

        //$id = $this->uri->segment(3);
        $this->experiences_model->delete_data($id);
        redirect(base_url()."profile/experiences");
    }

    public function update_experience($id){

        $data = array(
            'start_month' => $this->input->post('start_month'),
            'end_month' => $this->input->post('end_month'),
            'company_name' =>  $this->input->post('company_name'),
            'position' => $this->input->post('position'),
            'description' => $this->input->post('description'),
            'user_id' => $this->session->userdata['id']
         
        );
        $this->experiences_model->update_data($data,$id);
        redirect(base_url()."profile/experiences");
    }
}


?>