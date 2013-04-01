<?php
require_once("init.php");
$page = "index";
$job = $_GET['job'];
if (isset($_GET['page'])){
	$page = $_GET['page'];
}
if ($job == ""){
	if (isset($_GET['job'])){
		$job = $_GET['job'];
	}
}

include("includes/header.php");

echo "\n<!-- /SIDEBAR CONTENT -->\n<!-- MAIN CONTENT -->\n<div id=\"maincontainer\"";
echo ($page=="quicklook") ? " class=\"ql_container\"" : "" ;
echo ">\n";
echo ($page=="quicklook") ? "<center>" : "" ;

if (isset($job)){
	include("jobs/{$job}/{$job}.php");
}
else {
	include("sections/{$page}_main.php");
}

echo ($page=="quicklook") ? "</center>" : "" ;
echo "\n</div>\n<!-- /MAIN CONTENT -->";

include("includes/footer.php");

?>