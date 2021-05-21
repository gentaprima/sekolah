<?php

class ModelJadwal extends CI_Model{
    public function getData(){
        $sql = "SELECT * FROM tbl_siswa,tbl_pendaftaran
        WHERE
        tbl_pendaftaran.nis = tbl_siswa.nis AND
        is_verify = 1
        ";
        return $this->db->query($sql)->result_array();
    }
    public function addData($data)
    {
        return $this->db->insert('tbl_jadwal', $data);
    }
}