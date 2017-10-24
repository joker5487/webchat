<?php
/**
 * Created by PhpStorm.
 * User: monstar
 * Date: 2017/7/24
 * Time: 上午9:47
 */


class MY_Model extends CI_Model {
    public function __construct($database = ''){
        parent::__construct();
        $this->load->database($database);
    }
}