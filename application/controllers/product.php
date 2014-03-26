<?php

class Product extends MY_Controller{
    
    
    public function __construct() {
        parent::__construct();
         $this->load->helper('url');
    }
    
    public function insert(){
           $this->renderadmin('product/insert');
           
    }
    public function viewall(){
        $data=array();
        $data['cool']="Testing";
        $data['windowname']="Product viewall";
        $this->renderwindow('product/viewall',$data);
    }
    
    
}
?>
