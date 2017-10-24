<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['books/update'] = 'books/update';
$route['books'] = 'books/index';
$route['books/create'] = 'books/create';
$route['default_controller'] = 'bookshops/view';
$route['(:any)'] = 'bookshops/view/$1';
$route['books/(:any)'] = 'books/view/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
