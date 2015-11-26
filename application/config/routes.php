<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/

$route['default_controller'] = "login_controller/index";
$route['home'] = "login_controller/index";

$route['login'] = 'login_controller/login';
$route['logout'] = 'login_controller/logout';
$route['register'] = 'login_controller/register';

$route['createrecipe'] = 'recipe_controller/createrecipe';
<<<<<<< HEAD
$route['editrecipe'] = "recipe_controller/editrecipe";
$route['editrecipe/(:num)'] = "recipe_controller/editrecipe/$1";
=======
$route['editrecipe/(:any)'] = "recipe_controller/editrecipe/$1";
>>>>>>> 8ab34c54337abf9da4fcf4b100a4d2741f6fe32c




$route['404_override'] = '';


/* End of file routes.php */
/* Location: ./application/config/routes.php */