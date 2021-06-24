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
      $sql = "SELECT * FROM tbl_siswa,tbl_pendaftaran,tbl_user,tbl_kelas,tbl_jadwal
                  WHERE
                  tbl_siswa.id_user = tbl_user.id_user AND
                  tbl_pendaftaran.nis = tbl_siswa.nis AND
                  tbl_kelas.id_kelas = tbl_kelas.id_kelas AND
                  tbl_user.id_user = tbl_jadwal.id_user AND
                  tbl_pendaftaran.nis = ? ";
      return $this->db->query($sql,$nis)->row_array();
      // return $this->db->get_where('tbl_pendaftaran' , array('nis' => $nis))->row_array();
   }

   public function getDataHasilAndJadwalByNis($nis){
      $sql = "SELECT * FROM tbl_siswa,tbl_pendaftaran,tbl_user,tbl_kelas,tbl_jadwal
      WHERE
      tbl_siswa.id_user = tbl_user.id_user AND
      tbl_pendaftaran.nis = tbl_siswa.nis AND
      tbl_kelas.id_kelas = tbl_kelas.id_kelas AND
      tbl_pendaftaran.nis = ?  GROUP BY tbl_pendaftaran.nis
      ";
      return $this->db->query($sql,$nis)->row_array();
   }

   public function updateData($data,$id){
      return $this->db->update('tbl_pendaftaran',$data,array('nis'=>$id));
   }
   public function insertCheck($inserCheck){
      return $this->db->insert('tbl_konfirmasi', $inserCheck);
   }

   public function checkData($idPendaftaran){
      return $this->db->get_where('tbl_konfirmasi',['id_pendaftaran'=>$idPendaftaran])->row_array();
   }
}
