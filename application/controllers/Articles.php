<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Articles extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		//加载分页类库
		$this->load->library('pagination');
		//获取分页类配置
		$config = $this->getPaginationConfig();
		$this->pagination->initialize($config);


		$row = $this->uri->segment(3);
		$row = isset($row) ? $row : 0;

		$this->load->model('articles_model');
		$data['data'] = $this->articles_model->getArticlesDuring($row, $config['per_page']);

		$this->load->model('category_model');
		$data['all_category'] =  $this->category_model->getAllCategory();

		$data['cur_title'] = array('active','','','');

		$this->load->view('header');
		$this->load->view('menu', $data);
		$this->load->view('articles_index', $data);
		$this->load->view('footer');
	}
	public function article($id)
	{	
		$this->load->helper('url');
		$this->load->model('articles_model');
		$data_tmp['articles'] = $this->articles_model->getArticle($id);
		foreach ($data_tmp as $key => $value) {
			foreach ($value as $value1) {
				$data['article']['0']['id'] = $value1['id'];
				$data['article']['0']['title'] = $value1['title'];
				$data['article']['0']['content'] = $value1['content'];
				$data['article']['0']['category'] = $value1['category'];
				if ($value1['tag'] != ''){
					$data['article']['0']['tag'] = explode(',', $value1['tag']);
				}
				
				$data['article']['0']['published_at'] = $value1['published_at'];
			}
		}

		$tag_info = $this->articles_model->getTagsType();
		foreach ($tag_info['button_type'] as $value) {
			$tag_name = $value['tag_name'];
			$button_type["$tag_name"] = $value['tag_button_type'];
		}
		$data['button_type'] = $button_type;

		$this->load->model('category_model');
		$data['all_category'] =  $this->category_model->getAllCategory();
		//当前标题（首页，分类，标签，关于我）
		$data['cur_title'] = array('active','','','');
		$this->load->view('header');
		$this->load->view('menu',$data);
		$this->load->view('articles_article', $data);
		$this->load->view('footer');

	}



	private function getPaginationConfig(){
		$this->load->database();
		$this->load->helper('url');

		$config['base_url'] = site_url('Articles/index');
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
