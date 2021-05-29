<?php

class ModelJadwal extends CI_Model{
    public function getData(){
        $sql = "SELECT * FROM tbl_siswa,tbl_pendaftaran,tbl_user
        WHERE
        tbl_siswa.id_user = tbl_user.id_user AND
        tbl_pendaftaran.nis = tbl_siswa.nis AND
        is_verify = 1
        ";
        return $this->db->query($sql)->result_array();
    }
    public function addData($data)
    {
        return $this->db->insert('tbl_jadwal',$data);
    }

    public function getDataJadwal($id){
        $sql = "SELECT * FROM tbl_jadwal WHERE id_user = ? ORDER BY id_jadwal DESC";
        return $this->db->query($sql,$id)->row_array();
    }
}
