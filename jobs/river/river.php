<?php
echo "
<h2>The Riverwalk Gateway</h2>
<div id=\"jobs\">
<img src=\"jobs/river/riverwalkgateway_2.jpg\" alt=\"Riverwalk Gateway\">
<p>This project included a public art component.  Much of the surface of our panels was covered with artist-created tiles depicting the history of Chicago.  For more details on the tiles, see <a href=\"http://www.findarticles.com/p/articles/mi_m1248/is_3_89/ai_71558203\" target=\"_new\">www.findarticles.com/p/articles/mi_m1248/is_3_89/ai_71558203</a></p>
<br><img src=\"jobs/river/2entrytogateway_1.jpg\" alt=\"Entry to Riverwalk Gateway\">";

include("jobs/data/thumbs.php");
			
echo "<div id=\"jthumbs\"><p class=\"jhead\">Click a photo below for a larger version:</p>";

$num = "1";
while ($river[$num]){
	echo "<a href=\"index.php?page=viewer&amp;jname=river&amp;num=".$num."\"><img src=\"jobs/river/thumb/{$river[$num][0]}\" height=\"{$river[$num][1]}\" width=\"{$river[$num][2]}\" alt=\"{$river[$num][3]}\"></a>";
	$num++;
}
echo "</div>";


?>