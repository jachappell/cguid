<?php

// Custom GUID
// version 0.1, 2013-12-08
//
// Copyright (c) 2013 James A. Chappell
// http://www.storage-b.com/
//
// This is an add-on for WordPress
// http://wordpress.org/
//
// **********************************************************************
// This program is distributed in the hope that it will be useful, but
// WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. 
// *****************************************************************

/*
Plugin Name: Custom GUID
Plugin URI: http://www.storage-b.com/php/284
Description: Modify the Wordpress post guid in the rss feed
Version: 0.1
Author: James A. Chappell
Author URI: http://www.storage-b.com
*/ 

function cguid($guid)
{
  global $post;
  
  $d = $post->post_date; 

  $new_guid = $guid . "?" . substr($d, 0, 10);
  return $new_guid;
}

add_filter('get_the_guid', 'cguid');

?>

