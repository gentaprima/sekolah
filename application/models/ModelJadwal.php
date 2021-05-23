<?php

    class ModelJadwal extends CI_Model{

        public function addJadwal($data){
            return $this->db->insert('tbl_jadwal',$data);
        }
    }