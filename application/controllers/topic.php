<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Topic extends CI_Controller {
    function index(){
      $this->load->view('head');    
      $this->load->view('topic');    
      $this->load->view('footer');    
    }
    function get($id){
      $data = array('id'=>$id);
      $this->load->view('head');
      $this->load->view('main', $data);
      $this->load->view('footer');    
    }
}
?>