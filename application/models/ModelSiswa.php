<?php

Class ModelSiswa extends CI_Model{
    public function getData(){
        $sql = "SELECT * FROM tbl_siswa,tbl_user,tbl_pendaftaran
                WHERE
                tbl_siswa.id_user = tbl_user.id_user and
                tbl_pendaftaran.nis = tbl_siswa.nis
                ";
                return $this->db->query($sql)->result_array();
    }
}