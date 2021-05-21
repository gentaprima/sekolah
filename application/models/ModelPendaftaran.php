<?php

class ModelPendaftaran extends CI_Model
{
   public function inputDataSiswa($data_siswa)
   {
      return $this->db->insert('tbl_siswa', $data_siswa);
   }
   public function insertDataPendaftaran($data_pendaftaran)
   {
      return $this->db->insert('tbl_pendaftaran', $data_pendaftaran);
   }
   public function getDataNisById($id_user)
   {
      return $this->db->get_where('tbl_siswa', array('id_user' => $id_user))->row_array();
   }
   public function isVerficationSucces($id, $data_sukses)
   {
      return $this->db->update('tbl_pendaftaran', $data_sukses, array('id_pendaftaran' => $id));
   }
   public function getDataHasilByNis($nis){
      return $this->db->get_where('tbl_pendaftaran' , array('nis' => $nis))->row_array();
   }
}
