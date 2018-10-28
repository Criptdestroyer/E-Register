<?php
    class Admin_model extends CI_Model{
        public function login_admin($username,$pass){
 
            $this->db->select('*');
            $this->db->from('admin');
            $this->db->where("username like '$username'");
            $this->db->where('password',$pass);
            $pw = $this->db->query("select * from admin where username like '$username'")->row_array();
            if(($query=$this->db->get()) and ($pass == $pw['password']))
            {
                return $query->row_array();
            }
            else{
                return false;
            }
           
           
          }
          
    }
?>