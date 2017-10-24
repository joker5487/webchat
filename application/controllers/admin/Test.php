<?php
/**
 * Created by PhpStorm.
 * User: monstar
 * Date: 2017/7/18
 * Time: 下午2:09
 */
defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH . 'controllers/admin/Admin_Controller.php';

class Test extends Admin_Controller{
    public function __construct(){
        parent::__construct();

        $this->config->load('aside', TRUE);
        $this->config->load('url', TRUE);
    }

    public function index(){
        $data = array();

        $aside = $this->get_config('aside', 'aside');

        $data = $this->get_config_url();
        $data['page'] = 'test';
        $data['title'] = 'Test';
        $data['aside'] = $aside;

        $this->assign('data', $data);
        $this->display(APPPATH . '/views/templates/layout.tpl');
    }
}