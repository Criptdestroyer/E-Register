<?php defined('BASEPATH') OR exit('No direct script access allowed');

    class Customers_model extends CI_Model{
        private $_table = "customers";
        public $customer_id;
        public $name;
        public $payment;
        public $bukti_pembayaran = "default.jpeg";
        public $status;
        public $jumlah_ticket;
        public $no_hp;
        public $email;
        

        public function rules(){
            return [
                
                ['field'=>'name',
                'label'=>'name',
                'rules'=>'required'],
                ['field'=>'payment',
                'label'=>'payment',
                'rules'=>'numeric'],
                ['field'=>'status',
                'label'=>'status',
                'rules'=>'required'],
                ['field'=>'jumlah_ticket',
                'label'=>'jumlah_ticket',
                'rules'=>'numeric'],
                ['field'=>'no_hp',
                'label'=>'no_hp',
                'rules'=>'required'],
                ['field'=>'email',
                'label'=>'email',
                'rules'=>'required']
            ];
        }
        public function getAll(){
            return $this->db->get($this->_table)->result();
            //sama aja kek select * from customers
        }
        public function getById($id){
            return $this->db->get_where($this->_table,["customer_id"=>$id])->row();
            //select * from customers where customer_id = $id
        }
        public function save(){
            $post = $this->input->post(); //ambil data dari form
            $this->customer_id = uniqid();//membuat id unik
            $this->name = $post["name"]; //isi field name
            $this->payment = $post["payment"];
            $this->email = $post["email"];
            $this->no_hp = $post["no_hp"];
            $this->status = $post["status"];
            $this->jumlah_ticket = $post["jumlah_ticket"];
            $this->bukti_pembayaran = $this->_uploadImage();
            // $this->bukti_pembayaran = $post["bukti_pembayaran"];
            $this->db->insert($this->_table,$this); //simpan ke databases
        }

        public function update(){
            $post = $this->input->post();
            $this->customer_id = $post["id"];
            $this->name = $post["name"];
            $this->payment = $post["payment"];
            $this->email = $post["email"];
            $this->no_hp = $post["no_hp"];
            $this->status = $post["status"];
            $this->jumlah_ticket = $post["jumlah_ticket"];
            if(!empty($_FILES["bukti_pembayaran"]["name"])){
                $this->bukti_pembayaran = $this->_uploadImage();
            }else{
                $this->bukti_pembayaran = $post["bukti_pembayaran"];
            }
            $this->db->update($this->_table,$this,array('customer_id'=>$post['id']));
        }
        public function delete($id){
            $this->_deleteImage($id);
            return $this->db->delete($this->_table,array("customer_id"=>$id));
        }
        private function _uploadImage(){
            $config['upload_path'] = './upload/customer/';
            $config['allowed_types'] = 'jpg|png|jpeg';
            $config['file_name'] = $this->customer_id;
            $config['overwrite'] = true;
            $config['max_size'] = 1024;//1mb
            // $config['max_width'] = 1024;
            // $config['max_height'] = 1024;

            $this->load->library('upload',$config);
            if($this->upload->do_upload('bukti_pembayaran')){
                return $this->upload->data("file_name");
            }
            return "default.jpeg";
        }
        private function _deleteImage($id){
            $customer = $this->getById($id);
            if($customer->bukti_pembayaran != "default.jpeg"){
                $filename = explode(".",$customer->bukti_pembayaran)[0];
                return array_map('unlink',glob(FCPATH."upload/customer/$filename.*"));
            }
        }
    }
?>