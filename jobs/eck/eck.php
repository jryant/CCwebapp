<?php
echo "
<h2>Eck Center- Notre Dame, IN</h2>
<p>This is a sample of the work done for the Eck Center.</p>";

include("jobs/data/thumbs.php");
				
echo "<div id=\"jthumbs\"><p class=\"jhead\">Click photo below for a larger version:</p>

<a href=\"jobs/eck/eck_1.jpg\" target=\"_new\"><img src=\"jobs/eck/{$eck[1][0]}\" height=\"{$eck[1][1]}\" width=\"{$eck[1][2]}\" alt=\"{$eck[1][3]}\"></a></div>";

?>