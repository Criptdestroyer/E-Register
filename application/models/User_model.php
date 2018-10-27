<?php
    defined('BASEPATH') or exit('No direct script access allowed');
    class User_model extends CI_Model{
        public function register_user($user){
            $this->db->insert('member', $user);
        }
        public function login_user($username,$pass){
 
            $this->db->select('*');
            $this->db->from('member');
            $this->db->where("username like '$username' or email like'$username'");
            $this->db->where('password',$pass);
            $pw = $this->db->query("select * from member where username like '$username' or email like'$username'")->row_array();
            if(($query=$this->db->get()) and ($pass == $pw['password']))
            {
                return $query->row_array();
            }
            else{
              return false;
            }
           
           
          }
          public function _check($email,$username){
            $this->db->select('*');
            $this->db->from('member');
            $this->db->where("email = '$email' or username='$username'");
            $query=$this->db->get();
           
            if($query->num_rows()>0){
              return false;
            }else{
              return true;
            }
           
          }
          public function reset_pw($email){
            $this->db->select('*');
            $this->db->from('member');
            $this->db->where("email = '$email'");
            $query=$this->db->get();
            if($query->num_rows()>0){
                return true;
              }else{
                return false;
              }
          }
    }
?>