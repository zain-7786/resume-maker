<?php

class Signup_Controller extends CI_Controller{
    public function index(){

        $this->load->view('Authentication/sign_up');
    }

    public function validation(){

        $this->form_validation->set_rules('email', 'Email Address', 'required|trim|valid_email|is_unique[users.email]');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if($this->form_validation->run())
        {
            $data = array(
                'email' =>  $this->input->post('email'),
                'password'  =>  $this->input->post('password'),
                'unique_key' => md5(rand())
            );
            $this->signup_model->insert_data($data);
            redirect('signin');
        }
        else
        {
            $this->index();
        }
    }
}
?>