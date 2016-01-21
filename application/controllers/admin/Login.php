<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends CI_Controller {

	 public function __construct() {
	  parent::__construct ();
	  $this->load->helper(array('form', 'url'));
	  $this->load->library('session');
	 }
	public  function index()
	 {
	  
	  $this->load->library('form_validation');
	   
	  $this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
	  $this->form_validation->set_rules('password', 'Password', 'trim|required|matches[passconf]|md5');
	   
	  if ($this->form_validation->run() == FALSE)
	  {
	   $this->load->view('admin/login');
	  }
	  else
	  {
	  	if (isset ( $_POST ['submit'] ) && ! empty ( $_POST ['submit'] )) {
	    $data = array (
	      'user' => $_POST ['username'],
	      'pass' => md5($_POST ['password'])
	    );
	    $newdata = array(
	      'username'  =>  $data ['user'] ,
	      'userip'     => $_SERVER['REMOTE_ADDR'],
	      'luptime'   =>time()
	    );

      
	   $this->load->view('admin/success');
	  }
	 }
	}
	public function formsubmit() {
  $this->load->library ( 'form_validation' );
  $this->form_validation->set_rules ( 'username', 'Username', 'required' );
  $this->form_validation->set_rules ( 'password', 'Password', 'required' );
  if ($this->form_validation->run () == FALSE) {
   $this->load->view ( 'login' );
  } else {
   if (isset ( $_POST ['submit'] ) && ! empty ( $_POST ['submit'] )) {
    $data = array (
      'user' => $_POST ['username'],
      'pass' => md5($_POST ['password'])
    );
    $newdata = array(
      'username'  =>  $data ['user'] ,
      'userip'     => $_SERVER['REMOTE_ADDR'],
      'luptime'   =>time()
    );
    if ($_POST ['submit'] == 'login') {
     $query = $this->db->get_where ( 'uc_user', array (
       'user' => $data ['user'] 
     ), 1, 0 );
     foreach ( $query->result () as $row ) {
      $pass = $row->pass;
     }
     if ($pass == $data ['pass']) {
      $this->session->set_userdata($newdata);
      $this->load->view ( 'usercenter', $data );
     }
    } else if ($_POST ['submit'] == 'register') {
     $this->session->set_userdata($newdata);
     $this->db->insert ( 'uc_user', $data );
     $this->load->view ( 'usercenter', $data );
    } else {
     $this->session->sess_destroy();
     $this->load->view ( 'login' );
    }
   }
  }
 }

}
