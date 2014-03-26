<?php
class Uom extends MY_Controller{
    
    public function __construct() {
        parent::__construct();
        $this->load->helper('form');
	$this->load->library('form_validation');
        $this->load->model('uom_model');
    }
    
    public function insert(){
       
        
                $data=array();
                //default values that must be included
                $data['windowname']='UOM insert';
                $data['windowwidth']='4';
       
        //
                $data['formname']='uom/insert';        //formname has to be declared only to entry form
                $this->form_validation->set_rules('uomname', 'uomname', 'required');
		$this->form_validation->set_rules('remark', 'remark', 'required');
                 
            if($this->form_validation->run() === FALSE){
                $this->renderwindow("uom/insert",$data);
            }else{
                $data['windowname']='';
                $data['windowwidth']='12';
                if($this->uom_model->insert_uom()!=0){
                        $data['notify_msg']='Your Data Has been successfully added';
                        $data['notify_type']='success';
                        $this->renderwindow("uom/insert",$data);

                }else{
                        $data['notify_msg']='Error occured Processing Your Request';
                        $data['notify_type']='error';
                        $this->renderwindow("uom/insert",$data);
                    
                }
                
            
        }
        
    }
    
    public function viewall(){
        $data=array();
        
        $data['windowname']='List of UOM(Unit of measurements)';
        $data['windowwidth']='12';
           $data['output']= $this->uom_model->getall();
           
         $this->rendertableview("uom/viewall",$data);
    }
    
    public function update($id){
        $data=array();
        //default values that must be included
        $data['windowname']='UOM Update';
        $data['windowwidth']='4';
        $data['formname']='uom/update'; 
        $this->renderwindow("uom/update",$data);
        
    }
    
    public function update_post(){
        
        
    }
    
    public function delete(){
        
    }
}
?>
