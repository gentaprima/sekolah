<?php

class Pendaftaran extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('ModelPendaftaran');
    }
    public function process_pendaftaran()
    {
        $id_user = $this->session->userdata('id_user');
        $nis = $this->input->post('nis');

        $full_name = $this->input->post('full_name');
        $tgl_lahir = $this->input->post('tgl_lahir');
        $nama_orangtua = $this->input->post('nama_orangtua');
        $no_telp = $this->input->post('no_telp');
        $jenis_kelamin = $this->input->post('jenis_kelamin');
        $kota = $this->input->post('kota');
        $alamat = $this->input->post('alamat');
        $nama_kelas = $this->input->post('nama_kelas');


        $nilai_mtk = $this->input->post('nilai_mtk');
        $nilai_bindo = $this->input->post('nilai_bindo');
        $nilai_bingg = $this->input->post('nilai_bingg');
        


        $ijazah = $this->_updatePhoto('ijazah');
        $akte = $this->_updatePhoto('akte');
        $kartu_keluarga = $this->_updatePhoto('kartu_keluarga');
        $bukti_nis = $this->_updatePhoto('bukti_nis');
        $fotoSiswa = $this->_updatePhoto('profil');

        $data_siswa = array(
            'id_user'   => $id_user,
            'nis'   => $nis,
            'full_name' => $full_name,
            'tgl_lahir' => $tgl_lahir,
            'alamat'    => $alamat,
            'nama_orangtua' => $nama_orangtua,
            'no_telp' => $no_telp,
            'jenis_kelamin' => $jenis_kelamin,
            'kota'      => $kota,
            'foto_siswa'    => $fotoSiswa
        );
        $this->ModelPendaftaran->inputDataSiswa($data_siswa);
        $data_pendaftaran = array(
            'nis'   => $nis,
            'ijazah' => $ijazah,
            'akte'  => $akte,
            'kartu_keluarga' => $kartu_keluarga,
            'bukti_nis' => $bukti_nis,
            'nilai_mtk' => $nilai_mtk,
            'nilai_bindo'   => $nilai_bindo,
            'nilai_bingg'   => $nilai_bingg,
            'id_kelas' => $nama_kelas
        );
        $this->ModelPendaftaran->insertDataPendaftaran($data_pendaftaran);
        $this->session->set_flashdata('type', 'success');
        $this->session->set_flashdata('pesan', 'Pendaftaran Berhasil');
        $this->session->set_flashdata('title', 'Berhasil!');
        redirect(base_url('home/pendaftaran'));
    }

    public function _updatePhoto($nameFoto)
    {
        $config['upload_path']      = "./assets/home/bukti/";
        $config['allowed_types']    = 'png|jpg|jpeg|gif';
        $this->upload->initialize($config);
        if ($this->upload->do_upload($nameFoto)) {
            $data_foto = array('data_upload' => $this->upload->data());
            $nama_foto = $data_foto['data_upload']['file_name'];
            return $nama_foto;
        } else {
            $this->session->set_flashdata('type', 'warning');
            $this->session->set_flashdata('pesan', 'Foto Tidak Terupload');
            $this->session->set_flashdata('title', 'Gagal!');
            redirect(base_url('home/pendaftaran'));
        }
    }
}
