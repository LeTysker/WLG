<?php

	header('Access-Control-Allow-Origin: *');
  
	$test = 0;
	
		if(!$test) {
		
			$html = file_get_contents('http://www.randomking.com/');
			libxml_use_internal_errors(true); //Prevents Warnings, remove if desired
			$dom = new DOMDocument();
			$dom->loadHTML($html);
			$body = "";
			
			$i = 0;
			foreach($dom->getElementsByTagName("h3") as $item) {
				echo '<li class="item" id="item' . $i . '">' . $item->textContent . '.</li>';
			}
			
		} else {
		
			$html = file_get_contents('https://www.amazon.com/Best-Sellers/zgbs/');
			libxml_use_internal_errors(true); //Prevents Warnings, remove if desired
			$dom = new DOMDocument();
			$dom->loadHTML($html);
			$body = "";
			
			$i = 0;
			foreach($dom->getElementsByTagName("span") as $item) {
				if($item->getAttribute('class') == "zg_title") {
					echo '<li class="item" id="item' . $i . '">' . trim($item->textContent) . '.</li>';
					$i++;
				}
			}
		
	}

?>