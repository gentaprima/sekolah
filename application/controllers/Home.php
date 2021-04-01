<?php

Class Home extends CI_Controller{
    public function __construct()
    {
        parent::__construct();

    }
    public function index(){
        $this->load->view('home/layout/header');
        $this->load->view('home/layout/navbar');
        $this->load->view('home/layout/content');
        $this->load->view('home/layout/footer');
    }
}