<?php
/*
/**
 
 * @package Akismet
 
 */
 
/*
 
Plugin Name: myshortcode_plugin
 
Plugin URI: https://myshortcode_plugin.com/
 
Description: This is a  shortcode plugin developed by myself for a testing purpose. It's only for a study purpose and check its working. It have a simple styling and appearance.
 
Version: 1.1
 
Author: GopikaChandran
 
Author URI: https://GopikaChandran.com/wordpress-plugins/
 
License: GPLv2 or later
 
Text Domain: myshortcode_plugin
 
*/
function shortcode_fun($atts)
{
	$a=shortcode_atts(array('name'=>'Gopika' , 'age'=>'23',), $atts);
	//return $a['name'] ."<br>". $a['age'];
?>

<h1> My name is <?php echo $a['name']; ?></h1>
<h4> My age is <?php echo $a['age']; ?></h4>
<?php
}
add_shortcode('myshortcode_plugin','shortcode_fun');