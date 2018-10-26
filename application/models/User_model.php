<?php
    defined('BASEPATH') or exit('No direct script access allowed');
    class User_model extends CI_Model{
        public function register_user($user){
            $this->db->insert('member', $user);
        }
        public function login_user($email,$pass){
 
            $this->db->select('*');
            $this->db->from('member');
            $this->db->where('email',$email);
            $this->db->where('password',$pass);
           
            if($query=$this->db->get())
            {
                return $query->row_array();
            }
            else{
              return false;
            }
           
           
          }
          public function id_check($id){
            $this->db->select('*');
            $this->db->from('member');
            $this->db->where('member_id',$id);
            $query=$this->db->get();
           
            if($query->num_rows()>0){
              return false;
            }else{
              return true;
            }
           
          }
    }
?>