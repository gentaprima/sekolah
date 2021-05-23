<?php

Class Jadwal extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
    }

    public function add_jadwal()
    {

        $nis = $this->input->post('nis');
        $nama_siswa = $this->input->post('nama_siswa');
        $tgl_lahir = $this->input->post('tgl_lahir');
        $alamat = $this->input->post('alamat');
        $jenis_kelamin = $this->input->post('jenis_kelamin');
        
        
            $data = array(
                'nis'  => $nis,
                'nama_siswa'  => $nama_siswa,
                'tgl_lahir'  => $tgl_lahir,
                'alamat'  => $alamat,
                'jenis_kelamin'  => $jenis_kelamin
            );
            $this->ModelJadwal->addData($data);
            $this->session->set_flashdata('type', 'success');
            $this->session->set_flashdata('pesan', 'Berhasil Tambah Data');
            $this->session->set_flashdata('title', 'Berhasil!');
            redirect(base_url('dashboard/data_jadwal'));
        
        
    }
}