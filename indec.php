
<?php
include("simple_html_dom.php");
$html = file_get_html('https://dir.indiamart.com/impcat/iball-computer-keyboard.html');

foreach($html->find('.lg') as $element1) 
      echo $element1->plaintext . '<br>';
	   
	   
	   
?>