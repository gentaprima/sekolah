<?php

class ModelJadwal extends CI_Model{
    public function getDataByStatus($status){
        $sql = "SELECT * FROM tbl_siswa,tbl_pendaftaran,tbl_user,tbl_kelas,tbl_jadwal
        WHERE
        tbl_siswa.id_user = tbl_user.id_user AND
        tbl_pendaftaran.nis = tbl_siswa.nis AND
        tbl_kelas.id_kelas = tbl_kelas.id_kelas AND
        tbl_user.id_user = tbl_jadwal.id_user AND
        is_verify = 1 AND
        status_pemberitahuan = ? GROUP BY tbl_pendaftaran.nis
        ";
        return $this->db->query($sql,$status)->result_array();
    }
    public function getDataJadwalByStatus($status){
        $sql = "SELECT * FROM tbl_pendaftaran,tbl_siswa,tbl_kelas
        WHERE
        tbl_pendaftaran.nis = tbl_siswa.nis AND
        tbl_pendaftaran.id_kelas = tbl_kelas.id_kelas AND
        is_verify = 1 AND
        status_pemberitahuan = ? GROUP BY tbl_pendaftaran.nis
        ";
        return $this->db->query($sql,$status)->result_array();
    }
    public function addData($data)
    {
        return $this->db->insert('tbl_jadwal',$data);
    }

    public function getDataJadwal($id){
        $sql = "SELECT * FROM tbl_jadwal WHERE id_user = ? ORDER BY id_jadwal DESC";
        return $this->db->query($sql,$id)->row_array();
    }

    public function getDataHasilBy2Status($status){
        $sql = "SELECT * FROM tbl_siswa,tbl_pendaftaran,tbl_user,tbl_kelas,tbl_jadwal
        WHERE
        tbl_siswa.id_user = tbl_user.id_user AND
        tbl_pendaftaran.nis = tbl_siswa.nis AND
        tbl_kelas.id_kelas = tbl_kelas.id_kelas AND
        tbl_user.id_user = tbl_jadwal.id_user AND
        is_verify = 1 AND
        status_pemberitahuan >= ? GROUP BY tbl_pendaftaran.nis
        ";
        return $this->db->query($sql,$status)->result_array();
    }
}
