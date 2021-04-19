<?php

Class ModelKuota extends CI_Model{
    public function getDataKelas(){
        return $this->db->get('tbl_kelas')->result_array();
    }
    public function addData($data){
        return $this->db->insert('tbl_kuota', $data);
    }
    public function getDataKuota(){
       $sql ="SELECT * from tbl_kuota,tbl_kelas
              WHERE
              tbl_kuota.id_kelas = tbl_kelas.id_kelas 
              ";
              return $this->db->query($sql)->result_array();
    }
    public function updateData($data,$id_kuota){
        return $this->db->update('tbl_kuota', $data, array('id_kuota' => $id_kuota));
    }
    public function deleteData($id_kuota){
        return $this->db->delete('tbl_kuota', array('id_kuota' => $id_kuota));
    }
}