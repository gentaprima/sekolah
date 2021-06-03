<?php class Siswa extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('ModelSiswa');
    }

    public function delete_siswa(){
        $id_user = $this->uri->segment(3);

        $this->ModelSiswa->delete_siswa($id_user);
        $this->session->set_flashdata('type', 'success');
        $this->session->set_flashdata('pesan', 'Berhasil Hapus Data');
        $this->session->set_flashdata('title', 'Berhasil!');
        redirect(base_url('dashboard/data_student'));
    }
}