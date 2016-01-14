<?php
/*
	Author: Matsu
	Filename: setup.php
	Directory: base/locales/english/
	Description: English locale file for setup.php
	Last Modified: 2016/01/11/20:30 - GMT+2:00 time
*/
require_once '../functions.php';




// Header for setup in english is setup_eng

// Basic info section
$locale['setup_title'] = "Installer of CMS";
$locale['setup_description'] = "This script will install CMS on your server";
$locale['setup_ending_info'] = "Installation completed! Remove setup.php file from the server";

//Request for user section
$locale['setup_database_request'] = "Fill the form above with your database details";
$locale['setup_admin_user_request'] = "Fill the form above with the supervisor user details";
$locale['setup_meta_request'] = "Fill the form above with your meta data like: site title, site keywords and site author";

// Error handling
$locale['setup_error_general message'] = "Error occurred. Details will be displayed below in error box";
?>