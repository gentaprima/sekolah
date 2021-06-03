`<?php

class Konfirmasi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('ModelPendaftaran');
    }
    public function verfication_data()
    {
        $check_nisn = $this->input->post('check_nisn');
        $check_nama = $this->input->post('check_nama');
        $check_tgl = $this->input->post('check_tgl');
        $check_alamat = $this->input->post('check_alamat');
        $check_jk = $this->input->post('check_jk');
        $check_kota = $this->input->post('check_kota');
        $check_phone = $this->input->post('check_phone');
        $check_mtk = $this->input->post('check_mtk');
        $check_bindo = $this->input->post('check_bindo');
        $check_bingg = $this->input->post('check_bingg');
        $check_kk = $this->input->post('check_kk');
        $check_akte = $this->input->post('check_akte');
        $id_pendaftaran = $this->input->post('id_user');


        
        if ($check_nisn == 'on' && $check_nama == 'on' && $check_tgl == 'on' && $check_jk == 'on' && $check_kota == 'on' && $check_phone == 'on' && $check_mtk == 'on' && $check_bindo == 'on' && $check_bingg == 'on' && $check_kk == 'on' && $check_akte == 'on' && $check_alamat == 'on') {
            $data_sukses = array(
                'is_verify' => 1,
                'pemberitahuan' => 'Selamat Anda Telah Lolos Dari Verfikasi Data, Silahkan Tunggu Jadwal Tes Tertulis.',
                'status_pemberitahuan' => 1
            );
            $this->ModelPendaftaran->isVerficationSucces($id_pendaftaran, $data_sukses);
  
        } else {
            $data = array(
                'is_verify' => 2,
                'pemberitahuan' => 'Maaf Anda Tidak Lolos Dari Verifikasi Data.'
            );
            $this->ModelPendaftaran->isVerficationSucces($id_pendaftaran, $data);
        }
        $nisn = $this->checkData($check_nisn);
        $nama = $this->checkData($check_nama);
        $alamat = $this->checkData($check_alamat);
        $tgl = $this->checkData($check_tgl);
        $jk = $this->checkData($check_jk);
        $kota = $this->checkData($check_kota);
        $phone = $this->checkData($check_phone);
        $mtk = $this->checkData($check_mtk);
        $bindo = $this->checkData($check_bindo);
        $bingg = $this->checkData($check_bingg);
        $kk = $this->checkData($check_kk);
        $akte = $this->checkData($check_akte);
        $inserCheck = array(
            "check_nisn" => $nisn,
            "check_nama" => $nama,
            "check_tgl"  => $tgl,
            "check_alamat" => $alamat,
            "check_jk"   => $jk,
            "check_kota" => $kota,
            "check_phone" => $phone,
            "check_mtk"  =>  $mtk,
            "check_bindo" => $bindo,
            "check_bingg" => $bingg,
            "check_kk"     => $kk,
            "check_akte"    => $akte,
            "id_pendaftaran"    => $id_pendaftaran,
        );
        $this->ModelPendaftaran->insertCheck($inserCheck);
        $this->session->set_flashdata('type', 'success');
        $this->session->set_flashdata('pesan', 'Data Pendaftaran berhasil dikonfirmasi');
        $this->session->set_flashdata('title', 'Berhasil!');
        redirect(base_url('dashboard/verifikasi_student'));
    }

    public function checkData($data){
        if($data == 'on'){
            return 1;
        }else{
            return 0;
        }
    }
}
