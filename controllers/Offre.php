<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Offre extends CI_Controller {
   
    public function index($id){
       $this->load->helper('url');
        $this->load->view('header');
        $this->load->view('offre');

     
    }
    public function edit($id){
         $this->load->helper('url');
          $this->load->view('header');
          $this->load->view('forms/offre');
  
       
      }
}
?>