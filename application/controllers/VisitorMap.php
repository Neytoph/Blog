<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class VisitorMap extends CI_Controller {
    public function index(){
        $handle = fopen("http://freeapi.ipip.net/118.28.8.8");  
        $content = "";  
        while (!feof($handle)) {  
            $content .= fread($handle, 10000);  
        }  
        fclose($handle); 
        var_dump($content);
        $this->load->helper('url');
        $this->load->model('category_model');
        $data['all_category'] =  $this->category_model->getAllCategory();

        $data['cur_title'] = array('','','','','active');
        $this->load->view('header');
        $this->load->view('menu',$data);
        $this->load->view('visitormap_index');
        $this->load->view('footer');
    }


}
