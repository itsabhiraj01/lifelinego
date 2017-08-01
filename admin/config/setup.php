<?php

// Setup File:


error_reporting(0);

#Database connection :
include('../config/connection.php');


# Constants :
DEFINE('D_TEMPLATE', 'template'); //template folder


# Functions :
include('functions/data.php');
include('functions/template.php');
include('functions/sandbox.php');

# Site Setup:
$debug = data_settings_value($dbc, 'debug-status');


$site_title = "LifeLineGo";



if(isset($_GET['page'])) {

	$page = $_GET['page']; // set the $pageid to the value given in url ?page=x

} else {

	$page = 'dashboard'; //set $pageid equal to 1 or home page

}


#page setup here
include('config/queries.php');




# User setup:
$user = data_user($dbc, $_SESSION['username']);
?>