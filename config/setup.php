<?php
// Setup File:

# Session Start
session_start();

error_reporting(0);

#Database connection :
include('config/connection.php');



# Constants :
DEFINE('D_TEMPLATE', 'template'); //template folder
DEFINE('D_VIEW', 'views'); //views folder


# Functions :
include('functions/sandbox.php');
include('functions/data.php');
include('functions/template.php');


# Site Setup:
$debug = data_settings_value($dbc, 'debug-status');
$path = get_path();

$site_title = "LifeLineGo 1.0";


#Redirect to home if slug is not set
if(!isset($path['call_parts'][0]) || $path['call_parts'][0] == '') {
	//$path['call_parts'][0] = 'home'; // set the $pageid to the value given in url ?page=x
    header('Location: home');

}


#page setup here
$page = data_post($dbc, $path['call_parts'][0]);
$view = data_post_type($dbc, $page['type']);



#Logout system here
if (strcasecmp($page['label'], 'logout') == 0) {
	unset($_SESSION['username']); // Delete the session key
	// session_destroy(); //This would delete all of the session key
	header('Location: home'); //redirect to login page
}


?>