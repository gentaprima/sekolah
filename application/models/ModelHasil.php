<?php

class ModelHasil extends CI_Model{
    public function getDataByStatus($status){
        $sql = "SELECT * FROM tbl_siswa,tbl_pendaftaran,tbl_user,tbl_kelas
        WHERE
        tbl_siswa.id_user = tbl_user.id_user AND
        tbl_pendaftaran.nis = tbl_siswa.nis AND
        tbl_kelas.id_kelas = tbl_kelas.id_kelas AND
        is_verify = 1 AND
        status_pemberitahuan = ? GROUP BY tbl_pendaftaran.nis
        ";
        return $this->db->query($sql,$status)->result_array();
    }
    public function addData($data)
    {
        return $this->db->insert('tbl_jadwal',$data);
    }

    public function getDataHasil($id){
        $sql = "SELECT * FROM tbl_jadwal WHERE id_user = ? ORDER BY id_jadwal DESC";
        return $this->db->query($sql,$id)->row_array();
    }

    public function insertPenilian($data){
        return $this->db->insert('tbl_penilaian',$data);
    }
    public function getDataNormalisasi(){
        $sql = "SELECT * FROM tbl_pendaftaran,tbl_penilaian,tbl_siswa
                WHERE 
                tbl_penilaian.id_pendaftaran = tbl_pendaftaran.id_pendaftaran and
                tbl_pendaftaran.nis = tbl_siswa.nis";
                return $this->db->query($sql)->result_array();
    }
}
