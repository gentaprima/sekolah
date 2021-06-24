<?php

class ModelSiswa extends CI_Model
{
    public function getData()
    {
        $sql = "SELECT * FROM tbl_siswa,tbl_user,tbl_pendaftaran
                WHERE
                tbl_siswa.id_user = tbl_user.id_user and
                tbl_pendaftaran.nis = tbl_siswa.nis AND
                is_verify = 1
                ";
        return $this->db->query($sql)->result_array();
    }
    public function getDataVerifikasiSiswa()
    {

        $sql = "SELECT * FROM tbl_pendaftaran,tbl_siswa,tbl_user,tbl_kuota,tbl_kelas
                WHERE
                tbl_siswa.id_user = tbl_user.id_user and
                tbl_pendaftaran.nis = tbl_siswa.nis and
                tbl_pendaftaran.id_kelas = tbl_kelas.id_kelas and
                is_verify = 0 and
                tbl_kuota.id_kelas = tbl_kelas.id_kelas order by tbl_pendaftaran.id_pendaftaran DESC ";
        return $this->db->query($sql)->result_array();
    }
    public function getDataVerifikasiSiswaLolos()
    {
        $sql = "SELECT * FROM tbl_pendaftaran,tbl_siswa,tbl_user,tbl_kuota,tbl_kelas
        WHERE
        tbl_siswa.id_user = tbl_user.id_user and
        tbl_pendaftaran.nis = tbl_siswa.nis and
        tbl_pendaftaran.id_kelas = tbl_kelas.id_kelas and
        is_verify = 1 and
        tbl_kuota.id_kelas = tbl_kelas.id_kelas order by tbl_pendaftaran.id_pendaftaran DESC ";
        return $this->db->query($sql)->result_array();
    }
    public function getDataVerifikasiSiswaTidakLolos(){
        $sql = "SELECT * FROM tbl_pendaftaran,tbl_siswa,tbl_user,tbl_kuota,tbl_kelas
        WHERE
        tbl_siswa.id_user = tbl_user.id_user and
        tbl_pendaftaran.nis = tbl_siswa.nis and
        tbl_pendaftaran.id_kelas = tbl_kelas.id_kelas and
        is_verify = 2 and
        tbl_kuota.id_kelas = tbl_kelas.id_kelas order by tbl_pendaftaran.id_pendaftaran DESC ";
        return $this->db->query($sql)->result_array();
    }

    public function getDataUserById($id)
    {
        return $this->db->get_where('tbl_siswa', array('id_user' => $id))->row_array();
    }
    public function delete_siswa($id_user){
        return $this->db->delete('tbl_siswa', array('id_user'=> $id_user));
    }
}
