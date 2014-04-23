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
                        $notification_setting['notify_msg']='Your Data Has been successfully added';
                        $notification_setting['notify_type']='success';
                        $this->renderwindow("uom/insert",$data,$notification_setting);

                }else{
                        $notification_setting['notify_msg']='Error occured Processing Your Request';
                        $notification_setting['notify_type']='error';
                        $this->renderwindow("uom/insert",$data,$notification_setting);
                    
                }
                
            
        }
        
    }
    
    public function viewall($notification=array()){
        $data=array();
        
        $data['windowname']='List of UOM(Unit of measurements)';
        $data['windowwidth']='12';
           $data['output']= $this->uom_model->getall();
           
         $this->rendertableview("uom/viewall",$data,$notification);
    }
    
    public function view_trash($notification=array()){
        $data=array();
        
        $data['windowname']='Deleted List';
        $data['windowwidth']='12';
           $data['output']= $this->uom_model->get_trash();
           
         $this->rendertableview("uom/view_trash",$data,$notification);
        
    }
    
    public function get_update($id){
        $data=array();
        //default values that must be included
        $data['windowname']='UOM Update';
        $data['windowwidth']='4';
        $data['formname']='uom/update';
                $this->form_validation->set_rules('uomname', 'uomname', 'required');
		$this->form_validation->set_rules('remark', 'remark', 'required');
                
           $data['output']=$this->uom_model->get_one($id);
           $this->renderwindow("uom/update",$data);
           
            
        
        
        //
        
        
        
        
    }
    
    
    public function post_update(){
        
                $notification=array();
                if($this->uom_model->update_uom()!=0){
                        $notification['notify_msg']='Your Data Has been successfully updated';
                        $notification['notify_type']='success';
                        
                        $this->viewall($notification);

                }else{
                        $data['notify_msg']='Error occured Processing Your Request';
                        $data['notify_type']='error';
                        $this->viewall($notification);
                    
                }
                
            
        
        
    
    
    }
    public function update_post()
    {
        
    }
    
        
        
    
    
    public function delete($id)
    {
        $notification=array();
        if($this->uom_model->delete_uom($id)!=0){
                        $notification['notify_msg']='Your Data Has been successfully Deleted';
                        $notification['notify_type']='success';
                        
                        $this->viewall($notification);

                }else{
                        $notification['notify_msg']='Error occured Processing Your Request';
                        $notification['notify_type']='error';
                        $this->viewall($notification);
                    
        }
    }
    public function recipe($id)
    {
        $notification=array();
        if($this->uom_model->recipe_uom($id)!=0){
                        $notification['notify_msg']='Your Data Has been successfully recovered';
                        $notification['notify_type']='success';
                        
                        $this->viewall($notification);

                }else{
                        $notification['notify_msg']='Error occured Processing Your Request';
                        $notification['notify_type']='error';
                        $this->viewall($notification);
                    
        }
    }
}
?>
