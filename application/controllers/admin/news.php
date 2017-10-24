<?php
/**
 * Created by PhpStorm.
 * User: joker
 * Date: 2017/8/5
 * Time: 19:15
 */

defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH . 'controllers/admin/Admin_Controller.php';

class news extends Admin_controller {
    public function __construct(){
        parent::__construct();
    }

    public function news_add(){
        $data = $this->get_base_data();
        $data['title'] = 'News Add';
        $data['page'] = 'news_add';

        $this->assign('data', $data);
        $this->display(APPPATH . '/views/templates/layout.tpl');
    }
}