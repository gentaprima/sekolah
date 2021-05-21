<?php

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
        $check_jk = $this->input->post('check_jk');
        $check_kota = $this->input->post('check_kota');
        $check_phone = $this->input->post('check_phone');
        $check_mtk = $this->input->post('check_mtk');
        $check_bindo = $this->input->post('check_indo');
        $check_bingg = $this->input->post('check_bingg');
        $check_kk = $this->input->post('check_kk');
        $check_akte = $this->input->post('check_akte');
        $id_pendaftaran = $this->input->post('id_user');

        if ($check_nisn != null && $check_nama != null && $check_tgl != null && $check_jk != null && $check_kota != null && $check_phone != null && $check_mtk != null && $check_bindo != null && $check_bingg != null && $check_kk != null && $check_akte != null) {
            $data_sukses = array(
                'is_verify' => 1,
            );
            $this->ModelPendaftaran->isVerficationSucces($id_pendaftaran, $data_sukses);
        
        } else {
            $data = array(
                'is_verify' => 2,
            );
            $this->ModelPendaftaran->isVerficationSucces($id_pendaftaran, $data);
        }
        $this->session->set_flashdata('type', 'success');
        $this->session->set_flashdata('pesan', 'Data Pendaftaran berhasil dikonfirmasi');
        $this->session->set_flashdata('title', 'Berhasil!');
        redirect(base_url('dashboard/verifikasi_student'));
    }
}
