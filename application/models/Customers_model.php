<?php
    define('BASEPATH') or exit('No direct script acces allowed');

    class Customers_model extends CI_Model{
        private $_table = "customers";
        public $customer_id;
        public $name;
        public $payment;
        public $bukti_pembayaran;
        public $status;
        public $jumlah_ticket;
        public $no_hp;
        public $email;
        

        public function rules(){
            return [
                ['field'=>'name',
                'label'=>'Name',
                'rules'=>'required'],
                ['field'=>'payment',
                'label'=>'Payment',
                'rules'=>'numeric'],
                ['field'=>'bukti_pembayaran',
                'label'=>'Bukti Pembayaran'],
                ['field'=>'status',
                'label'=>'Status',
                'rules'=>'required'],
                ['field'=>'jumlah_ticket',
                'label'=>'Jumlah Ticket',
                'rules'=>'required'],
                ['field'=>'nohp',
                'label'=>'No Hp',
                'rules'=>'required'],
                ['field'=>'email',
                'label'=>'Email',
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
            $this->bukti_pembayaran = $post["bukti_pembayaran"];
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
            $this->db->update($this->_table,$this,array('customer_id'=>$post['id']));
        }
        public function delete($id){
            return $this->db->delete($this->_table,array("customer_id"=>$id));
        }
    }
?>