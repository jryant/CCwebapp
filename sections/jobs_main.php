<?php
$jobs = array(
	'gfrc_frp' => "Thin Shell GFRC, GRG, and FRP Work",
	'cast' => "Cast Stone Work",
	'precast' => "Arch. Precast Concrete Work",
	'renovation' => "Renovation Work",
	'mosaic' => "Mosaic Work"
);

foreach ($jobs as $job_short=>$job_long){
	include("jobs/data/new_$job_short.php");
}

echo "<h1>Representative Projects</h1>";

echo "<p>The following is a listing of a modest number of various projects from our past. If a project has a more detailed description, you may follow the link in the job name. Jobs are sorted by category and listed alphabetically. Some jobs fall under multiple categoeries.</p>";

echo "
<table border=\"0\" cellspacing=\"10\" cellpadding=\"0\" align=\"center\">
	<tr>
		<td>&bull; <a href=\"#precast\">Arch. Precast Concrete Work</a></td>
		<td>&bull; <a href=\"#cast\">Cast Stone Work</a></td>
	</tr>
	<tr>
		<td>&bull; <a href=\"#renovation\">Renovation Work</a></td>
		<td>&bull; <a href=\"#gfrc_frp\">Thin Shell GFRC, GRG, & FRP Work</a></td>
	</tr>
	<tr>
		<td>&bull; <a href=\"#mosaic\">Mosaic Work</a></td>
		<td>&bull; <a href=\"index.php?page=poty\">Cool Project of the Year</a></td>
	</tr>
</table>";

include("poty_data.php");

# poty_menu is defined in poty_data.php
echo poty_menu("horiz",$potties,4);

//make, echo the menu
// echo "<ul>";
//foreach($jobs as $job){
//	$job_type_short = key($jobs);
//	$job_type_pretty = $job;
//
//	//use those variables to build the menu
//	echo "<li><a href=#$job_type_short>$job</a></li>";
//
//	next($jobs);
//}
//
//echo "</ul>";

reset($jobs);
foreach($jobs as $job_type_short => $job_type_pretty){

	echo "\n<hr><h2><a name=\"$job_type_short\">Past $job_type_pretty</a></h2><ol class=\"joblist\">\n";

	foreach ($$job_type_short as $jobsite){
		$name = $jobsite[0];
		$value = $jobsite[1];
		$location = $jobsite[2];
		$architect = $jobsite[3];
		$general = $jobsite[4];
		$mason = $jobsite[5];
		$material = $jobsite[6];
		$completed = $jobsite[7];

		echo "
<div class=\"jsection\">
<p style=\"font-size:0.9em;\" class=\"jlocation\">".$location."</p>
<p class=\"jname\">".$name."</p>
<p class=\"jobdetails\">
	<br><i>Architect:</i> ".$architect."
	<br><i>General:</i> ".$general;
		
	if (strlen($mason)>=1){
		echo "
	<br><i>Mason:</i> ".$mason;
	}
		
	echo "	
	<br><i>Materials Supplied:</i> ".$material."
	<br><i>Completion Date:</i> ".$completed."</p>
	<div class=\"jobvalue\">Approximate Value of Materials: ".$value."</div>
</div>";
	}

	echo "\n\n</ol><p class=\"toplink\"><a href=\"#top\">top</a></p>";

}
?>

<!--

	<table border=1 cols=2 cellspacing=0 cellpadding=0>
		<tr>
			<td align=right><li><i>Architect:</i></td><td>".$architect."</td>
		</tr>
		<tr>
			<td align=right><li><i>General:</i></td><td>".$general."</td>
		<tr>";
		
		if (strlen($mason)>=1){
			echo "
		<tr>
			<td align=right><li><i>Mason:</i></td><td>".$mason."</td>
		</tr>";
		}
		
		echo "	
		<tr>
			<td align=right><li><i>Materials Supplied:</i></td><td>".$material."</td>
		</tr>
		<tr>
			<td align=right><li><i>Completion Date:</i></td><td>".$completed."</td>
		</tr>
	</table>
-->