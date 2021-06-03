<?php 

    class Hasil extends CI_Controller{

        public function __construct()
        {
            parent::__construct();
            $this->load->model('ModelPendaftaran');
        }
        
        public function checkData(){
            $idPendaftaran = $this->uri->segment(3);

            $getData = $this->ModelPendaftaran->checkData($idPendaftaran);
            echo json_encode($getData);
        }
    }