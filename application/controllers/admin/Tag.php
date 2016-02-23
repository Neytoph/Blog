<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Tag extends Controller {
    
    public function index(){
        //加载分页类库
        $this->load->library('pagination');
        //获取分页类配置
        $config = $this->getPaginationConfig();
        $this->pagination->initialize($config);


        $row = $this->uri->segment(4);
        $row = isset($row) ? $row : 0;

        $this->load->model('tag_model');
        $data['data'] = $this->tag_model->getTagDuring($row, $config['per_page']);
        $data['cur_title'] = array('','','','active','');
        $this->load->view('header');
        $this->load->view('admin/menu', $data);
        $this->load->view('admin/tag_index', $data);
        $this->load->view('footer');
    }

    public  function add(){
        $this->load->database();
        $color_array=array("primary", "success", "info", "warning", "danger");
        if ($_POST['tag_name']!='') {
            $data['data'] = array(
                'tag_name' => $_POST['tag_name'],
                'tag_button_type' => $color_array[array_rand($color_array)]         
            );
            $this->db->insert('tag', $data['data']);
        }
        redirect('/admin/tag/index');
      
    }

    public  function delete($id){
        $this->load->database();

        $this->db->where('id', $id);
        $this->db->delete('tag');

        redirect('/admin/tag/index');

    }
    private function getPaginationConfig(){
        $this->load->database();
        $this->load->helper('url');

        $config['base_url'] = site_url('admin/Tag/index');
        $config['total_rows'] = $this->db->count_all('tag');
        $config['per_page'] = '10';
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
