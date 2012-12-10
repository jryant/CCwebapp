<?php
echo "
<h2>The Glen Ellyn Public Library</h2>
<p>The Glen Ellyn Public library was a project which took a significant amount of detailing and layout time, but, as with anything that takes time and is thought through, the results were well worth the effort.</p>

<p>Each element, from the structural arches, to the many tiers of banding and accents were all coordinated, down to the vertical joint locations. Also, there are several vertical reveals around the building, which were accommodated with precisely located insets in all the pieces which passed through the reveals.</p>

<p>The structural reinforced arches are designed to carry the loads from above the walkway. The fabrication of the arches was complex since a strong \"gray\" mix was used for the structural panel portion of the arch. In additions, a \"white\" mix with finer aggregate was used for the exposed portion of the face and the bottom of the arch. The finer \"white\" mix was used to match the rest of the pieces, as well as to form a clean surface at the reveals and insets.</p>

<p>Cary Concrete was responsible for the shipping and placing the arches.  Each panel was several tons and over 12' high. The transporting and erecting of the panels was carefully addressed to avoid cracking and chipping.</p>

<p>Once the panels were in place, and the brick veneer was started, Cary Concrete kept in close contact with the mason, to insure the pieces were fabricated and shipped for the area of the building which would be worked on next.  Even when the scheduled area of work changed, Cary Concrete was able to coordinate the correct pieces getting to the site on time. Due to a tight site storage area, only enough pieces for a few days could be left to the site.</p>

<p>Many of the banding and accent pieces are made to exact lengths to fit the contours of the building. Also, many pieces had an exposed, finished end at the reveals. Each row of banding was drawn to insure proper placement of the pieces.</p>

<p>Cary Concrete worked with the Architect, Cordogan, Clark &amp; Associates during the detailing of the project, so that the design intent was carried out. Cary Concrete also worked with the general contractor, E.W. Corrigan, to insure proper timing and placement of all the precast.</p> ";

include("jobs/data/thumbs.php");
				
echo "<div id=\"jthumbs\"><p class=\"jhead\">Click a photo below for a larger version:</p>";

$num = "1";
while ($glen[$num]){
	echo "<a href=\"index.php?page=viewer&amp;jname=glen&amp;num=".$num."\"><img src=\"jobs/glen/thumb/{$glen[$num][0]}\" height=\"{$glen[$num][1]}\" width=\"{$glen[$num][2]}\" alt=\"{$glen[$num][3]}\"></a>";
	$num++;
}
echo "</div>";

?>