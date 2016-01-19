<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Category extends CI_Controller {

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
	public function show($id)
	{
		$this->load->helper('url');
		$this->load->model('category_model');
		$data['data'] = $this->category_model->getAllArticles($id);
		$data['category'] = $this->category_model->getCategory($id);
		$data_tmp =  $this->category_model->getAllCategory();
		foreach ($data_tmp as $value) {
			$category_id = $value['id'];
			$data['all_category']["$category_id"]['id'] = $value['id'];
			$data['all_category']["$category_id"]['category'] = $value['category'];
			$data['all_category']["$category_id"]['category_order'] = $value['category_order'];
		}

		$this->load->view('header');
		$this->load->view('category_show', $data);
		$this->load->view('footer');
	}
	
}
