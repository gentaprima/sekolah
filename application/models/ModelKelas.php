<?php

Class ModelKelas extends CI_Model{
    public function getData(){
        return $this->db->get('tbl_kelas')->result_array();
    }

    public function addData($data){
        return $this->db->insert('tbl_kelas', $data);
    }
    public function updateData($data,$id_kelas){
        return $this->db->update('tbl_kelas',$data, array('id_kelas' => $id_kelas));
    }
    public function deleteData($id_kelas){
        return $this->db->delete('tbl_kelas', array('id_kelas' => $id_kelas));
    }

    public function getDataKelas($kelas){
        return $this->db->get_where('tbl_kuota',['id_kelas' => $kelas])->row_array();
    }
}