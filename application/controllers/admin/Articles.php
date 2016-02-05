<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Articles extends Controller {
    public function index(){
        //加载分页类库
        $this->load->library('pagination');
        //获取分页类配置
        $config = $this->getPaginationConfig();
        $this->pagination->initialize($config);


        $row = $this->uri->segment(4);
        $row = isset($row) ? $row : 0;

        $this->load->model('articles_model');
        $data['data'] = $this->articles_model->getArticlesDuring($row, $config['per_page']);

        $this->load->model('category_model');
        $data['all_category'] =  $this->category_model->getAllCategory();

        $data['cur_title'] = array('','active','','','');
        $this->load->view('header');
        $this->load->view('admin/menu', $data);
        $this->load->view('admin/articles_index', $data);
        $this->load->view('footer');
    }

	public  function edit($id=0){

        $data['cur_title'] = array('','active','','','');

        $this->load->model('category_model');
        $data['all_category'] =  $this->category_model->getAllCategory();
        if($id != 0){
            $this->load->model('articles_model');    
            $data['article'] = $this->articles_model->getArticle($id);     
            
        }
        $this->load->view('header');
        $this->load->view('admin/menu', $data);
        $this->load->view('admin/articles_edit', $data);
        $this->load->view('footer');
	  
	}


    private function getPaginationConfig(){
        $this->load->database();
        $this->load->helper('url');

        $config['base_url'] = site_url('admin/Articles/index');
        $config['total_rows'] = $this->db->count_all('articles');
        $config['per_page'] = '5';
        $config['num_links'] = 3 ;
        $config['last_link'] = '末页';
        $config['first_link'] = '首页';
        $config['prev_link'] = false;
        $config['next_link'] = false;
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li><li><a>...</a></li>';
        $config['last_tag_open'] = '<li><a>...</a></li><li>';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="">';
        $config['cur_tag_close'] = '</li></a>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        return $config;
    }    

}
