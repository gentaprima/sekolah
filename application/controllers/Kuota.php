<?php

Class Kuota extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('ModelKuota');
    }
    public function add_kuota(){
        $nama_kelas = $this->input->post('nama_kelas');
        $jumlah_kuota = $this->input->post('jumlah_kuota');

        if($nama_kelas != null && $jumlah_kuota != null){

            $data = array(
                'id_kelas' => $nama_kelas,
                'jumlah_kuota' => $jumlah_kuota
            );
            $this->ModelKuota->addData($data);
            $this->session->set_flashdata('type', 'success');
            $this->session->set_flashdata('pesan', 'Berhasil Tambah Data');
            $this->session->set_flashdata('title', 'Berhasil!');
            redirect(base_url('dashboard/kuota_mutasi'));
        }else{
            $this->session->set_flashdata('type', 'warning');
            $this->session->set_flashdata('pesan', 'Mohon lengkapi data terlebih dahulu');
            $this->session->set_flashdata('title', 'Gagal!');
            redirect(base_url('dashboard/kuota_mutasi'));
        }
    }
    public function edit_kuota(){
        $id_kuota = $this->input->post('id_kuota');
        $nama_kelas = $this->input->post('nama_kelas');
        $jumlah_kuota = $this->input->post('jumah_kuota');

        if($nama_kelas != null && $jumlah_kuota != null){
            $data = array(
                'id_kelas'  => $nama_kelas,
                'jumlah_kuota'  => $jumlah_kuota,
            );
            $this->ModelKuota->updateData($data,$id_kuota);
            $this->session->set_flashdata('type', 'success');
            $this->session->set_flashdata('pesan', 'Berhasil Update Data');
            $this->session->set_flashdata('title', 'Berhasil!');
            redirect(base_url('dashboard/kuota_mutasi'));
        }else{
            $this->session->set_flashdata('type', 'warning');
            $this->session->set_flashdata('pesan', 'Mohon lengkapi data terlebih dahulu');
            $this->session->set_flashdata('title', 'Gagal!');
            redirect(base_url('dashboard/kuota_mutasi'));
        }
    }
    public function delete_kuota(){
        $id_kuota = $this->uri->segment(3);

        $this->ModelKuota->deleteData($id_kuota);
        $this->session->set_flashdata('type', 'success');
        $this->session->set_flashdata('pesan', 'Berhasil Hapus Data');
        $this->session->set_flashdata('title', 'Berhasil!');
        redirect(base_url('dashboard/kuota_mutasi'));
    }
}