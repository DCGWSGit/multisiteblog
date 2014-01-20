<?php
/*
Plugin Name: Multi Site Blog Upload
Plugin URI: http://dcgws.com/
Description: For adding blog from non-wordpress site.
Version: 1.0 beta
Author: The DCGWS Team
*/

function activate(){
	// DB setup here
	
}

register_activation_hook( __FILE__, 'activate' );

function deactivate(){
	//DB Removal here
}

register_deactivation_hook( __FILE__, 'deactivate' );




Class remotePost{

}