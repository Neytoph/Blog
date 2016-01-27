<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Index extends Controller {

	public function __construct() {
	 parent::__construct ();
	 $this->load->helper(array('form', 'url'));
	 $this->load->library('session');
    
	}

	public  function index(){
		$data['cur_title'] = array('active','','','','');
	    $this->load->view('header');
	    $this->load->view('admin/menu',$data);
	    $this->load->view('admin/index');
        $this->load->view('footer');
	}
	public  function login()
	 {
	 	$data = array(
	  		'notexist'=> '',
	  		'errorpwd'=> ''
	  		);
	  if ($this->input->post() != false){
	  	$username = trim($this->input->post('username'));
	  	$password = trim($this->input->post('password'));
	  	if( $username !== 'admin'){
	  		$data['notexist'] = '用户不存在！';
	  	}elseif( $password !== 'admin'){
	  		$data['errorpwd'] = '密码错误！';
		}else{
			$userdata= array(
	  		'username' => $username,
	  		'passowrd' => $passowrd
	  		);

	  		$this->session->set_userdata($userdata);
	  		redirect('admin/Index/index');
		}

	  }
	  $this->data['back_url'] = $this->input->get('back_url')?$this->input->get('back_url'):site_url();
	  $this->load->view('admin/index_login',$data);
	  
	}
	
	public function logout(){
		session_destroy();
		redirect(site_url('Articles/index'));
	}
}
