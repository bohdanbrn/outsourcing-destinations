<?php
/*
    Plugin Name: Outsourcing destinations
    Description: Outsourcing destinations
    Author URI: https://www.facebook.com/profile.php?id=100003936097779
    Version: 1.0
*/

/*  Copyright 2017

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/


//checking whether the script is not called directly
if ( !defined( 'ABSPATH' ) ) {
    exit; // don't access directly
};


//creating a menu for managing the plugin
require_once('includes/menus.php');

//functions for creating custom tables for plugin
require_once('includes/custom_db.php');

//create a custom DB tables when the plugin is activated
register_activation_hook(__FILE__,'create_destinations_tables');

?>