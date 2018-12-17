<?php
include("simple_html_dom.php");
	$html = file_get_html('https://wordpress.com/create-blog/');
$scriptDocument = new DOMDocument();
//disable libxml errors
libxml_use_internal_errors(TRUE); 
//check if any html is actually returned
if(!empty($html)){ 
	//loadHTML
	$scriptDocument->loadHTML($html);
	//clear errors for yucky html
	libxml_clear_errors(); 
	//init DOMXPath
	$scriptDOMXPath = new DOMXPath($scriptDocument);
	//get all the h2's with an id
	$scriptRow = $scriptDOMXPath->query('//h2[@id]');
	//check
	if($scriptRow->length > 0){
		foreach($scriptRow as $row){
			echo $row->nodeValue . "<br/>";
		}
	}
 
	//get all the h1's
	$scriptRow = $scriptDOMXPath->query('//h1');
	//check
	if($scriptRow->length > 0){
		foreach($scriptRow as $row){
			echo $row->nodeValue . "<br/>";
		}
	}
	//get all the unorder list
	$scriptRow = $scriptDOMXPath->query('//ul');
	//check
	if($scriptRow->length > 0){
		foreach($scriptRow as $row){
			echo $row->nodeValue . "<br/>";
		}
	}
	$scriptRow = $scriptDOMXPath->query('//div');
	//check
	if($scriptRow->length > 0){
		foreach($scriptRow as $row){
			echo $row->nodeValue . "<br/>";
		}
	}
}


?>