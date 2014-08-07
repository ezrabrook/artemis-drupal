<?php
	
	echo "<div class=\"areaoffocus\">\n";
	
	echo "\t<div class=\"focustitle\">\n";
	echo $field_branding_photo[0]["view"];
	echo "\t\t<h2>".$title."</h2>\n";
	echo "\t\t<div class=\"teaser\">".$field_teaser_description[0]["value"]."</div>\n";
	echo "\t</div>\n";
	
	echo $body;
	
	echo "</div>\n";