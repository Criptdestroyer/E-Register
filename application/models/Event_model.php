<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    class Event_model extends CI_Model{
        private $_table = "events";
        public $event_id;
        public $title;
        public $description;
        public $photo = "default.jpeg";
        public $updated_at;
        public $details;
        
        

        public function rules(){
            return [
                ['field'=>'title',
                'label'=>'title',
                'rules'=>'required'],
                ['field'=>'description',
                'label'=>'description',
                'rules'=>'required'],
                ['field'=>'details',
                'label'=>'details',
                'rules'=>'required'],
            ];
        }

        public function getAll(){
            return $this->db->get($this->_table)->result();
            
        }
        public function getById($id){
            return $this->db->get_where($this->_table,["event_id"=>$id])->row();
            
        }
        public function save(){
            $post = $this->input->post(); //ambil data dari form
            
            $this->title = $post["title"]; //isi field name
            $this->description = $post["description"];
            $this->details = $post["details"];
            $this->updated_at = $post["thn"]."-".$post["bln"]."-".$post["tgl"];
            $this->photo = $this->_uploadImage();
            $this->db->insert($this->_table,$this); //simpan ke databases
        }

        public function update(){
            $post = $this->input->post();
            $this->event_id = $post["event_id"];
            $this->title = $post["title"]; //isi field name
            $this->description = $post["description"];
            $this->details = $post["details"];
            $this->updated_at = $post["thn"]."-".$post["bln"]."-".$post["tgl"];
            if(!empty($_FILES["photo"]["name"])){
                $this->photo = $this->_uploadImage();
            }else{
                $this->photo = $post["photo"];
            }
            $this->db->update($this->_table,$this,array('event_id'=>$post['event_id']));
        }
        public function delete($id){
            $this->_deleteImage($id);
            return $this->db->delete($this->_table,array("event_id"=>$id));
        }
        private function _uploadImage(){
            $config['upload_path'] = './upload/event/';
            $config['allowed_types'] = 'jpg|png|jpeg';
            $config['file_name'] = $this->event_id;
            $config['overwrite'] = true;
            $config['max_size'] = 1024;//1mb
            // $config['max_width'] = 1024;
            // $config['max_height'] = 1024;

            $this->load->library('upload',$config);
            if($this->upload->do_upload('photo')){
                return $this->upload->data("file_name");
            }
            return "default.jpeg";
        }
        private function _deleteImage($id){
            $events = $this->getById($id);
            if($events->photo != "default.jpeg"){
                $filename = explode(".",$events->photo)[0];
                return array_map('unlink',glob(FCPATH."upload/event/$filename.*"));
            }
        }
    }
?>