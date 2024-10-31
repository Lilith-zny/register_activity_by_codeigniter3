<?php

class Main extends CI_Controller {
    
    function __construct(){
        parent::__construct();

        // load model
        $this->load->model('Activity_model', '', true);
    }

    public function index(){
        $data['main_content'] = 'frontend/pages/activity_page';
        $data['query'] = $this->Activity_model->get_activity();
        $data['title'] = 'Activity';
        $this->load->view('frontend/templates/default_template', $data);
    }

    public function detail_activity(){
        $data['main_content'] = 'frontend/pages/detail_activity_page';
        $data['title'] = 'Detail Activity';
        $this->load->view('frontend/templates/default_template', $data);
    }
    
    // public function getall(){
        
    //     // echo "<pre>";
    //     // print_r($data);
    //     // echo "</pre>";
    //     $this->load->view('frontend/pages/activity_page', $data);
    // }
}