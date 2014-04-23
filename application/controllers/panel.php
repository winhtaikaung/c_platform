<?php

 class Panel extends MY_Controller{
     
     public function __construct() {
         parent::__construct();
     }
     
     public function index(){
         $data=array();
         $data['windowname']='Main Panel';
         $this->load->view('templates/header');
         $this->load->view('panel/index');
         $this->load->view('templates/footer');
     }
     
 }
?>
