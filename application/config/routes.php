<?php
defined('BASEPATH') OR exit('No direct script access allowed');

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
|	https://codeigniter.com/userguide3/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'welcome';
$route['UserLogin'] = 'UserLogin';
$route['UserLogin'] = 'UserLogin';
// $route['user']='User/Product_show';
$route['user/userSignUp']='UserLogin/signup';

$route['admin']='Admin/admin';
$route['admin/dashboard']='Admin/dashboard';

$route['admin/category']='Admin/Category';
$route['admin/category/(:any)'] = 'Admin/Category/$1';
$route['admin/categoryshow'] = 'Admin/Categoryshow';
$route['admin/categoryshow/(:any)'] = 'Admin/Categoryshow/$1';

$route['admin/forgotpass']='Admin/Forgotpass';
$route['admin/forgotpass/(:any)']='Admin/forgotpass/$1';

$route['admin/Changepass']='Admin/Changepass';
$route['admin/otpconfirm']='Admin/Otp';

$route['admin/product'] = 'Admin/Product';
$route['admin/product/(:any)'] = 'Admin/Product/$1';
$route['admin/productshow'] = 'Admin/Productshow';
$route['admin/productshow/(:any)'] = 'Admin/Productshow/$1';

$route['admin/order'] = 'Admin/Order';
$route['admin/soldorder'] = 'Admin/Soldorder';
$route['admin/signup']='Admin/Signup';
$route['admin/(:any)']='Admin/admin/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
