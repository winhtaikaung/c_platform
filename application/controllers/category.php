<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
    class Category extends CI_Controller {
        
        public function __construct() {
            parent::__construct();
            $this->load->model('category_model');
            $this->load->library('Backend');
        }
        
        public function viewall(){
            
            $data=array();
        //default values that must be included
        $data['windowname']='Category View all';
        $data['windowwidth']='4';
        
                
                
           
           $this->backend->renderwindow("category/viewall",$data);
        }

        public function insertcategory(){

            
        }

        



    }


?>
