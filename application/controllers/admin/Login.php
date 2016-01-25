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
	  $this->load->helper('form');
	  $this->load->library('form_validation');

	  $this->form_validation->set_rules('username', 'Username', 'trim|callback_username_check');
	  $this->form_validation->set_rules('password', 'Password', 'md5|callback_password_check');
	  $this->form_validation->set_error_delimiters('<span id="helpBlock" class="help-block">', '</span>');
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
          $this->load->view('admin/success');
          
	    $newdata = array(
	      'username'  =>  $data ['user'] ,
	      'userip'     => $_SERVER['REMOTE_ADDR'],
	      'luptime'   =>time()
	    );
	  }
	 }
	}
	
 public function username_check($str)
    {
        if ($str == '')
        {
            $this->form_validation->set_message('username_check', '用户名不能为空');
            return FALSE;
        }
        elseif($str != 'admin'){
            $this->form_validation->set_message('username_check', '用户不存在');
            return FALSE;
        }
        else
        {   
            return TRUE;
        }
    }

public function password_check($str)
    {
        if ($str == '')
        {
            $this->form_validation->set_message('password_check', '请输入密码');
            return FALSE;
        }
        elseif($str != md5('admin')){
            $this->form_validation->set_message('password_check', '密码错误');
            return FALSE;
        }
        else
        {   
            return TRUE;
        }
    }
}
