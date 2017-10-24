<?php

/**
 * Created by PhpStorm.
 * User: monstar
 * Date: 2017/7/18
 * Time: 下午2:06
 */
class MY_Controller extends CI_Controller {
    public function __construct() {
        parent::__construct();
    }

    public function assign($key, $val)
    {
        $this->ci_smarty->assign($key,$val);
    }

    public function display($html)
    {
        $this->ci_smarty->display($html);
    }
}