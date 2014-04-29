<?php

class Product extends MY_Controller{
    
    
    public function __construct() {
        parent::__construct();
         $this->load->helper('url');
    }
    
    public function insert(){
          $data=array();
            $data['formname']='category/insert';
            
            $data['windowname']='Insert Category';
            $data['windowwidth']='10';
            
               
            $this->renderwindow('product/insert',$data);
           
    }
    public function viewall(){
        
            
            
    }
    
    
}
?>
