<?php

    class Dashboard extends CI_Controller{

        public function __construct()
        {
            parent::__construct();
            $this->load->model('ModelSiswa');
        }
        public function index(){
            $this->load->view('dashboard/layout/header');
            $this->load->view('dashboard/layout/sidebar');
            $this->load->view('dashboard/layout/navbar');
            $this->load->view('dashboard/layout/content');
            $this->load->view('dashboard/layout/footer');
        }
        public function data_student(){
            $data = array(
                'data_student' => $this->ModelSiswa->getData(),
            );
            $this->load->view('dashboard/layout/header',$data);
            $this->load->view('dashboard/layout/sidebar');
            $this->load->view('dashboard/layout/navbar');
            $this->load->view('dashboard/data/data_student');
            $this->load->view('dashboard/layout/footer');
        }
        public function verifikasi_student(){
            $this->load->view('dashboard/layout/header');
            $this->load->view('dashboard/layout/sidebar');
            $this->load->view('dashboard/layout/navbar');
            $this->load->view('dashboard/data/verifikasi_student');
            $this->load->view('dashboard/layout/footer');
        }
    }