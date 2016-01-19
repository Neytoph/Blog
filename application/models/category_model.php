<?php
/**
 * 文章线模型类
 * 表blog
 * @author ljh
 * @since 2016-01-12
 */
class Category_model extends CI_Model {
	public function __construct(){
		parent::__construct();
	}


	public function getAllCategory(){
		$this->load->database();
		$sql="select * from category order by category_order";
		$data =$this->db->query($sql)->result_array();
		return $data;
	}


	public function getAllArticles($category_id){
		$this->load->database();
		$sql="select * from articles where category={$category_id}";
		$data = $this->db->query($sql)->result_array();
		return $data;
	}
	public function getCategory($category_id){
		$this->load->database();
		$sql="select * from category where id={$category_id}";
		$data =$this->db->query($sql)->result_array();
		return $data;
	}
}