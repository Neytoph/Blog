<?php
/**
 * 文章线模型类
 * 表blog
 * @author ljh
 * @since 2016-01-12
 */
class Articles_model extends CI_Model {
	public function __construct(){
		parent::__construct();
	}

	public function getAllArticles(){
		$this->load->database();
		$sql="select * from articles";
		$query=$this->db->query($sql);
		foreach($query->result_array() as $row){
			$data[]=$row;
		}
		return $data;
	}
	public function getArticle($id){
		$this->load->database();
		$sql="select * from articles where id={$id}";
		$data =$this->db->query($sql)->result_array();
		return $data;
	}
	public function getArticlesDuring($offset,$row){
		$this->load->database();
		$sql="select * from articles order by id DESC limit {$offset},{$row}";
		$data = $this->db->query($sql)->result_array();
		return $data;
	}
	public function getArticlesTag($tag_name){
		$this->load->database();
		$sql="select c.id, c.title, a.tag_name from tag as a join article_tag as b on b.tag_id=a.id join articles as c on c.id=b.article_id where a.tag_name='{$tag_name}'";
		$data['data'] = $this->db->query($sql)->result_array();
		return $data;
	}
	public function getTagsType(){
		$this->load->database();
		$sql="select * from tag";
		$data['button_type'] = $this->db->query($sql)->result_array();
		return $data;
	}
}