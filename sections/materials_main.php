<?php
include("materials_descriptions.php");

$materials = array(
"arch" => array("code"=>"arch","name"=>"Architectural Precast Concrete"),
"cstone" => array("code"=>"cstone","name"=>"Cast Stone"),
"gfrc" => array("code"=>"gfrc","name"=>"GFRC - Glass Fiber Reinforced Concrete"),
"gfrg" => array("code"=>"gfrg","name"=>"GFRG/GRG - Glass Fiber Reinforced Gypsum"),
"tcotta" => array("code"=>"tcotta","name"=>"Terra Cotta"),
"frp" => array("code"=>"frp","name"=>"FRP - Fiber Reinforced Polymer/Plastic"),
"mosaic" => array("code"=>"mosaic","name"=>"Mosaics")
);

//echo "
//<ul type='disc'>\n";
//
//foreach ($materials as $material){
//	echo "<li><a href='#{$material['code']}'>{$material['name']}</a>\n";
//}

echo "
<h1>Materials</h1>

<p>Below are brief overviews of our materials. Besides very basic information on the materials, we try to address some of the problematic areas we regularly encounter in contract documents. And we indicate some (by no means all) of the specifics of the materials we supply. Only by looking at the specifics of a project can we determine if it makes sense for us to bid it.</p>

<p>Because the language of construction and architecture is often imprecise, we make comments on usages that are frequent causes of confusion. Some of this confusion arises from suppliers, manufacturers, and trade associations who want to associate their particular product with another product that is more expensive or higher in status. We are not in business as an educational provider, and so these write-ups are not at all comprehensive. We hope they are useful to you.</p>

<p>We are available to review projects and construction documents on a fee-for-service basis. Contractors give us work and architects like working with us precisely because we are knowledgeable and not tied to one material. Because we understand the \"ins and outs\" of multiple overlapping materials, we can maintain product-neutrality and recommend what is best for the project.</p>

<table border=\"0\" cellspacing=\"10\" cellpadding=\"0\" align=\"center\">
	<tr>
		<td>&bull; <a href=\"#arch\">Architectural Precast Concrete</a></td>
		<td>&bull; <a href=\"#cstone\">Cast Stone</a></td>
	</tr>
	<tr>
		<td>&bull; <a href=\"#gfrc\">GFRC - Glass Fiber Reinforced Concrete</a></td>
		<td>&bull; <a href=\"#gfrg\">GFRG/GRG - Glass Fiber Reinforced Gypsum</a></td>
	</tr>
	<tr>
		<td>&bull; <a href=\"#tcotta\">Terra Cotta</a></td>
		<td>&bull; <a href=\"#frp\">FRP - Fiber Reinforced Polymer/Plastic</a></td>
	</tr>
	<tr>
		<td colspan=\"2\">&bull; <a href=\"#mosaic\">Mosaics</a></td>
	</tr>
</table>
";

foreach ($materials as $material){
	$desc_current = $material['code']."_desc";
	echo "
<hr>
<a name='{$material['code']}'></a>
<h2>{$material['name']}</h2>
{$descriptions[$material['code']]}
<p class=\"toplink\"><a href=\"#top\">(top)</a></p>";
}


?>