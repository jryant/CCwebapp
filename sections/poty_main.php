<?php
require_once("init.php");

require_once("poty_data.php");

if (!isset($_GET['year'])){
  $viewyear = $potties[key($potties)]['date'];
}
else {
  $viewyear = $_GET['year'];
}

//echo "<div align=center><i>Previous Projects:</i>";
//foreach ($potties as $key => $val) {
//	if ($key == $viewyear){
//		echo $key." ";
//	}
//	else {
//		echo "<a href=index.php?page=poty&amp;year=".$val['date'].">".$val['date']."</a> ";
//		echo $potties[$key]['date']." => ".$val['date']."<br>";
//	}
//}
//echo "</div>";

echo poty_menu("horiz",$potties);

echo "<h1>Project of the Year: ".$viewyear."</h1>\n";

echo "<h2>".$potties[$viewyear]['name']."</h2>";
if (isset($potties[$viewyear]['more'])){
	echo "<p>".$potties[$viewyear]['more']."</p>";
}
echo "<p><i>Location:</i> ".$potties[$viewyear]['location']."</p>";
echo "<p><i>Approximate Value:</i> ".$potties[$viewyear]['value']."</p>";
echo "<p><i>Scope:</i> ".$potties[$viewyear]['scope']."</p>";
echo "<p><i>Challenges:</i> ".$potties[$viewyear]['challenges']."</p>";
echo "<p><i>Architect:</i> ".$potties[$viewyear]['architect']."</p>";
echo "<p><i>General Contractor:</i> ".$potties[$viewyear]['general']."</p>";

echo "<div id=\"jthumbs\"><p class=\"jhead\">Click a photo below for a larger version:</p>";

$num = "1";
while ($potties[$viewyear]['photos'][$num]){
	echo "<a href=\"index.php?page=viewer&amp;jname=$viewyear&amp;num=$num\"><img src=\"jobs/poty/$viewyear/thumb/{$potties[$viewyear]['photos'][$num][0]}\" height=\"{$potties[$viewyear]['photos'][$num][1]}\" width=\"{$potties[$viewyear]['photos'][$num][2]}\" alt=\"{$potties[$viewyear]['photos'][$num][3]}\"></a>";
	$num++;
}
echo "</div>";

?>