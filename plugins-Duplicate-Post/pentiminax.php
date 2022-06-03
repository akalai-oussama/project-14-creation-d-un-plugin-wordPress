<?php

/*
Plugin Name: dupliquer
Plugin URI: https://github.com/Mohamed-Yahyaa/Projet-14-Creer-un-plugin-Wordpress-from-scratch
Description: Permet de dupliquer le articles de WordPress !
Version: 0.1
Author: oussama akalai
Author URI: https://github.com/akalai-oussama
*/

use Pentiminax\DuplicatePost\PentiminaxPlugin;

if ( ! defined( 'ABSPATH' ) )
	exit;

define('PENTIMINAX_PLUGIN_DIR', plugin_dir_path(__FILE__));

require PENTIMINAX_PLUGIN_DIR . 'vendor/autoload.php';

$plugin = new PentiminaxPlugin(__FILE__);