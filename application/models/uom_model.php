<?php

class Uom_model extends CI_Model{
    
    public function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->helper('url');
        
    }
    
    public function getone($id){
        
    }
    
    public function getall(){
        try{
            $query=$this->db->query("SELECT id,uom_name,remark,is_del from cp_uom");
            if($query->num_rows>0){
                return $query->result();  
            }
            return array();
        }catch(Exception $e){
                        show_error("Uanexpected error while loading data!");
                        
        }
    }
    
    public function insert_uom(){
                $data=array(
                    'uom_name'=>$this->input->post('uomname'),
                    'remark'=>$this->input->post('remark')
                        
                );
                
                try{
                    $query=$this->db->insert('cp_uom',$data);                    
                    return 1;
                    
                }catch(mysqli_sql_exception $e){
                    return 0;
                }
    }
    
    public function update($id){
                
    }
    
    public function delete($id){
        
    }
}
?>
