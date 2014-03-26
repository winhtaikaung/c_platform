<?
class Admin extends CI_Controller{
	public function __construct(){
		
		parent::__construct();
                $this->load->helper('url');
                $this->load->model('admin_model');
		
	}
        
        public function index(){
           
            
            $this->load->view('templates/header');
            $this->load->view('admin/index');
            $this->load->view('templates/footer');
            
        }
        
        public function notification(){
            
            
            $this->load->view('templates/header');
            $this->load->view('admin/notification');
            $this->load->view('templates/footer');
        }
        /*
         * Posting Message 
         */
        public function postmessage(){
            $this->admin_model->insert_mesasge();
            
        }
        
        public function windows(){
            
            $this->load->view('templates/header');
            $this->load->view('admin/windows');
            $this->load->view('templates/footer');
            
        }
        /**
         * get count of the database
         */
        public function getcount(){
            $data['count']=$this->admin_model->get_countservice();
            
          $receive=$this->input->get('count');
          
          isset($receive)?$receive:0;
          if($receive<$data['count']){
            usleep(10000);
            
            clearstatcache();
            
            $this->load->view('Services/getdata',$data);
            
          }  
          else{
               usleep(10000);
                clearstatcache();
               $this->load->view('Services/getdata',$data);
          }
            
        }
        
        
	
}
?>