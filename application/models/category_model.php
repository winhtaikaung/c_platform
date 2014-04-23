<?php
class Category_model extends CI_Model{
    
    public function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->helper('url');
    }
    
    public function insert_category_m(){
        
        
        
    }
    
    public function update_category_m(){
        
        
    }
    
    public function delete_category_m(){
        
    }

    public function selectall_category_m($parent,$level=1){
            $sql='SELECT * FROM cp_category where head_id='.$parent;
            $query=$this->db->query($sql);
            if($query->num_rows>0)
            {
                return $query->result();  
            }
            return array();
        

    }
    
}
?>
