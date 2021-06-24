<?php 

    class Hasil extends CI_Controller{

        public function __construct()
        {
            parent::__construct();
            $this->load->model('ModelPendaftaran');
            $this->load->model('ModelSiswa');
            $this->load->model('ModelHasil');
        }
        
        public function checkData(){
            $idPendaftaran = $this->uri->segment(3);

            $getData = $this->ModelPendaftaran->checkData($idPendaftaran);
            echo json_encode($getData);
        }

        public function normalisasi(){
            $idUser = $this->input->post('id_user');
            $wawancara = $this->input->post('wawancara');
            $tertulis = $this->input->post('tertulis');
            $dataSiswa = $this->ModelSiswa->getDataUserById($idUser);
            $nis = $dataSiswa['nis'];

            $getDataPendaftaran = $this->ModelPendaftaran->getDataHasilByNis($nis);
            $mtk = $getDataPendaftaran['nilai_mtk'];
            $bingg = $getDataPendaftaran['nilai_bingg'];
            $bindo = $getDataPendaftaran['nilai_bindo'];

            $data = [
                'mtk' => $mtk,
                'bingg' => $bingg,
                'bindo' => $bindo,
                'wawancara' => $wawancara,
                'tes' => $tertulis,
                'id_pendaftaran' => $getDataPendaftaran['id_pendaftaran']
            ];
            $update = array(
                'pemberitahuan' => 'Hasil Tes tertulis dan Wawancara telah keluar, Silahkan Tunggu pemberitahuan akhir dari kami.',
                'status_pemberitahuan' => 3
            );
            $this->ModelPendaftaran->updateData($update,$nis);
            $this->ModelHasil->insertPenilian($data);
            $this->session->set_flashdata('type', 'success');
            $this->session->set_flashdata('pesan', 'Penilaian berhasil ditambahkan !');
            $this->session->set_flashdata('title', 'Berhasil!');
            redirect(base_url().'dashboard/data_hasil');
        }
    }