<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['services/(:any)'] = 'Services/Detail';
$route['projects/(:any)'] = 'Projects/Detail';
$route['default_controller'] = 'Home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
