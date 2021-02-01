<?php

class Dashboard extends CI_Controller{

    public function index(){
        $this->load->view('templates/header.php');
        $this->load->view('templates/sidebar.php');
        $this->load->view('admin/dashboard.php');
        $this->load->view('templates/footer.php');
    }
}