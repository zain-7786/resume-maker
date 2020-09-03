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
|	https://codeigniter.com/user_guide/general/routing.html
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
$route['default_controller'] = 'Signin_Controller';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

//Authentications
$route['login'] = 'Signin_Controller';
$route['sign_in'] = 'Signin_Controller/login';
$route['signin'] = 'Signin_Controller/index';
$route['signup'] = 'Signup_Controller/index';
$route['sign_up'] = 'Signup_Controller/validation';

//Dashboard
$route['dashboard'] = 'Dashboard_Controller/index';
$route['dashboard/logout'] = 'Dashboard_Controller/logout';

//Personal_Info
$route['profile'] = 'Personal_Info_Controller/personal_info';
$route['profile/'] = 'Personal_Info_Controller/personal_info';
$route['profile/personal_info'] = 'Personal_Info_Controller/personal_info';
$route['profile/add_personal_info'] = 'Personal_Info_Controller/personal_info_valid';
$route['profile/update_personal_info'] = 'Personal_Info_Controller/personal_info_valid';

//Experiences
$route['profile/experiences'] = 'Experiences_Controller/experiences';
$route['profile/add_experience'] = 'Experiences_Controller/add_experience';
$route['profile/delete_experience/(:num)'] = 'Experiences_Controller/delete_experience/$1';
//$route['profile/education'] = 'Experiences_Controller/experiences_valid';
$route['profile/update_experience/(:num)'] = 'Experiences_Controller/update_experience/$1';

//Educations
$route['profile/educations'] = 'Educations_Controller/educations';
// $route['profile/project'] = 'Educations_Controller/s';
$route['profile/add_education'] = 'Educations_Controller/add_education';
$route['profile/delete_education/(:num)'] = 'Educations_Controller/delete_education/$1';
$route['profile/update_education/(:num)'] = 'Educations_Controller/update_education/$1';

//Projects
$route['profile/projects'] = 'Projects_Controller/projects';
//$route['profile/social_profile'] = 'Projects_Controller/projects_valid';
$route['profile/add_project'] = 'Projects_Controller/add_project';
$route['profile/delete_project/(:num)'] = 'Projects_Controller/delete_project/$1';
$route['profile/update_project/(:num)'] = 'Projects_Controller/update_project/$1';


//Social_Profiles
$route['profile/social_profiles'] = 'Social_Profiles_Controller/social_profiles';
$route['profile/done'] = 'Social_Profiles_Controller/social_profiles_valid';
$route['profile/update_social_profiles'] = 'Social_Profiles_Controller/social_profiles_valid';
//CV preview
$route['profile/preview'] = 'Preview_Controller/preview_cv';
$route['profile/preview/(:any)'] = 'Preview_Url_Controller/preview_cv/$1';

// $route['profile/experience_deleted'] = 'Dashboard_Controller/experience_deleted';

// $route['profile/delete_data'] = 'Dashboard_Controller/delete_experience';

/*
$route['admin']='admin/Admin_Controller';
$route['admin/(:any)']='admin/Admin_Controller/$1';
$route['admin/(:any)/(:any)']='admin/Admin_Controller/$1/$2';
$route['admin/(:any)/(:any)/(:any)']='admin/Admin_Controller/$1/$2/$3';*/
//$route['front/cart'] = 'front/cart/index';
/*

*/