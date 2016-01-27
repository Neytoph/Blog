<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Index extends Controller {

	 public function __construct() {
	  parent::__construct ();
	  $this->load->helper(array('form', 'url'));
	  $this->load->library('session');
    
	 }
     public function index(){
        $data['cur_title'] = array('active','','','','');
        $this->load->view('header');
        $this->load->view('admin/menu',$data);
        $this->load->view('admin/index');
        $this->load->view('footer');
     }
	 public  function login()
	 {
	  $this->load->helper('form');
	  $this->load->library('form_validation');

	  $this->form_validation->set_rules('username', 'Username', 'trim|callback_username_check');
	  $this->form_validation->set_rules('password', 'Password', 'md5|callback_password_check');
	  $this->form_validation->set_error_delimiters('<p class="text-danger">', '</p>');
	  if ($this->form_validation->run() == FALSE)
	  {
	   $this->load->view('admin/index_login');
	  }
	  else
	  {
        if ($this->input->post() != false){
        $username = trim($this->input->post('username'));
        $password = trim($this->input->post('password'));
        }
	  	//当前标题（首页，文章，分类，标签，功能）
		$userdata= array(
            'username' => $username,
            'passowrd' => $passowrd
            );

        $this->session->set_userdata($userdata);
        redirect('admin/Index/index');
	  
	 }

	}


	public function logout(){
        session_destroy();
        redirect(site_url('Articles/index'));
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
            $this->form_validation->set_message('password_check', '密码不能为空');
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
