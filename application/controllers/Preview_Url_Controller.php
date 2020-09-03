<?php

class Preview_Url_Controller extends CI_Controller{

    public function preview_cv($key){

        $isExist = $this->signup_model->is_Key_Exist($key);
        $ipaddress = $_SERVER['REMOTE_ADDR'];
        if($isExist){

            $user_id = $this->signup_model->get_id($key);
            $data = array(
                'ip_address' => $ipaddress,
                'user_id' =>   $user_id
        ); 
        $this->visitors_model->insert_data($data);

        $is_exist_visitor = $this->visitors_model->is_IP_Exist($ipaddress,$user_id);
        if(!$is_exist_visitor){
            $count = $this->signup_model->get_count($user_id);
            $count += 1;
           $data = array(
                'visitors_count' => $count
           );
           $this->signup_model->update_data($data,$user_id);
        }

        $data['personalinfo_data'] = $this->personal_info_model->get_data($user_id);
        $data['experience_data'] = $this->experiences_model->get_all_data($user_id);
        $data['education_data'] = $this->educations_model->get_all_data($user_id);
        $data['project_data'] = $this->projects_model->get_all_data($user_id);
        $data['social_data'] = $this->social_profiles_model->get_data($user_id);
        $this->load->view('preview', $data);
        }
        else{
            echo '<h2>No USER Exist of this id</h2>';
            echo '<h2>Your IP address is </h2>';
        }
    }
}

?>