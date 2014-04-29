<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
    class Category extends MY_Controller {
        
        public function __construct() {
            parent::__construct();
            $this->load->helper('form');
             $this->load->library('form_validation');             
            $this->load->model('category_model');
            
        }
        
        public function viewall(){
            
            $data=array();
        //default values that must be included
        $data['windowname']='Category View all';
        $data['windowwidth']='4';
        
                
                
           
           $this->renderwindow("category/viewall",$data);
        }

        public function insert(){
            $data=array();
            $data['formname']='category/insert';
            
            $data['windowname']='Insert Category';
            $data['windowwidth']='10';
            
               
            
            $this->form_validation->set_rules('categoryname','categoryname','required');
            $this->form_validation->set_rules('family','family','required');
            $this->form_validation->set_rules('parent_id','parent_id','required');
            
            if($this->form_validation->run()===FALSE){
                
                $this->renderwindow("category/insert",$data);
            }else{
                if($this->category_model->insert_category_m()==1){
                    $notification_setting['notify_msg']='Your Data Has been successfully added';
                        $notification_setting['notify_type']='success';
                        $this->renderwindow("category/insert",$data,$notification_setting);
                    
                }else{
                        $notification_setting['notify_msg']='Error occured Processing Your Request';
                        $notification_setting['notify_type']='error';
                        $this->renderwindow("category/insert",$data,$notification_setting);
                        
                }
            }
        }
        
        public function get_update($id){
            $data=array();
            $data['formname']='category/edit';
            
            $data['windowname']='Edit Category';
            $data['windowwidth']='10';
            
            
            $data['output']= $this->category_model->select_one_category_m($id);
            
          
                   $this->renderwindow("category/update",$data); 
            
            
        }
        public function post_update($id=-1){
            
            $data=array();
            
            
            $data['windowname']='Edit Category';
            $data['windowwidth']='10';
            
            $this->form_validation->set_rules('categoryname','categoryname','required');
            $this->form_validation->set_rules('family','family','required');
            $this->form_validation->set_rules('parent_id','parent_id','required');
            $id=$this->input->post('parent_id');
            
            if($this->form_validation->run()===FALSE){
                    $data['output']= $this->category_model->select_one_category_m($id);
                    $this->get_update($id);
            }else{
                
                if($this->category_model->update_category_m()==1){
                    $data['windowname']='Category List';
                    $notification_setting['notify_msg']='Your Data Has been successfully added';
                        $notification_setting['notify_type']='success';
                        $this->renderwindow("category/viewall",$data,$notification_setting);
                }else{
                    $notification_setting['notify_msg']='Error occured Processing Your Request';
                        $notification_setting['notify_type']='error';
                        $this->renderwindow("category/update",$data,$notification_setting);
                }
                
            }
        }

        



    }


?>
