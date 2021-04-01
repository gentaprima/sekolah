<?php

    class ModelUsers extends CI_Model{

        public function getDataByUsername($username){
            $sql = "SELECT * FROM tbl_user WHERE username = ? OR email = ?";
            return $this->db->query($sql,array($username,$username))-> row_array();
        }
    }