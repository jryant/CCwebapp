<?php
echo "
<h2>Lakeview High School Campus Park Benches</h2>
<p>These benches are in a park next to a high school. This project was an unusual combination of public works (procurement method of the raw concrete benches) and public art (ultimate goal and the method by which benches were tiled). The unadorned benches were supplied (by Cary Concrete) and installed as part of a normal school or park district contract. We bid to the GC who was the successful low public bidder. The benches then had mosaic tiles applied to them, outside of the normal public works contract.. Design and execution of the mosaics was by a group of students in the school in conjunction with artists associated with the Chicago Public Art Group. However, we informally worked extensively with the art teacher at Lake View High School to define details that would facilitate putting the mosaic onto the benches. These details were reflected in our shop drawings and then in the final product.</p>

<p>For more info on this interesting project (and others as well) from a Public Art perspective, go to <a href=\"http://www.cpag.net/guide/5/5_pages/5_6_03.htm\">www.cpag.net/guide/5/5_pages/5_6_03.htm</a></p>";

include("jobs/data/thumbs.php");
				
echo "<div id=\"jthumbs\"><p class=\"jhead\">Click a photo below for a larger version:</p>";

$num = "1";
while ($lakeview[$num]){
	echo "<a href=\"index.php?page=viewer&amp;jname=lakeview&amp;num=".$num."\"><img src=\"jobs/lakeview/thumb/{$lakeview[$num][0]}\" height=\"{$lakeview[$num][1]}\" width=\"{$lakeview[$num][2]}\" alt=\"{$lakeview[$num][3]}\"></a>";
	$num++;
}
echo "</div>";


?>