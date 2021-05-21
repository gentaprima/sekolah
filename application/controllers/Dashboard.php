<?php

    class Dashboard extends CI_Controller{

        public function __construct()
        {
            parent::__construct();
            $this->load->model('ModelSiswa');
            $this->load->model('ModelKelas');
            $this->load->model('ModelKuota');
            $this->load->model('ModelJadwal');

            if($this->session->userdata('username') == null || $this->session->userdata('admin') != true){
                redirect(base_url());
        }
    }
        public function index(){
            $data = [
                'title' => 'Dashboard',
                'active_home'   => 'active'
            ];
            $this->load->view('dashboard/layout/header',$data);
            $this->load->view('dashboard/layout/sidebar');
            $this->load->view('dashboard/layout/navbar');
            $this->load->view('dashboard/layout/content');
            $this->load->view('dashboard/layout/footer');
        }
        public function data_student(){
            $data = array(
                'title' => 'Data Siswa Mutasi',
                'data_student' => $this->ModelSiswa->getData(),
                'active_student'    => "active"
            );
            $this->load->view('dashboard/layout/header',$data);
            $this->load->view('dashboard/layout/sidebar');
            $this->load->view('dashboard/layout/navbar');
            $this->load->view('dashboard/data/data_student');
            $this->load->view('dashboard/layout/footer');
        }
        public function verifikasi_student(){
            
            $data = array(
                'title' => 'Verifikasi Dokumen',
                'data_verifikasistudent' => $this->ModelSiswa->getDataVerifikasiSiswa(),
                'active_verifikasi'    => "active"
            );
            
            $this->load->view('dashboard/layout/header',$data);
            $this->load->view('dashboard/layout/sidebar');
            $this->load->view('dashboard/layout/navbar');
            $this->load->view('dashboard/data/verifikasi_student');
            $this->load->view('dashboard/layout/footer');
        }

        public function data_class(){
            $data = array(
                'title' => 'Data Kelas',
                'data_class' => $this->ModelKelas->getData(),
                'active_class' => 'active' 
            );

            $this->load->view('dashboard/layout/header',$data);
            $this->load->view('dashboard/layout/sidebar');
            $this->load->view('dashboard/layout/navbar');
            $this->load->view('dashboard/class/data_class');
            $this->load->view('dashboard/layout/footer');
        }

        public function kuota_mutasi(){
            $data = array(
                'title' => 'Data Kuota Mutasi',
                'data_kelas' => $this->ModelKuota->getDataKelas(),
                'data_kuota' => $this->ModelKuota->getDataKuota(),
                'active_kuota' => 'active'
            );

            $this->load->view('dashboard/layout/header',$data);
            $this->load->view('dashboard/layout/sidebar');
            $this->load->view('dashboard/layout/navbar');
            $this->load->view('dashboard/kuota/v_kuota');
            $this->load->view('dashboard/layout/footer');
    }
    public function data_jadwal (){
        $data = array(
            'title' => 'Data Jadwal',
            'data_jadwal' => $this->ModelJadwal->getData(),
            'active_jadwal' => 'active'
        );

        $this->load->view('dashboard/layout/header',$data);
        $this->load->view('dashboard/layout/sidebar');
        $this->load->view('dashboard/layout/navbar');
        $this->load->view('dashboard/testertulis/v_jadwal');
        $this->load->view('dashboard/layout/footer');
}
public function data_hasil (){
    $data = array(
        'title' => 'Data Hasil',
        'active_hasil' => 'active'
    );

    $this->load->view('dashboard/layout/header',$data);
    $this->load->view('dashboard/layout/sidebar');
    $this->load->view('dashboard/layout/navbar');
    $this->load->view('dashboard/testertulis/v_hasil');
    $this->load->view('dashboard/layout/footer');
}
}