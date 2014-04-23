<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class MY_Catcontroller extends CI_Controller{
   
    public function __construct() {
        parent::__construct();
        $this->load->helper('url'); 
        
    }
    /*
     * renderadmin Means render admin template
     */
    public function renderadmin($contentviewname,$viewdata=array()){
        
        $header='templates/header';
        $footer='templates/footer';
        $this->load->view($header);
        if(count($viewdata)>0){
             $this->load->view($contentviewname,$viewdata); 
        }
        else{
            $this->load->view($contentviewname);
        
        }
       
        $this->load->view($footer);
    }
    /*
     * render view containing Windows
     */
    public function renderwindow($contentviewname,$viewdata=array(),$notification_setting=array()){
        //Partial Views
        $header='templates/header';
        $windowheader='templates/windowheader';
        $windowfooter='templates/windowfooter';
        $footer='templates/footer';
        $notification_path='templates/partial_view/success'; 
        
        
        //partial Views
        
        $this->load->view($header,$viewdata);
        
        if(count($viewdata)>0){
            // render simple window template
            $this->load->view($windowheader,$viewdata);
                
                    $this->load->view($contentviewname,$viewdata); 
            
            $this->load->view($windowfooter,$viewdata);
            //makes notification
            $this->load->view($notification_path,$notification_setting);
        }
        else{
            $this->load->view($contentviewname);
        
        }
         $this->load->view($footer);
    }
    /*
     * render view containing tables
     */
    public function rendertableview($contentviewname,$viewdata=array(),$notification_settings=array()){
        $header='templates/header';
        $windowheader='templates/windowheader';
        $windowfooter='templates/windowfooter';
        $tableheader='templates/tableheader';
        $tablefooter='templates/tablefooter';
        $footer='templates/footer';
        $notification_path='templates/partial_view/success';
        $this->load->view($header,$viewdata);
        
        if(count($viewdata)>0){
            // render simple window template
            $this->load->view($windowheader,$viewdata);
            
            $this->load->view($tableheader,$viewdata);
            
                    $this->load->view($contentviewname,$viewdata); 
            
            $this->load->view($tablefooter,$viewdata);        
            $this->load->view($windowfooter,$viewdata);
             //makes notification
            $this->load->view($notification_path,$notification_settings);
           
        }
        else{
            $this->load->view($contentviewname);
        
        }
         $this->load->view($footer);
        
    }
    
    /*
     * 
     */
    public function renderclient($contentviewname,$viewdata=array()){
        
        $header='templates/header';
        $footer='templates/footer';
        $this->load->view($header);
        if(count($viewdata)>0){
            
            $this->load->view($contentviewname,$viewdata);
            
        }else{
            
            $this->load->view($conteneviewname);
        }
        
        $this->load->view($footer);
        
    }
}
?>
