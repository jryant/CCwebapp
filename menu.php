<?php
require_once("init.php");

echo "<!-- GENERATED MENU BLOCK -->
<div id=\"navcontainer\">
	<ul id=\"navlist\">";

foreach($sections as $ar_page => $ar_section){
	if ($page==$ar_page){
		$dal = "
		<li id=\"active\"><a class=\"current\" href=\"index.php?page=".$ar_page."\">$ar_section</a></li>";
	}
	else {
		$dal = "
		<li><a class=\"hzmkey\" href=\"index.php?page=".$ar_page."\">$ar_section</a></li>";
	}
	echo $dal;
}

echo "
	</ul>
</div>
<!-- END GENERATED MENU BLOCK -->\n";

?>