<?php

Class Jadwal extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('ModelJadwal');
    }

    public function add_jadwal()
    {
        $id_user = $this->input->post('id_user');
        $jadwal = $this->input->post('jadwal');
        
        if($jadwal != null && $id_user != null){

            $data = array(
                'jadwal'  => $jadwal,
                'id_user'  => $id_user,
                
            );
            $this->ModelJadwal->addData($data);
            $this->session->set_flashdata('type', 'success');
            $this->session->set_flashdata('pesan', 'Berhasil Tambah Data');
            $this->session->set_flashdata('title', 'Berhasil!');
            redirect(base_url('dashboard/data_jadwal'));
        }else{
            $this->session->set_flashdata('type', 'warning');
            $this->session->set_flashdata('pesan', 'Tidak Boleh Kosong!');
            $this->session->set_flashdata('title', 'Gagal!');
            redirect(base_url('dashboard/data_jadwal'));
        }
        
        
    }
}