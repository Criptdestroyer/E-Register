<?php
    class Home extends CI_Controller{
        public function __construct(){
            parent::__construct();
        }
        public function index(){
            $this->load->view("home/home");
        }
        public function pesan(){
            $this->load->view('home/pesan');
        }
    }
?>