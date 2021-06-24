<?php

Class ModelKriteria extends CI_Model{
    public function addKriteria($data){
        return $this->db->insert('tbl_kriteria', $data);
    }
    public function getDataKriteria(){
        return $this->db->get('tbl_kriteria')->result_array();
    }
}