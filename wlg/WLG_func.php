<?php

	header('Access-Control-Allow-Origin: *');
  
	$test = 0;
	
	for ($i = 0; $i < 6; $i++) {
	
		if(!$test) {
		
			$html = file_get_contents('http://www.randomamazonproduct.com/');
			libxml_use_internal_errors(true); //Prevents Warnings, remove if desired
			$dom = new DOMDocument();
			$dom->loadHTML($html);
			$body = "";
			
			foreach($dom->getElementsByTagName("span")->item(0)->childNodes as $child) {
				$body = $dom->saveHTML($child);
			}
		
			$arr_items[$i] = $body;
			
			echo '<li class=\"item\">' . $body . '.</li>';

		} else {
			echo '<li class=\"item\">Heirloom Finds Be Still and Know That I am God Psalm 46:10 Scripture Twist Bangle Bracelet in Silve</li>';
		}
		
	}
	
?>