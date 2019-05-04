 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Offres extends CI_Controller {
   
    public function index(){
       $this->load->helper('url');
       $this->load->model("Model_Offres");
        $data['offres'] = $this->Model_Offres->getOffres();   
        $this->load->view('header');
        $this->load->view('offres',$data);

     
    }
    public function edit($id){
        $data['typeEdition']='edit';
        $this->load->model("Model_Offres");
        $data['offre'] = $this->Model_Offres->getOffreById($id);  
        $this->load->helper('url');
        $this->load->view('header');
        $this->load->view('forms/offre',$data);

       
      }
      public function view($id){
        
        $this->load->model("Model_Offres");
        $data['offre'] = $this->Model_Offres->getOffreById($id);  
        $this->load->helper('url');
        $this->load->view('header');
        $this->load->view('offre',$data);

       
      }
    public function create(){

        $this->load->helper('url');
        $this->load->model("Model_Offres");
        $this->load->model("Model_Services");
        $this->load->model("Model_Users");
        $data['services'] = $this->Model_Services->getServices();   
        $data['typeEdition']='new';
        $this->load->view('header');
        $this->Model_Users->me()
;        $this->load->view('forms/offre',$data);

       }
      
}
?>