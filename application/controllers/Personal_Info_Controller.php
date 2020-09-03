<?php

class Personal_Info_Controller extends CI_Controller{

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

    public function personal_info(){

        $user_id = $this->session->userdata['id'];
        $data["user_data"] = $this->personal_info_model->get_data($user_id);
        $this->load->view('personal_info',$data);
    }

    public function personal_info_valid(){

        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('phone', 'Phone', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|trim');
        $this->form_validation->set_rules('address', 'Address', 'required');
        $this->form_validation->set_rules('tagline', 'Tagline', 'required');
        $this->form_validation->set_rules('description', 'Description','required');

        if($this->form_validation->run())
        {
            $data = array(
                'name' => $this->input->post('name'),
                'phone' => $this->input->post('phone'),
                'email' =>  $this->input->post('email'),
                'address' => $this->input->post('address'),
                'tagline' => $this->input->post('tagline'),
                'description' => $this->input->post('description'),
                'picture' => $_FILES["picture"]["name"],
                'user_id' => $this->session->userdata['id']
            );
            if(isset($_FILES["picture"]["name"]))
            {
                $config['upload_path'] ='./assets/img/uploads'; //products';
                $config['allowed_types'] = 'jpg|jpeg|png|gif';
                $this->load->library('upload', $config);
                if(!$this->upload->do_upload('picture'))
                {
                    echo $this->upload->display_errors();
                }
            }
            if($this->input->post("update"))
            {
                $this->personal_info_model->update_data($data, $this->input->post("hidden_id"));
                redirect(base_url() . "profile/personal_info");
            }
            if($this->input->post("insert"))
            {
                $this->personal_info_model->insert_data($data);
                redirect(base_url().'profile/personal_info');
                
            }
        }
    }

}


?>