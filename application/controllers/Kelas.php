<?php

Class Kelas extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('ModelKelas');
    }
    public function add_class()
    {
        $nama_kelas = $this->input->post('nama_kelas');

        if ($nama_kelas != null) {

            $data = array(
                'nama_kelas' => $nama_kelas
            );
            $this->ModelKelas->addData($data);
            $this->session->set_flashdata('type', 'success');
            $this->session->set_flashdata('pesan', 'Berhasil Tambah Data');
            $this->session->set_flashdata('title', 'Berhasil!');
            redirect(base_url('dashboard/data_class'));
        } else {
            $this->session->set_flashdata('type', 'warning');
            $this->session->set_flashdata('pesan', 'Mohon lengkapi data terlebih dahulu');
            $this->session->set_flashdata('title', 'Gagal!');
            redirect(base_url('dashboard/data_class'));
        }
    }
    public function edit_class()
    {
        $id_kelas = $this->input->post('id_kelas');
        $nama_kelas = $this->input->post('nama_kelas');

        if ($nama_kelas != null) {
            $data = array(
                'nama_kelas'  => $nama_kelas
            );
            $this->ModelKelas->updateData($data,$id_kelas);
            $this->session->set_flashdata('type', 'success');
            $this->session->set_flashdata('pesan', 'Berhasil Update Data');
            $this->session->set_flashdata('title', 'Berhasil!');
            redirect(base_url('dashboard/data_class'));
        } else {
            $this->session->set_flashdata('type', 'warning');
            $this->session->set_flashdata('pesan', 'Mohon lengkapi data terlebih dahulu');
            $this->session->set_flashdata('title', 'Gagal!');
            redirect(base_url('dashboard/data_class'));
        }
    }
    public function delete_class()
    {
        $id_kelas = $this->uri->segment(3);

        $this->ModelKelas->deleteData($id_kelas);
        $this->session->set_flashdata('type', 'success');
        $this->session->set_flashdata('pesan', 'Berhasil Hapus Data');
        $this->session->set_flashdata('title', 'Berhasil!');
        redirect(base_url('dashboard/data_class'));
    }
}
