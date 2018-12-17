<?php	
include("simple_html_dom.php");

	//get data
	$html = file_get_html('https://wordpress.com/create-blog/');

	//init
	$matches = array();
	//Here’s the code for grabbing the images
	$output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $html, $matches,PREG_SET_ORDER );
	//display
	echo "<pre>";
	print_r($matches);
	echo "</pre>";
	//display
	echo "<p>" . count($matches) . " matches found</p>";
?>