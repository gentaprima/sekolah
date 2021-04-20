<?php

Class ModelKelas extends CI_Model{
    public function getData(){
        return $this->db->get('tbl_kelas')->result_array();
    }
}