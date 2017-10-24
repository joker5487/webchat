<?php
/**
 * Created by PhpStorm.
 * User: monstar
 * Date: 2017/7/24
 * Time: 上午10:08
 */
defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH . 'controllers/admin/Admin_Controller.php';

class User extends Admin_controller{
    public function __construct() {
        parent::__construct();

        $this->load->model('admin/user_model');
    }

    public function user_list($current_page = 1){
        $data = $this->get_base_data();
        $data['page'] = 'user_list';
        $data['title'] = 'User List';

        $per_page = 20;
        $offset = ($current_page - 1) * $per_page;
        $user_list = $this->user_model->get_user_list($per_page, $offset);
        $user_count = $this->user_model->get_user_count();

        $page_url = base_url() . '/admin/user/list/';
        $pages = $this->get_pages($page_url, $user_count, $per_page);

        $this->assign('data', $data);
        $this->assign('user_list', $user_list);
        $this->assign('pages', $pages);
        $this->display(APPPATH . '/views/templates/layout.tpl');
    }

    public function user_add(){
        $data = array();
    }
}