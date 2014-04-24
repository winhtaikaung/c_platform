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

/*;
$route['404_override'] = '';*/

//making default controller
$route['default_controller'] = "panel/index";

$route['admin']='admin';
$route['admin/notify']='admin/notification';
$route['admin/windows']='admin/windows';

$route['admin/getdata']='admin/getcount';

$route['product/insert']='product/insert';
$route['product/viewall']='product/viewall';
#The duplicate route with parameter(:any) is get method & without parameter was post



$route['uom/insert']='uom/insert';
$route['uom/update']='uom/post_update';
$route['uom/update/(:any)']='uom/get_update/$1';

$route['uom/trash']='uom/view_trash';
$route['uom/viewall']='uom/viewall';
$route['uom/del/(:any)']='uom/delete/$1';
$route['uom/recipe/(:any)']='uom/recipe/$1';

$route['category/viewall']='category/viewall';
$route['category/insert']='category/insertcategory';

/*$route['category']='category';
$route['category/create.jsp']='category/insert';
$route['category/update']='category/update';
$route['category/edit/(:any)']='category/edit/$1';

$route['mail']='mail/index';
$route['mail/send']='mail/send_mail';*/






/* End of file routes.php */
/* Location: ./application/config/routes.php */