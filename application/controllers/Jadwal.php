<?php

Class Jadwal extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('ModelJadwal');
    }

    public function add_jadwal(){

        $jadwal = $this->input->post('jadwal');

        if ($jadwal != null) {

            $id_users = $this->session->userdata('id_user');

            $data = array(
                'jadwal' => $jadwal,
                'id_user' => $id_users 
            );
            $this->ModelJadwal->addJadwal($data);
            $this->session->set_flashdata('type', 'success');
            $this->session->set_flashdata('pesan', 'Berhasil Tambah Jadwal');
            $this->session->set_flashdata('title', 'Berhasil!');
            redirect(base_url('dashboard/data_jadwal'));
        } else {
            $this->session->set_flashdata('type', 'warning');
            $this->session->set_flashdata('pesan', 'Mohon lengkapi data terlebih dahulu');
            $this->session->set_flashdata('title', 'Gagal!');
            redirect(base_url('dashboard/data_jadwal'));
        }
    }
}