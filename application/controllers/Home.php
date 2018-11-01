<?php
    class Home extends CI_Controller{
        public function __construct(){
            parent::__construct();
            $this->load->model("event_model");
        }
        public function index(){
            $data["events"] = $this->event_model->getAll();
            $this->load->view("home/home",$data);
        }
        public function pesan(){
            $data["events"] = $this->event_model->getAll();
            $this->load->view('home/pesan',$data);
        }

        public function info(){
          $data["events"] = $this->event_model->getAll();
          $this->load->view('home/singleevent',$data);
        }

        public function checkout(){
          $this->load->view('home/Checkout');
        }
    }
?>
