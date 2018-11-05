<?php
    defined('BASEPATH') or exit('No direct script access allowed');
    class Customers extends CI_Controller{
        public function __construct(){
            parent::__construct();
            $this->load->model("customers_model");
            $this->load->library("form_validation");
        }
    
    public function add(){
        $customer = $this->customers_model;
            $validation = $this->form_validation;
            $validation->set_rules($customer->rules());
            if($validation->run()){
                $customer->save();
                $this->session->set_flashdata('success', 'Berhasil disimpan');
            }
            redirect("Home/index");
    }

    }
?>