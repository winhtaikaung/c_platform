<?php
class Category_model extends CI_Model{
    
    public function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->helper('url');
    }
    
    public function insert_category_m(){
        
        $data=array(
                    'desc'=>$this->input->post('categoryname'),
                    'head_id'=>$this->input->post('parent_id'),
                    'family'=>$this->input->post('family')
                        
                );
        $sql="INSERT INTO `cp_category` (`desc`,`head_id`,`family`) VALUES (".$this->db->escape($data['desc']).",  ".$this->db->escape($data['head_id']).",  ".$this->db->escape($data['family']).")";
        
       
         try{
                    
                    $this->db->query($sql);
                    return 1;
                }catch(Exception $e){
                    return 0;
                }     
        
    }
    
    public function update_category_m(){
        $data=array(
                    'desc'=>$this->input->post('categoryname'),
                    'id'=>$this->input->post('parent_id'),
                    'family'=>$this->input->post('family')
                        
                );
         $sql="UPDATE cp_category SET desc=".$this->db->escape($data['desc']).",family=".$this->db->escape($data['family'])." WHERE id= ".$this->db->escape($data['id'])."";
        $q="UPDATE  `c_platform`.`cp_category` SET `desc`=".$this->db->escape($data['desc'])."  ,`family` = ".$this->db->escape($data['family'])." WHERE  `cp_category`.`id` =".$this->db->escape($data['id'])."";
       
         try{
                    
                    $this->db->query($q);
                    return 1;
            }catch(Exception $e){
                    return 0;
            }
        
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
    
    public function select_one_category_m($id){
        $sql="SELECT `id`, `desc`, `head_id`, `family`, `is_del` FROM `cp_category` WHERE id=".$this->db->escape($id);
        $query=$this->db->query($sql);
        if($query->num_rows>0){
            return $query->result();
        }
    }
    
}
?>
