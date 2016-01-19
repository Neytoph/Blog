<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Tag extends CI_Controller {

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
		$this->load->helper('url');
		$this->load->model('tag_model');
		$tag_info = $this->tag_model->getTagInfo();
		foreach ($tag_info as $key => $value) {
			if($value['article_num']<=1){
				$button_size = 'btn-xs';
			}elseif($value['article_num']<=2){
				$button_size = '';
			}elseif($value['article_num']<=3){
				$button_size = 'btn-lg';
			}
			$data['data'][] =array(
				'tag_name' => $value['tag_name'],
				'tag_size' => $button_size,
				'tag_button_type' => $value['tag_button_type']
				);

		}

		$this->load->model('category_model');
		$data_tmp =  $this->category_model->getAllCategory();
		foreach ($data_tmp as $value) {
			$category_id = $value['id'];
			$data['all_category']["$category_id"]['id'] = $value['id'];
			$data['all_category']["$category_id"]['category'] = $value['category'];
			$data['all_category']["$category_id"]['category_order'] = $value['category_order'];
		}


		$this->load->view('tag_index', $data);
		$this->load->view('footer');
	}
	public function show($tag_name){
		$this->load->helper('url');
		$this->load->model('articles_model');
		$data = $this->articles_model->getArticlesTag($tag_name);
		
		$this->load->model('category_model');
		$data_tmp =  $this->category_model->getAllCategory();
		foreach ($data_tmp as $value) {
			$category_id = $value['id'];
			$data['all_category']["$category_id"]['id'] = $value['id'];
			$data['all_category']["$category_id"]['category'] = $value['category'];
			$data['all_category']["$category_id"]['category_order'] = $value['category_order'];
		}

		$this->load->view('tag_show',$data);
		$this->load->view('footer');
	}
}
