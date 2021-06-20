<?php

Class Home extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('ModelKuota');
        $this->load->model('ModelPendaftaran');
        $this->load->model('ModelJadwal');

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
        if($this->session->userdata('username') == null) {
            $this->session->set_flashdata("pesan", "Silahkan Login Terlebih Dahulu");
            $this->session->set_flashdata("title", "Gagal!!");
            $this->session->set_flashdata("type", "warning");
            redirect(base_url());
        }
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
        $id_user = $this->session->userdata('id_user');
        $data_siswa = $this->ModelPendaftaran->getDataNisById($id_user);
        $nis = $data_siswa['nis'];
        $checkData = $this->ModelJadwal->getDataJadwal($id_user);
        if($checkData != null){

            $dataPendaftaran = $this->ModelPendaftaran->getDataHasilByNis($nis);
        }else{
            $dataPendaftaran = $this->ModelPendaftaran->getDataHasilAndJadwalByNis($nis);

        }
        $data = array(

            "active_hasil" => "active",
            "title" => "Pendaftaran",
            'data_pendaftaran' => $dataPendaftaran,
            'jadwal' => $checkData['jadwal'],
            'check_jadwal' => $checkData
            
        );
        $this->load->view('home/layout/header',$data);
        $this->load->view('home/layout/navbar');
        $this->load->view('home/hasil/hasil');
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
            "title" => "Tentang Sekolah",
            "data_kuota"    => $this->ModelKuota->getDataKuota()
        );
        $this->load->view('home/layout/header',$data);
        $this->load->view('home/layout/navbar');
        $this->load->view('home/kuota/v_kuota');
        $this->load->view('home/layout/footer');
    }

}