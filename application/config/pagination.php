<?php
/**
 * Created by PhpStorm.
 * User: monstar
 * Date: 2017/7/25
 * Time: 上午10:20
 */

$config['use_page_numbers'] = TRUE;
$config['page_query_string'] = FALSE;

$config['uri_segment'] = 4;
$config['per_page'] = 20;

//pagination section
$config['full_tag_open'] = '<ul class="pagination pagination-sm no-margin pull-right">';
$config['full_tag_close'] = '</ul>';

//first tag
$config['first_tag_open'] = '<li>';
$config['first_tag_close'] = '</li>';

//last tag
$config['last_tag_open'] = '<li>';
$config['last_tag_close'] = '</li>';

//next
$config['next_tag_open'] = '<li>';
$config['next_tag_close'] = '</li>';

//prev
$config['prev_tag_open'] = '<li>';
$config['prev_tag_close'] = '</li>';

//current tag
$config['cur_tag_open'] = '<li class="current-page-num"><a href="javascript:;">';
$config['cur_tag_close'] = '</a></li>';

//number
$config['num_tag_open'] = '<li>';
$config['num_tag_close'] = '</li>';