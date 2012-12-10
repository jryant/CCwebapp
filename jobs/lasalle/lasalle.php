<?php
echo "
<h2>Lasalle Street Plaza</h2>
<p>The renovation of the LaSalle Street Bridge over Carroll Street and tracks, just north of the Chicago River, created a monumental new gateway into the loop area of downtown Chicago.  Working around the constraints of an existing bridge deck, Cary Concrete Products worked closely with the CDOT design team and the contractor to create a workable solution to several complex design issues. 

<p>The plaza handles continual pedestrian traffic and aesthetically the precast needed to meet the multi-color and texture requirements of the design program that was intended to relate to surrounding buildings.  On the bridge walkway, the design Architect accomplished this by using deep insets of diamond shaped dark colored tile. On another inset plane, a coordinating color of reddish exposed aggregate ran in the same diamond motif. The front face was a standard acid wash in a light tan color. The combination of colors and textures is an eye-catching combination, unexpected on a bridge barrier.

<p>Since the barrier wall is visible from two sides, ornamentation needed to be replicated on both sides of each wall.  Precast concrete is cast in a negative form, and the \"back-side\" of the pieces cannot be cast with insets and patterns, as this is the side the concrete is poured into the form.  The solution, as Cary Concrete has done on other bridgework, was to use two panels as stay-in-place forms for cast-in-place concrete.  Between the two forms, the reinforcing and cast-in-place concrete was placed in the field. This concept also saves time in that the forms do not need to be removed. 

<p>This approach also aided the structural design of the barriers. The barriers had to serve as an AASHTO barrier for vehicular traffic. By placing the reinforcing in the center of the wall, the reinforcing could transfer the required loads to the bridge. 

<p>The third challenge in this project, after uniting visual appeal with strength requirements, was the connection of the pieces to the existing structure.  This is a challenge on any job, but in this case, with the curvature of the bridge deck, each connection needed to be addressed separately. Existing deck edge and other conditions had to also be carefully taken into account.

<p>In addition to the barrier wall along the bridge, Cary Concrete worked with <a href=\"http://www.allenmetals.com/\">Allen Architectural Metals, Inc.</a> to coordinate the insets at the metal work that wraps the pylons. The close integration of the two different materials creates a stunning vertical presence at focal points along the bridge. The metal work is unusual. The sheathes of wheat are very striking.

<p>As with many construction projects involving traffic, the schedule on this project was very tight so as to minimize the downtime for the bridge. Cary Concrete Products kept in touch with the parties involved.  Upon completion, a commissioned sculpture was placed at the center of the small pedestrian plaza.</p>";

include("jobs/data/thumbs.php");
				
echo "<div id=\"jthumbs\"><p class=\"jhead\">Click a photo below for a larger version:</p>";

$num = "1";
while ($lasalle[$num]){
	echo "<a href=\"index.php?page=viewer&amp;jname=lasalle&amp;num=".$num."\"><img src=\"jobs/lasalle/thumb/{$lasalle[$num][0]}\" height=\"{$lasalle[$num][1]}\" width=\"{$lasalle[$num][2]}\" alt=\"{$lasalle[$num][3]}\"></a>";
	$num++;
}
echo "</div>";

?>