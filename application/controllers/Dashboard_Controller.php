<?php

class Dashboard_Controller extends CI_Controller{

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

    function logout()
    {
        $data = $this->session->all_userdata();
        foreach($data as $row => $row_value)
        {
            $this->session->unset_userdata($row);
        }
        redirect('login');
    }

    public function index(){

        $user_id = $this->session->userdata['id'];
        $data['info'] = $this->personal_info_model->get_data($user_id);
        $data['count'] =  $this->signup_model->get_unique_key($user_id);
        $data['user'] = $this->signup_model->get_unique_key($user_id);
        $this->load->view('dashboard', $data);
    }
    
}


?>