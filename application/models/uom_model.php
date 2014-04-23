<?php

class Uom_model extends CI_Model{
    
    public function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->helper('url');
        
    }
    
    public function get_one($id){
        try{
            $query=$this->db->query("SELECT id,uom_name,remark,is_del from cp_uom where id=$id");
            if($query->num_rows>0){
                return $query->result();  
            }
            return array();
        }catch(Exception $e){
                        show_error("Uanexpected error while loading data!");
                        
        }
    }
    
    public function getall(){
        try{
            $query=$this->db->query("SELECT id,uom_name,remark,is_del from cp_uom where is_del=False");
            if($query->num_rows>0){
                return $query->result();  
            }
            return array();
        }catch(Exception $e){
                        show_error("Uanexpected error while loading data!");
                        
        }
    }
    
    public function get_trash(){
        try{
            $query=$this->db->query("SELECT id,uom_name,remark,is_del from cp_uom where is_del=True");
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
    
    public function update_uom(){ 
                $data=array(
                    'id'=>$this->input->post('id'),
                    'uom_name'=>$this->input->post('uomname'),
                    'remark'=>$this->input->post('remark')
                        
                );
                
                
                $sql="UPDATE cp_uom SET 
                    uom_name=".$this->db->escape($data['uom_name']).",remark=".$this->db->escape($data['remark'])." 
                    WHERE id=".$this->db->escape($data['id'])."";
                
                try{
                    
                    $this->db->query($sql);
                    return 1;
                }catch(Exception $e){
                    return 0;
                }
    }
    
    public function delete_uom($id){
                    $sql="UPDATE cp_uom SET 
                    is_del=True
                    WHERE id=".$this->db->escape($id)."";
                
                try{
                    
                    $this->db->query($sql);
                    return 1;
                }catch(Exception $e){
                    return 0;
                }
    }
    
    public function recipe_uom($id){
        $sql="UPDATE cp_uom SET 
                    is_del=False
                    WHERE id=".$this->db->escape($id)."";
        
        try{
            
            $this->db->query($sql);
            return 1;
        }  catch (Exception $e){
            return 0;
        }
        
    }
}
?>
