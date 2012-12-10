<?php

$jname = $_GET['jname'];
$num = $_GET['num'];
require_once("poty_data.php");
// get all published years from poty_data...
 $potyyears = array_keys($potties);

if ($jname=="test"){
	echo "<h2>Viewer test page</h2>";
	$path = "images/";
	$pic = "blank600.gif";
	$desc = "some description";
	$name = "";
	$num = 0;
}
elseif (in_array($jname, $potyyears)){
	$title = "{$potties[$jname]['name']}";
	$path = "jobs/poty/$jname/";
	$pic = "{$potties[$jname]['photos'][$num][0]}";
	$desc = "{$potties[$jname]['photos'][$num][3]}";
	$page = "poty&amp;year";
	$name = "Project of the year: ".$jname;
	$current = "{$potties[$jname]['photos'][$num]}";
	$is_poty = TRUE;
}
else {
	include("jobs/data/thumbs.php");
	$title = "{$jobs[$jname]}";
	$path = "jobs/$jname/";
	$pic = "{${$jname}[$num][0]}";
	$desc = "{${$jname}[$num][4]}";
	$page = "jobs&amp;job";
	$name = "{$jobs[$jname]}";
	$current = $$jname[$num];
	$is_poty = FALSE;
}

$prevnum = $num-1;
$nextnum = $num+1;

if (!$is_poty){
	if (in_array(${$jname}[$prevnum], ${$jname})){
		$prev = "<p class=left><a class=vlink href=index.php?page=viewer&amp;jname=".$jname."&amp;num=".$prevnum.">Previous</a></p>";
	}
	else {
		$prev = "<p class=bleft>&nbsp;</p>";
	}
	if (in_array(${$jname}[$nextnum], ${$jname})){
		$next = "<p class=right><a class=vlink href=index.php?page=viewer&amp;jname=".$jname."&amp;num=".$nextnum.">Next</a></p>";
	}
	else {
		$next = "<p class=bright>&nbsp;</p>";
	}
}

else {
	if (in_array($potties[$jname]['photos'][$prevnum], $potties[$jname]['photos'])){
		$prev = "<p class=left><a class=vlink href=index.php?page=viewer&amp;jname=".$jname."&amp;num=".$prevnum.">Previous</a></p>";
	}
	else {
		$prev = "<p class=bleft>&nbsp;</p>";
	}
	if (in_array($potties[$jname]['photos'][$nextnum], $potties[$jname]['photos'])){
		$next = "<p class=right><a class=vlink href=index.php?page=viewer&amp;jname=".$jname."&amp;num=".$nextnum.">Next</a></p>";
	}
	else {
		$next = "<p class=bright>&nbsp;</p>";
	}
}


/* 
else {
	if (in_array(${$jname}[$prevnum], ${$jname})){
		$prev = "<p class=left><a class=vlink href=\"index.php?page=viewer&jname=2004&num=$prevnum\">Previous</a></p>";
	}
//	if (in_array($potties[$jname]['photos'][$nextnum][0], $potties[$jname]['photos'][$nextnum]){
//		$next = "<p class=right><a class=vlink href=index.php?page=viewer&jname=$jname&num=$nextnum>Next</a></p>";
//	}
}
*/


echo "<center>
<div id=viewer-top>".$prev.$next."<h2>".$title."</h2></div>
<div id=viewer-desc>".$desc."</div>
<div id=viewer-main><img src=".$path.$pic.">";

// below is link for hi res img
$filename = $path."hires/".$pic;
if (file_exists($filename)){
	echo "<p class=enlarge>This photo is also available in a <a href=".$path."hires/".$pic." target=\"_blank\">larger resolution</a>.</p>";
}

echo "<p class=viewbase>Back to <a href=index.php?page=".$page."=".$jname.">".$title."</a></div></center>";


?>