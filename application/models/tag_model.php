<?php
/**
 * 文章线模型类
 * 表blog
 * @author ljh
 * @since 2016-01-12
 */
class Tag_model extends CI_Model {
	public function __construct(){
		parent::__construct();
	}

	public function getAllTags(){
		$this->load->database();
		$sql="select * from tag";
		$data['data']=$this->db->query($sql)->result_array();
		return $data;
	}
	public function getTagInfo(){
		$this->load->database();
		$sql="select b.tag_name, a.tag_id, count(a.article_id) as article_num, b.tag_button_type from article_tag as a join tag as b where a.tag_id = b.id group by b.tag_name";
		$data=$this->db->query($sql)->result_array();
		return $data;
	}
	public function getArticlesDuring($offset,$row){
		$this->load->database();
		$sql="select * from articles limit {$offset},{$row}";
		$data['data'] = $this->db->query($sql)->result_array();
		return $data;
	}
}