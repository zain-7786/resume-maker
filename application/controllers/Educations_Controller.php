<?php

class Educations_Controller extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        //print_r($this->session->userdata['id']);die();
        if(!$this->session->userdata())
        {
            redirect('login');
        }
    }

    public function educations(){

        $user_id = $this->session->userdata['id'];
        $data['education_data'] = $this->educations_model->get_all_data($user_id);
        $this->load->view('educations',$data);
    }

    public function add_education(){

        $this->form_validation->set_rules('start_month', 'Start Month', 'required');
        $this->form_validation->set_rules('end_month', 'End Month', 'required');
        $this->form_validation->set_rules('institution_name', 'Institution Name', 'required');
        $this->form_validation->set_rules('degree_name', 'Degree Name', 'required');
        $this->form_validation->set_rules('description', 'Description','required');

        if($this->form_validation->run())
        {
            $data = array(
                'start_month' => $this->input->post('start_month'),
                'end_month' => $this->input->post('end_month'),
                'institution_name' =>  $this->input->post('institution_name'),
                'name' => $this->input->post('degree_name'),
                'description' => $this->input->post('description'),
                'user_id' => $this->session->userdata['id']
             
            );
            $this->educations_model->insert_data($data);
            redirect(base_url().'profile/educations');
        }
    }

    // public function add_educations(){

    //     $user_id = $this->session->userdata['id'];
    //     $data['education_data'] = $this->educations_model->get_all_data($user_id);
    //     $this->load->view('educations', $data);
    // }

    public function delete_education($id){

        //$id = $this->uri->segment(3);
        $this->educations_model->delete_data($id);

        redirect(base_url()."profile/educations");
    }

    public function update_education($id){

        //$id = $this->uri->segment(3);
        $data = array(
            'start_month' => $this->input->post('start_month'),
            'end_month' => $this->input->post('end_month'),
            'institution_name' =>  $this->input->post('institution_name'),
            'name' => $this->input->post('degree_name'),
            'description' => $this->input->post('description'),
            'user_id' => $this->session->userdata['id']
         
        );
        $this->educations_model->update_data($data,$id);
        redirect(base_url()."profile/educations");
    }

    
}


?>