<?php

    class ModelUsers extends CI_Model{

        public function getDataByUsername($username){
            $sql = "SELECT * FROM tbl_user WHERE username = ? OR email = ?";
            return $this->db->query($sql,array($username,$username))-> row_array();
        }
        public function getRowData($username){
            return $this->db->get_where('tbl_user',array('username' => $username))->row_array();
        }
        public function insertUser($insertusers){
            return $this->db->insert('tbl_user', $insertusers);
        }
        public function getRowDataByEmail($email){
            return $this->db->get_where('tbl_user', array('email' => $email))->row_array();
        }
    }