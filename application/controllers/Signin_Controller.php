<?php

class Signin_Controller extends CI_Controller{

    public function index(){

        $this->load->view('Authentication/sign_in');
    }

    public function login(){
        
        //$this->form_validation->set_rules('email', 'Email Address', 'required');
        //$this->form_validation->set_rules('password', 'Password', 'required');

        //if($this->form_validation->run())
        //{
            
            $email =  $this->input->post('email');
            $password = $this->input->post('password');
            
            $result = $this->signup_model->check_valid($email,$password);
            
            if($result)
            {
                $this->session->set_userdata((array) $result);
                redirect('dashboard');
            }
            else
            {
                redirect('signin');
            }
            
        //}
        // /*else
        // {
        //     $this->index();
        // }
    }

    public function logout()
    {
        $data = $this->session->all_userdata();
        foreach($data as $row => $row_value)
        {
            $this->session->unset_userdata($row);
        }
        redirect('Signin_Controller');
    }

}

?>