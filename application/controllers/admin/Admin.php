<?php
    class Admin extends CI_Controller{
        public function __construct(){
            parent::__construct();
            
            $this->load->model("admin_model");
            $this->load->library("form_validation");
        }
        public function login_view(){
            $this->load->view("admin/login.php");
        }
        public function login_admin(){
            $admin_login=[
                'username'=>$this->input->post('username'),
                'password'=>md5($this->input->post('password'))
            ];
            $data = $this->admin_model->login_admin($admin_login['username'],$admin_login['password']);
            if($data){
                $this->session->set_userdata('admin_id',$data['admin_id']);
                $this->session->set_userdata('name',$data['name']);
                $this->session->set_userdata('username',$data['username']);
                redirect('admin');
            }else{
                $this->session->set_flashdata('error_msg', 'Wrong Username or Password');
                $this->load->view("admin/login");
            }
        }
        public function admin_logout(){
            $this->session->sess_destroy();
            redirect('admin', 'refresh');
          }
    }
?>