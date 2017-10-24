<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class Admin_controller extends MY_Controller {
	
	function __construct () {
		parent::__construct();

        $this->config->load('aside', TRUE);
        $this->config->load('url', TRUE);
	}

    public function P($data){
        echo "<pre>";
        var_dump($data);
        echo "</pre>";

        exit;
    }

    public function ajaxReturn($status = 0, $data = array(), $msg = ''){
        $jsonData = array(
            'status' => $status,
            'data' => $data,
            'msg' => $msg
        );

        echo json_encode($jsonData);
        exit;
    }

    public function check_login(){
        if(isset($_SESSION['user_info']) && !empty($_SESSION['user_info'])){
            $url = base_url() . '/admin/welcome';
            redirect($url);
        }else{
            $url = base_url() . '/user/login';
            redirect($url);
        }
    }

    public function get_config($param, $config_name = ''){
    	if($config_name == ''){
    		return $this->config->item($param);
    	}else{
    		return $this->config->item($param, $config_name);
    	}
    }

    public function get_config_url(){
        $config_url = array();

        $config_url['base_url'] = base_url();

        $config_url['public_js_url'] = $this->get_config('public_js_url', 'url');
        $config_url['admin_js_url'] = $this->get_config('admin_js_url', 'url');

        $config_url['public_css_url'] = $this->get_config('public_css_url', 'url');
        $config_url['admin_css_url'] = $this->get_config('admin_css_url', 'url');

        $config_url['public_img_url'] = $this->get_config('public_img_url', 'url');

        return $config_url;
    }

    public function get_base_data(){
        $data = array();
        $aside = $this->get_config('aside', 'aside');
        $data = $this->get_config_url();
        $data['aside'] = $aside;

        return $data;
    }

    public function get_pages($base_url, $total_rows, $per_page, $uri_segment = null){
        $this->load->library('pagination');

        $config['base_url'] = $base_url;
        $config['total_rows'] = $total_rows;
        $config['per_page'] = $per_page;
        if($uri_segment){
            $config['uri_segment'] = $uri_segment;
        }

        $this->pagination->initialize($config);
        $pages = $this->pagination->create_links();

        return $pages;
    }
}