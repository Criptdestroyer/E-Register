<?php
 class User extends CI_Controller {
 
    public function __construct(){
        parent::__construct();
  	    $this->load->helper('url');
  	    $this->load->model('user_model');
        $this->load->library('session');
    }
    public function index(){
        $this->load->view("Register.php");
    }
    public function register_user(){
        $confirmPassword = md5($this->input->post('confirmPassword'));
        $user=[
            'member_id'=>uniqid(),
            'username'=>$this->input->post('username'),
            'email'=>$this->input->post('email'),
            'password'=>md5($this->input->post('password')),
            
            // 'tgl'=>$this->input->post('tgl'),
            // 'bln'=>$this->input->post('bln'),
            // 'thn'=>$this->input->post('thn'),
            'name'=>$this->input->post('firstName')." ".$this->input->post('lastName'),
            'no_hp'=>$this->input->post('no_hp')
        ];
        print_r($user);
        $id_check=$this->user_model->_check($user['email'],$user['username']);
        if($id_check and ($user['password']==$confirmPassword)){
            $this->user_model->register_user($user);
            $this->session->set_flashdata('success_msg', 'Registered successfully.Now login to your account.');
            redirect('user/login_view');
        }else if($user['password']!=$confirmPassword){
            $this->session->set_flashdata('error_msg', 'Password and Confirm Password it\'s different');
            redirect('user');
        }else{
            $this->session->set_flashdata('error_msg', 'Username or Email Already Used');
            redirect('user');
        }
    }
    public function login_view(){
        $this->load->view("Login.php");
    }
    public function login_user(){
        $user_login=[
            'username'=>$this->input->post('username'),
            
            'password'=>md5($this->input->post('password'))
        ];
        $data = $this->user_model->login_user($user_login['username'],$user_login['password']);
        if($data){
            $this->session->set_userdata('member_id',$data['member_id']);
            $this->session->set_userdata('email',$data['email']);
            $this->session->set_userdata('name',$data['name']);
            $this->session->set_userdata('username',$data['username']);
            $this->session->set_userdata('no_hp',$data['no_hp']);
 
            $this->load->view('User_profile');
        }else{
            $this->session->set_flashdata('error_msg', 'Wrong Username or Password');
            $this->load->view("Login.php");
        }
    }
    function user_profile(){
        $this->load->view('user_profile.php');   
    }

    public function user_logout(){
        $this->session->sess_destroy();
        redirect('user/login_view', 'refresh');
      }
    public function user_forgot(){
        $this->load->view('forgot-password.php');  
    }
    public function reset_password(){
        $email= $this->input->post('email');
        $data = $this->user_model->reset_pw($email);
        if($data){
            $this->session->set_flashdata('success_msg', 'Email successfully.Now check to your email.');
            redirect('User/user_forgot');
        }else{
            $this->session->set_flashdata('error_msg', 'Wrong Email');
            $this->load->view("forgot-password.php");
        }
    }
}
?>