<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Search extends CI_Controller {

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
	public function show()
	{
		$pattern = $_POST['pattern'];
		$this->load->database();
		$this->load->model('articles_model');
		$data['data'] = $this->articles_model->getAllArticles();
		var_dump($pattern);
		foreach ($data['data'] as $key => $value) {
			// echo $a = unicode_encode($pattern);
			echo iconv('UTF-8', 'UCS-2', $pattern);
			// echo htmlspecialchars($pattern, $value['content']);
			// var_dump($value['content']);
			preg_match("/{$pattern}/i", $value['content'],$matches);var_dump($matches);
		}
die;
		//当前标题（首页，分类，标签，关于我）
		$data['cur_title'] = array('','active','','');

		$this->load->view('header');
		$this->load->view('menu',$data);
		$this->load->view('category_show', $data);
		$this->load->view('footer');
	}
	public function unicode_encode($name)
{
    $name = iconv('UTF-8', 'UCS-2', $name);
    $len = strlen($name);
    $str = '';
    for ($i = 0; $i < $len - 1; $i = $i + 2)
    {
        $c = $name[$i];
        $c2 = $name[$i + 1];
        if (ord($c) > 0)
        {    // 两个字节的文字
            $str .= '\u'.base_convert(ord($c), 10, 16).base_convert(ord($c2), 10, 16);
        }
        else
        {
            $str .= $c2;
        }
    }
    return $str;
}

public function unicode_decode($name)
{
    // 转换编码，将Unicode编码转换成可以浏览的utf-8编码
    $pattern = '/([\w]+)|(\\\u([\w]{4}))/i';
    preg_match_all($pattern, $name, $matches);
    if (!empty($matches))
    {
        $name = '';
        for ($j = 0; $j < count($matches[0]); $j++)
        {
            $str = $matches[0][$j];
            if (strpos($str, '\\u') === 0)
            {
                $code = base_convert(substr($str, 2, 2), 16, 10);
                $code2 = base_convert(substr($str, 4), 16, 10);
                $c = chr($code).chr($code2);
                $c = iconv('UCS-2', 'UTF-8', $c);
                $name .= $c;
            }
            else
            {
                $name .= $str;
            }
        }
    }
    return $name;
}
}
