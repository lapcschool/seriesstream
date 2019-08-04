<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'Home/view';
$route['(:any)'] = 'Home/view/$1';
<<<<<<< HEAD
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['home/trailers'] = 'Home/trailers';

$route['home/nosotros'] = 'Home/nosotros';

$route['home/contacto'] = 'Home/contacto';
=======

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
>>>>>>> ed7a1ac433158e17e042d1d147cc64e30901f5a8
