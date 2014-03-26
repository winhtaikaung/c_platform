<?php

 class Admin_model extends CI_Model{
     
     public function __construct() {
         $this->load->database();
     }
     
     public function get_countservice(){
         
         $query=$this->db->query('SELECT COUNT( * ) AS count FROM message');
         return $query->result();
     }
     
     public function insert_mesasge(){
         
         $this->load->helper('url');
                
                $data=array(
                        'message'=>$this->input->post('message'),
                        'remark'=>$this->input->post('remark')
                    
                );
                return $this->db->insert('message',$data);
     }
     
     
 }
?>
