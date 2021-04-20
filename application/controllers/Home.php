<?php

Class Home extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('ModelKuota');

    }
    public function index(){
        $data = array(
            "active_home" => "active",
            "title" => "SMPN 148 Jakarta"
        );
        $this->load->view('home/layout/header',$data);
        $this->load->view('home/layout/navbar');
        $this->load->view('home/layout/content');
        $this->load->view('home/layout/footer');
    }
    public function pendaftaran(){

        $data = array(

            "active_pendaftaran" => "active",
            "title" => "Pendaftaran",
            "data_kelas" => $this->ModelKuota->getDataKelas(),
        );
        $this->load->view('home/layout/header',$data);
        $this->load->view('home/layout/navbar');
        $this->load->view('home/data/pendaftaran');
        $this->load->view('home/layout/footer');
    }
    public function biodata(){

        $data = array(

            "active_biodata" => "active",
            "title" => "Pendaftaran"
        );
        $this->load->view('home/layout/header',$data);
        $this->load->view('home/layout/navbar');
        $this->load->view('home/data/');
        $this->load->view('home/layout/footer');
    }
    public function hasil(){

        $data = array(

            "active_hasil" => "active",
            "title" => "Pendaftaran"
        );
        $this->load->view('home/layout/header',$data);
        $this->load->view('home/layout/navbar');
        $this->load->view('home/data/');
        $this->load->view('home/layout/footer');
    }

    public function visi(){
        $data = array(

            "active_visi" => "active",
            "title" => "Visi/Misi"
        );
        $this->load->view('home/layout/header',$data);
        $this->load->view('home/layout/navbar');
        $this->load->view('home/visi/visi');
        $this->load->view('home/layout/footer');
    }
    public function about_school(){
        $data = array(

            "active_about" => "active",
            "title" => "Tentang Sekolah"
        );
        $this->load->view('home/layout/header',$data);
        $this->load->view('home/layout/navbar');
        $this->load->view('home/about_school/aboutSchool');
        $this->load->view('home/layout/footer');
    }

    public function kuota_mutasi(){
        $data = array(

            "active_kuota" => "active",
            "title" => "Tentang Sekolah"
        );
        $this->load->view('home/layout/header',$data);
        $this->load->view('home/layout/navbar');
        $this->load->view('home/kuota/v_kuota');
        $this->load->view('home/layout/footer');
    }
}