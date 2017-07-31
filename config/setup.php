<?php

// Setup File:

error_reporting(0);

#Database connection :
include('config/connection.php');


# Constants :
DEFINE('D_TEMPLATE', 'template'); //template folder


# Functions :
include('functions/sandbox.php');
include('functions/data.php');
include('functions/template.php');

# Site Setup:
$debug = data_settings_value($dbc, 'debug-status');

$path = get_path();


$site_title = "LifeLineGo 1.0";



if(!isset($path['call_parts'][0]) || $path['call_parts'][0] == '') {

	//$path['call_parts'][0] = 'home'; // set the $pageid to the value given in url ?page=x
    header('Location: home');
}


#page setup here
$page = data_page($dbc, $path['call_parts'][0]);




?>