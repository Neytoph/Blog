<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class About extends Controller {
    public function index(){
        $data['cur_title'] = array('','','','active');
        $this->load->view('header');
        $this->load->view('menu',$data);
        $this->load->view('admin/index');
        $this->load->view('footer');
    }
}
