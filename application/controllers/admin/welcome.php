<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Welcome extends CI_Controller {

   public function __construct() {
    parent::__construct ();
    
   }
  public  function index()
   {
    $this->load->helper('form');
    $this->load->library('form_validation');

    $this->form_validation->set_rules('username', 'Username', 'trim|callback_username_check');
    $this->form_validation->set_rules('password', 'Password', 'md5|callback_password_check');
    $this->form_validation->set_error_delimiters('<p class="text-danger">', '</p>');
    if ($this->form_validation->run() == FALSE)
    {
     $this->load->view('admin/login');
    }
    else
    {
      //当前标题（首页，文章，分类，标签，功能）
    $data['cur_title'] = array('active','','','','');
      $this->load->view('header');
      $this->load->view('admin/menu',$data);
      $this->load->view('admin/index');
        $this->load->view('footer');
    
   }
  }
}
