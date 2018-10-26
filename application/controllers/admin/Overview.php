<?php
    defined('BASEPATH') or exit('No direct script access allowed');
    class Overview extends CI_Controller{
        public function __construct(){
            parent::__construct();
            $this->load->model("customers_model");
            $this->load->library("form_validation");
        }
        public function index(){
            //load view admin/overview.php
            $data["customers"] = $this->customers_model->getAll();
            $this->load->view("admin/overview",$data);
        }
    }
?>