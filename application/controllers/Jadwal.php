<?php

Class Jadwal extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
    }

    public function add_jadwal(){
        $nama_siswa = $this->input->post('nama_siswa');
    }
}