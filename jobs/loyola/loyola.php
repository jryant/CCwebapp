<?php
echo "
<h2>Loyola Multi Purpose Facility</h2>
<p>The Loyola Multi Purpose Facility, dedicated as the Joseph Gentile Center, is located on the Loyola campus on Sheridan Road in Chicago. It was designed by Solomon, Cordwell &amp; Buenz. The extensive use of architectural precast inset into dark brick colors compliment the adjacent buildings.
<p>To accommodate many athletic uses on the interior, the outside of the building has several ins and outs, and roof elevations. A multitude of horizontal precast banding courses run around the building, including in the interior vestibules. These banding courses wrap around the contour of the building, and Cary Concrete paid very close attention to the detailing of the job to insure the pieces were made to the correct length, and exposed ends were finished properly.
<p>The large white precast pier caps accent the dark brick of the piers.  The weight of the thick caps required installing them in several pieces. Cary Concrete kept in close contact with the mason, Ceisel Masonry, to insure the proper equipment was at the site at the time the pieces were delivered, and installed. The front vertical face of each cap has two sloped insets that align with the vertical reveals in the brick piers. Completing the piers are large precast bases that also have sloped insets that align with the brick pier reveals.  The overall effect of the tall piers is a striking feature of the building. Between the piers are large, sloped precast soffit panels. The panels weigh several tons each, and are hung from an interior row of structural steel beams.  Due to the sloped shape, and heavy weight, the center of gravity as it related to the beam web was critical in the connection of the panels to the supporting beam. The connections were done with angles resting on the top flange of the beam.
<p>In addition to providing the architectural precast for the building, Cary Concrete was also asked to supply the site precast that surrounds the building.  This includes a center focal point of a circular, stepped planter, and several low wall bases and caps. The precast pieces for the site could not be fabricated until field measurements of the foundations for the walls and benches were taken. Once the measurements were taken, fabrication and delivery proceeded quickly to meet the deadline for the grand opening for the facility.</p>";

include("jobs/data/thumbs.php");
				
echo "<div id=\"jthumbs\"><p class=\"jhead\">Click a photo below for a larger version:</p>";

$num = "1";
while ($loyola[$num]){
	echo "<a href=\"index.php?page=viewer&amp;jname=loyola&amp;num=".$num."\"><img src=\"jobs/loyola/thumb/{$loyola[$num][0]}\" height=\"{$loyola[$num][1]}\" width=\"{$loyola[$num][2]}\" alt=\"{$loyola[$num][3]}\"></a>";
	$num++;
}
echo "</div>";

?>