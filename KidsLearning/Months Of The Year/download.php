<?php
include_once 'simple_html_dom.php';
$html = file_get_html('http://www.kidsfront.com/words/months_of_the_year.html');

// Find all images 
//foreach($html->find('img') as $element) 
//{
       //echo "<a href='http://www.kidsfront.com/words/".$element->src."'>".$element->src."</a><br>";
	//   file_put_contents("KidsBodyParts/"."http://www.kidsfront.com/words/".$element->src, fopen($img, 'r'));
	   //file_put_contents("manual", file_get_contents("http://www.kidsfront.com/words/".$element->src));
//}
foreach($html->find('img') as $e){
    $img = "http://www.kidsfront.com/words/".$e->src;
  //echo "<a href='".$e->src ."'>.$e->src .</a><br>";
	$myArray = explode('/', $img);
		//echo $myArray['6']."<br>";
		//print_r($myArray);
		file_put_contents("img/".$myArray['6'], fopen($img, 'r'));
		//echo $img."<br>";
}
?>