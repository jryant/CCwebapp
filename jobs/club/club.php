<?php
echo "
<h2>The Clubhouse Restaurant</h2>
<p>While interior tenant spaces change regularly at the Oak Brook Mall in Illinois, it was unusual for the exterior at the new Clubhouse restaurant to be totally redone.  The old exterior was torn down and rebuilt in precast and thin veneer brick.</p>
<p>As with other tenant build outs, the completion schedule for this project was fast track. Cary Concrete Products began talking with the Architect and Contractor before the drawings were done, in September.  The restaurant was to be open in December.  Cary Concrete Products kept in close contact with the Architect and Structural Engineer to coordinate design and connection details before the final construction drawings were released.</p>
<p>Before fabrication could begin, the jointing of all the pieces needed to be coordinated with the coursing of the thin brick which was being used for the veneer, and a roof height which changed several times. Also, field dimensions needed to be taken, since the new facade was to fit between existing construction at both sides.</p>
<p>Repetition of several of the smaller pieces allowed the precast at the base to be started, and the wall to start being built before the top precast pieces were fabricated. The same form was used in the shop, just the length of the pieces was changed.  Therefore, there was no time delay in making new forms. Several of the same pieces could be sent out on each shipment.</p>";

include("jobs/data/thumbs.php");
				
echo "<div id=\"jthumbs\"><p class=\"jhead\">Click a photo below for a larger version:</p>";

$num = "1";
while ($club[$num]){
	echo "<a href=\"index.php?page=viewer&amp;jname=club&amp;num=".$num."\"><img src=\"jobs/club/thumb/{$club[$num][0]}\" height=\"{$club[$num][1]}\" width=\"{$club[$num][2]}\" alt=\"{$club[$num][3]}\"></a>";
	$num++;
}
echo "</div>";

?>