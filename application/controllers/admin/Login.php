<?php
/**
 * Created by PhpStorm.
 * User: monstar
 * Date: 2017/7/27
 * Time: 下午1:40
 */
defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH . 'controllers/admin/Admin_Controller.php';

class Login extends Admin_controller{

    public function __construct() {
        parent::__construct();

//        $this->load->model('admin/user_model');
    }

    public function login(){
        $data = $this->get_config_url();
        $data['page'] = 'user_login';
        $data['title'] = 'User Login';

//        $this->P($data);
        $this->assign('data', $data);
        $this->display(APPPATH . 'views/templates/pages/admin/user_login.tpl');
    }

//    public function user_login(){
//        $user_name = $this->input->post('user_name');
//        $password = $this->input->post('password');
//
//        $user_info = $this->user_model->user_login($user_name, $password);
//        if(!empty($user_info)){
//            $_SESSION['user_info'] = $user_info;
//            $url = base_url() . '/admin/welcome';
//            redirect($url);
//        }else{
//            $url = base_url() . '/admin/user/login';
//            redirect($url);
//        }
//    }
}