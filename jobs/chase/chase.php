<?php
echo "
<h2>Bank One/Chase Branch Bank 230 W. Grand Ave., Chicago</h2>
<p>We originally bid this as GFRC and for a number of reasons (cost, owner and architect's desire for integral color, framing design) we offered an FRP alternate to the GC and architect. We felt it was the material that best met their needs. The GC and architect had both done other branches for the bank. One of these included some fiberglass with which they were not happy (and for good reason, it looked sloppy). We did some research to understand the problem and the causes and advised them of the reasons. We assured them (and ourselves) that the problems were not inherent in the material and would not occur on this project (they had used one of the worst fabricators in the country and got their money's worth). We delivered as promised. Everyone was very pleased with the cornice, both consistency of profile and consistency of color and finish.</p>

<p>One reason it looked crisp (in addition to excellent mold work by the fabricator) was that great care was taken in the installation. We worked carefully with the GC and then with the subcontractor (who was responsible both for all the framing and for installing the cornice). Critical to the success was the cooperation and involvement among everyone - project managers, superintendent, foremen for both GC and installer. There were joint reviews of installation procedures and frank exchanges of concerns. During this back-and-forth process the installer requested templates to use in keeping the framing within tighter than normal tolerances. That was required for a good looking installation given the combination of this particular profile, fastening system and joint details. Rather than let this potential problem blossom into a bad situation that would then be their problem (one aspect of their prior experience with FRP) we pro-actively raised concerns and helped them do a fine job.</p>";

include("jobs/data/thumbs.php");
				
echo "<div id=\"jthumbs\"><p class=\"jhead\">Click a photo below for a larger version:</p>";

$num = "1";
while ($chase[$num]){
	echo "<a href=\"index.php?page=viewer&amp;jname=chase&amp;num=".$num."\"><img src=\"jobs/chase/thumb/{$chase[$num][0]}\" height=\"{$chase[$num][1]}\" width=\"{$chase[$num][2]}\" alt=\"{$chase[$num][3]}\"></a>";
	$num++;
}
echo "</div>";
?>