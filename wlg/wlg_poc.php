<!DOCTYPE html>
<html>
	<head>
		<title>With List Generator</title>
	</head>
	<body>
		
		<h2>Wish List</h2>
		<ol>
	
		<?php
			//echo "Hello";
			
			for ($i = 0; $i < 6; $i++) {
			
				$html = file_get_contents('http://www.randomamazonproduct.com/');
				libxml_use_internal_errors(true); //Prevents Warnings, remove if desired
				$dom = new DOMDocument();
				$dom->loadHTML($html);
				$body = "";
				
				//foreach($dom->getElementsByTagName("body")->item(0)->childNodes as $child) {
				//	$body .= $dom->saveHTML($child);
				//}
				
				foreach($dom->getElementsByTagName("span")->item(0)->childNodes as $child) {
					$body = $dom->saveHTML($child);
				}
			
				$arr_items[$i] = $body;
				
				echo '<li>' . $body . '</li>';
				
			}
			
		?>
		
		</ol>
		
	</body>
</html>