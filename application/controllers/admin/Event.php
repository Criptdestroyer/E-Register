<?php
     defined('BASEPATH') or exit('No direct script access allowed');
     class Event extends CI_Controller{
 
             public function __construct(){
             parent::__construct();
             
             $this->load->model("event_model");
             $this->load->library("form_validation");
         }
 
         public function index(){
             $data["events"] = $this->event_model->getAll();
             $this->load->view("admin/event/list",$data);
         }
         public function add(){
             $events = $this->event_model;
             $validation = $this->form_validation;
             $validation->set_rules($events->rules());
             if($validation->run()){
                 $events->save();
                 $this->session->set_flashdata('success', 'Berhasil disimpan');
             }
             $this->load->view("admin/event/new_form");
         }
         public function edit($id = null){
             if(!isset($id)) redirect('admin/Event'); //redirect jika tidak ada $id
 
             $events = $this->event_model;
             $validation = $this->form_validation;
             $validation->set_rules($events->rules());
 
             if($validation->run()){ //melakukan validasi
                 $events->update(); //menyimpan data
                 $this->session->set_flashdata('success','Berhasil disimpan');
             }
             $data["events"] = $events->getById($id); //mengambil data untuk ditampilkan pada form
             if(!$data["events"]) show_404();// jika tidak ada data, tampilkan error
             $this->load->view("admin/event/edit_form",$data); //menampilkan form edit
         }
         public function delete($id=null){
             if(!isset($id)) show_404();
             if($this->event_model->delete($id)){
                 redirect(site_url('admin/event'));
             }
         }
     }
?>