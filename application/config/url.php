<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$config['base_url'] = 'http://localhost/ci';


/*
|--------------------------------------------------------------------------
| Custom configuration information
|--------------------------------------------------------------------------
|
| Here is the developer's custom configuration information
| Developers can freely define the configuration variables needed for project development here
|
*/
// public url
$config['public_url'] = $config['base_url'] . '/public';

// public js url
$config['public_js_url'] = $config['public_url'] . '/javascript';

// some url for admin model
$config['admin_js_url'] = $config['public_url'] . '/javascript/admin';

// some url for home model
$config['home_js_url'] = $config['public_url'] . '/javascript/home';


// public css url
$config['public_css_url'] = $config['public_url'] . '/stylesheet';

// some url for admin model
$config['admin_css_url'] = $config['public_url'] . '/stylesheet/admin';

// some url for home model
$config['home_css_url'] = $config['public_url'] . '/stylesheet/home';


// some image url
$config['public_img_url'] = $config['public_url'] . '/images';


// fonts url
$config['fonts_url'] = $config['public_url'] . '/fonts';